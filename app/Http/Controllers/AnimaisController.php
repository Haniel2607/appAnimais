<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animais;
use Illuminate\Support\Facades\Redirect;

class AnimaisController extends Controller
{
    //mostrar tela principal
    public function MostrarHome(){
        return view('home');
    }
    
    //mostrar tela de cadastrar animais
    public function MostrarCadastroAnimais(){
        return view('cadastroanimal');
    }

    //salvar registros na tabela animais
    public function CadastrarAnimais(Request $request){
        $registro = $request->validate([
            'nomeAnimal' => 'string|required',
            'habitatNatural' => 'string|required',
            'dietaAnimal' => 'string|required',
            'statusConservacao' => 'string|required'
        ]);

        Animais::create($registro);
        return Redirect::route('home');
    }
}