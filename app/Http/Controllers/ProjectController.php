<?php
// app/Http/Controllers/ProjectController.php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function show($slug)
    {
        // Поиск проекта по slug
        $project = Project::where('slug', $slug)->firstOrFail();

        // Путь к файлу шаблона
        $templatePath = resource_path("views/projects/{$slug}.blade.php");

        // Проверка, существует ли файл шаблона
        if (File::exists($templatePath)) {
            // Если файл существует, загружаем его
            return view("projects.{$slug}", compact('project'));
        }

        // Если шаблон не найден, возвращаем 404 ошибку
        abort(404, 'Template not found');
    }
}
