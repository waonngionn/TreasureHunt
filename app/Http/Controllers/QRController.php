<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRController extends Controller
{
    public function Success()
    {
        return view('QR.Success');
    }

    public function Failure()
    {
        return view('QR.Failure');
    }
}
