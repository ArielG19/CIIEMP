@extends('layouts.app')

@section('title')

	{!!($proyecto->titulo)!!}

@endsection

@section('content')

	<div class="fh5co-blog-style-1">
		<div class="container">
			<div class="row p-b">
					<div class="col-md-8 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft">
							<div class="fh5co-post-image">

								<div class="fh5co-overlay"></div>
								
								<div class="fh5co-category"><a href="#">{{$proyecto->category->name}}</a></div>

								<img src="/images/{{$proyecto->imagen}}" alt="Image" class="img-responsive">

							</div>
			</div>
		</div>
	</div>

@endsection