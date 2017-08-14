@extends('layouts.app')
@section('title','Entradas recientes')
@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-8">
			<h1>Últimas Noticias</h1>

				<article>
				<h2>{{$blogs->titulo}} </h2>

					<div class="row">


						<div class="col-md-6">
							 <span class="glyphicon glyphicon-folder-open"></span> {{$blogs->category->name}}
							 <span class="glyphicon glyphicon-user"></span>  {{$blogs->users->name}}
						</div>

						<div class="col-md-6">
							<span class="glyphicon glyphicon-calendar"></span>{{Date::parse($blogs->created_at)->format('j \d\e F \d\e Y')}}
						</div>

					</div>

					<br>
					@if(empty($blogs->path))
					@else
					<img src="/images/{{$blogs->path}}" class="img-responsive">
					@endif
					<br>


					<p> {{($blogs->descripcion)}}</p>


				</article>
				<button class="btn btn-primary" onclick="history.go(-1)">« Regresar </button>
				<h2>Comentarios</h2>
				<div id="disqus_thread"></div>
						<script>

						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					*/
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://ciiemp.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



		</div>



		<div class="col-md-4">
			<div class="panel panel-primary">
  <!-- Default panel contents -->
			  <div class="panel-heading">Ùltimas Noticias</div>
			  <div class="panel-body">

			  </div>

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Morbi leo risus</li>
			    <li class="list-group-item">Porta ac consectetur ac</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			</div>

			<div class="panel panel-primary">
  <!-- Default panel contents -->
			  <div class="panel-heading">Recursos</div>
			  <div class="panel-body">

			  </div>

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Morbi leo risus</li>
			    <li class="list-group-item">Porta ac consectetur ac</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			</div>

		</div>

		</div>







	</div> <!-- fin row -->





@endsection
