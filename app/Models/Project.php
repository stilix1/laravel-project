<?php
// app/Models/Project.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'created_at','slug', 'author', 'logo', 'visible', 'categories'];

    protected $casts = [
        'categories' => 'array', // для хранения категорий как массива
    ];

    // Фильтрация проектов по категории
    public function scopeFilterByCategory($query, $category)
    {
        if ($category && $category !== 'Все категории') {
            return $query->whereJsonContains('categories', $category);
        }
        return $query;
    }

    // Автоматическое создание slug на основе title
    public static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            // Генерация slug на основе title
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }
}
