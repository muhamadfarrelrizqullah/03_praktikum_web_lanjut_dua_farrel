@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profile Page</h1>
@stop

@section('content')
    <p>&emsp;Hey Friends, Selamat datang diwebsite percobaan saya. Kenalin namaku <strong>{{$nama}}</strong> dari Sidoarjo. Saya sekarang adalah mahasiswa Politeknik Negeri Malang dan bagian dari kelas 2E jurusan Teknik Informatika.</p>
    
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