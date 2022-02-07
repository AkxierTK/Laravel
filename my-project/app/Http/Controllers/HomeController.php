<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function crear(Request $request){
        $request->validate([
                'titulo'=>'required',
                'descripcion'=>'required',
                'url'=>'required',
                'categoria'=>'required',
                'precio'=>'required',
                'precioDescuento'=>'required'
        ]); 
            $id = auth()->user()->id;
            $nuevoChollo = new Chollo();
            $nuevoChollo->titulo=$request->titulo;
            $nuevoChollo->descripcion=$request->descripcion;
            $nuevoChollo->url=$request->url;
            $nuevoChollo->categoria=$request->categoria;
            $nuevoChollo->puntuacion=1;
            $nuevoChollo->precio=$request->precio;
            $nuevoChollo->precioDescuento=$request->precioDescuento;
            $nuevoChollo->disponible=true;
            $nuevoChollo->user_id=$id;
            //$file=$request->file('archivo');
           // Storage::disk(public_path())->put($request->id."chollo-severo.png", $file);
            $nuevoChollo->save();
            return back()->with('mensaje',"Chollo creado, ir a inicio");
    }
    public function crearVista(){
        return view("chollos.crear");
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
        return back()->with('mensaje',"Chollo editado, ir a inicio");
}
public function eliminar($id){
        $chollo = Chollo::findOrFail($id);
        $chollo -> delete();
        $chollos= Chollo::all();
      //  $chollos= Chollo::paginate(5);
       return back()->with('mensaje',"chollo borrado",compact('chollos'));
}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chollos= Chollo::all();
        return redirect()->route('chollos.cargar',compact("chollos"));
    }
}
