
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
上传图片
<form action="/Cart/uploadImg" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="uname">
    <input type="file" name="pic">
    <input type="submit">
</form>
</body>
</html>