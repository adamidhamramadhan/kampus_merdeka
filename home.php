<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .carousel{
            overflow: hidden;
            width: fit-content;
            height: 250px;
            }
            .carousel img{
                width: 100%;
            }
            .navbar{
                margin-bottom: 20px;
            }
            #footer{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <!--Baris pertama-->
            <div class="row">
                <div class="col-md-12">
                    <!--Awal carausel-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="https://www.youandthemat.com/wp-content/uploads/nature-2-26-17.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/04/02/653168/d96732a02b79db3219d7899129bd0081.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://wallpaperforu.com/wp-content/uploads/2020/08/nature-wallpaper-200816160747382048x1152.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <!--Akhir carausel-->
                </div>
            </div>
            <!--Baris kedua-->
            <div class="row">
                <div class="col-md-12">
                    <!--Awal Navbar-->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Adam Idham Ramadhan</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Profil</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="https://adamidhamramadhan.github.io/" target="_blank">Portofolio</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Kontak</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    <!--Akhir Navbar-->
                </div>
            </div>
            <!--Baris ketiga-->
            <div class="row">
              <!--Left Bar-->
                <div class="col-md-2">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                      Pemrograman
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">PHP</a>
                    <a href="#" class="list-group-item list-group-item-action">Javascript</a>
                    <a href="#" class="list-group-item list-group-item-action">Python</a>
                    <a class="list-group-item list-group-item-action disabled">Java</a>
                  </div>
                </div>
                <!--Content-->
                <div class="col-md-7">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Accordion</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Table</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">card</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Profile Saya
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <table width="70%">
                                  <tr>
                                    <td>Nama</td>
                                    <td>ADAM IDHAM RAMADHAN</td>
                                  </tr>
                                  <tr>
                                    <td>NPM</td>
                                    <td>G1A019023</td>
                                  </tr>
                                  <tr>
                                    <td>Universitas</td>
                                    <td>Universitas Bengkulu</td>
                                  </tr>
                                  <tr>
                                    <td>Jurusan</td>
                                    <td>Informatika</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tentang Saya
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>Perkenalkan Nama Saya Adam Idham Ramadhan, Mahasiswa Jurusan Informatika angkatan 2019 di Universitas Bengkulu. Saya menyukai hal-hal mengenai coding sejak saya SD. Saya memiliki skill pada Web developer. yaitu Full Stack Web Developer. Skill saya antara lain : HTML, CSS, Javascript, PHP, Git, MySQL dan Laravel</strong>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Kontak Saya
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <table width="70%">
                                  <tr>
                                    <td>Wa</td>
                                    <td>085382564438</td>
                                  </tr>
                                  <tr>
                                    <td>Email</td>
                                    <td>adamramadhan791@gmail.com</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">NO</th>
                              <th scope="col">Jenjang Pendidikan</th>
                              <th scope="col">Nama Instansi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>SD</td>
                              <td>SDN 69 Kota Bengkulu</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>SMP</td>
                              <td>SMPN 01 Kota Bengkulu</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>SMA</td>
                              <td>SMAN 05 Kota Bengkulu</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>S1</td>
                              <td>Universitas Bengkulu</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="card mx-auto" style="width: 18rem;">
                          <img src="https://j.top4top.io/p_2231ijfnt1.jpeg" alt="Foto Saya" class="card-img-top" align="left" border="2" width="5%" hspace="15">
                          <div class="card-body mx-auto" >
                            <h5 class="card-title">Foto Saya</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!--Right Bar-->
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/UNIQLO_logo.svg/1200px-UNIQLO_logo.svg.png" class="card-img-top" alt="...">
                    <div class="card-body mx-auto" >
                      <h5 class="card-title">uniqlo</h5>
                      <a href="https://id.hm.com/" target="_blank" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
            </div>
            <!--Baris keempat-->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert" id="footer">
                        <center>Design By Adam@2022 Kampus Merdeka</center>
                      </div>
                </div>
            </div> 
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>