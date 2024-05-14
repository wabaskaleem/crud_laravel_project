@extends('layout.app')

@section('main')
    <div class="container">
        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2">New Product</a>
        </div>

        <table class="table table-hover mt-4">
          <thead>
            <tr>
              <th>Sno.</th>
              <th>Name</th>
              <th>image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product )
            <tr>
              <td>{{$loop->index+1}}</td>
              <td><a href="products/{{$product-> id}}/show" class="text-dark "> {{$product->name}}</td></a>
              <td>
                <img src="products/{{$product->image }}" class="rounded-circle" width="50" height="50">
              </td>
              <td>
                <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm mt-2 ">Update</a>
                <a href="products/{{$product->id}}/Deleted" class="btn btn-danger btn-sm mt-2 ">Deleted</a>
              </td>
            </tr>
            @endforeach

          </table>
          {{$products->links()}}


</div>
@endsection