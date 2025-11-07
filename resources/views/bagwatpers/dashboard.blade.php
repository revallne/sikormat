<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard Bagwatpers</title>
</head>
<body>
    <h2>Selamat datang, {{ Auth::guard('bagwatpers')->user()->nama }}</h2>

    <form method="POST" action="{{ route('bagwatpers.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
