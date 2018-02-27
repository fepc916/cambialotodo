<?php
include('head.php');
?>

    <style type="text/css">
		body, html {
		    height: 100%;
		    overflow-x:hidden;
		}
		#conta {
		    background: #fff;
		    margin-left: 12%;
		}
		#sidebar {
			border-right: 1px solid #bfbaba5c;
		    min-width: 130px;
		}
		.nav-link[data-toggle].collapsed:after {
		    content: "▾";
		}
		.nav-link[data-toggle]:not(.collapsed):after {
		    content: "▴";
		}
    </style>
</head>
<body>

<div class="container-fluid h-100" id="conta">
    <div class="row h-100">
        <div class="collapse d-md-flex pt-2 h-100" id="sidebar">
            <ul class="nav flex-column flex-nowrap">
                <li class="nav-item" style="margin-top: 50px;">
                    <a class="nav-link collapsed" href="#submenu1" style="color: #bfbaba;" data-toggle="collapse" data-target="#submenu1">Mensajes<i class="far fa-comment-alt fa-1x" style="float: left;margin-right: 5px;margin-top: 4px;"></i></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href=""></a></li>
                        </ul>
                    </div>
                </li>

				<li class="nav-item" style="border-top: 1px solid #bfbaba5c;">
                    <a class="nav-link collapsed" href="#submenu2" style="color: #bfbaba;" data-toggle="collapse" data-target="#submenu2">Publicaciones<i class="fas fa-exchange-alt fa-1x" style="float: left;margin-right: 5px;margin-top: 4px;"></i></a>
                    <div class="collapse" id="submenu2" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href=""></a></li>
                        </ul>
                    </div>
                </li>                                

				<li class="nav-item" style="border-top: 1px solid #bfbaba5c;">
                    <a class="nav-link collapsed" href="#submenu3" style="color: #bfbaba;" data-toggle="collapse" data-target="#submenu3">Cambios<i class="fas fa-thumbtack fa-1x" style="float: left;margin-right: 5px;margin-top: 4px;"></i></a>
                    <div class="collapse" id="submenu3" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href=""></a></li>
                        </ul>
                    </div>
                </li> 

				<li class="nav-item" style="border-top: 1px solid #bfbaba5c;">
                    <a class="nav-link collapsed" href="#submenu4" style="color: #bfbaba;" data-toggle="collapse" data-target="#submenu4"> Calificaciones<i class="far fa-star fa-1x" style="float: left;margin-right: 5px;margin-top: 4px;"></i></a>
                    <div class="collapse" id="submenu4" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href=""></a></li>
                        </ul>
                    </div>
                </li>                 
            </ul>
        </div>

        <div class="col pt-2" style="">
        	            <a class="btn btn-default" style="border-radius: 15px;color: #bfbaba;float: right;margin-right: 20%;margin-top: 10px;">Publicar</a>

                    <h5 style="color: #bfbaba;margin-top: 50px;"><a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> Mensajes</h5>

				<hr style="border-top: 1px solid #bfbaba5c;margin-left: -15px;width: 80%">
                    <div class="collapse" id="submenu2" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href=""></a></li>
                        </ul>
                    </div>
                </li>                
        </div>
    </div>
</div>

<?php
include('footer.php');
?>