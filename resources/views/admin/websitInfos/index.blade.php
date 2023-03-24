@extends('layouts.admin')
@section('content')
@can('websit_info_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.websit-infos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.websitInfo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.websitInfo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-WebsitInfo">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.websitInfo.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.websitInfo.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.websitInfo.fields.facebook_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.websitInfo.fields.insta_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.websitInfo.fields.youtube_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.websitInfo.fields.who_us') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($websitInfos as $key => $websitInfo)
                        <tr data-entry-id="{{ $websitInfo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $websitInfo->id ?? '' }}
                            </td>
                            <td>
                                {{ $websitInfo->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $websitInfo->facebook_link ?? '' }}
                            </td>
                            <td>
                                {{ $websitInfo->insta_link ?? '' }}
                            </td>
                            <td>
                                {{ $websitInfo->youtube_link ?? '' }}
                            </td>
                            <td>
                                {{ $websitInfo->who_us ?? '' }}
                            </td>
                            <td>
                                @can('websit_info_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.websit-infos.show', $websitInfo->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('websit_info_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.websit-infos.edit', $websitInfo->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('websit_info_delete')
                                    <form action="{{ route('admin.websit-infos.destroy', $websitInfo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('websit_info_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.websit-infos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-WebsitInfo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection