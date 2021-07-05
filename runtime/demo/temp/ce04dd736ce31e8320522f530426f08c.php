<?php /*a:1:{s:57:"C:\Users\Lenovo\Desktop\tp\app\demo\view\index\index.html";i:1621268831;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>开始使用 layui</title>
    <link rel="stylesheet" href="/static/lib/layui-v2.6.3/css/layui.css">
</head>
<body>

<div>
    <!--    导航-->
    <div >
        <ul class="layui-nav">
            <li class="layui-nav-item">
                <a href="">控制台<span class="layui-badge">9</span></a>
            </li>
            <li class="layui-nav-item">
                <a href="">个人中心<span class="layui-badge-dot"></span></a>
            </li>
            <li class="layui-nav-item">
                <a href=""><img src="//t.cn/RCzsdCq" class="layui-nav-img layui-nav-child-r">我</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">修改信息</a></dd>
                    <dd><a href="javascript:;">安全管理</a></dd>
                    <dd><a href="javascript:;">退了</a></dd>
                </dl>
            </li>
        </ul>

        <!--搜索框-->
        <div>
            <from>
                <div class="layui-form-item">
<!--                    <label class="layui-form-label">输入框</label>-->
                    <div >
                        <input type="text" name="title" placeholder="请输入要搜索的内容" autocomplete="off" class="layui-input" style="width: 300px">

                    </div>
                    <div class="layui-input-block"><input type="button" name="title" value="搜索" autocomplete="off" class="layui-input"style="width: 300px"></div>
                </div>

            </from>

        </div>
    </div>

    <!--    内容-->
    <div class="layui-container">
        <!--        轮播图-->
        <div>
            轮播图

        </div>
        <!--        推荐-->
        <div>
            推荐图集
        </div>

    </div>

</div>

<!--底部footer-->
<div class="layui-footer ">
    底部

</div>
<!-- 你的 HTML 代码 -->

<script src="/static/lib/layui-v2.6.3/layui.js"></script>
<script>
    layui.use(['layer', 'form','element','jquery'], function () {
        var layer = layui.layer
            , form = layui.form
            , element = layui.element
            , jquery = jquery;
        layer.msg('Hello World');
    });
</script>
</body>
</html>
