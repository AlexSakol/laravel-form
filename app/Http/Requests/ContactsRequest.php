<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:50',
            'message' => 'required|min:3|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя не должно быть пустым',
            'name.min' => 'Имя должно быть более 3-х символов',
            'name.max' => "Имя должно быть не более 50-ти символов",
            'email.required' => 'Поле email не должно быть пустым',
            'email.email' => 'Некорректный формат e-mail',
            'subject.required' => 'Поле тема не должно быть пустым',
            'subject.min' => 'Тема должна быть более 3-х символов',
            'subject.max' => "Тема должна быть не более 50-ти символов",
            'message.required' => 'Поле сообщение не должно быть пустым',
            'message.min' => 'Сообщение должно быть более 3-х символов',
            'message.max' => "Сообщение должно быть не более 255-ти символов"
        ];
    }

    public function method()
    {
        return 'post';
    }

}
