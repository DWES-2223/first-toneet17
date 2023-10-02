<?php
    include_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>243.php</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract($_POST);
        if ($pesetes > 0){
            $euros = peseta2euros($pesetes);
            $pesetes = 0;
        } else {
            $pesetes = euro2pesetes($euros);
            $euros = 0;
        }
    } else {
        $pesetes = 0;
        $euros = 0;
    }
?>
<form method="post" action="243.php">
    <div class="form-group row">
        <label for="nom" class="col-4 col-form-label">Quantitat en pesetes</label>
        <div class="col-8">
            <div class="input-group">
                <input id="pesetes" name="pesetes" placeholder="Escribe la cantidad de pesetas" type="text"  class="form-control" value="<?= $pesetes ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nom" class="col-4 col-form-label">Quantitat en euros</label>
        <div class="col-8">
            <div class="input-group">
                <input id="euros" name="euros" placeholder="Escribe la cantidad de euros" type="text"  value="<?= $euros ?>" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</body>
</html>