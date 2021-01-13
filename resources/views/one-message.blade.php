@extends('layouts.app')

@section('title-block'){{ $data->subject }}@endsection

@section('content')
    <h1>{{ $data->subject }}</h1>
    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }} - {{ $data->name }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-data-one-update', $data->id) }}"><button class="btn btn-primary">Edit</button></a>
        <a href="{{ route('contact-data-one-delete-submit', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
    </div>
@endsection



