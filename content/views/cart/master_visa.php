<div class="row">
    <div class="col-12">
        <label for="name_of_holder">Card Holder's Name</label>
        <input id="name_of_holder" name="name_of_holder" type="text" maxlength="50" minlength="5" class="form-control" placeholder="Name of card Holder" aria-label="Name of Holder" aria-describedby="basic-addon1" required>
    </div>
    <div class="form-group col-12">
        <label for="card_number">Card Number</label>
        <input id="card_number" name="card_number" type="text" maxlength="16" minlength="16" size="16" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
    </div>
    <div class="form-group col-sm-6">
        <label for="month">Expiration Date</label>
        <div class="row" style="padding:5px;">
    
            <select class="col-sm-6" id="month" name="month" type="text" class="form-control" placeholder="MM / YY" aria-label="MM / YY" aria-describedby="basic-addon1" required>
                <option selected  value="">Month</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <?php $yr = date("y"); ?>
            <select class="col-sm-6" id="year" name="year" type="text" class="form-control" placeholder="MM / YY" aria-label="MM / YY" aria-describedby="basic-addon1" required>
                <option value="0">Year</option>
                <?php for ($i=1; $i <= 5; $i++):?>
                    <option value="<?=$i?>"><?php echo $yr++; ?></option>
                <?php endfor;?>
                
            </select>
        </div>
    </div>
    <div class="form-group col-sm-6">
        <label for="cvc">CVC</label>
        <input id="cvc" name="cvc" type="text" maxlength="3" minlength="3" size="3" class="form-control" placeholder="CVC" aria-label="CVC" aria-describedby="basic-addon1" min="3" max="3" required>
    </div>
</div>