<!-- start section8 -->
<div class="section-testimonial ">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h1 class="text-black text-center text=text-black">Apa Kata Mereka?</h1>
                <p class="text-black text-center text=text-black">Apa kata mereka yang sudah
                    menggunakan web hosting
                    indonesia dari
                    Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan
                    kami.</p>

            </div>
        </div>
    </div>

    <div class="container">
        <div data-aos="fade-right" data-aos-duration=" 1000" data-aos-delay="200" data-aos-easing="ease-in-out">
            @foreach ($testimonial as $item)
                <div class="row d-flex align-items-center justify-content-between text-black mb-5">
                    <div class="col-md-6 ">
                        <h5 class="fw-bold">
                            <q>
                                {{ $item->testimonial }}
                            </q>
                        </h5>
                        <i class="text-muted">
                            {{ $item->deskripsi_perusahaan }}
                        </i>
                        <div class="fw-bold text-capitalize mt-2">{{ $item->nama }} <span
                                class="text-muted">{{ $item->pekerjaan }}</span>
                        </div>
                        <div class="row my-2">
                            <div class="col d-flex justify-content-start align-items-center">
                                <a href="javascript:void(0)" class="text-orange text-decoration-none d-block">
                                    Lihat Video Selengkapnya </a>
                                <div>
                                    <img src="{{ asset('img/icons/chevron-right.svg') }}"
                                        style="width: 20px; height: 20px;" class="mx-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/testi/' . $item->gambar) }}" alt="testimonial1" class="w-100">
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
<!-- end section8 -->
