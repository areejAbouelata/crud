    @extends('layout.master')
    @section('content')
        <div class="container">
            <h2>create category</h2>
            <form action="/category" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Name:</label>
                    <input type="text" class="form-control" id="email"
                           placeholder="Enter category" name="name">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-default">add category</button>
                </div>
                @include('layout.includes.errors')
            </form>
        </div>


    @endsection