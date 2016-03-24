
    <header class="page-header">
        <h2>Form Wizard</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Wizard</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">

        <div class="col-lg-12">
            <section class="panel form-wizard" id="w2">
                <div class="tabs">
                    <ul class="nav nav-tabs nav-justify">
                        <li class="active">
                            <a href="#w2-spanish" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">1</span>
                                {!! trans('label.spanish') !!}
                            </a>
                        </li>
                        <li>
                            <a href="#w2-english" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">2</span>
                                {!! trans('label.english') !!}
                            </a>
                        </li>
                        <li>
                            <a href="#w2-photos" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">3</span>
                                {!! trans('label.photo') !!}
                            </a>
                        </li>
                    </ul>


                        {!! Form::open(['url' => '/admin/profiles', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                            <div class="tab-content">
                                <div id="w2-spanish" class="tab-pane active">
                                    {!! trans('label.instructions') !!}
                                    <input type="hidden" name="is_spanish" value="true">
                                    @include('admin.profiles.input.input')
                                </div>
                                <div id="w2-english" class="tab-pane">
                                    {!! trans('label.instructions_english') !!}
                                    <input type="hidden" name="is_spanish2" value="false">
                                    @include('admin.profiles.input.inputTwoo')
                                </div>
                                <div id="w2-photos" class="tab-pane">
                                    {!! trans('label.') !!}
                                    @include('admin.profiles.input.photos')

                                    <button type="submit" id="SendProfile">
                                        enviar informacion
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}

                </div>

                <div class="panel-footer">
                    <ul class="pager">
                        <li class="previous disabled">
                            <a><i class="fa fa-angle-left"></i> Previous</a>
                        </li>
                        <li class="finish hidden pull-right">
                            <a id="finishProfileCreate">Finish</a>
                        </li>
                        <li class="next">
                            <a>Next <i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>


    <script>

        (function($) {

            'use strict';



            /*
             Wizard #2
             */
            var $w2finish = $('#w2').find('ul.pager li.finish'),
                    $w2validator = true;

            $w2finish.on('click', function( ev ) {
                ev.preventDefault();


//                alert('tienes que llenar los campos a pura verga');
//                    new PNotify({
//                        title: 'Congratulations',
//                        text: 'You completed the wizard form.',
//                        type: 'custom',
//                        addclass: 'notification-success',
//                        icon: 'fa fa-check'
//                    });

            });

            $('#w2').bootstrapWizard({
                tabClass: 'wizard-steps',
                nextSelector: 'ul.pager li.next',
                previousSelector: 'ul.pager li.previous',
                firstSelector: null,
                lastSelector: null,
                onNext: function( tab, navigation, index, newindex ) {
                    var validated = true;
                    if( !validated ) {
                        $w2validator.focusInvalid();
                        return false;
                    }
                },
                onTabClick: function( tab, navigation, index, newindex ) {
                    if ( newindex == index + 1 ) {
                        return this.onNext( tab, navigation, index, newindex);
                    } else if ( newindex > index + 1 ) {
                        return false;
                    } else {
                        return true;
                    }
                },
                onTabChange: function( tab, navigation, index, newindex ) {
                    var totalTabs = navigation.find('li').size() - 1;
                    $w2finish[ newindex != totalTabs ? 'addClass' : 'removeClass' ]( 'hidden' );
                    $('#w2').find(this.nextSelector)[ newindex == totalTabs ? 'addClass' : 'removeClass' ]( 'hidden' );
                }
            });



        }).apply(this, [jQuery]);


        var theParent = document.querySelector("#content-file");
        theParent.addEventListener('change',archivo, false);
        function archivo(evt) {
            var id = evt.target.id;
            var indice = id.substring(3,4);
            var files = evt.target.files; // FileList object
            // Obtenemos la imagen del campo "file".
            for (var i = 0, f; f = files[i]; i++) {


                if (!f.type.match('image.*')) {
                    alert("Solamente imagenes se aceptan");
                }
                else {
                    var reader = new FileReader();
                    reader.onload = (function(theFile) {
                        return function(e) {
                            // Insertamos la imagen
                            $("#mm"+ id).attr("src", e.target.result);
                        };
                    })(f);
                    reader.readAsDataURL(f);
                }


            }
        }


        $('#finishProfileCreate').on('click', function(e){
            e.preventDefault();
            $('#SendProfile').click();
        })




    </script>