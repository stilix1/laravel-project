<?php

namespace App\Http\Controllers;

use App\Models\PromoPage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PromoPageController extends Controller
{
    /**
     * Отображает список всех промо-страниц.
     *

     */
    public function index()
    {
        // Получаем список всех промо-страниц из базы данных
        $promoPages = PromoPage::all();

        // Отображаем представление с передачей списка промо-страниц в него
        return view('promo_pages.index', ['promoPages' => $promoPages]);
    }

    /**
     * Отображает форму для создания новой промо-страницы.
     *
     */
    public function create()
    {
        // Отображаем форму для создания новой промо-страницы
        return view('promo_pages.create');
    }

    // Функция для создания новой промо-страницы
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        PromoPage::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => Auth::id(), // Передаем значение 'user_id' текущего авторизованного пользователя
        ]);

        return redirect()->route('promo_pages.index')->with('success', 'Промо-страница успешно создана.');
    }

    /**
     * Отображает информацию о промо-странице по её ID.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Находим промо-страницу по её id в базе данных
        $promoPage = PromoPage::findOrFail($id);

        // Отображаем представление с передачей информации о промо-странице
        return view('promo_pages.show', ['promoPage' => $promoPage]);
    }

    /**
     * Отображает форму для редактирования промо-страницы.
     *
     */
    public function edit($id)
    {
        // Находим промо-страницу по её id в базе данных
        $promoPage = PromoPage::findOrFail($id);

        // Отображаем форму редактирования промо-страницы
        return view('promo_pages.edit', ['promoPage' => $promoPage]);
    }

    /**
     * Обновляет данные промо-страницы в базе данных.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Находим промо-страницу по её id в базе данных
        $promoPage = PromoPage::findOrFail($id);

        // Валидируем данные из формы
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Если валидация не прошла, возвращаем пользователя на форму с ошибками
        if ($validator->fails()) {
            return redirect()->route('promo_pages.edit', ['promo' => $id])
                ->withErrors($validator)
                ->withInput();
        }

        // Обновляем данные промо-страницы
        $promoPage->title = $request->input('title');
        $promoPage->content = $request->input('content');

        // Обновляем загруженное изображение (если было выбрано)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $promoPage->image = $imageName;
        }

        $promoPage->save();

        // Перенаправляем пользователя на список всех промо-страниц
        return redirect()->route('promo_pages.index');
    }

    /**
     * Удаляет промо-страницу из базы данных.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        // Находим промо-страницу по её id в базе данных
        $promoPage = PromoPage::findOrFail($id);

        // Удаляем промо-страницу из базы данных
        $promoPage->delete();

        // Перенаправляем пользователя на список всех промо-страниц
        return redirect()->route('promo_pages.index');
    }

}
