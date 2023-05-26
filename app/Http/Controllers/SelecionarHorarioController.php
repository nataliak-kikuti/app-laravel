<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelecionarHorarioController extends Controller
{


    public function selecionar()
    {
        $opcoes = array( 
            '19:00 - 20:30',
            '20:45 - 22:15'  
        );

        $dias_da_semana = array(
            'Segunda-feira',
            'Terça-feira',
            'Quarta-feira',
            'Quinta-feira',
            'Sexta-feira',
        );

        return view('selecionarhorario', compact('opcoes', 'dias_da_semana'));
    }

    public function confirmar(Request $request)
    {
        // salvar as escolhas do usuário no banco de dados, por exemplo

        return redirect()->route();
    }
}



//     public function selecionar(Request $request)
//     {
//         $ucSelecionadas = session()->get('uc_selecionadas');

//         // Verifica se pelo menos uma UC foi selecionada
//         if (empty($ucSelecionadas)) {
//             return redirect()->route('selecionaruc')->withErrors('Selecione pelo menos uma UC.');
//         }

//         $horarios = $this->gerarHorarios($ucSelecionadas);

//         if ($request->isMethod('post')) {
//             $request->validate([
//                 'horarios' => 'required|array',
//             ]);

//             $horariosSelecionados = $request->input('horarios');

//             // Salva os horários selecionados na sessão
//             session(['horarios_selecionados' => $horariosSelecionados]);

//             return redirect()->route('confirmarhorarios');
//         }

//         return view('selecionarhorario', compact('horarios'));
//     }

//     public function confirmar()
//     {
//         $horariosSelecionados = session()->get('horarios_selecionados');

//         // Verifica se pelo menos um horário foi selecionado
//         if (empty($horariosSelecionados)) {
//             return redirect()->route('selecionarhorario')->withErrors('Selecione pelo menos um horário.');
//         }

//         // Processa os horários selecionados

//         return view('confirmarhorarios');
//     }

//     private function gerarHorarios($ucSelecionadas)
//     {
//         $horarios = [];

//         // Gera um horário para cada UC selecionada
//         foreach ($ucSelecionadas as $uc) {
//             $horarios[$uc] = [];

//             // Gera até dois horários por semana
//             for ($i = 1; $i <= 2; $i++) {
//                 $horarioGerado = false;

//                 while (!$horarioGerado) {
//                     $diaSemana = $this->gerarDiaSemanaAleatorio();
//                     $horario = $this->gerarHorarioAleatorio();

//                     // Verifica se o horário já foi ocupado por outra UC
//                     $horarioConflito = false;
//                     foreach ($horarios[$uc] as $horarioExistente) {
//                         if ($horarioExistente['dia'] === $diaSemana && $horarioExistente['horario'] === $horario) {
//                             $horarioConflito = true;
//                             break;
//                         }
//                     }

//                     // Se não houver conflito, adiciona o horário para a UC
//                     if (!$horarioConflito) {
//                         $horarios[$uc][] = [
//                             'dia' => $diaSemana,
//                             'horario' => $horario,
//                         ];
//                         $horarioGerado = true;
//                     }
//                 }
//             }
//         }

//         return $horarios;
//     }

//     private function gerarDiaSemanaAleatorio()
//     {
//         $diasDaSemana = [
//             'Segunda-feira',
//             'Terça-feira',
//             'Quarta-feira',
//             'Quinta-feira',
//             'Sexta-feira',
//         ];

//         return $diasDaSemana[array_rand($diasDaSemana)];
//     }

//     private function gerarHorarioAleatorio()
//     {
//         $horarios = [
//             '19:00 - 20:30',
//             '20:45 - 22:15',
//         ];

//         return $horarios[array_rand($horarios)];
//     }
// }
