<?php

namespace Modules\Todo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTodoItemRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:10', 'max:100'],
            'desc' => ['string', 'min:10', 'max:800'],
            'deadline_at' => ['date'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
