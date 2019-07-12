<div class="table-responsive">
    <table class="table" id="pedidos-table">
        <thead>
            <tr>
                <!-- <th>Id Prod</th> -->
        <th>Data</th>
        <th>Produto</th>
        <th>Solicitante</th>
        <th>Despachante</th>
        <th>Cep</th>
        <th>Uf</th>
        <th>Município</th>
        <th>Bairro</th>
        <th>Rua</th>
        <th>Número</th>
        <th>Situação</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <!-- <td>{!! $pedido->id_prod !!}</td> -->
            <td>{!! date('d/m/Y', strtotime($pedido->dt_ped))!!}</td>
            <td>{!! $pedido->nome_prod !!}</td>
            <td>{!! $pedido->solicitante !!}</td>
            <td>{!! $pedido->despachante !!}</td>
            <td>{!! $pedido->cep !!}</td>
            <td>{!! $pedido->uf !!}</td>
            <td>{!! $pedido->municipio !!}</td>
            <td>{!! $pedido->bairro !!}</td>
            <td>{!! $pedido->rua !!}</td>
            <td>{!! $pedido->numero !!}</td>
            <td>{!! $pedido->sit_ped !!}</td>
                <td>
                    {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('pedidos.show', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('pedidos.edit', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
