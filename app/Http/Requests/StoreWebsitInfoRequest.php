<?php

namespace App\Http\Requests;

use App\Models\WebsitInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWebsitInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('websit_info_create');
    }

    public function rules()
    {
        return [
            'phone_number' => [
                'string',
                'required',
            ],
            'facebook_link' => [
                'string',
                'required',
            ],
            'insta_link' => [
                'string',
                'required',
            ],
            'youtube_link' => [
                'string',
                'required',
            ],
            'who_us' => [
                'string',
                'required',
            ],
        ];
    }
}
