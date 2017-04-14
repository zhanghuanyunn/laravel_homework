<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update_view</title>

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
            font-size: 10px;
            font-weight: 100;
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
<form action="{{url('update')}}" method="post"  >
    {{csrf_field()}}
    <div class="content">
        <div class="links">
            <p style="font-size: 30px;"><B>Index:</B> </p><input type="text" name="Inde">
            <p style="font-size: 30px;"><B>Element:</B> </p><input type="text" name="Element">
            <br>
            <input type="submit" value="Click me!">
        </div>
    </div>


</form>
</body>
</html>