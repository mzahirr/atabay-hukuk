<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TrialUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('' . env('DAVA-YÖNETİMİ') . '');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number'      => [
                'required',
                Rule::unique('trials')->ignore($this->route('trial')->id),
            ],
            'court'       => 'required',
            'subject'     => 'required',
            'description' => 'nullable',
        ];
    }

}
