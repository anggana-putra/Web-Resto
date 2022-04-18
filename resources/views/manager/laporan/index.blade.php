@extends('layouts.master')
@section('content')
    <div class="row">

        <!-- Modal -->
        <div class="filter-all">
                <div class="modal-content">

                    <div class="filter-header">
                        <h3>Filter</h3>
                        <button type="button" id="close-filter" onclick="closeFilter()"><svg xmlns="http://www.w3.org/2000/svg" height="unset" viewBox="0 0 24 24" width="unset"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></button>
                    </div>

                    <div class="modal-body">
                        <form onsubmit="return false">
                            <label for="start_date">Hari Pertama</label><br>
                            <input class="form-control" type="date" name="start_date" id="startDate">
                            <label for="start_date">Hari akhir</label><br>                            
                            <input class="form-control" type="date" name="end_date" id="endDate">
                        </form>
                    </div>

                        <button type="button" class="btn-filter-save" onclick="filtering()">Save</button>
                </div>
        </div>

            <h2 id="ul-header">Daftar Transaksi</h2>
            
            <div class="print-filter">
                <a href="/manager/laporan/cetak_pdf" class="pdf-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 12v2H8v-4h8v2zm2-2v-2H6v2H4v-4c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v4h-2z"/><circle cx="18" cy="11.5" r="1"/></svg>
                </a>
                <button type="button" class="btn-filter" onclick="openFilter()">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><path d="M0,0h24 M24,24H0" fill="none"/><path d="M7,6h10l-5.01,6.3L7,6z M4.25,5.61C6.27,8.2,10,13,10,13v6c0,0.55,0.45,1,1,1h2c0.55,0,1-0.45,1-1v-6 c0,0,3.72-4.8,5.74-7.39C20.25,4.95,19.78,4,18.95,4H5.04C4.21,4,3.74,4.95,4.25,5.61z"/><path d="M0,0h24v24H0V0z" fill="none"/></g></svg>
                </button>
        </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
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
        </tr>
        <tbody id="loadDataTransaksi">

        </tbody>
    </table>        
@endsection
@section('cjs')
    <script>
        console.log('test');
        function hitData(url, data, type) {
            return new Promise((resolve, reject)=>{
                $.ajax({
                    url,
                    data,
                    type,
                    headers:{
                        'X-CSRF-TOKEN' : "{{ csrf_token() }}"
                    }, 
                    success:(respons)=>{
                        resolve(respons)
                    },
                    error:(error)=>{
                        reject(error)
                    }
                })
            })
        }
        async function getData(url = '/get-transaksi') {
            try {
                const respons = await hitData(url, null, 'GET')
                $('#loadDataTransaksi').html(respons);
            } catch (error) {
                console.log(error);
            }
        }
        function filtering() {
            var startDate = $('#startDate').val()
            var endDate = $('#endDate').val()
            getData(`/get-transaksi?start_date=${startDate}&end_date=${endDate}`, null, 'GET')
            $('#filterModal').modal('hide')
        }
        getData();
    </script>
    </div>
@endsection