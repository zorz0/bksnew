<?php

namespace App\Http\Requests;

use App\Models\CatecategoryNews;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCatecategoryNewsRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('catecategory_news_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:catecategory_newss,id',
        ];
    }
}
