@extends('layouts.app')
@section('title','Noticias recientes')
@section('content')
<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row">
		      <div class=" col-sm-12 col-md-6 col-lg-6">
		        <div class="row">
		          <div class="leftbar_content">
		            <h2>Utimas noticias</h2>
		            <div class="single_stuff wow fadeInDown">
		              <div class="single_stuff_img"> <a href="pages/single.html"><img src="images/stuff_img1.jpg" alt=""></a> </div>
		              <div class="single_stuff_article">
		                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Technology</a>
		                  <div class="stuff_article_inner"> <span class="stuff_date">Nov <strong>17</strong></span>
		                    <h2><a href="pages/single.html">Duis  quis erat non nunc fringilla</a></h2>
		                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula...</p>
		                  </div>
		                </div>
		              </div>
		            </div>
		            <div class="single_stuff wow fadeInDown">
		              <div class="single_stuff_img"> <a href="#"><img src="images/stuff_img1.jpg" alt=""></a> </div>
		              <div class="single_stuff_article">
		                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Technology</a>
		                  <div class="stuff_article_inner"> <span class="stuff_date">Nov <strong>17</strong></span>
		                    <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
		                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula...</p>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>




				{!! $noticias->render()!!}

			</div>
		</div>


@endsection
