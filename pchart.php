<?php
/********************************************
*********************************************
Developer:	Kalpataru Mallick
User Id:	kalpataru44
Skype Id:	kalpataru44
Twitter :   kalpataru44
Email Id:	kalpataru.mallick@gmail.com
Buy bot :	www.buy-bot.com
My Site :	www.kalpataru44.com
*********************************************
*********************************************/
?>

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load('visualization', '1', {packages: ['corechart']});
</script>
<script type="text/javascript">
    function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
            ['PL', 'Ratings'],
            <?php
                $name="Electricity";
                $expense=$e;                        
                echo "['{$name}', {$expense}],";
                
                $name="Garbage";
                $expense=$g;                   
                echo "['{$name}', {$expense}],";
                
                $name="Insurance";
                $expense=$mi;                     
                echo "['{$name}', {$expense}],";
                
                $name="Water";
                $expense=$w;                     
                echo "['{$name}', {$expense}],";

                $name="HOA";
                $expense=$h;                     
                echo "['{$name}', {$expense}],";

                $name="Property";
                $expense=$P_I;                     
                echo "['{$name}', {$expense}],";

                $name="Misc";
                $expense=$ome;                     
                echo "['{$name}', {$expense}],";

                $name="Taxes";
                $expense=$pt/12;                     
                echo "['{$name}', {$expense}],";                    
            ?>
        ]);
        
        var options = {
          title: 'Expenses Chart',
          is3D: true,
        };
        
        new google.visualization.PieChart(document.getElementById('visualization')).
        draw(data, options);
    }
    google.setOnLoadCallback(drawVisualization);
</script>