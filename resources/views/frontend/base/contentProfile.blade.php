<div id="w2-spanish" class="tab-pane active">
    <section class="page-title grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    @foreach($profile as $value)
                    <p>id: {{$value->id}}</p>
                    <p>nombre: {{$value->name}}</p>
                    <p>descripcion: {{$value->description}}</p>
                    <p>español: {{$value->is_spanish}}</p>
                    <p>edad: {{$value->age}}</p>
                    @endforeach
                    <h1>{{$profile[0]->name}}</h1>
                    <p>Categoria: {{$profile[0]->category}}</p>
                    <p></p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="small-title">
        <p class="lead">Impresionante escort de belleza inigualable en Mallorca.</p>
        </div><!-- end title -->
        <div class="text-widget">
        <p>Chica activa y muy alegre. Como veis en mis fotos reales, tengo un buen cuerpo con grandes pechos, soy esbelta, suelo ir bastante al gimnasio, me gusta cuidarme para estar bien guapa para ti. He llegado a Mallorca hace solo unos días y tengo muchas ganas de compartir buenos momentos con los hombres más calientes y exigentes de la isla. Llámame si deseas concertar una cita muy sensual, podremos disfrutar a tope de tus fantasías y mis deseos.</p>
        </div><!-- end text-widget -->

        <div class="about-widget">
        <hr>
        <address>
        <i class="fa fa-phone alignleft"></i>
        <strong>Teléfono:</strong>
        <p>+61 (0) 7 9180 3458</p>
        </address>
        <address>
        <i class="fa fa-money alignleft"></i>
        <strong>Tarifas:</strong>
        <p>Consultar</p>
        </address>
        <address>
        <i class="fa fa-bus alignleft"></i>
        <strong>Salidas:</strong>
        <p>Desplazamiento en toda la isla</p>
        </address>
        <address>
        <i class="fa fa-history alignleft"></i>
        <strong>Horario:</strong>
        <p>24 Horas</p>
        </address>
        <address>
        <i class="fa fa-map-marker alignleft"></i>
        <strong>Zona:</strong>
        <p>Manacor</p>
        </address>
        </div><!-- end about-widget -->

        </div><!-- end col -->

        <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="upload/device_01.png" alt="" class="img-fullwidth wow slideInRight">
        </div><!-- end col -->
        </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
</div>
<div id="w2-english" class="tab-pane">

</div>