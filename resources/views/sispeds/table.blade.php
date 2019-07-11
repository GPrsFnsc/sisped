<div class="table-responsive">
    <table class="table" id="sispeds-table">
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Situação</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($sispeds as $sisped)
            <tr>
                <td>{!! $sisped->nome_prod !!}</td>
                <td>R$ {!! $sisped->val_prod !!}</td> 
                <td>{!! $sisped->qtdest_prod !!}</td>
                <td>@if ( $sisped->qtdest_prod > 0)
                        Disponível
                    @else
                        Indisponível
                    @endif                
                </td>
                <td>
                    {!! Form::open(['route' => ['sispeds.destroy', $sisped->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('sispeds.show', [$sisped->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('sispeds.edit', [$sisped->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza que deseja excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
