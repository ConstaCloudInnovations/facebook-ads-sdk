
<?php
Route::group(['namespace' => 'Facebook\Http\Controllers', 'middleware' => ['web']], function(){
    Route::post('getcampaign', 'FacebookController@getCampaign');
});
