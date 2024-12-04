<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Ваша общая логика или функциональность для всех контроллеров.
     *
     * Например, вы можете определить методы, которые вы хотите использовать во всех контроллерах,
     * или настроить общие настройки для всех контроллеров.
     */


    protected function myCommonMethod()
    {

    }
}
