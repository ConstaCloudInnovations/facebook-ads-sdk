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

    public function getpackagecampaign(Request $request){
        $app_id = $_ENV['FACEBOOK_CLIENT_ID'];
        $app_secret = $_ENV['FACEBOOK_CLIENT_SECRET'];
        $access_token = $_ENV['FACEBOOK_TOKEN'];
        $id=$request->account_id;
            
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