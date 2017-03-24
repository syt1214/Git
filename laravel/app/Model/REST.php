<?php



/**
 * 发送模板短信
 * @param to 手机号码集合,用英文逗号分开
 * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
 * @param $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1，正式应用上线后填写已申请审核通过的模板ID
 */
Namespace App\Model;
class REST {
    private $AccountSid;
    private $AccountToken;
    private $AppId;
    private $ServerIP;
    private $ServerPort;
    private $SoftVersion;
    private $Batch;  //时间戳
    private $BodyType = "xml";//包体格式，可填值：json 、xml
    private $enabeLog = true; //日志开关。可填值：true、
    private $Filename="./log.txt"; //日志文件
    private $Handle;
    function __construct($ServerIP,$ServerPort,$SoftVersion)
    {
        $this->Batch = date("YmdHis");
        $this->ServerIP = $ServerIP;
        $this->ServerPort = $ServerPort;
        $this->SoftVersion = $SoftVersion;
        $this->Handle = fopen($this->Filename, 'a');
    }

    /**
     * 设置主帐号
     *
     * @param AccountSid 主帐号
     * @param AccountToken 主帐号Token
     */
    function setAccount($AccountSid,$AccountToken){
        $this->AccountSid = $AccountSid;
        $this->AccountToken = $AccountToken;
    }


    /**
     * 设置应用ID
     *
     * @param AppId 应用ID
     */
    function setAppId($AppId){
        $this->AppId = $AppId;
    }

    /**
     * 打印日志
     *
     * @param log 日志内容
     */
    function showlog($log){
        if($this->enabeLog){
            fwrite($this->Handle,$log."\n");
        }
    }

    /**
     * 发起HTTPS请求
     */
    function curl_post($url,$data,$header,$post=1)
    {
        //初始化curl
        $ch = curl_init();
        //参数设置
        $res= curl_setopt ($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt ($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, $post);
        if($post)
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        $result = curl_exec ($ch);
        //连接失败
        if($result == FALSE){
            if($this->BodyType=='json'){
                $result = "{\"statusCode\":\"172001\",\"statusMsg\":\"网络错误\"}";
            } else {
                $result = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?><Response><statusCode>172001</statusCode><statusMsg>网络错误</statusMsg></Response>";
            }
        }

        curl_close($ch);
        return $result;
    }



    /**
     * 发送模板短信
     * @param to 短信接收彿手机号码集合,用英文逗号分开
     * @param datas 内容数据
     * @param $tempId 模板Id
     */
    function sendTemplateSMS($to,$datas,$tempId)
    {
        //主帐号鉴权信息验证，对必选参数进行判空。
        $auth=$this->accAuth();
        if($auth!=""){
            return $auth;
        }
        // 拼接请求包体
        if($this->BodyType=="json"){
            $data="";
            for($i=0;$i<count($datas);$i++){
                $data = $data. "'".$datas[$i]."',";
            }
            $body= "{'to':'$to','templateId':'$tempId','appId':'$this->AppId','datas':[".$data."]}";
        }else{
            $data="";
            for($i=0;$i<count($datas);$i++){
                $data = $data. "<data>".$datas[$i]."</data>";
            }
            $body="<TemplateSMS>
                    <to>$to</to> 
                    <appId>$this->AppId</appId>
                    <templateId>$tempId</templateId>
                    <datas>".$data."</datas>
                  </TemplateSMS>";
        }
        $this->showlog("request body = ".$body);
        // 大写的sig参数
        $sig =  strtoupper(md5($this->AccountSid . $this->AccountToken . $this->Batch));
        // 生成请求URL
        $url="https://$this->ServerIP:$this->ServerPort/$this->SoftVersion/Accounts/$this->AccountSid/SMS/TemplateSMS?sig=$sig";
        $this->showlog("request url = ".$url);
        // 生成授权：主帐户Id + 英文冒号 + 时间戳。
        $authen = base64_encode($this->AccountSid . ":" . $this->Batch);
        // 生成包头
        $header = array("Accept:application/$this->BodyType","Content-Type:application/$this->BodyType;charset=utf-8","Authorization:$authen");
        // 发送请求
        $result = $this->curl_post($url,$body,$header);
        $this->showlog("response body = ".$result);
        if($this->BodyType=="json"){//JSON格式
            $datas=json_decode($result);
        }else{ //xml格式
            $datas = simplexml_load_string(trim($result," \t\n\r"));
        }
        //  if($datas == FALSE){
        //       $datas = new stdClass();
        //         $datas->statusCode = '172003';
        //          $datas->statusMsg = '返回包体错误';
        //     }
        //重新装填数据
        if($datas->statusCode==0){
            if($this->BodyType=="json"){
                $datas->TemplateSMS =$datas->templateSMS;
                unset($datas->templateSMS);
            }
        }

        return $datas;
    }

    /**
     * 主帐号鉴权
     */
    function accAuth()
    {
        if($this->ServerIP==""){
            $data = new stdClass();
            $data->statusCode = '172004';
            $data->statusMsg = 'IP为空';
            return $data;
        }
        if($this->ServerPort<=0){
            $data = new stdClass();
            $data->statusCode = '172005';
            $data->statusMsg = '端口错误（小于等于0）';
            return $data;
        }
        if($this->SoftVersion==""){
            $data = new stdClass();
            $data->statusCode = '172013';
            $data->statusMsg = '版本号为空';
            return $data;
        }
        if($this->AccountSid==""){
            $data = new stdClass();
            $data->statusCode = '172006';
            $data->statusMsg = '主帐号为空';
            return $data;
        }
        if($this->AccountToken==""){
            $data = new stdClass();
            $data->statusCode = '172007';
            $data->statusMsg = '主帐号令牌为空';
            return $data;
        }
        if($this->AppId==""){
            $data = new stdClass();
            $data->statusCode = '172012';
            $data->statusMsg = '应用ID为空';
            return $data;
        }
    }
}


function sendTemplateSMS($to,$datas,$tempId)
{

    //主帐号,对应开官网发者主账号下的 ACCOUNT SID
    $accountSid= '8aaf0708584c07c201585c4ca45d0b23';

    //主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
    $accountToken= 'bb1914eda65546b7ae7397b32f272554';

    //应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
    //在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
    $appId='8aaf0708584c07c201585c4ca48d0b25';

    //请求地址
    //沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
    //生产环境（用户应用上线使用）：app.cloopen.com
    $serverIP='app.cloopen.com';


    //请求端口，生产环境和沙盒环境一致
    $serverPort='8883';

    //REST版本号，在官网文档REST介绍中获得。
    $softVersion='2013-12-26';

    // 初始化REST SDK
    $rest = new REST($serverIP,$serverPort,$softVersion);
    $rest->setAccount($accountSid,$accountToken);
    $rest->setAppId($appId);

    // 发送模板短信
    // echo "Sending TemplateSMS to $to <br/>";
    $result = $rest->sendTemplateSMS($to,$datas,$tempId);
    if($result == NULL ) {
        /*echo "result error!";
        break;*/

        $rec['status']=2;//错误返回2
        $rec['mess']="result error!";
        return $rec;

    }
    if($result->statusCode!=0) {
        echo "error code :" . $result->statusCode . "<br>";
        echo "error msg :" . $result->statusMsg . "<br>";
        //TODO 添加错误处理逻辑
        $rec['status']=1;//发送失败返回1
        $rec['mess']='发送失败';
        return $rec;
    }else{
        /*echo "Sendind TemplateSMS success!<br/>";
        // 获取返回信息
        $smsmessage = $result->TemplateSMS;
        echo "dateCreated:".$smsmessage->dateCreated."<br/>";
        echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";*/
        //TODO 添加成功处理逻辑
        $rec['status']=0;//发送成功返回0
        $rec['mess']='发送成功';
        return $rec;
    }
}

// /**
//  * 系统邮件发送函数
//  * @param string $tomail 接收邮件者邮箱
//  * @param string $name 接收邮件者名称
//  * @param string $subject 邮件主题
//  * @param string $body 邮件内容
//  * @param string $attachment 附件列表
//  * @return boolean
//  * @author static7 <static7@qq.com>
//  */
function send_mail($tomail, $name, $subject = '', $body = '', $attachment = null) {
    $mail = new \PHPMailer();           //实例化PHPMailer对象
    $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();                    // 设定使用SMTP服务
    $mail->SMTPDebug = 0;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
    $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';          // 使用安全协议
    $mail->Host = "smtp.163.com"; // SMTP 服务器
    $mail->Port = 465;                  // SMTP服务器的端口号
    $mail->Username = "15670967358@163.com";    // SMTP服务器用户名
    $mail->Password = "chang57620";     // SMTP服务器密码
    $mail->SetFrom('15670967358@163.com', $name);
    $replyEmail = "";                   //留空则为发件人EMAIL
    $replyName = "";                    //回复名称（留空则为发件人名称）
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($tomail, "工作人员");
    if (is_array($attachment)) { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    return $mail->Send() ? true : $mail->ErrorInfo;
}
