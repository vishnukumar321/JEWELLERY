<style>
    .carousel-inner {
  height: 592px;
}

/* Tablet (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .carousel-inner {
    height: 400px; /* Adjust for tablets */
  }
  .img-slide-2{
    height: 400px;
  }
}

/* Phone (extra small devices, 600px and down) */
@media only screen and (max-width: 767px) {
  .carousel-inner {
    height: 267px; /* Adjust for phones */
  }
}
</style>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: inherit;">
      <img src="https://picsum.photos/1920/1080?random=10" class="img-slide-2 d-block w-100 h-100" alt="https://picsum.photos/1920/1080?random=10">
    </div>
    <div class="carousel-item active" style="height: inherit;">
      <img src="https://picsum.photos/1920/1080?random=11" class="img-slide-2 d-block w-100 h-100" alt="https://picsum.photos/1920/1080?random=10">
    </div>
    <div class="carousel-item active" style="height: inherit;">
      <img src="https://picsum.photos/1920/1080?random=12" class="img-slide-2 d-block w-100 h-100" alt="https://picsum.photos/1920/1080?random=10">
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