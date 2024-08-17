<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class GenerateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'N' => 'alpha_dash:ascii',
            'C' => 'nullable|regex:/^[\w@.-]+$/',
            't' => 'nullable|in:rsa,dsa,ecdsa,ed25519,RSA,DSA,ECDSA,ED25519',
            'b' => 'nullable|integer|min:1|max:4294967295',
        ];
    }

    /**
     * Prevent redirect
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 422));
    }
}
