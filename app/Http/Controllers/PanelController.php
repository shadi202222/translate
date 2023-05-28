<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class PanelController extends Controller
{
    public function render() {

        
        return view('panel', ['info' => Session::get('info')]);
    }
}
