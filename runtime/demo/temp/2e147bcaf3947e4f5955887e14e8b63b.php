<?php /*a:1:{s:58:"C:\Users\Lenovo\Desktop\tp6\app\demo\view\index\index.html";i:1621780079;}*/ ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>首页 - layui</title>
  <link rel="stylesheet" href="/static/view/css/layui.css" />
  <link rel="stylesheet" href="/static/view/css/style.css" />

</head>


<body>
<div class="header">
  <!-- 电脑端 -->

  <div class="layui-col-md12 layui-hide-xs">
    <div class="layui-row layui-nav md4">
      <div class="layui-col-md1 layui-col-md-offset2">
        <img src="/static/images/logo.png" width="40px" height="40px" alt="" style="margin-top: 10px;"/>
      </div>
      <ul class="layui-col-md-offset3">
        <li class="layui-nav-item  layui-this"><a href="<?php echo url('/demo/index'); ?>">首页</a></li>
        <li class="layui-nav-item"><a href="">性感</a></li>
        <li class="layui-nav-item"><a href="">私房</a></li>
        <li class="layui-nav-item"><a href="">清纯</a></li>
        <li class="layui-nav-item"><a href="">萌妹子</a></li>
        <li class="layui-nav-item"><a href="">女神</a></li>
        <li class="layui-nav-item"><a href="">更多</a></li>
        <li class="layui-nav-item  layui-col-md-offset2">
          <form action="" method="get">
            <input class="layui-transfer-search" placeholder="请输入要搜索的内容" type="search" name="" id="">
            <button class="layui-btn" type="submit">搜索</button>
          </form>
        </li>
        <li class="layui-nav-item "><a href="<?php echo url('/demo/upload/index'); ?>">上传</a></li>
        <li class="layui-nav-item">
          <a href=""><img src="/static/images/user.jpg" class="layui-nav-img"/>我</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">修改信息</a></dd>
            <dd><a href="javascript:;">安全管理</a></dd>
            <dd><a href="javascript:;">退了</a></dd>
          </dl>
        </li>

      </ul>
    </div>
  </div>

  <!-- 手机端 -->
  <div class="layui-col-xs12 layui-hide-md">
    <ul class="layui-nav layui-row">
      <!-- LOGO -->
      <li class="layui-col-xs8" style="margin-top: 15px;width: 40px;height: 40px;">
        <img src="/static/images/user.jpg" width="40px" height="40px" alt="">
      </li>
      <!-- 我的信息 -->
      <li class="layui-nav-item layui-nav-more">
        <a href=""><img src="/static/images/user.jpg" class="layui-nav-img" style="padding-left: 40px;"
                        alt=""></a>
        <dl class="layui-nav-child">
          <dd>
          <dd><a href="javascript:;">修改信息</a></dd>
          <dd><a href="javascript:;">安全管理</a></dd>
          <dd><a href="javascript:;">退了</a></dd>
          </dd>
        </dl>
      </li>
    </ul>
  </div>
</div>
<!-- 内容 -->
<div class="layui-container pic-content">
  <div class="layui-row layui-theme-bg">
    <div class="layui-col-space10">
      <a href="" class="layui-btn layui-btn-sm layui-btn-warm">最新</a>
      <a href="" class="layui-btn layui-btn-sm">热门</a>
      <a href="" class="layui-btn layui-btn-sm">推荐</a>

    </div>
    <hr>
    <ul id="imgDragmove">
      <li class="layui-col-md3 layui-image">
        <!-- 图片简介 -->
        <div class="image-text" style="height: 80px; ">
          <!-- 图片内容 -->
          <div class="">
            <img class="layui-img"
                 src="http://dfj-20210429-24.demo.mxyhn.xyz/e/data/tmp/titlepic/0d83e65321e0239f802e1611c2a9d484.jpg"
                 alt="" srcset="">
            <div>
                <span class="layui-text layui-col-space10">
                  <a class="" href="">性感模特陈怡曼的蒂曼妮内衣写真</a>
                </span>
            </div>
            <hr class="layui-hr">
            <!-- 评分 -->
            <div class="score"></div>
          </div>

        </div>
      </li>
      <li class="layui-col-md3 layui-image">
        <!-- 图片内容 -->
        <div><img class="layui-img"
                  src="http://dfj-20210429-24.demo.mxyhn.xyz/e/data/tmp/titlepic/31c9c2933e1eac069a7e6fe67b15c627.jpg"
                  alt="" srcset="">
        </div>
        <!-- 图片简介 -->
        <div class="image-text" style="height: 80px; ">
            <span class="layui-text layui-col-space10">
              <a class="" href="">性感模特陈怡曼的蒂曼妮内衣写真</a>
            </span>
          <hr class="layui-hr">
          <!-- 评分 -->
          <div class="score"></div>
        </div>
      </li>
      <li class="layui-col-md3 layui-image">
        <!-- 图片内容 -->
        <div><img class="layui-img"
                  src="http://dfj-20210429-24.demo.mxyhn.xyz/e/data/tmp/titlepic/69bc9511814d2c26d9b6aef8de5f93c9.jpg"
                  alt="" srcset="">
        </div>
        <!-- 图片简介 -->
        <div class="image-text" style="height: 80px; ">
            <span class="layui-text layui-col-space10">
              <a class="" href="">性感模特陈怡曼的蒂曼妮内衣写真</a>

            </span>
          <hr class="layui-hr">
          <!-- 评分 -->
          <div class="score"></div>
        </div>
      </li>
      <li class="layui-col-md3 layui-image">
        <!-- 图片内容 -->
        <div><img class="layui-img"
                  src="http://dfj-20210429-24.demo.mxyhn.xyz/e/data/tmp/titlepic/4bbd53be2bdc72ea9f3731512382d50b.jpg"
                  alt="" srcset="" width="270px" height="350px">
        </div>
        <!-- 图片简介 -->
        <div class="image-text" style="height: 80px; ">
            <span class="layui-text layui-col-space10">
              <a class="" href="">性感模特陈怡曼的蒂曼妮内衣写真</a>

            </span>
          <hr class="layui-hr">
          <!-- 评分 -->
          <div class="score"></div>
        </div>
      </li>
      <li class="layui-col-md3 layui-image">
        <!-- 图片内容 -->
        <div><img class="layui-img"
                  src="http://dfj-20210429-24.demo.mxyhn.xyz/e/data/tmp/titlepic/71066e15bee8a512059cbdb18ca683e5.jpg"
                  alt="" srcset="">
          </a>
        </div>
        <!-- 图片简介 -->
        <div class="image-text" style="height: 80px; ">
            <span class="layui-text layui-col-space10">
              <a class="" href="">性感模特陈怡曼的蒂曼妮内衣写真</a>

            </span>
          <hr class="layui-hr">
          <!-- 评分 -->
          <div class="score"></div>
        </div>
      </li>
      <li class="layui-col-md3 layui-image">
        <!-- 图片内容 -->
        <div><img class="layui-img"
                  src="http://dfj-20210429-24.demo.mxyhn.xyz/e/data/tmp/titlepic/c8b607780f99f70421828e71b70ce637.jpg"
                  alt="" srcset="">
        </div>
        <!-- 图片简介 -->
        <div class="image-text" style="height: 80px; ">
            <span class="layui-text layui-col-space10">
              <a class="" href="">性感模特陈怡曼的蒂曼妮内衣写真</a>

            </span>
          <hr class="layui-hr">
          <!-- 评分 -->
          <div class="score"></div>
        </div>
      </li>



    </ul>
  </div>
  <!-- 分页 -->
  <div id="page-number" class="layui-hide-xs"></div>


</div>
<!-- 侧边栏 -->
<!-- <div>
      <aside class=" layui-col-md-offset10 layui-col-md2 layui-hide-xs" style="margin-top: -400px;">
          <div class="layui-card" style="width: 250px;">
              <div class="layui-card-header">卡片面板</div>
              <div class="layui-card-body">
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  从而映衬出边框投影
              </div>
          </div>
          <div class="layui-card" style="width: 250px;">
              <div class="layui-card-header">卡片面板</div>
              <div class="layui-card-body">
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  从而映衬出边框投影
              </div>
          </div>
          <div class="layui-card" style="width: 250px;">
              <div class="layui-card-header">卡片面板</div>
              <div class="layui-card-body">
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  卡片式面板面板通常用于非白色背景色的主体内<br>
                  从而映衬出边框投影
              </div>
          </div>
      </aside>


  </div> -->


<script src="/static/lib/layui-v2.6.3/layui.js" charset="utf-8"></script>
<script>

  layui.use(function () {
    var layer = layui.layer,
            form = layui.form,
            laypage = layui.laypage,
            element = layui.element,
            laydate = layui.laydate,
            rate = layui.rate,
            util = layui.util;
    //欢迎信息
    layui.config({
      base: '/static/' //配置 layui 第三方扩展组件存放的基础目录
    }).extend({
      dragMove: 'view/js/dragMove',
    }).use(['dragMove'], function () {
      var dragMove = layui.dragMove;

      //执行示例
      dragMove.render({
        elem: "#imgDragmove", //指向图片的父容器
        layerArea: ["960px", "720px"], //窗口的宽高，同layer的area，默认["960px","720px"]
        layerShade: 0.8, //遮罩的透明度，同layer的shade，默认0.6
        layerMove: false, //触发拖动的元素，同layer的move，这里默认禁止，可设置为'.layui-layer-title'
        maxZoom: 5 //图片能放大的最大倍数，默认1倍
      });
    });
    // layer.msg('Hello World');
    //输出版本号
    lay("#version").html(layui.v);
    // 评分
    rate.render({
      elem: '.score',
      length: 5,
      value: Math.floor(Math.random() * 5),
      history: false,
      Text: true

    })
    //自定义首页、尾页、上一页、下一页文本
    laypage.render({
      elem: 'page-number'
      , count: 100
      , groups: 20
      , first: '首页'
      , last: '尾页'
      , prev: '上一页'
      , next: '下一页'
    });
  });
</script>
</body>

</html>