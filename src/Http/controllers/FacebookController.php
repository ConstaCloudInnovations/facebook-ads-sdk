<?php
namespace Facebook\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

class FacebookController extends Controller {

    public function getCampaign(Request $request){
        $id=$request->account_id;
        $app_id=$request->app_id;
        $app_secret=$request->app_secret;
        $access_token=$request->access_token;
            
        $api = Api::init($app_id, $app_secret, $access_token);
        $api->setLogger(new CurlLogger());

        $fields = array(
        'name',
        'objective',
        );
        $params = array(
        'effective_status' => array('ACTIVE','PAUSED'),
        );
        echo json_encode((new AdAccount($id))->getCampaigns(
        $fields,
        $params
        )->getResponse()->getContent(), JSON_PRETTY_PRINT);
    }

}