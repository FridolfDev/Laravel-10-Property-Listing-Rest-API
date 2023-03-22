<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'address' => [$this->isPostMethode(), 'max:255'],
            'listing_type' => [$this->isPostMethode()],
            'city' => [$this->isPostMethode()],
            'zip_code' => [$this->isPostMethode(), 'numeric'],
            'description' => [$this->isPostMethode()],
            'build_year' => [$this->isPostMethode()],
            'price' => [$this->isPostMethode()],
            'bedrooms' => [$this->isPostMethode()],
            'bathrooms' => [$this->isPostMethode()],
            'sqft' => [$this->isPostMethode()],
            'price_sqft' => [$this->isPostMethode()],
            'property_type' => [$this->isPostMethode()],
            'status' => [$this->isPostMethode()],

        ];
    }

    private function isPostMethode ()
    {
        return request()->isMethod('post') ? 'required' : 'sometimes';
    }
}
