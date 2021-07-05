<?php /*a:1:{s:59:"C:\Users\Lenovo\Desktop\tp6\app\demo\view\upload\index.html";i:1621778834;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>首页 - layui</title>
    <link rel="stylesheet" href="/static/lib/layui-v2.6.3/css/layui.css"/>
    <link rel="stylesheet" href="/static/view/css/style.css"/>

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
                <li class="layui-nav-item"><a href="<?php echo url('/demo/index'); ?>">首页</a></li>
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
                <li class="layui-nav-item  layui-this"><a href="<?php echo url('/demo/upload/index'); ?>">上传</a></li>
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
                <img src="/static/images/user.jgp" width="40px" height="40px" alt="">
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

<div class="layui-container" style="margin-left: 400px;">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>拖拽上传</legend>
    </fieldset>
    <div class="layui-upload-drag" id="testList">
        <i class="layui-icon"></i>
        <p style="width: 940px; height: 40px;">点击上传，或将文件拖拽到此处</p>
        <!-- <div class="layui-show  " id="uploadDemoView">
            <hr>
            <img src="" alt="上传成功后渲染" style="max-width: 196px">
        </div> -->
    </div>


    <div class="layui-upload " style="width: 1000px;">
    
        <div class="layui-upload-list" style="max-width: 1000px;">
            <table class="layui-table layui-form-item">
                <colgroup>
                    <col>
                    <col width="150">
                    <col width="260">
                    <col width="150">
                    <col width="100">
                </colgroup>
                <thead>
                <tr>
                    <th>文件名</th>
                    <th>大小</th>
                    <th>上传进度</th>
                    <th>操作</th>
                    <th>预览图</th>
                </tr>
                </thead>
                <tbody id="demoList"></tbody>
            </table>
        </div>
        <button type="submit" name="image" id="testListAction" lay-submit class="layui-btn">上传</button>
    
    </div>

</div>


<!-- 引入 layui.js 的 <script> 标签最好放置在 html 末尾 -->
<script src="/static/lib/layui-v2.6.3/layui.js" charset="utf-8"></script>
<script>


    findIP(function(ip){
        let dom = document.getElementById('dom')
        dom.innerHTML = ip + "你的本地IP地址"
    });
    layui.use(function () {
        var $ = layui.jquery
            , upload = layui.upload
            , element = layui.element
            , layer = layui.layer;
        //多文件列表上传
        var uploadListIns = upload.render({
            elem: '#testList'
            , elemList: $('#demoList') //列表元素对象
            , url: '<?php echo url('demo/upload/upload'); ?>'
            , accept: 'file'
            , multiple: true
            , number: 10
            , auto: false
            , bindAction: '#testListAction'
            , acceptMime: 'image/*'
            , choose: function (obj) {
                var that = this;
                var files = this.files = obj.pushFile(); //将每次选择的文件追加到文件队列
                //读取本地文件
                obj.preview(function (index, file, result) {
                    var tr = $(['<tr id="upload-' + index + '">'
                        , '<td>' + file.name + '</td>'
                        , '<td>' + (file.size / 1014).toFixed(1) + 'kb</td>'
                        , '<td><div class="layui-progress" lay-filter="progress-demo-' + index + '"><div class="layui-progress-bar" lay-percent=""></div></div></td>'
                        , '<td>'
                        , '<button class="layui-btn layui-btn-xs demo-reload layui-hide">重传</button>'
                        , '<button class="layui-btn layui-btn-xs layui-btn-danger demo-delete">删除</button>'
                        , '</td>'
                        , '<td><img style="max-width: 100px; max-height:100px; float:left;" src="' + result + '" alt="' + file.name + '" class="layui-upload-img"></td>'
                        , '</tr>'].join(''));

                    // $('#uploadDemoView').append('<img style="max-width: 100px; max-height:100px; float:left;" src="' + result + '" alt="' + file.name + '" class="layui-upload-img">')
                    //单个重传
                    tr.find('.demo-reload').on('click', function () {
                        obj.upload(index, file);
                    });
                    $('#uploadDemoView').find()
                    //删除
                    tr.find('.demo-delete').on('click', function () {
                        delete files[index]; //删除对应的文件
                        tr.remove();
                        uploadListIns.config.elem.next()[0].value = ''; //清空 input file 值，以免删除后出现同名文件不可选
                    });

                    that.elemList.append(tr);
                    element.render('progress'); //渲染新加的进度条组件
                });
            }
            , done: function (res, index, upload) { //成功的回调

                var that = this;
                //if(res.code == 0){ //上传成功
                var tr = that.elemList.find('tr#upload-' + index)
                    , tds = tr.children();
                tds.eq(3).html(''); //清空操作
                delete this.files[index]; //删除文件队列已经上传成功的文件
                tr.remove();
                return;
                //}
                this.error(index, index);
            }
            , allDone: function (obj) { //多文件上传完毕后的状态回调
                if(obj['successful']!=0){
 
                    var data ="已成功上传"+ obj['successful']+"个";
                    layer.msg(data)
                }
                else{
                    layer.msg('上传失败');
                }
            }
            , error: function (index, upload) { //错误回调
                var that = this;
                var tr = that.elemList.find('tr#upload-' + index)
                    , tds = tr.children();
                tds.eq(3).find('.demo-reload').removeClass('layui-hide'); //显示重传
            }
            , progress: function (n, elem, e, index) {
                element.progress('progress-demo-' + index, n + '%'); //执行进度条。n 即为返回的进度百分比
            }
        });


    });
</script>
</body>

</html>