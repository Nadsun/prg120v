<?php     /* Eksempel 3 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*    Programmet sjekker om det er svart j eller n på spørsmålet og skriver ut en passende melding
*/
  $svar=$_POST ["svar"];
	
  if (!$svar)  
    {
      print("Du har ikke svart på spørsmålet om du er student ");
    }
  else if ($svar == "j"|| $svar == "J" || $svar == "ja" || $svar == "JA" || $svar == "Ja" )  
    {
      print("Du har svart ja på spørsmålet om du er student ");
    }
  else if ($svar == "n"|| $svar == "N" || $svar == "nei" || $svar == "NEI" || $svar == "Nei") 
    {
      print("Du har svart nei på spørsmålet om du er student ");
    }
  else  
    {
      print("Du har ikke svart ja eller nei på spørsmålet om du er student ");
    }
?>