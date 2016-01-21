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

    <div class="ui middle aligned centered aligned grid ">
        <div class="ui column">
            <h2 class="ui header">
                <i class="signup icon"></i>
                <div class="content">
                   <label> Inscription</label>
                </div>
            </h2>

            <form class="ui form large">
              <div class="ui segment">
                <p>Veuillez rentrer vos information ci-dessous:</p>
                <div class="two fields">
                    <div class="required field">
                        <label>Nom</label>
                        <input placeholder="Nom" name="lastname" type="text">
                    </div>
                    <div class="required field">
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
                <div class="required field">
                    <label>Pseudo</label>
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="Pseudo">
                    </div>
                </div>

                <div class="required field">
                    <label>Mot de passe</label>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" id="password" placeholder="Mot de Passe">

                    </div>
                </div>
                <div class="required field">
                    <label>Confirmation mot de passe</label>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input placeholder="Confirmation mot de passe" type="password" id="password_confirm" name="password_confirm">

                    </div>

                </div>

                <button class="ui fluid blue button " type="submit">S'enregistrer</button>
              </div>
            </form>

        <div class="ui message centered grid">
            Déjà Utilisateur?  <a href="login.php">Se connecter</a>
        </div>
        </div>
    </div>

<script src="js/form_validation.js"></script>
</body>
</html>