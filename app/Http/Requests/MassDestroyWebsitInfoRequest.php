<?php

namespace App\Http\Requests;

use App\Models\WebsitInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWebsitInfoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('websit_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:websit_infos,id',
        ];
    }
}
