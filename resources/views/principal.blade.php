@extends('plantilla')

@section('relleno')
<div id="carouselExampleCaptions" class="carousel slide car" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active img">
        <a href="https://www.msn.com/es-mx/noticias/mexico/unam-reconoce-a-mujeres-escritoras/ar-AA13ej1Q"><img src="/img/Noticia.png" class="d-block w-100" alt=""></a>
        <div class="carousel-caption d-none d-md-block">
          <div class="texto">
              <h5 class="fst-italic txtcard">UNAM</h5>
              <h5 class="fst-italic">reconoce a mujeres escritoras</h5>
          </div>
        </div>
      </div>
      <div class="carousel-item img2">
        <a href="https://www.zocalo.com.mx/llega-el-tiempo-de-literatura-a-mexicali/"><img src="/img/Noticia2.png" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
            <div class="texto">
                <h5 class="fst-italic txtcard">Llega el tiempo de Literatura a Mexicali</h5>
                <h5 class="fst-italic">Un encuentro internacional de escritores, pero
                    tambien una fiesta de las letras. Asi es 'Tiempo de literatura'
                </h5>
            </div>
        </div>
      </div>
      <div class="carousel-item img2">
        <a href="https://letraslibres.com/literatura/astrid-lopez-annie-ernaux-annees-super8/"><img src="/img/Noticia3.png" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
           <div class="texto">
                <h5 class="fst-italic txtcard">Contra la literatura del yo</h5>
                <h5 class="fst-italic">Descrito como una extensión del proyecto literario de
                    Annie Ernaux, el documental Les années super 8 muestra la intimidad como
                    ejercicio de desprendimiento y de ficción.
                </h5>
           </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@stop
