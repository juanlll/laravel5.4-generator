<table class="table table-responsive" id="peliculas-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($peliculas as $pelicula)
        <tr>
            <td>{!! $pelicula->titulo !!}</td>
            <td>{!! $pelicula->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['peliculas.destroy', $pelicula->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('peliculas.show', [$pelicula->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('peliculas.edit', [$pelicula->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>