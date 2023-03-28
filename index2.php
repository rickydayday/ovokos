<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Pixelated Website</title>
    <style>
      canvas {
        border: 1px solid black;

          }

    </style>
  </head>
  <body>
    <div class="container text-center">
    <canvas id="myCanvas"></canvas>
    <input type="file" id="imageLoader">
  </div>
    <script>
      
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");
 var lambs = new Image();
 lambs.src = './assets/10.png';

// Set the canvas size
canvas.width = 1000;
canvas.height = 1000;


// Set the pixel size
const pixelSize = 10;

// Draw the pixels
for (let x = 0; x < canvas.width; x += pixelSize) {
  for (let y = 0; y < canvas.height; y += pixelSize) {
    // ctx.fillStyle = `rgb(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255})`;
    ctx.fillRect(x, y, pixelSize, pixelSize);
    ctx.drawImage(lambs,x, y,10,10);
  }
}

function fillSquare(context, x, y){

    // context.fillStyle = "white"
    // context.fillRect(x,y,9,9);
    context.drawImage(lambs,x, y,10,10);

}

 function getSquare(canvas, evt){
       var rect = canvas.getBoundingClientRect();

    return {
        x: 1 + (evt.clientX - rect.left) - (evt.clientX - rect.left)%10,
        y: 1 + (evt.clientY - rect.top) - (evt.clientY - rect.top)%10
    };
}

canvas.addEventListener('click', function(evt) {
    var mousePos = getSquare(canvas, evt);
    var count;
    fillSquare(ctx, mousePos.x, mousePos.y);
    const path = './assets/red.png'

    ctx.drawImage(path, 33, 71, 104, 124, 21, 20, 87, 104);



})

const imageLoader = document.getElementById('imageLoader');
imageLoader.addEventListener('change', function() {
  const file = this.files[0]; // Get selected file
  const img = new Image();
  img.onload = function() {
    // Draw image on canvas
    ctx.drawImage(img, 0, 0);
  };
  img.src = URL.createObjectURL(file);
});

    </script>
  </body>
</html>
