<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|min:1|max:15',
            'message' => 'required|min:1|max:300'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Поле Имя должно быть заполнено!',
            'email.required' => 'Поле Email должно быть заполнено!',
            'phone.required' => 'Поле Телефон должно быть заполнено!',
            'message.required' => 'Поле Текст сообщения должно быть заполнено!',
        ];
    }
}
