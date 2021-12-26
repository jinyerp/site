<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Jiny\Table\Http\Controllers\TableController;

// 관리자 URL
Route::middleware(['web','auth:sanctum', 'verified'])
->name('admin.site.')
->prefix('/admin/site')->group(function () {

    Route::resource('/language', TableController::class);
    Route::resource('/widget', TableController::class);

    ## 설정
    Route::resource('setting', \Jiny\Site\Http\Controllers\Admin\SettingController::class);

});
