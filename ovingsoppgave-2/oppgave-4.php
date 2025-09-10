<?php     /* Eksempel 4 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du gift (j/n) ?"
/*      og et svar på spørsmålet "Har du barn (j/n) ?"
/*    Programmet sjekker hva som er svart på spørsmålene og skriver ut en passende melding
*/
  $gift=$_POST ["gift"];
  $barn=$_POST ["barn"]; 
	
  if (!$gift or !$barn)  
    {   
      print("Du har ikke svart på begge spørsmålene, det skulle du ha gjort ");
    }
  else if ($gift == "j" || $gift == "J" || $gift == "ja" || $gift == "JA" || $gift == "Ja" and $barn == "j"|| $barn == "J" || $barn == "ja" || $barn == "JA" || $barn == "Ja")  
    {   
      print("Du gift og har barn, så hyggelig");
    }
  else if ($gift == "j"|| $gift == "J" || $gift == "ja" || $gift == "JA" || $gift == "Ja" and $barn == "n"|| $barn == "N" || $barn == "nei" || $barn == "NEI" || $barn == "Nei")  
    {   
      print("Du er gift og har ikke bar");
    }
  else if ($gift == "n" || $gift == "N" || $gift == "nei" || $gift == "NEI" || $gift == "Nei" and $barn == "n" || $barn == "N" || $barn == "nei" || $barn == "NEI" || $barn == "Nei")
    {   
      print("Du er ikke gift og har ikke barn");
    }
  else if ($gift == "n"|| $gift == "N" || $gift == "nei" || $gift == "NEI" || $gift == "Nei" and $barn == "j"|| $barn == "J" || $barn == "ja" || $barn == "JA" || $barn == "Ja")
    {   
      print("Du er ikke gift, men du har barn..");
    }
  else  
    {   
      print("Begge spørsmålene har ikke gyldige svar");
    }
?>