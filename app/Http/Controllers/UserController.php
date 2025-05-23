<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function login () {
        return "login";
    }
    public function register () {
        return "register";
    }
    public function dashboard () {
        return "dashboard";
    }
}
