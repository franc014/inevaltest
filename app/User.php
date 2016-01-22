<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'idn', 'lastname', 'firstname', 'birthdate', 'address', 'mobile', 'phone','role_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['isSuperAdmin'];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isSuperAdmin(){
        $role = $this->getRole();
        if($role=="Superadmin"){
            return true;
        }
        return false;
    }
    public function isAdmin(){
        $role = $this->getRole();
        if($role=="Admin"){
            return true;
        }
        return false;
    }
    public function isStudent(){
        $role = $this->getRole();
        if($role=="Student"){
            return true;
        }
        return false;
    }

    public function getIsSuperAdminAttribute(){
        if($this->isSuperAdmin()){
            return true;
        }
        return false;
    }

    public function getRole(){
        //$role = Auth::user()->role()->find($this->getAttribute('role_id'))->name;
        return Auth::user()->role->name;
        //return $role;
    }

}
