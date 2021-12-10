<div class="new_form">
    <form action="../../backend/update_application.php/<?= $row['id'] ?>" class="new_application" method="POST" enctype="multipart/form-data">
    <!-- <?php
        if(isset($_SESSION['success-message'])){
            echo "<div class='text-success'>".$_SESSION['success-message']."</div>";
        }
        if(isset($_SESSION['errors'])) {
            foreach($_SESSION['errors'] as $error){
                echo "<div class='text-danger'>".$error."</div>";;
            }
        }
    ?> -->

    
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
                <input type="text" name="fname" class="form-control" value="<?= $row['first_name']?>" placeholder="Enter your first name" required>
            </div>

            <div class="form-input">
                <label for="">Middle Name</label>
                <input type="text" name="mname" class="form-control" value="<?= $row['middle_name']?>"" placeholder="Enter your middle name" >
            </div>

            <div class="form-input">
                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?= $row['last_name']?>" placeholder="Enter your last name" required>
            </div>

            <div class="form-input">
                <label for="">Gender</label>
                <div class="gender">
                    <input type="radio" name="gender" value="M" id="male" <?= (($row['gender'] === "M") ? "checked" : null) ?> >
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="F" id="female" <?= (($row['gender'] === "F") ? "checked" : null) ?> >
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="O" id="others" <?= (($row['gender'] === "O") ? "checked" : null) ?> >
                    <label for="others">Khusi</label>
                </div>
            </div>

            <div class="form-input">
                <label for="">DOB</label>
                <input type="date" name="dob" class="form-control"value="<?= $row['dob']?>" placeholder="Enter your dob" required>
            </div>

            <div class="form-input">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $row['email']?>" placeholder="Enter your email" required>
            </div>

            <div class="form-input">
                <label for="">Contact No.</label>
                <input type="text" name="contact" class="form-control" value="<?= $row['contact']?>" placeholder="Enter your email" required>
            </div>

            <div class="form-input">
                <label for="">Grand Father</label>
                <input type="text" name="grand_father" class="form-control" value="<?= $row['grandfather_name']?>" placeholder="Enter your Grand Father's Name">
            </div>

            <div class="form-input">
                <label for="">Father</label>
                <input type="text" name="father" class="form-control" value="<?= $row['father_name']?>" placeholder="Enter your Father's Name">
            </div>

            <div class="form-input">
                <label for="">Mother</label>
                <input type="text" name="mother" class="form-control" value="<?= $row['mother_name']?>" placeholder="Enter your Mother's Name">
            </div>

            <div class="form-input">
                <label for="">Spouse Name</label>
                <input type="text" name="spouse_name" class="form-control" value="<?= $row['spouse_name']?>" placeholder="Enter your Spouse Name">
            </div>

            <div class="form-input">
                <label for="">Son</label>
                <input type="text" name="son" class="form-control" value="<?= $row['son']?>" placeholder="Enter your Son">
            </div>

            <div class="form-input">
                <label for="">Daughter</label>
                <input type="text" name="daughter" class="form-control" value="<?= $row['daughter']?>" placeholder="Enter your Daughter">
            </div>

            <div class="form-input">
                <label for="">Occupation</label>
                <input type="text" name="occupation" class="form-control" value="<?= $row['occupation']?>" placeholder="Enter your Occupation">
            </div>

            <div class="form-input">
                <label for="">Blood Group</label>
                <input type="text" name="blood_group" class="form-control" value="<?= $row['blood_group']?>" placeholder="Enter your Blood Group">
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
                    <option value="1" <?= (($row['pri_pro_no'] === "1") ? "selected" : null) ?> >1</option>
                    <option value="2" <?= (($row['pri_pro_no'] === "2") ? "selected" : null) ?> >2</option>
                    <option value="3"  <?= (($row['pri_pro_no'] === "3") ? "selected" : null) ?> >3</option>
                    <option value="4" <?= (($row['pri_pro_no'] === "4") ? "selected" : null) ?> >4</option>
                    <option value="5"  <?= (($row['pri_pro_no'] === "5") ? "selected" : null) ?> >5</option>
                    <option value="6"  <?= (($row['pri_pro_no'] === "6") ? "selected" : null) ?> >6</option>
                    <option value="7"  <?= (($row['pri_pro_no'] === "7") ? "selected" : null) ?> >7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Zone</label>
                <select name="p_zone" id="p_zone" required>
                    <option value="0">Zone.</option>
                    <option value="1" <?= (($row['pri_zone'] === "1") ? "selected" : null) ?> >Gandaki</option>
                    <option value="2" <?= (($row['pri_zone'] === "2") ? "selected" : null) ?> >2</option>
                    <option value="3" <?= (($row['pri_zone'] === "3") ? "selected" : null) ?> >3</option>
                    <option value="4"<?= (($row['pri_zone'] === "4") ? "selected" : null) ?> >4</option>
                    <option value="5" <?= (($row['pri_zone'] === "5") ? "selected" : null) ?> >5</option>
                    <option value="6" <?= (($row['pri_zone'] === "6") ? "selected" : null) ?> >6</option>
                    <option value="7" <?= (($row['pri_zone'] === "7") ? "selected" : null) ?> >7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">District</label>
                <select name="p_district" id="p_district" required>
                    <option value="0">District.</option>
                    <option value="1" <?= (($row['pri_district'] === "1") ? "selected" : null) ?> >Kaski</option>
                    <option value="2" <?= (($row['pri_district'] === "2") ? "selected" : null) ?> >2</option>
                    <option value="3" <?= (($row['pri_district'] === "3") ? "selected" : null) ?> >3</option>
                    <option value="4"<?= (($row['pri_district'] === "4") ? "selected" : null) ?> >4</option>
                    <option value="5" <?= (($row['pri_district'] === "5") ? "selected" : null) ?> >5</option>
                    <option value="6" <?= (($row['pri_district'] === "6") ? "selected" : null) ?> >6</option>
                    <option value="7" <?= (($row['pri_district'] === "7") ? "selected" : null) ?> >7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Metro/Sub Metro/VDC</label>
                <input type="text" name="p_metro" class="form-control" id="p_metro" value="<?=($row['pri_city'] ?? null);?>" required>
            </div>

            <div class="form-input">
                <label for="">Ward No.</label>
                <input type="number" min="1" name="p_ward" class="form-control" id="p_ward" value="<?=($row['pri_ward'] ?? null);?>" required>
            </div>

            <div class="form-input">
                <label for="">Street/Tole</label>
                <input type="text" name="p_street" class="form-control" id="p_street" value="<?=($row['pri_street'] ?? null);?>" required>
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
                    <option value="1" <?= (($row['temp_pro_no'] === "1") ? "selected" : null) ?> >1</option>
                    <option value="2" <?= (($row['temp_pro_no'] === "2") ? "selected" : null) ?> >2</option>
                    <option value="3" <?= (($row['temp_pro_no'] === "3") ? "selected" : null) ?> >3</option>
                    <option value="4"<?= (($row['temp_pro_no'] === "4") ? "selected" : null) ?> >4</option>
                    <option value="5" <?= (($row['temp_pro_no'] === "5") ? "selected" : null) ?> >5</option>
                    <option value="6" <?= (($row['temp_pro_no'] === "6") ? "selected" : null) ?> >6</option>
                    <option value="7" <?= (($row['temp_pro_no'] === "7") ? "selected" : null) ?> >7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Zone</label>
                <select name="t_zone" id="t_zone">
                    <option value="1" <?= (($row['temp_zone'] === "1") ? "selected" : null) ?> >1</option>
                    <option value="2" <?= (($row['temp_zone'] === "2") ? "selected" : null) ?> >2</option>
                    <option value="3" <?= (($row['temp_zone'] === "3") ? "selected" : null) ?> >3</option>
                    <option value="4"<?= (($row['temp_zone'] === "4") ? "selected" : null) ?> >4</option>
                    <option value="5" <?= (($row['temp_zone'] === "5") ? "selected" : null) ?> >5</option>
                    <option value="6" <?= (($row['temp_zone'] === "6") ? "selected" : null) ?> >6</option>
                    <option value="7" <?= (($row['temp_zone'] === "7") ? "selected" : null) ?> >7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">District</label>
                <select name="t_district" id="t_district">
                    <option value="0">District.</option>
                    <option value="1" <?= (($row['temp_district'] === "1") ? "selected" : null) ?> >1</option>
                    <option value="2" <?= (($row['temp_district'] === "2") ? "selected" : null) ?> >2</option>
                    <option value="3" <?= (($row['temp_district'] === "3") ? "selected" : null) ?> >3</option>
                    <option value="4"<?= (($row['temp_district'] === "4") ? "selected" : null) ?> >4</option>
                    <option value="5" <?= (($row['temp_district'] === "5") ? "selected" : null) ?> >5</option>
                    <option value="6" <?= (($row['temp_district'] === "6") ? "selected" : null) ?> >6</option>
                    <option value="7" <?= (($row['temp_district'] === "7") ? "selected" : null) ?> >7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Metro/Sub Metro/VDC</label>
                <input type="text" name="t_metro" class="form-control" id="t_metro" value="<?=($row['temp_city'] ?? null);?>">
            </div>

            <div class="form-input">
                <label for="">Ward No.</label>
                <input type="number" min="1" name="t_ward" class="form-control" id="t_ward" value="<?=($row['temp_ward'] ?? null);?>">
            </div>

            <div class="form-input">
                <label for="">Street/Tole</label>
                <input type="text" name="t_street" class="form-control" id="t_street" value="<?=($row['temp_street'] ?? null);?>">
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
                    <input type="hidden" name="user_photo_name" value="<?=($doc['photo'] ?? null);?>" >
                </div>
                <div class="form-input">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Citizenship Card</label>
                    <input type="file" name="citizenship_card">
                    <input type="hidden" name="citizenship_card_name" value="<?=($doc['c_file'] ?? null);?>" >
                </div>
                <div class="form-input">
                    <label for="">Citizenship Card Number</label>
                    <input type="text" name="citizenship_no" class="form-control" value="<?=($doc['c_n'] ?? null);?>" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Passport</label>
                    <input type="file" name="passport">
                    <input type="hidden" name="passport_name" value="<?=($doc['pass_file'] ?? null);?>" >
                    
                </div>
                <div class="form-input">
                    <label for="">Passport No.</label>
                    <input type="text" name="passport_no" class="form-control" value="<?=($doc['pass_n'] ?? null);?>" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">License</label>
                    <input type="file" name="license">
                    <input type="hidden" name="license_name" value="<?=($doc['lic_file'] ?? null);?>" >
                </div>
                <div class="form-input">
                    <label for="">License No.</label>
                    <input type="text" name="license_no" class="form-control" value="<?=($doc['lic_n'] ?? null);?>" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Pan Card</label>
                    <input type="file" name="pancard">
                    <input type="hidden" name="pancard_name" value="<?=($doc['pan_file'] ?? null);?>" >
                </div>
                <div class="form-input">
                    <label for="">Pan Card No.</label>
                    <input type="text" name="pancard_no" class="form-control" value="<?=($doc['pan_n'] ?? null);?>"  placeholder="Enter your card number">
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