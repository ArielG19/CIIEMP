@foreach($profesor as $p)
                                
                                <div class="col-sm-5 col-xs-6 tital">Nombre: {{$p->primer_nombre}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Segundo Nombre: {{$p->segundo_nombre}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Apellido: {{$p->primer_apellido}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Segundo Apellido: {{$p->segundo_apellido}}</div>
                                      <div class="col-sm-7"></div>
                                      <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Telefono: {{$p->telefono}}</div>
                                    <div class="col-sm-7">
                                        <span class="label label-default"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Profesion 1: {{$p->profesion1}}</div>
                                    <div class="col-sm-7">
                                        <span class="label label-default"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                 <div class="col-sm-5 col-xs-6 tital">Profesion 2: {{$p->profesion2}}</div>
                                    <div class="col-sm-7">
                                        <span class="label label-default"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                 <div class="col-sm-5 col-xs-6 tital">Profesion 3: {{$p->profesion3}}</div>
                                    <div class="col-sm-7">
                                        <span class="label label-default"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                 <div class="col-sm-5 col-xs-6 tital">Profesion 4: {{$p->profesion4}}</div>
                                    <div class="col-sm-7">
                                        <span class="label label-default"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                                           
@endforeach