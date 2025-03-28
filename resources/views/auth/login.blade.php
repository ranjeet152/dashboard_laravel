@extends('layout.index-hero')

@section("main-page") 

<!-- Font Awesome CDN (Corrected) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
  .password-container {
            position: relative;
            width: 100%;
        }

        .password-container input {
            width: 100%;
            padding: 7px;
            padding-right: 50px; /* Space for icon */
            border: .5px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 15px;
            color: gray;
        }

        .toggle-password:hover {
            color: black;
        }
</style>

<div class="container" id="container-form">
    <!-- Title section -->
    <div class="title">Users LogIn</div>
    <div class="content" id="content-form">
        <!-- Registration form --> 
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="user-details"> 
                <div class="input-box">
                    <span class="details">Email or Username</span>
                    <input type="text" name="email" id="login" placeholder="Enter your email or username" value="{{ old('email') }}" required>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>   
                <div class="input-box">
                  <span class="details">Password</span>
                  <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                    <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
                  </div> 
                </div>  
            </div> 
           
            <!-- Submit button -->
            <div class="button">
              <input type="submit" value="Login">
            </div>
            <div class="user-details">
              <div class="input-box">
                <p id="p1">New here? No worries! <a href="{{ route('registration') }}" style="font-size: 2rem; padding: 0px 5px 0px 5px;"><u>Register</u></a>and join us today! 🎉</p>
              </div>
              
              </div>
            </div>
            <div class="user-details" id="social-buttons">
              <div class="input-box"> 
                <a href="" class="github"><img src="{{ asset('images/github.svg') }}" alt="GitHub">GitHub</a>
              </div> 
              <div class="input-box">
                <a href="" class="google"><img src="{{ asset('images/google.png') }}" alt="Google">Google</a> 
              </div> 
              <div class="input-box">
                <a href="" class="linkedin"><img src="{{ asset('images/linkedin_logo.png') }}" alt="LinkedIn">LinkedIn</a> 
              </div>
              <div class="input-box">
                <a href="" class="telegram"><img src="{{ asset('images/Telegram_logo.svg') }}" alt="Telegram">Telegram</a>
              </div>
            </div> 

          </form>
    </div>
</div> 


<script>
        const passwordField = document.getElementById("password");
        const togglePassword = document.getElementById("togglePassword");
    
        togglePassword.addEventListener("click", function (e) {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("fa-eye");
                togglePassword.classList.add("fa-eye-slash");  
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("fa-eye-slash");
                togglePassword.classList.add("fa-eye");  
            }
        });
</script>


<style>
    /* Importing Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

#container-form {
  font-family: 'Poppins', sans-serif;
  max-width: 900px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px; 
  box-shadow: 0 5px 10px rgba(3, 3, 3, 0.25);
}
#container-form .title {
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
#container-form .title::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
#content-form form .user-details {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box {
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details {
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input {
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid {
  border-color: #9b59b6;
}
form .gender-details .gender-title {
  font-size: 20px;
  font-weight: 500;
}
form .category {
  display: flex;
  width: 80%;
  margin: 14px 0;
  justify-content: space-between;
}
form .category label {
  display: flex;
  align-items: center;
  cursor: pointer;
}
form .category label .dot {
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
#dot-1:checked~.category label .one,
#dot-2:checked~.category label .two,
#dot-3:checked~.category label .three {
  background: #9b59b6;
  border-color: #d9d9d9;
}
form input[type="radio"] {
  display: none;
}
form .button {
  height: 45px;
  margin: 35px 0
}
form .button input {
  height: 100%;
  width: 100%;
  border-radius: 5px;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  cursor: pointer;
  transition: all 0.3s ease;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
form .button input:hover {
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}

/* icons  */
#social-buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    #social-buttons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 12px;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
        color: white;
    }

    #social-buttons img {
        width: 24px;
        margin-right: 10px;
    }

    .github { background:rgb(156, 158, 161); }
    .facebook { background:rgb(58, 134, 234); }
    .google { background:rgb(221, 126, 117); }
    .linkedin { background:rgb(10, 102, 194); }
    .telegram { background:rgb(76, 154, 194); }

.button input[type="submit"] {
  pointer-events: auto !important;
  opacity: 1 !important;
}


/* Responsive media query code for mobile devices */
@media(max-width: 584px) {
  #container-form {
    max-width: 100%;
  }
  form .user-details .input-box {
    margin-bottom: 15px;
    width: 100%;
  }
  form .category {
    width: 100%;
  }
  #content-form form .user-details {
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar {
    width: 5px;
  }
}
/* Responsive media query code for mobile devices */
@media(max-width: 459px) {
  #container-form #content-form .category {
    flex-direction: column;
  }
}

 
</style>
 
<script>
document.querySelector('form').addEventListener('submit', function() {
    console.log("Login Form Submitted!");
});

</script>



@endsection
 
