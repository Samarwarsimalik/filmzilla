<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full-Screen Responsive Slider</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      overflow: hidden;
    }

    .slider {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    .slides {
      display: flex;
      width: 300%;
      height: 100%;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      width: 100%;
      height: 100%;
      flex-shrink: 0;
    }

    .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .nav {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .nav button {
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 18px;
    }

    .nav button:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
  </style>
</head>
<body>
  <div class="slider">
    <div class="slides">
      <div class="slide">
        <img src="https://via.placeholder.com/1920x1080/FF5733/FFFFFF?text=Slide+1" alt="Slide 1">
      </div>
      <div class="slide">
        <img src="https://via.placeholder.com/1920x1080/33FF57/FFFFFF?text=Slide+2" alt="Slide 2">
      </div>
      <div class="slide">
        <img src="https://via.placeholder.com/1920x1080/3357FF/FFFFFF?text=Slide+3" alt="Slide 3">
      </div>
    </div>
    <div class="nav">
      <button id="prev">⟨</button>
      <button id="next">⟩</button>
    </div>
  </div>

  <script>
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let currentIndex = 0;

    function updateSlidePosition() {
      slides.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prevBtn.addEventListener('click', () => {
      currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
      updateSlidePosition();
    });

    nextBtn.addEventListener('click', () => {
      currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
      updateSlidePosition();
    });
  </script>
</body>
</html>
