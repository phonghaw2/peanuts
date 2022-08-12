<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ResponseTrait;

class AdminController extends Controller
{
    use ResponseTrait;


    public function test(){
        $hashed = '$10$Nvhh2PQ4Lb5rbatniKzDqeC/mdwdCZNG/6FT584ivaxEqtmyOs1.W';
        if (Hash::needsRehash($hashed)) {
            $hashed = Hash::make('Helenkyler123@');
        }
        dd($hashed);
    }
    public function index(){
        return View('admin.login');
    }

    public function dashboard(){
        return View('layout-backside.master');
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
            if (Hash::check($request->password, $user->password)) {
                auth()->login($user, true);
                return redirect()->route('admin.dashboard');
            } else {
                dd(Hash::make($request->password));
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
}
