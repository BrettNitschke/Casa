<div class="container-fluid" id="main-alt">
    <div class="row">
        <div class="form-container">
            <form  action="<?php echo URL; ?>signup/addnewuser" method="POST" autocomplete="off" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
                <div class="form-group">
                    <h2 class="signup-login-header">Sign Up</h2>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner-addon right-addon">
                                <i class="ionicons ion-ios-person-outline"></i>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner-addon right-addon">
                                <i class="ionicons ion-ios-person-outline"></i>
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="inner-addon right-addon">
                        <i class="ionicons ion-ios-person-outline"></i>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="inner-addon right-addon">
                        <i class="ionicons ion-ios-email-outline"></i>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="inner-addon right-addon">
                        <i class="ionicons ion-ios-locked-outline"></i>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group text-center">
                    Are you currently an SF State student?
                    <label class="switch">
                        <input type="checkbox" name="isStudent" value="1">
                        <div class="slider round"></div>
                    </label>
                </div>

                <div class="form-group text-center">
                    <input type="checkbox" value="check" id="agree"> By signing up, I agree to Casa's <a href="<?php echo URL; ?>terms">Terms & Privacy</a>.
                </div> 

                <div class="form-group">
                    <button type="submit" class="btn btn-block signup-login-btn" name="submit_add_user">Sign Up</button>
                </div> 

                <div class="signup-login-footer">
                    Already have a Casa account?
                    <a href="#login" onclick="document.getElementById('popup-login').style.display = 'block'" class="signup-login-footer-btn">Log In</a>
                </div>
            </form>
        </div>
    </div>
</div>