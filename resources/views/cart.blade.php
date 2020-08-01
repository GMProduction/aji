@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5">


        <div class="text-left mt-5">
            <h2><i class="mr-3" data-feather="shopping-cart"></i>Cart</h2>
            <div class="d-block bg-gradient-success mb-2" style="height: 3px; width: 300px; margin-top: 20px">
            </div>
        </div>


        <div class="card">

            <!-- Light table -->
            <div class="table-responsive">
                <table id="tabel" class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort text-center" data-sort="name">#</th>
                        <th scope="col" class="sort text-center" data-sort="completion">gambar</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Nama Produk</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Qty</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Harga</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Total</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($carts as $v)
                        <tr>
                            <td class="text-center">{{ $loop->index + 1 }}</td>
                            <td class="text-center"><img src="{{asset('/uploads/image')}} / {{ $v->product->url }}"
                                                         style="height: 100px; width: 100px; object-fit: cover"></td>
                            <td class="text-center">{{ $v->product->nama }}</td>
                            <td class="text-center"> {{ $v->qty }}</td>
                            <td class="text-center"> Rp {{ number_format($v->harga, 0, ',', '.') }}</td>
                            <td class="text-center"> Rp {{ number_format($v->harga * $v->qty, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12">
            <div class="text-left mt-5">
                <h2><i class="mr-3" data-feather="twitch"></i>Total Harga</h2>
                <div class="d-block bg-gradient-success mb-2" style="height: 3px; width: 300px; margin-top: 20px">
                </div>
            </div>


            <div class="col-lg-12">
                <div class="card p-3">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="harga">Total</label>
                            <input type="number" readonly id="total" name="total"
                                   class="form-control" value="{{ $subTotal }}">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-auto mb-auto ml-auto">
                        <button id="btn-cekout" type="button" class="btn btn-md btn-success">Check Out</button>
                    </div>

                </div>

            </div>
        </div>
        </div>
    </section>


@endsection

@section('script')

<script>
    $(document).ready(function () {

        $('#btn-cekout').on('click', async function (e) {
            e.preventDefault();
            let data = {
                '_token': '{{ csrf_token() }}',
                nominal: $('#total').val(),
            };
            let res = await $.post('/ajax/cekout', data);
            if (res['status'] === 200 && res['payload'] !== null) {
                let id = res['payload'];
                alert('Sewa Berhasil');
                window.location.href = '/payment/'+id;
            } else {
                alert('Sewa gagal');
            }
        });
    });
</script>
@endsection
