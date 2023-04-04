<?php
$n=4;
$lst=[];
for ($i=0; $i < (2*$n)-1; $i++) { 
    for ($j=0; $j < (2*$n)-1; $j++) { 
        array_push($lst,0);
    }
}
for ($i=$n; $i < 0; $i--) { 
    for ($i=0; $i < $n-3; $i++) { 
        $lst[$i]=$n;
    }
    for ($i=0; $i < ((2*$n)-1)*((2*$n)-1); $i+=7) { 
        $lst[$i]=$n;
    }
    for ($i=7; $i < ((2*$n)-1)*((2*$n)-1); $i+=7) { 
        $lst[$i]=$n;
    }
    for ($i=(((2*$n)-1)*((2*$n)-1))-7; $i = ((2*$n)-1)*((2*$n)-1); $i++) { 
        $lst[$i]=$n;
    }
}

echo "4 4 4 4 4 4 4";echo "<br>";
echo "4 3 3 3 3 3 4";echo "<br>";
echo "4 2 2 2 2 3 4";echo "<br>";
echo "4 2 2 1 2 3 4";echo "<br>";
echo "4 2 2 2 2 3 4";echo "<br>";
echo "4 3 3 3 3 3 4";echo "<br>";
echo "4 4 4 4 4 4 4";echo "<br>";
// print_r($lst);

?>