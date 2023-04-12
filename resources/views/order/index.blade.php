<html>
  <head>
    <title>SunMovie | Better Movie Better Life</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    @vite('resources/css/app.css')
  </head>
    
        <!-- Header Section -->
          @include('header')
          <div class="p-4 ordersmovie" style="min-height: 100vh">
        <div class="order row py-3 px-1 rounded">
            <div class="col-lg-8">
                <form action="/pay" method="POST" id="form-bayar">
                    @csrf
                    <div class="input-group mb-3">
                        <label for="type" class="input-group-prepend">
                          <span class="input-group-text rounded-0" id="basic-addon1"><i class="bi bi-columns-gap"></i></span>
                        </label>
                        <select id="type" name="type" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Type</option>
                            <option>Bandung</option>
                            <option>Jakarta</option>
                            <option>Surabaya</option>
                            <option>Pekanbaru</option>
                            <option>Medan</option>
                            <option>Malang</option>
                            
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="theater" class="input-group-prepend">
                          <span class="input-group-text rounded-0" id="basic-addon1"><i class="bi bi-person-workspace"></i></span>
                        </label>
                        <select id="theater" name="theater" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Theaters</option>
                            <option>XXI</option>
                            <option>CGV</option>
                            <option>Cinepolis</option>
                        </select>
                    </div>
                    <hr>
                    <div class="input-group mb-3 position-relative" style="z-index: 100">
                        <label for="movie" class="input-group-prepend">
                          <span class="input-group-text rounded-0" id="basic-addon1"><i class="bi bi-film"></i></span>
                        </label>
                        <input type="search" id="movie" class="form-control" hint="off"  autocomplete="off" name="movie"  placeholder="Cari film.." required />
                        <div class="dropdown mt-2 invisible w-100">
                            <ul id="list-movie" class="p-2 w-100 bg-white rounded text-black list-unstyled position-absolute">
                            </ul>
                        </div>
                    </div>
                    <div id="schedules" class="row">
                        <div id="jadwal" class="col-lg-3 mt-2 col-6 position-relative">
                            <div class="row">
                                <div class="col-2">
                                    <span class="rounded"><i class="bi bi-calendar-event"></i></span>
                                </div>
                                <div class="col position-absolute text-date" style="left: 29px">
                                    <p>00-00</p>
                                </div>
                            </div>
                            
                            
                            <div class="dropdwn-sc invisible position-absolute top-0">
                                <ul id="list-date" class="position-absolute rounded">
                                    <li class='list-item-sc'>00-00</li>
                                </ul>
                            </div>
                        </div>
                        <div id="time-sl" class="col-lg-3 mt-2 col-6 position-relative">
                            <div class="row">
                                <div class="col-2"><span class="rounded"><i class="bi bi-alarm"></i></span></div>
                                <div class="col">
                                    <select id="time" style="padding: 2px 4px;" name="time" class="form-select" autocomplete="off" aria-label="Default select example">
                                        <option selected>12:30</option>
                                        <option>13:00</option>
                                        <option>15:40</option>
                                        <option>16:10</option>
                                        <option>16:40</option>
                                        <option>19:10</option>
                                        <option>20:20</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mt-2 col-6">
                            <div class="row">
                                <div class="col-2">
                                    <span class="rounded"><i class="bi bi-grid"></i></span>
                                </div>
                                <div id="seat" class="col">
                                    <input type='text' class='text-white seat-i' name='seat[]' style='width: 30px; background-color:transparent; border: none;' value='A0' readonly='readonly'>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 mt-2 col-6">
                            <div class="row">
                                <div class="col-2">
                                    <span class="rounded"><i class="bi bi-cash-coin"></i></span>
                                </div>
                                <div id="price" class="col">
                                    <p>00.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input id="date" name="date" type="hidden" value="" required>
                    <input id="price" name="price" type="hidden" value="" required>
                    <input type="hidden" name="total_price" value="" required>
                    <input type="hidden" name="id_movie" value="" required>

                    <hr>
                    <div id="jumlah" class="row">
                        
                        <div class="col-6 col-lg-3 mb-3 tiket">
                            <p class="fs-5">Jumlah tiket</p>
                            <span id="kurang" class="rounded">
                                <i class="bi bi-dash-circle"></i>
                            </span>
                            <input type="text" id="jml_tiket" autocomplete="off" name="jml_tiket" style="width: 50px; text-align: center;" class="mx-3" value="0" readonly="readonly">
                            <span id="tambah" class="rounded">
                                <i class="bi bi-plus-circle"></i>
                            </span>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="show-seat">
                                <div class="row">
                                    <div class="col-12 col-lg-3 mt-2">
                                        @php
                                            $ABC = ['A', 'B', 'C', 'D', 'E', 'F'];
                                        @endphp
                                        @for ($i = 0; $i < count($ABC); $i++)
                                           @for ($j = 1; $j <= 4; $j++)
                                                <span>{{$ABC[$i]}}{{$j}}</span>
                                           @endfor
                                        @endfor
                                    </div>
                                    <div class="col-12 col-lg-5 mt-2">
                                        @for ($i = 0; $i < count($ABC); $i++)
                                           @for ($j = 5; $j < 12; $j++)
                                                <span>{{$ABC[$i]}}{{$j}}</span>
                                           @endfor
                                        @endfor
                                    </div>
                                    <div class="col-12 col-lg-3 mt-2">
                                        @for ($i = 0; $i < count($ABC); $i++)
                                           @for ($j = 12; $j < 16; $j++)
                                                <span>{{$ABC[$i]}}{{$j}}</span>
                                           @endfor
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="submitform" class="btn btn-dark invisible" type="submit">submit</button>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="total">
                    <h4>Tambah Tiket</h4>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tiket-movie" value="" id="tiket-movie" checked>
                                <label class="form-check-label" style="font-size: 0.9rem"  for="tiket-movie">
                                  <span class="label-tiket">Title</span> | <span class="jml-tiket">0</span>
                                </label>
                            </div>
                        </div>
                        <div class="col price-t">
                            <p>00.00</p>
                        </div>
                    </div>
                    <hr class="my-1">
                    <div class="row">
                        <p style="color: rgb(228, 220, 220)" >Pajak dan Biaya Tambahan</p>
                        <div class="col-9">
                            <p>PPN 11%</p>
                        </div>
                        <div class="col">
                            <p class="ppn">00.00</p>
                        </div>
                    </div>
                    <hr style="margin: 0">
                    <div class="row mt-2">
                        <div class="col-9">
                            <p>Total</p>
                        </div>
                        <div class="col">
                            <p class="price-total">00.00</p>
                        </div>
                    </div>

                </div>
                <div class="col-12" style="display: grid">
                    <button id="btn-bayar" type="button" class="btn btn-secondary w-100 rounded mx-auto">Lanjutkan</button>
                </div>
                <div class="my-5"></div>
                <div data-v-cbcc5384="" style="" class="col-12">
                    <p data-v-cbcc5384="">Transaksi makin mudah dengan metode pembayaran terlengkap!</p> 
                    <div data-v-cbcc5384="" class="summary-cart metode mt-3">
                        <div data-v-cbcc5384="" class="d-flex mb-3">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/bca.svg" alt="bca" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/mandiri.svg" alt="mandiri" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/bri.svg" alt="bri" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/bni.svg" alt="bni" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/qris.svg" alt="qris" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/gopay.svg" alt="gopay" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/ovo.svg" alt="ovo" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/linkaja.svg" alt="linkaja" class="lazyload m-auto" width="36" height="16">
                        </div> 
                        <div data-v-cbcc5384="" class="d-flex">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/dana.svg" alt="dana" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/shopeepay.svg" alt="shopeepay" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/indomaret.svg" alt="indomaret" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/alfamart.svg" alt="alfamart" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/visa.svg" alt="visa" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/master-card.svg" alt="master-card" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/jcb.svg" alt="jcb" class="lazyload m-auto" width="36" height="16">
                            <img data-v-cbcc5384="" src="https://niagaspace.sgp1.digitaloceanspaces.com/www/assets/images/2022/orderflow/icons/paypal.svg" alt="paypal" class="lazyload m-auto" width="36" height="16">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </body>
</html>