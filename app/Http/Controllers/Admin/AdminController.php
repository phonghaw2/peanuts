<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ResponseTrait;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    use ResponseTrait;


    public function test(){
        return View('admin.posts.modal');
    }



    public function index(){
        return View('admin.login');
    }


    public function dashboard()
    {
        $countPosts = DB::table('posts')
                ->select(DB::raw('count(*) as count_posts'))
                ->where('status', '0')
                ->first();
        $countUsers = DB::table('users')
                ->select(DB::raw('count(*) as count_users'))
                ->addSelect(DB::raw('count(case when role = 2 then 1 end) as count_hosts' ))
                ->first();
        return View('admin.dashboard',[
            'countPosts' => $countPosts,
            'countUsers' => $countUsers,
        ]);
    }

    public function signup(){
        return View('admin.signup');
    }

    public function register(request $request)
    {
        try {

            $request->validate([
                'name' => 'required',
                'email' => [
                    'required',
                    'email',
                    'unique:users,email'
                ],
                'password' => ['required', 'min:6'],
                'phone' => [
                    'required',
                    'min:6',
                    'numeric',
                    'digits_between:10,11',
                ],
                'city' => [
                    'required',
                    'string',
                    'max:50',
                ],

            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'city' => $request->city,
                'role' => UserRoleEnum::ADMIN,
                'password' => Hash::make($request->password),
            ]);


            return $this->successResponse(message:'Successfully Registed');


        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password) && $user->role == UserRoleEnum::ADMIN) {
                auth()->login($user, true);
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.index')->with('fail', 'password not match');
            }
        }else {
            return redirect()->route('admin.index')->with('fail', 'Check your email :v');
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        return redirect()->route('admin.index');
    }
    public function password()
    {
        return View('admin.password');
    }
    public function passwordProcessed(Request $request)
    {
        try {

            $request->validate([
                'old_password' => [
                    'required',
                    'current_password',
                ],
                'new_password' => [
                    'required',
                    'confirmed',
                ],
            ]);

           $user = User::find(Auth::id());
           $user->password = Hash::make($request->new_password);
           $user->save();
           $request->session()->regenerate();


            return $this->successResponse(message:'Your Password has been changed');


        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }

    }
}
