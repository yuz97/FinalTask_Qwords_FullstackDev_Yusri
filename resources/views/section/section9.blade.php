    <!-- start section9 -->
    <div class="section9 container my-5 pt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-black text-center text-capitalize">diliput oleh</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($liputan as $item)
                <div class="col-md-3 col-sm-12 text-center ">
                    <img src="{{ asset('img/liput/' . $item->gambar) }}" alt="{{ $item->nama }}"
                        style="width: 200px; height:85px;">
                </div>
            @endforeach


        </div>

        <div class="row d-flex justify-content-center my-5">
            <h5 class="col-md-8  text-center fw-bold">Pilih metode e-payman untuk pembayaran Layanan
                Domain,Hosting,VPS
                langsung aktif tanpa perlu konfirmasi bayar.
                </>
        </div>

        <div class="row">
            <div class="col">
                <img src="{{ asset('img/e-payment/all-payment.webp') }}" alt="" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <a href="javascript:void(0)" class="text-center text-orange text-decoration-none d-block mx-1">Lihat
                    Semua
                    Pembayaran </a>
                <div><img src="{{ asset('img/icons/chevron-right.svg') }}" alt=""
                        style="width: 20px; height: 20px;"></div>
            </div>
        </div>
    </div>
    <!-- end section9 -->
