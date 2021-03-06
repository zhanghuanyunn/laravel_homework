<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>construct_view</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>
        
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > input {
            color: #636b6f;
            padding: 0 25px;
            font-size: 4px;
            font-weight: 200;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
<body>
<form action="{{url('construct')}}" method="post"  >
    {{csrf_field()}}
    <div class="content">
        <div class="links">
            <p style="font-size: 30px;"><B>Construct it!:</B> </p><input type="text" size="50px"  name="list">
            <br>
            <input type="submit" value="Click me!">
        </div>
    </div>


</form>
</body>
</html>