<?php

namespace App\SMS;

use App\SMS\M3Result;

class SendTemplateSMS
{
    //主帐号
    private $accountSid= 'aaf98f8947afdd330147b443bda50926';
    //主帐号Token
    private $accountToken= '407924769f1540d0973c2e439de22216';
    //应用Id
    private $appId='8aaf070858f8050b0158fb263252019d';
    //请求地址，格式如下，不需要写https://
    private $serverIP='app.cloopen.com';
    //请求端口
    private $serverPort='8883';
    //REST版本号
    private $softVersion='2013-12-26';


  /**
    * 发送模板短信
    * @param to 手机号码集合,用英文逗号分开
    * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
    * @param $tempId 模板Id
    */
  public function sendTemplateSMS($to,$datas,$type)
  {
      $maps= config('sms');
      $tempId = $maps[$type] ?? false;
      if($tempId){
          throw new \Exception("cont found {$type}");
      }
      $m3_result = new M3Result;

       // 初始化REST SDK
       $rest = new CCPRestSDK($this->serverIP,$this->serverPort,$this->softVersion);
       $rest->setAccount($this->accountSid,$this->accountToken);
       $rest->setAppId($this->appId);

       // 发送模板短信
      //  echo "Sending TemplateSMS to $to <br/>";
       $result = $rest->sendTemplateSMS($to,$datas,$tempId);
       if($result == NULL ) {
           $m3_result->status = 3;
           $m3_result->message = 'result error!';
       }
       if($result->statusCode != 0) {
           $m3_result->status = $result->statusCode;
           $m3_result->message = $result->statusMsg;
       }else{
           $m3_result->status = 0;
           $m3_result->message = '发送成功';
       }

       return $m3_result;

      //调试输出信息
      /*if($result == NULL){
          echo "result erro";
      }
      if($result->statusCode !=0){
          echo "error code:".$result->statusCode."<br/>";
          echo "error msg:".$result->statusMsg."<br/>";
      }else{
          echo "Sendind TemplateSMS success<br/>";

          $smsmessage = $result->TemplateSMS;
          echo "dateCreated:".$smsmessage->dateCreated."<br/>";
          echo "msmMessageSid:".$smsmessage->smsMessageSid."<br/>";
      }*/

  }
}

//sendTemplateSMS("18576437523", array(1234, 5), 1);
