<!doctype html>
<html>
<body style="width: 100%; height: 100%; margin: 0;">
    <canvas style="background-color: #222222; display:block; width: 100%; height: 100%; box-sizing: border-box;" id="canvas"></canvas>
      <script>
          var canvas = document.getElementById("canvas");
          var context = canvas.getContext('2d');
          var image = new Image();
          var imagePosX = 650;
          var imagePosY = 300;
          var posXDiff = 47.5;
          var posYDiff = 55;
          var cellHeight = 60;
          var cellWeight = 60;
          canvas.width  = window.innerWidth;
          canvas.height = window.innerHeight;
          image.onload=function(){
              for(var round = 0; round < 4; round++){
                  if ( round == 0 ) {
                      console.log("Round: "+ round + " Coordinate: A");
                      context.drawImage(image,imagePosX,imagePosY,cellWeight,cellHeight); // A
                  } else if ( round == 1) {
                      console.log("Round: "+ round + " Coordinate: 1B-6B");
                      context.drawImage(image,imagePosX,imagePosY-posYDiff,cellWeight,cellHeight); // 1B
                      context.drawImage(image,imagePosX-posXDiff,imagePosY-((posYDiff-0.5)/2),cellWeight,cellHeight); // 2B
                      context.drawImage(image,imagePosX-posXDiff,imagePosY+((posYDiff-0.5)/2),cellWeight,cellHeight); // 3B
                      context.drawImage(image,imagePosX,imagePosY+posYDiff,cellWeight,cellHeight); // 4B
                      context.drawImage(image,imagePosX+posXDiff,imagePosY+((posYDiff-0.5)/2),cellWeight,cellHeight); // 5B
                      context.drawImage(image,imagePosX+posXDiff,imagePosY-((posYDiff-0.5)/2),cellWeight,cellHeight); // 6B
                  } else if ( round == 2) {
                      console.log("Round: "+ round + " Coordinate: 1C-12C");
                      context.drawImage(image,imagePosX,imagePosY-(posYDiff*round),cellWeight,cellHeight); // 1C
                      context.drawImage(image,imagePosX-posXDiff,imagePosY-(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 2C
                      context.drawImage(image,imagePosX-(posXDiff*round),imagePosY-posYDiff,cellWeight,cellHeight); // 3C
                      context.drawImage(image,imagePosX-(posXDiff*round),imagePosY,cellWeight,cellHeight); // 4C
                      context.drawImage(image,imagePosX-(posXDiff*round),imagePosY+posYDiff,cellWeight,cellHeight); // 5C
                      context.drawImage(image,imagePosX-posXDiff,imagePosY+(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 6C
                      context.drawImage(image,imagePosX,imagePosY+(posYDiff*round),cellWeight,cellHeight); // 7C
                      context.drawImage(image,imagePosX+posXDiff,imagePosY+(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 8C
                      context.drawImage(image,imagePosX+(posXDiff*round),imagePosY+posYDiff,cellWeight,cellHeight); // 9C
                      context.drawImage(image,imagePosX+(posXDiff*round),imagePosY,cellWeight,cellHeight); // 10C
                      context.drawImage(image,imagePosX+(posXDiff*round),imagePosY-posYDiff,cellWeight,cellHeight); // 11C
                      context.drawImage(image,imagePosX+posXDiff,imagePosY-(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 12C
                  } else if ( round == 3) {
                      console.log("Round: " + round + " Coordinate: 1D-18D");
                      context.drawImage(image,imagePosX,imagePosY-(posYDiff*round),cellWeight,cellHeight); // 1D
                      context.drawImage(image,imagePosX-posXDiff,imagePosY-((posYDiff*2)+(posYDiff-0.5)/2),cellWeight,cellHeight); // 2D
                      context.drawImage(image,imagePosX-(posXDiff*(round-1)),imagePosY-(posYDiff*2),cellWeight,cellHeight); // 3D
                      context.drawImage(image,imagePosX-(posXDiff*round),imagePosY-(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 4D
                      context.drawImage(image,imagePosX-(posXDiff*round),imagePosY-(posYDiff-0.5)/2,cellWeight,cellHeight); // 5D
                      context.drawImage(image,imagePosX-(posXDiff*round),imagePosY+(posYDiff-0.5)/2,cellWeight,cellHeight); // 6D
                      context.drawImage(image,imagePosX-(posXDiff*round),imagePosY+(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 7D
                      context.drawImage(image,imagePosX-(posXDiff*(round-1)),imagePosY+(posYDiff*2),cellWeight,cellHeight); // 8D
                      context.drawImage(image,imagePosX-posXDiff,imagePosY+((posYDiff*2)+(posYDiff-0.5)/2),cellWeight,cellHeight); // 9D
                      context.drawImage(image,imagePosX,imagePosY+(posYDiff*round),cellWeight,cellHeight); // 10D
                      context.drawImage(image,imagePosX+posXDiff,imagePosY+((posYDiff*2)+(posYDiff-0.5)/2),cellWeight,cellHeight); // 11D
                      context.drawImage(image,imagePosX+(posXDiff*(round-1)),imagePosY+(posYDiff*2),cellWeight,cellHeight); // 12D
                      context.drawImage(image,imagePosX+(posXDiff*round),imagePosY+(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 13D
                      context.drawImage(image,imagePosX+(posXDiff*round),imagePosY+(posYDiff-0.5)/2,cellWeight,cellHeight); // 14D
                      context.drawImage(image,imagePosX+(posXDiff*round),imagePosY-(posYDiff-0.5)/2,cellWeight,cellHeight); // 15D
                      context.drawImage(image,imagePosX+(posXDiff*round),imagePosY-(posYDiff+((posYDiff-0.5)/2)),cellWeight,cellHeight); // 16D
                      context.drawImage(image,imagePosX+(posXDiff*(round-1)),imagePosY-(posYDiff*2),cellWeight,cellHeight); // 17D
                      context.drawImage(image,imagePosX+posXDiff,imagePosY-((posYDiff*2)+(posYDiff-0.5)/2),cellWeight,cellHeight); // 18D
                  }
              }
          };
          image.src="../imgs/hex.png";
      </script>
    </body>
</html>
