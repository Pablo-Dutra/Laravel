<?php

namespace App\Http\Controllers;
use App\Models\Oferta;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index(){
        $ofertas = Oferta::latest()->get();

        $user = auth()->user();

        return view('welcome',['ofertas'=>$ofertas,'usuario'=>$user]);
    }
   
    
    public function create() {
        return view('ofertas.new');
    }
    public function store(Request $request) {
        $oferta = new Oferta();
        $oferta->descricao = $request->descricao;
        $oferta->valorOriginal = $request->valorOriginal;
        $oferta->valorOferta = $request->valorOferta;
        $oferta->user_id = auth()->user()->id;
        $oferta->save();
        return redirect('/');
    }  
    
    public function destroy($id){
        Oferta::findOrFail($id)->delete();
        return redirect('/')->with('msg','Oferta excluída com sucesso.');
    }
    public function edit($id){
        $oferta = Oferta::findOrFail($id);
        return view('/ofertas/edit',['oferta' => $oferta]);
    }
    public function update(Request $request){
        $oferta = Oferta::findOrFail($request->id);
        $oferta->descricao = $request->descricao ;
        $oferta->valorOriginal = $request->valorOriginal ;
        $oferta->valorOferta = $request->valorOferta ;
        $oferta->save();
        return redirect('/')->with('msg','Oferta atualizada.');
    }  
    

}
