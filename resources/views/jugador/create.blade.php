@extends('layouts.app')

@section('template_title')
    Create Jugador
@endsection

@section('content')
    <section class="content container-fluid" >
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <img src="../imagenes/fondo.png" style="width:250px;height:70px;" ></img>


                       <br> <center><img src="../imagenes/registro2.png" style="width:150px;height:50px;" ></img><br><br>


                    <div class="card-body">
                        <form method="POST" action="{{ route('jugadors.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('jugador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
