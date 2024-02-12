@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Lista film</h1>

    <table class="movies">
        
        <tr>
            <th>Titolo</th>
            <th>Titolo originale</th>
            <th>Nazionalit&agrave;</th>
            <th>Data</th>
            <th>Voto</th>
        </tr>

        @foreach ( $movies as $movie)

            <tr>
                <td>{{$movie -> title}}</td>
                <td>{{$movie -> original_title}}</td>
                <td>{{$movie -> nationality}}</td>
                <td>{{$movie -> date}}</td>
                <td>{{$movie -> vote}}</td>
            </tr>
           

        @endforeach
    </table>

@endsection
