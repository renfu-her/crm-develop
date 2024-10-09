<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('backend/customers/index', compact('customers'));
    }

    public function create()
    {
        return view('backend/customers/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required',
            'address' => 'nullable|string',
        ]);

        Customer::create($validatedData);

        return redirect()->route('backend.customers.index')->with('success', '客戶新增成功');
    }

    public function edit(Customer $customer)
    {
        return view('backend/customers/edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone' => 'required',
            'address' => 'nullable|string',
        ]);

        $customer->update($validatedData);

        return redirect()->route('backend.customers.index')->with('success', '客戶更新成功');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('backend.customers.index')->with('success', '客戶刪除成功');
    }
}
