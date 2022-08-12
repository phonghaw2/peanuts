<?php

namespace App\Models;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';


    protected $fillable = [
        'name',
        'email',
        'password',
        'city',
        'phone',
        'role',
    ];

    
    public function getRoleNameAttribute()
    {
        return UserRoleEnum::getKey($this->role);
    }
    public function getGenderNameAttribute()
    {
        return ($this->gender === 0) ? 'Male' : 'Female';
    }
}



