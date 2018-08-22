@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pelicula
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pelicula, ['route' => ['peliculas.update', $pelicula->id], 'method' => 'patch']) !!}

                        @include('peliculas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection