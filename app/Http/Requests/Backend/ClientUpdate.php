<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('' . env('MÜVEKKİL-YÖNETİMİ') . '');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required',
            'identity' => [
                'required',
                Rule::unique('clients')->ignore($this->route('client')->id),
                'min:11',
            ],
            'number'   => [
                'max:11',
                'min:10',
                'nullable',
            ],
            'email'    => [
                'required',
                Rule::unique('clients')->ignore($this->route('client')->id),
                'email',
            ],
            'password' => 'min:6|nullable',
        ];
    }

}
