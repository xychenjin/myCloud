<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2016/12/1
 * Time: 18:33
 */

namespace App\Http\Composer;
use Illuminate\Http\Request;


class ViewComposer
{
    public function compose($view)
    {
        $view->with('html', 'partials.html');
        $view->with('layouts', 'admin::layouts.master');
    }
}