<div style="height:50px;margin-bottom:10px">
  <div>
      <img src="/bikelltia/img/facebook_icono.ico" style="height:50px;width:50px"/>  
      <button class="btn btn-large btn-primary" type="button">Large button</button>
      <button class="btn btn-large btn-primary" type="button">Large button</button>
      <button class="btn btn-large btn-primary" type="button">Large button</button>
      <button class="btn btn-large btn-primary" type="button">Large button</button>

      <button class="btn btn-large btn-primary" type="button">Ingresar</button>
  </div>
</div>

<nav class="navbar navbar-default" role="navigation" id="test" style="background-color:#79b2f2;border-radius: 0px">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Por nombre">
          <input type="text" class="form-control" placeholder="por Tipo">
          <input type="text" class="form-control" placeholder="Search">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-left">
        <li><a id="showmenu">primera</a></li>  
      </ul>
    </div>
  </div>
</nav>

<div style="display: none;widht:100%;text-align:center;margin-top:7px;background-color:#F2F2F2" id="menu">
    <button class="btn btn-large btn-primary" type="button">Large button</button>
    <button class="btn btn-large btn-primary" type="button">Large button</button>
    <button class="btn btn-large btn-primary" type="button">Large button</button>
    <button class="btn btn-large btn-primary" type="button">Large button</button>
    <button class="btn btn-large btn-primary" type="button">Large button</button>
</div>
<div class="container">
      <!-- Example row of columns -->
      <div class="row" style="text-align:center;margin:0 auto;">
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO1</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">Detalle</a></p>
        </div>
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO2</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
       </div>
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO2</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
        </div>
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO2</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
        </div>
      </div>

<div class="row" style="text-align:center;margin:0 auto;">
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO1</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
        </div>
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO2</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
       </div>
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO2</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
        </div>
        <div class="col-xs-4 col-sm-3 " style="background-color:#cce4fe;margin-top:4px">
          <h2>PRODUCTO2</h2>
          <img src="/bikelltia/img/facebook_icono.ico" style="height:200px;width:100%"/>

          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
        </div>
      </div>
    </div> 
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript">
	$('#test').scrollToFixed();
    $(document).ready(function() {
    	$('#showmenu').click(function() {
        	$('#menu').toggle("slide");
        });
    });
     $('#menu').scrollToFixed({marginTop: 40});

     $('#menu').scrollToFixed();
</script>