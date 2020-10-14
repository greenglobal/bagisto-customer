<?php

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {
    Route::prefix('customer')->group(function () {
        Route::get('/attributes', 'GGPHP\Customer\Http\Controllers\AttributeController@index')->defaults('_config', [
            'view' => 'ggphp-customer::customer.attributes.index',
        ])->name('admin.customer.attributes.index');
    });
});
