<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>列表页</title>
    <link href=" {{asset('Admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('Admin/css/select.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{asset('Admin/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('Admin/js/jquery.idTabs.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Admin/js/select-ui.min.js')}}"></script>
</head>
<body>
	<div class="place">
	    <span>位置：</span>
	    <ul class="placeul">
		    <li><a href="{{url('Admins/admins')}}">首页</a></li>
		    <li><a href="#">系统设置</a></li>
	    </ul>
    </div>

    <div class="formbody">
        <div id="usual1" class="usual">
      	 <div id="tab2" class="tabson">
            <!-- 搜索 -->
            <ul class="seachform">
                <li>
                    <label>综合查询</label>
                    <input name="keyword" type="text" class="scinput"    value="{{$keyword}}" />
                    {{csrf_field()}}
                </li>
                <li>
                    <label>指派</label>
                    <div class="vocation">
                        <select class="select3">
                            <option>全部</option>
                            <option>其他</option>
                        </select>
                    </div>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <input name="" type="submit" class="scbtn" value="查询"/>
                </li>
            </ul>

            <!-- 列表 -->
            <table class="tablelist">
            	<thead>
                	<tr>
                        <th><input name="" type="checkbox" value="" checked="checked"/></th>
                        <th>编号<i class="sort"><img src="{{asset('Admin/images/px.gif')}}" /></i></th>
                        <th>用户名</th>
                        <th>密码</th>
                        <th>flag</th>
                        <th>添加时间</th>
                        <th>是否禁用</th>

                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($rows as $v)
                    <tr id="id_{{$v->id}}">
                        <td>
                            <input name="" type="checkbox" value="" />
                        </td>

                        <td>{{$v->id}}</td>
                        <td>{{$v->admin_name}}</td>
                        <td>{{$v->admin_pass}}</td>
                        <td>{{$v->flag}}</td>
                         <td>{{($v->add_time)}}</td>
                        <td>
                            @if($v->status == '1')
                                <span style="color: green">已启用</span>
                            @else
                                <span style="color: red">已禁用</span>
                            @endif
                        </td>

                        <td>
                            @if($v->id == 1)
                            <a href="{{url('Admins/Edit')}}?id={{$v->id}}" class="tablelink">查看</a>
                            <a href="javascript:viod(0)" onclick="delManager({{$v->id}})"  class="tablelink">删除</a>
                                @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- 分页 -->
             <tr>
             </tr>

         </div>
        </div>
	</div>
</body>
<script>
function delManager(id) {

var bool = confirm("你确定要删除吗？");
if(bool){
// 1. 效果
var aid = "id_"+id;
$('#'+aid).remove();
// 2. 数据库
$.get("{{url('Admins/Del')}}",{id:id},function (data) {
if(data.status === 1){
  alert('删除成功');
}
},'json')
}
}
</script>
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
    $("#usual1 ul").idTabs();
    $('.tablelist tbody tr:odd').addClass('odd');
});
</script>
</html>

