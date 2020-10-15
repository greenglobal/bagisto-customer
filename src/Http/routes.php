<?php

Route::group(['middleware' => ['web']], function () {
    Route::prefix(config('app.admin_url'))->group(function () {
        Route::group(['middleware' => ['admin']], function () {
            Route::prefix('customer')->group(function () {
                Route::get('/attributes', 'GGPHP\Customer\Http\Controllers\AttributeController@index')->defaults('_config', [
                    'view' => 'ggphp-customer::customer.attributes.index',
                ])->name('admin.customer.attributes.index');
                Route::get('/attributes/edit/{id}', 'GGPHP\Customer\Http\Controllers\AttributeController@edit')->defaults('_config', [
                    'view' => 'ggphp-customer::customer.attributes.edit',
                ])->name('admin.customer.attributes.edit');
                Route::post('/attributes/delete/{id}', 'GGPHP\Customer\Http\Controllers\AttributeController@destroy')
                    ->name('admin.customer.attributes.delete');
                Route::post('/attributes/massdelete', 'GGPHP\Customer\Http\Controllers\AttributeController@massDestroy')
                    ->name('admin.customer.attributes.massdelete');
            });
        });
    });
});
