<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seoul, South Korea</title>
    <link rel="icon" href="img/exo2.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Visit South Korea</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
             
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedule">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutme">About Me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php" target="_blank">Login</a>
                </li>
                <li class="nav-item">
                    <button id="dark" class="btn btn-dark" ><i class="bi bi-moon-stars"></i></button>
                </li>
                <li class="nav-item">
                  <button id="light" class="btn btn-danger" ><i class="bi bi-brightness-alt-high"></i></button>
                </li>
                
            </ul>
          </div>
        </div>
      </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-primary-subtle text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="https://images.unsplash.com/photo-1702738951020-9976bb22c576?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" width="300">
                <div>
                    <h1 class="fw-bold display-4">Discover the best of<br>South Korea</h1>
                    <h4 class="lead display-6">A series of famous tourist destinations in South Korea that you can visit!</h4>
                    <h6>
                      <span id="tanggal"></span>
                      <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->
    <!-- article begin -->
    <!-- <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <div class="col">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1578458719181-a9e1184d810b?q=80&w=2836&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Namsan Tower</h5>
                      <p class="card-text">Namsan Tower, also known as Seoul Tower, is an iconic landmark located on Namsan Mountain in the heart of      Seoul, South Korea.
                        The tower was originally built as a broadcasting tower in 1969 but has since become a popular tourist attraction. Visitors can take a cable car or hike up to the base of the tower, where they can enjoy beautiful gardens and walking paths. The observation deck features 360-degree views, making it a favorite spot for sunset and nighttime visits. <br> 
                        Namsan Tower is also famous for its "Locks of Love" area, where couples attach padlocks to the fence as a symbol of their love. The tower is beautifully illuminated at night, adding to its romantic atmosphere.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">105 Namsangongwon-gil, Yongsan District, South Korea</small>
                    </div>
                </div>
            </div>

                <div class="col">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1710405390958-adfa87cd4515?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c3RhcmZpZWxkJTIwbGlicmFyeXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="..."> 
                    <div class="card-body">
                      <h5 class="card-title">Starfield Library</h5>
                      <p class="card-text">Starfield Library, located in the COEX Mall in Seoul, is a stunning public library known for its striking   design and extensive collection of books. It features towering bookshelves that reach up to the ceiling, creating a visually impressive space. The library offers a tranquil environment for reading and studying, with comfortable seating areas and ample natural light.
                      <br> <br>
                      In addition to its vast array of books in multiple languages, Starfield Library hosts various cultural events and exhibitions. Its modern architecture and vibrant atmosphere make it a popular destination for both locals and tourists seeking a unique place to relax and explore literature.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">513, Yeongdong-daero, Gangnam District, Seoul, South Korea</small>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card h-100">
                    <img src="https://i.pinimg.com/736x/dc/b8/48/dcb84866339baa82953febbb33e41cc2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Hangang River</h5>
                      <p class="card-text">The Han River is a major waterway that flows through Seoul, South Korea, Stretching approximately 514 kilometers (320 miles), it is not only an important natural resource but also a recreational hub for residents and visitors.
                        <br>
                        Along its banks, you'll find a network of parks, bike paths, and walking trails, making it a popular spot for outdoor activities like cycling, jogging, and picnicking. The river is lined with scenic views of the city skyline, especially at sunset. Numerous bridges cross the Han, offering picturesque views and serving as vital transportation links.
                        The river also hosts cultural events, festivals, and seasonal activities, such as water sports and river cruises, enhancing its status as a vibrant part of Seoul’s urban landscape.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">Hangang Bridge, Seoul, South Korea</small>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1726688308654-1cb02b014d12?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&  ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHNvdXRoJTIwa29yZWF8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Haeundae Beach Train</h5>
                      <p class="card-text">The Haeundae Beach Train is a charming tourist train that operates along the picturesque coastline of Busan, South Korea. This short, scenic ride connects Haeundae Beach with various attractions in the area, allowing visitors to enjoy stunning ocean views and the vibrant beach atmosphere.
                          <br>
                      The train is designed for leisure and sightseeing, making stops at popular spots such as Dongbaek Island and the Busan Aquarium. With open-air carriages, passengers can soak in the sights and sounds of the beach, making it a favorite activity for families and tourists. The Haeundae Beach Train enhances the experience of exploring this iconic beach destination, offering a fun and unique way to travel along the coast.</p>
                    </div>
                      <div class="card-footer">
                        <small class="text-body-secondary">753-1 Songjeong-dong, Haeundae-gu, Busan, South Korea</small>
                      </div>
                  </div>
                </div>

                  <div class="col">
                    <div class="card h-100">
                      <img src="https://i.pinimg.com/564x/a3/c5/34/a3c5343c52972af2a0422ba77d8432ce.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nami Island</h5>
                        <p class="card-text">Nami Island, located just outside of Seoul, South Korea, is a picturesque, crescent-shaped island renowned for its stunning natural beauty and tranquil atmosphere. Famous for its tree-lined avenues, particularly the iconic Metasequoia Lane, the island is a popular destination for visitors year-round, showcasing vibrant foliage in autumn and lush greenery in summer.
                          <br>
                          Accessible by a short ferry ride or zip line, Nami Island offers a range of activities, including biking, walking paths, and cultural events. It also features art installations and galleries, as well as restaurants and cafes serving local cuisine. The island gained international fame as a filming location for the popular Korean drama "Winter Sonata," adding to its allure as a romantic getaway and nature retreat.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-body-secondary">1 Namiseom-gil, Namsan-myeon, Gangwon-do, South Korea</small>
                      </div>
                    </div>
                  </div>
        </div>
    </section> 
    -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- article end -->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-primary-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/a6/82/37/caption.jpg?w=700&h=-1&s=1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.unsplash.com/photo-1546417404-73e80b4a749b?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fGtvcmVhJTIwc2VsYXRhbnxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.unsplash.com/photo-1695911884603-ad442444f9d9?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.unsplash.com/photo-1634719887228-9936cb61cba4?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.unsplash.com/photo-1610870596605-d293eaf5a1ad?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
    </section>
    <!-- gallery end -->
     <!--Schedule-->
     <section id="schedule" class="text-center p-5">
        <div class="container">
            
            <h1 class="fw-bold display-4 pb-3">Schedule</h1>
          <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <div class="col">
            <div class="card border-dark mb-3  " style="max-width: 18rem;">
                <div class="card-header bg-danger">SENIN</div>
                <div class="card-body text-dark">
                 
                  <p class="card-text">Rekayasa Perangkat Lunak <br> 07.00-09.30 | H.5.6</p>
                  <hr>
                  <p class="card-text">Logika Informatika <br> 10.20-12.00 | H.4.10</p>
                  
                </div>
              </div>
              </div>
            
              <div class="col">
              <div class="card border-dark mb-3  md-col 4" style="max-width: 18rem;">
                <div class="card-header bg-danger">SELASA</div>
                <div class="card-body text-dark">
                 
                  <p class="card-text">Probabilitas dan Statistik <br> 07.00-09.30 | H.3.8</p>
                  <hr>
                  <p class="card-text">Pendidikan Kewarganegaraan <br> 10.20-12.00 | Aula H.7</p>
                  <hr>
                  <p class="card-text">Basis Data <br> 12.30-14.10 | D.3.M</p>
                </div>
              </div>
              </div>

              <div>
              <div class="card border-dark mb-3  " style="max-width: 18rem;">
                <div class="card-header bg-danger">RABU</div>
                <div class="card-body text-dark">
                    <p class="card-text"> Pemograman Berbasis Web <br> 07.00-08.40 | D.2.J</p>
                    <hr>
                    <p class="card-text">Sistem Informasi <br> 09.30-12.00 | H.5.13</p>
                </div>
              </div>
              </div>

            <div class="col">
              <div class="card border-dark mb-3  " style="max-width: 18rem;">
                <div class="card-header bg-danger">KAMIS</div>
                <div class="card-body text-dark">
                  <p class="card-text">Basis Data <br> 07.00-08.40 | H.5.1</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card border-dark mb-3  " style="max-width: 18rem;">
                <div class="card-header bg-danger ">JUM'AT</div>
                <div class="card-body text-dark">
                  <p class="card-text">Sistem Operasi <br> 07.00-09.30 | H.4.10</p>
                </div>
              </div>
              </div>

              <div class="col">
              <div class="card border-dark mb-3 md-col 4" style="max-width: 18rem;">
                <div class="card-header bg-danger text-dark">SABTU</div>
                <div class="card-body">
                  <p class="card-text">FREE!!</p>
                </div>
              </div>
              </div>
            </div>
        </div>
     </section>
     <!--Schedule end-->
    <!--About me-->
            <section id="aboutme" class="text-center p-5 bg-primary-subtle text-sm-start">
                <div class="container">
                    <div class="d-sm-flex flex-sm-row align-items-center justify-content-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzsc3jr90PtHXGTmVDY3xKr4Y8QMZesYuSKg&s" class="rounded-circle p-2" width="300">
                        <div>
                            <p class="">A11.2023.15202</p>
                            <h1 class=" fw-bold display-6">Hani Nafilah</h1>
                            <p>Pogram Studi Teknik Informatika</p>
                           <h6><a href="https://dinus.ac.id/" class="link-dark">Universitas Dian Nuswantoro</a></h6> 
                        </div>
                    </div>
                </div>
            </section>
      
    <!--end-->
    <!-- footer begin -->
     <footer class="text-center p-5">
      <div>
       <a href="https://www.instagram.com/visitseoul_official"><i class="bi bi-instagram h2 p-2 text-dark"></i></a> 
        <a href="https://x.com/visitseoul"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/+6281277695932"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <br>
      <div>
          Hani Nafilah &copy; 2024
      </div>
     </footer>
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--Javascript-->
    <script type="text/javascript">
      window.setTimeout("tampilWaktu()", 1000);

      function tampilWaktu(){
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =  waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
      }

        document.getElementById("dark").onclick = function() {
          document.body.style.backgroundColor = "black";
          document.body.style.color = "white";
          document.getElementById("hero").classList.remove("bg-primary-subtle");
          document.getElementById("hero").classList.add("bg-secondary-subtle");
          document.getElementById("gallery").classList.remove("bg-primary-subtle");
          document.getElementById("gallery").classList.add("bg-secondary-subtle");
          document.getElementById("hero").classList.remove("text-white");
          document.getElementById("hero").classList.add("text-danger-emphasis");
          document.getElementById("gallery").classList.remove("text-white");
          document.getElementById("gallery").classList.add("text-danger-emphasis");
        }
        document.getElementById("light").onclick = function() {
          document.body.style.backgroundColor = "white";
          document.body.style.color = "black";
          document.getElementById("hero").classList.remove("bg-secondary-subtle");
          document.getElementById("hero").classList.add("bg-primary-subtle");
          document.getElementById("gallery").classList.remove("bg-secondary-subtle");
          document.getElementById("gallery").classList.add("bg-primary-subtle");
          document.getElementById("hero").classList.remove("text-danger-emphasis");
          document.getElementById("hero").classList.add("text-dark");
          document.getElementById("gallery").classList.remove("text-danger-emphasis");
          document.getElementById("gallery").classList.add("text-dark");
        } 
       
        
    </script>
  </body>
</html>
