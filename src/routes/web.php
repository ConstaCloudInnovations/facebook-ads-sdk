
<?php
Route::group(['namespace' => 'Facebook\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('getpackagecampaign', 'FacebookController@getpackagecampaign');
});
