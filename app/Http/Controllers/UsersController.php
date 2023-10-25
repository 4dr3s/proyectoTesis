<?php

namespace App\Http\Controllers;

use App\Models\Carrer;
use App\Models\Student;
use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = Student::where('id', 1)->first();
        if ($user->nota_ingles > 14 && $user->vinculacion == 200 && $user->pasantias == 80 && $user->is_aprobado) {
            $payload = [
                'user' => $user,
                'exp' => time() + (60 * 60)
            ];
            $key = 'secreto';
            $token = JWT::encode($payload, $key, 'HS256');
            return response()->json([
                'TOKEN' => $token,
                'codigo' => 'codigo generado'
            ]);
        } else {
            return response()->json([
                'error' => 'No se genera el codigo'
            ]);
        }
    }

    public function view(){
        return view('welcome');
    }

    public function carrers()
    {
        $carrers = Carrer::get();
        return response()->json([
            'data' => $carrers
        ]);
    }
}
