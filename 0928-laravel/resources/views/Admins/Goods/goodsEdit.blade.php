
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>

    <link href="{{asset('Admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('Admin/css/select.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{asset('Admin/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Admin/js/jquery.idTabs.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Admin/js/select-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Admin/kindeditor/kindeditor-all.js')}}"></script>
    {{--<link rel="stylesheet" href="{{asset('Common/layui/css/layui.css')}}">--}}
    {{--<script src="{{asset('Common/layui/layui.js')}}"></script>--}}
</head>
<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">系统设置</a></li>
    </ul>
</div>

<div class="formbody">
    <div id="usual1" class="usual">
        <div id="tab1" class="tabson">
            <form action="{{url('Goods/goodsEditAction')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" value="{{$goods->id}}" name="id">
                <ul class="forminfo">
                    <li>
                        <label>商品名称<b>*</b></label>
                        <input name="goods_name" type="text" class="dfinput" style="width:518px;" value="{{$goods->goods_name}}"/>
                    </li>
                    <li>
                        <label>商品价格<b>*</b></label>
                        <input name="goods_price" type="text" class="dfinput"  style="width:518px;" value="{{$goods->goods_price}}"/>
                    </li>
                    <li>
                        <label>商品库存<b>*</b></label>
                        <input name="goods_num" type="text" class="dfinput"  style="width:518px;" value="{{$goods->goods_num}}"/>
                    </li>
                    <li>
                        <label>商品图片<b>*</b></label>
                        <img src='{{asset("upload/$goods->goods_pic")}}' alt="" width="200">
                    </li>
                    <li>
                        <label>所属分类<b>*</b></label>
                        <div class="vocation">
                            <select class="select1" name="cate_id" id="changeCate">
                                <option value="0">请选择分类</option>
                                @foreach($rows as $v)
                                    <option value="{{$v->id}}"> |--{{str_repeat("----",substr_count($v->path,','))}}
                                        {{$v->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li>
                        <label>商品描述<b>*</b></label>
                        <textarea id="content" name="goods_detail"   maxlength="20" οnchange="this.value=this.value.substring(0, 20)" οnkeydοwn="this.value=this.value.substring(0, 20)" οnkeyup="this.value=this.value.substring(0, 20)" style="width:700px;height:250px;" >
                    {{$goods->goods_detail}}
                        </textarea>
                    </li>

                    <li>
                        <label>&nbsp;</label>
                        <input name="" type="submit" class="btn" value="马上发布" id="btn" />
                    </li>
                </ul>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
</body>

<script type="text/javascript">
    $(document).ready(function(e) {
        $(".select1").uedSelect({
            width : 345
        });
        $(".select2").uedSelect({
            width : 167
        });
        $(".select3").uedSelect({
            width : 100
        });

        //加载富文本编辑器
        KindEditor.ready(function(K) {
            K.create('#content', {
                allowFileManager : true,
                filterMode:true,
                afterBlur:function(){
                    this.sync("#content");
                }
            });
        });
    });
</script>
</html>

