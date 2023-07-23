<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
        return view('feedback/feedback');
    }

    public function submit(Request $request)
    {
        // Обработка отправленной формы и сохранение данных

        // Установка сообщения сессии
        $request->session()->flash('message', 'Ваше сообщение успешно отправлено!');

        // Перенаправление пользователя обратно на страницу с формой обратной связи
        return redirect()->back();
    }
}
