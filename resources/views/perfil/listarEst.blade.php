@foreach($users as $user) 
                                <div class="col-sm-5 col-xs-6 tital">Carnet: {{$user->carnet}}</div>
                                      <div class="col-sm-7 col-xs-6"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Nombre: {{$user->primer_nombre}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Segundo Nombre: {{$user->segundo_nombre}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Apellido: {{$user->primer_apellido}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Segundo Apellido: {{$user->segundo_apellido}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Telefono: {{$user->telefono}}</div>
                                    <div class="col-sm-7">
                                        <span class="label label-default"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Carrera: {{$user->carrera}}</div>
                                    <div class="col-sm-7">
                                      <span class="label label-default"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="bot-border"></div>                              
@endforeach


                                