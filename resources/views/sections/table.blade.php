<table class="table table-responsive" id="sections-table">
    <thead>
        <th>Titulo</th>
        <th>Tipo</th>
        <th>Imagen</th>
        <th>Colorfondo</th>
        <th>Showestatus</th>
        <th>Enlace1Title</th>
        <th>Enlace2Url</th>
        <th>Enlace1Url</th>
        <th>Enlace2Title</th>
        <th>Enlace3Title</th>
        <th>Enlace3Url</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sections as $section)
        <tr>
            <td>{!! $section->titulo !!}</td>
            <td>{!! $section->tipo !!}</td>
            <td>{!! $section->imagen !!}</td>
            <td>{!! $section->colorfondo !!}</td>
            <td>{!! $section->showestatus !!}</td>
            <td>{!! $section->enlace1title !!}</td>
            <td>{!! $section->enlace2url !!}</td>
            <td>{!! $section->enlace1url !!}</td>
            <td>{!! $section->enlace2title !!}</td>
            <td>{!! $section->enlace3title !!}</td>
            <td>{!! $section->enlace3url !!}</td>
            <td>
                {!! Form::open(['route' => ['sections.destroy', $section->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sections.show', [$section->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sections.edit', [$section->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>