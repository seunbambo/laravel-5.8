@extends('layouts.app')

@section('title', 'Edit Details for ' . $customer->name)
    
@section('content')
    <h3>Edit Details for {{ $customer->name }}</h3>

    <form action="/customers/{{ $customer->id }}" method="post" class=" py-3">
        @method('PATCH')
        @include('customers.form')

        <div class="form-group">
            <input class="form control btn btn-info" type="submit" value="Save Customer">
        </div>
        
    </form>

@endsection

 