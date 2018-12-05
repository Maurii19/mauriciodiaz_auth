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
                            <form action="{{ route('profile') }}" method="POST">
                                @csrf
                          <p><span>Nombre</span><br>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" style="width: 40%"></p>
                          <p><span>Email</span><br>
                            <input type="text" name="email" value="{{ Auth::user()->email }}" style="width: 40%">
                          </p>
                          <br><br>
                          <input type="submit" value="Guardar cambios.">
                        </form> 
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
