@extends('layouts.app')
@section('title','Acerca de')
@section('content')
    <link rel="stylesheet" href="{{asset('styleVoltage/css/style.css')}}">
    <div class="container titulo wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="row">
            <div class="col-md-12">
                <h3 id="H3_3">Acerca de nosotros</h3>
            </div>
            <div class="col-md-12">
                <p id="P_4">Centro de investigación de UNAN-Managua; FAREM-Estelí líder y de referencia nacional en la generación de conocimiento de prácticas innovadoras y emprendedoras (organización, productos, modelos de negocios, educativos y sociales), el desarrollo de competencias, fortalecimiento socioeconómico-empresarial,
                   relación entre universidad-empresa-estado y acciones que aporten al crecimiento económico del país.</p>

            </div>
        </div>
    </div>

    <hr>

    <div class="container box wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="1s">
        <div class="row">
            <!-- Boxes de Acoes -->
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-flag"></i></div>
                        <div class="info prueba">
                            <h3 class="title">Misión</h3>
                            <p style="text-align: justify">
                                Somos una instancia de la UNAN-Managua-FAREM-Estelí dedicada a la investigación aplicada
                                para la promoción y
                                desarrollo de proyectos de innovación y emprendimiento que se encaminen a la solución de
                                problemas socioeconómicos,
                                culturales, educativos y ambientales, mediante la organización de equipos
                                multidisciplinarios para el crecimiento
                                económico de la región, fortalecer la relación universidad-empresa-estado-sociedad, y
                                promover los principios
                                impulsores de la UNAN-Managua.

                            </p>

                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-flag"></i></div>
                        <div class="info prueba">
                            <h3 class="title ">visión</h3>
                            <p style="text-align: justify">
                                Centro de investigación de UNAN-Managua; FAREM-Estelí líder y de referencia nacional en
                                la generación de conocimiento
                                de prácticas innovadoras y emprendedoras (organización, productos, modelos de negocios,
                                educativos y sociales), el desarrollo
                                de competencias, fortalecimiento socioeconómico, relación entre
                                universidad-empresa-estado y acciones que aporten al crecimiento económico
                                y bienestar social.

                            </p>

                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>


            <!-- /Boxes de Acoes -->
        </div>
    </div>


    <hr>
    <div id="about" class="page-section wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="1s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center" id="H3_3">Qué hacemos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>Grupos de investigación multidisciplinarios</h4>
                        <p>Establecer grupos de investigación multidisciplinarios y aplicados para
                            que impulsen las líneas de investigación.

                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>Formar Recursos Humanos en investigación</h4>
                        <p>Formar Recursos Humanos en investigación aplicada que impulsen prácticas innovadoras y
                            emprendedoras encaminadas a la solución de problemas socioeconómicos.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 ">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Realizar procesos innovadores</h4>
                        <p>Realizar procesos innovadores que contribuyan a la solución de problemas socioeconómicos,
                            en una relación de colaboración entre empresa-estado y que aporten al crecimiento económico del país.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
