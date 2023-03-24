@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.productDifferent.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.product-differents.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="product_difference">{{ trans('cruds.productDifferent.fields.product_difference') }}</label>
                <input class="form-control {{ $errors->has('product_difference') ? 'is-invalid' : '' }}" type="text" name="product_difference" id="product_difference" value="{{ old('product_difference', '') }}" required>
                @if($errors->has('product_difference'))
                    <span class="text-danger">{{ $errors->first('product_difference') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productDifferent.fields.product_difference_helper') }}</span>
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