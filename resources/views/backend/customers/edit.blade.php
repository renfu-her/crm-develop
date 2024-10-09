@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($customer) ? '編輯客戶' : '新增客戶' }}</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form
                            action="{{ isset($customer) ? route('backend.customers.update', $customer->id) : route('backend.customers.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($customer))
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label">姓名</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $customer->name ?? '') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $customer->email ?? '') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">電話</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $customer->phone ?? '') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">地址</label>
                                <textarea name="address" class="form-control">{{ old('address', $customer->address ?? '') }}</textarea>
                            </div>
                            <div class="my-3 text-center">
                                <button type="submit" class="btn btn-primary">{{ isset($customer) ? '更新' : '儲存' }}</button>
                                <a href="{{ route('backend.customers.index') }}" class="btn btn-secondary">取消</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
