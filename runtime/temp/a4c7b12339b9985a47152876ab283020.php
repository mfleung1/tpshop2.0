<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"./application/admin/view/top\add.html";i:1527054090;s:71:"D:\phpStudy\PHPTutorial\wwwb2\application\admin\view\public\layout.html";i:1524739748;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/static/css/main.css" rel="stylesheet" type="text/css">
<link href="/public/static/css/page.css" rel="stylesheet" type="text/css">
<link href="/public/static/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/font/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="/public/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/static/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script type="text/javascript" src="/public/static/js/admin.js"></script>
<script type="text/javascript" src="/public/static/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/js/common.js"></script>
<script type="text/javascript" src="/public/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/js/jquery.mousewheel.js"></script>
<script src="/public/js/myFormValidate.js"></script>
<script src="/public/js/myAjax2.js"></script>
<script src="/public/js/global.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
						layer.closeAll();
   						if(data.status==1){
                            layer.msg(data.msg, {icon: 1, time: 2000},function(){
                                location.href = '';
//                                $(obj).parent().parent().parent().remove();
                            });
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }

    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }

    function get_help(obj){

		window.open("http://www.tp-shop.cn/");
		return false;

        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'),
        });
    }

    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
						layer.closeAll();
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }

    /**
     * 全选
     * @param obj
     */
    function checkAllSign(obj){
        $(obj).toggleClass('trSelected');
        if($(obj).hasClass('trSelected')){
            $('#flexigrid > table>tbody >tr').addClass('trSelected');
        }else{
            $('#flexigrid > table>tbody >tr').removeClass('trSelected');
        }
    }
    /**
     * 批量公共操作（删，改）
     * @returns {boolean}
     */
    function publicHandleAll(type){
        var ids = '';
        $('#flexigrid .trSelected').each(function(i,o){
//            ids.push($(o).data('id'));
            ids += $(o).data('id')+',';
        });
        if(ids == ''){
            layer.msg('至少选择一项', {icon: 2, time: 2000});
            return false;
        }
        publicHandle(ids,type); //调用删除函数
    }
    /**
     * 公共操作（删，改）
     * @param type
     * @returns {boolean}
     */
    function publicHandle(ids,handle_type){
        layer.confirm('确认当前操作？', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    // 确定
                    $.ajax({
                        url: $('#flexigrid').data('url'),
                        type:'post',
                        data:{ids:ids,type:handle_type},
                        dataType:'JSON',
                        success: function (data) {
                            layer.closeAll();
                            if (data.status == 1){
                                layer.msg(data.msg, {icon: 1, time: 2000},function(){
                                    location.href = data.url;
                                });
                            }else{
                                layer.msg(data.msg, {icon: 2, time: 2000});
                            }
                        }
                    });
                }, function (index) {
                    layer.close(index);
                }
        );
    }
</script>  

</head>
<style>.err{color:#F00; display:none;}</style>
<script src="/public/static/js/layer/laydate/laydate.js"></script>
<body style="background-color: #FFF; overflow: auto;">
  <div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
  <div id="append_parent"></div>
  <div id="ajaxwaitid"></div>
  <div class="page">
    <div class="fixed-bar">
      <div class="item-title">
        <a class="back" href="javascript:history.back();" title="返回列表">
          <i class="fa fa-arrow-circle-o-left"></i>
        </a>
        <div class="subject">
          <h3>顶部导航</h3>
          <h5>添加顶部导航详情页</h5></div>
      </div>
    </div>
    <form class="form-horizontal" id="handleposition" method="post" enctype="multipart/form-data">
      <input type="hidden" id="goods_id" name="goods_id" value="<?php echo $info['goods_id']; ?>">
      <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
      <input type="hidden" name="item_id" value="<?php echo $info['item_id']; ?>">
      <div class="ncap-form-default">
        <dl class="row">
          <dt class="tit">
            <label>
              <em>*</em>导航标题</label></dt>
          <dd class="opt">
            <input type="text" name="title" id="title" value="" class="input-txt">
            <span class="err" id="err_title"></span>
            <p class="notic">写精简点，而且要有吸引力</p></dd>
        </dl>
        <dl class="row">
          <dt class="tit">
            <label>
              <em>*</em>宣传图片</label></dt>
          <dd class="opt">
            <div class="input-file-show">
              <span class="show">
                <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="">
                  <i id="img_i" class="fa fa-picture-o" onmouseover="layer.tips('<img src=>',this,{tips: [1, '#fff']});" onmouseout="layer.closeAll();"></i>
                </a>
              </span>
              <span class="type-file-box">
                <input type="text" id="prom_img" name="prom_img" value="" class="type-file-text">
                <input type="file" name="button" id="button1" value="" class="type-file-button">
              </span>
            </div>
            <span class="err"></span>
            <p class="notic">请上传图片格式文件</p></dd>
        </dl>
        <dl class="row">
          <dt class="tit">
            <label>
              <em>*</em>文字内容</label></dt>
          <dd class="opt">
            <input type="text" id="price" name="price" value="<?php echo $info['price']; ?>" onpaste="this.value=this.value.replace(/[^\d.]/g,'')" onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" class="input-txt">
            <span class="err" id="err_price"></span>
            <p class="notic">文字介绍内容详情</p></dd>
        </dl>
        <dl class="row">
          <dt class="tit">
            <label>
              <em>*</em>页面连接内容</label></dt>
          <dd class="opt">
            <input type="text" name="goods_num" id="goods_num" value="<?php echo $info['goods_num']; ?>" onpaste="this.value=this.value.replace(/[^\d.]/g,'')" onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" class="input-txt">
            <span class="err" id="err_goods_num"></span>
            <p class="notic">此抢购活动最多允许抢购的商品数量</p></dd>
        </dl>
        <div class="bot">
          <input type="submit" name="提交">
      </div>
    </form>
  </div>
</body>
</html>