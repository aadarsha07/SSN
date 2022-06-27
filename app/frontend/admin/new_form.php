<div class="new_form">
    <form action="../../backend/add_new_application.php" class="new_application" method="POST" enctype="multipart/form-data">
    <?php
        if(isset($_SESSION['success-message'])){
            echo "<div class='text-success'>".$_SESSION['success-message']."</div>";
        }
        if(isset($_SESSION['errors'])) {
            foreach($_SESSION['errors'] as $error){
                echo "<div class='text-danger'>".$error."</div>";;
            }
        }
    ?>

    <div class="form-heading">
            <h3>General Details</h3>
        </div>
        <div class="general_details">
         <!-- <?php
            echo"<pre>";
            print_r($_SESSION); 
        ?> -->
            <div class="form-input">
                <label for="">First Name</label>
                <input type="text" name="fname" class="form-control" value="<?=($_SESSION['ssn-data']['fname'] ?? null);?>" placeholder="Enter your first name">
            </div>

            <div class="form-input">
                <label for="">Middle Name</label>
                <input type="text" name="mname" class="form-control" value="<?=($_SESSION['ssn-data']['mname'] ?? null);?>" placeholder="Enter your middle name">
            </div>

            <div class="form-input">
                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?=($_SESSION['ssn-data']['lname'] ?? null);?>" placeholder="Enter your last name">
            </div>

            <div class="form-input">
                <label for="">Gender</label>
                <div class="gender">
                    <input type="radio" name="gender" value="M" id="male" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['gender'] == 'M' ? 'checked' : null) : null ) ?> required>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="F" id="female" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['gender'] == 'F' ? 'checked' : null) : null ) ?> required>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="O" id="others" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['gender'] == 'O' ? 'checked' : null) : null ) ?> required>
                    <label for="others">Others</label>
                </div>
            </div>

            <div class="form-input">
                <label for="">DOB</label>
                <input type="date" name="dob" class="form-control" value="<?=($_SESSION['ssn-data']['dob'] ?? null);?>" placeholder="Enter your dob">
            </div>

            <div class="form-input">
                <label for="">Email</label>
                <input type="email" readonly class="form-control" value="<?= $_SESSION['email']; ?>" placeholder="Enter your email">
                <input type="hidden" readonly name="email" class="form-control" value="<?= $_SESSION['email']; ?>">
            </div>

            <div class="form-input">
                <label for="">Contact No.</label>
                <input type="text" name="contact" class="form-control" value="<?=($_SESSION['ssn-data']['contact'] ?? null);?>" placeholder="Enter your email">
            </div>

            <div class="form-input">
                <label for="">Grand Father</label>
                <input type="text" name="grand_father" class="form-control" value="<?=($_SESSION['ssn-data']['grand_father'] ?? null);?>" placeholder="Enter your Grand Father's Name">
            </div>

            <div class="form-input">
                <label for="">Father</label>
                <input type="text" name="father" class="form-control" value="<?=($_SESSION['ssn-data']['father'] ?? null);?>" placeholder="Enter your Father's Name">
            </div>

            <div class="form-input">
                <label for="">Mother</label>
                <input type="text" name="mother" class="form-control" value="<?=($_SESSION['ssn-data']['mother'] ?? null);?>" placeholder="Enter your Mother's Name">
            </div>

            <div class="form-input">
                <label for="">Spouse Name</label>
                <input type="text" name="spouse_name" class="form-control" value="<?=($_SESSION['ssn-data']['spouse_name'] ?? null);?>" placeholder="Enter your Spouse Name">
            </div>

            <div class="form-input">
                <label for="">Son</label>
                <input type="text" name="son" class="form-control" value="<?=($_SESSION['ssn-data']['son'] ?? null);?>" placeholder="Enter your Son">
            </div>

            <div class="form-input">
                <label for="">Daughter</label>
                <input type="text" name="daughter" class="form-control" value="<?=($_SESSION['ssn-data']['daughter'] ?? null);?>" placeholder="Enter your Daughter">
            </div>

            <div class="form-input">
                <label for="">Occupation</label>
                <input type="text" name="occupation" class="form-control" value="<?=($_SESSION['ssn-data']['occupation'] ?? null);?>" placeholder="Enter your Occupation">
            </div>

            <div class="form-input">
                <label for="">Blood Group</label>
                <input type="text" name="blood_group" class="form-control" value="<?=($_SESSION['ssn-data']['blood_group'] ?? null);?>" placeholder="Enter your Blood Group">
            </div>
        </div>

        <!-- Permanent Address -->
        <div class="form-heading">
            <h3>Permanent Address</h3>
        </div>
        <div class="permanent_address">
            <div class="form-input">
                <label for="">Province No.</label>
                <select name="p_province_no" id="p_province_no" required>
                    <option value="0">Province No.</option>
                    <option value="1" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="2" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_province_no'] == '1' ? 'selected' : null) : null ) ?> >2</option>
                    <option value="3" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_province_no'] == '1' ? 'selected' : null) : null ) ?> >3</option>
                    <option value="4" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_province_no'] == '1' ? 'selected' : null) : null ) ?> >4</option>
                    <option value="5" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_province_no'] == '1' ? 'selected' : null) : null ) ?> >5</option>
                    <option value="6" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_province_no'] == '1' ? 'selected' : null) : null ) ?> >6</option>
                    <option value="7" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_province_no'] == '1' ? 'selected' : null) : null ) ?> >7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Zone</label>
                <select name="p_zone" id="p_zone" required>
                    <option value="0">Zone.</option>
                    <option value="1" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_zone'] == '1' ? 'selected' : null) : null ) ?> >Gandaki</option>
                    <option value="2" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="3" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="4" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="5" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="6" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="7" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                
                </select>
            </div>

            <div class="form-input">
                <label for="">District</label>
                <select name="p_district" id="p_district" required>
                    <option value="0">District.</option>
                    <option value="1" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_district'] == '1' ? 'selected' : null) : null ) ?> >Kaski</option>
                    <option value="2" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="3" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="4" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="5" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="6" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="7" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['p_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                
                </select>
            </div>

            <div class="form-input">
                <label for="">Metro/Sub Metro/VDC</label>
                <input type="text" name="p_metro" class="form-control" id="p_metro" value="<?=($_SESSION['ssn-data']['p_metro'] ?? null);?>">
            </div>

            <div class="form-input">
                <label for="">Ward No.</label>
                <input type="number" min="1" name="p_ward" class="form-control" id="p_ward" value="<?=($_SESSION['ssn-data']['p_ward'] ?? null);?>">
            </div>

            <div class="form-input">
                <label for="">Street/Tole</label>
                <input type="text" name="p_street" class="form-control" id="p_street" value="<?=($_SESSION['ssn-data']['p_street'] ?? null);?>">
            </div>
        </div>

        <!-- Temporary Address -->
        <div class="form-heading">
            <h3>Temporary Address</h3>
            <div class="temp-checkbox">
                <input type="checkbox" id="temp_checkbox" class="temp-box" onclick="sameAsPermanentAddress(this)">
                <label for="temp_checkbox">
                    Same As Permanent Address
                </label>
            </div>
        </div>
        
        <div class="permanent_address">
        
            <div class="form-input">
                <label for="">Province No.</label>
                <select name="t_province_no" id="t_province_no">
                    <option value="0">Province No.</option>
                    <option value="1" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="2" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="3" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="4" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="5" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="6" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="7" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_province_no'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                
                </select>
            </div>

            <div class="form-input">
                <label for="">Zone</label>
                <select name="t_zone" id="t_zone">
                <option value="0">Zone.</option>
                    <option value="1" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="2" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="3" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="4" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="5" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="6" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="7" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_zone'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                
                </select>
            </div>

            <div class="form-input">
                <label for="">District</label>
                <select name="t_district" id="t_district">
                <option value="0">District.</option>
                    <option value="1" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="2" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="3" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="4" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="5" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="6" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                    <option value="7" <?= (isset($_SESSION['ssn-data']) ? ($_SESSION['ssn-data']['t_district'] == '1' ? 'selected' : null) : null ) ?> >1</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Metro/Sub Metro/VDC</label>
                <input type="text" name="t_metro" class="form-control" id="t_metro" value="<?=($_SESSION['ssn-data']['t_metro'] ?? null);?>">
            </div>

            <div class="form-input">
                <label for="">Ward No.</label>
                <input type="number" min="1" name="t_ward" class="form-control" id="t_ward" value="<?=($_SESSION['ssn-data']['t_ward'] ?? null);?>">
            </div>

            <div class="form-input">
                <label for="">Street/Tole</label>
                <input type="text" name="t_street" class="form-control" id="t_street" value="<?=($_SESSION['ssn-data']['t_street'] ?? null);?>">
            </div>
        </div>
         <!-- User Document -->
         <div class="form-heading">
            <h3>User's Document</h3>
        </div>
        <div class="user_document">
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Photo</label>
                    <input type="file" name="user_photo">
                </div>
                <div class="form-input">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Citizenship Card</label>
                    <input type="file" name="citizenship_card">
                </div>
                <div class="form-input">
                    <label for="">Citizenship Card Number</label>
                    <input type="text" name="citizenship_no" class="form-control" value="<?=($_SESSION['ssn-data']['citizenship_no'] ?? null);?>" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Passport</label>
                    <input type="file" name="passport">
                </div>
                <div class="form-input">
                    <label for="">Passport No.</label>
                    <input type="text" name="passport_no" class="form-control" value="<?=($_SESSION['ssn-data']['passport_no'] ?? null);?>" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">License</label>
                    <input type="file" name="license">
                </div>
                <div class="form-input">
                    <label for="">License No.</label>
                    <input type="text" name="license_no" class="form-control" value="<?=($_SESSION['ssn-data']['license_no'] ?? null);?>" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Pan Card</label>
                    <input type="file" name="pancard">
                </div>
                <div class="form-input">
                    <label for="">Pan Card No.</label>
                    <input type="text" name="pancard_no" class="form-control" value="<?=($_SESSION['ssn-data']['pancard_no'] ?? null);?>"  placeholder="Enter your card number">
                </div>
            </div>
        </div>
    
        <div class="btn-element">
            <div class="form-input">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div> 