<?php  /* registrer-emne */

?> 

<h3>Registrer Emne </h3>

<form method="post" action="" id="registrerEmneSkjema" name="registrerEmneSkjema">
  Emnekode <input type="text" id="emnekode" name="emnekode" required /> <br/>
  Emnenavn <input type="text" id="emnenavn" name="emnenavn" required /> <br/>
 Studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
  <input type="submit" value="Registrer emne" id="registrerEmneKnapp" name="registrerEmneKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  if (isset($_POST ["registrerStudiumKnapp"]))
    {
      $emnekode=$_POST ["emnekode"];
      $emnenavn=$_POST ["emnenavn"];
      $studiumkode=$_POST ["studiumkode"];

      if (!$emnekode || !$emnenavn || !$studiumkode)
        {
          print ("B&aring;de studiumkode og studiumnavn m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM emne WHERE emnekode='$emnekode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader!=0)  /* poststedet er registrert fra før */
            {
              print ("Emnekode er registrert fra f&oslashr");
            }
          else
            {
              $sqlSetning="INSERT INTO emne VALUES('$emnekode','$emnenavn','$studiumkode');";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende studium er n&aring; registrert: $emnekode $emnenavn $studiumkode "); 
            }
        }
    }
?> 