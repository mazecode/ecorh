<table class="table table-bordered table-striped table-vcenter" id="users-table">
    <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Roles</th>
        <th>Creado en</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->name!!}</a></td>
            <td>{!! $user->email !!}</td>
            <td>
                @foreach (collect($user->getRoles()) as $role)
                    <span class='badge badge-primary'>{!! $role !!}</span>
                @endforeach
            </td>
            <td>{!! $user->created_at !!}</td>
            <td class="text-center">
                <div class='btn-group'>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="EDIT"><i class="fa fa-fw fa-pencil-alt"></i></a>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                        {!! Form::button('<i class="fa fa-fw fa-times"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-primary js-tooltip-enabled', 'onclick' => "return confirm('Are you sure?')", 'data-toggle' => 'tooltip',  'title' => '', 'data-original-title'=> 'DELETE']) !!}
                    {!! Form::close() !!}
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
