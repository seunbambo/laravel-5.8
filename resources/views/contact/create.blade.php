@extends('layouts.app')
@section('title', 'Contect Us')
    
@section('content')

    <h2 class="py-3">Contact Us</h2>
    
    @if (!session()->has('message'))
        <form action="/contact" method="post">
        <div class="form-group">
                <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
        <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="10" value="{{ old('email') }}"></textarea>
            <small class="text-danger">{{ $errors->first('message') }}</small>
        </div>

        <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary">
        </div>

        @csrf
    </form>
    @endif
    
@endsection
