@extends('layout.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3>Product Edit # {{$products->name}}</h3>
                <form method="post" action="/products/{{$products->id}}/update" enctype="multipart/form-data">
                    @csrf
                    @method('put');
                    <div class="form-group">
                        <label class="p-2">Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name',$products->name)}}"/>
                        @if ($errors-> has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="p-2">Despcription</label>
                        <textarea name="Description" class="form-control" rows="5">{{old('Description',$products->Description)}}</textarea>
                        @if ($errors-> has('Description'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="from-group">
                        <label class="p-2">Image</label>
                        <input type="file" name="image" class="form-control" value="{{old('image')}}"/>
                        @if ($errors-> has('image'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                        
                        <button type="sumbit" class="btn btn-dark mt-4">Update</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
</div>
@endsection
