<!-- Id Prod Field -->
<!-- <div class="form-group">
    {!! Form::label('id_prod', 'Id Prod:') !!}
    <p>{!! $sisped->id_prod !!}</p>
</div> -->

<!-- Nome Prod Field -->
<div class="form-group">
    {!! Form::label('nome_prod', 'Nome do Produto:') !!}
    <p>{!! $sisped->nome_prod !!}</p>
</div>

<!-- Val Prod Field -->
<div class="form-group">
    {!! Form::label('val_prod', 'Valor:') !!}
    <p>R$ {!! $sisped->val_prod !!}</p>
</div>

<!-- Qtdest Prod Field -->
<div class="form-group">
    {!! Form::label('qtdest_prod', 'Quantidade:') !!}
    <p>{!! $sisped->qtdest_prod !!}</p>
</div>

<!-- Sit Prod Field -->
<div class="form-group">
    {!! Form::label('sit_prod', 'Situação:') !!}
    <p>@if ( $sisped->qtdest_prod > 0)
            Disponível
        @else
            Indisponível
        @endif</p> 
</div>

