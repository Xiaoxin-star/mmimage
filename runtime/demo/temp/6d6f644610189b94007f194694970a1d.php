<?php /*a:1:{s:59:"C:\Users\Lenovo\Desktop\tp6\app\demo\view\update\index.html";i:1621756878;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>首页 - layui</title>
    <link rel="stylesheet" href="/static/lib/layui-v2.6.3/css/layui.css" />
  </head>

  <body>
    <blockquote class="layui-elem-quote layui-text">
      提示：以下示例的上传接口由 <em>httpbin.org</em> 免费提供。
      <br />部分示例未配置上传接口，所以每次上传都会报「请求上传接口出现异常」的提示，这属于正常现象。
    </blockquote>

    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 30px"
    >
      <legend>常规使用：普通图片上传</legend>
    </fieldset>

    <div class="layui-upload">
      <button type="button" class="layui-btn" id="test1">上传图片</button>
      <div class="layui-upload-list">
        <img class="layui-upload-img" id="demo1" />
        <p id="demoText"></p>
      </div>
      <div style="width: 95px">
        <div
          class="layui-progress layui-progress-big"
          lay-showpercent="yes"
          lay-filter="demo"
        >
          <div class="layui-progress-bar" lay-percent=""></div>
        </div>
      </div>
    </div>

    <a name="list-progress"> </a>

    <div style="margin-top: 10px">
      <!-- 示例-970 -->
      <ins
        class="adsbygoogle"
        style="display: inline-block; width: 970px; height: 90px"
        data-ad-client="ca-pub-6111334333458862"
        data-ad-slot="3820120620"
      ></ins>
    </div>

    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 30px"
    >
      <legend>高级应用：制作一个多文件列表</legend>
    </fieldset>

    <div class="layui-upload">
      <button type="button" class="layui-btn layui-btn-normal" id="testList">
        选择多文件
      </button>
      <div class="layui-upload-list" style="max-width: 1000px">
        <table class="layui-table">
          <colgroup>
            <col />
            <col width="150" />
            <col width="260" />
            <col width="150" />
          </colgroup>
          <thead>
            <tr>
              <th>文件名</th>
              <th>大小</th>
              <th>上传进度</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody id="demoList"></tbody>
        </table>
      </div>
      <button type="button" class="layui-btn" id="testListAction">
        开始上传
      </button>
    </div>

    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 50px"
    >
      <legend>上传多张图片</legend>
    </fieldset>

    <div class="layui-upload">
      <button type="button" class="layui-btn" id="test2">多图片上传</button>
      <blockquote
        class="layui-elem-quote layui-quote-nm"
        style="margin-top: 10px"
      >
        预览图：
        <div class="layui-upload-list" id="demo2"></div>
      </blockquote>
    </div>
    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 30px"
    >
      <legend>指定允许上传的文件类型</legend>
    </fieldset>

    <div class="layui-btn-container">
      <button type="button" class="layui-btn" id="test3">
        <i class="layui-icon"></i>上传文件
      </button>
      <button type="button" class="layui-btn layui-btn-primary" id="test4">
        <i class="layui-icon"></i>只允许压缩文件
      </button>
      <button type="button" class="layui-btn" id="test5">
        <i class="layui-icon"></i>上传视频
      </button>
      <button type="button" class="layui-btn" id="test6">
        <i class="layui-icon"></i>上传音频
      </button>
    </div>
    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 30px"
    >
      <legend>设定文件大小限制</legend>
    </fieldset>

    <button type="button" class="layui-btn layui-btn-danger" id="test7">
      <i class="layui-icon"></i>上传图片
    </button>
    <div class="layui-inline layui-word-aux">这里以限制 60KB 为例</div>

    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 30px"
    >
      <legend>选完文件后不自动上传</legend>
    </fieldset>

    <div class="layui-btn-container">
      <button type="button" class="layui-btn layui-btn-normal" id="test8">
        选择文件
      </button>
      <button type="button" class="layui-btn" id="test9">开始上传</button>
    </div>
    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 30px"
    >
      <legend>拖拽上传</legend>
    </fieldset>

    <div class="layui-upload-drag" id="test10">
      <i class="layui-icon"></i>
      <p>点击上传，或将文件拖拽到此处</p>
      <div class="layui-hide" id="uploadDemoView">
        <hr />
        <img src="" alt="上传成功后渲染" style="max-width: 196px" />
      </div>
    </div>

    <fieldset
      class="layui-elem-field layui-field-title"
      style="margin-top: 30px"
    >
      <legend>绑定原始文件域</legend>
    </fieldset>

    <input type="file" name="file" id="test20" />
    <script src="/static/lib/layui-v2.6.3/layui.js" charset="utf-8"></script>
    <script>
      layui.use(["upload", "element", "layer"], function () {
        var $ = layui.jquery,
          upload = layui.upload,
          element = layui.element,
          layer = layui.layer;

        //常规使用 - 普通图片上传
        var uploadInst = upload.render({
          elem: "#test1",
          url: '<?php echo url("update/update"); ?>', //改成您自己的上传接口
          before: function (obj) {
            //预读本地文件示例，不支持ie8
            obj.preview(function (index, file, result) {
              $("#demo1").attr("src", result); //图片链接（base64）
            });

            element.progress("demo", "0%"); //进度条复位
            layer.msg("上传中", { icon: 16, time: 0 });
          },
          done: function (res) {
            //如果上传失败
            if (res.code > 0) {
              return layer.msg("上传失败");
            }
            //上传成功的一些操作
            //……
            $("#demoText").html(""); //置空上传失败的状态
          },
          error: function () {
            //演示失败状态，并实现重传
            var demoText = $("#demoText");
            demoText.html(
              '<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>'
            );
            demoText.find(".demo-reload").on("click", function () {
              uploadInst.upload();
            });
          },
          //进度条
          progress: function (n, index, e) {
            element.progress("demo", n + "%"); //可配合 layui 进度条元素使用
            if (n == 100) {
              layer.msg("上传完毕", { icon: 1 });
            }
          },
        });

        //演示多文件列表
        var uploadListIns = upload.render({
          elem: "#testList",
          elemList: $("#demoList"), //列表元素对象
          url: "<?php echo url("update/update"); ?>",
          accept: "file",
          multiple: true,
          number: 3,
          auto: false,
          bindAction: "#testListAction",
          choose: function (obj) {
            var that = this;
            var files = (this.files = obj.pushFile()); //将每次选择的文件追加到文件队列
            //读取本地文件
            obj.preview(function (index, file, result) {
              var tr = $(
                [
                  '<tr id="upload-' + index + '">',
                  "<td>" + file.name + "</td>",
                  "<td>" + (file.size / 1014).toFixed(1) + "kb</td>",
                  '<td><div class="layui-progress" lay-filter="progress-demo-' +
                    index +
                    '"><div class="layui-progress-bar" lay-percent=""></div></div></td>',
                  "<td>",
                  '<button class="layui-btn layui-btn-xs demo-reload layui-hide">重传</button>',
                  '<button class="layui-btn layui-btn-xs layui-btn-danger demo-delete">删除</button>',
                  "</td>",
                  "</tr>",
                ].join("")
              );

              //单个重传
              tr.find(".demo-reload").on("click", function () {
                obj.upload(index, file);
              });

              //删除
              tr.find(".demo-delete").on("click", function () {
                delete files[index]; //删除对应的文件
                tr.remove();
                uploadListIns.config.elem.next()[0].value = ""; //清空 input file 值，以免删除后出现同名文件不可选
              });

              that.elemList.append(tr);
              element.render("progress"); //渲染新加的进度条组件
            });
          },
          done: function (res, index, upload) {
            //成功的回调
            var that = this;
            //if(res.code == 0){ //上传成功
            var tr = that.elemList.find("tr#upload-" + index),
              tds = tr.children();
            tds.eq(3).html(""); //清空操作
            delete this.files[index]; //删除文件队列已经上传成功的文件
            return;
            //}
            this.error(index, upload);
          },
          allDone: function (obj) {
            //多文件上传完毕后的状态回调
            console.log(obj);
          },
          error: function (index, upload) {
            //错误回调
            var that = this;
            var tr = that.elemList.find("tr#upload-" + index),
              tds = tr.children();
            tds.eq(3).find(".demo-reload").removeClass("layui-hide"); //显示重传
          },
          progress: function (n, elem, e, index) {
            element.progress("progress-demo-" + index, n + "%"); //执行进度条。n 即为返回的进度百分比
          },
        });

        //多图片上传
        upload.render({
          elem: "#test2",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          multiple: true,
          before: function (obj) {
            //预读本地文件示例，不支持ie8
            obj.preview(function (index, file, result) {
              $("#demo2").append(
                '<img src="' +
                  result +
                  '" alt="' +
                  file.name +
                  '" class="layui-upload-img">'
              );
            });
          },
          done: function (res) {
            //上传完毕
          },
        });

        //指定允许上传的文件类型
        upload.render({
          elem: "#test3",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          accept: "file", //普通文件
          done: function (res) {
            layer.msg("上传成功");
            console.log(res);
          },
        });
        upload.render({
          //允许上传的文件后缀
          elem: "#test4",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          accept: "file", //普通文件
          exts: "zip|rar|7z", //只允许上传压缩文件
          done: function (res) {
            layer.msg("上传成功");
            console.log(res);
          },
        });
        upload.render({
          elem: "#test5",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          accept: "video", //视频
          done: function (res) {
            layer.msg("上传成功");
            console.log(res);
          },
        });
        upload.render({
          elem: "#test6",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          accept: "audio", //音频
          done: function (res) {
            layer.msg("上传成功");
            console.log(res);
          },
        });

        //设定文件大小限制
        upload.render({
          elem: "#test7",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          size: 60, //限制文件大小，单位 KB
          done: function (res) {
            layer.msg("上传成功");
            console.log(res);
          },
        });

        //同时绑定多个元素，并将属性设定在元素上
        upload.render({
          elem: ".demoMore",
          before: function () {
            layer.tips("接口地址：" + this.url, this.item, { tips: 1 });
          },
          done: function (res, index, upload) {
            var item = this.item;
            console.log(item); //获取当前触发上传的元素，layui 2.1.0 新增
          },
        });

        //选完文件后不自动上传
        upload.render({
          elem: "#test8",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          auto: false,
          //,multiple: true
          bindAction: "#test9",
          done: function (res) {
            layer.msg("上传成功");
            console.log(res);
          },
        });

        //拖拽上传
        upload.render({
          elem: "#test10",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          done: function (res) {
            layer.msg("上传成功");
            layui
              .$("#uploadDemoView")
              .removeClass("layui-hide")
              .find("img")
              .attr("src", res.files.file);
            console.log(res);
          },
        });

        //绑定原始文件域
        upload.render({
          elem: "#test20",
          url: "<?php echo url("update/update"); ?>", //改成您自己的上传接口
          done: function (res) {
            layer.msg("上传成功");
            console.log(res);
          },
        });
      });
    </script>
  </body>
</html>
