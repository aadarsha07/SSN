<div class="new_form">
    <form action="../../backend/add_new_application.php" class="new_application" method="POST" enctype="multipart/form-data">
        <div class="form-heading">
            <h3>General Details</h3>
        </div>
        <div class="general_details">

            <div class="form-input">
                <label for="">First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="Enter your first name">
            </div>

            <div class="form-input">
                <label for="">Middle Name</label>
                <input type="text" name="mname" class="form-control" placeholder="Enter your middle name">
            </div>

            <div class="form-input">
                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Enter your last name">
            </div>

            <div class="form-input">
                <label for="">Gender</label>
                <div class="gender">
                    <input type="radio" name="gender" value="M" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="F" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="O" id="others">
                    <label for="others">Khusi</label>
                </div>
            </div>

            <div class="form-input">
                <label for="">DOB</label>
                <input type="date" name="dob" class="form-control" placeholder="Enter your dob">
            </div>

            <div class="form-input">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="form-input">
                <label for="">Contact No.</label>
                <input type="text" name="contact" class="form-control" placeholder="Enter your email">
            </div>

            <div class="form-input">
                <label for="">Grand Father</label>
                <input type="text" name="grand_father" class="form-control" placeholder="Enter your Grand Father's Name">
            </div>

            <div class="form-input">
                <label for="">Father</label>
                <input type="text" name="father" class="form-control" placeholder="Enter your Father's Name">
            </div>

            <div class="form-input">
                <label for="">Mother</label>
                <input type="text" name="mother" class="form-control" placeholder="Enter your Mother's Name">
            </div>

            <div class="form-input">
                <label for="">Spouse Name</label>
                <input type="text" name="spouse_name" class="form-control" placeholder="Enter your Spouse Name">
            </div>

            <div class="form-input">
                <label for="">Son</label>
                <input type="text" name="son" class="form-control" placeholder="Enter your Son">
            </div>

            <div class="form-input">
                <label for="">Daughter</label>
                <input type="text" name="daughter" class="form-control" placeholder="Enter your Daughter">
            </div>

            <div class="form-input">
                <label for="">Occupation</label>
                <input type="text" name="occupation" class="form-control" placeholder="Enter your Occupation">
            </div>

            <div class="form-input">
                <label for="">Blood Group</label>
                <input type="text" name="blood_group" class="form-control" placeholder="Enter your Blood Group">
            </div>
        </div>

        <!-- Permanent Address -->
        <div class="form-heading">
            <h3>Permanent Address</h3>
        </div>
        <div class="permanent_address">
            <div class="form-input">
                <label for="">Province No.</label>
                <select name="p_province_no" id="">
                    <option value="">Province No.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Zone</label>
                <select name="p_zone" id="">
                    <option value="">Zone.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">District</label>
                <select name="p_district" id="">
                    <option value="">District.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Metro/Sub Metro/VDC</label>
                <input type="text" name="p_metro" class="form-control">
            </div>

            <div class="form-input">
                <label for="">Ward No.</label>
                <input type="number" min="1" name="p_ward" class="form-control">
            </div>

            <div class="form-input">
                <label for="">Street/Tole</label>
                <input type="text" name="p_street" class="form-control">
            </div>
        </div>

        <!-- Permanent Address -->
        <div class="form-heading">
            <h3>Temporary Address</h3>
        </div>
        <div class="permanent_address">
            <div class="form-input">
                <label for="">Province No.</label>
                <select name="t_province_no" id="">
                    <option value="">Province No.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Zone</label>
                <select name="t_zone" id="">
                    <option value="">Zone.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">District</label>
                <select name="t_district" id="">
                    <option value="">District.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="form-input">
                <label for="">Metro/Sub Metro/VDC</label>
                <input type="text" name="t_metro" class="form-control">
            </div>

            <div class="form-input">
                <label for="">Ward No.</label>
                <input type="number" min="1" name="t_ward" class="form-control">
            </div>

            <div class="form-input">
                <label for="">Street/Tole</label>
                <input type="text" name="t_street" class="form-control">
            </div>
        </div>
         <!-- User Document -->
         <div class="form-heading">
            <h3>User's Document</h3>
        </div>
        <div class="user_document">
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Citizenship Card</label>
                    <input type="file" name="citizenship_card">
                </div>
                <div class="form-input">
                    <label for="">Citizenship Card Number</label>
                    <input type="text" name="citizenship_no" class="form-control" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Passport</label>
                    <input type="file" name="passport">
                </div>
                <div class="form-input">
                    <label for="">Passport No.</label>
                    <input type="text" name="passport_no" class="form-control" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">License</label>
                    <input type="file" name="license">
                </div>
                <div class="form-input">
                    <label for="">License No.</label>
                    <input type="text" name="license_no" class="form-control" placeholder="Enter your card number">
                </div>
            </div>
            <div class="user_document_element">
                <div class="form-input">
                    <label for="">Pan Card</label>
                    <input type="file" name="pancard">
                </div>
                <div class="form-input">
                    <label for="">Pan Card No.</label>
                    <input type="text" name="pancard_no" class="form-control" placeholder="Enter your card number">
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