<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/dragula.css" rel="stylesheet" />
    <link href="css/bootstrap-grid.css" rel="stylesheet" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>
      Weekly Schedule Skeleton
    </title>
  </head>
  <body>
    <div class="container-fluid vh-100">
      <div class="row">
        <div class="col-12">
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	    <a class="navbar-brand" href="#">Menu</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav mr-auto">
		<li class="nav-item active">
		  <a class="nav-link" href="/schedule">Home</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Dropdown
		  </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		    <a class="dropdown-item" href="#">Action</a>
		    <a class="dropdown-item" href="#">Another action</a>
		    <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="#">Something else here</a>
		  </div>
		</li>
	      </ul>
	      <form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	      </form>
	    </div>
	  </nav>
	</div>
      </div>
      <div class="row">
        <div class="col-md-3" id="panel">
	  <div class="no-drag  disabled btn btn-raised btn-primary">
	    Panel
	  </div>
	  <div class="card" style="width: 18rem;">
	    <div class="card-body">
	      <p class="card-text">something</p>
	    </div>
	  </div>
	</div>
        <div class="col-md-9" id="view">
	  <div class="row">
	    <div class="col"  id="monday">
	      <div class="no-drag disabled day btn btn-raised btn-primary">
		Monday
	      </div>
	    </div>
	    <div class="col" id="tuesday">
	      <div class="no-drag disabled day btn btn-raised btn-primary" >
		Tuesday
	      </div>
	    </div>
	    <div class="col" id="wednesday">
	      <div class="no-drag disabled day btn btn-raised btn-primary" >
		Wednesday
	      </div>
	    </div>
	    <div class="col" id="thursday">
	      <div class="no-drag  disabled day btn btn-raised btn-primary" >
		Thursday
	      </div>
	    </div>
	    <div class="col" id="friday">
	      <div class="no-drag  disabled day btn btn-raised btn-primary" >
		Friday
	      </div>
	    </div>
	    <div class="col" id="saturday">
	      <div class="no-drag  disabled day btn btn-raised btn-primary" >
		Saturday
	      </div>
	    </div>
	    <div class="col" id="sunday">
	      <div class="no-drag  disabled day btn btn-raised btn-primary" >
		Sunday
	      </div>
	    </div>
	  </div>
	</div>
      </div>
      <div class="row">
        <div class="col-xs-12"></div>
      </div>
    </div>
    <!-- <script src="js/crossvent.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <!-- <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script> -->
    <script src="js/dragula.js"></script>
    <script src="js/main.js"></script>
  </body>
</html> 
