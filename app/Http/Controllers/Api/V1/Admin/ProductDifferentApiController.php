<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductDifferentRequest;
use App\Http\Requests\UpdateProductDifferentRequest;
use App\Http\Resources\Admin\ProductDifferentResource;
use App\Models\ProductDifferent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductDifferentApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_different_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductDifferentResource(ProductDifferent::all());
    }

    public function store(StoreProductDifferentRequest $request)
    {
        $productDifferent = ProductDifferent::create($request->all());

        return (new ProductDifferentResource($productDifferent))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ProductDifferent $productDifferent)
    {
        abort_if(Gate::denies('product_different_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductDifferentResource($productDifferent);
    }

    public function update(UpdateProductDifferentRequest $request, ProductDifferent $productDifferent)
    {
        $productDifferent->update($request->all());

        return (new ProductDifferentResource($productDifferent))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ProductDifferent $productDifferent)
    {
        abort_if(Gate::denies('product_different_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productDifferent->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
