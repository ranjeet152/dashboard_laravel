@extends('layout.simple-hero')

@section('main-simple-page')

<!-- External Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script> 
     
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    .invoice-container {
        max-width: 950px;
        margin: 80px auto;
        margin-bottom: 10px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .company-info img {
        width: 150px;
    }

    .invoice-info {
        text-align: right;
    }

    @media (max-width: 768px) {
        .invoice-info {
            text-align: left;
        }
    }

    .invoice-info h2 {
        color: #4CAF50;
    }

    .customer-info {
        display: flex;
        justify-content: space-between;
        margin: 20px 0; 
        padding: 10px;
        border-radius: 8px;
    }

    .customer-info div {
        width: 48%;
    }

    @media (max-width: 768px) {
        .customer-info {
            flex-direction: column;
        }
        .customer-info div {
            width: 100%;
            margin-bottom: 10px;
        }
    }

    .invoice-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        overflow-x: auto;
        display: block;
    }

    .invoice-table th, .invoice-table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
        white-space: nowrap;
    }

    .invoice-table th {
        background: #4CAF50;
        color: white;
    }

    .invoice-table-container {
        overflow-x: auto;
        width: 100%;
    }

    .buttons {
        text-align: center;
        margin-top: 20px;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        background: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
    }

    .button:hover {
        background: #45a049;
    }

    @media print {
        body {
            background: white;
        }
        .buttons {
            display: none;
        }
        .invoice-container {
            box-shadow: none;
            margin: 0;
            padding: 0;
            border-radius: 0;
        }
    }
</style> 

<div class="invoice-container" id="invoice">
    <div class="customer-info">
        <div class="company-info">
            <img src="{{ asset('assets/img/ekana-logo.png') }}" alt="Company Logo">
            <h2>E-commerce Project Information</h2>
            <p>Company Name : Ekana Technologies Pvt. Ltd.</p>
            <p>Email: contect@gmail.com | Phone: +91 956 554 8531</p>
            <p><a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-link"></i> LinkedIn</a> | 
            <a href="https://github.com/" target="_blank"><i class="fa fa-link"></i> GitHub</a> |
            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-link"></i> Youtube</a> | 
            <a href="https://www.canva.com/design/DAGY1vx_BDI/919kYl4Fz2C3U_1_3J9ZmA/edit" target="_blank"><i class="fa fa-link"></i> Resume</a>
        </p>
        </div>
        <div class="invoice-info">
            <h2>Invoice</h2>
            <p><strong>Invoice No:</strong> +91 630 735 4106</p>
            <p><strong>Invoice Date:</strong> 01-Feb-2025</p>
            <p><strong>Due Date:</strong> 20-Feb-2025</p>
            <p><strong>Status:</strong> <span class="paid"> All Completed</span></p>
        </div>
    </div>

    <div class="customer-info">
        <div>
            <h3>Billing Details</h3>
            <p><strong>Name:</strong> Ranjeet Yaduvanshi</p>
            <p><strong>Address:</strong> Dhaneypur, Gonda, Lucknow, Uttar Pradesh</p>
            <p><strong>Phone:</strong> +91 956 554 8531</p>
            <p><strong>Email:</strong> ry0099610@gmail.com</p>
        </div>
        <div>
            <h3>Candidate Details</h3>
            <p><strong>Name:</strong> Javed Akhtar</p>
            <p><strong>Address:</strong> Barabanki, Lucknow, Uttar Pradesh</p>
            <p><strong>Phone:</strong> +91 630 735 4106</p>
            <p><strong>Email:</strong> mahi12@gmail.com</p>
        </div>
    </div>

    <table class="invoice-table">
        <thead>
            <tr>
                <th>Number</th>
                <th>Project Name</th> 
                <th>Created Time</th>
                <th>Design Language</th> 
                <th>Project Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>  
                <td>Project 01</td>
                <td>Travel Websit</td>
                <td>20 Days</td>
                <td>HTML | CSS</td>
                <td><a href="https://benjo-w85l.onrender.com/">
                    <span class="btn-label"><i class="fa fa-link"></i></span>Link</a> 
                </td>
            </tr>
            <tr>
                <td>Product 02</td>
                <td>Ekana Technologies Pvt. Ltd. Website</td>
                <td>1 month 5 days</td>
                <td>HTML | CSS | Bootstrap | JS</td>
                <td><a href="https://ekana-1.onrender.com/">
                    <span class="btn-label"><i class="fa fa-link"></i></span>Link</a> 
                </td>
            </tr>
            <tr>
                <td>Product 03</td>
                <td>Blog Website</td>
                <td>2 months 11 days</td>
                <td>HTML | CSS | Bootstrap | JS</td>
                <td><a href="https://dyblog.onrender.com/">
                    <span class="btn-label"><i class="fa fa-link"></i></span>Link</a> 
                </td>
            </tr>
        </tbody>
    </table>

    <div class="customer-info"> 
    <div class="total-summary">
        <p><strong> LinkedIn :</strong><a href="https://www.linkedin.com/feed/">
        <span class="btn-label"><i class="fa fa-link"></i></span>Link</a></p>
        <p><strong>GitHub :</strong> <a href="https://github.com/"> 
        <span class="btn-label"><i class="fa fa-link"></i></span>Link</a></p></p>
        <p><strong>YouTube :</strong> <a href="https://www.youtube.com/">
        <span class="btn-label"><i class="fa fa-link"></i></span>Link</a></p></p> 
        <p><strong>Resume :</strong> <a href="https://www.canva.com/design/DAGY1vx_BDI/919kYl4Fz2C3U_1_3J9ZmA/edit">
        <span class="btn-label"><i class="fa fa-link"></i></span>Link</a></p></p> 
    </div>

    <div class="total-summary">
        <h3>Payment Details</h3>
        <p><strong>Payment Method:</strong> Bank Transfer</p>
        <p><strong>Account Number:</strong> 1234567890</p>
        <p><strong>IFSC Code:</strong> ABCD123456</p>
        <p><strong>Amount Paid:</strong> ₹50,000</p>
    </div>
    </div>

    <div class="buttons">
        <button class="button" onclick="window.print()">Print Invoice</button>
        <button class="button" onclick="downloadPDF()">Download PDF</button>
    </div>
</div>

<script>
    function downloadPDF() {
        const { jsPDF } = window.jspdf;
        let invoice = document.getElementById("invoice");

        // Hide buttons before generating PDF
        const buttons = document.querySelectorAll(".buttons");
        buttons.forEach(button => button.style.display = "none");

        // Ensure all styles (including background) are captured properly
        html2canvas(invoice, { 
            backgroundColor: "#f5f5f5",  // Set a default background color if any
            logging: false,                // Turn off logging to avoid console noise
            useCORS: true,                 // Enable cross-origin resource sharing if you're using external assets (like images)
            scale: 2                        // Increase scale for higher quality rendering
        }).then((canvas) => {
            let imgData = canvas.toDataURL("image/png");
            let doc = new jsPDF("p", "mm", "a4");
            let imgWidth = 210;
            let imgHeight = (canvas.height * imgWidth) / canvas.width;

            // Calculate the max height for the PDF content to avoid extra white space
            let pageHeight = 297;   
            if (imgHeight > pageHeight) {
                // Scale the image to fit the page height
                imgHeight = pageHeight;
                imgWidth = (canvas.width * imgHeight) / canvas.height;
            }

            doc.addImage(imgData, "PNG", 0, 0, imgWidth, imgHeight);
            doc.save("invoice.pdf");

            // Show buttons again after PDF is downloaded
            buttons.forEach(button => button.style.display = "inline-block");
        });
    }
</script>

@endsection
