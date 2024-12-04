<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        // Убедитесь, что таблица не существует, чтобы избежать ошибок
        if (!Schema::hasTable('projects')) {
            Schema::create('projects', function (Blueprint $table) {
                $table->id(); // Уникальный идентификатор проекта
                $table->string('title'); // Название проекта
                $table->text('description')->nullable(); // Описание проекта
                $table->string('author')->nullable(); // Автор проекта
                $table->boolean('visible')->default(true); // Флаг отображения на сайте
                $table->json('categories'); // Категории проекта, как массив
                $table->text('logo')->nullable(); // Локальный путь до логотипа отображаемого на сайте
                $table->text('slug')->nullable(); // slug to url
                $table->timestamps(); // Стандартные временные метки
            });
        }
    }

    public function down()
    {
        // Если таблица существует, удаляем её
        Schema::dropIfExists('projects');
    }
}
