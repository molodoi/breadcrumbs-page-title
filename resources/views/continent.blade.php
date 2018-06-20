<!DOCTYPE html>
<html>
<head>
<title>{{ pagetitle()->get() }}</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

 </head>
 <body>
 {{--  Pour afficher le fil d'Ariane dans le code de la vue continent, nous écrivons cet extrait: --}}
{{ Breadcrumbs::render('continent', $continent) }}

</body>
</html>