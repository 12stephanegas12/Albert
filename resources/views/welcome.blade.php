<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masonry Grid Inspired by Beyoncé's Website</title>
</head>
<body>
<header>
    <h1>Your Website Title</h1>
</header>
<main>
    <div class="masonry-item">
        <img src="https://via.placeholder.com/600x800" alt="Image 1">
    </div>
    <div class="masonry-item">
        <img src="https://via.placeholder.com/400x600" alt="Image 2">
    </div>
    <div class="masonry-item">
        <img src="https://via.placeholder.com/800x1200" alt="Image 3">
    </div>
<div class="masonry-item">
        <img src="https://via.placeholder.com/600x800" alt="Image 4">
    </div>
    <div class="masonry-item">
        <img src="https://via.placeholder.com/400x600" alt="Image 5">
    </div>
    <!-- Add more items as needed -->
</main>
</body>
</html>
