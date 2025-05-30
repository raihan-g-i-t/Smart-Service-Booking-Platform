@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Welcome Back, Admin!</h1>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Total user: {{ $number }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Sales</h5>
                    <p class="card-text">$18,200</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
