<?php

Route::view('/', 'welcome');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tag
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    // Posts
    Route::delete('posts/destroy', 'PostsController@massDestroy')->name('posts.massDestroy');
    Route::post('posts/media', 'PostsController@storeMedia')->name('posts.storeMedia');
    Route::post('posts/ckmedia', 'PostsController@storeCKEditorImages')->name('posts.storeCKEditorImages');
    Route::resource('posts', 'PostsController');

    // Product Different
    Route::delete('product-differents/destroy', 'ProductDifferentController@massDestroy')->name('product-differents.massDestroy');
    Route::resource('product-differents', 'ProductDifferentController');

    // Websit Info
    Route::delete('websit-infos/destroy', 'WebsitInfoController@massDestroy')->name('websit-infos.massDestroy');
    Route::resource('websit-infos', 'WebsitInfoController');

    // Catecategory News
    Route::delete('catecategory-newss/destroy', 'CatecategoryNewsController@massDestroy')->name('catecategory-newss.massDestroy');
    Route::resource('catecategory-newss', 'CatecategoryNewsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tag
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    // Posts
    Route::delete('posts/destroy', 'PostsController@massDestroy')->name('posts.massDestroy');
    Route::post('posts/media', 'PostsController@storeMedia')->name('posts.storeMedia');
    Route::post('posts/ckmedia', 'PostsController@storeCKEditorImages')->name('posts.storeCKEditorImages');
    Route::resource('posts', 'PostsController');

    // Product Different
    Route::delete('product-differents/destroy', 'ProductDifferentController@massDestroy')->name('product-differents.massDestroy');
    Route::resource('product-differents', 'ProductDifferentController');

    // Websit Info
    Route::delete('websit-infos/destroy', 'WebsitInfoController@massDestroy')->name('websit-infos.massDestroy');
    Route::resource('websit-infos', 'WebsitInfoController');

    // Catecategory News
    Route::delete('catecategory-newss/destroy', 'CatecategoryNewsController@massDestroy')->name('catecategory-newss.massDestroy');
    Route::resource('catecategory-newss', 'CatecategoryNewsController');

    Route::get('frontend/profile', 'ProfileController@index')->name('profile.index');
    Route::post('frontend/profile', 'ProfileController@update')->name('profile.update');
    Route::post('frontend/profile/destroy', 'ProfileController@destroy')->name('profile.destroy');
    Route::post('frontend/profile/password', 'ProfileController@password')->name('profile.password');
});
