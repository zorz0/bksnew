@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.websitInfo.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.websit-infos.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websitInfo.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $websitInfo->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websitInfo.fields.phone_number') }}
                                    </th>
                                    <td>
                                        {{ $websitInfo->phone_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websitInfo.fields.facebook_link') }}
                                    </th>
                                    <td>
                                        {{ $websitInfo->facebook_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websitInfo.fields.insta_link') }}
                                    </th>
                                    <td>
                                        {{ $websitInfo->insta_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websitInfo.fields.youtube_link') }}
                                    </th>
                                    <td>
                                        {{ $websitInfo->youtube_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websitInfo.fields.who_us') }}
                                    </th>
                                    <td>
                                        {{ $websitInfo->who_us }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.websit-infos.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection