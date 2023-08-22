<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller
{
    private $perguntas = array();

    public function __construct(){
        $this->perguntas['pergunta1'] = 'C';
        $this->perguntas['pergunta2'] = 'A';
        $this->perguntas['pergunta3'] = 'D';
    }

    public function index(){
        session(['acertos' => 0]);
        return view('pagina1');
    }

    public function dadosPagina1(Request $request){
        
        $resposta = $request->input('pergunta');
        session(['resposta1' => $resposta]);

        if(strcmp($this->perguntas['perguntas1'], $resposta ) ==0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos ]);
            session (['resultado2' => 'Acertou'] );
        }else{
            session(['resultado1'=> 'ERROU']);
        return view ('pagina3');
        

        }

    }
    public function dadosPagina2(Request $request){
        
        $resposta = $request->input('pergunta');
        session(['resposta1' => $resposta]);

        if(strcmp($this->perguntas['perguntas1'], $resposta ) ==0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos ]);
            session (['resultado2' => 'Acertou'] );
        }else{
            session(['resultado1'=> 'ERROU']);

        return view ('pagina3');
        

        }

    }
    public function dadosPagina3 (Request $request){
        
        $resposta = $request->input('pergunta');
        session(['resposta1' => $resposta]);

        if(strcmp($this->perguntas['perguntas1'], $resposta ) ==0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos ]);
            session (['resultado2' => 'Acertou'] );
        }else{
            session(['resultado1'=> 'ERROU']);
        $dados = array();


        $dados[1]['gabarito'] = $this->perguntas['pergunta1'];
        $dados[1]['resposta '] = session('resposta1');
        $dados[1]['resultado'] = session('resultado1');

        $dados[2]['gabarito'] = $this->perguntas['pergunta2'];
        $dados[2]['resposta '] = session('resposta2');
        $dados[2]['resultado'] = session('resultado2');

        $dados[3]['gabarito'] = $this->perguntas['pergunta3'];
        $dados[3]['resposta '] = session('resposta3');
        $dados[3]['resultado'] = session('resultado3');
        }

    }

}
