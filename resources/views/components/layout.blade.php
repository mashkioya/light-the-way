@props([
    'title' => 'Light the Way'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .card {
            background-color: #e3e3e3;
            padding: 2rem;
        }
        .max-w-400 {
            max-width: 400px;
            margin: auto;
        }
    </style>
</head>
<body class='bg-gray-700 p-15'>
    <nav>
        <a href="/">Home</a>   
        <a href="/articles">Articles</a>   
        <a href="/about">About</a>
        <a href="/contact">Contact</a>    
    </nav>
    {{ $slot }}
</body>
</html>
