<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <br>
    <div class="container">
        <div class="mb-3 row">
            <label for="staticName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" id="name" value="{{ isset($medico->name)?$medico->name:'' }}" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticArea" class="col-sm-2 col-form-label">Area</label>
            <div class="col-sm-10">
                <input type="text" name="area" id="area" value="{{ isset($medico->area)?$medico->area:'' }}" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticPatient" class="col-sm-2 col-form-label">Patient</label>
            <div class="col-sm-10">
                <input type="text" name="patient" id="patient" value="{{ isset($medico->patient)?$medico->patient:'' }}" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticRecipe" class="col-sm-2 col-form-label">Recipe</label>
            <div class="col-sm-10">
                <input type="text" name="recipe" id="recipe" value="{{ isset($medico->recipe)?$medico->recipe:'' }}" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticDate" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="text" name="date" id="date" value="{{ isset($medico->date)?$medico->date:'' }}" />
            </div>
        </div>
        <div class="mb-3 row">
            <button type="submit">Save</button>
        </div>
    </div>
</body>
</html>

