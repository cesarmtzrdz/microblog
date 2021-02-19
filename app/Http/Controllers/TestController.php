<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TestController extends Controller
{
    function index(Request $request) {
        
        Log::info("---------- INDEX------------");

        if ($request->hasHeader('X-Uber-Signature')) {
            $value = $request->header('X-Uber-Signature');
            Log::info("this is the header: " . $value);
        }

        $bodyContent = $request->getContent();
        Log::info("this is the body content: " . $bodyContent);
        
        Log::info("yesssssss");
    }
}
