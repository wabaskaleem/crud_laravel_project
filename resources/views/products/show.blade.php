@extends('layout.app')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p><span class="bg-success text-white"> Name </span>:<b> {{$products->name}}</b></p>
                <p><span  class="bg-success text-white"> Descrption </span> :<b> {{$products->Description}}</b></p>
                <img src="/products/{{$products->image}}" class="rounded" width="100%">
            </div>
        </div>
    </div>
</div>
@endsection