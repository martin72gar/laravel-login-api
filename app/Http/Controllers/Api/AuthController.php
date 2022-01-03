<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    

    public function login() {
        echo "Login endpoint requested";
    }

    public function signup() {
        echo "Signup endpoint requested";
    }

    public function index() {
        echo "Hello World";
    }
}
