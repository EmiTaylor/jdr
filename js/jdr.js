var taille = 8;

$().ready(function() {
    // Generation du damier
    var damier = "";
    for (var i = 0; i < taille; i++)
    {
        damier += "<tr><td class=\"repere\">" + (i+1) + "</td>";
        for (var j = 0; j < taille; j++)
        {
            damier += "<td id=\"" + i + j + "\" class=\"d\"></td>";
        }
        damier += "</tr>";
    }
    $("#damier").append(damier);
    // Fin gen damier

    $("#71").html('<span class="glyphicon glyphicon-bishop" aria-hidden="true"></span>');
    $("#76").html('<span class="glyphicon glyphicon-bishop" aria-hidden="true"></span>');
    $("#70").html('<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>');
    $("#77").html('<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>');
    $("#74").html('<span class="glyphicon glyphicon-king" aria-hidden="true"></span>');
    $("#73").html('<span class="glyphicon glyphicon-queen" aria-hidden="true"></span>');
    $("#72").html('<span class="glyphicon glyphicon-knight" aria-hidden="true" style="transform: scaleX(-1);"></span>');
    $("#75").html('<span class="glyphicon glyphicon-knight" aria-hidden="true"></span>');
    $("#66").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#64").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#62").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#60").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#67").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#65").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#63").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#61").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');


    $("#43").html('<span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true" style="color:green;"></span>');

    $("#44").html('<span class="glyphicon glyphicon-tint" aria-hidden="true" style="color:#00AAFF;"></span>');

    $("#01").html('<span class="glyphicon glyphicon-bishop" aria-hidden="true"></span>');
    $("#06").html('<span class="glyphicon glyphicon-bishop" aria-hidden="true"></span>');
    $("#00").html('<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>');
    $("#07").html('<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>');
    $("#04").html('<span class="glyphicon glyphicon-king" aria-hidden="true"></span>');
    $("#03").html('<span class="glyphicon glyphicon-queen" aria-hidden="true"></span>');
    $("#02").html('<span class="glyphicon glyphicon-knight" aria-hidden="true" style="transform: scaleX(-1);"></span>');
    $("#05").html('<span class="glyphicon glyphicon-knight" aria-hidden="true"></span>');
    $("#16").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#14").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#12").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#10").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#17").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#15").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#13").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');
    $("#11").html('<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>');

    $("#loginbtn").click(function(){
        $.ajax({
             type:"GET",
             url:"ajax.php",
             dataType:"json",
             data: {"action": "login", "mail": $("#mail").val(), "password": $("#password").val()},
             success: function(msg) {
                  if(msg){
                      $("#log").fadeOut('fast', function() {
                           $(".creation_perso").delay(500).fadeIn('slow');
                      });
                  }
             }
        });
    });
    $("#Validbutun").click(function(){
        $.ajax({
             type:"GET",
             url:"ajax.php",
             dataType:"json",
             data: {"action": "creation_perso",
                    "nom" : $("#nom").val(),
                    "sexe": $("#sexe").val(),
                    "race": $("#race").val(),
                    "classe": $("#classe").val()},
             success: function(msg) {
                  if(msg){
                          $(".creation_perso").fadeOut('fast', function() {
                               $("#damier").delay(500).fadeIn('slow');
                          });
                }
            }

        });
    });
});
