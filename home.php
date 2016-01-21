<html xmlns="http://www.w3.org/1999/html">
<head>

    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="library/jquery.min.js"></script>
    <script src="semantic/semantic.min.js"></script>
    <script style="text/javascript">
        $(document)
            .ready(function() {
                var $dropdown = $('.dropdown');
                $dropdown.dropdown();
            });
    </script>
</head>

<body>

<div class="ui middle aligned centered aligned grid">
    <div class="ui column">
        <div class="ui inline dropdown">

            <h2 class="ui header">
                <img class="ui tiny circular image" src="images/scare-large.png">
                <div class="content">Bienvenue Utilisateur
                <i class="dropdown icon"></i></div>
            </h2>

            <div class="menu">
                <a class="item" href="home.php"><i class="home icon"></i> Accueil</a>
                <a class="item" href="setting_account.php"><i class="edit icon"></i> Modification information</a>
                <a class="item" href="login.php"><i class="power icon"></i> Se déconnecter</a>
            </div>
        </div>
    </div>

    </div>

</div>
</body>
</html>