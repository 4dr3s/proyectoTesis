<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // regex:/^[a-zA-Z0-9]+$/        
        try {
            $campos_register = $request->validate([
                'identification' => 'required|string|min:10|max:10|regex:/^[0-9]+$/',
                'identification_type' => 'required|string|regex:/^[a-zA-Z]+$/',
                'primerApellido' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ]+$/',
                'segundoApellido' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ]+$/',
                'primerNombre' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ]+$/',
                'segundoNombre' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ]+$/',
                'genre' => 'required|string|regex:/^[a-zA-Z]+$/',
                'etnia' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ\s]+$/',
                'birthday' => 'required|date',
                'country' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ\s]+$/',
                'province' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ\s]+$/',
                'canton' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜ\s]+$/',
                'date_start_studies' => 'required|date',
                'date_graduation' => 'required|date',
                'mechanism' => 'required|string|regex:/^[a-zA-Z]+$/',
                'note_average' => 'required|numeric|regex:/^[0-9]+(\.[0-9]+)?$/',
                'note_english' => 'required|numeric|regex:/^[0-9]+(\.[0-9]+)?$/',
                'practices_hours' => 'required|numeric|regex:/^[0-9]+$/',
                'vinculation_hours' => 'required|numeric|regex:/^[0-9]+$/'
            ]);
            if ($campos_register) {
                Register::create([
                    'identification' => $request->identification,
                    'identification_type' => $request->identification_type,
                    'primerApellido' => $request->primerApellido,
                    'segundoApellido' => $request->segundoApellido,
                    'primerNombre' => $request->primerNombre,
                    'segundoNombre' => $request->segundoNombre,
                    'genre' => $request->genre,
                    'etnia' => $request->etnia,
                    'birthday' => $request->birthday,
                    'country' => $request->country,
                    'province' => $request->province,
                    'canton' => $request->canton,
                    'date_start_studies' => $request->date_start_studies,
                    'date_graduation' => $request->date_graduation,
                    'mechanism' => $request->mechanism,
                    'note_average' => $request->note_average,
                    'note_english' => $request->note_english,
                    'practices_hours' => $request->practices_hours,
                    'vinculation_hours' => $request->vinculation_hours
                ]);
                $today = Carbon::today()->toDateString();
                $nacimiento = Carbon::parse($request->birthday);
                $inicio_estudios = Carbon::parse($request->date_start_studies);
                $date_graduacion = Carbon::parse($request->date_graduation);
                $errors = [];

                if ($nacimiento->lt($today) && $inicio_estudios->lt($today) && $date_graduacion->lt($today) && $request->note_average >= 14 && $request->note_english >= 14 && $request->practices_hours === 100 && $request->vinculation_hours === 100)
                {
                    return response()->json([
                        'status' => 'Se puede continuar para generar el código '
                    ]);
                }
                else
                {
                    if ($nacimiento->gte($today)) {
                        $errors[] = 'La fecha de nacimeinto no puede ser la fecha actual o mayor';
                    }
                    if ($inicio_estudios->gte($today)) {
                        $errors[] = 'La fecha de inicio de estudios no puede ser la fecha actual o mayor';
                    }
                    if ($date_graduacion->gte($today)) {
                        $errors[] = 'La fecha de graduación no puede ser la fecha actual o mayor';
                    }
                    if ($request->note_average < 14) {
                        $errors[] = 'La nota de promedio final debe ser mayor a 14';
                    }
                    if ($request->note_english < 14) {
                        $errors[] = 'La nota de promedio final de ingles debe ser mayor a 14';
                    }
                    if ($request->practices_hours !== 100) {
                        $errors[] = 'Las horas de prácticas deben ser 100';
                    }
                    if ($request->vinculation_hours !== 100) {
                        $errors[] = 'Las horas de vinculación deben ser 100';
                    }
                    return response()->json([
                        'error' => $errors
                    ]);
                }
            }
        } catch (ValidationException $e) {
            return response()->json([
                'error' => $e->errors()
            ]);
        }
        catch (QueryException $e) {
            return response()->json([
                'error' => $e->errorInfo
            ]);
        }
    }
}
