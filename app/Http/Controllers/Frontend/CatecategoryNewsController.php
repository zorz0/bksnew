<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCatecategoryNewsRequest;
use App\Http\Requests\StoreCatecategoryNewsRequest;
use App\Http\Requests\UpdateCatecategoryNewsRequest;
use App\Models\CatecategoryNews;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CatecategoryNewsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('catecategory_news_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $catecategoryNewss = CatecategoryNews::all();

        return view('frontend.catecategoryNewss.index', compact('catecategoryNewss'));
    }

    public function create()
    {
        abort_if(Gate::denies('catecategory_news_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.catecategoryNewss.create');
    }

    public function store(StoreCatecategoryNewsRequest $request)
    {
        $catecategoryNews = CatecategoryNews::create($request->all());

        return redirect()->route('frontend.catecategory-newss.index');
    }

    public function edit(CatecategoryNews $catecategoryNews)
    {
        abort_if(Gate::denies('catecategory_news_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.catecategoryNewss.edit', compact('catecategoryNews'));
    }

    public function update(UpdateCatecategoryNewsRequest $request, CatecategoryNews $catecategoryNews)
    {
        $catecategoryNews->update($request->all());

        return redirect()->route('frontend.catecategory-newss.index');
    }

    public function show(CatecategoryNews $catecategoryNews)
    {
        abort_if(Gate::denies('catecategory_news_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.catecategoryNewss.show', compact('catecategoryNews'));
    }

    public function destroy(CatecategoryNews $catecategoryNews)
    {
        abort_if(Gate::denies('catecategory_news_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $catecategoryNews->delete();

        return back();
    }

    public function massDestroy(MassDestroyCatecategoryNewsRequest $request)
    {
        $catecategoryNewss = CatecategoryNews::find(request('ids'));

        foreach ($catecategoryNewss as $catecategoryNews) {
            $catecategoryNews->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
