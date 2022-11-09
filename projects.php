<?php  include("Includes/header.php")?>
<body>
<div class="head">
    <div class="text-center">
        <h1 class="h2">02 : Works</h1>
        <p>Some of the latest work I've done is listed below</p>
    </div>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="courses-container">
            <div class="course">
                <div class="course-preview">
                    <h6>Project name:</h6>
                    <h2>Camera Shop</h2>
                    <a href="#">View all details <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="course-info">
                    <h6>Technology used</h6>
                    <h2>HTML, CSS, Java Script, PHP, MySQL</h2>
                    <button class="btn">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="courses-container">
            <div class="course">
                <div class="course-preview">
                    <h6>Project name:</h6>
                    <h2>Healthcare Mangment System</h2>
                    <a href="#">View all details <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="course-info">
                    <h6>Technology used</h6>
                    <h2>HTML, CSS, Java Script, PHP, MySQL</h2>
                    <button class="btn">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="courses-container">
            <div class="course">
                <div class="course-preview">
                    <h6>Project name:</h6>
                    <h2>Cyber Security Info</h2>
                    <a href="#">View all details <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="course-info">
                    <h6>Technology used</h6>
                    <h2>HTML, CSS, Java Script, PHP, MySQL</h2>
                    <button class="btn">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
    <script src="Assets/Js/script.js"></script>
</body>