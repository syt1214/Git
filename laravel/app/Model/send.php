<?php

namespace App\Model;
use App\Model\REST;
//include '/REST.php';
class send
{

//主帐号
public $accountSid = '8a216da8592b16a10159448b13560eee';

//主帐号Token
public $accountToken = '55eac247a3774c26ae70e02f777f6961';

//应用Id
public $appId = '8a216da8592b16a10159448b13cb0ef2';

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
    // 初始化REST SDK
    global $accountSid, $accountToken, $appId, $serverIP, $serverPort, $softVersion;
    //实例化个类的一个对象
    $rest = new REST($serverIP, $serverPort, $softVersion);
    //调用方法
    $rest->setAccount($accountSid, $accountToken);
    $rest->setAppId($appId);

    // 发送模板短信
    $result = $rest->sendTemplateSMS($to, $datas, $tempId);
    if ($result == NULL) {
        $rec['status'] = 2;
        $rec['mess'] = "result error!";
    }
    if ($result->statusCode != 0) {
        $rec['status'] = 1;
        $rec['mess'] = '发送失败';
        //TODO 添加错误处理逻辑
    } else {
        $rec['status'] = 0;
        $rec['mess'] = '发送成功';
    }
    return $rec;
}
}

