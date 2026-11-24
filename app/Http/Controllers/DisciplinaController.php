<?php
namespace App\Http\Controllers;
use App\Models\Disciplina;
use Illuminate\Http\Request;
class DisciplinaController extends Controller {
    public function index() { return response()->json(Disciplina::all()); }
    public function store(Request $request) {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|integer|min:1',
            'professor' => 'required|string|max:255',
        ]);
        return response()->json(Disciplina::create($dados), 201);
    }
}
