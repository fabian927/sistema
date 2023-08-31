<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Nombres}}</td>
            <td>{{$empleado->Apellidos}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>{{$empleado->Telefono}}</td>
            <td>{{$empleado->Foto}}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit/') }}">Editar</a>
                
                <form action="{{ url('/empleado/'.$empleado->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>