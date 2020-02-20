<li class="{{ Request::is('inventories*') ? 'active' : '' }}">
    <a href="{{ route('inventories.index') }}"><i class="fa fa-book"></i><span>Inventories</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>Users</span></a>
</li>

