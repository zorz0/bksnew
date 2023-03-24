<?php

namespace App\Http\Requests;

use App\Models\CatecategoryNews;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCatecategoryNewsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('catecategory_news_create');
    }

    public function rules()
    {
        return [
            'categorie' => [
                'string',
                'required',
            ],
        ];
    }
}
