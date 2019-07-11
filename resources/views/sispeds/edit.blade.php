@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sisped
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sisped, ['route' => ['sispeds.update', $sisped->id], 'method' => 'patch']) !!}

                        @include('sispeds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection