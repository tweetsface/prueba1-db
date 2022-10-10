<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
    <title>Colores</title>
</head>
<body>
    <header>
      <h3 class="text-center">Oprime alguno de los botones</h3> 
    </header> 
    <div class="container-sm d-flex justify-content-center">
        <div class="row">
              <div class="col-md-12 d-flex justify-content-center">
                  <button type="button" name="btnPHP" id="btnPHP" class="btn btn-outline-success">Consultar PHP</button>
                  <button type="button" name="btnJS" id="btnJS" class="btn btn-outline-warning">Consultar JS</button>
               </div>
        <div>
        <div id="decodeJSON" class="col-md-12 d-flex justify-content-center">
       </div>
    </div>
    <script type="text/javascript" src="/js/eventos.js"></script>
    <script type="text/javascript" src="/js/fileSaver.js"></script>
</body>
</html>