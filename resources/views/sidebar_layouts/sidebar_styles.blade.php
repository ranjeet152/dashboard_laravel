@extends('layout.simple-hero')

@section('main-simple-page')

<!-- ==== Layout 01 ===== -->
<style> 
        #navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333;
            margin-top: 70px;
            padding: 15px 20px;
            color: white;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin: 0 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #f4a261;
        }

        .menu-btn {
            display: none;
            font-size: 25px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                background: #333;
                width: 100%;
                text-align: center;
            }

            .nav-links.show {
                display: flex;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .menu-btn {
                display: block;
            }
        }
</style>

<!-- === Sidbar === -->

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body {
    overflow: hidden;
}
#sidebar {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 200px;
    margin-left: 260px;
    background: #11101D;
    padding: 6px 14px;
    z-index: 1;
    transition: all 0.5s ease;
}

#sidebar.open {
    width: 250px;
}

#sidebar .logo-details {
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
}

#sidebar .logo-details .logo_name {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    opacity: 0;
    transition: all 0.5s ease;
}

#sidebar.open .logo-details,
#sidebar.open .logo-details .logo_name {
    opacity: 1;
}

#sidebar .logo-details #btn {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 22px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}
=
#sidebar.open .logo-details #btn {
    text-align: center;
}

#sidebar i {
    color: #fff;
    height: 60px;
    min-width: 50px;
    font-size: 28px;
    text-align: center;
    line-height: 60px;
}

#sidebar .nav-list {
    margin-top: 20px;
    height: 100%;
}

#sidebar li {
    position: relative;
    margin: 8px 0;
    list-style: none;
}

#sidebar input {
    font-size: 15px;
    color: #fff;
    font-weight: 400;
    outline: none;
    height: 50px;
    width: 100%;
    border: none;
    border-radius: 12px;
    transition: all 0.5s ease;
    background: #1d1b31;
}

#sidebar.open input {
    padding: 0 20px 0 50px;
    width: 100%;
}

#sidebar .bx-search {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 22px;
    background: #1d1b31;
    color: #fff;
}

#sidebar .bx-search:hover {
    background: #fff;
    color: #11101D;
}

#sidebar.open .bx-search:hover {
    background: #1d1b31;
    color: #fff;
}

#sidebar li i {
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    border-radius: 12px;
}

#sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    border-radius: 12px;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
    background: #11101D;
}

#sidebar li a:hover {
    background: #fff;
}

#sidebar li a .links_name {
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
}

#sidebar.open li a .links_name {
    opacity: 1;
    pointer-events: auto;
}

#sidebar li a:hover .links_name,
#sidebar li a:hover i {
    transition: all 0.5s ease;
    color: #11101D;
}

#sidebar li .tooltip {
    position: absolute;
    top: -20px;
    left: calc(100% + 15px);
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 15px;
    font-weight: 400;
    opacity: 0;
    white-space: nowrap;
    pointer-events: none;
    transition: 0s;
}

#sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
}

#sidebar.open li .tooltip {
    display: none;
}

#sidebar li.profile {
    position: fixed;
    height: 60px;
    width: 78px;
    left: 0;
    bottom: -8px;
    padding: 10px 14px;
    background: #1d1b31;
    transition: all 0.5s ease;
    overflow: hidden;
}

#sidebar.open li.profile {
    width: 250px;
}

#sidebar li .profile-details {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
}

#sidebar li img {
    height: 45px;
    width: 45px;
    object-fit: contain;
    border-radius: 6px;
    margin-right: 10px;
}

#sidebar li.profile .name,
#sidebar li.profile .job {
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    white-space: nowrap;
}

#sidebar li.profile .job {
    font-size: 12px;
}

#sidebar .profile #log_out {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    background: #1d1b31;
    width: 100%;
    height: 60px;
    line-height: 60px;
    transition: all 0.5s ease;
}

#sidebar.open .profile #log_out {
    width: 50px;
    background: none;
}

.home-section {
    position: relative;
    background: #e4e9f7;
    min-height: 100vh;
    top: 0;
    left: 78px;
    width: calc(100% -78px);
    transition: all 0.5s ease;
}

#sidebar.open~.home-section {
    left: 250px;
    width: calc(100%-250px);
}

.home-section .text {
    display: inline-block;
    color: #11101D;
    font-size: 25px;
    font-weight: 500;
    margin: 18px;
}
</style>


<!-- ==== Layout 01 ==== -->
<nav id="navbar">
        <div class="logo">Sidebar Layouts</div>
        <ul class="nav-links">
            <li><a href="#">Layout1</a></li>
            <li><a href="#">Layout2</a></li>
            <li><a href="#">Layout3</a></li>
            <li><a href="#">Layout4</a></li>
            <li><a href="#">Layout5</a></li>
        </ul>
        <div class="menu-btn">&#9776;</div>
</nav>

<!-- ====== Sidebar ======= -->
 <div id="sidebar">
        <div class="logo-details">
            <div class="logo_name">constGenius</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-user'></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Files</span>
                </a>
                <span class="tooltip">Files</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="./images/profile.png" alt="profileImg">
                    <div class="name_job">
                        <div class="name">const Genius</div>
                        <div class="job">Web Developer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>
    </section>


<!--=== Layout 01 ==== -->
<script>
        const menuBtn = document.querySelector('.menu-btn');
        const navLinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });
</script>

<!-- ====== Sidebar ====== -->
<script>
    let sidebar = document.querySelector("#sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange();
})

searchBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange();
})

function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
}

menuBtnChange();
</script>

@endsection