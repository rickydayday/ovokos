<!DOCTYPE html>
<html>
  <head>
    <title>Pixelated Ad Grid</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <style>
    .grid-container {
  display: grid;
  grid-template-columns: repeat(100, 1fr);
  grid-template-rows: repeat(100, 1fr);
  gap: 1px;
  margin: 0 auto;
  max-width: 1000px;
}

.pixel {
  background-color: #000;
}

  </style>
  <body>
    <div class="grid-container">
      <!-- 10000 pixels -->
      <div class="pixel"></div>
      ...
      <div class="pixel"></div>
    </div>

    <script type="text/javascript">
      const pixels = document.querySelectorAll('.pixel');

   pixels.forEach((pixel) => {
   pixel.addEventListener('click', () => {
    // code to handle pixel click
  });
});

    </script>
  </body>
</html>


