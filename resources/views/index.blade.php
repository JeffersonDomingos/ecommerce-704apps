

<main>
<div data-bs-ride="carousel" id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner carrosel">
  <div class="carousel-item active">
            <img src="{{ asset('img/Black.png') }}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/brand1.png') }}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/brand2.png') }}" class="d-block w-100" alt="">
          </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</main>

@include('footer')
