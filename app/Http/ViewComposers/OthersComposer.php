<?php


namespace App\Http\ViewComposers;

use App\Language;
use App\Others;
use Illuminate\Contracts\View\View;

class OthersComposer
{
    public function compose(View $view)
    {
        if (\Session::has('locale')) {
            $view->with('lang', \Session::get('locale'));
        } else {
            $lang = Language::find(1);
            \Session::put('locale', $lang);
            $view->with('lang', $lang);
        }
        $view->with('others', Others::first());
        $view->with('languages', Language::all());
    }
}