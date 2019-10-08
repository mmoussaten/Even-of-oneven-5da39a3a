<?php

    echo "Vul een getal in";
      $num1 = readLine("> ");
       $final = ($num1 % 2);
       if ($final == 0)
       {
           echo "Het getal is even";
         } else if($final == 1)
           {
             echo "Het getal is oneven";

           }