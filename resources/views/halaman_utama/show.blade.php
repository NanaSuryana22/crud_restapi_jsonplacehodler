@extends('layout.master')
@section('title', "Data User")
@section('content')
  <br />
  @include('layout.notice')
  <div class="card">
    <div class="card-header">
      Detail Information
    </div>
    <div class="card-body">
      <p class="card-text">Fullname : {{ $data['name'] }}</p>
      <p class="card-text">Username : {{ $data['username'] }}</p>
      <p class="card-text">Email : <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
      <p class="card-text">Phone Number : <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></p>
      <p class="card-text">Website : <a href="http://www.{{ $data['website'] }}">{{ $data['website'] }}</p>
      <a href="{{route('halaman_utama.index')}}" class="btn btn-primary pull-right">Kembali</a>
    </div>
  </div>
@endsection
