@extends('layout.mainLayout')
@section('main-content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('beers.store')}}" method="post">

        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="alcohol_content">Alcohol content</label>
            <input type="text" name="alcohol_content" class="form-control" placeholder="Alcohol content">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>

        <div class="form-group">
            <label for="img_url">Img URL</label>
            <input type="text" name="img_url" class="form-control" placeholder="Img URL">
        </div>

        <div class="form-group">
            <label for="origin">Origin</label>
            <input type="text" name="origin" class="form-control" placeholder="Origin">
        </div>

        <input type="submit" value="Submit">

    </form>

@endsection
