$(document)
    .ready(function() {
        var $password = $('#password'),
            $champ = $('.field'),
            $confirmation = $('#password_confirm');

        $confirmation.keyup(function(){
            if($(this).val() != $password.val()){ // si la confirmation est différente du mot de passe
                $(this).css({ // si tout est bon, on le rend vert
                    borderColor : 'red',
                    color : 'red'
                });
                $password.css({ // si tout est bon, on le rend vert
                    borderColor : 'rgba(34,36,38,.15)',
                    color : 'rgba(0,0,0,.87)'
                });
            }
            else{
                $(this).css({
                    borderColor : 'green',
                    color : 'green'
                });

                $password.css({
                    borderColor : 'green',
                    color : 'green'
                });
            }
        });


        $champ.keyup(function(){
            if($(this).val().length < 2){ // si la chaîne de caractères est inférieure à 2
                $(this).css({ // on rend le champ rouge
                    borderColor : 'red',
                    color : 'red'
                });
            }
            else{
                $(this).css({ // si tout est bon, on le rend vert
                    borderColor : 'green',
                    color : 'green'
                });
            }
        });
        $('.ui.form')
            .form({
                inline : true,
                on     : 'blur',
                fields : {

                    lastname: {
                        identifier  : 'lastname',
                        required: true,
                        rules: [
                            {
                                type   : 'empty',
                                prompt : 'Merci de rentrer votre nom'
                            },
                            {
                                type : 'regExp[/^[a-zA-Z]{2,}$/]',
                                prompt : 'Votre nom doit comporter que des lettres et avoir au moins 2 caractères'
                            }
                        ]
                    },
                    gender: {
                        identifier: 'gender',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : 'Merci de indiquer votre sexe'
                            }
                        ]
                    },
                    username: {
                        identifier  : 'username',
                        required: true,
                        rules: [
                            {
                                type   : 'empty',
                                prompt : 'Merci de rentrer un nom d\'utilisateur'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'length[' + 6 + ']',
                                prompt: 'Le mot de passe doit avoir au moins 8 caractères'
                            },
                            {
                                type: 'empty',
                                prompt : 'Merci de rentrer un mot de passe'
                            }
                        ]
                    },
                    password_confirm: {
                        identifier: 'password_confirm',
                        rules: [
                            {
                                type: 'match[password]',
                                prompt: 'Mot de passe de confirmation incorrect'
                            },
                            {
                                type: 'empty',
                                prompt : 'Merci de rentrer le mot de passe de confirmation'
                            }
                        ]
                    }
                }

            });
    });
