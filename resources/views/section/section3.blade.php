   <!-- start setion3  -->
   <div class="section3 mt-0 ">
       <div class="bg-gray shadow-lg p-4">
           <div class="container">
               <div class="row d-flex justify-content-center">
                   <div class="col-md-6 col-sm-12 pt-5">
                       <h1 class="text-capitalize text-center fw-bold display-6 text-orange">
                           <span class="text-black">cloud hosting indonesia</span> diskon hingga 50%
                       </h1>
                   </div>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="text-center pb-5 text-black">Layanan Cloud Hosting Indonesia dengan teknologi andal
                       untuk
                       website
                       anda</div>
                   @foreach ($layanan as $item)
                       <div class="col-md-3 my-2 my-card" data-aos="fade-up" data-aos-duration="1000"
                           data-aos-delay="200" data-aos-easing="ease-in-out">
                           <div class="card-service text-black">
                               <div class="card-service--border">
                                   <div class="text-capitalize">{{ $item->nama_layanan }}</div>
                                   <h6 class="fw-bold">{{ $item->jenis_layanan }}</h6>
                                   <div class="text-muted normal-price">Rp
                                       {{ number_format($item->harga_normal, 0, ',', '.') }}</div>
                                   <h4 class="fw-bold text-orange now-price">Rp
                                       {{ number_format($item->harga_diskon, 0, ',', '.') }}</h4>

                                   <div class="card-service--feature">
                                       <div class="pt-3 d-flex align-items-center">
                                           <img src="{{ asset('img/icons/hard-drive.svg') }}" alt="disk">
                                           <div class="mx-3">
                                               <div>Disk</div>
                                               <span class="fw-bold text-capitalize">{{ $item->disk }}</span>
                                           </div>
                                       </div>

                                       <div class="pt-3 d-flex align-items-center">
                                           <img src="{{ asset('img/icons/server.svg') }}" alt="disk">
                                           <div class="mx-3">
                                               <div>Bandwith</div>
                                               <span class="fw-bold text-capitalize">{{ $item->bandwith }}</span>
                                           </div>
                                       </div>


                                       <div class="pt-3 d-flex align-items-center">
                                           <img src="{{ asset('img/icons/cpu.svg') }}" alt="disk">
                                           <div class="mx-3">
                                               <div>Core CPU</div>
                                               <span class="fw-bold">{{ $item->core_cpu }}</span>
                                           </div>
                                       </div>

                                       <div class="pt-3 d-flex align-items-center">
                                           <img src="{{ asset('img/icons/package.svg') }}" alt="disk">
                                           <div class="mx-3">
                                               <div>Addon / parked domain</div>
                                               <span class="fw-bold text-capitalize">{{ $item->parked_domain }}</span>
                                           </div>
                                       </div>

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
   <!-- end section3 -->
