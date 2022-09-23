<html>
    <head>
        <title>CRUD APP</title>
    </head>
    <body>
        <h3>New User? Dont Have an account?</h3>
        <a href="{{ route("create")}}">Sign up</a>
        <br>
        <h3>Already have an account?</h3>
        <form action="{{ route('check') }}" method="get">
            @csrf
            {{-- @method("PUT") --}}
            Username:<input type="text" name="username"><br>
            Password:<input type="text" name="password"><br>
            <input type="submit" name="submit">
        </form>
        <br>
        <h3>Delete an existing account?</h3> 
        <a href="{{ route("delete")}}">Delete</a>  
        <br> 
        <h3>Change password?</h3> 
        <a href="{{ route("update1")}}">Update</a>  
    </body>
</html>