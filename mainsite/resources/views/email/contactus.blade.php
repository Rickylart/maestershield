<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

</head>
<body>
    <h1> Contact Us Message</h1>
    <hr>
    <p>Name : {{ $data['name'] }}</p>
    <p>Email : {{ $data['email'] }}</p>
    <p>Subject : {{ $data['subject'] }}</p>
    <p>Message : {{ $data['message'] }}</p>

    <br>
    <hr>
        <h4> Copyright @ MaesterShield LTD | {{ date('Y') }}</h4>
</body>
</html>
