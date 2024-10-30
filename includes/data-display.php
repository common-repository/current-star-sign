<?php

/******************************
* data display
******************************/

echo "<div>";

include('cz_variables.php'); // Zodiac variables
	
switch ( date( "n" ) )
  {
      case 1 :
           echo date( "d" ) <= 20 ? "$capricorn" : "$aquarius"; // Aquarius: Jan 21 to Feb 19 
           break;

      case 2 :
           echo date( "d" ) <= 19 ? "$aquarius" : "$pisces"; // Pisces: Feb 20 to March 20 
           break;

      case 3 :
           echo date( "d" ) <= 20 ? "$pisces" : "$aries"; // Aries: March 21 to April 20
           break;

      case 4 :
           echo date( "d" ) <= 20 ? "$aries" : "$taurus"; // Taurus: April 21 to May 21
           break;

      case 5 :
           echo date( "d" ) <= 21 ? "$taurus" : "$gemini"; // Gemini: May 22 to June 21
           break;

      case 6 :
           echo date( "d" ) <= 21 ? "$gemini" : "$cancer"; // Cancer: June 22 to July 23
           break;

      case 7 :
           echo date( "d" ) <= 23 ? "$cancer" : "$leo"; // Leo: July 24 to Aug 23
           break;

      case 8 :
           echo date( "d" ) <= 23 ? "$leo" : "$virgo"; // Virgo: Aug 24 to Sept 23
           break;

      case 9 :
           echo date( "d" ) <= 23 ? "$virgo" : "$libra"; // Libra: Sept 24 to Oct 23
           break;

      case 10 :
           echo date( "d" ) <= 23 ? "$libra" : "$scorpio"; // Scorpio Oct 24 to Nov 22
           break;

      case 11 :
           echo date( "d" ) <= 22 ? "$scorpio" : "$sagittarius"; // Sagittarius: Nov 23 to Dec 22
           break;

      case 12 :
           echo date( "d" ) <= 22 ? "$sagittarius" : "$capricorn"; // Capricorn: Dec 23 to Jan 20
           break;
  }

echo "</div>";
?>