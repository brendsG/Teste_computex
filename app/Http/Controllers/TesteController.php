<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;

class TesteController extends Controller
{
    public function index()
    {
        $response = Http::get('http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios');
        $response = $response->json("menu");
        return view('index', compact('response')); //caminho
    }
    public function horario_aluno()
    {
        $response = Http::get('http://camerascomputex.ddns.net:8080/escola/json_horario_aluno.php?matricula=2011004&senha=99999999&ano=20211');
        $response = $response->json("horario");
        return view('horario_aluno', compact('response')); //caminho
    }
    public function acesso_aluno()
    {
        $response = Http::get('http://camerascomputex.ddns.net:8080/escola/ws_controller.php?action=getTurmas&ano=20211');
        $response = $response->json();
        return view('acesso_aluno', compact('response')); //caminho
    }
    public function alunos()
    {
        $response = Http::get('http://camerascomputex.ddns.net:8080/escola/ws_controller.php?action=getAlunosTurma&ano=20211&escola=1&grau_serie=15&turno=M&turma=1&status=C');
        $response = $response->json();
        return view('alunos', compact('response')); //caminho
    }
    public function pdf()
    {
        $response = Http::get('http://camerascomputex.ddns.net:8080/escola/ws_controller.php?action=getAlunosTurma&ano=20211&escola=1&grau_serie=15&turno=M&turma=1&status=C');
        $response = $response->json();
        $pdf = Pdf::loadView('alunos_pdf', compact('response'));
        return $pdf->download('alunos.pdf');
    }
}
