<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Patient Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}!</p>
        <a href="{{ route('logout') }}" class="text-blue-500">Logout</a>
    </div>
</body>
</html>