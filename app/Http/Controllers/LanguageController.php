<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function languageSwitch(Request $request) {

        $language = request()->input('language');
        Cookie::queue('language', $language, 60*60*24*30);
//        session(['language' => $language]);
        return redirect()->back();
    }
}
