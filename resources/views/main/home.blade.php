@extends('layout.layouts')

@section('title')
Agrtravis - Construction Et Amenagement 
@endsection

@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero">

<div class="info d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h2 data-aos="fade-down">Bienvenue au <span>Agrtravis</span></h2>
        <p data-aos="fade-up">pour une meilleure construction et aménagement agrtravis est la meilleure solution dans le domaine.</p>
        <a data-aos="fade-up" data-aos-delay="100" href="#services" class="btn-get-started">Commencer</a>
      </div>
    </div>
  </div>
</div>

<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

  <div class="carousel-item active" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-1.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-2.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-3.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-4.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-5.jpg')"></div>

  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

</div>

</section><!-- End Hero Section -->

<main id="main">




<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Services</h2>
      <p>Présentation des Services de l'entreprise Agrtravis</p>
    </div>

    <div class="row gy-4">
<div class="col-xl-12">
  <h2 class="text-center">Construction</h2>
  <div class="d-flex justify-content-evenly align-items-center flex-wrap">
    <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative rounded-3">
          <div class="  mx-auto">
            <img src="/storage/assets/img/services/image003.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Terrassement</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image007.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>les Fondations</h3>
          <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative rounded-3">
          <div class="mx-auto">
            <img src="/storage/assets/img/services/image009.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Dallages et Poteaux</h3>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image015.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Mur De Cloture et Cage d'escalier et Picsine </h3>
          <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
  </div>
   
</div>
     
<div class="col-xl-12">
  <h2 class="text-center">Amenagement</h2>
<div class="d-flex justify-content-evenly align-items-center flex-wrap">
<div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative rounded-3">
          <div class="mx-auto">
            <img src="/storage/assets/img/services/image021.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Carllage Et Marbre </h3>
          <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image024.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Plattre</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image030.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Peinture</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image032.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Menuiserie bois</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image036.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Menuiserie alluminuim</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image040.png" style="width:280px; height:150px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Sanitaire</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3 " data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative rounded-3">
          <div class=" mx-auto">
            <img src="/storage/assets/img/services/image044.png" style="width:240px; height:160px;box-shadow: 3px 3px rgb(57, 229, 241), -1em 0 .4em rgb(225, 235, 136);" loading="lazy" alt="..." >
          </div>
          <h3>Entretien et réparation </h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
</div>
  
</div>
      

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
      <div class="col-lg-6 img-bg" style="background-image: url('/storage/assets/img/alt-services.jpg');" data-aos="zoom-in" data-aos-delay="100"></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Agrtravis - Construction Et Amenagement </h3>
        <p>Agratravis Entreprise de Construction Et Amenagement En Forme Juridique <b>SARL</b> crée en Febrayer 2022 <br> a Capitale <b>500 000 DH</b> </p>

        <div class="icon-box d-flex justify-content-between align-items-center position-relative px-3 fade-in" data-aos="fade-up" data-aos-delay="100">
          
          <div class="ms-1">
            <span class="material-symbols-outlined">
            home
            </span>
            <h4><a href="" class="stretched-link">Adresse</a></h4>
            <p>AVENUE ABDELKRIM EL KHATTABI IMMEUBLE BEN MOUSSA EL GOUACHE ETAGE 2 </p>
          </div>
          <div class="ms-3">
            <h4><a href="" class="stretched-link">N° de taxe professionnelle</a></h4>
            <p>13602493</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex justify-content-between align-items-center position-relative  px-3 fade-in" data-aos="fade-up" data-aos-delay="200">
         
          <div class="ms-1">
            <span class="material-symbols-outlined">
              call
              </span>
            <h4><a href="" class="stretched-link">Téléphone</a></h4>
            <p>0661577372</p>
          </div>
          <div class="ms-3 " >
            <h4><a href="" class="stretched-link">ICE</a></h4>
            <p>3006598000087</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex justify-content-between align-items-center position-relative  px-3 fade-in" data-aos="fade-up" data-aos-delay="300">
          
          <div class="ms-1">
            <span class="material-symbols-outlined">
            group
            </span>
            <h4><a href="" class="stretched-link">Effectif de l’entreprise</a></h4>
            <p>12</p>
          </div>
          <div class="ms-3">
            <h4><a href="" class="stretched-link">N° Identification fiscal</a></h4>
            <p>51809307</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex justify-content-between align-items-center position-relative  px-3 fade-in" data-aos="fade-up" data-aos-delay="400">
          
          <div class="ms-1">
            <span class="material-symbols-outlined">
            location_on
            </span>
            <h4><a href="" class="stretched-link">Ville</a></h4>
            <p>Fes</p>
          </div>
          <div  class="ms-3">
            <h4><a href="" class="stretched-link">N° D'affiliation à la CNSS</a></h4>
            <p>4055301</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>
</section><!-- End Alt Services Section -->


<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Nos Projets</h2>
      <p>Les Projets qui nous avons fait :</p>
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

      <ul class="portfolio-flters fade-in" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Tous</li>
       
        <li data-filter=".filter-construction">Construction</li>
        
        <li data-filter=".filter-design">Aménagement</li>
      </ul><!-- End Projects Filters -->

      <div class="row gy-4 portfolio-container fade-in" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image001.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction</h4>
              <p>Terrassement</p>
              <a href="/storage/assets/img/services/image001.png" title="Terrassement" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image005.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction</h4>
              <p>les Fondations</p>
              <a href="/storage/assets/img/services/image005.png" title="les Fondations" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image007.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction</h4>
              <p>Dallages et Poteaux</p>
              <a href="/storage/assets/img/services/image007.png" title="Dallages et Poteaux" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image016.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction</h4>
              <p>Mur De Cloture et Cage d'escalier et Picsine</p>
              <a href="/storage/assets/img/services/image016.png" title="Mur De Cloture et Cage d'escalier et Picsine" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image021.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Aménagement</h4>
              <p>Carllage Et Marbre</p>
              <a href="/storage/assets/img/services/image021.png" title="Carllage Et Marbre" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image024.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Aménagement</h4>
              <p>Plattre</p>
              <a href="/storage/assets/img/services/image024.png" title="Plattre" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image028.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Aménagement</h4>
              <p>Peinture</p>
              <a href="/storage/assets/img/services/image028.png" title="Peinture" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image032.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Aménagement</h4>
              <p>Menuiserie bois</p>
              <a href="/storage/assets/img/services/image032.png" title="Menuiserie bois" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image036.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Aménagement</h4>
              <p>Menuiserie alluminuim</p>
              <a href="/storage/assets/img/services/image036.png" title="Menuiserie alluminuim" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image040.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Aménagement</h4>
              <p>Sanitaire</p>
              <a href="/storage/assets/img/services/image040.png" title="Sanitaire" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/services/image044.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Aménagement</h4>
              <p>Entretien et réparation</p>
              <a href="/storage/assets/img/services/image044.png" title="Entretien et réparation" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

      

      </div><!-- End Projects Container -->

    </div>

  </div>
</section><!-- End Our Projects Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Effectif de l'entreprise</h2>
      <p>Informations court sur les tout employés d'entreprise</p>
    </div>

    <div class="slides-2 swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>Rachid</h3>
              <h4>l'Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
####################                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>#######</h3>
              <h4>#######</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
####################                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>######## </h3>
              <h4>########</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
#####################                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>#######</h3>
              <h4>#######</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>

$$$$$$$$$$$$$$$$$$$$$$$$$                
<i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

      

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->



</main><!-- End #main -->
@endsection

