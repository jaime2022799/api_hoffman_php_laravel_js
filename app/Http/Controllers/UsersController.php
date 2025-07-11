<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableUsers;
use Illuminate\Support\Facades\Validator;
use App\resource\views\formularioApi;

class UsersController extends Controller
{
    public function index()
    {
        $TableUsers = TableUsers::all();

       
        $data = [
            'Users' => $TableUsers,
            'status' => 200
        ];

        return response()->json($data, 200);
        //return 'Obteniendo lista de tabla Usuarios desde el controllers';
    }

    public function store(Request $request) 
    {
       $validator = Validator::make($request->all(), [
            'Code' => 'required',
            'Monto' => 'required',
            'fecha' => 'required',
            'UserGithub' => 'required'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validacion de datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $TableUsers = TableUsers::create([
            'Code' => $request->Code,
            'Monto' => $request->Monto,
            'fecha' => $request->fecha,
            'UserGithub' => $request->UserGithub
        ]);

        if (!$TableUsers) {
           $data = [
            'message' => 'error al crear el usuario',
            'status' => 500
           ];
           return response()->json($data, 500);
        } 

        $data = [
            'TableUsers' => $TableUsers,
            'status' => 201
        ];

        return response()->json($data, 201);
        
    }

    public function show($Code)
    {

        $TableUsers =  TableUsers::find($Code);

        if (!$TableUsers) {
            $data = [
            'message' => ' Codigo no encontrado ',
            'status' => 400
           ];
           return response()->json($data, 500);
        }

        $data = [
            'TableUsers' => $TableUsers,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}
