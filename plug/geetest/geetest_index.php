<style>
  .show {
    display: block;
  }
  .hide {
    display: none;
  }
  #notice {
    color: red;
  }
</style>
<script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.js"></script>
<script src="./plug/geetest/static/gt.js"></script>
<script>
    var handlerEmbed = function (captchaObj) {
        $("#tijiao").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";
                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "hide";
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "./plug/geetest/web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            console.log(data);
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                //==固定写法，也是必选参数，无需在意是什么
                gt: data.gt,
                challenge: data.challenge,
                new_captcha: data.new_captcha,
                offline: !data.success,
                //==
                product: "popup", //产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                width: '100%',	//宽度
                lang: 'zh-cn',	//设置验证界面文字的语言。目前可选语言有：zh-cn，en
                protocol: 'http://' //设置验证涉及到的请求所使用的协议。常见的有 http://，https://。默认值与宿主页面所使用的协议一致。
            }, handlerEmbed);
        }
    });
</script>