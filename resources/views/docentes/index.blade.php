@extends('layouts.app')
@section('title','Entradas recientes')
@section('content')
  <h2 class="fh5co-heading wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".5s">Docentes Investigadores</h2>

  <div class=" container">
    <div class= "fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
      <div class="col-md-4">
        <div class="span3 well">
            <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="perfil/default.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>Docente</h3>
            <em>click en la imagen para más detalles</em>
    		</center>
        </div>
      </div>

      <div class="col-md-4">
        <div class="span3 well">
            <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="perfil/default.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>Docente</h3>
            <em>click en la imagen para más detalles</em>
    		</center>
        </div>
      </div>

      <div class="col-md-4">
        <div class="span3 well">
            <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="perfil/default.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>Docente</h3>
            <em>click en la imagen para más detalles</em>
    		</center>
        </div>
      </div>
    </div>


    <div class= "fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
      <div class="col-md-4">
        <div class="span3 well">
            <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="perfil/default.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>Docente</h3>
            <em>click en la imagen para más detalles</em>
    		</center>
        </div>
      </div>

      <div class="col-md-4">
        <div class="span3 well">
            <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="perfil/default.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>Docente</h3>
              <em>click en la imagen para más detalles</em>
          </center>
          </div>
      </div>

      <div class="col-md-4">
        <div class="span3 well">
            <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="perfil/default.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>Docente</h3>
            <em>click en la imagen para más detalles</em>
    		</center>
        </div>
      </div>
    </div>




      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title" id="myModalLabel">More About User</h4>
                      </div>
                  <div class="modal-body">
                      <center>
                      <img src="perfil/default.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                      <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
                      <span><strong>Skills: </strong></span>
                          <span class="label label-warning">HTML5/CSS</span>
                          <span class="label label-info">Adobe CS 5.5</span>
                          <span class="label label-info">Microsoft Office</span>
                          <span class="label label-success">Windows XP, Vista, 7</span>
                      </center>
                      <hr>
                      <center>
                      <p class="text-left"><strong>Bio: </strong><br>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                      <br>
                      </center>
                  </div>
                  <div class="modal-footer">
                      <center>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Blog</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Blog</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Blog</button>
                      </center>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection