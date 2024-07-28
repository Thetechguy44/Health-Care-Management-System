<?php

namespace App\Providers;

use Illuminate\View\View;
use App\Models\Setting;

class FrontendComposer
{
    public function compose(View $view)
    {
        $contents = Setting::all();
        $view->with('contents', $contents);
    }
}
