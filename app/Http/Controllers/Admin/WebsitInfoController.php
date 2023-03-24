<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWebsitInfoRequest;
use App\Http\Requests\StoreWebsitInfoRequest;
use App\Http\Requests\UpdateWebsitInfoRequest;
use App\Models\WebsitInfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WebsitInfoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('websit_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $websitInfos = WebsitInfo::all();

        return view('admin.websitInfos.index', compact('websitInfos'));
    }

    public function create()
    {
        abort_if(Gate::denies('websit_info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.websitInfos.create');
    }

    public function store(StoreWebsitInfoRequest $request)
    {
        $websitInfo = WebsitInfo::create($request->all());

        return redirect()->route('admin.websit-infos.index');
    }

    public function edit(WebsitInfo $websitInfo)
    {
        abort_if(Gate::denies('websit_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.websitInfos.edit', compact('websitInfo'));
    }

    public function update(UpdateWebsitInfoRequest $request, WebsitInfo $websitInfo)
    {
        $websitInfo->update($request->all());

        return redirect()->route('admin.websit-infos.index');
    }

    public function show(WebsitInfo $websitInfo)
    {
        abort_if(Gate::denies('websit_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.websitInfos.show', compact('websitInfo'));
    }

    public function destroy(WebsitInfo $websitInfo)
    {
        abort_if(Gate::denies('websit_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $websitInfo->delete();

        return back();
    }

    public function massDestroy(MassDestroyWebsitInfoRequest $request)
    {
        $websitInfos = WebsitInfo::find(request('ids'));

        foreach ($websitInfos as $websitInfo) {
            $websitInfo->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
