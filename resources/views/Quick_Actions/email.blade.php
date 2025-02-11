@extends('layout.simple-hero')

@section('main-simple-page')

<style>
        #nav {
            margin-top:70px;
            width: 100%;
            background:rgb(78, 98, 118);
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #nav h2 {
            margin-left: 20px;
        }
        .nav-buttons {
            display: flex;
        }
        .nav-buttons button {
            background: #34495e;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-right: 10px;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
            align-items: center;
            font-size: 16px;
        }
        .nav-buttons button i {
            margin-right: 5px;
        }
        .nav-buttons button:hover {
            background: #1abc9c;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            background: white;
            overflow-y: auto;
        }
        .email-list {
            display: flex;
            flex-direction: column;
        }
        .email-item {
            background: #fff;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            cursor: pointer;
        }
        .email-item:hover {
            background: #f1f1f1;
            transform: scale(1.02);
        }
        .email-item i {
            margin-right: 15px;
            font-size: 20px;
        }
        .email-item .email-info {
            flex: 1;
        }
        .email-item .email-info h4 {
            margin-bottom: 5px;
        }
        .email-item .email-info p {
            color: gray;
        }
        .email-content {
            display: none;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .compose-box {
            display: none;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .compose-box textarea, .compose-box input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .action-buttons button {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        @media (max-width: 768px) {
            .nav-buttons button {
                font-size: 14px;
                padding: 8px 12px;
            }
        }
</style>


<div class="navbar" id="nav">
        <h2>Email</h2>
        <div class="nav-buttons">
            <button onclick="showInbox()"><i class="fas fa-inbox"></i> Inbox</button>
            <button onclick="showCompose()"><i class="fas fa-edit"></i> Compose</button>
        </div>
    </div>
    <div class="main-content">
        <h2 id="mainHeading">Inbox</h2>
        <div class="email-list" id="emailList"></div>
        <div class="email-content" id="emailContent">
            <button onclick="closeEmail()">Close</button>
            <h3 id="emailSender"></h3>
            <p id="emailMessage"></p>
        </div>
        <div class="compose-box" id="composeBox">
            <h2>Compose Email</h2>
            <input type="text" id="composeTo" placeholder="To">
            <input type="text" id="composeSubject" placeholder="Subject">
            <textarea id="composeMessage" placeholder="Message"></textarea>
            <div class="action-buttons">
                <button onclick="sendEmail()">Send</button>
                <button onclick="closeCompose()">Cancel</button>
            </div>
        </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
        const emails = [
            { sender: "John Doe", message: "Meeting scheduled for tomorrow at 10 AM." },
            { sender: "Jane Smith", message: "Don't forget to check the report." },
            { sender: "Support Team", message: "Your ticket has been resolved." }
        ];

        function loadEmails() {
            document.getElementById("emailList").innerHTML = emails.map((email, index) => `
                <div class="email-item" onclick="openEmail(${index})">
                    <i class="fas fa-envelope"></i>
                    <div class="email-info">
                        <h4>${email.sender}</h4>
                        <p>${email.message}</p>
                    </div>
                </div>
            `).join('');
        }

        function openEmail(index) {
            document.getElementById("emailSender").textContent = emails[index].sender;
            document.getElementById("emailMessage").textContent = emails[index].message;
            document.getElementById("emailContent").style.display = "block";
        }
        function closeEmail() {
            document.getElementById("emailContent").style.display = "none";
        }
        function showInbox() {
            document.getElementById("mainHeading").innerText = "Inbox";
            document.getElementById("emailList").style.display = "block";
            document.getElementById("composeBox").style.display = "none";
        }
        function showCompose() {
            document.getElementById("mainHeading").innerText = "Compose Email";
            document.getElementById("emailList").style.display = "none";
            document.getElementById("composeBox").style.display = "block";
        }
        function closeCompose() {
            showInbox();
        }
        function sendEmail() {
            alert("Email Sent!");
            closeCompose();
        }
        loadEmails();
</script>

@endsection