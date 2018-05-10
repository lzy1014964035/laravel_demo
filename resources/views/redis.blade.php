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
<p asd>aaaa</p>
</body>
</html>
<script  src="{{ URL::asset('/') }}js/jquery.js"></script>
<script>
    $('[asd]').click(function(){
        var url = "/index.php/redis_ceshi";
        for (var i = 1;i <= 500; i++) {
            var data = {id:i};
            $.get(url,data,function(data){
                console.log(data);
            },'json');
        }


    });
</script>
