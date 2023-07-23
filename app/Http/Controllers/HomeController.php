<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Показать домашнюю страницу.
     *
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request): Renderable
    {
        return view('home');
    }

    /**
     * Показать страницу контактов.
     *
     * @param Request $request
     * @return Renderable
     */
    public function contacts(Request $request): Renderable
    {
        return view('contacts');
    }

}
