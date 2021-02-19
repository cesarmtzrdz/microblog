<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    function index(Request $request) {
        
        if ($request->hasHeader('X-Uber-Signature')) {
            $value = $request->header('X-Uber-Signature');
            echo "this is the header: " . $value;
        }

        $bodyContent = $request->getContent();
        echo "this is the body content: " . $bodyContent;
        
        echo "yesssssss";

        return redirect()->route('test')->with('msj', "Msg: {$bodyContent}");
    }
}
