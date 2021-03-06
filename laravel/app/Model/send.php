<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\REST;
class send extends Model
{
//主帐号
    public $accountSid = '8a216da8592b16a10159448b13560eee';

//主帐号Token
    public $accountToken = '55eac247a3774c26ae70e02f777f6961';

//应用Id
    public $appId = '8aaf07085af9176d015aff6843f101f6';

//请求地址，格式如下，不需要写https://
    public $serverIP = 'app.cloopen.com';

//请求端口
    public $serverPort='8883';

//REST版本号
    public $softVersion = '2013-12-26';

    /**
     * 发送模板短信
     * @param to 手机号码集合,用英文逗号分开
     * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
     * @param $tempId 模板Id
     */
    function sendTemplateSMS($to, $datas, $tempId) {
        //实例化个类的一个对象
        $rest = new REST($this->serverIP, $this->serverPort, $this->softVersion);
        //调用方法
        $rest->setAccount($this->accountSid, $this->accountToken);
        $rest->setAppId($this->appId);

        // 发送模板短信
        $result = $rest->sendTemplateSMS($to, $datas, $tempId);
        if ($result == NULL) {
            $rec['status'] = 2;
            $rec['mess'] = "result error!";
        }
        if($result->statusCode!=0) {
            $rec['status'] =  $result->statusCode . "<br>";
            $rec['mess'] =  $result->statusMsg . "<br>";
            //TODO 添加错误处理逻辑
        }else{
            // 获取返回信息
            $smsmessage = $result->TemplateSMS;
            echo "dateCreated:".$smsmessage->dateCreated."<br/>";
            echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
            //TODO 添加成功处理逻辑
        }
//        return $rec;
    }
}
