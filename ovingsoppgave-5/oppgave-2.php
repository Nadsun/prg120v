<?php  /* registrer-emne */
/*
/*  Programmet lager et html-skjema for å registrere et poststed
/*  Programmet registrerer data (postnr og poststed) i databasen
*/
?> 

<h3>Registrer studium </h3>

<form method="post" action="" id="registrerStudiumSkjema" name="registrerStudiumSkjema">
  Studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
  Studiumnavn <input type="text" id="studiumnavn" name="studiumnavn" required /> <br/>
  <input type="submit" value="Registrer studium" id="registrerStudiumKnapp" name="registrerStudiumKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  if (isset($_POST ["registrerStudiumKnapp"]))
    {
      $studiumkode=$_POST ["studiumkode"];
      $studiumnavn=$_POST ["studiumnavn"];

      if (!$studiumkode || !$studiumnavn)
        {
          print ("B&aring;de studiumkode og studiumnavn m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM studium WHERE studiumkode='$studiumkode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader!=0)  /* poststedet er registrert fra før */
            {
              print ("Studiumkode er registrert fra f&oslashr");
            }
          else
            {
              $sqlSetning="INSERT INTO studium VALUES('$studiumkode','$studiumnavn');";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende studium er n&aring; registrert: $studiumkode $studiumnavn"); 
            }
        }
    }
?> 