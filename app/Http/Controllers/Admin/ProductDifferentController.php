<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductDifferentRequest;
use App\Http\Requests\StoreProductDifferentRequest;
use App\Http\Requests\UpdateProductDifferentRequest;
use App\Models\ProductDifferent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductDifferentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_different_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productDifferents = ProductDifferent::all();

        return view('admin.productDifferents.index', compact('productDifferents'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_different_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productDifferents.create');
    }

    public function store(StoreProductDifferentRequest $request)
    {
        $productDifferent = ProductDifferent::create($request->all());

        return redirect()->route('admin.product-differents.index');
    }

    public function edit(ProductDifferent $productDifferent)
    {
        abort_if(Gate::denies('product_different_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productDifferents.edit', compact('productDifferent'));
    }

    public function update(UpdateProductDifferentRequest $request, ProductDifferent $productDifferent)
    {
        $productDifferent->update($request->all());

        return redirect()->route('admin.product-differents.index');
    }

    public function show(ProductDifferent $productDifferent)
    {
        abort_if(Gate::denies('product_different_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productDifferents.show', compact('productDifferent'));
    }

    public function destroy(ProductDifferent $productDifferent)
    {
        abort_if(Gate::denies('product_different_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productDifferent->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductDifferentRequest $request)
    {
        $productDifferents = ProductDifferent::find(request('ids'));

        foreach ($productDifferents as $productDifferent) {
            $productDifferent->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
