<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
    public function index()
    {
        // Получаем первые 3 видимых проекта
        $projects = Project::where('visible', true)->orderBy('created_at', 'desc')->take(3)->get();

        // Отдаем эти проекты в представление
        return view('home', compact('projects'));
    }

    /**
     * Показать страницу контактов.
     *
     * @param Request $request
     * @return Renderable
     */
    public function contacts(Request $request): Renderable
    {
        return view('contacts/contacts');
    }

    /**
     * Показать страницу контактов.
     *
     * @param Request $request
     * @return Renderable
     */
    public function about(Request $request): Renderable
    {
        return view('about/about');
    }

}
