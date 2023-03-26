<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Posts
    Route::post('posts/media', 'PostsApiController@storeMedia')->name('posts.storeMedia');
    Route::apiResource('posts', 'PostsApiController');

    // Product Different
    Route::apiResource('product-differents', 'ProductDifferentApiController');

    // Slider
    Route::post('sliders/media', 'SliderApiController@storeMedia')->name('sliders.storeMedia');
    Route::apiResource('sliders', 'SliderApiController');
});
