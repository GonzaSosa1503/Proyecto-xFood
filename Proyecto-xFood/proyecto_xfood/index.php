<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>xFood Hamburguesas y mas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./img/xFood.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="black">
        <!-- Responsive navbar-->
<nav class="navbar navbar-dark bg-black">
            <div class="container-fluid">
                <a class="navbar-brand mx-auto" href="#">
                <img src="./img/xFood.png" height="32px" alt="XFOOD">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <section class="offcanvas offcanvas-start bg-black text-warning" id="menuLateral" tabindex="-1">
                <div class="offcanvas-header" data-bs-theme="dark">
                  <h5 class="offcanvas-title text-info"></h5>
                  <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
                </div>
          
                <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                  <ul class="navbar-nav fs-5 justify-content-evenly">
                    <li class="nav-item p-3 py-md-1">
                      <a href="" class="nav-link text-warning">INICIO</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                      <a href="#burgers" class="nav-link text-warning">PRODUCTO</a>
                    </li>
                  </ul>
          
                  <div class="align-self-center py-3">
                    <a href=""><i class="bi bi-facebook px-2 text-warning fs-2"></i></a>
                    <a href=""><i class="bi bi-instagram px-2 text-warning fs-2"></i></a>
                    <a href=""><i class="bi bi-whatsapp px-2 text-warning fs-2"></i></a>
                  </div>
                </div>
              </section>
            </div>
          </nav>
        
        <!-- Header-->
        <header class="py-5">
    <div class="container px-lg-5">
        <div class="p-4 p-lg-5 black rounded-3 text-center">
            <div class="m-4 m-lg-5">
                <h1 class="display-5 fw-bold text-warning">¡Saborea la auténtica hamburguesa brasileña!</h1>
                <p class="fs-4 text-warning">Nuestra pasión por la hamburguesa brasileña se refleja en cada bocado. Utilizamos ingredientes frescos y sabores auténticos para ofrecerte una experiencia única.</p>
                <a class="btn btn-warning btn-lg" href="#orden">¡Realiza tu pedido ahora!</a>
            </div>
        </div>
    </div>
</header>

        <!-- Page Content-->
        <section id="burgers" class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 black text-warning border border-warning rounded">
                                <div class="feature bg-primary bg-warning text-white rounded-3 mb-4 mt-n4"><img src="./img/burger_icon.png" width="64px" class="rounded-3"></div>
                                <h2 class="fs-4 fw-bold">Samba Tropical</h2>
                                <p class="mb-0">
                                    Carne de res a la parrilla<br>
                                    Piña a la parrilla<br>
                                    Queso Mozzarella<br>
                                    Salsa Maracuya<br>
                                    Lechuga fresca<br>
                                    Pan de yuca<br>
                                
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 black text-warning border border-warning rounded">
                                <div class="feature bg-primary bg-warning text-white rounded-3 mb-4 mt-n4"><img src="./img/burger_icon.png" width="64px" class="rounded-3"></div>
                                <h2 class="fs-4 fw-bold">Amazonía Picante</h2>
                                <p class="mb-0">
                                    Carne de cerdo marinada en chiles brasileños<br>
                                    Guacamole de aguacate<br>
                                    Queso fresco<br>
                                    Pimientos jalapeños<br>
                                    Pan de mandioca<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 black text-warning border border-warning rounded">
                                <div class="feature bg-primary bg-warning text-white rounded-3 mb-4 mt-n4"><img src="./img/burger_icon.png" width="64px" class="rounded-3"></div>
                                <h2 class="fs-4 fw-bold">Brasileña Sunshine</h2>
                                <p class="mb-0">
                                    Pechuga de pollo a la parrilla<br>
                                    Salsa de mango y cilantro<br>
                                    Lechuga rizada<br>
                                    Cebolla roja encurtida<br>
                                    Pan de batata<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 black text-warning border border-warning rounded">
                                <div class="feature bg-primary bg-warning text-white rounded-3 mb-4 mt-n4"><img src="./img/burger_icon.png" width="64px" class="rounded-3"></div>
                                <h2 class="fs-4 fw-bold">Feijoada Criolla</h2>
                                <p class="mb-0">
                                    Carne molida de cerdo y frijoles negros<br>
                                    Queso cheddar<br>
                                    Chicharrones crujientes<br>
                                    Tomate<br>
                                    Pan de maiz<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 black text-warning border border-warning rounded">
                                <div class="feature bg-primary bg-warning text-white rounded-3 mb-4 mt-n4"><img src="./img/burger_icon.png" width="64px" class="rounded-3"></div>
                                <h2 class="fs-4 fw-bold">Tropicalia</h2>
                                <p class="mb-0">
                                    Carnes de res a la parrilla<br>
                                    Piña caramelizada<br>
                                    Bacon ahumado<br>
                                    Salsa de coco y cilantro<br>
                                    Pan de tapioca<br>                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 black text-warning border border-warning rounded">
                                <div class="feature bg-primary bg-warning text-white rounded-3 mb-4 mt-n4"><img src="./img/burger_icon.png" width="64px" class="rounded-3"></div>
                                <h2 class="fs-4 fw-bold">Bahia Caliente</h2>
                                <p class="mb-0">
                                    Pescado a la parrilla<br>
                                    Salsa de camarones al coco<br>
                                    Cebolla morada encurtida<br>
                                    Lechuga fresca<br>
                                    Pan de acaraje<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Comentarios -->
<section class="black py-5">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-warning text-black rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h2 id="orden"class="fw-bolder text-warning">Pedi tu orden!</h2>
            <p class="lead mb-0 text-warning">Te responderemos lo mas pronto posible</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                
                <form id="contactForm" data-sb-form-api-token="API_TOKEN"
                     action="create.php" method="post" class="row g-3 mb-3">
                  
                    <div class="form-floating mb-3">
                        <input class="form-control" name="names" id="names" type="text" placeholder="Enter your name..." data-sb-validations="required" class="form-control" required />
                        <label for="name" class="form-label">Nombre Completo</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Requiere un nombre.</div>
                    </div>
                   
                    <div class="form-floating mb-3">
                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Numero de telefono</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Requiere un numero de telefono.</div>
                    </div>
             
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="messege" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Orden</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere su orden.</div>
                    </div>
                   
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
             
                    <div  class="d-grid"></div>
                    <input type="submit" name="create" value="Enviar"
                     class="btn btn-warning btn-lg">
                </form>
            </div>
        </div>
    </div>
</section>
        
        <!-- Footer-->
        <footer class="py-5 black border-top border-warning">
            <div class="container"><p class="m-0 text-center text-warning">Copyright &copy; Gonzalo, Lisandro, Nicolas 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
