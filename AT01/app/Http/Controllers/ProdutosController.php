<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request){
       
       /* $dados = $request->all();

        $produto = $dados['produto'];
        $preco = $dados['preco'];
        $categoria = $dados['categoria'];*/

        $produto = $request->input('produto');
        $preco = $request->input('preco');
        $categoria = $request->input('categoria');



        return view('produtos', ['produto'=>$produto, 'preco'=>$preco, 'categoria'=>$categoria]);
    }

}
