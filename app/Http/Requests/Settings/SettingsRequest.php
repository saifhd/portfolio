<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'name'=>'required',
            'email' => 'required|email',
            'facebook' => 'url|nullable|sometimes',
            'twitter' => 'url|nullable|sometimes',
            'linkedin' => 'url|nullable|sometimes',
            'instagram' => 'url|nullable|sometimes',
            'bitbucket' => 'url|nullable|sometimes',
            'gitgub' => 'url|nullable|sometimes',
            'mobile' => 'nullable|sometimes',
            'cv'=>'nullable|sometimes|mimes:pdf',
            'avatar'=>'nullable|sometimes|mimes:png,jpg'
        ];
    }
}
