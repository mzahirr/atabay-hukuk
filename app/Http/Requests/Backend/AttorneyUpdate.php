<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AttorneyUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('' . env('AVUKAT-YÖNETİMİ') . '');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description'   => 'required',
            'descriptionEN' => 'required',
            'title'         => 'required',
            'titleEN'       => 'required',
            'name'          => 'required',
            'number'        => [
                'min:10',
                'max:11',
                'nullable',
            ],
            'email'         => [
                'required',
                Rule::unique('attorneys')->ignore($this->route('attorney')->id),
                'email',
            ],
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

}
