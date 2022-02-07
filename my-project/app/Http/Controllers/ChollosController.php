<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChollosController extends Controller
{

        public function cargar()
        {
                //El paginate lo he comentado puesto que la paginación las flechas salen enormes y porque no hace la ordenación bien pero ir funciona correctamente
                $chollos = Chollo::with("user")->get();
                //$chollos= Chollo::paginate(5);
                return view('chollos.cargar', compact('chollos'));
        }
        public function crearVista()
        {
                return view("chollos.crear");
        }
        public function nuevos()
        {
                $chollos = Chollo::orderBy('id', 'DESC')->get();
                // $chollos= Chollo::paginate(5);
                return view('chollos.cargar', compact('chollos'));
        }

        public function destacados()
        {
                $chollos = Chollo::orderBy('puntuacion', 'DESC')->get();
                //$chollos= Chollo::paginate(5);
                return view('chollos.cargar', compact('chollos'));
        }
}
