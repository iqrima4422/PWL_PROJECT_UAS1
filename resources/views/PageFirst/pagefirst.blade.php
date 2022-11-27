@extends('PageFirst.layout')
@section('content')

<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>


<section class="container py-5">
    <div class="row text-center py-3">
        <div class="row">
            <img src="src/img/toko2.jpeg" alt="">
        </div>
    </div>
</section>

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="d-flex justify-content-end col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{asset('img/featured/tokonya.png')}}" style="height: 368px;" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success">Barokah Online</h1>
                            <h3 class="h2">Toko Terkemuka di Probolinggo</h3>
                            <p>
                            Menjual Bahan Pokok Rumah Tangga 100 % Halal dan Original.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="container">
                <div class="row p-5">
                    <div class="d-flex justify-content-end col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="img/featured/bahanpokok.png" style="height: 368px;" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success">Berbagai <b>Bahan Pokok</b></h1>
                            <h3 class="h2">Masak mudah, di dapur betah</h3>
                            <p>
                                Toko kami menyediakan kebutuhan dapur anda mulai dari bumbu dapur, minyak, beras, dll.
                                Jaga <strong>kehangatan keluarga</strong>, tanpa menguras kantong anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="d-flex justify-content-end col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="img/featured/sabun2.png" style="height: 368px;" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success">Kebutuhan <b>Mandi dan Cuci</b></h1>
                            <h3 class="h2">Lindungi keluarga dari kuman dan bau</h3>
                            <p>
                                Belanja kebutuhan mandi dengan kami dan rasakan kesegaran setiap hari.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="d-flex justify-content-end col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{asset('img/featured/snack31.png')}}" style="height: 368px;" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success">Berbagai <b>Snack Lezat</b></h1>
                            <h3 class="h2">Lengkapi harimu bersama snack berkualitas</h3>
                            <p>
                                Kami menyediakan berbagai pilihan snack berkualitas yang lezat untuk menemani kesibukan anda.
                                Brand snack unggulan yang kami sediakan <a rel="sponsored" class="text-success" href="https://garudafood.com/" target="_blank">GarudaFood</a>,
                                <a rel="sponsored" class="text-success" href="https://www.nestle.co.id/" target="_blank">Nestle</a>,
                                <a rel="sponsored" class="text-success" href="https://www.indofood.com/" target="_blank">Indofood</a> and
                                <a rel="sponsored" class="text-success" href="https://nissinbiscuit.com/" target="_blank">Nissin</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Produk Unggulan Bulan November</h1>
            <p>
                Terdapat beberapa produk unggulan atau barang yang sering dibeli pada Bulan November
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#" class="d-flex justify-content-center"><img src="img/featured/minyak.png" width="270" height="270" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Minyak</h5>
            <p class="text-center"><a class="btn btn-success" href="{{ route('LoginPage') }}">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#" class="d-flex justify-content-center"><img src="img/featured/gula.png" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Gula</h2>
            <p class="text-center"><a class="btn btn-success" href="{{ route('LoginPage') }}">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#" class="d-flex justify-content-center"><img src="img/featured/telur.png" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Telur</h2>
            <p class="text-center"><a class="btn btn-success" href="{{ route('LoginPage') }}">Go Shop</a></p>
        </div>
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured Product -->

<!-- End Featured Product -->
@endsection