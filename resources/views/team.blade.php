<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Software GG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet" />

      <style>


          .background{
            background-image:url("assets/img/log.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            /* background-position:center; */
            height: 1000px;
            background-size: 2000px 800px;
          }
          .content{
            color:rgb(223, 213, 213)(255, 255, 255);
            text-align: center;
            padding:300px 0;
            /* text-shadow: 2px 2px 2px rgb(255, 252, 252); */
          }
          h1{
              line-height: 50px;
            font-size:70px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
          }
          h2{
              line-height: 80px;
            font-size:50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif

          }


       </style>

  </head>

  <body id="page-top">
      @csrf
          {{-- @if (Auth::user()->role == 'pengguna') --}}
                        <!-- Navigation-->
                        <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
                            <div class="container">
                                <a class="navbar-brand text-white" href="#page-top">PT.Cahaya Galunggung</a>
                                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                    Menu
                                    <i class="fas fa-bars ms-1"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                                        <li class="nav-item"><a class="nav-link" href="#services">category</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">Project</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">kritik dan saran</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!--background-->
                                <div class="background">
                                    <div class="content">
                                    {{-- <h1>Selamat Datang</h1>
                                    <p>Di Websiteku<p> --}}
                                        <div class="container">
                                            <div class="masthead-subheading text-white"><h2>Welcome to</h2> </div>
                                                <div class="masthead-subheading text-white"><h1>Company profile </div>
                                        </div>
                                </div>
                        <!--akhir background-->

                <!-- Services-->

                <section class="page-section" id="services">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">category</h2>
                            <h3 class="section-subheading text-muted">Kami siap melayani pembuatan aplikasi dan juga web untuk mobile dan dekstop</h3>
                        </div>
                        <div class="row text-center">
                                <div class="col-md-6">
                                    <span class="fa-stack fa-4x">
                                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-mobile-phone fa-stack-1x fa-inverse" style="font-size:48px"></i>
                                        {{-- <i class="bi bi-phone" fa-stack-1x fa-inverse"></i> --}}
                                    </span>
                                    <h4 class="my-3">App Mobile</h4>
                                    {{-- <p class="text-muted">Kami melayani pembuatan aplikasi atau website untuk mobile</p> --}}
                                </div>
                            <div class="col-md-6">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3">Dekstop</h4>
                                {{-- <p class="text-muted">Selain aplikasi mobile disini juga tersedia untuk dekstop</p> --}}
                            </div>

                        </div>
                    </div>
                </section>

                <!-- Portfolio Grid-->
                <section class="page-section bg-light" id="portfolio">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">project</h2>
                            {{-- <h3 class="section-subheading text-muted">pt.cahaya galuggung</h3> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/modal/sales.jpg" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">Point of sales</div>
                                        {{-- <div class="portfolio-caption-subheading text-muted">Illustration</div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 2-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/modal/sistem.jpg" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">System sekolah</div>
                                        {{-- <div class="portfolio-caption-subheading text-muted">Graphic Design</div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 3-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/modal/order.jpg" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">Sales Order</div>
                                        {{-- <div class="portfolio-caption-subheading text-muted">Identity</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About-->
                <section class="page-section" id="about">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">About Company </h2>
                            <h3 class="section-subheading text-muted"> Software GG by Cahaya Galunggung adalah perusahaan yang bergerak dibidang IT untuk memberikan produk-produk IT berkualitas handal, tidak kalah dengan produk IT internasional.


                                Produk IT yang dibuat berdasarkan kebutuhan-kebutuhan client dengan memberikan solusi-solusi yang diperlukan. Solusi ini didukung oleh berbagai disiplin ilmu dan teknologi yang terkini.

                                Tasikmalaya </h3>
                        </div>
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pt.jpg" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>NAMA PERUSAHAAN</h4>
                                        <h4 class="subheading"></h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">PT.CAHAYA GALUNGGUNG</p></div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/tahun.png" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>TAHUN BERDIRI</h4>
                                        {{-- <h4 class="subheading">An Agency is Born</h4> --}}
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">perusahaan ini berdiri pada tahun 1998 namun saat itu belum resmi, pada tahun 2011 nama pt cahaya galunggung telah di resmikan oleh pihak perusahaan.</p></div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/circle.png" " alt="" /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>BIDANG USAHA</h4>
                                        {{-- <h4 class="subheading">Transition to Full Service</h4> --}}
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">Perusahaan ini bergerak di bidang pendidikan dan juga di bidang informatika.</p></div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/visi.png" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>VISI MISI</h4>
                                        {{-- <h4 class="subheading">Phase Two Expansion</h4> --}}
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">Ingin mencetak karyawan yang beriman</p></div>
                                </div>
                            </li>
                            <li><div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/social.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">SOCIAL MEDIA</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted"></p>
                                <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=08121427366&text=%22halloo%22" aria-label="Parveen Anand Whatsapp Profile"><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/abunuralif1?mibextid=ZbWKwL" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/software_aplikasi_android?igshid=NjIwNzIyMDk2Mg==" aria-label="Parveen Anand Instagram Profile"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://youtube.com/@softwaregg8872" aria-label="Parveen Anand Youtube Profile"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                           </li>
                        </ul>
                    </div>
                </section>
                <!-- team -->
                        <!-- tableteam-->
                        <section class="page-section" id="team">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="form-container">
                                        <h2> team members table</h2>
                                      <a href="{{ url('team/add') }}"><button class="btn btn-primary">Tambah Data</button></a>
                                     <table class="table align-middle mb-0 bg-white"  style="margin-left:auto;margin-right:auto">
                                          <thead class="bg-light">
                                              <tr>
                                                  <th>#</th>
                                                  <th>image</th>
                                                  <th>Name</th>
                                                  <th>Title</th>
                                                  <th>Actions</th>
                                              </tr>
                                           </thead>
                                            <tbody>
                                              @foreach ($team as $key => $item)
                                                  <tr>
                                                      <td>{{ $loop->iteration}}</td>
                                                      <td>
                                                            <div class="d-flex align-items-center">
                                                              <img
                                                                  src="assets/img/team/us.png"
                                                                  alt=""
                                                                  style="width: 45px; height: 45px"
                                                                   class="rounded-circle"
                                                                />
                                                                 <div class="ms-3">
                                                                    <p class="fw-bold mb-1"><td>{{$item->nama}}</td></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                      <td>
                                                          <p class="fw-normal mb-1">{{$item->jabatan}}</p>
                                                               {{-- <p class="text-muted mb-0">IT department</p> --}}
                                                       </td>
                                                       <td>
                                                          <a href="team/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
                                                          <a href="team/edit/{{$item->id}}" class="btn btn-info btn-sm">edit</a>
                                                       </td>
                                                  </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                     <div class="">
                                        <br>    <a href="halamanAdmin"><< back</a>
                                     </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </section>
                <!-- akhir team -->
                <!-- Contact-->

                <section class="page-section" id="contact">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">Kritik dan Saran</h2>
                            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
                        </div>

                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="row align-items-stretch mb-5">
                                <div class="col-md-6">
                                    <form action="{{ url('ks/create') }}" method="post" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <!-- Name input-->
                                        <input class="form-control" name="nama" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Email address input-->
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <!-- Phone number input-->
                                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                   </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-textarea mb-md-0">
                                        <!-- Message input-->
                                        <textarea class="form-control" name="pesan" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <div class="pt-3 ">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                            <div class="pt-3">
                                <a href="ks" type="btn btn-primary">Show</a>
                            </div>
                            {{-- <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div> --}}
                        </form>
                    </div>
                </section>

                <!-- Portfolio Modals-->
                <!-- Portfolio item 1 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Point of Sales</h2>
                                            <p class="item-intro text-muted">PT.CahayaGalunggung</p>
                                            <img class="img-fluid d-block mx-auto" src="assets/img/modal/sales.jpg" alt="..." />
                                            <p>Point of Sales adalah salah satu software yang mendukung kasir penjualan, pembelian, hingga inventory barang</p>

                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 2 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">School system:</h2>
                                            <p class="item-intro text-muted">PT.CahayaGalunggung</p>
                                            <img class="img-fluid d-block mx-auto" src="assets/img/modal/sistem.jpg" alt="..." />
                                            <p> School system adalah salah satu Software administrasi sekolah berbasis desktop bertujuan mengolah data siswa, kelas, guru, kehadiran, nilai, mutasi dan keuangan sekolah.</p>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 3 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Sales Order</h2>
                                            <p class="item-intro text-muted">PT.CahayaGalunggung</p>
                                            <img class="img-fluid d-block mx-auto" src="assets/img/modal/order.jpg" alt="..." />
                                            <p> sales order Merupakan aplikasi yang digunakan sales untuk memesan barang yang di pesan customer. Terdiri dari dua mode yakni online dan offline. Fitur offline digunakan sebagai alternatif bila sales sedang berada pada wilayah yang bermasalah dengan sinyal. Selain itu dibekali pula dengan berbagai settingan seperti pembatasan faktur, peringatan piutang, serta setting harga wilayah dan masing-masing customer</p>

                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


          {{-- @endif --}}


           {{-- @if (Auth::user()->role == 'marketing')
          <li class="list-group-item">Menu Marketing</li>


          @endif
          @if (Auth::user()->role == 'keuangan')
          <li class="list-group-item">Menu keuangan</li>


          @endif --}}


            <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
  </body>
</html>

