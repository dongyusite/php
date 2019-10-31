<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/jquery-1.11.0.js')}}"></script>
    <title>Document</title>
</head>
<body>
<form action="{{url("Index/action")}}" method="post">
    {{csrf_field()}}
    请输入验证码：<input type="text" name="code" id="code">
    <span id="error"></span>
    <img src="{{url("Index/captcha")}}" alt="" onclick="this.src=this.src+'?r='+Math.random()">
    <input type="submit">
    <br>
</form>
<script>
    $('#code').blur(function () {
        var code =$(this).val();
        var _token = '{{csrf_token()}}';
        $.post('{{url('Index/ajaxCheckCaptcha')}}',{code:code,_token:_token},function(data){
            $('#error').text(data.msg);
        },'json');
    });
    {{--$('#code').blur(function () {--}}
    {{--    var code = $(this).val();--}}
    {{--    var _token = '{{csrf_token()}}';--}}

    {{--    $.post('{{url('Index/ajaxCheckCaptcha')}}',{code:code,_token:_token},function (data) {--}}
    {{--        $('#error').text(data.msg)--}}
    {{--    },'json');--}}
    {{--});--}}
</script>
</body>
</html>
