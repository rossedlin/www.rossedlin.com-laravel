<?php

namespace App\Http\Controllers;

use App\Library\WordPress;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/10/2017
 * Time: 11:36
 *
 * Class Cv
 *
 * @package App\Http\Controllers
 */
class Cv extends _Web
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $this->data['tags'] = WordPress\Api::getTags();

        return view('cv', $this->data);
    }
}