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
            <th>Created</th>
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
                    <td>{{$beer->created_at}}</td>
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

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{$beer->id}}">
                            <i class="fas fa-trash-alt"></i>
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter{{$beer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">ATTENTION</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Are you sure you wanna delete this item?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                  <form action="{{route('beers.destroy', compact('beer'))}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

@endsection
