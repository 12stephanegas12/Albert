<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
       {
            background-color: rgba(34, 34, 34, 0.8);
        }
       .lijntje{
           color: black;
           border-bottom: solid;
       }
    </style>
</head>
<body>
<nav class="bg-white lijntje p-4 fixed w-full z-10" id="navbar">
    <div class="container mx-auto flex items-center justify-between">

        <a href="/" class="text-black text-lg font-semibold">Albert Κorf</a>

        <button id="menu-toggle" class="lg:hidden text-black focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <ul class="hidden lg:flex space-x-4">
            <li><a href="/" class="text-black">Home</a></li>
            <li><a href="/about" class="text-black">About us</a></li>
            <li><a href="/contact" class="text-black">Contact us</a></li>
        </ul>
    </div>
</nav>


<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.querySelector('ul').classList.toggle('hidden');
    });

    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        navbar.classList.toggle('bg-transparent-scroll', window.scrollY > 0);
    });
</script>
</body>
</html>
