@extends('template.template')
@section('content')
@section('title', 'Home')
@section('pertama')
Welcome Back, {{ Auth::user()->name }}

@endsection
