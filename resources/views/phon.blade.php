@extends('layouts.app')
@section('title','phone')
@section('content')
{{-- <div class="container"> --}}
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">
            {{-- <div class="container"> --}}
                @foreach ($phone as $item)
                    <div class="card mt-2">

                        <div class="card-header" style="background: #2F4F4F" >
                            <h1 class="text-center text-white" >{{$item->Name}}</h1>
                        </div>

                        <div class="card-body border-1">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src='img/{{$item->Image}}' width="200" height="200">
                                </div>
                                <div class="col-sm-6">
                                    <h1 class="text-dark"><h1><span class="badge bg-secondary">{{$item->Name}}</span></h1></h1>
                                    <small class= "text-grey"><b>{{$item->Display}}</b></small>
                                </div>
                                <div class="col-sm-3">
                                <h4 style="color: rgb(102, 21, 21)"> <b>{{$item->Price}} SAR</b></h4>
                                    <br>
                                    <a class= "btn btn-outline-success btn-lg" href="checkout/{{$item->id}}">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

        </div>
        <div class="col-sm-1">

        </div>
    </div>
  </div>



@endsection


