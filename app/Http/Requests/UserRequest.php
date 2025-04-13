<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;


class UserRequest extends FormRequest
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
            "name" => "required|min:3",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Name is required",
            "name.min" => "Name is max 3 characters",
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        $error= $validator->errors()->all();
        throw new HttpResponseException($this->failJson(400, $error));
    }

    protected function failJson(int $code, array $errors): JsonResponse
    {
        return response()->json(
            [
                'code' => $code,
                'errors' => $errors,
            ]
        );
    }

}
