@extends('layout.index-hero')

@section("main-page")  

<div class="container" id="container-form">
    <!-- Title section -->
    <div class="title">Registration</div>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="content" id="content-form">
        <!-- Registration form -->
        <form class="form" action="{{ route('registration') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="user-details"> 
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" value="{{ old('username') }}" required>
                </div> 
                <div class="input-box">
                    <span class="details">Father's Name</span>
                    <input type="text" name="fathername" placeholder="Enter your father's name" value="{{ old('fathername') }}" required>
                </div> 
                <div class="input-box">
                    <span class="details">Mother's Name</span>
                    <input type="text" name="mothername" placeholder="Enter your mother's name" value="{{ old('mothername') }}" required>
                </div> 
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="phone" placeholder="Enter your number" value="{{ old('phonenumber') }}" required>
                </div> 
                <div class="input-box">
                    <span class="details">Email ID</span>
                    <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                </div> 
                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" name="dob" value="{{ old('dob') }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div> 
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Profile Image</span>
                    <input type="file" name="image" accept="image/*" style="padding: 10px;" required>
                </div>
            </div>  
            <!-- Submit button -->
            <div class="button">
                <input type="submit" value="Register">
            </div>
            <p id="p1">Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </form>
    </div>
</div> 


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

@endsection 
