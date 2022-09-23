<html>
<form action="{{ route('destroy') }}" method="post">
    @csrf
    {{-- @method("PUT") --}}
    Username:<input type="text" name="username"><br>
    Password:<input type="text" name="password"><br>
    <input type="submit" name="submit">
</form>
</html>