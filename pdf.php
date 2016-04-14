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

define('FPDF_FONTPATH', 'font/');
require('fpdf.php');

class PDF extends FPDF
{
function Header2($title,$address)
{
    $this->Image('logo.jpg',10,10,50);
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    $this->Cell(40,10,$title,0,0,'C');
    $this->Ln(8);
    $this->Cell(60);
    $this->SetFont('Times','B',10);    
    $this->Cell(80,10,$address,0,0,'C');
    $this->Ln(10);     
    $this->SetFillColor(0,0,255);   
    $this->Cell(0,1,"",0,0,'C',true);
    $this->Ln(5);
}

function DrawLine2( ){
    $this->SetFillColor(255,0,0);
    $this->Cell(150,5,"",0,2,'C',true);
}

function LoadData($file)
{
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}

// Better table
function ImprovedTable($header, $data)
{
    // Column widths
    $w = array(40, 35, 40, 45);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(36, 22, 22, 22, 22, 22, 22, 22);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('','',9);
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
        $this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
        $this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
        $this->Cell($w[5],6,$row[5],'LR',0,'L',$fill);
        $this->Cell($w[6],6,$row[6],'LR',0,'L',$fill);
        $this->Cell($w[7],6,$row[7],'LR',0,'L',$fill);
        $this->Ln();
        $fill=!$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$PP = $PCC = $RC = $TPC = $ARV =$DPP =$LA=$PTCT=$OCL=$n=$il=$i=$pow1=$P_I=$TCN=$GI=$TMI=$ME=$CF=$NOI=$PFCR=$COC=$PCP=$IER=$TIE=$GRM=$DCR =0;
$title=$address=$city=$state=$zip=$bedrooms=$bathrooms="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title=$_POST['title'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $bedrooms=$_POST['bedrooms'];
    $bathrooms=$_POST['bathrooms'];
    
    $PP=$_POST['PP'];
    $PCC=$_POST['PCC'];
    $RC=$_POST['RC'];
    $TPC=$_POST['TPC'];
    $ARV=$_POST['ARV'];
    $DPP=$_POST['DPP'];
    $LA=$_POST['LA'];
    $PTCT=$_POST['PTCT'];
    $OCL=$_POST['OCL'];
    $il=$_POST['il'];
    $P_I=$_POST['P_I'];
    $TCN=$_POST['TCN'];
    $TMI=$_POST['TMI'];
    $ME=$_POST['ME'];
    $CF=$_POST['CF'];
    $NOI=$_POST['NOI'];
    $PFCR=$_POST['PFCR'];
    $COC=$_POST['COC'];
    $PCP=$_POST['PCP'];
    $IER=$_POST['IER'];
    $TIE=$_POST['TIE'];
    $GRM=$_POST['GRM'];
    $DCR=$_POST['DCR'];
}
$IINC=$Y1=$Y2=$Y3=$Y4=$Y10=$Y20=$Y30=$EINC=$TAE1=$TAE2=$TAE3=$TAE4=$TAE10=$TAE20=$TAE30=$MP=$TAC1=$TAC2=$TAC3=$TAC4=$TAC10=$TAC20=$TAC30=$OE1=$OE2=$OE3=$OE4=$OE10=$OE20=$OE30=$COC1=$COC2=$COC3=$COC4=$COC10=$COC20=$COC30=$PVINC=$PV1=$PV2=$PV3=$PV4=$PV10=$PV20=$PV30 =0;        
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $IINC=$_POST['IINC'];
    $EINC=$_POST['EINC'];    
    $PVINC=$_POST['PVINC'];
    
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

$sr1='Purchase Price:           '.$PP; 
$sr2='Purchase Closing Costs:   '.$PCC; 
$sr3='Estimated Repairs:        '.$RC; 
$sr4='Total Project Cost:       '.$TPC; 
$sr5='After Repair Value:       '.$ARV; 
$sr6='Down Payment:             '.$DPP; 
$sr7='Loan Amount:              '.$LA; 
$sr8='Loan Points:              '.$PTCT; 
$sr9='Loan Fees:                '.$OCL; 
$sr10='Loan Interest Rate:      '.$il; 
$sr11='Monthly P& I:            '.$P_I; 
$sr12='Total Cash Needed:       '.$TCN;

$pdf=new PDF();
$pdf->AddPage();
$address=$address.$state.$city.$zip;
$pdf->Header2($title,$address); 
$pdf->SetFont('Arial','',10);

$pdf->Cell(40,6,"Purchase Price",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$PP,0);
$pdf->Ln();
$pdf->Cell(40,6,"Purchase Closing Costs",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$PCC,0);
$pdf->Ln();
$pdf->Cell(40,6,"Estimated Repairs",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$RC,0);
$pdf->Ln();
$pdf->Cell(40,6,"Total Project Cost",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$TPC,0);
$pdf->Ln();
$pdf->Cell(40,6,"After Repair Value",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$ARV,0);
$pdf->Ln();
$pdf->Cell(40,6,"Down Payment",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$DPP,0);
$pdf->Ln();
$pdf->Cell(40,6,"Loan Amount",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$LA,0);
$pdf->Ln();
$pdf->Cell(40,6,"Loan Points",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$PTCT,0);
$pdf->Ln();
$pdf->Cell(40,6,"Loan Fees",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$OCL,0);
$pdf->Ln();
$pdf->Cell(40,6,"Loan Interest Rate",0);
$pdf->Cell(5,6,":",0);
$a=$il*100;
$pdf->Cell(40,6,$a."%",0);
$pdf->Ln();
$pdf->Cell(40,6,"Monthly P& I",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$P_I,0);
$pdf->Ln();
$pdf->Cell(40,6,"Total Cash Needed",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$TCN,0);
$pdf->Ln();

$tr1='Monthly Income:           '.$TMI; 
$tr2='Monthly Expenses:         '.$ME; 
$tr3='Monthly Cashflow:         '.$CF; 
$tr4='Pro Forma Cap Rate:       '.$PFCR; 
$tr5='NOI:                      '.$NOI; 
$tr6='Total Cash Needed:        '.$TCN; 
$tr7='Cash on Cash ROI:         '.$COC; 
$tr8='Purchase Cap Rate:        '.$PCP; 
$pdf->Ln();
$pdf->Cell(40,6,"Monthly Income",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$TMI,0);
$pdf->Ln();
$pdf->Cell(40,6,"Monthly Expenses",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$ME,0);
$pdf->Ln();
$pdf->Cell(40,6,"Monthly Cashflow",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$CF,0);
$pdf->Ln();
$pdf->Cell(40,6,"Pro Forma Cap Rate",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,$PFCR."%",0);
$pdf->Ln();
$pdf->Cell(40,6,"NOI",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$NOI,0);
$pdf->Ln();
$pdf->Cell(40,6,"Total Cash Needed",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$TCN,0);
$pdf->Ln();
$pdf->Cell(40,6,"Cash on Cash ROI",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,$COC."%",0);
$pdf->Ln();
$pdf->Cell(40,6,"Purchase Cap Rate",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,$PCP."%",0);
$pdf->Ln();

$mr1='Income-Expense Ratio:     '.$IER; 
$mr2='Total Initial Equity:     '.$TIE; 
$mr3='Gross Rent Multiplier:    '.$GRM; 
$mr4='Debt Coverage Ratio:      '.$DCR;
$pdf->Ln(); 
$pdf->Cell(40,6,"Income-Expense Ratio",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,$IER,0);
$pdf->Ln();
$pdf->Cell(40,6,"Total Initial Equity",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,"$".$TIE,0);
$pdf->Ln();
$pdf->Cell(40,6,"Gross Rent Multiplier",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,$GRM,0);
$pdf->Ln();
$pdf->Cell(40,6,"Debt Coverage Ratio",0);
$pdf->Cell(5,6,":",0);
$pdf->Cell(40,6,$DCR,0);
$pdf->Ln();
$pdf->Ln();
 
$br1='               '."\t".'Year1'."\t".'Year2'."\t".'Year3'."\t".'Year4'."\t".'Year10'."\t".'Year20'."\t".'Year30'; 
$br2='Total Annual Income'."\t".$Y1."\t".$Y2."\t".$Y3."\t".$Y4."\t".$Y10."\t".$Y20."\t".$Y30; 
$br3='Total Annual Expense'."\t".$TAE1."\t".$TAE2."\t".$TAE3."\t".$TAE4."\t".$TAE10."\t".$TAE20."\t".$TAE30;  
$br4='Operating Expenses'."\t".$OE1."\t".$OE2."\t".$OE3."\t".$OE4."\t".$OE10."\t".$OE20."\t".$OE30; 
$br5='Mortgage Payment'."\t".$MP."\t".$MP."\t".$MP."\t".$MP."\t".$MP."\t".$MP."\t".$MP; 
$br6='Total Annual Cashflow'."\t".$TAC1."\t".$TAC2."\t".$TAC3."\t".$TAC4."\t".$TAC10."\t".$TAC20."\t".$TAC30;  
$br7='Cash On Cash ROI'."\t".$COC1."\t".$COC2."\t".$COC3."\t".$COC4."\t".$COC10."\t".$COC20."\t".$COC30;  
$br8='Property Value'."\t".$PV1."\t".$PV2."\t".$PV3."\t".$PV4."\t".$PV10."\t".$PV20."\t".$PV30;    


$htmlTable='<table>
            <tr>
                <td></td>
                <td>Year 1</td>
                <td>Year 2</td>
                <td align="left">Year 3</td>
                <td>Year 4</td>
                <td>Year 10</td>
                <td>Year 20</td>
                <td>Year 30</td>                
            </tr>
            <tr>
                <td>Total Annual Income</td>
                <td>'.$Y1.'</td>
                <td>'.$Y2.'</td>
                <td>'.$Y3.'</td>
                <td>'.$Y4.'</td>
                <td>'.$Y10.'</td>
                <td>'.$Y20.'</td>
                <td>'.$Y30.'</td>
            </tr>
            <tr>
                <td>Total Annual Expenses</td>
                <td>'.$TAE1.'</td>
                <td>'.$TAE2.'</td>
                <td>'.$TAE3.'</td>
                <td>'.$TAE4.'</td>
                <td>'.$TAE10.'</td>
                <td>'.$TAE20.'</td>
                <td>'.$TAE30.'</td>
            </tr>
            <tr>
                <td>Operating Expenses</td>
                <td>'.$OE1.'</td>
                <td>'.$OE2.'</td>
                <td>'.$OE3.'</td>
                <td>'.$OE4.'</td>
                <td>'.$OE10.'</td>
                <td>'.$OE20.'</td>
                <td>'.$OE30.'</td>
            </tr>
            <tr>
                <td>Mortgage Payment</td>
                <td>'.$MP.'</td>
                <td>'.$MP.'</td>
                <td>'.$MP.'</td>
                <td>'.$MP.'</td>
                <td>'.$MP.'</td>
                <td>'.$MP.'</td>
                <td>'.$MP.'</td>
            </tr>
            <tr>
                <td>Total Annual Cashflow</td>
                <td>'.$TAC1.'</td>
                <td>'.$TAC2.'</td>
                <td>'.$TAC3.'</td>
                <td>'.$TAC4.'</td>
                <td>'.$TAC10.'</td>
                <td>'.$TAC20.'</td>
                <td>'.$TAC30.'</td>
            </tr>
            <tr>
                <td>Cash on Cash ROI</td>
                <td>'.$COC1.'%</td>
                <td>'.$COC2.'%</td>
                <td>'.$COC3.'%</td>
                <td>'.$COC4.'%</td>
                <td>'.$COC10.'%</td>
                <td>'.$COC20.'%</td>
                <td>'.$COC30.'%</td>
            </tr>
            <tr>
                <td>Property Value</td>
                <td>'.$PV1.'</td>
                <td>'.$PV2.'</td>
                <td>'.$PV3.'</td>
                <td>'.$PV4.'</td>
                <td>'.$PV10.'</td>
                <td>'.$PV20.'</td>
                <td>'.$PV30.'</td>
            </tr>           
        </table>';
//$pdf->WriteHTML("$htmlTable");
//$pdf->AddPage();
$header = array(' ', 'Year1', 'Year2', 'Year3', 'Year4', 'Year10', 'Year20', 'Year30');
$row1=array("Total Annual Income:","$".$Y1,"$".$Y2,"$".$Y3,"$".$Y4,"$".$Y10,"$".$Y20,"$".$Y30);
$row2=array("Total Annual Expenses:","$".$TAE1,"$".$TAE2,"$".$TAE3,"$".$TAE4,"$".$TAE10,"$".$TAE20,"$".$TAE30);
$row3=array("Operating Expenses:","$".$OE1,"$".$OE2,"$".$OE3,"$".$OE4,"$".$OE10,"$".$OE20,"$".$OE30);
$row4=array("Mortgage Payment:","$".$MP,"$".$MP,"$".$MP,"$".$MP,"$".$MP,"$".$MP,"$".$MP);
$row5=array("Total Annual Cashflow:","$".$TAC1,"$".$TAC2,"$".$TAC3,"$".$TAC4,"$".$TAC10,"$".$TAC20,"$".$TAC30);
$row6=array("Cash on Cash ROI:",$COC1."%",$COC2."%",$COC3."%",$COC4."%",$COC10."%",$COC20."%",$COC30."%");
$row7=array("Property Value:","$".$PV1,"$".$PV2,"$".$PV3,"$".$PV4,"$".$PV10,"$".$PV20,"$".$PV30);
//$row=array("",$Y1,$Y2,$Y3,$Y4,$Y10,$Y20,$Y30);
$data = array($row1,$row2,$row3,$row4,$row5,$row6,$row7);
$pdf->FancyTable($header,$data);
$pdf->Output();
?>