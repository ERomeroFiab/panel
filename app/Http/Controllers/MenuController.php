<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function previred_index()
    {
        return view('sidebar_menu.previred');
    }

    public function silvertool_index()
    {
        return view('sidebar_menu.silvertool');
    }

    public function download_pdf_index()
    {
        return view('sidebar_menu.download_pdf');
    }

    public function convert_pdf_index()
    {
        return view('sidebar_menu.convert_pdf');
    }
}
