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
    <div name="step1" id="step1" class="mainDiv">
        <div class="form-group" id="titleDiv">
            <label class="label2">Report Title<font color="red"> *</font></label><br/>
            <input type="text" name="title" id="title" class="form-control input2" placeholder="">
            <p>What do you want to name this report?</p>
        </div>
        <br/>
        
        <label class="label2">Property Address</label><br/>
        <input type="text" name="address" id="address" class="form-control input2" placeholder=""><br/>

        <div class="inlineBlock">
            <div class="box3">
                <label class="label2">Property City</label><br/>
                <input type="text" name="city" id="city" class="form-control input3" placeholder="">
            </div>
            <div class="box4">
                <label class="label2">Property State</label><br/>
                <input type="text" name="state" id="state" class="form-control input3" placeholder="">
            </div>
            <div class="box5">
                <label class="label2">Property Zip</label><br/>
                <input type="text" name="zip" id="zip" class="form-control input3" placeholder="">
            </div>            
        </div>
        <div class="inlineBlock" style="margin-top:20px;">
            <div class="box4">
                <label class="label2">Annual Property Taxes</label><br/>
                <input type="text" name="pt" id="pt" class="form-control input3" placeholder="">
            </div>
            <div class="box5">
                <label class="label2">MLS Number</label><br/>
                <input type="text" name="mls" id="mls" class="form-control input3" placeholder="">
            </div>            
        </div>
        <br/><br/>
        <label class="label2">Property Photos</label><br/><br/>
        <div id="divAddPhoto" class="">

        </div>
        <input type="hidden" name="photo_count" id="photo_count" class="form-control input3">
        <button type="button" name="buttonAddPhoto" id="buttonAddPhoto" class="btn btn-default">Add a photo</button><br/>
        <br/>
        <label class="label2">Property Sales Description</label><br/>
        <textarea name="salesDescription" id="salesDescription" class="form-control input2" rows="3"></textarea><br/>
        <button type="button" name="otherFeatures" id="otherFeatures" class="btn btn-default">Other property features <div class="f1"> +</div></button><br/>
        <br/>
        
        <div id="addDiv1" name="" class="addDiv">
            <div class="box6">
                <label class="label2">Bedrooms</label><br/>
                <select name="bedrooms" id="bedrooms" class="form-control select2">
                    <option selected="selected" value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10+">10+</option>            
                </select>
            </div>
            <div class="box6">
                <label class="label2">Bathrooms</label><br/>
                <select name="bathrooms" id="bathrooms" class="form-control select2">
                    <option selected="selected" value="0">0</option>
                    <option value="0 1/2">0 1/2</option>
                    <option value="0 3/4">0 3/4</option>
                    <option value="1">1</option>
                    <option value="1 1/2">1 1/2</option>
                    <option value="1 3/4">1 3/4</option>
                    <option value="2">2</option>
                    <option value="2 1/2">2 1/2</option>
                    <option value="2 3/4">2 3/4</option>
                    <option value="3">3</option>
                    <option value="3 1/2">3 1/2</option>
                    <option value="3 3/4">3 3/4</option>
                    <option value="4">4</option>
                    <option value="4 1/2">4 1/2</option>
                    <option value="4 3/4">4 3/4</option>
                    <option value="5">5</option>
                    <option value="5 1/2">5 1/2</option>
                    <option value="5 3/4">5 3/4</option>
                    <option value="6">6</option>
                    <option value="6 1/2">6 1/2</option>
                    <option value="6 3/4">6 3/4</option>
                    <option value="7">7</option>
                    <option value="7 1/2">7 1/2</option>
                    <option value="7 3/4">7 3/4</option>
                    <option value="8">8</option>
                    <option value="8 1/2">8 1/2</option>
                    <option value="8 3/4">8 3/4</option>
                    <option value="9+">9+</option>            
                </select>
            </div>
            <br/><br/>
            <div class="box6">
                <label class="label2">Total Sq. Footage</label><br/>
                <input type="text" name="totalSqFootage" id="totalSqFootage" class="form-control input4" placeholder="">            
            </div>
            <div class="box6">
                <label class="label2">Lot Size (Sq Ft.)</label><br/>
                <input type="text" name="lotSize" id="lotSize" class="form-control input4" placeholder="">               
            </div>
            <div class="box6">
                <label class="label2">Year Built</label><br/>
                <input type="text" name="yearBuilt" id="yearBuilt" class="form-control input4" placeholder="">               
            </div>
            <br/><br/>
            <div class="box6">
                <label class="label2">Year Renovated</label><br/>
                <input type="text" name="yearRenovated" id="yearRenovated" class="form-control input4" placeholder="">               
            </div>    
            <div class="box6">
                <label class="label2">Units</label><br/>
                <input type="text" name="units" id="units" class="form-control input4" placeholder="">               
            </div> 
            <div class="box6">
                <label class="label2">Stories</label><br/>
                <input type="text" name="stories" id="stories" class="form-control input4" placeholder="">               
            </div> 
            <br/><br/>
            <div class="form-inline">
                <div class="form-group">
                    <label class="label2">Property Type</label><br/>
                    <select name="propertyType" id="propertyType" class="form-control select3">
                        <option selected="selected" value="Single Family">Single Family</option>
                        <option value="Small Multifamily (2-4 Units)">Small Multifamily (2-4 Units)</option>
                        <option value="Large Multifamily (5+ Units)">Large Multifamily (5+ Units)</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Mobile Home">Mobile Home</option>
                        <option value="Other">Other</option>                
                    </select>
                </div>
                <div class="form-group padding50">
                    <label class="label2">County Appraised Value</label><br/>
                    <input type="text" name="cav" id="cav" class="form-control input5" placeholder="">
                </div>
            </div>
            <br/><br/>
              
            <div class="box9">
                <input type="checkbox" name="pool" id="pool" class="" placeholder="">
                <label class="label3 checkboxtext">Pool</label><br/>                
            </div>
            <div class="box9">
                <input type="checkbox" name="heating" id="heating" class="" placeholder="">
                <label class="label3 checkboxtext">Heating</label><br/>              
            </div>  
            <div class="box9">
                <input type="checkbox" name="cooling" id="cooling" class="" placeholder="">
                <label class="label3 checkboxtext">Cooling</label><br/>              
            </div>            
            <div class="box9">
                <input type="checkbox" name="fireplace" id="fireplace" class="" placeholder="">
                <label class="label3 checkboxtext">Fireplace</label><br/>              
            </div>   
            <div class="box9">
                <input type="checkbox" name="garage" id="garage" class="" placeholder="">
                <label class="label2 checkboxtext">Garage</label><br/>              
            </div> 
            <br/><br/><br/>

            
            <div class="box10">
                <label class="label2">Construction</label><br/>
                <input type="text" name="construction" id="construction" class="form-control input5" placeholder="">               
            </div>    
            <div class="box10">
                <label class="label2">Roofing</label><br/>
                <input type="text" name="roofing" id="roofing" class="form-control input5" placeholder="">             
            </div>
            <br/><br/>
            <div class="box10">
                <label class="label2">Flooring Type(s)</label><br/>
                <input type="text" name="flooring" id="flooring" class="form-control input5" placeholder="">             
            </div>  
            <div class="box10">
                <label class="label2">Wiring Condition</label><br/>
                <input type="text" name="wiring" id="wiring" class="form-control input5" placeholder="">             
            </div>  
            <br/><br/>            
            <div class="box10">
                <label class="label2">Plumbing Condition</label><br/>
                <input type="text" name="plumbing" id="plumbing" class="form-control input5" placeholder="">             
            </div>  
            <div class="box10">
                <label class="label2">Siding Material</label><br/>
                <input type="text" name="siding" id="siding" class="form-control input5" placeholder="">             
            </div>
            <br/><br/>   
            <label class="label2">Other Property Information</label><br/>
            <textarea name="otherProperty" id="otherProperty" class="form-control input6" rows="5"></textarea>
            <br/> 
        </div>
        <br/>      
        <button type="button" name="buttonNextStep1" id="buttonNextStep1" class="btn btn-success btn-right"><b>Next Step</b></button>        
        <br/><br/><br/>
    </div>