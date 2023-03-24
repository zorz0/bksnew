@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.catecategoryNews.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.catecategory-newss.update", [$catecategoryNews->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="categorie">{{ trans('cruds.catecategoryNews.fields.categorie') }}</label>
                <input class="form-control {{ $errors->has('categorie') ? 'is-invalid' : '' }}" type="text" name="categorie" id="categorie" value="{{ old('categorie', $catecategoryNews->categorie) }}" required>
                @if($errors->has('categorie'))
                    <span class="text-danger">{{ $errors->first('categorie') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.catecategoryNews.fields.categorie_helper') }}</span>
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