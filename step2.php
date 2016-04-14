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
    <div id="step2" name="step2" class="mainDiv">
        <div class="form-group" id="ppDiv">
            <label class="label2">Purchase Price<font color="red"> *</font></label><br/>
            <input type="text" name="pp" id="pp" class="form-control input21" placeholder="">
        </div>
        <br/>
        <div class="form-group" id="arvDiv">
            <label class="label2">After Repair Value<font color="red"> *</font></label><br/>
            <input type="text" name="arv" id="arv" class="form-control input21" placeholder="">
        </div>
        <br/>
        <div class="form-inline">
            <div class="form-group" id="pccDiv">
                <label class="label2">Purchase Closing Cost<font color="red"> *</font></label><br/>
                <input type="text" name="pcc" id="pcc" class="form-control input21" placeholder="">
            </div>
            <div class="form-group">
                <br/>
                <label class="label2 padding10"> or </label>
                <label id="expandCosts1" class="label2 padding10"><a>Expand Costs</a></label>
            </div>
        </div>
        <br/>
        
        <div id="addDiv2" name="" class="addDiv">
            <div class="box21">
                <label class="label2">Points / Origination Fee</label><br/>
                <input type="text" name="points" id="points" class="form-control input21" placeholder="">            
            </div>
            <div class="box21">
                <label class="label2">Prepaid Hazard Insurance</label><br/>
                <input type="text" name="hazard" id="hazard" class="form-control input21 pcc" placeholder="">            
            </div>
            <br/><br/>
            <div class="box21">
                <label class="label2">Prepaid Flood Insurance</label><br/>
                <input type="text" name="flood" id="flood" class="form-control input21 pcc" placeholder="">            
            </div>
            <div class="box21">
                <label class="label2">Prepaid Property Taxes</label><br/>
                <input type="text" name="property" id="property" class="form-control input21 pcc" placeholder="">            
            </div>
            <br/><br/>
            <div class="box21">
                <label class="label2">Annual Assessments</label><br/>
                <input type="text" name="assessments" id="assessments" class="form-control input21 pcc" placeholder="">            
            </div>
            <div class="box21">
                <label class="label2">Title and Escrow Fees</label><br/>
                <input type="text" name="escrow" id="escrow" class="form-control input21 pcc" placeholder="">            
            </div>
            <br/><br/>
            <div class="box21">
                <label class="label2">Attorney Charges</label><br/>
                <input type="text" name="attorney" id="attorney" class="form-control input21 pcc" placeholder="">            
            </div>
            <div class="box21">
                <label class="label2">Recording Fees</label><br/>
                <input type="text" name="recording" id="recording" class="form-control input21 pcc" placeholder="">            
            </div>
            <br/><br/>
            <div class="box21">
                <label class="label2">Other Fees / Charges</label><br/>
                <input type="text" name="otherFees" id="otherFees" class="form-control input21 pcc" placeholder="">            
            </div>
            <br/><br/>
        </div>
        <br/>
        <div class="form-inline">
            <div class="form-group" id="rcDiv">
                <label class="label2">Estimated Repair Cost<font color="red"> *</font></label><br/>
                <input type="text" name="rc" id="rc" class="form-control input21" placeholder="">
            </div>
            <div class="form-group">
                <br/>
                <label class="label2 padding10"> or </label>
                <label class="label2 padding10"><a id="expandCosts2"> Expand Costs</a></label>
            </div>
        </div>
        <br/>
        <div id="addDiv3" name="" class="addDiv">
            <div id="addMe2">
            </div>
            <div id="addMe2ButtonDiv" class="form-group padding100">
                <br/>
                <button type="button" name="addMe2Button" id="addMe2Button" class="btn width200 btn-default">Add Expense</button>
            </div>            
        </div>        
        <br/>
        
        <div class="inlineBlock2"><h4><b>Loan Details</h4></b></div>
        <div class="inlineBlock2 hrline"></div>
        <br/><br/>
        <div class="box23">
            <input type="checkbox" name="cp" id="cashPurchase" class="" value="yes">
            <label class="label3 checkboxtext">Cash Purchase?</label><br/>              
        </div>
        <br/>
        <div id="cashPurchaseDiv">
            <div class="form-inline">
                <div class="form-group marginright50">
                    <label class="label2">Down payment of purchase price</label><br/>
                    <select name="dp" id="dp" class="form-control input21" style="width:180px;">
                        <option value=""></option>
                        <option value="3.5">3.5%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                        <option value="30">30%</option>
                        <option value="35">35%</option>
                        <option value="40">40%</option>
                        <option value="45">45%</option>
                        <option value="50">50%</option>
                    </select>                
                </div>
                <div class="form-group marginright50">
                    <label class="label2">- Or -</label><br/>
                </div>
                <div class="form-group marginright50" id="laDiv">
                    <label class="label2">Enter Loan Amount<font color="red"> *</font></label><br/>
                    <input type="text" name="la" id="la" class="form-control input21" placeholder="">
                </div>
                <div class="form-group marginright50" id="iDiv">
                    <label class="label2">Loan Interest Rate (%)<font color="red"> *</font></label><br/>
                    <input type="text" name="i" id="i" class="form-control input21" placeholder="">
                </div>

                <div class="form-group marginright50">
                    <label class="label2">Points charged by lender</label><br/>
                    <input type="text" name="ptc" id="ptc" class="form-control input21" placeholder="">               
                </div>
                <div class="form-group marginright50">
                    <label class="label2">Other Charges From the Lender</label><br/>
                    <input type="text" name="ocl" id="ocl" class="form-control input21" placeholder="">
                </div>            
            </div>
            <br/>
            <label class="label2">Loan Fees & Points<font color="red"> *</font></label><br/>  
            <div class="form-inline">
                <input type="radio" name="fees" id="" class="form-control" value="loan">
                <label class="label2">Wrap loan fees/points into the loan</label>
                <div class="box24"></div>
                <input type="radio" name="fees" id="" class="form-control" value="pocket" checked>
                <label class="label2">Pay loan fees/points out of pocket</label>            
            </div>
            <br/>
            <label class="label2">Interest Only?<font color="red"> *</font></label><br/>  
            <div class="form-inline">
                <input type="radio" name="interest" id="interestYes" class="form-control" value="yes">
                <label class="label2">Yes</label>
                <div class="box24"></div>
                <input type="radio" name="interest" id="interestNo" class="form-control" value="no" checked>
                <label class="label2">No</label>            
            </div>
            <br/>
            <div id="checkedHide1" class="form-group">
                <label class="label2">Amortized Over How Many Years?<font color="red"> *</font></label><br/>
                <input type="text" name="n" id="n" class="form-control input21" placeholder="">               
            </div>
        </div>
        <div id="checkedHide2" class="form-group">
            <label class="label2">Typical Cap Rate for Your Area (%)</label><br/>
            <input type="text" name="capRate" id="capRate" class="form-control input21" placeholder="">
        </div>
        <br/><br/>
        <button type="button" name="buttonPreviousStep1" id="buttonPreviousStep1" class="btn btn-default btn-left"><b>Previous Step</b></button>       
        <button type="button" name="buttonNextStep2" id="buttonNextStep2" class="btn btn-success btn-right"><b>Next Step</b></button>        
        <br/><br/><br/>            
    </div>