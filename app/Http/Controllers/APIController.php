<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index() {
        return response()->json([
            'message' => 'Halo, ini data rahasia!',
            'data' => [
                ['id' => 1, 'judul' => 'Data A'],
                ['id' => 2, 'judul' => 'Data B'],
            ]
        ]);
    }
}
