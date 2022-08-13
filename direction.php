<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="DIRrobot.php" method="post">
    <button class="btn right" name="right">RIGHT &#10145;</button>
    <button class="btn left" name="left">LEFT &#11013;</button>
    <button class="btn front" name="front">FRONT &#11014;</button>
    <button class="btn back" name="back">BACK &#11015;</button>
    <button class="btn stop" name="stop">STOP &#9209;</button>
  </form>
    <style>
    body{
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Segoe UI", sans-serif;
  background: #111;
}

.btn{
  color: #fff;
  border: none;
  margin: 20px;
  padding: 20px 30px;
  font-size: 25px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 4px;
  cursor: pointer;
  border-radius: 5px;
  transition: 0.5s;
  transition-property: box-shadow;
}
.stop{
  background: #7f7d80;
  box-shadow: 0 0 25px #7f7d80;
}

.stop:hover{
  box-shadow: 0 0 5px #7f7d80,
              0 0 25px #7f7d80,
              0 0 50px #7f7d80,
              0 0 100px #7f7d80;
}

.right{
  background: #50A7FF;
  box-shadow: 0 0 25px #50A7FF;
  position: absolute;
  right: 100px

}

.right:hover{
  box-shadow: 0 0 5px #50A7FF,
              0 0 25px #50A7FF,
              0 0 50px #50A7FF,
              0 0 100px #50A7FF;
}

.left{
  background: #03D29F;
  box-shadow: 0 0 25px #03D29F;
  position: absolute;
  left: 100px
}

.left:hover{
  box-shadow: 0 0 5px #03D29F,
              0 0 25px #03D29F,
              0 0 50px #03D29F,
              0 0 100px #03D29F;
}

.front{
  background: #FF7675;
  box-shadow: 0 0 25px #FF7675;
  position: absolute;
  top: 50px
}

.front:hover{
  box-shadow: 0 0 5px #FF7675,
              0 0 25px #FF7675,
              0 0 50px #FF7675,
              0 0 100px #FF7675;
}

.back{
  background: #F0DF51;
  box-shadow: 0 0 25px #F0DF51;
  position: absolute;
  top: 450px
}

.back:hover{
  box-shadow: 0 0 5px #F0DF51,
              0 0 25px #F0DF51,
              0 0 50px #F0DF51,
              0 0 100px #F0DF51;
}
</style>
  </body>
</html>
