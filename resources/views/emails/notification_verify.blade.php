<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
</head>
<body>
<div class="container bg-light p-5 mt-5 border-primary">
    <div class="row">
        <div class="col-12 p-5 text-center">
            <h2 class="text-info">Chào mừng {{$user['email']}} đến với hệ thống đọc tin báo lớn nhất Việt Nam Vnexpress</h2>
            <br/>
            {{ $status }}<a href="{{ Route('frontend') }}"> Đăng nhập</a>
            <br/>
        </div>
    </div>
</div>
</body>
</html>
