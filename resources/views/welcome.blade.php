@extends('layouts.app')
@section('title','welcome')
@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Document</title>
    </head>
    <style>
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <body>
        <div class="container">
                <img src="/img/welcome2-re.png" alt="//" width="600" class="center"> <hr>

          <h1 style="text-align: center; color:#2F4F4F;"><b>Welcome To Truestore</b></h1>
          <p class="text-center" style="font-family:monospace">Your right destination to find the best electronic devices</p>

        </div>
        <button type="button"class="btn btn-outline-secondary btn-lg btn-block" style="margin-left: 560px" ><a href="{{ route('phone') }}" style="text-decoration: none;color:black"> Explore devices</a></button>
        {{-- <a href="{{ route('phone') }}" class= "btn btn-outline btn-lg"> Explore devices</a> --}}

    </body>
</html>
@endsection
