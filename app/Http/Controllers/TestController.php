<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    function index(Request $request) {
        
        info("---------- INDEX------------");

        if ($request->hasHeader('X-Uber-Signature')) {
            $value = $request->header('X-Uber-Signature');
            info("this is the header: " . $value);
        }

        $bodyContent = $request->getContent();
        info("this is the body content: " . $bodyContent);
        
        info("yesssssss");
    }
}
