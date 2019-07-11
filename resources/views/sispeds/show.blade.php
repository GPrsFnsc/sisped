@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sisped
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('sispeds.show_fields')
                    <a href="{!! route('sispeds.index') !!}" class="btn btn-danger">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
