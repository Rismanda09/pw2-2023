@extends('layouts.main')

@section('content')
    <h1 class="mt-4">User Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">User</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            User Data
        </div>
        <div class="card-body">
            <form method="POST" action="/users">
                @csrf
                <div>
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password">
                </div>
                <div>
                    <label for="role">Role</label>
                    <input type="text" id="role" name="role">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection