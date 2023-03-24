@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.websitInfo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.websit-infos.update", [$websitInfo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="phone_number">{{ trans('cruds.websitInfo.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $websitInfo->phone_number) }}" required>
                @if($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.websitInfo.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="facebook_link">{{ trans('cruds.websitInfo.fields.facebook_link') }}</label>
                <input class="form-control {{ $errors->has('facebook_link') ? 'is-invalid' : '' }}" type="text" name="facebook_link" id="facebook_link" value="{{ old('facebook_link', $websitInfo->facebook_link) }}" required>
                @if($errors->has('facebook_link'))
                    <span class="text-danger">{{ $errors->first('facebook_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.websitInfo.fields.facebook_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="insta_link">{{ trans('cruds.websitInfo.fields.insta_link') }}</label>
                <input class="form-control {{ $errors->has('insta_link') ? 'is-invalid' : '' }}" type="text" name="insta_link" id="insta_link" value="{{ old('insta_link', $websitInfo->insta_link) }}" required>
                @if($errors->has('insta_link'))
                    <span class="text-danger">{{ $errors->first('insta_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.websitInfo.fields.insta_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="youtube_link">{{ trans('cruds.websitInfo.fields.youtube_link') }}</label>
                <input class="form-control {{ $errors->has('youtube_link') ? 'is-invalid' : '' }}" type="text" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', $websitInfo->youtube_link) }}" required>
                @if($errors->has('youtube_link'))
                    <span class="text-danger">{{ $errors->first('youtube_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.websitInfo.fields.youtube_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="who_us">{{ trans('cruds.websitInfo.fields.who_us') }}</label>
                <input class="form-control {{ $errors->has('who_us') ? 'is-invalid' : '' }}" type="text" name="who_us" id="who_us" value="{{ old('who_us', $websitInfo->who_us) }}" required>
                @if($errors->has('who_us'))
                    <span class="text-danger">{{ $errors->first('who_us') }}</span>
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



@endsection