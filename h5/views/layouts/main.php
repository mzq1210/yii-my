<?php
use yii\helpers\Html;

\h5\assets\WeuiAsset::register($this);
?>
<?php $this->beginPage() ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <!--禁止用户放大缩小网页-->
    <meta name="viewport" content="user-scalable=no">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <!--当网站添加到主屏幕快速启动方式，将网站添加到主屏幕快速启动方式-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!--隐藏ios上的浏览器地址栏-->
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title><?=Html::encode($this->title)?></title>
    <script type='text/javascript' src='/js/jquery-1.9.1.min.js' charset='utf-8'></script>
    <?= $this->head() ?>
</head>
<body ontouchstart>
<?php $this->beginBody() ?>
<div class="weui-toptips weui-toptips_warn js_tooltips"></div>
<?= $content ?>

<!-- loading toast -->
<div id="loadingToast" style="display: none;">
    <div class="weui-mask_transparent"></div>
    <div class="weui-toast">
            <span class="weui-primary-loading weui-primary-loading_transparent weui-icon_toast">
              <span class="weui-primary-loading__dot"></span>
            </span>
        <p class="weui-toast__content">加载中</p>
    </div>
</div>

<!--弹窗 start-->
<div class="layer-box hide">
    <div class="layer">
        <div class="layer-con">
            <p></p>
        </div>
    </div>
</div>

<script>
    function tooltips(msg){
        var $tooltips = $('.js_tooltips');
        $tooltips.text(msg);
        $tooltips.fadeIn(100);
        setTimeout(function () {
            $tooltips.fadeOut(100);
        }, 1500);
    }

    function showLoadingToast(msg='加载中') {
        var $loadingToast = $('#loadingToast');
        var $content = $('.weui-toast__content');
        if ($loadingToast.css('display') != 'none') return;

        $content.text(msg);
        $loadingToast.fadeIn(100);
        setTimeout(function () {
            $loadingToast.fadeOut(100);
        }, 2000);
    }

    //弹窗
    function layer(msgCon){
        $(".layer-box").removeClass("hide");
        $(".layer-con p").text(msgCon);
        setTimeout(function(){
            $(".layer-box").addClass("hide");
        },2000);
        var layerH = $(".layer").outerHeight();
        $(".layer").css("margin-top",-layerH/2);
    }
    $(".layer-box").click(function () {
        $('.tab').css('z-index', '999');//处理关于我们tab问题
        $(this).addClass('hide');
    });

    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?3cc80ac9c026cca0d4f2fccca1ee15b6";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>