@include('admin.base.helpsLayout.breadcumb')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">Editar Perfil</h2>
            </header>
            <div class="panel-body">
                
                {!!Form::model($user, ['route' => ['admin.configure-profile.update', $user->id], 'method' => 'PUT', 'files' => true, 'class' => 'sendEdit'])!!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => 'required'])!!}
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'id' => 'pass'])!!}
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmacion Contraseña</label>
                        {!!Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmacion Contraseña', 'id' => 'passVerify'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('photo', 'Foto')!!}
                        {!!Form::file('photo')!!}
                    </div>

                    <br>
                    {!!Form::submit('Editar', ['class' => 'btn btn-primary'])!!}

                {!!Form::close()!!}
                
            </div>
        </section>
    </div>
</div>

<script>

    function alertError(message){

        $.notify({
            title: '<strong>Wooo!!</strong>',
            message: message
        },{
            type: 'danger'
        });
    }

    $(document).ready(function(){
        $('.sendEdit').submit(function (e){

            var pass = $("#pass").val().trim();
            var passVerify = $("#passVerify").val().trim();
            $("#passVerify").val(passVerify);
            $("#pass").val(pass);

            if (pass.length != 0 && pass.length < 8) {
                alertError('La Contraseña tiene que contener por lo menos 8 caracteres.');
                e.preventDefault();
                return;
            }

            if (pass != passVerify) {
                alertError('confirmación de la contraseña y contraseña deben coincidir.');
                e.preventDefault();
                return;
            }
        });
    });
    
</script>