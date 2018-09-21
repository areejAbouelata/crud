@extends('layout.master')
@section('content')

    <h1>{{$cat->name}}</h1>

    {{--show all products of this category--}}


    <table class="table table-hover" width="100%" >
        <thead>
        <tr>
            <th>Name</th>
            <th>description</th>
            <th>price</th>
            <th>category</th>
            <th>Start date</th>
        </tr>
</thead>
<tbody>
@foreach($cat->product as $item)
    {{--{{$item->name}}--}}
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->category_id}}</td>
        <td>{{$item->created_at->diffForHumans()}}</td>
    </tr>
    @endforeach
        </tbody>
    </table>
    {{-- link to create a new product--}}
    <a href="/category/{{$cat->id}}/product" class="btn btn-success"> Add New product </a>
@endsection
