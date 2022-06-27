<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'sexe' => ['required', 'integer'],
            'birthday' => ['required','date'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
            'card_number' => ['required', 'integer'],
            'image' => ['required','file', 'mimes:png,jpg,jpeg,webp']   
        ];
    }
}
