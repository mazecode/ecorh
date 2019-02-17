<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Fecha Nacimiento</th>
        <th>Sexo</th>
        <th>Fecha Alta Empresa</th>
        <th>Acceso Empresa</th>
        <th>Coste Contratacion</th>
        <th>Centro Trabajo</th>
        <th>Rlt</th>
        <th>Miembro Comite</th>
        <th>Persona Discapacidad</th>
        <th>Origen Extranjero</th>
        <th>Pueblo Gitano</th>
        <th>Lgtbi</th>
        <th>Otro Colectivo</th>
        <th>Tipo Contrato</th>
        <th>Turno Trabajo</th>
        <th>Horas Semanales</th>
        <th>Nive Estudios</th>
        <th>Causa Baja Dos Anos</th>
        <th>Departamento</th>
        <th>Nivel Profesional</th>
        <th>Retribucion</th>
        <th>Formacion Recibida Ano Curso</th>
        <th>Coste Formacion</th>
        <th>Reduccion Jornada</th>
        <th>Tipo Reduccion</th>
        <th>Duracion Reduccion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($personas as $persona)
        <tr>
            <td>{!! $persona->nombre !!}</td>
            <td>{!! $persona->apellidos !!}</td>
            <td>{!! $persona->fecha_nacimiento !!}</td>
            <td>{!! $persona->sexo !!}</td>
            <td>{!! $persona->fecha_alta_empresa !!}</td>
            <td>{!! $persona->acceso_empresa !!}</td>
            <td>{!! $persona->coste_contratacion !!}</td>
            <td>{!! $persona->centro_trabajo !!}</td>
            <td>{!! $persona->rlt !!}</td>
            <td>{!! $persona->miembro_comite !!}</td>
            <td>{!! $persona->persona_discapacidad !!}</td>
            <td>{!! $persona->origen_extranjero !!}</td>
            <td>{!! $persona->pueblo_gitano !!}</td>
            <td>{!! $persona->lgtbi !!}</td>
            <td>{!! $persona->otro_colectivo !!}</td>
            <td>{!! $persona->tipo_contrato !!}</td>
            <td>{!! $persona->turno_trabajo !!}</td>
            <td>{!! $persona->horas_semanales !!}</td>
            <td>{!! $persona->nive_estudios !!}</td>
            <td>{!! $persona->causa_baja_dos_anos !!}</td>
            <td>{!! $persona->departamento !!}</td>
            <td>{!! $persona->nivel_profesional !!}</td>
            <td>{!! $persona->retribucion !!}</td>
            <td>{!! $persona->formacion_recibida_ano_curso !!}</td>
            <td>{!! $persona->coste_formacion !!}</td>
            <td>{!! $persona->reduccion_jornada !!}</td>
            <td>{!! $persona->tipo_reduccion !!}</td>
            <td>{!! $persona->duracion_reduccion !!}</td>
            <td>
                {!! Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
