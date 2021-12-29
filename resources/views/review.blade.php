@extends('layout')

@section('title')Review Page @endsection

@section('main_content')

    <h1>Review Page</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="post" action="{{ route('reviewCheck') }}">
        @csrf
        <input type="email" name="email" id="email" placeholder="Input Email" class="form-control mb-2">
        <input type="text" name="subject" id="subject" placeholder="Input Subject" class="form-control mb-2">
        <textarea name="message" id="message" rows="4" placeholder="Input your Review here..." class="form-control mb-2"></textarea>
        <button type="submit">Send</button>
    </form>

@endsection
