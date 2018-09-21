@extends('layout.master')
@section('content')
<div class="container">

    <div class="row">
    @foreach( $categories as $category)
            <a href="categories/{{$category->id}} ">
            <div class="col-xl-3 col-sm-3 mb-3">
                <div class="card text-white bg-warning  o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">
                            <a href="categories/{{$category->id}}">
                                {{$category->name}}
                            </a>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Show products</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>

            </div>

            </div>
            </a>
    @endforeach

        </div>
    <a href="category/create" class="btn btn-success"> Add new Category</a>
    @endsection