<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        return 'it works store method';
    }

    public function signin(Request $request) {
        return 'it works signin method';
    }
}
