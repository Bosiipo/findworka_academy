<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function downloadFront()
    {
        return response()->download(public_path('Frontend.pdf'), 'frontend.pdf');
    }

    public function downloadBack()
    {
        return response()->download(public_path('backend.pdf'), 'backend.pdf');
    }

    public function downloadFull()
    {
        return response()->download(public_path('fullstack.pdf'), 'fullstack.pdf');
    }

    public function downloadMobile()
    {
        return response()->download(public_path('mobile-dev.pdf'), 'mobile_dev.pdf');
    }

    public function downloadData()
    {
        return response()->download(public_path('data-science.pdf'), 'data-science.pdf');
    }

    public function downloadUI_UX()
    {
        return response()->download(public_path('product-design.pdf'), 'product-design.pdf');
    }
}
