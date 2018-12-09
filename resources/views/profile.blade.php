@extends('layouts.mainud6')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        session ('status')
                    @endif
                        <center><h3>Datos del perfil</h3></center>
                        <center>
                            <form method="POST" action="updatePerfil">
                                @csrf
                        <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <input id="text" type="text" name="name" value="{{ Auth::user()->name }}" style="width: 40%">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <input id="text" type="text" name="email" value="{{ Auth::user()->email }}" style="width: 40%">
                          
                          <br><br>
                          <input type="submit" name="enviar" value="Guardar cambios">
                        </form> 
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
