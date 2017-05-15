<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PartnerUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('' . env('İÇERİK-YÖNETİMİ') . '');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=200,min_height=200',
        ];
    }

}
