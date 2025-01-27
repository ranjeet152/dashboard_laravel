@extends('layout.index-hero')

@section("main-page")  
<div class="container" id="container">
    <div id="form-wrapper">
        <div class="image-section"></div>
        <div id="form-section"> 
            <form class="form" action="{{ route('registration') }}" method="post">
                <h2>Register</h2>
                @csrf
                <div id="input-group">
                    <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error("username")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div id="input-group">
                    <input type="text" name="fathername" id="fathername" placeholder="Father's Name" value="{{ old('fathername') }}" required>
                    @error("fathername")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div id="input-group">
                    <input type="text" name="mothername" id="mothername" placeholder="Mother's Name" value="{{ old('mothername') }}" required>
                    @error("mothername")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div id="input-group">
                    <input type="tel" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
                    @error("phone")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div id="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error("email")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div id="input-group">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    @error("password")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                    
                <!-- Submit Button -->
                <button type="submit" id="btn">Register</button> 
                
                <p id="p1">Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
    </div>
</div>


<style> 
    #container {
        font-family: Arial, sans-serif;
        display: flex;
        background: url('./images/hero.jpg') no-repeat center center/cover; 
        justify-content: center;
        align-items: center;
        width: 100%; 
        padding: 20px;
        max-width: 1200px;
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

    #form-wrapper {
        display: flex;
        flex-direction: row;
        width: 100%;
        max-width: 900px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        /* backdrop-filter: blur(20px); */
    }

    #form-wrapper:hover {
        transform: scale(1.02);
    }

    .image-section {
        flex: 1;
        background: url('./images/product-12.jpg') no-repeat center center/cover;
        min-height: 100%;
        transition: opacity 0.3s ease-in-out;
    }

    #form-wrapper:hover .image-section {
        opacity: 0.9;
    }

    #form-section {
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        background: rgba(255, 255, 255, 0.9);
    }

    #form-section h2 {
        margin-bottom: 20px;
    }

    #input-group {
        margin-bottom: 15px;
    }

    #input-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .text-danger {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }


    #btn {
    width: 100%;
    padding: 12px;
    background: #222;
    color: white;
    border: none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
    }

    #btn:hover {
        background: #444;
    }

    #p1 {
        margin-top: 20px;
        font-size: 20px;
    }

    #p1 a {
        color: #007bff;
        text-decoration: none;
    }

     /* Responsive Design */
     @media (max-width: 768px) {
        #form-wrapper {
            flex-direction: column;
            height: auto;
            width: 90%;
        }

        .image-section {
            height: 250px;
            width: 90%;
        }

        #form-section {
            width: 100%;
            padding: 30px;
        }
    }

    @media (max-width: 480px) {
    #form-wrapper {
        flex-direction: column;
        width: 100%;
        height: auto;
    }

    .image-section {
        height: 220px;
        width: 100%;
    }

    #form-section {
        width: 100%;
        padding: 25px;
    }
}
</style>


@endsection 
