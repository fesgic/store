@extends ('layouts.app')

@section('title','Goods')

@section('sidebar')

    @parent

    <p>This is an append to the master sidebar<p>

    @endsection

@section('content')

    <p>This is the content part </p>

    @endsection

