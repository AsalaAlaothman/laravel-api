<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();
        if ($method == 'PUT') {
            return [
                'name' => ['required'],
                'type' => ['required', Rule::in(['I', 'i', 'C', 'c'])],
                'email' => ['required', 'email'],
                'address' => ['required'],
                'city' => ['required'],
                'postal_code' => ['required'],
            ];
        } else {
            // patch
            return [
                'name' => ['sometimes','required'],
                'type' => ['sometimes', 'required', Rule::in(['I', 'i', 'C', 'c'])],
                'email' => ['sometimes', 'required', 'email'],
                'address' => ['sometimes','required'],
                'city' => ['sometimes','required'],
                'postal_code' => ['sometimes','required'],
            ];
            // using sometime validation because it is patch Method
        }
    }
}
