<?php

/** @author Mathilde */
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Register</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
</head>

<body>
    <div class="pageIndex">
    <nav>   
     <h1> <a href="index.php">Game of<br> Fraudes </a></h1>
   </nav>
    <div>
     <ul class="nav navbar-nav navbar-nav-first">
       <a href="profil.php" class=profilButton>PROFIL</a>
        </ul>
    </div>

        <section class="lp">

            <div class="textcenter">
                <p>Register</p>
                <br>
                <form class="formRegister">
                    <input name="Name_User" id="nameUser" type="text" minlength="2" maxlength="30" placeholder="Name_User" required /><br>
                    <input name="FirstName_User" id="FirstnameUser" type="text" minlength="2" maxlength="30" placeholder="FirstName" required /><br>
                    <input type="email" id="mailUser" name="Mail" placeholder="Email" required /><br>
                    <input type="tel" id="telUser" name="Tel" placeholder="Tel" required autocomplete="on" /><br>
                    <input type="password" id="passwordUser" name="password" placeholder="Password" minlength="6" required /><br>
                    
                    <!--Adresse-->
                    <input type="text" class="profil" id="inputRue" name="inputRue" placeholder="Adresse">   
                    <!--Suggestions API adresse-->
                    <div class="suggestions-container">
                        <ul class="adress-suggestions"></ul>
                    </div>         
                    <input type="text" class="profil" id="inputCodePostal" placeholder="Code Postal">
                    <input type="text" class="profil" id="inputVille" name="inputVille" placeholder="Ville">
                    <button id="submit" >Submit</button>
                </form>

            </div>



            <div class="lp__item stripe">
                <a href="../C/readPenality.action.php" class="stripe__item">
                    <p class="text_slide"> Penalities Tab </p>
                </a>
                <a href="../C/readDebt.action.php" class="stripe__item">
                    <p class="text_slide"> Debt Historique </p>
                </a>
                <a href="../C/readUser.action.php" class="stripe__item">
                    <p class="text_slide">User List </p>
                </a>
                <a href="../C/formDenounce.action.php" class="stripe__item">
                    <p class="text_slide"> Denounce </p>
                </a>
            </div>

        </section>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>

</body>
</html>

<script>
 
$(document).ready(function(){
    /*Autocompletion adresse API gouv*/
    $("#inputRue").keyup(function(event) {
        event.preventDefault();
        /*Déclarer variable avec id de l'input*/
        let rue = $("#inputRue").val();
        /*Requete*/
        $.get('https://api-adresse.data.gouv.fr/search/', {
            q: rue,
            limit: 5, /*Limite of suggestion*/
            autocomplete: 1
        }, function(data, status, xhr) {
            let suggestions = "";
            $.each(data.features, function(i, obj) {
                suggestions += '<li class="address-item" data-name="' + obj.properties.name + '" data-postcode="' + obj.properties.postcode + '" data-city="' + obj.properties.city + '">' + obj.properties.label + '</li>';
            });
            $('.adress-suggestions').html(suggestions);
        }, 'json').fail(function() {
            console.log("Error fetching address suggestions.");
        });
    });

    /*Afficher suggestions*/
    $('.adress-suggestions').on("click", ".address-item", function() {
        $("#inputRue").val($(this).attr("data-name"));
        $("#inputCodePostal").val($(this).attr("data-postcode"));
        $("#inputVille").val($(this).attr("data-city"));

        /*Vider champ suggestion*/
        $('.adress-suggestions').empty();
    });
 
    $("#submit").click(function(e){
        e.preventDefault();
 
            $.ajax({
            url:"../C/register.action.php",
            type:'POST',
			dataType: 'json', //text
            data: {
                Name_User : $("#nameUser").val(),  // Nous récupérons la valeur de nos inputs que l'on fait passer à register.action.php
                FirstName_User : $("#FirstnameUser").val(),
                Mail : $("#mailUser").val(),
                Tel : $("#telUser").val(),
                password : $("#passwordUser").val(),
                adresse : $("#inputRue").val(),
                codepostal : $("#inputCodePostal").val(),
                ville : $("#inputVille").val(), 
            },
            success:function(response){		
			 //var json = $.parseJSON(response);
				console.log(response);
				alert("Bienvenue " + response.FirstName_User + ' de ' + response.ville);
                $("form")[0].reset();
            },
			error:function(response){
                console.log('error');
				alert("error");

            }
			
        });
    });
});
 
</script>