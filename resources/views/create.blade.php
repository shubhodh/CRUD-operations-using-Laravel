<html>
    <head>
        
    </head>
    <body>
        <form action="{{ route('store') }}" method="post">
            @csrf
            Username:<input type="text" name="username"><br>
            Password:<input type="text" name="password" id=""><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>