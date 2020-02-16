<?php // для начала создаем контроллер php artisan make:controller MailController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name' => 'Alex Paiste'], function ($message){
            $message->to('alex_13.91@mail.ru', 'To Alexa Smith')->subject('Test email'); // кому
            $message->from('alexpaiste.ap@gmail.com', 'Alex Anchor'); // от кого
        }); // используем метод для оправки сообшщения который принимает 3 аргумента (имя фала в котором будет текст для сообщения, массив данных предоставлемый в предоставлении(имя отправителя), фуункция замыкания (получатели, тема письма и тд))
    } // после того как сделали идем в файл .env
}
