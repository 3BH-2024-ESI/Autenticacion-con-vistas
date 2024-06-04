@include("estructura.header")

    <h2>Modificar Pizza</h2>

    <form action="/modificar" method="post">
        @csrf
        Id <input type="text" disabled name="id" value="{{ $pizza -> id }}"> <br>
        Nombre <input type="text" name="nombre" value="{{ $pizza -> nombre }}"> <br>
        Precio <input type="text" name="precio" value="{{ $pizza -> precio }}"> <br>
        <input type="submit" value="Modificar">

    </form>


    
@include("estructura.footer")

