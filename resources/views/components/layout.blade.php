<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        .footer p{
    position: absolute;
    bottom: 0;
    background-color: skyblue;
    width: 100%;
    padding: 10px;
    text-align: center;
}
    </style>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Login</a>
                <a href="">Contact</a>

            </li>
        </ul>
    </div>
    <div class="main">
    {{$main}}
    </div>
    <div class="footer">
        <p>Footer Part</p>
    </div>
</body>
</html>