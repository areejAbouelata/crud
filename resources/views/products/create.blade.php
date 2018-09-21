@extends('layout.master')
@section('content')
    <div class="container">
        <h2>Add new product</h2>
        {{--action have an id to controller--}}
        <form action="/create/{{$cat->id}}/product" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <lable for="desc"> Description:</lable>
                <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="description">
            </div>
            <div class="form-group">
                <label for="pwd">Price</label>
                <input type="number" class="form-control" id="pwd" placeholder="Enter price" name="price">
            </div>

           <div class="form-controller">
            <button type="submit" class="btn btn-primary">Add product</button>
           </div>

            <div class="form-group">
                @include('layout.includes.errors')
            </div>
        </form>
    </div>

@endsection