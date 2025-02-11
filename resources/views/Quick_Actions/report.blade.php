@extends('layout.simple-hero')

@section('main-simple-page')

<style>
    
        .report-container {
            max-width: 1000px;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px; 
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin: 80px auto;
            margin-bottom: 20px; 
            margin-left: 20px; 
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }
        .header-info {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section h2 {
            border-bottom: 3px solid #007BFF;
            padding-bottom: 8px;
            color: #007BFF;
        }
        #p-tag {
            line-height: 1.8;
            color: #444;
        }
        .list {
            margin-left: 20px;
        }
        .list li {
            margin-bottom: 8px;
        }
        #footer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #666;
        }
</style>

<div class="report-container">
        <h1>E-Commerce Website Project Report</h1>
        <p class="header-info" id="p-tag"><strong>Author:</strong> Ranjeet Yaduvanshi | <strong>Date:</strong> February 1, 2025</p>
        
        <div class="section">
            <h2>Introduction</h2>
            <p id="p-tag">This project is a feature-rich E-commerce platform that enables users to Register, Log In, and access a Dynamic Dashboard with various functionalities to enhance the online shopping experience.</p>
        </div>
        
        <div class="section">
            <h2>Project Features</h2>
            <ul class="list">
                <li><strong>Registration & Login:</strong> Secure authentication system with validation.</li>
                <li><strong>Dashboard:</strong> Intuitive and responsive user dashboard.</li>
                <li><strong>Forms:</strong> Various user input forms for data collection.</li>
                <li><strong>Tables:</strong> Organized tabular data representation.</li>
                <li><strong>Database:</strong> Secure and efficient data storage system.</li>
                <li><strong>Base Structure:</strong> Integrated Font Awesome, Simple Icons, and modular page components.</li>
                <li><strong>Additional Features:</strong> User-friendly UI/UX, smooth animations, and optimized performance.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Conclusion</h2>
            <p id="p-tag">The project successfully delivers a highly interactive and functional e-commerce platform with a seamless user experience, ensuring efficiency and user engagement.</p>
        </div>
        
        <p id="footer">&copy; 2025 E-Commerce Project Report | Designed for better user experience.</p>
</div>

@endsection