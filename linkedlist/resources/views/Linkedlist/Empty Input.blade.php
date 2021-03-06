<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Succeed!</title>

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

        #backButton {
            text-decoration: none;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;

            color: #2a2a2a;
        }

        a {
            text-decoration: none;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;

            color: #2a2a2a;
        }

        #backButton:link {
            text-decoration: none;
            color: #2a2a2a;
        }

        #backButton:hover {
            text-decoration: none;
            color: #aaaaaa;
        }

        #backButton:visited {
            text-decoration: none;
            color: #2a2a2a;
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
<div class="content">
    <p style="font-size: 100px;color:red"><B>Empty Input!</B> </p>
    <div class="links">
        <a  href="{{url('/')}}"><p id="backButton" style="font-size: 20px; margin-left:30cm";><B>Menu</B></p></a>
        <a  href="#" onclick="javascript:history.back(-1);"><p id="backButton" style="font-size: 20px; margin-left:30cm"><B>Last Step</B></p></a>
    </div>
</div>

</body>
</html>