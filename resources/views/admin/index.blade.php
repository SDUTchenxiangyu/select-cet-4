<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <title>四级词汇背诵帮助</title>
</head>
<body>
    <form action="{{url('houtai')}}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label for="en">英文词汇</label>
        <input id="en" type="text" name="word" class="form-control">
        <label for="ch">中文释义</label>
        <input id="cn" type="text" name="cnword" class="form-control">
        <input type="submit" class="btn" value="提交" >
    </form>
</body>
</html>