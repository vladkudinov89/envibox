<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFeedbackRequest extends FormRequest
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
            'name' => 'required|min:2',
            'phone_number' => 'required',
            'message' => 'required|min:10'
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'message.required' => 'A message is required',
            'name.min' => 'Must be min 2 letters in name',
            'message.min' => 'Must be min 10 letters in feedback message',
        ];
    }
}
