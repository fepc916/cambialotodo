<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Accordion with Plus/Minus Icon</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
      margin: 20px;
    }
    .panel-title .glyphicon{
        font-size: 14px;
    }
</style>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
          $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
          $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
          $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
</script>
</head>
<header>

<nav class="navbar navbar-default navbar-fixed-top" style="background: #374aab;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" style="margin-left: 30px" href="#">LOGO</a>
    </div>


      <form class="navbar-form navbar-left" style="margin-left: 100px" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-warning" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        </form>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a style="color: #fff;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Osward José</a>
              <ul class="dropdown-menu">
                <li><a href="#">uno</a></li>
                <li><a href="#">dos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a style="color: #fff;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-user fa-1x"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a style="color: #fff;margin-left:-15px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-bell fa-1x"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a style="color: #fff;margin-left:-15px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-heart fa-1x"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>        
            <a class="btn btn-warning" style="border-radius: 15px;margin-top: 8px;margin-right: 30px;color: #fff;">Publicar</a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>