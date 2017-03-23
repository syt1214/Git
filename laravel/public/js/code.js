window.onload = function() {
    $(".acq_check").click(function yanzheng(e) {
        var i = 60;
        $(".acq_check").val(i + "秒后可重发");
        $(".acq_check").attr("disabled", true);
        var timer = setInterval(function() {
            i--;
            if (i > 0) {
                $(".acq_check").val(i + "秒后可重发");
                $(".acq_check").attr("disabled", true);

            } else {
                clearInterval(timer);
                timer = null;
                $(".acq_check").val("获取验证码");
                $(".acq_check").removeAttr("disabled");
            }
        }, 1000);
    });

}
