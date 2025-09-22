<?php  /* vis-alle-emner */
/*
/*  Programmet skriver ut alle registrerte studiumer og emner
*/
  include("db-tilkobling.php");  /* tilkobling til database-serveren utf�rt og valg av database foretatt */

  $sqlSetning="SELECT * FROM emne;";
  
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    /* SQL-setning sendt til database-serveren */
	
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  print ("<h3>Registrerte emner</h3>");
  print ("<table border=1>");  
  print ("<tr><th align=left>Emnekode</th> <th align=left>Emnenavn</th> <th align=left>Studiumnkode</th></tr>"); 

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $emnekode=$rad["emnekode"];        /* ELLER $postnr=$rad[0]; */
      $emnenavn=$rad["emnenavn"];    /* ELLER $poststed=$rad[1]; */
      $studiumkode=$rad["studiumkode"]; 

      print ("<tr> <td> $emnekode </td> <td> $emnenavn </td> <td> $studiumkode </td> </tr>");
    }
  print ("</table>"); 
?>
