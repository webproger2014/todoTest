<?php

namespace Modules\Todo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TodoSearchByFilterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'status' => ['array'],
            'status.*' => ['integer'],

            'order' => ['array', 'size:2'],
            'order.0' => ['string'],
            'order.1' => Rule::in(['asc', 'desc'])
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
