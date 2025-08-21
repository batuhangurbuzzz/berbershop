<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function switchLang(string $lang)
    {
        if(in_array($lang, config('systemlang.locales'))){
            session()->put('locale', $lang);
        }
        return redirect()->back();
    }
}
