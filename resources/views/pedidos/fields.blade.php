<!-- Id Prod Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('id_prod', 'Id Prod:') !!}
    {!! Form::select('id_prod', ['class' => 'form-control']) !!}
</div> -->
<?php
$produtos = DB::table('produto')->get();
?>
@foreach($produtos as $prod)

     <!-- {!!
        $id = $prod->id;
        $nome = $prod->nome_prod;
        $valor = $prod->val_prod;
        $quant = $prod->qtdest_prod;
    !!}  -->
    <!-- var_dump($nome); -->
<!-- RECUPERAR DO BANCO O NOME -->
<div class="form-group col-sm-3">
    {!! Form::label('nome_prod', 'Nome do Produto:') !!}
    <!-- {!!var_dump (array($prod->nome_prod));!!}     -->
    {!! Form::text('nome_prod', $prod->nome_prod,['class' => 'form-control','disabled']) !!}
    <!-- <select class="form-control" name="produto_id"> -->
            <!-- @foreach($produtos as $produto) -->
            <!-- <option value="{{$prod->id}}">{{$prod->nome_prod}}</option> -->
            <!-- @endforeach -->
    <!-- </select> -->
    <!-- {!! Form::select('nome_prod', array($prod->nome_prod)) !!} -->
</div>

<div class="form-group col-sm-3">
    {!! Form::label('id_prod', 'Situação:') !!}
    @if ( $quant > 0)
            {!! Form::text('qtdest_prod',  'Disponível' ,['class' => 'form-control','disabled']) !!} 
                    @else
            {!! Form::text('qtdest_prod',  'Indisponível' ,['class' => 'form-control','disabled']) !!} 
                    @endif 
    <!-- {!! Form::text('qtdest_prod',  $quant,['class' => 'form-control','disabled']) !!} -->
</div>
<!-- PREENCHER A QUANTIDADE A PARTIR DO REGISTRO RECUPERADO -->
<div class="form-group col-sm-3">
    {!! Form::label('id_prod', 'Quantidade:') !!}
    {!! Form::text('qtdest_prod', $quant,['class' => 'form-control','disabled']) !!}
</div>
<!-- PREENCHER O VALOR  A PARTIR DO REGISTRO RECUPERADO -->
<div class="form-group col-sm-3">
    {!! Form::label('id_prod', 'Valor:') !!}
    {!! Form::text('val_prod', 'R$ ' . $valor,['class' => 'form-control','disabled']) !!}
</div>
@endforeach
<!-- nome_prod Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nome_prod', 'Nome do Produto:') !!}
    {!! Form::text('nome_prod', null, ['class' => 'form-control']) !!}
</div>
<!-- qtdest_prod Field -->
<div class="form-group col-sm-1">
    {!! Form::label('qtdest_prod', 'Quantidade:') !!}
    {!! Form::number('qtdest_prod', null, ['class' => 'form-control']) !!}
</div>
<!-- val_prod Field -->
<div class="form-group col-sm-1">
    {!! Form::label('val_prod', 'Valor:') !!}
    {!! Form::number('val_prod', null, ['class' => 'form-control']) !!}
</div>
<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', 'Solicitante:') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
</div>

<!-- Despachante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('despachante', 'Despachante:') !!}
    {!! Form::text('despachante', null, ['class' => 'form-control']) !!}
</div>

<!-- Dt Ped Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_ped', 'Data do Pedido:') !!}
    {!! Form::date('dt_ped', null, ['class' => 'form-control','id'=>'dt_ped']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dt_ped').date({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Cep Field -->
<div class="form-group col-sm-5">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<?php
$estadosBrasileiros = array(
    'AC'=>'AC',
    'AL'=>'AL',
    'AP'=>'AP',
    'AM'=>'AM',
    'BA'=>'BA',
    'CE'=>'CE',
    'DF'=>'DF',
    'ES'=>'ES',
    'GO'=>'GO',
    'MA'=>'MA',
    'MT'=>'MT',
    'MS'=>'MS',
    'MG'=>'MG',
    'PA'=>'PA',
    'PB'=>'PB',
    'PR'=>'PA',
    'PE'=>'PE',
    'PI'=>'PI',
    'RJ'=>'RJ',
    'RN'=>'RN',
    'RS'=>'RS',
    'RO'=>'RO',
    'RR'=>'RR',
    'SC'=>'SC',
    'SP'=>'SP',
    'SE'=>'SE',
    'TO'=>'TO'
);
?>
<!-- Uf Field -->
<div class="form-group col-sm-1">
    {!! Form::label('uf', 'Uf:') !!}
    <br />
    {!! Form::select('uf',array($estadosBrasileiros),['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio', 'Município:') !!}
    {!! Form::text('municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Rua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rua', 'Rua:') !!}
    {!! Form::text('rua', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Número:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<?php

$sitPedido = array(
    'Pendente de envio'=>'Pendente de envio',
    'Enviado'=>'Enviado',
    'Entregue'=>'Entregue'
);?>

<!-- Sit Ped Field -->
<div class="form-group col-sm-6">
<br />
    {!! Form::label('sit_ped', 'Situação:') !!}
    {!! Form::select('sit_ped', array($sitPedido), ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pedidos.index') !!}" class="btn btn-danger">Cancelar</a>
</div>
