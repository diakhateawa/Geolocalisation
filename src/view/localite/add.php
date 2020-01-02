<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Geolocalisations</title>
    <script src="main.js"></script>
    <link rel ="stylesheet" type="text/css" media ="screen" href="public/css/bootstrap.min.css">



</head>
<body>
<div class =" nav navbar-primary">
    <ul class =" nav navbar-nav">
        <li><a href="localites">Gestions des geolocalisations</a></li>

    </ul>
</div>


<div class="container col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Formulaire de gestion des localites</div>
        <div class="panel-body">
            <form action="localiteController" method="POST">
                <div class="form-group">
                    <label class="control-label" for="nom">Nom de localite</label>
                    <input class="form-control" type="nom", name="nom", id="nom"/>
                </div>
                <div>
                    <label class="control-label" for="latitude">latitude de la localite</label>
                    <input  class="form-control" type="number", name="latitude", id="latitude"/>
                </div>
                <div>
                    <label class="control-label" for="longitude">Longitude de la localit</label>
                    <input  class="form-control" type="number", name="longitude", id="longitude"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit", name="envoyer", id="envoyer", value="Envoyer"/>
                    <input class="btn btn-danger" type="reset", name="annuler", id="annuler", value="annuler"/>
                </div>

            </form>
        </div>
    </div>
</div>



</body>
</html>