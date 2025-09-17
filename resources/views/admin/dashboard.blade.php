<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}!</p>
        <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-blue-500">
        Logout
    </button>
</form>
    </div>
</body>
</html>