@extends('layout.mainLayout')
@section('main-content')

    @php
        if(isset($edit) && !empty($edit)){
            $method = 'PUT';
            $url = route('beers.update', compact('beer'));
        }else{
            $method = 'POST';
            $url = route('beers.store');
        }
    @endphp

    <form action="{{$url}}"
            method="post"
            class="needs-validation"
            novalidate
            name="invio"
    >

        @csrf
        @method($method)

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <div class="form-group">

            <label for="name">Name</label>

            <input type="text"
                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name"
                    placeholder="Name"
                    required
                    value="{{isset($beer) ? $beer->name : ''}}"
            >

            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>

            <div class="valid-feedback">
                Name's good!
            </div>

        </div>

        <div class="form-group">

            <label for="alcohol_content">Alcohol content</label>

            <input type="text"
                    name="alcohol_content"
                    class="form-control"
                    placeholder="Alcohol content"
                    required
                    value="{{isset($beer) ? $beer->alcohol_content : ''}}"

            >

            <div class="invalid-feedback">
                Please provide a valid alcohol content.
            </div>

        </div>

        <div class="form-group">

            <label for="description">Description</label>

            <input type="text"
                    name="description"
                    class="form-control"
                    placeholder="Description"
                    required
                    value="{{isset($beer) ? $beer->description : ''}}"
            >

            <div class="invalid-feedback">
                Please provide a valid description.
            </div>

        </div>

        <div class="form-group">

            <label for="price">Price</label>

            <input type="text"
                    name="price"
                    class="form-control"
                    placeholder="Price"
                    required
                    value="{{isset($beer) ? $beer->price : ''}}"
            >

            <div class="invalid-feedback">
                Please provide a valid price.
            </div>

        </div>

        <div class="form-group">

            <label for="img_url">Img URL</label>

            <input type="text"
                    name="img_url"
                    class="form-control"
                    placeholder="Img URL"
                    required
                    value="{{isset($beer) ? $beer->img_url : ''}}"
            >

            <div class="invalid-feedback">
                Please provide a valid Img URL.
            </div>

        </div>

        <div class="form-group">

            <label for="origin">Origin</label>

            <input type="text"
                    name="origin"
                    class="form-control"
                    placeholder="Origin"
                    required
                    value="{{isset($beer) ? $beer->origin : ''}}"
            >

            <div class="invalid-feedback">
                Please provide a valid origin.
            </div>

        </div>

        <input type="submit" value="Submit" onclick="validation()">

    </form>

@endsection
