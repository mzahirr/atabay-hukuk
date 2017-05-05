<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStore extends FormRequest
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
            'subject'       => 'required',
            'description'   => 'required',
            'subjectEN'     => 'required',
            'descriptionEN' => 'required',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

}
