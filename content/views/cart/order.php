
<?php  global $total_cart_value;
    $total_cart_value=number_format(cart_total(), 0, ',', ',');
    // if($back="delivery_address"){
    //     isset($_POST["delivery_address"]);
    // }
    // // if (isset($_POST["payment_details"])) {
    // //     global $PAYMENT;
    // //     $PAYMENT=true;
    // //     // echo "jjjjjjjjjjjjjjjikkkkkkkkkkkk";
	// // 	header('location:'.PATH_URL."index.php?controller=cart&amp;action=checkout");
	// // }
?>
<?php require('content/views/shared/header.php');?>

<style>

    .row-checkout {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
    }

    .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    }

    .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
    }

    .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
    padding: 0 16px;
    }

    .container-checkout {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
    }

    input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }

    label {
    margin-bottom: 10px;
    display: block;
    }

    .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
    }

    .checkout-btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    }

    .checkout-btn:hover {
    background-color: #45a049;
    }



    hr {
    border: 1px solid lightgrey;
    }

    span.price {
    float: right;
    color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
    .row-checkout {
        flex-direction: column-reverse;
    }
    .col-25 {
        margin-bottom: 20px;
    }
    }




            /* * {
            margin: 0;
            padding: 0;
        } */

        /* html {
            height: 100%;
        } */

        /*Background color*/
        #grad1 {
            background-color:  #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        #msform input, #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform input:focus, #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }

        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover, #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: relative;
        }

        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before, #progressbar li.active:after {
            background: skyblue;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display:inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor:pointer;
            margin: 8px 2px; 
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image{
            width: 100%;
            object-fit: cover;
        }
    </style>
<div role="main" class="main shop">
    <div class="container">
        <hr class="tall">
        <div class="row">
            <div class="col-md-12">
                <h2 class="shorter"><strong>Payment and order procedures</strong></h2>
                <?php 
                    

                    $next_btn_value="CONTINUE";
                    $hidden=false;
                    if(isset($_POST["payment_method"])){
                        $form_action="index.php?controller=cart&amp;action=checkout";

                    }else{
                        $form_action="";
                    }
                    if (!isset($user_nav)) echo '<p>customer\'s feedback? <a href="admin.php">Click here to login.</a></p>';
                    else echo '<p>Your feedback? <strong><a href="index.php&controller=feedback">Click here to give feedback.</a></strong></p>' 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <!-- MultiStep Form -->
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row container-checkout">
                        <div class="col-md-12 mx-0">
                            <form action="<?=$form_action?>" role="form" id="msform" method="POST">
                                <!-- fieldsets -->
                                <fieldset>
                                    <?php if(isset($_POST["payment_method"])):
                                        
                                        $user_id = $_POST["user_id"];
                                        $cart_total = $_POST["cart_total"];
                                        if (isset($_POST["name"])) {
                                            $name = $_POST["name"];
                                        }
                                        if (isset($_POST["lastName"])) {
                                            $lastName = $_POST["lastName"];
                                        }
                                        if (isset($_POST["nickName"])) {
                                            $nickName = $_POST["nickName"];
                                        }
                                        if (isset($_POST["phone"])) {
                                            $phone = $_POST["phone"];
                                        }
                                        if (isset($_POST["phone1"])) {
                                            $phone1 = $_POST["phone1"];
                                        }
                                        if (isset($_POST["email"])) {
                                            $email = $_POST["email"];
                                        }
                                        if ($_POST["address"]) {
                                            $address = $_POST["address"];
                                        }
                                        // if ($_POST["address1"]) {
                                        //     $address1 = $_POST["address1"];
                                        // }
                                        if ($_POST["district"]) {
                                            $district = $_POST["district"];
                                        }
                                        if ($_POST["city"]) {
                                            $city = $_POST["city"];
                                        }
                                        // if ($_POST["province"]) {
                                        //     $province = $_POST["province"];
                                        // }
                                        // if ($_POST["country"]) {
                                        //     $country = $_POST["country"];
                                        // }
                                        if ($_POST["paymentMethod"]) {
                                            $paymentMethod = $_POST["paymentMethod"];
                                        }


                                        // $form_action="index.php?controller=cart&amp;action=checkout";
                                        $back="delivery_address";
                                        $submit_name="payment_details";
                                        $next_btn_value="CONFIRM";
                                        
                                    ?>
                                        <input name="user_id" value="<?=$user_id;?>" type="hidden" >
                                        <input name="cart_total" value="<?=$cart_total;?>" type="hidden" >
                                        <input name="name" value="<?=$name;?>" type="hidden" >
                                        <input name="lastName" value="<?=$lastName;?>" type="hidden" >
                                        <input name="nickName" value="<?=$nickName;?>" type="hidden" >
                                        <input name="phone" value="<?=$phone;?>" type="hidden" >
                                        <input name="phone1" value="<?=$phone1;?>" type="hidden" >
                                        <input name="email" value="<?=$email;?>" type="hidden" >
                                        <input name="address" value="<?=$address;?>" type="hidden" >
                                        <input name="district" value="<?=$district;?>" type="hidden" >
                                        <input name="city" value="<?=$city;?>" type="hidden" >
                                        <input name="paymentMethod" value="<?=$paymentMethod;?>" type="hidden" >
                                        
                                            <?php if($paymentMethod=="orange_money"):
                                            ?>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="<?= PATH_URL ?>public/img/orange_money.png" alt="#" class="img-fluid" width="200px" height="100px">
                                                            <h3 class="title"><br/>Send Money <br/><br/><br/>Amount: <?=CURRENCY." ".number_format(cart_total(), 0, ',', '.')."<br/><br/> To: ".ORANGE_MONEY_NUMBER?></h3>

                                                        </div>
                                                        <div class="col-md-6" style="border-left:2px solid black; padding-left:25px">
                                                            <h3 class="title">Transaction Details</h3>
                                                        
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label for="name_of_depositor">Transaction ID</label>
                                                                    <input id="transaction_id" name="transaction_id" type="text" class="form-control" placeholder="Transaction ID" aria-label="Transaction ID" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    <label for="phone_name">Orange Money  Number</label>
                                                                    <input id="phone_name" name="phone_name" type="phone" class="form-control" placeholder="Orange Money  Number" aria-label="Card Holder" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label for="date">Transaction Date</label>
                                                                    <input id="date" name="date" type="date" class="form-control" placeholder="Transaction Date" aria-label="Transaction Date" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label for="time">Transaction Time</label>
                                                                    <input id="time" name="time" type="time" class="form-control" placeholder="Transaction Time" aria-label="Transaction Time" aria-describedby="basic-addon1" required >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                        
                                                </div>

                                            <?php elseif($paymentMethod=="afri_money"):

                                            ?>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="<?= PATH_URL ?>public/img/afri_money.jpg" alt="#" class="img-fluid" width="200px" height="100px">
                                                            <h3 class="title"><br/>Send Money <br/><br/><br/>Amount: <?=CURRENCY." ".number_format(cart_total(), 0, ',', '.')."<br/><br/> To: ".AFRI_MONEY_NUMBER?></h3>

                                                        </div>
                                                        <div class="col-md-6" style="border-left:2px solid black; padding-left:25px">
                                                            <h3 class="title">Transaction Details</h3>
                                                        
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label for="transaction_id">Transaction ID</label>
                                                                    <input id="transaction_id" name="transaction_id" type="text" class="form-control" placeholder="Transaction ID" aria-label="Transaction ID" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    <label for="phone_name">Afri Money Number</label>
                                                                    <input id="phone_name" name="phone_name" type="phone" class="form-control" placeholder="Afri Money  Number" aria-label="Card Holder" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label for="date">Date of Transaction</label>
                                                                    <input id="date" name="date" type="date" class="form-control" placeholder="Date of Transaction" aria-label="Date of Transaction" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label for="time">Time of Transaction</label>
                                                                    <input id="time" name="time" type="time" class="form-control" placeholder="Time of Transaction" aria-label="Time of Transaction" aria-describedby="basic-addon1" required >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                        
                                                </div>

                                                
                                            <?php elseif($paymentMethod=="bank"):

                                            ?>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">

                                                                <img src="<?= PATH_URL ?>public/img/bank.jpg" alt="#" class="img-fluid" width="200px" height="100px">
                                                                <h3 class="title"><br>Deposite Money</h3>
                                                                <div>
                                                                <h4> Bank Name: <?=BANK_NAME?></h4>
                                                                <h4> Branch: <?=BANK_BRANCH?></h4>
                                                                <h4> Account Number: <?=ACCOUNT_NUMBER?></h4>
                                                                <h4> Account Name: <?=ACCOUNT_NAME?></h4>
                                                                <h4> Amount: <?=$total_cart_value?></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="border-left:2px solid black; padding-left:25px">
                                                            <h3 class="title">Transaction Details</h3>
                                                        
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label for="phone_name">Name of Depositor</label>
                                                                    <input id="phone_name" name="phone_name" type="text" class="form-control" placeholder="Name of Depositor" aria-label="Name of Depositor" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    <label for="transaction_id">Transaction ID</label>
                                                                    <input id="transaction_id" name="transaction_id" type="text" class="form-control" placeholder="Transaction ID" aria-label="Transaction ID" aria-describedby="basic-addon1" required >
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label for="date">Date of Transaction</label>
                                                                    <input id="date" name="date" type="date" class="form-control" placeholder="Date of Transaction" aria-label="Date of Transaction" aria-describedby="basic-addon1" required>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label for="time">Time of Transaction</label>
                                                                    <input id="time" name="time" type="time" class="form-control" placeholder="Time of Transaction" aria-label="Time of Transaction" aria-describedby="basic-addon1" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                        
                                                </div>

                                            <?php elseif($paymentMethod=="master_card"):
                                            ?>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">

                                                                <img src="<?= PATH_URL ?>public/img/master_card.jpg" alt="#" class="img-fluid" width="200px" height="100px">
                                                                <!-- <h3 class="title"><br>Deposite Money</h3>
                                                                <div>
                                                                <h4> Bank Name: <?//=//BANK_NAME?></h4>
                                                                <h4> Branch: <?//=//BANK_BRANCH?></h4>
                                                                <h4> Account Number: <?//=//ACCOUNT_NUMBER?></h4>
                                                                <h4> Account Name: <?//=//ACCOUNT_NAME?></h4>
                                                                <h4> Amount: <?//=//$total_cart_value?></h4>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="border-left:2px solid black; padding-left:25px">
                                                            <h3 class="title">Master Card Details</h3>
                                                        
                                                            <?php require("master_visa.php")?>

                                                        </div>
                                                    </div>

                                                        
                                                </div>

                                                <?php elseif($paymentMethod=="visa_card"):?>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">

                                                                <img src="<?= PATH_URL ?>public/img/visa_card.jpg" alt="#" class="img-fluid" width="200px" height="100px">
                                                                <!-- <h3 class="title"><br>Deposite Money</h3>
                                                                <div>
                                                                <h4> Bank Name: <?//=//BANK_NAME?></h4>
                                                                <h4> Branch: <?//=//BANK_BRANCH?></h4>
                                                                <h4> Account Number: <?//=//ACCOUNT_NUMBER?></h4>
                                                                <h4> Account Name: <?//=//ACCOUNT_NAME?></h4>
                                                                <h4> Amount: <?//=//$total_cart_value?></h4>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="border-left:2px solid black; padding-left:25px">
                                                            <h3 class="title">Visa Card Details</h3>
                                                        
                                                            <?php require("master_visa.php")?>

                                                        </div>
                                                    </div>

                                                        
                                                </div>

                                            <?php elseif($paymentMethod=="paypal"):
                                                echo $paymentMethod;
                                            ?>

                                            <?php endif;?>
                                        </fieldset>
                                    <?php elseif(isset($_POST["personal_details"])): 
                                           
                                            $back="";
                                        
                                        $submit_name="delivery_address";

                                        $user_id = $_POST["user_id"];
                                        $cart_total = $_POST["cart_total"];
                                        if (isset($_POST["name"])) {
                                            $name = $_POST["name"];
                                        }
                                        if (isset($_POST["lastName"])) {
                                            $lastName = $_POST["lastName"];
                                        }
                                        if (isset($_POST["nickName"])) {
                                            $nickName = $_POST["nickName"];
                                        }
                                        if (isset($_POST["phone"])) {
                                            $phone = $_POST["phone"];
                                        }
                                        if (isset($_POST["phone1"])) {
                                            $phone1 = $_POST["phone1"];
                                        }
                                        if (isset($_POST["email"])) {
                                            $email = $_POST["email"];
                                        }
                                        
                                    ?>
                                                <div class="form-card">
                                                    
                                                    <h2 class="fs-title">Delivery Address</h2>
                                                    <input name="user_id" value="<?=$user_id;?>" type="hidden" >
                                                    <input name="cart_total" value="<?=$cart_total;?>" type="hidden" >
                                                    <input name="name" value="<?=$name;?>" type="hidden" >
                                                    <input name="lastName" value="<?=$lastName;?>" type="hidden" >
                                                    <input name="nickName" value="<?=$nickName;?>" type="hidden" >
                                                    <input name="phone" value="<?=$phone;?>" type="hidden" >
                                                    <input name="phone1" value="<?=$phone1;?>" type="hidden" >
                                                    <input name="email" value="<?=$email;?>" type="hidden" >
                                                    

                                                    <?php if (!isset($user_nav)) : ?>
                                                            <input type="text" name="address" class="form-control" placeholder="Address Line 1..." required>
                                                            <input type="text" name="address1" class="form-control" placeholder="Address Line 2...">
                                                            <input type="text" name="city" placeholder="City/town" required/>
                                                            
                                                            <!-- <select name="country" required>
                                                                <option value="0">Province</option>
                                                                <option selected value="Sierra Leone">Sierra Leone</option>
                                                            </select> -->
                                                            <!-- <select name="country" required>
                                                                <option value="0">Country</option>
                                                                <option selected value="Sierra Leone">Sierra Leone</option>
                                                            </select> -->
                                                        <?php else : ?>
                                                            <input type="text" name="address" value="<?= $user_login['user_address'] ?>" class="form-control" placeholder="Address Line 1..." required>
                                                            <input type="text" name="address1" class="form-control" placeholder="Address Line 2...">
                                                            <input type="text" name="city" placeholder="City/town" value="<?=$user_login['user_city'] ?>" required />
                                                            
                                                        <?php endif;?>
                                                        <select name="district" required>
                                                                <option value="">District</option>
                                                                <option value="Bo">Bo</option>
                                                                <option value="Bombali">Bombali</option>
                                                                <option value="Bonthe">Bonthe</option>
                                                                <option value="Falaba">Falaba</option>
                                                                <option value="Kailahun">Kailahun</option>
                                                                <option value="Kambia">Kambia</option>
                                                                <option value="Karena">Karena</option>
                                                                <option value="Kenema">Kenema</option>
                                                                <option value="Koinadgu">Koinadgu</option>
                                                                <option value="Kono">Kono</option>
                                                                <option value="Moyamba">Moyamba</option>
                                                                <option value="Portloko">Portloko</option>
                                                                <option value="Pujehun">Pujehun</option>
                                                                <option value="Tonkolili">Tonkolili</option>
                                                                <option value="Western Rural">Western Rural</option>
                                                                <option value="Western Urban">Western Urban</option>
                                                            </select>
                                                    
                                                </div>
                                    <?php elseif(isset($_POST["delivery_address"])): 
                                        $back = "personal_details";
                                        $submit_name="payment_method";

                                        $user_id = $_POST["user_id"];
                                        $cart_total = $_POST["cart_total"];
                                        if (isset($_POST["name"])) {
                                            $name = $_POST["name"];
                                        }
                                        if (isset($_POST["lastName"])) {
                                            $lastName = $_POST["lastName"];
                                        }
                                        if (isset($_POST["nickName"])) {
                                            $nickName = $_POST["nickName"];
                                        }
                                        if (isset($_POST["phone"])) {
                                            $phone = $_POST["phone"];
                                        }
                                        if (isset($_POST["phone1"])) {
                                            $phone1 = $_POST["phone1"];
                                        }
                                        if (isset($_POST["email"])) {
                                            $email = $_POST["email"];
                                        }
                                        if ($_POST["address"]) {
                                            $address = $_POST["address"];
                                        }
                                        // if ($_POST["address1"]) {
                                        //     $address1 = $_POST["address1"];
                                        // }
                                        if ($_POST["district"]) {
                                            $district = $_POST["district"];
                                        }
                                        if ($_POST["city"]) {
                                            $city = $_POST["city"];
                                        }
                                        // if ($_POST["province"]) {
                                        //     $province = $_POST["province"];
                                        // }
                                        // if ($_POST["country"]) {
                                        //     $country = $_POST["country"];
                                        // }

                                        ?>
                                                <div class="form-card row">
                                                    <h2 class="fs-title">Choose Your Payment Method</h2>
                                                    <input name="user_id" value="<?=$user_id;?>" type="hidden" >
                                                    <input name="cart_total" value="<?=$cart_total;?>" type="hidden" >
                                                    <input name="name" value="<?=$name;?>" type="hidden" >
                                                    <input name="lastName" value="<?=$lastName;?>" type="hidden" >
                                                    <input name="nickName" value="<?=$nickName;?>" type="hidden" >
                                                    <input name="phone" value="<?=$phone;?>" type="hidden" >
                                                    <input name="phone1" value="<?=$phone1;?>" type="hidden" >
                                                    <input name="email" value="<?=$email;?>" type="hidden" >
                                                    <input name="address" value="<?=$address;?>" type="hidden" >
                                                    <input name="address1" value="<?=$address1;?>" type="hidden" >
                                                    <input name="district" value="<?=$district;?>" type="hidden" >
                                                    <input name="city" value="<?=$city;?>" type="hidden" >

                                            
                                                    <style>

                                                        .frb ~ .frb {
                                                            margin-top: 15px;
                                                        }

                                                        .frb input[type="radio"]:empty,
                                                        .frb input[type="checkbox"]:empty {
                                                            display: none;
                                                        }

                                                        .frb input[type="radio"] ~ label:before,
                                                        .frb input[type="checkbox"] ~ label:before {
                                                            font-family: FontAwesome;
                                                            content: '\f096';
                                                            position: absolute;
                                                            top: 50%;
                                                            margin-top: -11px;
                                                            left: 15px;
                                                            font-size: 22px;
                                                            display:none;

                                                        }

                                                        .frb input[type="radio"]:checked ~ label:before,
                                                        .frb input[type="checkbox"]:checked ~ label:before {
                                                            content: '\f046';
                                                        }

                                                        .frb input[type="radio"] ~ label,
                                                        .frb input[type="checkbox"] ~ label {
                                                            position: relative;
                                                            cursor: pointer;
                                                            width: 100%;
                                                            border: 1px solid #ccc;
                                                            border-radius: 5px;
                                                            background-color: #f2f2f2;
                                                        }

                                                        .frb input[type="radio"] ~ label:focus,
                                                        .frb input[type="radio"] ~ label:hover,
                                                        .frb input[type="checkbox"] ~ label:focus,
                                                        .frb input[type="checkbox"] ~ label:hover {
                                                            box-shadow: 0px 0px 3px #333;
                                                        }

                                                        .frb input[type="radio"]:checked ~ label,
                                                        .frb input[type="checkbox"]:checked ~ label {
                                                            color: #fafafa;
                                                        }

                                                        .frb input[type="radio"]:checked ~ label,
                                                        .frb input[type="checkbox"]:checked ~ label {
                                                            background-color: #f2f2f2;
                                                        }

                                                        .frb.frb-primary input[type="radio"]:checked ~ label,
                                                        .frb.frb-primary input[type="checkbox"]:checked ~ label {
                                                            background-color: #337ab7;
                                                        }

                                                        label img{
                                                            width:185px;
                                                            height:100px;
                                                        }
                                                    </style>
                                                    <div class="row">
                                                        <!-- RADIO BUTTONS BLOCK -->
                                                        
                                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                                            <div class="frb frb-primary" >
                                                                <input type="radio" checked id="orange_money" name="paymentMethod" value="orange_money" hidden >
                                                                <label for="orange_money" style="padding:10px;">
                                                                    <img src="<?= PATH_URL ?>public/img/orange_money.png" alt="#" class="img-fluid">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                                            <div class="frb frb-primary" >
                                                                <input type="radio" id="afri_money" name="paymentMethod" value="afri_money" hidden>
                                                                <label for="afri_money" style="padding:10px;" >
                                                                    <img src="<?= PATH_URL ?>public/img/afri_money.jpg" alt="#" class="img-fluid" >
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                                            <div class="frb frb-primary" >
                                                                <input type="radio" id="bank" name="paymentMethod" value="bank" hidden>
                                                                <label for="bank" style="padding:10px;">
                                                                    <img src="<?= PATH_URL ?>public/img/bank.jpg" alt="#" class="img-fluid">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                                            <div class="frb frb-primary" >
                                                                <input type="radio" id="master_card" name="paymentMethod" value="master_card" style="display:none;">
                                                                <label for="master_card" style="padding:10px;">
                                                                    <img src="<?= PATH_URL ?>public/img/master_card.jpg" alt="#" class="img-fluid">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                                            <div class="frb frb-primary" >
                                                                <input type="radio" id="visa_card" name="paymentMethod" value="visa_card" hidden>
                                                                <label for="visa_card" style="padding:10px;">
                                                                    <img src="<?= PATH_URL ?>public/img/visa_card.jpg" alt="#" class="img-fluid">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                                            <div class="frb frb-primary" >
                                                                <input type="radio" id="paypal" name="paymentMethod" value="paypal">
                                                                <label for="paypal" style="padding:10px;">
                                                                    <img src="<?= PATH_URL ?>public/img/paypal.jpg" alt="#" class="img-fluid">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php else: 
                                       
                                        $hidden=true; $submit_name="personal_details"; ?>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Personal Information</h2>
                                                    <input name="cart_total" value="<?= cart_total() ? cart_total() : '0';?>" type="hidden" >
                                                    <input  name="user_id" value="<?= $user_nav?>" type="hidden">
                                                    
                                                    <input type="text" name="name" value="<?=$user_login['user_name']?>" placeholder="First Name" required/>
                                                    <!-- <input type="text" name="lastName" value="<?//=$user_login['user_name']?>"placeholder="Last Name" required/> -->
                                                    <!-- <input type="text" name="nickName" value="<?//=$user_login['user_name']?>"placeholder="Last Name"/> -->
                                                    <input type="text" name="phone" value="<?=$user_login['user_phone']?>" placeholder="Contact No." required/>
                                                    <input type="text" name="phone1" placeholder="Alternate Contact No." value="" />
                                                    <input type="email" name="email" placeholder="Email Address" value="<?=$user_login['user_email'] ?>"/>
                                                </div>               
                                    <?php endif;?>
                                    <input type="submit" name="<?=$back;?>" class="previous action-button-previous" value="BACK" <?php if($hidden){ echo "hidden"; $hidden=false;}?>/>
                                    <input type="submit" name='<?=$submit_name;?>' class="next action-button" value='<?php echo $next_btn_value;?>'/>
                                </fieldset>                                   
                            </form> 
                        </div>
                    </div>
                </div>
                <script>
                    // $(document).ready(function(){
    
                    // var current_fs, next_fs, previous_fs; //fieldsets
                    // var opacity;
                    
                    // $(".next").click(function(){
                        
                    //     current_fs = $(this).parent();
                    //     next_fs = $(this).parent().next();
                        
                    //     //Add Class Active
                    //     $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        
                    //     //show the next fieldset
                    //     next_fs.show(); 
                    //     //hide the current fieldset with style
                    //     current_fs.animate({opacity: 0}, {
                    //         step: function(now) {
                    //             // for making fielset appear animation
                    //             opacity = 1 - now;
                    
                    //             current_fs.css({
                    //                 'display': 'none',
                    //                 'position': 'relative'
                    //             });
                    //             next_fs.css({'opacity': opacity});
                    //         }, 
                    //         duration: 600
                    //     });
                    // });
                    
                    // $(".previous").click(function(){
                        
                    //     current_fs = $(this).parent();
                    //     previous_fs = $(this).parent().prev();
                        
                    //     //Remove class active
                    //     $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                        
                    //     //show the previous fieldset
                    //     previous_fs.show();
                    
                    //     //hide the current fieldset with style
                    //     current_fs.animate({opacity: 0}, {
                    //         step: function(now) {
                    //             // for making fielset appear animation
                    //             opacity = 1 - now;
                    
                    //             current_fs.css({
                    //                 'display': 'none',
                    //                 'position': 'relative'
                    //             });
                    //             previous_fs.css({'opacity': opacity});
                    //         }, 
                    //         duration: 600
                    //     });
                    // });
                    
                    // $('.radio-group .radio').click(function(){
                    //     $(this).parent().find('.radio').removeClass('selected');
                    //     $(this).addClass('selected');
                    // });
                    
                    // $(".submit").click(function(){
                    //     return false;
                    // })
                        
                    // });
                </script>







                <!-- <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <strong>Review & Checkout</strong>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="panel-body">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">
                                                &nbsp;
                                            </th>
                                            <th class="product-name">
                                            Product                                            
                                            </th>
                                            <th class="product-price">
                                            Price                                            
                                            </th>
                                            <th class="product-quantity">
                                            Amount                                            
                                            </th>
                                            <th class="product-subtotal">
                                            Total                                            
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cart as $product_id => $product) { ?>
                                            <tr class="cart_table_item">
                                                <td class="product-thumbnail">
                                                    <a href="product/<?php echo $product['id'] . '-' . slug($product['name']); ?>">
                                                        <img width="100" height="100" alt="<?=$product['name']?>" class="img-responsive" src="<?php echo 'public/upload/products/' . $product['image'] ?>">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="product/<?php echo $product['id'] . '-' . slug($product['name']); ?>"><?php echo $product['name'] ?></a>
                                                </td>
                                                <td class="product-price">
                                                    <?php if ($product["typeid"] == 3) : ?>
                                                        <span class="amount"><?php echo $product ? number_format(($product['price']) - ($product['price']) * ($product['percent_off']) / 100, 0, ',', '.') : 0; CURRENCY?></span>
                                                    <?php else : ?>
                                                        <span class="amount"><?php echo number_format($product['price'], 0, ',', '.'); CURRENCY?></span>
                                                    <?php endif ?>
                                                </td>
                                                <td class="product-quantity">
                                                    <?php echo $product['number']; ?>
                                                </td>
                                                <td class="product-subtotal">
                                                    <?php if ($product["typeid"] == 3) : ?>
                                                        <span class="amount"><?php echo number_format((($product['price']) - ($product['price']) * ($product['percent_off']) / 100) * $product['number'], 0, ',', '.') ?> VNĐ</span>
                                                    <?php else : ?>
                                                        <span class="amount"><?php echo number_format($product['price'] * $product['number'], 0, ',', '.') ;CURRENCY?></span>
                                                    <?php endif ?>
                                                </td>
                                            </tr><?php } ?>
                                    </tbody>
                                </table>
                                <hr class="tall">
                                <h4>Total cart statistics</h4>
                                <table cellspacing="0" class="cart-totals">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>
                                                <strong>Total products</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount"><?php echo cart_number(); ?></span></strong>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <th>
                                                <strong>Total cart value</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount"><?php echo number_format(cart_total(), 0, ',', '.'); CURRENCY?></span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="tall">
                                <h3 style="text-align: center;"><strong>Note ordering and payment</strong></h3>
                                <p><strong>My shop only supports customers to eat at the restaurant and Free Shipping is within a radius of 5km</strong>, If you have ordered products in the list <strong>Eating</strong> but have a delivery address <strong>exceeds 10km</strong>, please understand and allow the shop to Sincere apologies for not being able to deliver!</p>
                                <p>For beauty and cosmetic products,... (Outside the <strong>Food and Drink</strong> category), our shop still supports Free Shipping within a radius of 10km and Ship COD Nationwide!</p>                                <form action="" id="" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="remember-box checkbox">
                                                <label>
                                                    <input type="checkbox" checked="checked">Transfer money on receipt - Ship COD
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <strong>Delivery Address</strong>                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse in">
                            <div class="panel-body">
                                <form action="index.php?controller=cart&amp;action=checkout" role="form" id="" method="post">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                            <label>Country</label>                                               
                                             <select class="form-control">
                                                    <option value="">Sierra Leone</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!isset($user_nav)) : ?>
                                        <input type="hidden" name="user_id" value="0">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label><strong>Surname & First Name</strong></label>
                                                    <input type="text" name="name" class="form-control" required="required" placeholder="Nhập họ và tên thật ...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label><strong>Province/City</strong></label>
                                                    <input type="text" name="province" required="required" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label><strong>Phone number to contact</strong></label>
                                                    <input type="text" name="phone" required="required" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label><strong>Address</strong> </label>
                                                    <input type="text" name="address" required="required" class="form-control" placeholder="Please enter your address details...">
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <input type="hidden" name="user_id" value="<?= $user_nav ?>">
                                        <h3>The information below is automatically added from your account. You can correct it if the information is incorrect!</h3>                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label><strong>Surname & First Name</strong></label>
                                                    <input type="text" name="name" value="<?= $user_login['user_name'] ?>" class="form-control" required="required" placeholder="Enter your first and last name...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label><strong>Province/City</strong></label>
                                                    <input type="text" name="province" required="required" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label><strong>Phone number to contact</strong></label>
                                                    <input type="text" value="<?= $user_login['user_phone'] ?>" name="phone" required="required" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label><strong>Address </strong></label>
                                                    <input type="text" name="address" value="<?= $user_login['user_address'] ?>" required="required" class="form-control" placeholder="Please enter the address details...">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label><strong>Message - order notes: </strong></label>
                                                <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Note for merchants...(You can add numeric information... quantity, size,...about the products you want to order to me so that I can arrange delivery for you.)"></textarea>                                            </div>
                                        </div>
                                    </div>
                                    <input name="cart_total" type="hidden" value="<?php echo cart_total() ? cart_total() : '0'; ?>" />
                                    <div class="form-group" style="text-align: center">
                                        <button type="submit" class="btn btn-primary"><i class="fa  fa-check-square-o"></i> Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-3">
                <div class="container-checkout">

                    <h4>Cart 
                        <span class='price' style='color:black'>
                        <i class='fa fa-shopping-cart'></i> 
                        <b><?=cart_number()?></b>
                        </span>
                    </h4>
                    <table class='table table-condensed'>
                        <thead>
                            <tr>
                                <th >No</th><th >Product Title</th><th >Qty	</th><th >Amount</th></tr>
                        </thead>
                        <tbody>
                            <?php
                                // if (isset($_POST["cmd"])) {
                                
                                // 	$user_id = $_POST['custom'];
                                    
                                // $i=1;
                                // $total=0;
                                // $total_count=cart_number();

                                $item_number_=0;
                                foreach ($cart as $product_id => $product) {
                                    $item_number_++;
                                    $item_name_ = slug($product['name']);
                                    $quantity_ = $product['number'];
                                    if ($product["typeid"] == 3){
                                        $amount_ = CURRENCY." ".number_format((($product['price']) - ($product['price']) * ($product['percent_off']) / 100) * $product['number'], 0, ',', '.');
                                    }else {
                                        $amount_ = CURRENCY." ".number_format($product['price'] * $product['number'], 0, ',', '.');
                                    }
                                    // $total+=$amount_ ;
                                    echo "<tr>
                                            <td><p>$item_number_</p></td><td><p>$item_name_</p></td><td ><p>$quantity_</p></td><td ><p>".$amount_."</p></td>
                                        </tr>";
                                }   
                            ?>
                        </tbody>
                    </table>
                    <hr>
                    <h4>Total 
                        <span class='price' style='color:black'>
                            <b><?=CURRENCY." ".$total_cart_value?></b>
                        </span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('content/views/shared/footer.php');
