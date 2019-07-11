<!-- Nome Prod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_prod', 'Nome do Produto:') !!}
    {!! Form::text('nome_prod', null, ['class' => 'form-control']) !!}
</div>

<!-- Val Prod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('val_prod', 'Valor:') !!}
    {!! Form::number('val_prod', null, ['class' => 'form-control']) !!}
</div>

<!-- Qtdest Prod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtdest_prod', 'Quantidade:') !!}
    {!! Form::number('qtdest_prod', null, ['class' => 'form-control']) !!}
</div>

    <!-- Sit Prod Field -->
    <!-- <div class="form-group col-sm-6">
        {!! Form::label('sit_prod', 'Situação:') !!}
        <br />
        <label class="checkbox-inline">
            {!! Form::hidden('sit_prod', 0) !!}
            {!! Form::checkbox('sit_prod', '1', null) !!} Disponível
        </label>
    </div> -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sispeds.index') !!}" class="btn btn-danger">Cancelar</a>
</div>
