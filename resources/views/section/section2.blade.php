<!-- start section2  -->

<div class="section2">
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center fw-bold">Cari Nama Domainmu</h4>
                <p class="text-center section2--text">
                    Nama Domain digunakan untuk mempermudah pengunjung menuju kesitus
                    Anda.Pilih nama domain yang paling mencerminkan bisnis,produk atau
                    layanan Anda.
                </p>
            </div>
        </div>
    </div>
    <!-- search button input  -->
    <div class="container my-2">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <input type="text" name="domain-name" placeholder="Cari nama domain Anda"
                    class="btn-input d-inline-block input-style" />

            <select name="domain" id="domain" class="btn-input d-inline-block mx-3">
                  @foreach ($domain as $item)
                    <option value="{{$item->id}}">{{$item->jenis_domain}}</option>
                  @endforeach
            </select>

                <button class="btn btn-dark text-white btn-input">Cari</button>
            </div>
            <!-- end search domain  -->

            <!-- start price domain  -->
            <div class="container mb-1 mt-5">
                <div class="row">
                    <div class="col text-price d-flex justify-content-center">
                        @foreach ($domain as $item)
                        <div class="prices mx-2">
                            <small>{{$item->jenis_domain}}</small>
                            <h3 class="fw-bold">
                                Rp {{number_format($item->harga,0,',','.')}}
                            </h3>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- end price domain  -->
        </div>
    </div>


</div>

<!-- end section2 -->
