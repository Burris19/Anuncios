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
                
                {!!Form::model($user, ['route' => ['admin.configure-profile.update', $user->id], 'method' => 'PUT', 'files' => true])!!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])!!}
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        {!!Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico'])!!}
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña'])!!}
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