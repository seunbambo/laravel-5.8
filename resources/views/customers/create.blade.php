@extends('layouts.app')

@section('title', 'Add New Customer')
    
@section('content')
    <h3>Add New Customer</h3>

    <form action="/customers" method="post" class=" py-3">
        
        @include('customers.form')

        <div class="form-group">
            <input class="form control btn btn-primary" type="submit" value="Add Customer">
        </div>
        
    </form>

@endsection

 