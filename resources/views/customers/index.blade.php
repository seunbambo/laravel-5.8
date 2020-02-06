@extends('layouts.app')

@section('title', 'Customer List')
    
@section('content')

    <h3>Customer List</h3>
    <p><a href="customers/create">Add New Customer</a></p>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>Status</th>
        </tr>
        @foreach ($customers as $customer)
        <tbody>
            <tr>
                <td>{{ $customer->id }}</td>
                <td><a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a></td>
                <td>{{ $customer->company->name }}</td>
                <td>{{ $customer->active }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    {{-- <div class="row">
        <div class="col-12">
            @foreach ($companies as $company)
                <h5>{{ $company->name }}</h5>

                <ul>
                    @foreach ($company->customers as $customer)
                        <li>{{ $customer->name }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div> --}}

@endsection

 