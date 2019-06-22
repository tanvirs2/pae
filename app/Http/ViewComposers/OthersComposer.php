<?php


namespace App\Http\ViewComposers;

use App\Others;
use Illuminate\Contracts\View\View;

class OthersComposer
{
    public function compose(View $view)
    {
        $view->with('others', Others::first());
    }
}