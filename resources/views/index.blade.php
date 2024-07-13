<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="service-section">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://plasmichealth.co.uk/image/slider/111.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://plasmichealth.co.uk/image/slider/22.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://plasmichealth.co.uk/image/slider/333.png" class="d-block w-100" alt="...">
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
      <div class="container mt-4">
        <div >

            <h1 class="text-center">Our Service</h1>
            <p class="text-left">Plasmic HealthSciences is an established supplier with over 40 years of combined knowledge and experience providing to the public and private healthcare sector.</p>
            
            <p class="text-left">Plasmic HealthSciences offer a range of products, from theatre quality surgical instruments to procedure packs and blood pressure cuffs and beyond through direct public frameworks, or private wholesale.</p>
            
            <p class="text-left">We offer a range of products for our customers to choose from and provide an unparalleled customer experience to match each and every customers needs.</p>
            
            <p class="text-left">An ISO 9001:2015 UKAS accredited supplier</p>
        </div>
        <div class="text-left">
        <p>Plasmic HealthSciences is proud to offer its products on the public frameworks below</p>
        <ul>
            <li>NHS Blood Pressure Cuffs and Support Products</li>
            <li>NHS Procedure Packs</li>
            <li>HSC Single use surgical instruments</li>
            <li>HSC Medical&sundries supplies</li>
        </ul>

        </div>

        <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img src="/images/service1.jpg" class="card-img-top" alt="Elastic Adhesive Bandages">
            <div class="card-body">
              <h5 class="card-title">Procedure packs</h5>
              <p class="card-text">Our range of easy-to-use packs to offer an efficient and careful service to the patient. Community procedure pack, wound care procedure pack, ophthalmic procedure pack, IUD delivery pack, podiatry pack              </p>
              <a href="#" class="btn btn-custom">Show Detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img src="/images/service2.jpg" class="card-img-top" alt="Surgical instruments">
            <div class="card-body">
              <h5 class="card-title">Surgical instruments</h5>
              <p class="card-text">Our instruments are manufactured by specialist craftsmen for theatre quality use, be it single use or reusable.</p>
              <a href="#" class="btn btn-custom">Show Detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img src="/images/service3.jpg" class="card-img-top" alt="Blood pressure cuffs">
            <div class="card-body">
              <h5 class="card-title">Blood pressure cuffs</h5>
              <p class="card-text">Our NIBP cuff range for effective patient monitoring and assessment, available in reusable and single use.</p>
              <a href="#" class="btn btn-custom">Show Detail</a>
            </div>
          </div>
        </div>
       
        
      </div>
        
      </div>
    </div>

@endsection
