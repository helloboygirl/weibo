<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use session;

class CodeController extends Controller
{
    //
    public function send(Request $request)
    {	
    	$phone = $_POST['phone'];
		$code = rand(100000 , 999999);

    	$config = [
    		'accessKeyId'    => 'LTAIo4FNWufLf6AD ',
    		'accessKeySecret' => 'jnnL4h126ZjqjkLvIcbjp2kozkBGCc',
		];

		$client  = new Client($config);
          $sendSms = new SendSms;
          $sendSms->setPhoneNumbers($phone);
          $sendSms->setSignName('张康');
          $sendSms->setTemplateCode('SMS_111555094');
          $sendSms->setTemplateParam(['code'=>$code]);
          $sendSms->setOutId('demo');
    	    $resp= $client->execute($sendSms);

		print_r($client->execute($sendSms));

		session(["code"=>$code]);

    }
}
