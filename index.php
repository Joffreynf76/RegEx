<?php
$chaine = "abcdddd";
$recherche = "/abcd{,5}/";

if(preg_match($recherche,$chaine)){
    echo "Pattern trouvé";
} else {
    echo "Pattern non trouvé";
}

/*[[:lower:]]// minuscule
[[:upper:]] // majuscule
[[:alpha:]] // alphabetique
[[:digit:]] // digit [0-9]
[[:alnum:]] // chiffre et lettre
[[:ascii:]] // ascii
[[:blank:]] // espace ou tabulation
[[:punct:]] // imprimable sauf chiffre et lettre
[[:graph:]] // imprimable sauf espace
[[:space:]] // espace blanc
*/