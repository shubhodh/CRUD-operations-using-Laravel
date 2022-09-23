<html>
<form action="{{ route('update') }}" method="post">
    @csrf
    {{-- @method("PUT") --}}
    Username:<input type="text" name="username"><br>
    Password:<input type="text" name="password"><br>
    New Password:<input type="text" name="newpassword"><br>
    <input type="submit" name="submit">
</form>
</html>