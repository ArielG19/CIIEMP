@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{--CONTENIDO--}}
            <div class="fh5co-content-style-6">
                <div class="container">
                        <div class="row p-b text-center">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Explore the impossibility.</h2>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s"      data-wow-delay=".5s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_1.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Responsive Layout</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_2.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Retina Ready</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                            <div class="clearfix visible-sm-block"></div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_3.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Creative UI Design</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                                <a href="#" class="link-block">
                                    <figure><img src="{{asset('styleVoltage/images/img_same_dimension_4.jpg')}}" alt="Image" class="img-responsive img-rounded"></figure>
                                    <h3>Responsive Layout</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
            {{--FIN CONTENIDO--}}
        </div>
    </div>
</div>
@endsection