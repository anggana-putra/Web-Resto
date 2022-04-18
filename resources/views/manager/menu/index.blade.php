@extends('layouts.master')
@section('content')
    <div class="wrap-user-list">
                <h2 id="ul-header">Daftar Menu</h2>
            <div class="create-user">
                <a href="{{ route('menu.create') }}"> Create</a>
            </div>
            <div class="table-wrap">
            <table class="table-user-list">
                <tr>
                    <th>No.</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Ketersediaan</th>
                    <th>Action</th>
                </tr>
                @foreach ($menus as $menu)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>Rp {{ number_format($menu->harga,0,',','.') }}</td>
                    <td>{{ $menu->deskripsi }}</td>
                    <td>{{ $menu->ketersediaan }}</td>
                    <td>
                        <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
                            <a class="edit-user-btn" href="{{ route('menu.edit',$menu->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><rect fill="none" height="24" width="24"/><path d="M3,10h11v2H3V10z M3,8h11V6H3V8z M3,16h7v-2H3V16z M18.01,12.87l0.71-0.71c0.39-0.39,1.02-0.39,1.41,0l0.71,0.71 c0.39,0.39,0.39,1.02,0,1.41l-0.71,0.71L18.01,12.87z M17.3,13.58l-5.3,5.3V21h2.12l5.3-5.3L17.3,13.58z"/></svg>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-user-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M1.41 1.13L0 2.54l4.39 4.39 2.21 4.66-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h7.46l1.38 1.38c-.5.36-.83.95-.83 1.62 0 1.1.89 2 1.99 2 .67 0 1.26-.33 1.62-.84L21.46 24l1.41-1.41L1.41 1.13zM7 15l1.1-2h2.36l2 2H7zM20 4H7.12l2 2h9.19l-2.76 5h-1.44l1.94 1.94c.54-.14.99-.49 1.25-.97l3.58-6.49C21.25 4.82 20.76 4 20 4zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2z"/></svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
    <div class="alert">
        {{ $message }}
        <button type="button" id="alert-btn" onclick="closeAlertSu()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></button>
    </div>
    @endif
    
    
@endsection