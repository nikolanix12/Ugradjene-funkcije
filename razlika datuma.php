<?php

echo "Proslo je " .
    round((abs(time() - mktime("0", "0", "0", "1", "1", "2000"))/3600),2) .
    " sati od 1.1.2000.";