<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SelecionarUcController extends Controller
{
    public function selecionar()
    {
        $opcoes = [
             'Algoritmos e Estruturas de Dados',
             'Arquitetura e Organizacao de Computadores',
             'Desenvolvimento de Aplicativos Moveis',
             'Gerencia de Requisitos',
             'Gestao de Pessoas',
             'Introducao a Computacao e Teoria Geral de Sistemas',
             'Linguagem de Programacao Orientada a Objetos',
             'Logica de Programacao e Algoritmos',
             'Matematica Discreta',
             'Projeto Interdisciplinar I',
             'Projeto Interdisciplinar II',
             'Analise e Projeto Orientados a Objetos',
             'Analise e Projeto de Algoritmos',
             'Arquitetura de Software',
             'Elementos de Calculo e Algebra Linear',
             'Gerenciamento de Projetos',
             'Gerencia de Configuracao e Controle de Versao',
             'Introducao a Banco de Dados',
             'Paradigmas de Linguagens de Programacao',
             'Processo de Desenvolvimento de Software',
             'Projeto Interdisciplinar III',
             'Projeto Interdisciplinar IV',
             'Sistemas Operacionais',
             'Banco de Dados Avancado',
             'Calculo Numerico',
             'Desenvolvimento Web',
             'Empreendedorismo',
             'Estatística',
             'Estagio Supervisionado I',
             'Estagio Supervisionado II',
             'Interacao Humano Computador',
             'Metodologia de Pesquisa',
             'Metodologias Ageis',
             'Projeto Interdisciplina V',
             'Projeto Interdisciplinar VI',
             'Projeto e Desenvolvimento de Sistema I',
             'Projeto e Desenvolvimento de Sistema II',
             'Praticas de Extensao I',
             'Praticas de Extensao II',
             'Redes de Computadores',
             'Teste de Software',
             'Administracao de Sistemas Empresariais',
             'Ciencia de Dados e Aprendizagem de Maquina',
             'Computacao em Nuvem',
             'Desenvolvimento com DevOps',
             'Governanca em Tecnologia da Informacao e Comunicacao',
             'Inteligencia Artificial',
             'Metricas de Software',
             'Nocoes de Direito e Etica',
             'Programacao de Jogos',
             'Qualidade de Software',
             'Sociologia',
             'Trabalho de Conclusao de Curso I',
             'Trabalho de Conclusao de Curso II',
             'Topicos Avancados em Computacao',
             'Topicos Especiais em Engenharia de Software'
         ];

         
         return view('selecionaruc', compact('opcoes'));

    }

    public function salvarSelecionados(Request $request)
    {

        $ucSelecionadas = $request->input('opcoes');
        if (empty($ucSelecionadas)) {
            return back()->withErrors('Selecione pelo menos uma opcao.');
        }
        $professor = $request->input('professor');
        $cursos = $request->input('opcoes');
    
        $data = [
            'professor' => $professor,
            'unidade_curricular' => $cursos,
        ];
        $jsonData = json_encode($data);
        $filePath = storage_path('app/selected_data.json');
        file_put_contents($filePath, $jsonData);
        return response()->json($data);
    }
    
    public function confirmar(Request $request)
    {
        $ucSelecionadas = $request->input('opcoes');
    
        if (empty($ucSelecionadas)) {
            return back()->withErrors('Selecione pelo menos uma opcao.');
        }
    
        // Salva as UCs selecionadas na sessao
        session(['opcoes' => $ucSelecionadas]);
        return redirect()->route('selecionarhorario');
    }
    

    
}
