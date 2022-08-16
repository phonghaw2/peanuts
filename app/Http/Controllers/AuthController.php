<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    use ResponseTrait;


    public function register(Request $request)
    {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => ['required', 'min:6'],

            ]);
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->save();

            // $user = User::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'password' => Hash::make($request->password),
            // ]);
            Auth::login($user);
            return $this->successResponse();

            // return redirect()->to('/')->with('message', 'Thank you for updating your billing information.');
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
                    // $sessionArray = [
                    // 'userId' => $user->id ,
                    // 'userName' => $user->name,
                    // 'userRole' => $user->role,
                    // ];
                    // $request->session()->put('loginID' , $sessionArray);
                    auth()->login($user, true);
                    return $this->successResponse();
                } else {
                    return $this->errorResponse('password not match');
                }
            }else {
                return redirect()->route('home')->with('fail', 'This email is not registered');
            }


    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        session()->flush();
        return redirect()->back();
    }

    public function updateRole(Request $request)
    {
        try {
            $id = auth()->user()->id;

            User::where('id',$id)->update([
                'phone' => $request->phone,
                'city' => $request->city,
                'role' => 2,
            ]);
            return redirect()->route('posting.index');
            // return $this->successResponse();
        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }


    }

}
