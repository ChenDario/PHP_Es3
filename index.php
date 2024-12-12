<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title> PHP Es3 </title>
</head>
<body>
    <div class="form">
        <form action="includes/formhandler.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label"> FirstName </label>
                <input type="text" class="form-control form-control-lg" id="firstname" placeholder="Firstname..." name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label"> LastName </label>
                <input type="text" class="form-control form-control-lg" id="lastname" placeholder="Lastname..." name="lastname">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="materia" id="informatica" value="informatica">
                <label class="form-check-label" for="informatica">
                    Informatica
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="materia" id="flexRadioDefault2" value="sistemi" checked>
                <label class="form-check-label" for="sistemi">
                    Sistemi e Reti
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="materia" id="tpsit" value="tpsit" checked>
                <label class="form-check-label" for="tpsit">
                    TPSIT
                </label>
            </div>
            
            <div class="div-btn p-5">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>