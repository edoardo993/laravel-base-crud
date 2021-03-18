<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>BEERS</title>
</head>
<body>

    <table class="table">

        <thead class="thead-dark">

          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Alcohol content</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
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
                    <td><img src="{{$beer->img_url}}"></td>
                </tr>

            @endforeach

        </tbody>

      </table>

</body>
</html>
