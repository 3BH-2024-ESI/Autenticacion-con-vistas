@include("estructura.header")


    <h2>Pizzas</h2>

    @if(session('eliminado'))
        <b>Pizza eliminada</b> <br>
    @endif

    @if(session('modificado'))
        <b>Pizza modificada</b> <br>
    @endif

    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Fecha de Creacion</th>
        </tr>
        @foreach($pizzas as $pizza)
            <tr>
                <td>{{ $pizza->nombre }}</td>
                <td>{{ $pizza->precio }}</td>
                <td>{{ $pizza->created_at }}</td>
                <td><a href="/eliminar/{{ $pizza->id }}">Eliminar</a></td>
                <td><a href="/modificar/{{ $pizza->id }}">Modificar</a></td>

            </tr>
        @endforeach
    
@include("estructura.footer")
