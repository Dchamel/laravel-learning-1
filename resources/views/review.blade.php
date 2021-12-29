@extends('layout')

@section('title')Review Page @endsection

@section('main_content')
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatum itaque aliquid ex suscipit repellat at quia rem, debitis minima fugit repellendus, sit corporis rerum provident cum quod sequi? Error.

    <form action="post" action="{{ route('reviewCheck') }}">
        <input type="email" name="email" id="email" placeholder="Input Email" class="form-control mb-2">
        <input type="text" name="subject" id="subject" placeholder="Input Subject" class="form-control mb-2">
        <textarea name="message" id="message" rows="4" placeholder="Input your Review here..." class="form-control mb-2"></textarea>
        <button type="submit">Send</button>
    </form>

@endsection
