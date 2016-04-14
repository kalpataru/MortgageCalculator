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
    <div id="step3" name="step3" class="mainDiv">
        <div class="inlineBlock2"><h4><b>Income</h4></b></div>
        <div class="inlineBlock2 hrline"></div>
        <br/><br/>
        <div class="form-inline"> 

        
            <div class="form-group" id="giDiv">
                <label class="label2">Total Gross Monthly Rent<font color="red"> *</font></label><br/>
                <input type="text" name="gi" id="gi" class="form-control input21" placeholder="">               
            </div>
            <div class="form-group margin20">
                <br/>
                <label class="label2">or</label><br/>            
            </div> 
            <div class="form-group margin20">
                <br/>
                <label class="label2"><a id="addUnits">Add Units</a></label><br/>            
            </div>
            
            
        </div>
        <br/>
         <div id="addDiv4" name="" class="addDiv">
            <div id="addUnitDiv">

            </div>
            <br/>
            <div class="form-group padding100">
                <button type="button" name="addUnitButton" id="addUnitButton" class="btn width200 btn-default">Add Unit</button>
            </div>            
        </div>        
        <br/>
        <div class="form-inline">  

        
            <div class="form-group">
                <label class="label2">Other Monthly Income</label><br/>
                <input type="text" name="oi" id="oi" class="form-control input21" placeholder="">               
            </div>
            <div class="form-group margin20">
                <br/>
                <label class="label2">or</label><br/>            
            </div> 
            <div class="form-group margin20">
                <br/>
                <label class="label2"><a id="addIncome">Add Income</a></label><br/>            
            </div>
        </div>        
        <br/>
        <div id="addDiv5" name="" class="addDiv">
            <div id="addIncomeDiv">

            </div>
            <br/>
            <div class="form-group padding100">
                <button type="button" name="addIncomeButton" id="addIncomeButton" class="btn width200 btn-default">Add Income</button>
            </div>            
        </div>        
        <br/><br/>        
        <div class="inlineBlock2"><h4><b>Landlord-Paid Expenses</h4></b></div>
        <div class="inlineBlock2 hrline"></div>
        <br/><br/>
        <h5><b>Monthly Fixed Expenses</h5></b>
        <div class="form-inline">    
            <div class="form-group padding50">
                <label class="label2">Electricity</label><br/>
                <input type="text" name="e" id="e" class="form-control input21 allexpense" placeholder="">               
            </div>
            <div class="form-group padding50">
                <label class="label2">Water</label><br/>
                <input type="text" name="w" id="w" class="form-control input21 allexpense" placeholder="">               
            </div>
            <div class="form-group padding50">
                <label class="label2">Sewer</label><br/>
                <input type="text" name="s" id="s" class="form-control input21 allexpense" placeholder="">               
            </div>
            <div class="form-group padding50">
                <label class="label2">Garbage</label><br/>
                <input type="text" name="g" id="g" class="form-control input21 allexpense" placeholder="">               
            </div>
            
            <div class="form-group padding50">
                <label class="label2">HOAs</label><br/>
                <input type="text" name="h" id="h" class="form-control input21 allexpense" placeholder="">               
            </div>
            <div class="form-group padding50">
                <label class="label2">Monthly Insurance</label><br/>
                <input type="text" name="mi" id="mi" class="form-control input21 allexpense" placeholder="">               
            </div>
            <div class="form-group padding50">
                <label class="label2">Other Monthly Expenses</label><br/>
                <input type="text" name="ome" id="ome" class="form-control input21 allexpense" placeholder="">               
            </div>           
            <div class="form-group margin20">
                <br/>
                <label class="label2">or</label><br/>            
            </div> 
            <div class="form-group margin20">
                <br/>
                <label class="label2"><a id="addExpense">Add</a></label><br/>            
            </div>
            
            
        </div>    
        <br/>
        <div id="addDiv6" name="" class="addDiv">
            <div id="addExpenseDiv">
            </div>
            <br/>
            <div class="form-group padding100">
                <button type="button" name="addExpenseButton" id="addExpenseButton" class="btn width200 btn-default">Add Expense</button>
            </div>            
        </div>        
        <span class="label2 btn-left">Total Monthly Fixed Expense:</span>
        <label class="btn-left margin10" id="sumValue"></label>
        <br/><br/>        
        <h5><b>Monthly Variable Expenses</h5></b>
        <div class="form-inline">    
            <div class="form-group margin30">
                <label class="label2">Vacancy Rate, (%)</label><br/>
                <input type="text" name="vr" id="vr" class="form-control input21" placeholder="">               
            </div>
            <div class="form-group margin30">
                <label class="label2">Repairs and Maintenance, (%)</label><br/>
                <input type="text" name="rm" id="rm" class="form-control input21" placeholder="">               
            </div>
            <div class="form-group margin30">
                <label class="label2">Capital Expenditures, (%)</label><br/>
                <input type="text" name="cap" id="cap" class="form-control input21" placeholder="">               
            </div>
            <div class="form-group margin30">
                <label class="label2">Property Management Fees, (%)</label><br/>
                <input type="text" name="pm" id="pm" class="form-control input21" placeholder="">               
            </div>
        </div>
        <br/><br/>    
        <div class="inlineBlock2"><h4><b>Future Assumptions</h4></b></div>
        <div class="inlineBlock2 hrline"></div>
        <br/>
        <div class="form-inline">    
            <div class="form-group">
                <label class="label2 margin30">Income Increases per Year, (%)</label><br/>
                <input type="text" name="iinc" id="iinc" class="form-control input21" placeholder="">               
            </div>
            <div class="form-group margin30">
                <label class="label2">Property Value Increases per Year, (%)</label><br/>
                <input type="text" name="pvinc" id="pvinc" class="form-control input21" placeholder="">               
            </div>
            <div class="form-group margin30">
                <label class="label2">Expenses Increases per Year, (%)</label><br/>
                <input type="text" name="einc" id="einc" class="form-control input21" placeholder="">               
            </div>
        </div>
        <br/>
        <span class="float-right">Use of this calculator signifies your agreement to our <a href="">Terms of Use</a> and the terms posted below.</span>
        <br/><br/><br/>  
        <button type="button" name="buttonPreviousStep2" id="buttonPreviousStep2" class="btn btn-default btn-left"><b>Previous Step</b></button>       
        <button type="button" name="buttonNextStep3" id="buttonNextStep3" class="btn btn-success btn-right"><b>Calculate Results</b></button>     
        <br/><br/><br/>         
    </div>