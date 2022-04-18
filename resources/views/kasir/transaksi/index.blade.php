@extends('layouts.master')
@section('content')
    <div class="row">
                <h2 id="ul-header">Daftar Transaksi</h2>
            <div class="create-user" >
                <a href="{{ route('transaksi.create') }}"> Create</a>
            </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
        <div class="alert">
            {{ $message }}
            <button type="button" id="alert-btn" onclick="closeAlertSu()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></button>
        </div>
    @elseif ($message = Session::get('error'))
        <div class="alert-error">
            <p>{{ $message }}</p>
            <button type="button" id="alert-btn" onclick="closeAlertEr()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></button>
        </div>
    @endif
    <div class="table-wrap">
        <table class="table-user-list">
            <tr>
                <th>No.</th>
                <th>Nama Pelanggan</th>
                <th>Nama Menu</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $transaksi->nama_pelanggan }}</td>
                <td>{{ $transaksi->nama_menu }}</td>
                <td>{{ $transaksi->jumlah }}</td>
                <td>Rp {{ number_format($transaksi->total_harga,0,',','.') }}</td>
                <td>{{ $transaksi->nama_pegawai }}</td>
                <td>{{ $transaksi->created_at->format('d-m-Y') }}</td>
                <td>
                    <form action="{{ route('transaksi.destroy',$transaksi->id) }}" method="POST">     
                        <a href="/kasir/transaksi/struk/{{ $transaksi->id }}" class="struk-btn" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.5 3.5L18 2l-1.5 1.5L15 2l-1.5 1.5L12 2l-1.5 1.5L9 2 7.5 3.5 6 2 4.5 3.5 3 2v20l1.5-1.5L6 22l1.5-1.5L9 22l1.5-1.5L12 22l1.5-1.5L15 22l1.5-1.5L18 22l1.5-1.5L21 22V2l-1.5 1.5zM19 19.09H5V4.91h14v14.18zM6 15h12v2H6zm0-4h12v2H6zm0-4h12v2H6z"/></svg>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-user-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    
@endsection