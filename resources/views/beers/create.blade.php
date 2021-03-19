@extends('layout.mainLayout')
@section('main-content')

    <form action="{{route('beers.store')}}"
            method="post"
            class="needs-validation"
            novalidate
    >

        @csrf
        @method('POST')

        <div class="form-group">

            <label for="name">Name</label>

            <input type="text"
                    class="form-control"
                    name="name"
                    placeholder="Name"
                    required
            >

            <div class="invalid-feedback">
                Please provide a valid name.
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
            >

            <div class="invalid-feedback">
                Please provide a valid alcohol content.
            </div>

            <div class="valid-feedback">
                Alcohol content's good!
            </div>

        </div>

        <div class="form-group">

            <label for="description">Description</label>

            <input type="text"
                    name="description"
                    class="form-control"
                    placeholder="Description"
                    required
            >

            <div class="invalid-feedback">
                Please provide a valid description.
            </div>

            <div class="valid-feedback">
                Description's good!
            </div>

        </div>

        <div class="form-group">

            <label for="price">Price</label>

            <input type="text"
                    name="price"
                    class="form-control"
                    placeholder="Price"
                    required
            >

            <div class="invalid-feedback">
                Please provide a valid price.
            </div>

            <div class="valid-feedback">
                Price's good!
            </div>

        </div>

        <div class="form-group">

            <label for="img_url">Img URL</label>

            <input type="text"
                    name="img_url"
                    class="form-control"
                    placeholder="Img URL"
                    required
            >

            <div class="invalid-feedback">
                Please provide a valid Img URL.
            </div>

            <div class="valid-feedback">
                Img URL's good!
            </div>

        </div>

        <div class="form-group">

            <label for="origin">Origin</label>

            <input type="text"
                    name="origin"
                    class="form-control"
                    placeholder="Origin"
                    required
            >

            <div class="invalid-feedback">
                Please provide a valid origin.
            </div>

            <div class="valid-feedback">
                Origin's good!
            </div>

        </div>

        <input type="submit" value="Submit">

    </form>

@endsection
