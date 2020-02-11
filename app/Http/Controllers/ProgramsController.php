<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function webDev()
    {
        return view('programs.web-dev');
    }

    public function mobileDev()
    {
        return view('programs.mobile-dev');
    }

    public function dataScience()
    {
        return view('programs.data-science');
    }

    public function productDesign()
    {
        return view('programs.product-design');
    }
}
