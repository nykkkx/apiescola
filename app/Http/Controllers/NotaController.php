<?php
namespace App\Http\Controllers;
use App\Models\Nota;
class NotaController extends Controller {
    public function resumo() {
        return response()->json([
            'total_notas' => Nota::count(),
            'media_geral' => round((float) (Nota::avg('valor') ?? 0), 2),
        ]);
    }
}
