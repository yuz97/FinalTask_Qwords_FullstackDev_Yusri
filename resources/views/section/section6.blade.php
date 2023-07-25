<!-- start section6 -->
<div class="section6 mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <h1 class="display-6 text-black text-center pt-5 text-capitalize">komitmen <div
                        class="text-orange d-inline-block">qwords</div>
                </h1>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <p class="text-center pb-3 text-black">
                    Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords</p>
            </div>
        </div>
    </div>

    <div class="container layanan-pelanggan">
        <div class="row">
            @foreach ($benefit as $item)
                <div class="col-md-3" data-aos="fade-up" data-aos-duration=" 1000" data-aos-delay="200"
                    data-aos-easing="ease-in-out">
                    <div class="text-center my-3 ">
                        <img src="{{ asset('img/benefit/' . $item->gambar) }}" alt="connected"
                            style="width:25px; height:25px;">
                    </div>
                    <div class="fw-bold  text-center">{{ $item->nama_benefit }}</div>
                    <p class="text-black">{{ $item->deskripsi }}
                    </p>
                </div>
            @endforeach


        </div>
    </div>
</div>
<!-- end section6 -->
