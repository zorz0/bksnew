@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.productDifferent.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.product-differents.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="product_difference">{{ trans('cruds.productDifferent.fields.product_difference') }}</label>
                            <input class="form-control" type="text" name="product_difference" id="product_difference" value="{{ old('product_difference', '') }}" required>
                            @if($errors->has('product_difference'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('product_difference') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection