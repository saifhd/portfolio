<?php

namespace App\Http\Requests\Skill;

use Illuminate\Foundation\Http\FormRequest;
use SebastianBergmann\CodeCoverage\Percentage;

class SkillRequest extends FormRequest
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
            'title'=>'required',
            'percentage'=>'required|numeric|min:1|max:100'
        ];
    }
}
