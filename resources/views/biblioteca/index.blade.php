@extends('layouts.app')
@section('title','Biblioteca Virtual')
@section('content')
<div class="fh5co-blog-style-1">
			<div class="container">
				<h2> Biblioteca</h2>
				<div class="row">
        	<div class="col-xs-8 col-xs-offset-2" id="search">
		    			<div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filtrar por</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>                      
                      <li class="divider"></li>
                      <li><a href="#all">Todo</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            	</div>
        	</div>
				</div>
				<div class="row p-b">
					@foreach($downloads as $down)
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>
								<img src="{{asset('styleVoltage/images/Library-ciiemp.png')}}" alt="Image" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a href="#">{{$down->titulo}}</a></h3>
								<p>{{$down->descripcion}}</p>
							</div>
							<div class="fh5co-post-meta" id="btn">
								<a class="btn btn-primary" href="download/pdf/{{$down->path}}" target="_blank" role="button">Visualizar</a>
                <a class="btn btn-primary" href="download/pdf/{{$down->path}}" download="{{$down->path}}" role="button">Descagar</a>
							</div>
						</div>
					</div>
					@endforeach()
        </div>
				{!! $downloads->render()!!}
@endsection
