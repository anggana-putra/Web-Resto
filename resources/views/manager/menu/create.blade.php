@extends('layouts.master')
@section('content')
    <div class="row">
            <div>
                <h2 id="ul-header">Add new</h2>
            </div>
            <div>
                <a href="{{ route('menu.index') }}"> Back</a>
            </div>
    </div>

    <br>  

    @if ($errors->any())
        <div class="alert-error">
            <p>Opps.. Ada yang salah</p>
            <button type="button" id="alert-btn" onclick="closeAlertEr()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></button>
        </div>
    @endif
        
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-wrap">
                <div class="name-form">
                    <label>Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control" placeholder="Nama Menu" required>
                </div>
                <div class="username-form">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                </div>
                <div class="deskripsi-form">
                    <strong>Deskripsi :</strong>
                    <textarea name="deskripsi" required></textarea>
                </div>
                <div class="ketersediaan-form">
                    <label>Ketersediaan</label>
                    <input type="number" name="ketersediaan" class="form-control" placeholder="Ketersediaan">
                </div>
                <button type="submit" class="menu-form-btn">Create</button>
            </div>
        </div>
    </form>
@endsection