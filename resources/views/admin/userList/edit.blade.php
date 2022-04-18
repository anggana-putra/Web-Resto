@extends('layouts.master')
@section('content')
    <div class="row">
        <div>
            <div>
                <h2 id="ul-header">Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('userList.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <br>   

    <form action="{{ '/admin/userList/' . $user->id }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        
        <div class="form-wrap">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{$user->name}}" required autocomplete="none">
                </div>
                <div class="username-form">
                    <label >Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{$user->username}}" required autocomplete="none">
                </div>
                <div class="password-form">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="role-form">
                    <strong>Role :</strong>
                    <select name="role" id="" class="form-control">
                        <option value="Admin" @if ($user->role == 'Admin')selected @endif>Admin</option>
                        <option value="Manager" @if ($user->role == 'Manager')selected @endif>Manager</option>
                        <option value="Kasir" @if ($user->role == 'Kasir')selected @endif>Kasir</option>
                    </select>
                </div>
                <button type="submit" class="create-form-btn">Edit</button>
        </div>
        
    </form>
@endsection