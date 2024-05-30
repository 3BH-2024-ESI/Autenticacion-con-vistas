@include("estructura.header")


    <h2>Pizzas</h2>
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

            </tr>
        @endforeach
    
@include("estructura.footer")
