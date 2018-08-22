

<li class="{{ Request::is('peliculas*') ? 'active' : '' }}">
    <a href="{!! route('peliculas.index') !!}"><i class="fa fa-edit"></i><span>Peliculas</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

