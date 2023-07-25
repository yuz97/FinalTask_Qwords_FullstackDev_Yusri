<!-- start section10 -->
<div class="section10 container">
    <div class="row">
        <div class="col">
            <h1 class="text-black text-center">Pertanyaan seputar <div class="text-orange">Layanan Web
                    Hosting</div>
                Qwords
            </h1>
        </div>
    </div>
    <div class="row mt-5">

        <div class="col">
            <div class="accordion" id="accordionExample">

                @foreach ($qna as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne{{ $item->id }}">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne{{ $item->id }}" aria-expanded="true"
                                aria-controls="collapseOne" href="#item{{ $item->id }}">
                                <div class="fw-bold question">{{ $item->pertanyaan }}</div>
                            </button>
                        </h2>
                        <div id="collapseOne{{ $item->id }}" class='accordion-collapse collapse'
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $item->jawaban }}
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>


        </div>
    </div>
</div>
<!-- end section10 -->

@push('script')
@endpush
