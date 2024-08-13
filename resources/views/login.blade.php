@include("estructura.header")

<h2>Login</h2>

    <form action="/login" method="post">
        @csrf
        Usuario: <input type="text" name="email">
        Password: <input type="password" name="password">
        <input type="submit" value="Login">
    </form>

    @if(session('loginInvalido') == true)
            <p style="color: red">Credenciales invalidas</p>
    @endif
@include("estructura.footer")
