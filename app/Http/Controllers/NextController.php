<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Request;

class NextController extends Controller
{
    public function index()
    {
        $company = Request::input('company');
        $name = Request::input('name');
        $phoneNumber = Request::input('phoneNumber');
        $email = Request::input('email');
        $message = Request::input('message');
        return view('confirm', compact('company', 'name', 'phoneNumber', 'email', 'message'));
    }

    public function send()
    {
        $company = Request::input('company');
        return view('send', compact('company'));
    }
}
