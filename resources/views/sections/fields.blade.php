<!-- Mensaje Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mensaje', 'Mensaje:') !!}
    {!! Form::textarea('mensaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', ['small' => 'small', 'large' => 'large'], null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::file('imagen') !!}
</div>
<div class="clearfix"></div>

<!-- Colorfondo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('colorfondo', 'Colorfondo:') !!}
    {!! Form::text('colorfondo', null, ['class' => 'form-control']) !!}
</div>

<!-- Showestatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('showstatus', 'Showestatus:') !!}
    {!! Form::select('showstatus', ['none' => 'Seleccione un Estatus', 'activo' => 'activo', 'inactivo' => 'inactivo'], null, ['class' => 'form-control']) !!}
</div>

<!-- Enlace1Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enlace1title', 'Enlace1Title:') !!}
    {!! Form::text('enlace1title', null, ['class' => 'form-control']) !!}
</div>

<!-- Enlace2Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enlace2url', 'Enlace2Url:') !!}
    {!! Form::text('enlace2url', null, ['class' => 'form-control']) !!}
</div>

<!-- Enlace1Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enlace1url', 'Enlace1Url:') !!}
    {!! Form::text('enlace1url', null, ['class' => 'form-control']) !!}
</div>

<!-- Enlace2Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enlace2title', 'Enlace2Title:') !!}
    {!! Form::text('enlace2title', null, ['class' => 'form-control']) !!}
</div>

<!-- Enlace3Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enlace3title', 'Enlace3Title:') !!}
    {!! Form::text('enlace3title', null, ['class' => 'form-control']) !!}
</div>

<!-- Enlace3Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enlace3url', 'Enlace3Url:') !!}
    {!! Form::text('enlace3url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sections.index') !!}" class="btn btn-default">Cancel</a>
</div>
