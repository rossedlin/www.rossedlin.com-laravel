<?php

namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 11/09/2017
 * Time: 17:45
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class Test extends _Web
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $this->data['dump'] = [];
        return view('test', $this->data);
    }
}