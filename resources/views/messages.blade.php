@extends('layouts.app')

@section('title-block')All Messages @endsection

@section('content')
    <h1>All Messages</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element->subject }}</h3>
            <p>{{ $element->email }}</p>
            <p><small>{{ $element->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $element->id) }}"><button class="btn btn-warning">Read more</button></a>
        </div>
    @endforeach
@endsection



