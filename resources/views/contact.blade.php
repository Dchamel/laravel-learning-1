@extends('layouts.app')

@section('title-block')
    Contacts title page
@endsection

@section('content')

    <h1>Contact</h1>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf 
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Input name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" name="email" placeholder="Input email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Message subject</label>
            <input type="text" name="subject" placeholder="Message theme" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Your Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Input your message here"></textarea>
        </div>
        <br />

        <button type="submit" class="btn btn-success">Send</button>
    </form>

@endsection
