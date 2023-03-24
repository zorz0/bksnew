@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.websitInfo.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.websit-infos.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="phone_number">{{ trans('cruds.websitInfo.fields.phone_number') }}</label>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" required>
                            @if($errors->has('phone_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone_number') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.websitInfo.fields.phone_number_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="facebook_link">{{ trans('cruds.websitInfo.fields.facebook_link') }}</label>
                            <input class="form-control" type="text" name="facebook_link" id="facebook_link" value="{{ old('facebook_link', '') }}" required>
                            @if($errors->has('facebook_link'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('facebook_link') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.websitInfo.fields.facebook_link_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="insta_link">{{ trans('cruds.websitInfo.fields.insta_link') }}</label>
                            <input class="form-control" type="text" name="insta_link" id="insta_link" value="{{ old('insta_link', '') }}" required>
                            @if($errors->has('insta_link'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('insta_link') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.websitInfo.fields.insta_link_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="youtube_link">{{ trans('cruds.websitInfo.fields.youtube_link') }}</label>
                            <input class="form-control" type="text" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', '') }}" required>
                            @if($errors->has('youtube_link'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('youtube_link') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.websitInfo.fields.youtube_link_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="who_us">{{ trans('cruds.websitInfo.fields.who_us') }}</label>
                            <input class="form-control" type="text" name="who_us" id="who_us" value="{{ old('who_us', '') }}" required>
                            @if($errors->has('who_us'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('who_us') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.websitInfo.fields.who_us_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection