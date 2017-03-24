<?php
/*
 *  Copyright (c) 2014 The CCP project authors. All Rights Reserved.
 *
 *  Use of this source code is governed by a Beijing Speedtong Information Technology Co.,Ltd license
 *  that can be found in the LICENSE file in the root of the web site.
 *
 *   http://www.yuntongxun.com
 *
 *  An additional intellectual property rights grant can be found
 *  in the file PATENTS.  All contributing project authors may
 *  be found in the AUTHORS file in the root of the source tree.
 */

include_once "{{url('CCPRestSDK.php')}}";

//主帐号
$accountSid = '8a216da8592b16a10159448b13560eee';

//主帐号Token
$accountToken = '55eac247a3774c26ae70e02f777f6961';

//应用Id
$appId = '8a216da8592b16a10159448b13cb0ef2';

//请求地址，格式如下，不需要写https://
$serverIP = 'app.cloopen.com';

//请求端口
$serverPort = '8883';

//REST版本号
$softVersion = '2013-12-26';

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

?>
