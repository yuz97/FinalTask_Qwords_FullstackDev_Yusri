<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\ContactQwords;
use App\Models\Domain;
use App\Models\Layanan;
use App\Models\LayananLain;
use App\Models\Liputan;
use App\Models\PaketHosting;
use App\Models\Partner;
use App\Models\Pelanggan;
use App\Models\Qna;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $domain = Domain::get();
        $layanan = Layanan::get();
        $layanan_lain = LayananLain::get();
        $paket = PaketHosting::get();
        $benefit = Benefit::get();
        $testimonial = Testimonial::get();
        $qna = Qna::get();
        $liputan = Liputan::get();
        $contact = ContactQwords::get();
        $partner = Partner::get();
        $pelanggan = Pelanggan::get();
        return view('home',compact('domain','layanan','layanan_lain','paket','benefit','testimonial','qna','liputan','contact','partner','pelanggan'));
    }
}
