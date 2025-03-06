<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 animated fadeIn col-lg-6 center-screen">
            <div class="card w-90  p-4">
                <div class="card-body">
                    <h4 class="text-center mb-4 fw-bold text-primary">SIGN IN</h4>
                    <br/>
                    <input id="email" placeholder="User Email" class="form-control" type="email"/>
                    <br/>
                    <input id="password" placeholder="User Password" class="form-control" type="password"/>
                    <br/>
                    <button onclick="SubmitLogin()" class="btn w-100 bg-gradient-primary">Next</button>
                    <hr/>
                    <div class="float-end mt-3">
                        <span>
                            <a class="text-center ms-3 h6" href="{{url('/userRegistration')}}">Sign Up </a>
                            <span class="ms-1">|</span>
                            <a class="text-center ms-3 h6" href="{{url('/sendOtp')}}">Forget Password</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    async function SubmitLogin() {
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        
        // Trim inputs to remove whitespace
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();
    
        // Validation checks
        if (!email) {
            errorToast("Email is required");
            emailInput.focus();
            return;
        }
    
        if (!isValidEmail(email)) {
            errorToast("Please enter a valid email address");
            emailInput.focus();
            return;
        }
    
        if (!password) {
            errorToast("Password is required");
            passwordInput.focus();
            return;
        }
    
        if (!isValidPassword(password)) {
            errorToast("Password must contain:\n- 8+ characters\n- Uppercase & lowercase letters\n- At least 1 number\n- At least 1 special character");
            passwordInput.focus();
            return;
        }
    
        try {
            showLoader();
            const res = await axios.post("/user-login", {
                email: email,
                password: password
            });
    
            hideLoader();
            
            if (res.status === 200 && res.data?.status === 'success') {
                window.location.href = "/dashboard";
            } else {
                errorToast(res.data?.message || "Login failed");
            }
        } catch (error) {
            hideLoader();
            const errorMessage = error.response?.data?.message 
                || "An error occurred during login";
            errorToast(errorMessage);
        }
    }
    
    function isValidEmail(email) {
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
    }
    
    function isValidPassword(password) {
        // Requires:
        // - Minimum 8 characters
        // - At least 1 uppercase
        // - At least 1 lowercase
        // - At least 1 number
        // - At least 1 special character
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        return passwordRegex.test(password);
    }
</script>