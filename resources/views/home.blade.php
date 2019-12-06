@extends('layouts.app')

@section('Contenido')


@if( $CDF[3]['colorDeFondo'] === "null")
<header class="masthead text-white text-center imagen img-fluid" style="background-image:url({{Storage::url($CDF[3]['imagenDeFondo'])}});">
@else
<header class="masthead text-white text-center" style="background-color:{{$CDF[3]['colorDeFondo']}};">
@endif

    <div class="container d-flex align-items-center flex-column">
        
        <!-- Masthead Avatar Image -->
        <img class="img-fluid masthead-avatar mb-5" src="img/avataaars.svg" alt="">
        
        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Mamá luchona</h1>
        
        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi asperio</p>

    </div>
</header>

<!-- Portfolio Section -->

    @if( $CDF[4]['colorDeFondo'] === "null")
<section class="page-section portfolio img-fluid imagen" style="background-image:url({{Storage::url( $CDF[4]['imagenDeFondo'])}})" id="Tienda">
    @else
<section class="page-section portfolio" style="background-color:{{ $CDF[4]['colorDeFondo']}}" id="Tienda">
    @endif
    <div class="container">
        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{$menus[0]['Titulo']}}</h2>

        <!-- Icon Divider -->
        
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            
            <div class="divider-custom-line"></div>
        </div>
        
        <!-- Portfolio Grid Items -->
        <div class="card-group">
                <div class="card">
                  <img src="" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img src="" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img src="" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>  
</section>



<!-- Confesionario-->
<section class="page-section bg-danger" id="Confesionario">
    <div class="container pb-5">
        <!-- titulo Confesionario -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{$menus[1]['Titulo']}}</h2>
        
        <!-- Lineas que dividen -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <form name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Confesion:</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="¿Qué tienes en mente mamá?" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="mb-3 form-group align-items-center">
                        <button type="submit" class="my-3 btn btn-primary btn-block" id="sendMessageButton">Confesar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section class="page-section" id="Contacto">
    <div class="container">
        <!-- Contact Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactame</h2>
        <!-- Icon Divider -->
        
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        
        
        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mx-3 pb-2">

                            <input class="form-control" id="Nombre" type="text" placeholder="¿Cómo te llamas?" required="required" data-validation-required-message="Porfavor ingresa tu Nombre.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mx-3 pb-2 mx">

                            <input class="form-control" id="email" type="email" placeholder="Example@mail.com" required="required" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mx-3 pb-2">

                            <input class="form-control" id="phone" type="tel" placeholder="Ingresa un telefono" required="required" data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mx-3 pb-2">
                            
                            <textarea class="form-control" id="message" rows="5" placeholder="Escribe aqui un mensaje ^-^" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection