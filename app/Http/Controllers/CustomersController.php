<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Customer;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        // $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::inactive()->get();

        //$customers = Customer::all();

        //dd($customers);

        // return view('internals.customers', [
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers
        // ]);

        // Using compact makes it cleaner

        // return view('customers.index', compact('activeCustomers', 'inactiveCustomers'));
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();

        return view('customers.create', compact('companies', 'customer'));
    }

    public function store()
    {
        $data =

            Customer::create($this->validateRequest());
        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();

        return redirect('customers');
    }

    public function show(Customer $customer) // Route Model Binding - Laravel fetches the record
    {
        //$customer = Customer::where('id', $customer)->firstOrFail();

        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();

        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());

        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);
    }
}
