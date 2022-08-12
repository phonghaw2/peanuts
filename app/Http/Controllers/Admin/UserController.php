<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    private object $model;
    public function __construct()
    {
        $this->model = User::query();
    }
    public function index(request $request)
    {
        $selectedRole = $request->get('role');
        $selectedCity = $request->get('city');

        $query = $this->model->clone()
            ->latest()  ;
        if (!empty($selectedRole) && $selectedRole !== 'All' || $selectedRole == '0') {
            $query->where('role', $selectedRole);
        }
        if (!empty($selectedCity) && $selectedCity !== 'All') {
            $query->where('city', $selectedCity);
        }
        $data = $query->paginate(10)
            ->appends([
                'role' => $selectedRole,
                'city' => $selectedCity,
            ]);




        $roles = UserRoleEnum::asArray();

        $cities = $this->model->clone()
            ->distinct()
            ->pluck('city');





        return View('admin.users.index', [
            'data' => $data,
            'roles' => $roles,
            'cities' => $cities,
            'selectedRole' => $selectedRole,
            'selectedCity' => $selectedCity,
        ]);


    }
    public function destroy($userID) {
        User::destroy($userID);
        return redirect()->back();
    }

    

}
