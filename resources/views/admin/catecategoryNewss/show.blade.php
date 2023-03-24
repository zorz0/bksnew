@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.catecategoryNews.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.catecategory-newss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.catecategoryNews.fields.id') }}
                        </th>
                        <td>
                            {{ $catecategoryNews->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catecategoryNews.fields.categorie') }}
                        </th>
                        <td>
                            {{ $catecategoryNews->categorie }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.catecategory-newss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection