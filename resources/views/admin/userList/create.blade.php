@extends('layouts.master')
@section('content')
    <div class="row">
        <div>
            <div>
                <h2 id="ul-header">Add new</h2>
            </div>
            <div>
                <a href="{{ route('userList.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <br>   

    <form action="{{ route('userList.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-wrap">
                <div class="name-form">
                    <label for="name">Nama</label><br>
                    <input type="text" name="name" class="form-control" placeholder="Nama" required autocomplete="none">
                </div>
                <div class="username-form">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autocomplete="none">
                </div>
                <div class="password-form">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="role-form">
                    <strong>Role :</strong>
                    <select name="role" id="" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                        <option value="Kasir">Kasir</option>
                    </select>
                </div>
                <button type="submit" class="create-form-btn">Create</button>
        </div>
        
    </form>
@endsection