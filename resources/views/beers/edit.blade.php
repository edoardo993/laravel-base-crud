@extends('layout.mainLayout')
@section('main-content')

    @include('beers.form', ['edit' => true])

@endsection
