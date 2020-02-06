@extends('layouts.app')

@section('title', 'Add New Customer')
    
@section('content')
    <h3 class="py-4">Customer Details</h3>
    <p><a href="/customers/{{ $customer->id }}/edit">Edit</a></p>

    <form action="/customers/{{ $customer->id }}" method="post">
        @method('DELETE')
        @csrf

        <input type="submit" class="btn btn-danger" value="Delete">
    </form>

    <p><strong>Name:</strong> {{ $customer->name }} </p>
    <p><strong>Email:</strong> {{ $customer->email }} </p>
    <p><strong>Company:</strong> {{ $customer->company->name }} </p>
    
@endsection

 