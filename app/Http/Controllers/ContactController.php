<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function leave_request(ContactRequest $data){
        

        try {

            $to      = env('EMAIL_USERNAME');
            $subject = 'Заявка с сайта brestintermarket.com';
            $message = 'Сообщение: ' . $data->input('message') . PHP_EOL;
            $message .= 'От: ' . $data->input('name') . PHP_EOL;
            $message .= 'Email: ' . $data->input('email') . PHP_EOL;
            $message .= 'Телефон: ' . $data->input('phone') . PHP_EOL;
            $message .= $data->input('image') . PHP_EOL;

            $headers = 'From: ' . $data->input('email');
            mail($to, $subject, $message, $headers);

            echo '<div class="alert alert-success" role="alert">Сообщение отправлено!</div>';
        } catch (Exception $e) {
            echo '<div class="alert alert-danger" role="alert">Сообщение не отправлено. Ошибка: ' . $mail->ErrorInfo . '</div>';
        }



        return view('leave_request');




    }
}
