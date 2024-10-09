@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>客戶管理</h2>
        <a href="{{ route('backend.customers.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i>
            新增客戶
        </a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>Email</th>
                    <th>電話以及地址</th>
                    <th style="width: 25%;">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }} <br> {{ $customer->address }}</td>
                        <td>
                            <a href="{{ route('backend.customers.edit', $customer->id) }}" class="btn btn-warning m-1">
                                <i class="fas fa-edit"></i>
                                編輯
                            </a>
                            <form action="{{ route('backend.customers.destroy', $customer->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">
                                    <i class="fas fa-trash"></i>
                                    刪除
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "pageLength": 25,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/2.1.8/i18n/zh-HANT.json"
                }
            });
        });
    </script>
@endsection
