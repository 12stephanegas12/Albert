<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1">
@include('layouts.header')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }



        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ffffff;
        }





        .intro-section {
            background-color: #2d3748;
        }



        .image-section {
            background-color: #4a5568;
            overflow-x: auto;
            display: flex;
            padding: 10px;
            justify-content: center;


        }

        .image-section img {
            width: 300px;
            padding: 10px;
            object-fit: cover;

        }





        .image-section img {
            width: 300px;
            padding: 10px;
            object-fit: cover;

        }


        .content-section {
            background-color: #2c3e50;
        }
        .content-section2 {
            background-color: #2c3e44;
        }
        /* Media query for responsiveness */
        @media screen and (max-width: 768px) {
            .section {
                height: auto;
                padding: 20px;
            }

            .image-section {
                flex-direction: column;
                align-items: center;
                overflow-x: hidden;
            }

            .space img {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<section class="section intro-section animate__animated animate__fadeIn">

    <div>
        <h1>Welcome to Albert's World</h1>
        <p>Discover the magic within!</p>
    </div>

</section>
<div class="space ">

<section class="section image-section animate__animated animate__zoomIn">
    <img src="https://via.placeholder.com/300x600" alt="Image 1">
    <img src="https://via.placeholder.com/300x800" alt="Image 2">
    <img src="https://via.placeholder.com/300x900" alt="Image 3">
    <img src="https://via.placeholder.com/300x800" alt="Image 4">
    <img src="https://via.placeholder.com/300x600" alt="Image 5">
    <!-- Add more images as needed -->
</section>
<section class="section image-section animate__animated animate__zoomIn">
    <img src="https://via.placeholder.com/300x900" alt="Image 1">
    <img src="https://via.placeholder.com/300x800" alt="Image 2">
    <img src="https://via.placeholder.com/300x600" alt="Image 3">
    <img src="https://via.placeholder.com/300x800" alt="Image 4">
    <img src="https://via.placeholder.com/300x900" alt="Image 5">
    <!-- Add more images as needed -->
</section>
</div>
<section class="section content-section animate__animated animate__slideInUp">
    <div>
        <h2>Explore Our Services</h2>
        <p>We offer a wide range of amazing services.</p>
    </div>
</section>



<!-- Add more sections with different content, animations, and styles -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const animatedElements = document.querySelectorAll('.animate__animated');
        animatedElements.forEach(element => {
            element.classList.add('animate__fadeIn'); // Initial animation, you can change it as needed
        });
    });
</script>
</body>
</html>
