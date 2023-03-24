@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.post.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.posts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $post->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.image') }}
                                    </th>
                                    <td>
                                        @foreach($post->image as $key => $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $media->getUrl('thumb') }}">
                                            </a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.contetnt') }}
                                    </th>
                                    <td>
                                        {{ $post->contetnt }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.seo') }}
                                    </th>
                                    <td>
                                        {{ $post->seo }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.category') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Post::CATEGORY_SELECT[$post->category] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.created_at') }}
                                    </th>
                                    <td>
                                        {{ $post->created_at }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.updated_at') }}
                                    </th>
                                    <td>
                                        {{ $post->updated_at }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.post.fields.deleted_at') }}
                                    </th>
                                    <td>
                                        {{ $post->deleted_at }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.posts.index') }}">
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