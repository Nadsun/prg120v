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
  else if ($student == "j" || $svar == "J" || $svar == "ja" || $svar == "JA" || $svar == "Ja" and $barn == "j"|| $svar == "J" || $svar == "ja" || $svar == "JA" || $svar == "Ja")  
    {   
      print("Du gift og har barn, så hyggelig for deg da ");
    }
  else if ($gift == "j"|| $svar == "J" || $svar == "ja" || $svar == "JA" || $svar == "Ja" and $barn == "n"|| $svar == "N" || $svar == "nei" || $svar == "NEI" || $svar == "Nei")  
    {   
      print("Du er gift og har ikke bar, så sykt digg da");
    }
  else if ($gift == "n" || $svar == "N" || $svar == "nei" || $svar == "NEI" || $svar == "Nei" and $barn == "n" || $svar == "N" || $svar == "nei" || $svar == "NEI" || $svar == "Nei")
    {   
      print("Du er ikke gift og har ikke barn, så trist.. er du ikke ensom? ");
    }
  else if ($gift == "n"|| $svar == "N" || $svar == "nei" || $svar == "NEI" || $svar == "Nei" and $barn == "j"|| $svar == "J" || $svar == "ja" || $svar == "JA" || $svar == "Ja")
    {   
      print("Du er ikke gift, men du har barn.. Det er en synd, bare sier det. ");
    }
  else  
    {   
      print("Begge spørsmålene har ikke gyldige svar");
    }
?>