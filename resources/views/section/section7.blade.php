  <!-- start section7 -->
  <div class="section7 mt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <img src={{ asset('img/web-dev.svg') }} alt="" style="width: 100%;">
              </div>
              <div class="col-md-6">
                  <h1 class="display-6 text-black pt-5">Bikin <div class="text-orange d-inline">website
                          impian</div>
                      dengan mudah disini hanya <div class="text-orange d-inline">1jt-an</div>
                  </h1>
                  <p>
                      Bikin website impian iclude paket hosting indonesia terbaik hanya 1jutaan Jasa
                      pembuatan website
                      profesional untuk Perusahaan, Bisnis & UKM.Bikin website impian dengan mudah
                      disini.design website
                      elegan dan mudah dikelola.
                  </p>
                  <button class="btn btn-orange">Lihat Selengkapnya</button>
              </div>
              <h1 class="text-center text-black mt-5">Telah Dipercaya oleh 45.000+ Pelangan Aktif</h1>
          </div>
      </div>

      <div class="container mt-5">
          {{-- desktop version  --}}
          <div class="d-none d-md-block">
              <div class="row py-4 d-flex justify-content-center">
                  @foreach ($pelanggan as $item)
                      <div class="col-md-2">
                          <img src="{{ asset('img/pelanggan/' . $item->gambar) }}" alt="{{ $item->nama }}"
                              style="width: 200px; height: 85px;">
                      </div>
                  @endforeach
              </div>
          </div>

          {{-- mobile version --}}
          <div class="d-sm-block d-md-none">
              <div class="row">
                  @foreach ($pelanggan as $item)
                      <div class="col-sm-12 d-flex justify-content-center">
                          <img src="{{ asset('img/pelanggan/' . $item->gambar) }}" alt="{{ $item->nama }}"
                              style="width: 200px; height: 85px;">
                      </div>
                  @endforeach
              </div>
          </div>
          <a href="javascript:void(0)" class="d-block text-center text-orange text-decoration-none mb-3">Dan
              masih
              Banyak yang Lainnya
          </a>
      </div>

      <div class="container  mt-5">
          <h1 class="text-black text-center">Partner Kami</h1>

          {{-- desktop version --}}
          <div class="d-none d-md-block">
              <div class="row py-4 d-flex justify-content-center">
                  @foreach ($partner as $item)
                      <div class="col-md-2">
                          <img src="{{ asset('img/partner/' . $item->gambar) }}" alt="{{ $item->nama }}"
                              style="width: 200px; height: 85px;">
                      </div>
                  @endforeach
              </div>
          </div>

          {{-- mobile version --}}
          <div class="d-sm-block d-md-none">
              <div class="row">
                  @foreach ($partner as $item)
                      <div class="col-sm-12 d-flex justify-content-center">
                          <img src="{{ asset('img/partner/' . $item->gambar) }}" alt="{{ $item->nama }}"
                              style="width: 200px; height: 85px;">
                      </div>
                  @endforeach
              </div>
          </div>


          <div class="row ">
              <div class="col d-flex justify-content-center align-items-center">

                  <a href="javascript:void(0)" class="mx-1 text-center text-orange text-decoration-none ">Lihat
                      Semua Partner </a>

                  <div>
                      <img src="{{ asset('img/icons/chevron-right.svg') }}" alt=""
                          style="width: 20px; height: 20px;">
                  </div>
              </div>
          </div>
      </div>

      <div class="container mt-5">
          <div class="row py-5 d-flex align-items-center">
              <div class="col-md-5 text-center">
                  <h1 class="text-black text-capitalize">garansi 30 hari <div class="text-orange d-inline">
                          uang kembali
                      </div>
                  </h1>
                  <p>untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku
                      hingga 30 hari
                      setlah hosting aktif.</p>
              </div>
              <div class="col-md-7 text-end">
                  <img src={{ asset('img/wallet.svg') }} alt="" style="width: 100%;">
              </div>
          </div>
      </div>
  </div>
  <!-- end section7 -->
