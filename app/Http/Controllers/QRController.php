<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRController extends Controller
{
    const URLS = [
        '24txvbf7lykw9a6jh13oeq0nrzu5dcmgs8pi' => true,
        '8fvdaw573x6ksyr4bcg2eptmjz9o0iuqnh1l' => false,
        'r6njb8wyvufx0pel4z321ahs9tm5i7gdkoqc' => false,
        '0fvlqnpsgumxjie6wkr718yh25odbt9z3a4c' => false,
        'zt8jku56osma4exv2rldnqyb3wpf1i7chg90' => false,
        'xihrtdg6e5uwbk14m0c9sq8nzjlyp2fv37ao' => false,
        '9l5cnp2s7d68bv1gtmrz30qhwekoajufy4ix' => false,
        'dvfp86roigl3xz7m9j1c2nyhqkbt4a0ues5w' => false
    ];

    public function Success()
    {
        return view('QR.Success');
    }

    public function Failure()
    {
        return view('QR.Failure');
    }

    public function judge($str)
    {
        if (self::URLS[$str]) {
            return view('QR.Success');
        } else {
            return view('QR.Failure');
        }
    }
}
