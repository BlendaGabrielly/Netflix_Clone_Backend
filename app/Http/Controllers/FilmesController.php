<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmesController extends Controller{
    
  public function index(){
      $filme = Filme::all();
      return $filme;
  }
  public function create(Request $request){
      $filme = new Filme();
      $filme->nome = $request->nome;
      $filme->imagem = $request->imagem->store("imgs");
      $filme->avaliacao = $request->avaliacao;
      $status =$filme->save();
if($status){
    return 'gravou';
}
else{
    return 'deu ruim';
}
    }
}
