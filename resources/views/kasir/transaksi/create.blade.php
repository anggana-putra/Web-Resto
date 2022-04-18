@extends('layouts.master')
@section('content')
    <div class="row">
        <div>
            <div>
                <h2 id="ul-header">Add new</h2>
            </div>
            <div>
                <a href="{{ route('transaksi.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <br>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-wrap">
            <div class="name-form">
                <label>Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan">
                </div>
                <div class="role-form">
                    <strong>Nama Menu :</strong>
                    <select class="form-control" name="nama_menu">
                        @foreach($menus as $menu)
                        <option value="{{$menu->nama_menu}}">{{$menu->nama_menu}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                <button type="submit" class="create-form-btn-trans">Create</button>
                <div class="nama-pegawai">
                    <div class="nama-pegawai-wrap">
                        <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" value="{{ Auth::user()->name }}">
                    </div>
            </div>
            </div>
    </form>
@endsection