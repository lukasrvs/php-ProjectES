<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
/* Sticky Footer Classes */

html,
body {
  height: 100%;
}

#page-content {
  flex: 1 0 auto;
}

#sticky-footer {
  flex-shrink: none;
}
div.init {
    padding: 15vw 0vw 0vw 0vw;
}
div.init button {
    padding: 1vw;
}
/* Other Classes for Page Styling */

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}
</style>
<body class="d-flex flex-column">
    <div id="page-content">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1 class="font-weight-light mt-4 text-white">Sequencial Numeral</h1>
            <a href="index.html"><button class="btn btn-primary">VOLTAR</button></a>
          </div>
        </div>
        <div class="generator">
          <div class="panel-body" ondragover="overAction(event)" ondrop="dropAction(event)">
              <p>
              <?php
                $a=array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20");
                $random_keys=array_rand($a,10);
                echo $a[$random_keys[0]]."  /  ";
                echo $a[$random_keys[1]]."  /  ";
                echo $a[$random_keys[2]]."  /  ";
                echo $a[$random_keys[3]]."  /  ";
                echo $a[$random_keys[4]]."  /  ";
                echo $a[$random_keys[5]]."  /  ";
                echo $a[$random_keys[6]]."  /  ";
                echo $a[$random_keys[7]]."  /  ";
                echo $a[$random_keys[8]]."  /  ";
                echo $a[$random_keys[9]];
                ?></p>
          </div>
        </div>
        <div class="insert">
          <div class="panel-body">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
          </div>
        </div>
      </div>
    </div>
    
    <footer id="sticky-footer" class="py-4 bg-secondary text-white-50">
      <div class="container text-center">
        <small>Copyright &copy; github.com/lukasrvs</small>
      </div>
    </footer>
  </body>

  <script>
  function dragStart(event){
      event.dataTransfer.setData("text/plain", event.target.id);
      console.log("event.target.id", event.target.id);
  }
  function overAction(event){
      event.preventDefault();
  }

  function dropAction(event){
      event.preventDefault();
      const dado = event.dataTransfer.getData("text/plain");
      console.log("", event.target);
      const element = document.getElementById(dado);

      try{
          event.target.appendChild(element);
      }catch(error){
        console.error("Deu erro");
      }

      event.stopPropagation();
  }
  </script>
</html>