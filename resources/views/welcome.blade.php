<!DOCTYPE html>
<style type="text/css">
@font-face {
font-family: Franklin;
src: url('{{ public_path('fonts/Franklin.tff') }}');
}
</style>
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
            font-family: Franklin, franklin, sans-serif;
        }



        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ffffff;
        }

        @font-face {
            font-family: Franklin
            src: url('/fonts/Franklin.tff');
        }







        .image-section {
            background-color: #fff;
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

<section>
    <img style="width: 100%" src="{{ asset('images/0') }}" alt="Albert">
    <img style="width: 100%" src="{{ asset('images/0') }}" alt="Albert">
    <img style="width: 100%" src="{{ asset('images/0') }}" alt="Albert">
</section>

<div class="space ">

<section class="section image-section animate__animated animate__zoomIn">
    <img style=" height: 600px" src="{{ asset('images/0.png') }}" alt="0">
    <img style="height: 800px"  src="{{ asset('images/1.png') }}" alt="Image 1">
    <img style="height: 900px"   src="{{ asset('images/2.png') }}" alt="Image 3">
    <img style="height: 800px"   src="{{ asset('images/3.png') }}" alt="Image 4">
    <img style="height: 600px"   src="{{ asset('images/4.png') }}" alt="Image 5">
    <!-- Add more images as needed -->
</section>
</div>



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
