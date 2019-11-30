<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body><
    {{Form::open(array('url' => 'login'))}}
    <h1>Log In</h1>
    <p>
    {{$errors->first('email')}}
    {{$errors->first('password')}}
    </p>
    <p>
    {{Form::label('email','Please Input Your Email Address')}}
    {{Form:text('email',Input::old('email'), array('placeholder'=>'example@gmail.com'))}}
    </p>
    <p>
    {{Form::label('password','Please Enter Your Password')}}
    {{Form::password('password')}}
    </p>
    <p>
    {{Form::submit('Submit!')}}
    </p>
    {{Form::close()}}
</body>
</html>