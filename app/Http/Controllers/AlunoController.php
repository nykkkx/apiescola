<?php
namespace App\Http\Controllers;
use App\Models\Aluno;
use Illuminate\Http\Request;
class AlunoController extends Controller {
    public function index() { return response()->json(Aluno::all()); }
    public function store(Request $request) {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'matricula' => 'required|string|max:50|unique:alunos,matricula',
            'email' => 'required|email|max:255|unique:alunos,email',
        ]);
        return response()->json(Aluno::create($dados), 201);
    }
}
