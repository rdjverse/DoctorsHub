<?php include('header.php');?>


 <div style= "max-width: fit-content;
  margin-left: auto;
  margin-right: auto;" class="col-lg-6" > 
 <div class="bg-white text-center rounded p-5">
                    <h1 class="mb-4">Book An Appointment</h1>
                    <form >
                        <div class="row g-3">

                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" name="uname">
                            </div>
                        
                            <div class="col-12 col-sm-6">
                                <input type="tel" class="form-control bg-white border-0" id="phone" name="phone" placeholder="Phone Number"  pattern="[0-9]{10}" maxlength="10" style="height: 55px; background-color: #EFF5F9 !important;" />
                            </div>
                            
                            <div class="col-12 col-sm-6"> 

                                <form action="/action_page.php">
                                    
                                    <p>Please select your Gender:</p>
                                         <input type="radio" id="male" name="gender" value="male">
                                         <label for="male">Male</label>
                                         <input type="radio" id="female" name="gender" value="female">
                                         <label for="femle">Female</label>
                                </form>
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Email Address" name="email" style="height: 55px;" >
                            </div>

                            <div class="col-12 col-md-12" id="address" data-target-input="nearest">
                                 <textarea  type="textarea"  id="addressbar" class="form-control bg-light border-0" name=“address” style="height: 55px; resize:none;" placeholder="Address " ></textarea>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="City" name="city" style="height: 55px;" >
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" >
                                    <option selected="">Choose Blood Group</option>
                                    <option value="A-positive">A positive (A+)</option>
                                    <option value="A-negative">A negative (A-)</option>
                                    <option value="B-positive">B positive (B+)</option>
                                    <option value="A-negative">B negative (B-)</option>
                                    <option value="AB-positive">AB positive (AB+)</option>
                                    <option value="AB-negative">AB negative (AB+)</option>
                                    <option value="A-positive">O positive (O+)</option>
                                    <option value="0-negative">O negative (O-)</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">

                                    <option value="0">Please Select a Specialist:</option>
                                    <option value="23">Anaesthesia</option>
                                    <option value="36">Andrology</option>
                                    <option value="32">Audiology &amp; Speech Therapy</option>
                                    <option value="13">Ayurvedic</option>
                                    <option value="7">Cardiologist</option>
                                    <option value="18">Dentist</option>
                                    <option value="15">Dermatologist</option>
                                    <option value="33">Diabetologist</option>
                                    <option value="30">Dietician</option>
                                    <option value="20">Endocrinologist</option>
                                    <option value="5">ENT</option>
                                    <option value="21">Gastroenterologist</option>
                                    <option value="16">Gynaecologist</option>
                                    <option value="34">Haematology</option>
                                    <option value="12">Homoeopathy</option>
                                    <option value="1">Medicine</option>
                                    <option value="25">Nephrologist</option>
                                    <option value="8">Neurologist</option>
                                    <option value="38">Neurosurgeon</option>
                                    <option value="27">Nutritionist</option>
                                    <option value="3">Oncologist</option>
                                    <option value="6">Ophthalmologist</option>
                                    <option value="2">Orthopaedics</option>
                                    <option value="35">Orthopedic Surgeon</option>
                                    <option value="4">Paediatrics</option>
                                    <option value="29">Pathologist</option>
                                    <option value="37">Pediatric Cardiac Surgeon</option>
                                    <option value="14">Physiotherapist</option>
                                    <option value="31">Plastic Surgery</option>
                                    <option value="11">Psychiatrist</option>
                                    <option value="28">Pulmonary Medicine</option>
                                    <option value="24">Radiologist</option>
                                    <option value="10">Rheumatologist</option>
                                    <option value="26">Sexologist</option>
                                    <option value="19">Skin</option>
                                    <option value="39">Somnologist</option>
                                    <option value="22">Surgeon</option>
                                    <option value="9">Urologist</option>

                                </select>
                            </div>

                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected="" value="">Select Doctor</option>
                                    <option value="1">Rishav Das</option>
                                    <option value="2">Bapan Halder</option>
                                    <option value="3">Aritra Majumder</option>
                                    <option value="3">Arup Purkuit</option>
                                    <option value="3">Sourav Halder</option>
                                    <option value="3">Wrick Rakshit</option>
                                </select>
                            </div>
                        
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Date" data-target="#date" name="date" data-toggle="datetimepicker" style="height: 55px;" >
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" name="time" style="height: 55px;" >
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" value="submit" >Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
 </div>


<?php include('footer.php')?>