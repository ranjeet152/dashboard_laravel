@extends('layout.index-hero')

@section("main-page") 
<div class="login-container" id="container">
    <div class="login-box">
        <div class="title-container">
            <h1>Log In</h1>
            <img src="{{ asset('images/login.jpg') }}" alt="Login Icon" id="login-icon">
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label> 
            <input type="email" name="email" id="email" placeholder="Enter your Email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit" class="login-btn">Log In</button>

            <div class="links"> 
            <p id="p2">Don't have an account? <a href="{{ route('registration') }}" id="p3">Register</a></p>
            </div>
        </form>

        <div class="social-buttons">
            <a href="" class="github"><img src="{{ asset('images/github.svg') }}" alt="GitHub">GitHub</a>
            <a href="" class="google"><img src="{{ asset('images/google.png') }}" alt="Google">Google</a>
            <a href="" class="facebook"><img src="{{ asset('images/Facebook.svg') }}" alt="Facebook">Facebook</a>
            <a href="" class="linkedin"><img src="{{ asset('images/linkedin_logo.png') }}" alt="LinkedIn">LinkedIn</a>
            <a href="" class="telegram"><img src="{{ asset('images/Telegram_logo.svg') }}" alt="Telegram">Telegram</a>
        </div>
    </div>
</div>
@endsection

<style>
    /* Google Font */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    #container {
        font-family: Arial, sans-serif;
        display: flex;
        background: url('./images/hero.jpg') no-repeat center center/cover; 
        justify-content: center;
        align-items: center;
        width: 100%; 
        padding: 20px;
        max-width: 1400px;
        position: relative;
        backdrop-filter: blur(40px);
    }
    #container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4); 
        backdrop-filter: blur(15px); 
        z-index: -1;
    }

    .login-box {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 450px;
    }

    .title-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    h1 {
        font-size: 22px;
        color: red;
        margin: 0;
    }

    #login-icon {
        width: 50px;  
        height: 50px;
        border-radius: 50%;
    }

    .social-buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .social-buttons a {
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

    .social-buttons img {
        width: 24px;
        margin-right: 10px;
    }

    .github { background:rgb(156, 158, 161); }
    .facebook { background:rgb(58, 134, 234); }
    .google { background:rgb(221, 126, 117); }
    .linkedin { background:rgb(10, 102, 194); }
    .telegram { background:rgb(76, 154, 194); }

    form {
        text-align: left;
        margin-top: 20px;
    }

    label {
        font-weight: 600;
        font-size: 18px;
        display: block;
        margin-bottom: 8px;
        text-align: left;
    }

    input {
        width: 100%;
        padding: 14px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 18px;
    }

    .login-btn {
        width: 100%;
        padding: 14px;
        background: #222;
        color: white;
        border: none;
        font-size: 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }

    .login-btn:hover {
        background: #444;
    }

    .links {
        margin-top: 20px;
        text-align: center;
    }

    .links a {
        text-decoration: none;
        color: #007bff;
        font-size: 16px;
    }

    .links a:hover {
        text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .login-box {
            width: 90%;
        }

        .social-buttons {
            grid-template-columns: 1fr;
        }
    }
</style>
