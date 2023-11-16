@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
<main>
    <div class="baner-video">
      <video class="baner" onloadedmetadata="this .muted=true" autoplay loop style="opacity: 20%;">
          <source src="/imagenes/video-baner-corto.mp4">
        </video>
    </div>
    <section class="home" id="home">
    
        <div class="home-contenido">
            <h1>Bienvenidos a LINK</h1>
            <h3>El portal de soluciones para ti.</h3>
            <p>Ingresá para buscar un servicio o únete a nuestra red profesional.</p>
            <div class="btns">
              <div class="btn-busco-servicio">
                <a href="#contacto">Busco un servicio</a>  
              </div>
              <div class="btn-quiero-prestar">
                <a href="/register-prestador">Quiero prestar un servicio</a>  
              </div>
            </div>
        </div>
    </section>
</main>   

  <!------------------------------------------------------------------------>
<!--Section CATEGORIA-->
<section class="servicio" id="servicio">
    <div class="container-categoria">
        <h2 style="color:white; margin-bottom:8px;">CATEGORÍAS DE SERVICIOS</h2>
        <div class="row">
            <!--FILA 1/3: Título -->
            <div class="col-sm-12">       
            </div>
            <!--FILA 2/3: Carousel con Bootstrap-->
            <div id="carouselExample" class="carousel slide" style="color:black">
                <div class="carousel-inner">
                    <!--Slide 1-->
                    <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/instalaciones.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Electricista</h5>
                              <p class="card-text" style="text-align:center;">Nos encargamos de la instalación, mantenimiento y reparaciones relacionadas a la electricidad.</p>
                              <a href="#" class="btn btn-primary">Ver Electricistas</a>
                            </div>
                          </div>
                          <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/Herrero.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Herrero</h5>
                              <p class="card-text" style="text-align:center;">Nos encargamos de fabricar productos nuevos, y también reparar y renovar artículos de metal.</p>
                              <a href="#" class="btn btn-primary">Ver Herreros</a>
                            </div>
                          </div>
                          <div class="card" style="width: 25rem;" >
                            <img src="{{asset('imagenes/Plomero.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Plomero</h5>
                              <p class="card-text" style="text-align:center;">Nos encargamos de la instalación, matenimiento y reparación de sistemas de tuberías de agua, drenaje y gas.</p>
                              <a href="#" class="btn btn-primary">Ver Plomeros</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <!--Slide 2-->
                  <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/Albañil.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Albañil</h5>
                              <p class="card-text" style="text-align:center;">Nos encargamos de las tareas de construcción de nuevas obras, reparación, remodelación.</p>
                              <a href="#" class="btn btn-primary">Ver Albañil</a>
                            </div>
                          </div>
                          <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/Carpintero.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Carpintero</h5>
                              <p class="card-text" style="text-align:center;">Nos especializamos en el trabajo de la madera, crear muebles, instalar puertas y ventanas, construir estucturas de madera y reparar muebles y estructuras de madera dañadas o rotas.</p>
                              <a href="#" class="btn btn-primary">Ver Carpintero</a>
                            </div>
                          </div>
                          <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/Pintor.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Pintor</h5>
                              <p class="card-text" style="text-align:center;">Nos encargamos de la pintura de interiores y exteriores de casas. Nuestro trabajo es esencial para mantener las casas en buen estado y crear un ambiente agradable y acogedor.</p>
                              <a href="#" class="btn btn-primary">Ver Pintor</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <!--Slide 3-->
                  <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/manicuristaUñas.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Manicurista</h5>
                              <p class="card-text" style="text-align:center;">Nos especializamos en el cuidado y embellecimiento de las manos y en especial, el cuidado y pinturas de las uñas.</p>
                              <a href="#" class="btn btn-primary">Ver Manicurista</a>
                            </div>
                          </div>
                          <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/CejasYPestañas.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Cejas y Pestañas</h5>
                              <p class="card-text" style="text-align:center;">Nos especializamos en el diseño, la aplicación y el mantenimiento de las cejas y las pestañas.</p>
                              <a href="#" class="btn btn-primary">Ver Cejas</a>
                            </div>
                          </div>
                          <div class="card" style="width: 25rem;">
                            <img src="{{asset('imagenes/Estilista.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Estilista</h5>
                              <p class="card-text" style="text-align:center;">Nos especializamos en el cuidado del cabello, incluyendo su corte, peinado, coloración y tratamiento.</p>
                              <a href="#" class="btn btn-primary">Ver Estilista</a>
                            </div>
                          </div>
                    </div>
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
            <!--FILA 3/3: Contenido de la sección de servicios-->
            <div class="col-sm-12">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis labore quasi odit animi nobis? Quas deserunt esse illum, officia alias ullam minima ratione odio vitae rerum voluptatum dicta, debitis ipsum architecto cupiditate vero eos, nobis eaque tempora neque quaerat magni blanditiis. Amet nesciunt error soluta dolorem unde earum repudiandae nam voluptatem aperiam a in provident possimus, quia omnis commodi odit atque ducimus quo blanditiis inventore sunt culpa, obcaecati fuga excepturi! Fugiat beatae magnam sunt aliquid illo eos, qui nulla quas rem incidunt rerum exercitationem eius repellendus porro praesentium dignissimos iste. Aliquid vitae facere vero tenetur. Reprehenderit consectetur ipsam voluptatum.</p>
            </div>
            <div class="col-sm-12 btn-contactame">
                <a href="#">Buscar servicio</a>  
            </div>
        </div>
    </div>
</section>

<!--Section ÚNETE-->
<section class="about" id="about">
    <h2>ÚNETE A NOSOTROS</h2>
    <hr>
    <p class="lead"><strong>L</strong>orem ipsum dolor, sit amet consectetur adipisicing elit. Officia non nobis ex earum unde enim quo assumenda vel dolore iusto minima, mollitia, voluptatem ut? Enim officiis id nobis pariatur similique ex, architecto iure atque omnis. Alias, amet. Dignissimos est id ipsam inventore, quis fuga ratione, autem nihil iure laudantium adipisci nobis! Inventore, sequi et vel earum culpa ratione nihil labore molestiae, sit esse, cumque consectetur omnis vero asperiores aliquam placeat hic quos quasi amet? Distinctio doloremque culpa ipsam illum beatae alias voluptatum impedit provident, ipsum vero aut omnis? Dicta quos at ipsa odit ullam cumque? Hic veritatis corrupti unde error.<br><strong>S</strong>i Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam assumenda culpa reprehenderit corporis mollitia atque vitae doloremque dignissimos veniam odit. <a id="palabra-contactarme" href="/register-prestador">aquí.</a></p>
    <hr>
</section>

<!--Section CONTACTO con form-->
<section class="contacto" id="contacto">
    <div class="container-contacto">
        
        <form class="form-principal-contacto" action="https://formspree.io/f/xoqoklrz" method="POST">
          <h2>CONTACTO</h2>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Nombre y apellido</label>
                <input type="text"  id="exampleInputName1" placeholder="Escribe aquí tu nombre y apellido" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email">
                <div id="emailHelp" style="color: white; text-align: center;" class="form-text">Nunca enviaremos tu correo a nadie más.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                <input type="number"  id="exampleInputPassword1" placeholder="Escribe tu número de contacto" name="telefono">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <textarea id="exampleFormControlTextarea1"  rows="3" name="mensaje" placeholder="Escribe aquí tus comentarios o motivo de consulta"></textarea>
            </div> 
            <button type="submit" class="btn btn-contacto">Enviar</button>
        </form>   
    </div>     
</section>
@endsection