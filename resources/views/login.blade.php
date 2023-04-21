<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {!! htmlScriptTagJsApi() !!}
</head>

<body>

    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif


    <form action="{{ url('/login') }}" method="post">
        @csrf
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Password</label><br>
            <input type="text" name="password">
        </div>
       


        <!-- Google reCaptcha v2 -->

        {!! htmlFormSnippet() !!}

        @if($errors->has('g-recaptcha-response'))
        <div>
            <small class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
        </div>
        @endif


        <div>
            <input type="submit" value="Login" name="login">
        </div>


    </form>
</body>

</html>