<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Alta Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_alta_empresa', 'Fecha Alta Empresa:') !!}
    {!! Form::text('fecha_alta_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Acceso Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acceso_empresa', 'Acceso Empresa:') !!}
    {!! Form::text('acceso_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Coste Contratacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coste_contratacion', 'Coste Contratacion:') !!}
    {!! Form::text('coste_contratacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Centro Trabajo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centro_trabajo', 'Centro Trabajo:') !!}
    {!! Form::text('centro_trabajo', null, ['class' => 'form-control']) !!}
</div>

<!-- Rlt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rlt', 'Rlt:') !!}
    {!! Form::text('rlt', null, ['class' => 'form-control']) !!}
</div>

<!-- Miembro Comite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('miembro_comite', 'Miembro Comite:') !!}
    {!! Form::text('miembro_comite', null, ['class' => 'form-control']) !!}
</div>

<!-- Persona Discapacidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persona_discapacidad', 'Persona Discapacidad:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('persona_discapacidad', false) !!}
        {!! Form::checkbox('persona_discapacidad', '1', null) !!} 1
    </label>
</div>

<!-- Origen Extranjero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origen_extranjero', 'Origen Extranjero:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('origen_extranjero', false) !!}
        {!! Form::checkbox('origen_extranjero', '1', null) !!} 1
    </label>
</div>

<!-- Pueblo Gitano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pueblo_gitano', 'Pueblo Gitano:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('pueblo_gitano', false) !!}
        {!! Form::checkbox('pueblo_gitano', '1', null) !!} 1
    </label>
</div>

<!-- Lgtbi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lgtbi', 'Lgtbi:') !!}
    {!! Form::text('lgtbi', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Colectivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_colectivo', 'Otro Colectivo:') !!}
    {!! Form::text('otro_colectivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_contrato', 'Tipo Contrato:') !!}
    {!! Form::text('tipo_contrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Turno Trabajo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno_trabajo', 'Turno Trabajo:') !!}
    {!! Form::text('turno_trabajo', null, ['class' => 'form-control']) !!}
</div>

<!-- Horas Semanales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horas_semanales', 'Horas Semanales:') !!}
    {!! Form::number('horas_semanales', null, ['class' => 'form-control']) !!}
</div>

<!-- Nive Estudios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nive_estudios', 'Nive Estudios:') !!}
    {!! Form::text('nive_estudios', null, ['class' => 'form-control']) !!}
</div>

<!-- Causa Baja Dos Anos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('causa_baja_dos_anos', 'Causa Baja Dos Anos:') !!}
    {!! Form::text('causa_baja_dos_anos', null, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Profesional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_profesional', 'Nivel Profesional:') !!}
    {!! Form::text('nivel_profesional', null, ['class' => 'form-control']) !!}
</div>

<!-- Retribucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('retribucion', 'Retribucion:') !!}
    {!! Form::text('retribucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Formacion Recibida Ano Curso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formacion_recibida_ano_curso', 'Formacion Recibida Ano Curso:') !!}
    {!! Form::number('formacion_recibida_ano_curso', null, ['class' => 'form-control']) !!}
</div>

<!-- Coste Formacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coste_formacion', 'Coste Formacion:') !!}
    {!! Form::number('coste_formacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Reduccion Jornada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reduccion_jornada', 'Reduccion Jornada:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('reduccion_jornada', false) !!}
        {!! Form::checkbox('reduccion_jornada', '1', null) !!} 1
    </label>
</div>

<!-- Tipo Reduccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_reduccion', 'Tipo Reduccion:') !!}
    {!! Form::text('tipo_reduccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Duracion Reduccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duracion_reduccion', 'Duracion Reduccion:') !!}
    {!! Form::number('duracion_reduccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancel</a>
</div>
