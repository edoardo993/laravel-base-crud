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
            <th scope="col">Action</th>
          </tr>

        </thead>

        <tbody>

            @foreach ($beers as $beer)

                <tr>
                    <th scope="row">{{$beer->id}}</th>
                    <td><a href="{{route('beers.show', compact('beer'))}}">{{$beer->name}}</a></td>
                    <td>{{$beer->alcohol_content}}</td>
                    <td>{{$beer->description}}</td>
                    <td>{{$beer->price}}0$</td>
                    <td>{{$beer->origin}}</td>
                    <td><img src="{{$beer->img_url}}" width="100"></td>
                    <td>
                        <a href="{{route('beers.show', compact('beer'))}}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </button>
                        </a>
                        <a href="{{route('beers.edit', compact('beer'))}}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>
                        <form action="{{route('beers.destroy', compact('beer'))}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

@endsection
