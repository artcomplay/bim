<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\PHPMailer\PHPMailer;
use App\Http\Controllers\PHPMailer\Exception;
use App\Http\Controllers\PHPMailer\SMTP;



class ContactController extends Controller
{
    public function leave_request(ContactRequest $data){
        
        /*$email = new PHPMailer();
        $email->SetFrom($data->input('email'), $data->input('name')); //Name is optional
        $email->Subject   = 'Заявка с сайта brestintermarket.com';
        $email->Body      = $data->input('message');
        $email->AddAddress( 'artcomplay@gmail.com' );
        
        //$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';
        
        $file_to_attach = realpath($data->input('image'));



        $email->AddAttachment( $file_to_attach , $data->input('image'));
        
        return $email->Send();*/
        
        try {

            //$uid = md5(uniqid(time()));

            $to      = env('EMAIL_USERNAME');
            $subject = 'Заявка с сайта brestintermarket.com';
            $message = 'Сообщение: ' . $data->input('message') . PHP_EOL;
            $message .= 'От: ' . $data->input('name') . PHP_EOL;
            $message .= 'Email: ' . $data->input('email') . PHP_EOL;
            $message .= 'Телефон: ' . $data->input('phone') . PHP_EOL;
            //$message .= $data->input('image') . PHP_EOL;
            //$content = chunk_split(base64_encode($data->input('image')));


            /*$header = "From: " . $data->input('name') . PHP_EOL;
            if($content != null){
                
                $header .= "Content-Type: application/octet-stream; name= " . $data->input('image') . PHP_EOL;
                $header .= "Content-Transfer-Encoding: base64" . PHP_EOL;
                $header .= "Content-Disposition: attachment; filename=". $data->input('image') . PHP_EOL;
                $header .= $content . PHP_EOL;

            }*/

            //$headers = 'From: ' . $data->input('email');
            $mail_send_result = mail($to, $subject, $message);
            //var_dump($content);
            //echo $header;
            echo '<div class="alert alert-success" role="alert">Сообщение отправлено!</div>';
        } catch (Exception $e) {
            echo '<div class="alert alert-danger" role="alert">Сообщение не отправлено. Ошибка: ' . $mail->ErrorInfo . '</div>';
        }

        return view('leave_request');

    }
}
