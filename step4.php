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
<!doctype html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://lockdownrsvp.net/test/css/main.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="http://lockdownrsvp.net/test/js/main.js"></script>
    <title>Mortgage Calculator</title>   
</head>
<body>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

<?php
/*
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$address = $state = $city = $zip = $PT = $MLS = $ ;
*/
?>
<?php
$PP = $PCC = $RC = $TPC = $ARV =$DP =$DPP=$LA=$PTC=$PTCT=$OCL=$n=$il=$i=$pow1=$P_I=$TCN=$GI=$OI=$TMI=$ME=$CF=$NOI=$PFCR=$COC=$PCP=$IER=$TIE=$GRM=$DCR=$e=$w=$s=$g=$h=$mi=$ome=$pt=$vr=$rm=$cap=$pm=0;
$title=$address=$city=$state=$zip=$bedrooms=$bathrooms="";
$IINC=$Y1=$Y2=$Y3=$Y4=$Y10=$Y20=$Y30=$EINC=$TAE1=$TAE2=$TAE3=$TAE4=$TAE10=$TAE20=$TAE30=$MP=$TAC1=$TAC2=$TAC3=$TAC4=$TAC10=$TAC20=$TAC30=$OE1=$OE2=$OE3=$OE4=$OE10=$OE20=$OE30=$COC1=$COC2=$COC3=$COC4=$COC10=$COC20=$COC30=$PVINC=$PV1=$PV2=$PV3=$PV4=$PV10=$PV20=$PV30 =0; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST['title']))
        $title=$_POST['title'];
    if(!empty($_POST['address']))
        $address=$_POST['address'].", ";
    if(!empty($_POST['city']))
        $city=$_POST['city'].", ";
    if(!empty($_POST['state']))
        $state=$_POST['state'].", ";
    if(!empty($_POST['zip']))
        $zip=$_POST['zip'];
    if(!empty($_POST['bedrooms']))
        $bedrooms=$_POST['bedrooms']." bedrooms, ";
    if(!empty($_POST['bathrooms']))
        $bathrooms=$_POST['bathrooms']." bathrooms";
   
    if(!empty($_POST['pp']))
        $PP=$_POST['pp'];
    if(!empty($_POST['pcc']))
        $PCC=$_POST['pcc'];
    if(!empty($_POST['rc']))
        $RC=$_POST['rc'];
    if(!empty($_POST['arv']))    
        $ARV=$_POST['arv'];
    if(!empty($_POST['dp']))
        $DP=$_POST['dp']/100;
    if(!empty($_POST['la']))
        $LA=$_POST['la'];
    if(!empty($_POST['ptc']))
        $PTC=$_POST['ptc']/100;
    if(!empty($_POST['ocl']))
        $OCL=$_POST['ocl'];
    if(!empty($_POST['n']))
        $n=$_POST['n'];
    if(!empty($_POST['i']))
        $i=$_POST['i']/100;
    if(!empty($_POST['gi']))
        $GI=$_POST['gi'];
    if(!empty($_POST['oi']))
        $OI=$_POST['oi'];
    
    if(!empty($_POST['e']))
        $e=$_POST['e'];
    if(!empty($_POST['w']))
        $w=$_POST['w'];
    if(!empty($_POST['s']))
        $s=$_POST['s'];
    if(!empty($_POST['g']))
        $g=$_POST['g'];
    if(!empty($_POST['h']))
        $h=$_POST['h'];
    if(!empty($_POST['mi']))
        $mi=$_POST['mi'];
    if(!empty($_POST['ome']))
        $ome=$_POST['ome'];
    if(!empty($_POST['pt']))
        $pt=$_POST['pt']; 
    if(!empty($_POST['vr']))
        $vr=$_POST['vr']/100; 
    if(!empty($_POST['rm']))
        $rm=$_POST['rm']/100;
    if(!empty($_POST['cap']))
        $cap=$_POST['cap']/100;
    if(!empty($_POST['pm']))
        $pm=$_POST['pm']/100;  

    if(!empty($_POST['iinc']))
        $IINC=$_POST['iinc']/100;
    if(!empty($_POST['einc']))
        $EINC=$_POST['einc']/100;
    if(!empty($_POST['pvinc']))
        $PVINC=$_POST['pvinc']/100;
    
    $TPC=$PP + $PCC + $RC;   
    $DPP=round($PP * $DP, 2);
    
    if(isset($_POST['cp'])){
        $LA=0;
        $PTCT=0;
        $OCL=0;
        
        $n=0;
        $il=0;
        $P_I=0;
        $TCN=$TPC;
    }else{
        $LA=$LA;
        $PTCT=round($LA * $PTC, 2);
        $OCL=$OCL;
        if($_POST['fees']=="loan"){
            if($_POST['interest']=="no"){               
                $il=$i + $PTC;
                $pow1=round(pow(1+($i/12),-(12*$n)),2);
                $P_I=round((($i/12)*( $LA + $PTCT + $OCL))/(1-pow(1+($i/12),-(12*$n))), 2); 
                $TCN=$DPP+$PCC+$RC;                
            }else{
                $n=0;
                $il=$i + $PTC;
                $P_I=round(($LA*$i)/12,2);
                $TCN=$DPP+$PCC+$RC;
            }
        }else{
            if($_POST['interest']=="no"){
                $il=$i;
                $pow1=round(pow(1+($i/12),-(12*$n)), 2);
                $P_I=round((($i/12)*( $LA))/(1-pow(1+($i/12),-(12*$n))), 2);   
                $TCN=$DPP+$PCC+$RC+$PTC+$OCL;
            }else{
                $n=0;
                $il=$i;
                $P_I=round(($LA*$i)/12,2);
                $TCN=$DPP+$PCC+$RC+$PTC+$OCL;
            }        
        }
    }
    /*
    $il=round($i + $PTC, 2);
    $pow1=round(pow(1+($i/12),-(12*$n)), 2);
    $P_I=round((($i/12)*( $LA + $PTCT + $OCL))/(1-$pow1), 2);
    $TCN=round($DPP+$PCC+$RC, 2);
    */
    $TMI=round($GI + $OI, 2);
    $ME=round($P_I + $e + $w + $s + $g + $h + $mi + $ome + ($pt/12)+($vr*$GI)+($rm*$GI)+($cap*$GI)+($pm*$GI), 2);
    $CF=$TMI - $ME;
    $NOI=round(($CF + $P_I)*12, 2);
    $PFCR=round(($NOI/$ARV)*100, 2);
    $COC=round(((12*$CF)/$TCN)*100, 2);
    $PCP=round(($NOI/$PP)*100, 2);
    $IER=round(($TMI/$PP)*100, 2);
    $TIE=round($ARV-$LA, 2);
    $GRM=round($PP/($TMI*12), 2);
    $DCR=round(($NOI/12)/$P_I, 2);

         
    $Y1=round($TMI*12, 2);
    $Y2=round($Y1*(1+$IINC), 2);
    $Y3=round($Y1*pow(1+$IINC,2), 2);
    $Y4=round($Y1*pow(1+$IINC,3), 2);
    $Y10=round($Y1*pow(1+$IINC,9), 2);
    $Y20=round($Y1*pow(1+$IINC,19), 2);
    $Y30=round($Y1*pow(1+$IINC,29), 2);
        
    $TAE1=round($ME*12, 2);
    $TAE2=round($TAE1*(1+$EINC), 2);
    $TAE3=round($TAE1*pow(1+$EINC,2), 2);
    $TAE4=round($TAE1*pow(1+$EINC,3), 2);
    $TAE10=round($TAE1*pow(1+$EINC,9), 2);
    $TAE20=round($TAE1*pow(1+$EINC,19), 2);
    $TAE30=round($TAE1*pow(1+$EINC,29), 2);
    
    $MP=round($P_I*12, 2);
    
    $TAC1=$Y1-$TAE1;
    $TAC2=$Y2-$TAE2;
    $TAC3=$Y3-$TAE3;
    $TAC4=$Y4-$TAE4;
    $TAC10=$Y10-$TAE10;
    $TAC20=$Y20-$TAE20;
    $TAC30=$Y30-$TAE30;
    
    $OE1=$TAE1-$MP;
    $OE2=$TAE2-$MP;
    $OE3=$TAE3-$MP;
    $OE4=$TAE4-$MP;
    $OE10=$TAE10-$MP;
    $OE20=$TAE20-$MP;
    $OE30=$TAE30-$MP;
    
    $COC1=round(($TAC1/$TCN)*100, 2);
    $COC2=round(($TAC2/$TCN)*100, 2);
    $COC3=round(($TAC3/$TCN)*100, 2);
    $COC4=round(($TAC4/$TCN)*100, 2);
    $COC10=round(($TAC10/$TCN)*100, 2);
    $COC20=round(($TAC20/$TCN)*100, 2);
    $COC30=round(($TAC30/$TCN)*100, 2);
    
    $PV1=round($ARV, 2);
    $PV2=round($ARV*(1+$PVINC), 2);
    $PV3=round($ARV*pow(1+$PVINC,2), 2);
    $PV4=round($ARV*pow(1+$PVINC,3), 2);
    $PV10=round($ARV*pow(1+$PVINC,9), 2);
    $PV20=round($ARV*pow(1+$PVINC,19), 2);
    $PV30=round($ARV*pow(1+$PVINC,29), 2);
}
?>

<form method="POST" name="pdf" id="pdf" action="pdf.php">
<input type="hidden" name="IINC" id="" value="<?php echo $IINC;?>">
<input type="hidden" name="EINC" id="" value="<?php echo $EINC;?>">
<input type="hidden" name="PVINC" id="" value="<?php echo $PVINC;?>">
    
<div class="mainContainer">
    <div class="calcName">Mortgage Calculator</div>
    <div class="box">
        <div class="box1">
            <div id="circle41" class="circle">1</div>
            <div class="box2">Property Info</div>
        </div>
        <div class="box1">
            <div id="circle42" class="circle">2</div>
            <div class="box2">Purchase Info</div>
        </div>
        <div class="box1">
            <div id="circle43" class="circle">3</div>
            <div class="box2">Rental Info</div>
        </div>   
        <div class="box4">
            <div id="circle44" class="circle circle-blue">4</div>
            <div class="box2">Results</div>
        </div>          
    </div>
    
    <div id="" name="step4" class="mainDiv">
        <div class="inlineBlock2"><h3><b><?php echo $title;?></h3></b></div>
        <input type="hidden" name="title" id="" value="<?php echo $title;?>">
        <br/>
        <div class="inlineBlock2"><h4><b><?php echo $address;?></h4></b></div>
        <input type="hidden" name="address" id="" value="<?php echo $address;?>">
        <div class="inlineBlock2"><h4><b><?php echo $city;?> </h4></b></div>
        <input type="hidden" name="city" id="" value="<?php echo $city;?>">
        <div class="inlineBlock2"><h4><b><?php echo $state;?> </h4></b></div>
        <input type="hidden" name="state" id="" value="<?php echo $state;?>">
        <div class="inlineBlock2"><h4><b><?php echo $zip;?></h4></b></div>
        <input type="hidden" name="zip" id="" value="<?php echo $zip;?>">
        <br/>
        <div class="inlineBlock2"><h5><?php echo $bedrooms;?> </h5></div>
        <input type="hidden" name="bedrooms" id="" value="<?php echo $bedrooms;?>">
        <div class="inlineBlock2"><h5><?php echo $bathrooms;?> </h5></div>
        <input type="hidden" name="bathrooms" id="" value="<?php echo $bathrooms;?>">
        <br/><br/>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $photo_count=$_POST['photo_count'];
                for($i=0;$i<$photo_count;$i++){
                    if ((($_FILES["userfile"]["type"][$i] == "image/gif")
                        || ($_FILES["userfile"]["type"][$i] == "image/jpeg")
                        || ($_FILES["userfile"]["type"][$i] == "image/pjpeg")
                        || ($_FILES["userfile"]["type"][$i] == "image/png"))
                        && ($_FILES["userfile"]["size"][$i] < 2000000)){
                        if ($_FILES["userfile"]["error"][$i] > 0)
                        {
                            //echo "File Error : " . $_FILES["userfile"]["error"][$i] . "<br />";
                        }else {
                                move_uploaded_file($_FILES["userfile"]["tmp_name"][$i],"images/". $_FILES["userfile"]["name"][$i]);
        ?>        
                                <div id="" class="inlineBlock2 photo">
                                    <img src="images/<?php echo $_FILES["userfile"]["name"][$i]; ?>" width="140" height="150" alt="" >
                                </div>
        <?php
                        }
                    }
                }
            }
        ?>         
        <br/><br/>
        <div class="hrline2"></div>
        <table width="100%"><tr><td>
        <div id="" name="" class="box41">
            <span class="float-left">Purchase Price:</span>
            <span class="float-right">$<?php echo $PP;?></span>
            <input type="hidden" name="PP" id="" value="<?php echo $PP;?>">
            <br/><br/>
            <span class="float-left">Purchase Closing Costs:</span>
            <span class="float-right">$<?php echo $PCC;?></span>
            <input type="hidden" name="PCC" id="" value="<?php echo $PCC;?>">
            <br/><br/>
            <span class="float-left">Estimated Repairs:</span>
            <span class="float-right">$<?php echo $RC;?></span>
            <input type="hidden" name="RC" id="" value="<?php echo $RC;?>">
            <br/><br/>
            <span class="float-left">Total Project Cost:</span>
            <span class="float-right">$<?php echo $TPC;?></span>
            <input type="hidden" name="TPC" id="" value="<?php echo $TPC;?>">
            <br/><br/>
            <span class="float-left">After Repair Value:</span>
            <span class="float-right">$<?php echo $ARV;?></span>
            <input type="hidden" name="ARV" id="" value="<?php echo $ARV;?>">
            <br/><br/>
            <span class="float-left">Down Payment:</span>
            <span class="float-right">$<?php echo $DPP;?></span>
            <input type="hidden" name="DPP" id="" value="<?php echo $DPP;?>">
            <br/><br/>
            <span class="float-left">Loan Amount:</span>
            <span class="float-right">$<?php echo $LA;?></span>
            <input type="hidden" name="LA" id="" value="<?php echo $LA;?>">
            <br/><br/>
            <span class="float-left">Loan Points:</span>
            <span class="float-right">$<?php echo $PTCT;?></span>
            <input type="hidden" name="PTCT" id="" value="<?php echo $PTCT;?>">
            <br/><br/>
            <span class="float-left">Loan Fees:</span>
            <span class="float-right">$<?php echo $OCL;?></span>
            <input type="hidden" name="OCL" id="" value="<?php echo $OCL;?>">
            <br/><br/>
            <span class="float-left">Loan Interest Rate:</span>
            <span class="float-right"><?php echo $il*100;?>%</span>
            <input type="hidden" name="il" id="" value="<?php echo $il;?>">
            <br/><br/>
            <span class="float-left">Monthly P& I:</span>
            <span class="float-right">$<?php echo $P_I;?></span>
            <input type="hidden" name="P_I" id="" value="<?php echo $P_I;?>">
            <br/><br/>
            <span class="float-left">Total Cash Needed</span>
            <span class="float-right">$<?php echo $TCN;?></span>
            <input type="hidden" name="TCN" id="" value="<?php echo $TCN;?>">
            <br/><br/><br/>
        </div>
        </td><td>        
        <div class="box42">
            <div id="" name="" class="box43">
                <div id="" name="" class="box44">
                    <span class="float-left">Monthly Income:</span><br/>
                    <span class="float-left">$<?php echo $TMI;?></span>
                    <input type="hidden" name="TMI" id="" value="<?php echo $TMI;?>">                    
                </div>
                <div id="" name="" class="box44"> 
                    <span class="float-left margin20">Monthly Expenses:</span><br/>
                    <span class="float-left margin20">$<?php echo $ME;?></span> 
                    <input type="hidden" name="ME" id="" value="<?php echo $ME;?>">
                </div>
                <div id="" name="" class="box44"> 
                    <span class="float-left margin20">Monthly Cashflow:</span><br/>
                    <span class="float-left margin20">$<?php echo $CF;?></span>
                    <input type="hidden" name="CF" id="" value="<?php echo $CF;?>">
                </div>
                <div id="" name="" class="box44"> 
                    <span class="float-left margin20">Pro Forma Cap Rate:</span><br/>
                    <span class="float-left margin20"><?php echo $PFCR;?>%</span>
                    <input type="hidden" name="PFCR" id="" value="<?php echo $PFCR;?>">
                </div>
                <div id="" name="" class="box44">   
                    <span class="float-left">NOI:</span><br/>
                    <span class="float-left">$<?php echo $NOI;?></span>
                    <input type="hidden" name="NOI" id="" value="<?php echo $NOI;?>">
                </div>
                <div id="" name="" class="box44">   
                    <span class="float-left margin20">Total Cash Needed:</span><br/>
                    <span class="float-left margin20">$<?php echo $TCN;?></span>
                    <input type="hidden" name="TCN" id="" value="<?php echo $TCN;?>">
                </div>
                <div id="" name="" class="box44">  
                    <span class="float-left margin20">Cash on Cash ROI:</span><br/>
                    <span class="float-left margin20"><?php echo $COC;?>%</span>
                    <input type="hidden" name="COC" id="" value="<?php echo $COC;?>">
                </div>
                <div id="" name="" class="box44"> 
                    <span class="float-left margin20">Purchase Cap Rate:</span><br/>
                    <span class="float-left margin20"><?php echo $PCP;?>%</span> 
                    <input type="hidden" name="PCP" id="" value="<?php echo $PCP;?>">
                </div>                 
            </div>
            <br/>
            <?php include 'pchart.php';?>
            <div id="visualization" class="pchart3d">
            </div>            
        </div>        
        </td>
        </tr></table>
        <br/>
        <div class="inlineBlock2"><h4>Financial Info</h4></div>
        <div class="inlineBlock2 hrline3"></div>
        <br/><br/> 
        <div class="box46">
            <span class="float-left">Income-Expense Ratio:</span><br/>
            <span class="float-left"><?php echo $IER;?>%</span> 
            <input type="hidden" name="IER" id="" value="<?php echo $IER;?>%">
        </div>
        <div class="box46">
            <span class="float-left">Total Initial Equity:</span><br/>
            <span class="float-left">$<?php echo $TIE;?></span>  
            <input type="hidden" name="TIE" id="" value="<?php echo $TIE;?>">
        </div>
        <div class="box46">
            <span class="float-left">Gross Rent Multiplier:</span><br/>
            <span class="float-left"><?php echo $GRM;?></span> 
            <input type="hidden" name="GRM" id="" value="<?php echo $GRM;?>">
        </div>
        <div class="box46">
            <span class="float-left">Debt Coverage Ratio:</span><br/>
            <span class="float-left"><?php echo $DCR;?>%</span>  
            <input type="hidden" name="DCR" id="" value="<?php echo $DCR;?>%">
        </div> 
        <br/><br/><br/><br/>        
        <div class="inlineBlock2"><h4>Analysis Over Time</h4></div>
        <div class="inlineBlock2 hrline4"></div>
        <br/><br/><br/>
        <table class="table2">
            <tr>
                <th></th>
                <th class="th">Year 1</th>
                <th class="th">Year 2</th>
                <th class="th">Year 3</th>
                <th class="th">Year 4</th>
                <th class="th">Year 10</th>
                <th class="th">Year 20</th>
                <th class="th">Year 30</th>                
            </tr>
            <tr>
                <td>Total Annual Income</td>
                <td>$<?php echo $Y1;?></td>
                <td>$<?php echo $Y2;?></td>
                <td>$<?php echo $Y3;?></td>
                <td>$<?php echo $Y4;?></td>
                <td>$<?php echo $Y10;?></td>
                <td>$<?php echo $Y20;?></td>
                <td>$<?php echo $Y30;?></td>
            </tr>
            <tr>
                <td>Total Annual Expenses</td>
                <td>$<?php echo $TAE1;?></td>
                <td>$<?php echo $TAE2;?></td>
                <td>$<?php echo $TAE3;?></td>
                <td>$<?php echo $TAE4;?></td>
                <td>$<?php echo $TAE10;?></td>
                <td>$<?php echo $TAE20;?></td>
                <td>$<?php echo $TAE30;?></td>
            </tr>
            <tr>
                <td>Operating Expenses</td>
                <td>$<?php echo $OE1;?></td>
                <td>$<?php echo $OE2;?></td>
                <td>$<?php echo $OE3;?></td>
                <td>$<?php echo $OE4;?></td>
                <td>$<?php echo $OE10;?></td>
                <td>$<?php echo $OE20;?></td>
                <td>$<?php echo $OE30;?></td>
            </tr>
            <tr>
                <td>Mortgage Payment</td>
                <td>$<?php echo $MP;?></td>
                <td>$<?php echo $MP;?></td>
                <td>$<?php echo $MP;?></td>
                <td>$<?php echo $MP;?></td>
                <td>$<?php echo $MP;?></td>
                <td>$<?php echo $MP;?></td>
                <td>$<?php echo $MP;?></td>
            </tr>
            <tr>
                <td>Total Annual Cashflow</td>
                <td>$<?php echo $TAC1;?></td>
                <td>$<?php echo $TAC2;?></td>
                <td>$<?php echo $TAC3;?></td>
                <td>$<?php echo $TAC4;?></td>
                <td>$<?php echo $TAC10;?></td>
                <td>$<?php echo $TAC20;?></td>
                <td>$<?php echo $TAC30;?></td>
            </tr>
            <tr>
                <td>Cash on Cash ROI</td>
                <td><?php echo $COC1;?>%</td>
                <td><?php echo $COC2;?>%</td>
                <td><?php echo $COC3;?>%</td>
                <td><?php echo $COC4;?>%</td>
                <td><?php echo $COC10;?>%</td>
                <td><?php echo $COC20;?>%</td>
                <td><?php echo $COC30;?>%</td>
            </tr>
            <tr>
                <td>Property Value</td>
                <td>$<?php echo $PV1;?></td>
                <td>$<?php echo $PV2;?></td>
                <td>$<?php echo $PV3;?></td>
                <td>$<?php echo $PV4;?></td>
                <td>$<?php echo $PV10;?></td>
                <td>$<?php echo $PV20;?></td>
                <td>$<?php echo $PV30;?></td>
            </tr>           
        </table>
        <br/><br/>  
        <button type="button" name="editForm" id="editForm" class="btn btn-default btn-left"><b>Edit Form</b></button>       
        <button type="submit" name="createPDF" id="createPDF" class="btn btn-success btn-right"><b>Create PDF</b></button>       
        <br/><br/><br/>
    </div> 
    </form>    
    <span class="float-middle">Notice any errors or mistakes? <a href="">Send us an email</a>!</span>
    <br/><br/><br/>
</div>  
</body>