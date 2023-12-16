<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class annonceRequest extends FormRequest
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
        return ['title'=>'required|min:3','script'=>'required|min:3|max:150'
        ,'price'=>'required','photo'=>'required|mimes:jpg,png'];
    }
}
