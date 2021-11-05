<?php

namespace App\Http\Requests\Career;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'company_name'=>'required',
            'title'=>'required',
            'start_date'=>'required|date',
            'end_date'=>'sometimes|date|nullable'
        ];
    }
}
