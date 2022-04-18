@extends('layouts.master')
@section('content')
<div class="halo">
    <h3>Halo {{ Auth::user()->name }}!</h3><p>Ini adalah halaman admin.</p>
</div>
@endsection

<style>
    .halo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
        color: #404040;
        width: 40%
    }
    h3 {
        font-size: 40px;
        font-size: 40px;
        padding-bottom: 5px
    }
</style>