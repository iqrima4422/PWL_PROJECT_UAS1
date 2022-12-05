@extends('HomePage.layout')
@section('content')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="container">
    <div class="">
        <div class="hero__item set-bg" data-setbg="{{asset('src/img/toko2.jpeg')}}">
            <div class="hero__text">
                <span>TOKO SEMBAKO BAROKAH</span>
                <h2> Segala Macam Sembako <br />100% Halal</h2>
                <h6>Free Pickup and Delivery Available</h6> <br>
                <a href="{{ route('GalleryPage') }}" class="primary-btn">SHOP NOW</a>
                <p class="mb-0 mt-3 mr-5 p-2" style="background: rgba(127, 173, 57,0.7);">*Barang yang sudah dibeli tidak dapat dikembalikan lagi karena barang yang dikirim sudah melewati proses pengecekan dan dipastikan dalam kondisi baik. Sehingga apabila ada keterlambatan, kerusakan maupun kehilangan barang pada saat pengiriman,
                    Hal tersebut berada diluar tanggung jawab kami.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Start Categories of The Month -->
<section class="container py-3">
    <div class="text-jusfity">
        <h1 style="color:green;" class="h1">Tentang Toko Sembako Barokah</h1>
        <p style="color:black;">
            Toko Kelontong Barokah merupakan toko yang menjual aneka macam barang sembako dan kebutuhan sehari-hari, seperti gula, beras, telur, tepung dan lain sebagainya.
            Melayani transaksi yang cukup besar disetiap harinya. Barang yanag dijual terjamin 100% Halal.
            Sistem penjualan pada Toko Kelontong Barokah ini hanya melayani pengiriman Cash On Delivery (COD). Pengiriman barang dapat dilakukan khusus untuk area <b>Probolinggo</b>.

        </p>
    </div>

</section>
<!-- End Categories of The Month -->



<!-- Categories Section Begin -->
<section class="container py-3">
    <div class="row">
        <div class="categories__slider owl-carousel">
            <div class="col-lg-3">
                <div class="categories__item set-bg">
                    <img src="{{asset('img/categories/minyak.png')}}" style="width: 100%; height: 100%">
                    <h5><a href="#">Minyak Goreng</a></h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categories__item set-bg" data-setbg="">
                    <img src="{{asset('img/categories/sabun.png')}}" style="width: 100%; height: 100%">
                    <h5><a href="#">Sabun</a></h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categories__item set-bg">
                    <img src="{{asset('img/categories/gula.png')}}" style="width: 100%; height: 100%">
                    <h5><a href="#">Gula</a></h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categories__item set-bg">
                    <img src="{{asset('img/categories/tepung.png')}}" style="width: 100%; height: 100%">
                    <h5><a href="#">Tepung</a></h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categories__item set-bg">
                    <img src="{{asset('img/categories/telur.png')}}" style="width: 100%; height: 100%">
                    <h5><a href="#">Telur</a></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Product Unggulan</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".dapur">Bahan Dapur</li>
                        <li data-filter=".mandi">Perlengkapan Mandi</li>
                        <li data-filter=".instan">Makanan instan</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix dapur">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/minyak.png">

                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Minyak Goreng 2L</a></h6>
                        <h5>Rp. 28.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix instan ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/mie.png">

                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Mie Goreng</a></h6>
                        <h5>Rp. 2500</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix mandi">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/clear.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Shampoo</a></h6>
                        <h5>Rp. 25.000 </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix dapur">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/tepung.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Tempung Terigu</a></h6>
                        <h5>Rp. 10.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix instan">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/miekuah.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Mie Kuah</a></h6>
                        <h5>Rp. 3000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix dapur ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/telur.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Telur 1 Kg</a></h6>
                        <h5>Rp. 24.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix mandi ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/peps.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Pasta Gigi</a></h6>
                        <h5>Rp. 13.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix mandi ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/sabun.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Sabun Batang</a></h6>
                        <h5>Rp. 3000</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->


@endsection