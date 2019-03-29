<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Author: Vincent Theo Roque, A Single Page Portfolio">
    <meta name="keywords" content="web developer, software developer, website, project, product, laravel, web development, create an app, web design company, app developer">
    <meta name="robots" content="index,follow">
    <meta name="DC.title" content="Theo Roque Personal Portfolio & Website">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Paysbook Registration</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

      <h3>Redirecting to Paysbook Registration Form in <span id="countdown">3 seconds</span></h3>
      <h3>Username: {{$username}}</h3>

        <script>
                var timeleft = 3;
                var downloadTimer = setInterval(function(){
                document.getElementById("countdown").innerHTML = timeleft + " seconds";
                timeleft -= 1;
                if(timeleft <= 0){
                    clearInterval(downloadTimer);
                    location.href = "{!! 'https://paysbook.co/auth/register?id=' . $username !!}"
                }
                }, 1000);
                
        </script>

</body>
</html>
