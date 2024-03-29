<div class="container-fluid col-12 m-0 p-0">
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <a href=""><img src="https://source.unsplash.com/random/6144x2500" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50">
                    <h2 class="text-end texto-home">Exemplo de <strong style="color: #e4792a;">texto</strong></h2>
                    <h5 class="text-end texto-home">Segundo exemplo de texto!</h5>
                </div>
            </div>
        
            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://source.unsplash.com/random/6144x2500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block position-absolute top-50 end-50">
                    <h2 class="text-start texto-home">Exemplo <strong style="color: #e4792a;">de</strong> texto <strong style="color: #e4792a;">diferente</strong></h2>
                    <h5 class="text-start texto-home">Segundo exemplo de texto diferente!</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>




<script>
    const myCarouselElement = document.querySelector('#carouselExampleDark')
    const carousel = new bootstrap.Carousel(myCarouselElement, {
      interval: 2000,
      wrap: true
    })
    
    if (window.matchMedia("(max-width: 768px)").matches) {
       $('.carousel-caption').removeClass('end-50 start-50 top-50 d-none ');
       $('.carousel-caption').addClass('start-20 top-20 text-justify');
    }    
    if (window.matchMedia("(max-width: 360px)").matches) {
       $('.carousel-caption').removeClass('start-20 top-20');
       $('.carousel-caption').addClass('top-0');
       $('.carousel-caption').attr('style' , 'font-size:0.2em');
    }    
</script>
