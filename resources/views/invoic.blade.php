@extends('layouts.app')
@section('title','invoic')
@section('content')

<div class="contianer">
    <div class="card">
        <div class="card-body mx-4">
          <div class="container">
            <p class="my-5 mx-5 text-center" style="font-size: 30px;"><b>Thank for your purchase</b></p>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black">{{$inv->Name}}</li>
                <li class="text-muted mt-1"><span class="text-black">Invoice</span> #{{$inv->id}}</li>
                <li class="text-black mt-1">{{$inv->BirthDate}}</li>
              </ul>
              <hr>
              <div class="col-xl-10">
                <p>Name of product:</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{$inv->ProductName}}
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Price:</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{$inv->Total}}
                </p>
              </div>
              <hr>
            </div>
            {{-- <div class="row">
              <div class="col-xl-10">
                <p>Support</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">$10.00
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black"> --}}

              <div class="col-xl-12">
                <p class="float-end fw-bold">Total: {{$inv->Total}}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">
              <a><u class="text-info">View in browser</u></a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>

          </div>
        </div>
      </div>
</div>
@endsection
