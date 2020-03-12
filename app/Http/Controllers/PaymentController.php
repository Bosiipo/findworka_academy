<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function front_end()
    {

        return view('payment.front-end');
    }

    public function back_end()
    {

        return view('payment.back-end');
    }

    public function full_stack()
    {

        return view('payment.full-stack');
    }

    public function mobile_dev()
    {

        return view('payment.mobile-dev');
    }

    public function data_science()
    {

        return view('payment.data-science');
    }

    public function product_design()
    {

        return view('payment.product-design');
    }
}
