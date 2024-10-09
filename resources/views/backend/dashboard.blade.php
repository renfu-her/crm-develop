@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Input</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Input">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
