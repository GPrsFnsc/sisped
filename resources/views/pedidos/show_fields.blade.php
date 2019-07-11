<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pedido->id !!}</p>
</div> -->

<!-- Id Prod Field -->
<!-- <div class="form-group">
    {!! Form::label('id_prod', 'Id Prod:') !!}
    <p>{!! $pedido->id_prod !!}</p>
</div> -->

<!-- Dt Ped Field -->
<div class="form-group">
    {!! Form::label('dt_ped', 'Data do Pedido:') !!}
    <p>{!! date('d/m/Y', strtotime($pedido->dt_ped)) !!}</p>
</div>

<!-- Solicitante Field -->
<div class="form-group">
    {!! Form::label('solicitante', 'Solicitante:') !!}
    <p>{!! $pedido->solicitante !!}</p>
</div>

<!-- Despachante Field -->
<div class="form-group">
    {!! Form::label('despachante', 'Despachante:') !!}
    <p>{!! $pedido->despachante !!}</p>
</div>

<!-- Cep Field -->
<div class="form-group">
    {!! Form::label('cep', 'Cep:') !!}
    <p>{!! $pedido->cep !!}</p>
</div>

<!-- Uf Field -->
<div class="form-group">
    {!! Form::label('uf', 'Uf:') !!}
    <p>{!! $pedido->uf !!}</p>
</div>

<!-- Municipio Field -->
<div class="form-group">
    {!! Form::label('municipio', 'Município:') !!}
    <p>{!! $pedido->municipio !!}</p>
</div>

<!-- Bairro Field -->
<div class="form-group">
    {!! Form::label('bairro', 'Bairro:') !!}
    <p>{!! $pedido->bairro !!}</p>
</div>

<!-- Rua Field -->
<div class="form-group">
    {!! Form::label('rua', 'Rua:') !!}
    <p>{!! $pedido->rua !!}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('numero', 'Número:') !!}
    <p>{!! $pedido->numero !!}</p>
</div>

<!-- Sit Ped Field -->
<div class="form-group">
    {!! Form::label('sit_ped', 'Situação do Pedido:') !!}
    <p>{!! $pedido->sit_ped !!}</p>
</div>

<!-- Updated At Field -->
<!-- <div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pedido->updated_at !!}</p>
</div> -->

<!-- Created At Field -->
<!-- <div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pedido->created_at !!}</p>
</div> -->

<!-- Deleted At Field -->
<!-- <div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $pedido->deleted_at !!}</p>
</div> -->

