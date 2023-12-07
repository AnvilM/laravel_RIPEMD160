<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Хеширование сообщения
     *
     * @param  Request $request Данные, переданные в запросе
     * @return string
     */
    public function createHash(Request $request): string
    {
        //Валидация исходных данных
        $request->validate([
            'src' => 'required'
        ]);

        //Инициализация переменной
        $src = $request->post('src');

        //Вычисление хеш-суммы
        $hash = hash('ripemd160', $src);

        return $hash;
    }
}
