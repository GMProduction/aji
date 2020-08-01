@extends('user.base')
@section('content')

    <!-- Header -->
    <div class="header bg-gradient-success pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Pesanan</h6>
                    </div>

                    <div class="col-lg-8 col-8">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Pesanan</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort text-center" data-sort="name">#</th>
                                <th scope="col" class="sort text-center" data-sort="budget">No. Pesanan</th>
                                <th scope="col" class="sort text-center" data-sort="budget">Tanggal</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Pembayaran</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Status</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Total Harga</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($transaction as $v)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $v->no_transaksi }}</td>
                                    <td class="text-center">{{ $v->created_at }}</td>
                                    <td class="text-center">
                                        @switch($v->payment->status)
                                            @case('0')
                                            Menunggu Konfirmasi
                                            @break
                                            @case('1')
                                            Di Terima
                                            @break
                                            @case('2')
                                            Di Tolak
                                            @break
                                            @default
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="text-center">
                                        @switch($v->status)
                                            @case('0')
                                            Menunggu Konfirmasi
                                            @break
                                            @case('1')
                                            Di Terima
                                            @break
                                            @case('2')
                                            Di Tolak
                                            @break
                                            @default
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="text-center">Rp {{ number_format($v->nominal, 0, ',', '.')}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-success" href="/user/pesanan/{{ $v->id }}">
                                                Detail
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection
