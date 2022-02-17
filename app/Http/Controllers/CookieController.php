<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    
    public static function setCookie(Request $request, $cookieName)
    {
        // $response = new Response("Page");
        // $response->withCookie(cookie($cookieName, '1', 60));
        // return $response;
        
        Cookie::queue($cookieName, "1", 60);
    }

    public static function getCookie(Request $request, $cookieName)
    {
        $value = $request->cookie($cookieName);
        return $value;
    }
}
