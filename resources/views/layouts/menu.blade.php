<li class="{{ Request::is('sispeds*') ? 'active' : '' }}">
    <a href="{!! route('sispeds.index') !!}"><i class="fa fa-edit"></i><span>Produtos</span></a>
</li>



<li class="{{ Request::is('pedidos*') ? 'active' : '' }}">
    <a href="{!! route('pedidos.index') !!}"><i class="fa fa-edit"></i><span>Pedidos</span></a>
</li>

