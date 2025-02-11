<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Transition Gallery</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f4;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      width: 80%;
    }

    .image-container {
      overflow: hidden;
      position: relative;
    }

    .transition-image {
      width: 100%;
      height: auto;
      transition: transform 0.4s ease, opacity 0.4s ease;
    }

    .transition-image:hover {
      transform: scale(1.1);
      opacity: 0.8;
    }

    @media screen and (max-width: 768px) {
      .gallery {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media screen and (max-width: 480px) {
      .gallery {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <div class="gallery">
    <div class="image-container">
      <img src="i4.jfif" alt="Image 1" class="transition-image">
    </div>
    <div class="image-container">
      <img src="i1.jfif" alt="Image 2" class="transition-image">
    </div>
    <div class="image-container">
      <img src="i3.jfif" alt="Image 3" class="transition-image">
    </div>
    <div class="image-container">
      <img src="i2.jfif" alt="Image 4" class="transition-image">
    </div>
    <div class="image-container">
      <img src="i5.jfif" alt="Image 5" class="transition-image">
    </div>
  </div>

</body>
</html>
