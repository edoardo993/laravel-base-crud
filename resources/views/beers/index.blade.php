@extends('layout.mainLayout')
@section('main-content')

    <table class="table">

        <thead class="thead-dark">

          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Alcohol content</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Origin</th>
            <th scope="col">Img</th>
          </tr>

        </thead>

        <tbody>

            @foreach ($beers as $beer)

                <tr>
                    <th scope="row">{{$beer->id}}</th>
                    <td>{{$beer->name}}</td>
                    <td>{{$beer->alcohol_content}}</td>
                    <td>{{$beer->description}}</td>
                    <td>{{$beer->price}}</td>
                    <td>{{$beer->origin}}</td>
                    <td><img src="{{$beer->img_url}}" width="100"></td>
                </tr>

            @endforeach

        </tbody>

    </table>

@endsection
