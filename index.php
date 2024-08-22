<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encriptación</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo">Encriptación</h1>
                <form method="post">
                    Clave<br><input type="text" name="clave">
                    <br><br>
                    Texto<br><textarea name="dato" rows="4" cols="45"></textarea>
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="boton" value="encriptar" size="40" >ENCRIPTAR</button>
                    <button type="submit" class="btn btn-info" name="boton" value="desencriptar" size="40" >DESENCRIPTAR</button>
                    <br><br>
                    <?php include "./acciones.php" ?>
                </form>
            </div>
            
        </div>
    </div>
	
	

    
</body>
</html>