<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale(Request $request)
    {
        $lang = $request->input('locale');

        if (in_array($lang, ['fr', 'en'])) {
            App::setLocale($lang);
            Session::put('locale', $lang);
        }

        return back();
    }
}
