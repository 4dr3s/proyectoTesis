<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', 1)->first();
        return response()->json([
            'data' => $users
        ]);
    }
}
