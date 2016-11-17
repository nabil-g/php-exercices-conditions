<?php

  $age = 24;
  $genre = "Homme";

  if ($age >= 18) {
    # code...
    if ($genre == "Homme") {
      # code...
      echo "Vous êtes un homme et vous êtes majeur";
    } else {
      # code...
      echo "Vous êtes une femme et vous êtes majeure";
    }

  }
  else {
    if ($genre == "Homme") {
      # code...
      echo "Vous êtes un homme et vous êtes mineur";
    }
    else {
      # code...
      echo "Vous êtes une femme et vous êtes mineure";
    }
  }

 ?>
