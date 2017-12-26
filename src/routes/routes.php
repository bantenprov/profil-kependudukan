<?php

Route::group(['prefix' => 'profil-kependudukan'], function() {
    Route::get('demo', 'Bantenprov\ProfilKependudukan\Http\Controllers\ProfilKependudukanController@demo');
});
