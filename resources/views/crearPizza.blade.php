@include("estructura.header")

    <h2>Crear Pizza</h2>

    <form action="/pizza" method="post">
        @csrf
        Nombre <input type="text" name="nombre"> <br>
        Precio <input type="text" name="precio"> <br>
        <input type="submit" value="Crear">

    </form>


    @if(session('mensaje'))
    
        @if(session('resultado') == true)
            <h2 style="color: green">Exito</h2>
        @endif

        <p>{{ session('mensaje') }}</p>

    @endif
    
@include("estructura.footer")

