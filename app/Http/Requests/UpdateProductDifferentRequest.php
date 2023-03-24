<?php

namespace App\Http\Requests;

use App\Models\ProductDifferent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductDifferentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_different_edit');
    }

    public function rules()
    {
        return [
            'product_difference' => [
                'string',
                'required',
            ],
        ];
    }
}
