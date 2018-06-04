@extends('layout')

@section('title')

    {{ config('app.name') }}

@stop

@section('content')

    <h1>{{ $title }}</h1>

    <small>From Wikipedia, the free encyclopedia</small><br />

   
    <p>{!! $content !!} </p>

@stop
