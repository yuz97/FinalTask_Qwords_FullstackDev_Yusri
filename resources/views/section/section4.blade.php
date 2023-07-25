    <!-- start section4 -->
    <div class="section4 mb-3 mt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <h1 class="text-capitalize fw-bold display-6 text-black text-center pt-5">lihat juga layanan kami
                        yang lain
                    </h1>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center pb-3 text-black">Optimalkan performa website anda dengan berbagai layanan
                            berkualitas
                            dari Qwords</p>
                    </div>
                </div>

                <div class="row">
                    @foreach ($layanan_lain as $item)
                        <div class="col-md-4 my-2">
                            <div class="card-service">
                                <div class="card-service--border">
                                    <div class="fw-bold align-items-center d-flex mb-4">
                                        <img src="{{ asset('img/layanan_lain/' . $item->gambar) }}" alt="shield"
                                            style="width: 25px; height: 25px;">
                                        <div class="mx-2">{{ $item->nama_layanan }}</div>

                                    </div>
                                    <p>{{ $item->deskripsi }}</p>

                                    <div class="my-2">
                                        <div>Mulai dari</div>
                                        <span class="fw-bold text-orange now-price">Rp
                                            {{ number_format($item->harga, 0, ',', '.') }}</span>/<small>{{ $item->masa }}</small>
                                    </div>

                                    <div class="card-service--feature">
                                        <div class="pt-3">
                                            <button class="btn btn-dark text-white pesan"> Pesan Sekarang</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
    <!-- end section4 -->
