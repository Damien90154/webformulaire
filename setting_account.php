<html xmlns="http://www.w3.org/1999/html">
<head>

    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Formulaire Inscription</title>
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


<div class="ui text menu fixed">
    <div class="ui text content ">
        <div class="ui inline dropdown">

            <div class="ui item text large">
                <img class="ui tiny circular image" src="images/scare-large.png">
                Utilisateur
                <i class="dropdown icon"></i>
            </div>


            <div class="menu">
                <a class="item " href="home.php"><i class="home icon"></i> Accueil</a>
                <a class="item" href="setting_account.php"><i class="edit icon"></i> Modification information</a>
                <a class="item" href="login.php"><i class="power icon"></i> Se déconnecter</a>
            </div>
        </div>
    </div>
</div>

<div class="ui middle aligned centered aligned grid">
    <div class="ui column">
        <h2 class="ui header">
            <i class="edit icon"></i>
            <div class="content">
                <label>Modification compte</label>
            </div>
        </h2>

        <form class="ui form large">
            <div class="ui segment">
                <h4 class="ui header">Modifier vos information ci-dessous:
                <div class="sub header">
                   (Si vous ne voulez pas modifier le mot de passe,<br>merci de laisser les champ Mot de passe et confirmation du mot passe vide)
                </div>
                </h4>

                <div class="two fields">
                    <div class="field">
                        <label>Nom</label>
                        <input placeholder="Nom" name="lastname" type="text">
                    </div>
                    <div class="field">
                        <label>Sexe</label>
                        <div class="ui fluid search selection dropdown">
                            <input type="hidden" name="gender">
                            <i class="dropdown icon"></i>
                            <div class="default text">Sexe</div>
                            <div class="menu">
                                <div class="item" data-value="male"><i class="male icon"></i>Homme</div>
                                <div class="item" data-value="female"><i class="female icon"></i>Femme</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label>Mot de passe</label>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" id="password" placeholder="Mot de Passe">
                    </div>
                </div>
                <div class="field">
                    <label>Confirmation mot de passe</label>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input placeholder="Confirmation mot de passe" type="password" id="password_confirm" name="password_confirm">

                    </div>
                </div>

                <button class="ui fluid blue button " type="submit" >Modifier</button>

            </div>
        </form>
        <div class="field segment">
            <button class="ui fluid blue button " type="submit" id="ad_suppr">Supprimer le compte</button>

        </div>
    </div>
</div>

<div class="ui basic modal hidden">
    <div class="image close right aligned large">
        <i class="close icon "></i></div>
    <h2 class="header">
        <div class="image content ">
            <img class="ui small image " src="images/scare-large.png">
            <h2>Suppression du compte</h2>
        </div>

        <div class="description">
            <p>Voulez-vous supprimer définitivement votre compte?</p>
        </div>
    </h2>

    <div class="actions grid">

        <div class="ui red inverted button cancel " id="cancel">
            <i class="remove icon"></i>
            Non
        </div>

        <div class="ui green  inverted button ok " id="valid">
            <i class="checkmark icon"></i>
            Oui
        </div>

    </div>
</div>
<script style="text/javascript">
    $(document)
        .ready(function() {
            var $button_suppr = $('#ad_suppr');
              /*  $b_valid = $('#valid');*/

            $button_suppr.click(function(e){
                e.preventDefault();
                $('.ui.basic.modal')
                    .modal('show')
                ;
            });

        });
</script>
<script src="js/form_validation.js"></script>
</body>
</html>