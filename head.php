<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="brand col-4 col-md-3 col-lg-2">
                    <hgroup>
                                            <button class="navbar-toggler" style="position: absolute;" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon" style="color: red"><a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars" style="color: #fff"></i></a></span>
                    </button>
                        <a href="">
                            <h1>Cambialo<span>todo</span></h1>
                        </a>
                    </hgroup>
                </div>
                <div  id="contentWrapItemsHeader" class="col-12 col-md-9 col-lg-10 row align-items-center  flex-wrap-reverse">
                      <div class="col-12 col-md-7 col-lg-6">
                    <form action="" class="search">
                        <div class="input-group">
                            <div class="input-group-btn">

                                <button type="button" style="margin-top: 1px" class="btn toggleCat btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Todo
                            </button>
                                <div class="dropdown-menu" id="topCategories" style="border:1px solid #bfbaba">
                                    <a class="dropdown-item" href="#">Teléfonos</a>
                                    <a class="dropdown-item" href="#">Hobbies</a>
                                    <a class="dropdown-item" href="#">Tablets</a>
                                    <a class="dropdown-item" href="#">Arte</a>
                                    <a class="dropdown-item" href="#">Electronicos</a>
                                    <a class="dropdown-item" href="#">Deportes</a>
                                    <a class="dropdown-item active" href="#">Electrodomesticos</a>
                                    <a class="dropdown-item" href="#">Moda y belleza</a>

                                    <a class="dropdown-item" href="#">Video</a>
                                    <a class="dropdown-item" href="#">Animales y mascotas</a>
                                    <a class="dropdown-item" href="#">Hogar</a>
                                    <a class="dropdown-item" href="#">Servicios</a>
                                    <a class="dropdown-item" href="#">Muebles</a>
                                    <a class="dropdown-item" href="#">Propiedades</a>
                                    <a class="dropdown-item" href="#">Jardin</a>
                                    <a class="dropdown-item" href="#">Inmuebles</a>
                                    <a class="dropdown-item" href="#">Vehiculos</a>
                                    <a class="dropdown-item" href="#">Herramientas</a>
                                </div>
                            </div>
                            <input type="text" placeholder="Hola, ¿Que estas buscando?" class="form-control" aria-label="Text input with dropdown button">
                            <span class="input-group-btn">
                        <button class="btn btn-warning" style="margin-top: 1px" type="submit" id="btn-search"><i class="fa fa-search"></i></button>
                      </span>
                        </div>
                    </form>
                </div>
                       <div class="user-options col-8 col-md-4 col-lg-4">
                    <ul class="">
                        <li class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="login_header" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="username" style="margin-right: 10px">Osward Jose</span> <i class="far fa-user"></i>
                          </button>
                            <div class="dropdown-menu dropdown-menu-right login_header" aria-labelledby="login_header">
                                <div class="container">
                                    <form action="" class="">
                                        <div class="form-group">
                                            <input type="text" placeholder="usuario" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="clave" class="form-control">
                                        </div>
                                        <button type="submit">Iniciar Sesión</button>
                                    </form>
                                    <a href="" class="color1">Registrate</a>
                                    <a href="" class="color2">Olvidé mi contraseña</a>
                                </div>
                            </div>
                        </li>
                        <!---->
                        <li class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-bell"></i>
                          </button>
                            <div class="dropdown-menu notifications dropdown-menu-right" aria-labelledby="notifications">
                                <div class="dropdown-header">
                                    <h6>Notificaciones nuevas</h6> <span class="badge badge-danger">8</span></div>
                                <a class="dropdown-item last-notification" href="#">
                                    <div class="state-notification">
                                        <span class="state">Te respondieron</span>
                                        <img src="images/horno.png" alt="" class="image">
                                    </div>
                                    <div class="post-dates">
                                        <h5 class="Title-post">Horno Microondas Samsung</h5>
                                        <h6 class="value-post color2">Valorado en Bsf: 350000</h6>
                                        <h6 class="from-post color2">San Cristobal</h6>
                                        <h6><b class="color1">Nuevo</b></h6>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="state-notification">
                                        <span class="state">Te respondieron</span>
                                        <img src="images/teclado.png" alt="" class="image">
                                    </div>
                                    <div class="post-dates">
                                        <h5 class="Title-post">Teclado Microsoft</h5>
                                        <h6 class="value-post color2">Valorado en Bsf: 845000</h6>
                                        <h6 class="from-post color2">San Cristobal</h6>
                                        <h6><b class="color1">Nuevo</b></h6>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="state-notification">
                                        <span class="state">Te respondieron</span>
                                        <img src="images/consola.png" alt="" class="image">
                                    </div>
                                    <div class="post-dates">
                                        <h5 class="Title-post">Presonuss Consola</h5>
                                        <h6 class="value-post color2">Valorado en Bsf: 845000</h6>
                                        <h6 class="from-post color2">San Cristobal</h6>
                                        <h6><b class="color1">Nuevo</b></h6>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!---->
                        <li class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="favorite-items" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-heart"></i>
                          </button>
                            <div class="dropdown-menu notifications dropdown-menu-right" aria-labelledby="favorite-items">
                                <h6 class="dropdown-header">Favoritos</h6>
                                <a class="dropdown-item" href="#">
                                    <div class="state-notification">
                                        <img src="images/horno.png" alt="" class="image">
                                    </div>
                                    <div class="post-dates">
                                        <h5 class="Title-post">Horno Microondas Samsung</h5>
                                        <h6 class="value-post color2">Valorado en Bsf: 350000</h6>
                                        <h6 class="from-post color2">San Cristobal</h6>
                                        <h6><b class="color1">Nuevo</b></h6>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="state-notification">
                                        <img src="images/teclado.png" alt="" class="image">
                                    </div>
                                    <div class="post-dates">
                                        <h5 class="Title-post">Teclado Microsoft</h5>
                                        <h6 class="value-post color2">Valorado en Bsf: 845000</h6>
                                        <h6 class="from-post color2">San Cristobal</h6>
                                        <h6><b class="color1">Nuevo</b></h6>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="state-notification">
                                        <img src="images/consola.png" alt="" class="image">
                                    </div>
                                    <div class="post-dates">
                                        <h5 class="Title-post">Presonuss Consola</h5>
                                        <h6 class="value-post color2">Valorado en Bsf: 845000</h6>
                                        <h6 class="from-post color2">San Cristobal</h6>
                                        <h6><b class="color1">Nuevo</b></h6>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li><button class="btn-post-header">Publicar</button></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </header>