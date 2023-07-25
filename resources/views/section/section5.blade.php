<!-- start section5 -->
<div class="section5 mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <h1 class="display-6 text-black text-center pt-5">Solusi
                    Paket Hosting Terbaik
                    dari Kami
                </h1>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <p class="text-center pb-3 text-black">
                    Kami menawarkan solusi paket hosting terbaik untuk segala
                    kebutuhan website dan
                    sistem Anda.Mulai
                    dari blog hingga website bisnis dan perusahaan</p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($paket as $item)
                <div class="col-md-4 my-2">
                    <div class="card-service">
                        <div class="card-service--border">
                            <div class="fw-bold text-orange">{{ $item->jenis_paket }}</div>
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>
<!-- end section5 -->
