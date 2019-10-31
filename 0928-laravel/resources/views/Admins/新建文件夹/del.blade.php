<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
我是后台用户删除界面
<form action="/Admin/add" method="post">
    {{csrf_field()}}
    <input type="text" name="uname">
    <input type="submit">

</body>
</html>