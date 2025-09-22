<?php  /* slett-poststed */
/*
/*  Programmet lager et skjema for å velge et poststed som skal slettes  
/*  Programmet sletter det valgte poststedet
*/
?> 

<script src="funksjoner.js"> </script>

<h3>Slett studium</h3>

<form method="post" action="" id="slettStudiumSkjema" name="slettStudiumSkjema" onSubmit="return bekreft()">
  Studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
  <input type="submit" value="Slett studium" name="slettStudiumKnapp" id="slettStudiumKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettStudiumKnapp"]))
    {	
      $studiumkode=$_POST ["studiumkode"];
	  
	  if (!$studiumkode)
        {
          print ("Studiumkode m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM studium WHERE studiumkode='$studiumkode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader==0)  /* poststedet er ikke registrert */
            {
              print ("Studiumkode finnes ikke");
            }
          else
            {	  
              $sqlSetning="DELETE FROM studiumkode WHERE studiumkode='$studiumkode';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
                /* SQL-setning sendt til database-serveren */
		
              print ("F&oslash;lgende studium er n&aring; slettet: $studiumkode  <br />");
            }
        }
    }
?> 