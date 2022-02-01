<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChollosController extends Controller
{
    //
    public function crear(Request $request){
        $request->validate([
                'titulo'=>'required',
                'descripcion'=>'required',
                'url'=>'required',
                'categoria'=>'required',
                'precio'=>'required',
                'precioDescuento'=>'required'
        ]);    
            $nuevoChollo = new Chollo();
            $nuevoChollo->titulo=$request->titulo;
            $nuevoChollo->descripcion=$request->descripcion;
            $nuevoChollo->url=$request->url;
            $nuevoChollo->categoria=$request->categoria;
            $nuevoChollo->puntuacion=1;
            $nuevoChollo->precio=$request->precio;
            $nuevoChollo->precioDescuento=$request->precioDescuento;
            $nuevoChollo->disponible=true;
            //$file=$request->file('archivo');
           // Storage::disk(public_path())->put($request->id."chollo-severo.png", $file);
            $nuevoChollo->save();
            return back()->with('mensaje',"Chollo creado");
    }
    public function cargar(){
            //El paginate lo he comentado puesto que la paginación las flechas salen enormes y porque no hace la ordenación bien pero ir funciona correctamente
        $chollos= Chollo::all();
        //$chollos= Chollo::paginate(5);
        return view('chollos.cargar', compact('chollos'));
}
        public function editar($id){
                $chollo=Chollo::find($id);
                return view("chollos.editar",compact("chollo"));
        }
        public function editarDB(Request $request){
                $nuevoChollo = Chollo::find($request->id);
                $nuevoChollo->titulo=$request->titulo;
                $nuevoChollo->descripcion=$request->descripcion;
                $nuevoChollo->url=$request->url;
                $nuevoChollo->categoria=$request->categoria;
                $nuevoChollo->puntuacion=$request->puntuacion;
                $nuevoChollo->precio=$request->precio;
                $nuevoChollo->precioDescuento=$request->precioDescuento;
                $nuevoChollo->disponible=true;
                $nuevoChollo->save();   
                return back()->with('mensaje',"Chollo editado");
        }
        public function eliminar($id){
                $chollo = Chollo::findOrFail($id);
                $chollo -> delete();
                $chollos= Chollo::all();
              //  $chollos= Chollo::paginate(5);
               return back()->with('mensaje',"chollo borrado",compact('chollos'));
        }

        public function nuevos(){
                $chollos= Chollo::orderBy('id', 'DESC')->get();
               // $chollos= Chollo::paginate(5);
                return view('chollos.cargar', compact('chollos'));
        }

        public function destacados(){
                $chollos= Chollo::orderBy('puntuacion', 'DESC')->get();
                //$chollos= Chollo::paginate(5);
                return view('chollos.cargar', compact('chollos'));
        }
}
