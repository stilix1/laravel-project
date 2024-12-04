<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    // Метод для показа формы регистрации
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Метод для обработки регистрации пользователя
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Создание и сохранение пользователя в базе данных
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->save();

        // После успешной регистрации, можно выполнить вход пользователя
        Auth::login($user);

        return redirect('/');
    }

    // Метод для показа формы входа
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Метод для обработки входа пользователя
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            // Если аутентификация не удалась,  на страницу логина с ошибкой.

            return redirect()->route('login')->with('error', 'Неправильный email или пароль');
        }
    }

    // Метод для выхода пользователя
    public function logout()
    {
        Auth::logout(); // Встроенный метод Laravel для выхода пользователя

        return redirect('/');
    }
}
