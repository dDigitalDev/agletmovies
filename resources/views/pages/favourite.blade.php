<!-- extends in the layouts folder and the name of the file is (app) app.blade.php -->
@extends('layouts.app')

<!--Rapping the html tags into section so they can go into the main content-->
@section('content')

    <h1><?php echo $title; ?></h1>
    <p> This your favourite movies</p>

@endsection
