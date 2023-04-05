@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data Person</h1>
@stop

@section('content')
    <ul>
        @foreach ($dataPerson as $data)
        <li>ID: {{ $data->id}}</li>
        <li>Nama: {{ $data->nama}}</li>
        <li>Email: {{ $data->email}}</li>
        <br><br>
        @endforeach
    </ul>
    
@stop

@section('footer')
    <p class="text-center">Copyright @ 2023 Muhamad Farrel</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop