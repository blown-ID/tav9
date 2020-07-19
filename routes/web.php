<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect(route('login'));
});
Auth::routes([
    'verify' => false,
    'confirm' => false,
    'reset' => false
]);
Route::get('/forgot', 'Auth\LoginController@forgot')->name('forgot');
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
})->name('clear-config');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/payment', 'HomeController@payment')->name('payment');
    Route::post('/payment/submit', 'HomeController@submitpayment')->name('payment.submit');

    Route::group(['middleware' => 'cekPayment'], function () {
        // Kalo udah bayar
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/password', 'PasswordController@index')->name('password');
        Route::post('/password', 'PasswordController@store')->name('password.store');

        Route::group(['middleware' => ['role:SMP|SMA|SMK']], function () {
            Route::resource('biodata', 'BiodataController')->except('destroy', 'show', 'update', 'edit');
            Route::get('fotoprofil', 'BiodataController@foto')->name('biodata.foto');
            Route::resource('orangtua', 'ParentController')->except('destroy', 'show', 'update', 'edit');
            Route::get('examcard', 'HomeController@examcard')->name('examcard');
            Route::post('examcard', 'HomeController@examcardPost')->name('examcard.post');
            Route::get('information', 'HomeController@information')->name('information');
            Route::get('rincian_biaya', 'HomeController@rincian_biaya')->name('rincian_biaya');
            Route::get('avatar', 'AvatarController@index')->name('avatar');
            Route::post('avatar', 'AvatarController@store')->name('avatar.store');
            Route::resource('pembayaransiswa', 'PembayaranSiswaController')->except('show', 'edit', 'update', 'destroy');
        }); // end route prefix SMP

        Route::group(['middleware' => ['role:Super Admin']], function () {
            // start superadmin only
            Route::resource('settings', 'SettingController')->except('destroy', 'show', 'create', 'edit');
            Route::post('updategelombang/{id}', 'SettingController@updategelombang')->name('settings.updategelombang');
            Route::get('editbiaya/{id?}', 'SettingController@editbiaya')->name('settings.editbiaya'); //biaya formulir dll
            Route::put('editbiaya/{id?}', 'SettingController@updatebiaya')->name('settings.editbiaya');
            Route::put('updatepengaturan/{id}', 'SettingController@updatepengaturan')->name('updatepengaturan');
            Route::resource('role', 'RoleController')->except('edit', 'update', 'show');
            Route::resource('admin', 'AdminController')->except('edit', 'show', 'create');
        }); // end route prefix SuperAdmin

        Route::group(['middleware' => ['role:Super Admin|Admin Keuangan']], function () {
            Route::get('biaya/buat/{id}', 'BiayaController@buat')->name('biaya.buat');
            Route::resource('biaya', 'BiayaController');
            Route::get('biaya/print/{id}', 'BiayaController@print')->name('biaya.print');
            Route::post('biaya/printpayment/', 'BiayaController@printpayment')->name('biaya.printpayment');
            Route::post('biaya/tambah_detail/{id}', 'BiayaController@tambah_detail')->name('biaya.tambah_detail');
            Route::delete('biaya/delete_detail/{id}', 'BiayaController@delete_detail')->name('biaya.delete_detail');
        });
        Route::group(['middleware' => ['role:Super Admin|Admin SMP']], function () {
            // start superadmin x Admin SMP only
            Route::resource('mgtSMP', 'ManagementSMP')->except('store', 'create',);
            Route::get('editparentsSMP/{id}', 'ManagementSMP@editparents')->name('mgtSMP.editparents');
            Route::post('bayarformulirSMP/{id}', 'ManagementSMP@bayarformulir')->name('mgtSMP.bayarformulir');
            Route::post('updateparentsSMP/{id}', 'ManagementSMP@updateparents')->name('mgtSMP.updateparents');
            Route::post('updatepasswordSMP/{id}', 'ManagementSMP@updatepassword')->name('mgtSMP.updatepassword');
            Route::post('printkartuSMP/{id}', 'ManagementSMP@printkartu')->name('mgtSMP.printkartu');
            Route::post('updatenilaiSMP/{id}', 'ManagementSMP@updatenilai')->name('mgtSMP.updatenilai');
            Route::get('/laporan-smp', 'ManagementSMP@laporanSMP')->name('laporansmp');
        }); // end route prefix SuperAdmin
        Route::group(['middleware' => ['role:Super Admin|Admin SMA']], function () {
            Route::resource('mgtSMA', 'ManagementSMA')->except('store', 'create');
            Route::post('bayarformulirSMA/{id}', 'ManagementSMA@bayarformulir')->name('mgtSMA.bayarformulir');
            Route::get('editparentsSMA/{id}', 'ManagementSMA@editparents')->name('mgtSMA.editparents');
            Route::post('updateparentsSMA/{id}', 'ManagementSMA@updateparents')->name('mgtSMA.updateparents');
            Route::post('updatepasswordSMA/{id}', 'ManagementSMA@updatepassword')->name('mgtSMA.updatepassword');
            Route::post('printkartuSMA/{id}', 'ManagementSMA@printkartu')->name('mgtSMA.printkartu');
            Route::post('updatenilaiSMA/{id}', 'ManagementSMA@updatenilai')->name('mgtSMA.updatenilai');
        }); // end route prefix SuperAdmin
    }); // end checkpayment
}); // end auth
