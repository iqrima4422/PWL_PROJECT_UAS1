     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
             </li>
             <li class="nav-item d-none d-sm-inline-block">
                 <a href="{{ route('HomePage') }} " class="nav-link {{ ($tittle === "Home Page") ? 'active' : ''}}" class="nav-link">Home</a>
             </li>


             <li class="nav-item d-none d-sm-inline-block">
                 <a href="{{ route('ContactPage') }} " class="nav-link {{ ($tittle === "Contact Page") ? 'active' : ''}}" class="nav-link">Contact</a>
             </li>
         </ul>

         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">


             <!-- Notifications Dropdown Menu -->
             <div class="dropdown">
                 <button type="button" class="btn btn-info" data-toggle="dropdown">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) + count((array) session('cartdiskon'))}}</span>
                 </button>
                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <div class="row total-header-section">
                         <div class="col-lg-6 col-sm-6 col-6">
                             <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) + count((array) session('cartdiskon'))}}</span>
                         </div>
                         @php $total1 = 0 @endphp
                         @foreach((array) session('cart') as $id => $details)
                         @php $total1 += $details['harga'] * $details['quantity'] @endphp
                         @endforeach

                         <!-- carddiskon -->
                         @php $total2 = 0 @endphp
                         @foreach((array) session('cartdiskon') as $id => $details)
                         @php $total2 += $details['harga'] * $details['quantity'] @endphp
                         @endforeach

                         <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                             <p>Total: <span class="text-info">Rp. {{ $total1 + $total2 }}</span></p>
                         </div>
                     </div>
                     @if(session('cart'))
                     @foreach(session('cart') as $id => $details)
                     <div class="row cart-detail">
                         <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                             <img src="{{'storage/'. $details['gambar'] }}" />
                         </div>
                         <div class="col-lg-6 col-sm-6 col-6 cart-detail-product">
                             <p>{{ $details['product'] }}</p>
                             <span class="price text-info"> ${{ $details['harga'] }}</span> <br>
                             <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                         </div>
                     </div>
                     @endforeach
                     @endif


                     @if(session('cartdiskon'))
                     @foreach(session('cartdiskon') as $id => $details)
                     <div class="row cart-detail">
                         <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                             <img src="{{'storage/'. $details['gambar'] }}" />
                         </div>
                         <div class="col-lg-6 col-sm-6 col-6 cart-detail-product">
                             <p>{{ $details['product'] }}</p>
                             <span class="price text-info"> ${{ $details['harga'] }}</span> <br>
                             <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                         </div>
                     </div>
                     @endforeach
                     @endif


                     <div class="row">
                         <!-- <div class="text-center checkout"> -->
                         <a href="{{ route('Cart') }}" class="btn btn-primary btn-block">Tampilkan semua</a>
                         <!-- </div> -->
                     </div>
                 </div>
             </div>

             <li class="nav-item">
                 <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                     <i class="fas fa-expand-arrows-alt"></i>
                 </a>
             </li>
             <!-- <li class="nav-item">
                 <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                     <i class="fas fa-th-large"></i>
                 </a>
             </li> -->
         </ul>

     </nav>