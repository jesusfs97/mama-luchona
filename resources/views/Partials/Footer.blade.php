    <!-- Footer -->
    <footer class="footer text-center" style="background-color:{{$CDF[1]['colorDeFondo']}}">
        <div class="container">
            <div class="row">
                
                <!-- Footer Location -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Nos encontramos en:</h4>
                    <p class="lead mb-0">Lorem ipsum dolor 
                        <br>Lorem ipsum dolor 
                    </p>
                </div>
    
            <!-- Footer Social Icons -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Sigueme en:</h4>

                    <a class="btn btn-outline-light btn-social mx-1" href="#">
                        <i class="fab fa-fw fa-facebook-f"></i>
                    </a>

                    <a class="btn btn-outline-light btn-social mx-1" href="#">
                        <i class="fab fa-fw fa-twitter"></i>
                    </a>

                    <a class="btn btn-outline-light btn-social mx-1" href="#">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </a>
                                
                    <a class="btn btn-outline-light btn-social mx-1" href="#">
                        <i class="fab fa-fw fa-dribbble"></i>
                    </a>
                </div>
        
                <!-- Footer About Text -->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div> <!-- Aqui termina el .row--> 
            </div>
        </div>
    </footer>
        
    
      <!-- Copyright Section -->
    <section class="copyright py-4 text-center text-white" style="background-color:{{$CDF[2]['colorDeFondo']}}">
        <div class="container">
            <small class="text-uppercase mb-4">{{ config('app.name') }} | Copyright @ {{ date('Y')}}</small>
        </div>
    </section>
    
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
