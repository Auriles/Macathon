<?php
/**
 * Created by PhpStorm.
 * User: drattak
 * Date: 05/10/16
 * Time: 23:56
 */

namespace App\Http\Controllers;


use App\Contributor;
use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RegisterContributorController
{
    public function create(){


        User::create([
            'firstname' => Input::get('firstname'),
            'pseudo' => Input::get('pseudo'),
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'password' => bcrypt(Input::get('password')),
            'phone' => Input::get('phone'),
            'address' => Input::get('address'),
            'city' => Input::get('city'),
            'zipcode' => Input::get('zipcode'),
            'state'=>Input::get('state'),
            'image' => Input::file('image')
        ]);

        $user = DB::table('users')->where('pseudo', Input::get('pseudo'))->first();
        Contributor::create([
            'device' => Input::get('device')+1,
            'experience' => Input::get('experience'),
            'userid' => $user->id
        ]);
        return view('/home');
    }
}