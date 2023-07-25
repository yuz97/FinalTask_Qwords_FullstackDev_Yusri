   <!-- start section11 -->
   <div class="section11 container mt-5">
       <div class="row">
           <div class="col text-black">
               <h1 class="text-center text-capitalize">butuh <div class="text-orange d-inline">bantuan?
                   </div>
               </h1>
               <p class="text-center">Kami siap membantu anda 24 jam </p>
           </div>
       </div>
       <div class="row my-5 ">
           @foreach ($contact as $item)
               <div class="col-md-3 my-1 text-black d-flex align-items-center ">
                   <img src="{{ asset('img/contact/' . $item->gambar) }}" alt="{{ $item->contact }}"
                       style="width:25px; height: 25px; margin: 0 0.5rem;">
                   <div>{{ $item->contact }}</div>
               </div>
           @endforeach

       </div>
   </div>
   <!-- end section11 -->
