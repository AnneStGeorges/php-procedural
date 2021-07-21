<?php $bonnets=[['bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], ['bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], ['bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'], ['bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.']];
 $color = '';
 $prixTTC = null;
function calculPrixHT($prixTTC){
    return round($prixTTC  / 1.2, 2);
}

?>
<!DOCTYPE html>
<html lang="en">s
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Nos bonnets</h1>



<table>
    <tr>
        <td>Bonnet</td>
        <td>Prix HT</td>
        <td>Prix TTC</td>
        <td>Description</td>
    </tr>

    <?php
foreach ($bonnets as $bonnet) {
if($bonnet[1]<=12) {
    $color = 'green';
} else {
    $color = 'blue';
}

    echo " 
        <tr>
            <td>$bonnet[0]</td>
            <td> ".calculPrixHT($bonnet[1])." </td> 
            <td style='color:$color'> $bonnet[1]</td> 
            <td>$bonnet[2]</td> 
            
        </tr>
    ";
}
?>
</table>



</body>
</html>