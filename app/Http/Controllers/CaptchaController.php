<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CaptchaController extends Controller
{
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
