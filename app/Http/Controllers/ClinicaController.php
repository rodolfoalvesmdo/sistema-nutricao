<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function paginaClinica() {
        return view('clinica');
    }
}
