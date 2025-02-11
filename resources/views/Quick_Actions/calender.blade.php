@extends('layout.simple-hero')

@section('main-simple-page')

 <style>
        .calendar {
            font-family: Arial, sans-serif;
            width: 100%;
            max-width: 1000px;
            height: 600px;
            margin-top: 80px;
            margin-bottom: 20px;
            margin-left:20px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .calendar-header h3 {
            font-size: 30px;
            font-weight: bold;
            color: #007BFF;
            text-decoration: underline;
        }
        .calendar-header, .search-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-box input, .search-box select, .search-box button {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .search-box button, .calendar-header button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            font-size: 18px;
        }
        .search-box button:hover, .calendar-header button:hover {
            background-color: #0056b3;
        }
        .calendar-header button {
            padding: 10px 15px;
            font-size: 22px;
            border-radius: 5px;
        }
        .days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }
        .day {
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e3e3e3;
            border-radius: 5px;
            position: relative;
            font-size: 16px;
            font-weight: bold;
        }
        
        .festival {
            font-size: 12px;
            color: red;
            position: absolute;
            bottom: 5px;
        }
        @media (max-width: 600px) {
            .calendar {
                width: 95%;
                height: auto;
            }
            .day {
                height: 50px;
                font-size: 14px;
            }
            .search-box input, .search-box select, .search-box button {
                font-size: 14px;
            }
            .calendar-header button {
                font-size: 18px;
                padding: 8px 12px;
            }
        }
</style>


<div class="calendar">
        <div class="search-box">
            <input type="number" id="search-year" placeholder="Enter Year" min="1900" max="2100">
            <select id="search-month">
                <option value="0">January</option>
                <option value="1">February</option>
                <option value="2">March</option>
                <option value="3">April</option>
                <option value="4">May</option>
                <option value="5">June</option>
                <option value="6">July</option>
                <option value="7">August</option>
                <option value="8">September</option>
                <option value="9">October</option>
                <option value="10">November</option>
                <option value="11">December</option>
            </select>
            <button onclick="searchMonth()">Search</button>
        </div>
        <div class="calendar-header">
            <button onclick="prevMonth()">&#9665;</button>
            <h3 id="month-year"></h3>
            <button onclick="nextMonth()">&#9655;</button>
        </div>
        <div class="days" id="days"></div>
</div>
<script>
        let currentDate = new Date();
        const festivals = {
            '1-1': 'New Year',
            '12-1': 'Swami Vivekananda Jayanti',
            '14-1': 'Makar Sankranti, Pongal, Lohri',
            '15-1': 'Indian Army Day',
            '23-1': 'Netaji Subhas Chandra Bose Jayanti',
            '26-1': 'Republic Day',
            '8-3': 'Holi',
            '30-1': 'Martyrs’ Day (Mahatma Gandhi Punyatithi)',

            '4-2': 'World Cancer Day',
            '5-2': 'Guru Ravidas Jayanti',
            '14-2': 'Valentine’s Day',
            '19-2': 'Shivaji Maharaj Jayanti',
            '21-2': 'International Mother Language Day',

            '1-3': 'Zero Discrimination Day',
            '4-3': 'National Safety Day',
            '8-3': 'Holi, International Women’s Day',
            '11-3': 'Maha Shivratri',
            '20-3': 'World Happiness Day',
            '22-3': 'World Water Day',
            '23-3': 'Shaheed Diwas (Bhagat Singh, Rajguru, Sukhdev Martyrdom Day)',

            '1-4': 'April Fool’s Day',
            '2-4': 'World Autism Awareness Day',
            '7-4': 'World Health Day',
            '10-4': 'Ram Navami',
            '13-4': 'Baisakhi',
            '14-4': 'Ambedkar Jayanti',
            '17-4': 'Hanuman Jayanti',
            '21-4': 'Ramadan Eid',
            '22-4': 'Earth Day',
            '25-4': 'World Malaria Day',

            '1-5': 'Labour Day, Maharashtra Day',
            '5-5': 'Buddha Purnima',
            '9-5': 'Rabindranath Tagore Jayanti',
            '11-5': 'National Technology Day',
            '15-5': 'International Family Day',
            '17-5': 'World Telecommunication Day',
            '20-5': 'World Bee Day',
            '31-5': 'World No Tobacco Day',

            '5-6': 'World Environment Day',
            '8-6': 'World Oceans Day',
            '14-6': 'World Blood Donor Day',
            '17-6': 'Bakrid',
            '21-6': 'International Yoga Day',

            '1-7': 'Doctor’s Day',
            '11-7': 'World Population Day',
            '17-7': 'World Emoji Day',
            '20-7': 'Muharram',

            '7-8': 'National Handloom Day',
            '9-8': 'Quit India Movement Day',
            '12-8': 'International Youth Day',
            '15-8': 'Independence Day',
            '19-8': 'World Photography Day',
            '22-8': 'Raksha Bandhan',
            '29-8': 'National Sports Day',

            '5-9': 'Teacher’s Day',
            '7-9': 'Janmashtami',
            '14-9': 'Hindi Diwas',
            '16-9': 'Vishwakarma Jayanti, World Ozone Day',
            '27-9': 'World Tourism Day',

            '2-10': 'Gandhi Jayanti',
            '8-10': 'Indian Air Force Day',
            '12-10': 'Navratri',
            '24-10': 'Dussehra',
            '31-10': 'Sardar Vallabhbhai Patel Jayanti',

            '1-11': 'Karva Chauth',
            '4-11': 'Diwali',
            '8-11': 'Govardhan Puja',
            '10-11': 'Bhai Dooj',
            '14-11': 'Children’s Day (Jawaharlal Nehru Jayanti)',
            '19-11': 'Indira Gandhi Jayanti',
            '27-11': 'Guru Nanak Jayanti',

            '1-12': 'World AIDS Day', 
            '4-12': 'Navy Day',
            '7-12': 'Armed Forces Flag Day',
            '10-12': 'Human Rights Day', 
            '24-12': 'National Consumer Rights Day', 
            '31-12': 'New Year’s Eve'
        };
        function renderCalendar() {
            const daysElement = document.getElementById("days");
            const monthYearElement = document.getElementById("month-year");
            daysElement.innerHTML = "";

            let year = currentDate.getFullYear();
            let month = currentDate.getMonth();
            monthYearElement.textContent = new Intl.DateTimeFormat("en-US", { month: "long", year: "numeric" }).format(currentDate);

            let firstDay = new Date(year, month, 1).getDay();
            let lastDate = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDay; i++) {
                let emptyDiv = document.createElement("div");
                daysElement.appendChild(emptyDiv);
            }

            for (let i = 1; i <= lastDate; i++) {
                let dayDiv = document.createElement("div");
                dayDiv.classList.add("day");
                dayDiv.textContent = i;

                let festivalKey = `${i}-${month + 1}`;
                if (festivals[festivalKey]) {
                    let festivalText = document.createElement("span");
                    festivalText.classList.add("festival");
                    festivalText.textContent = festivals[festivalKey];
                    dayDiv.appendChild(festivalText);
                }

                daysElement.appendChild(dayDiv);
            }
        }

        function prevMonth() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        }

        function nextMonth() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        }

        function searchMonth() {
            let yearInput = document.getElementById("search-year").value;
            let monthInput = document.getElementById("search-month").value;
            if (yearInput) {
                currentDate.setFullYear(yearInput);
            }
            currentDate.setMonth(monthInput);
            renderCalendar();
        }

        renderCalendar();
</script>


@endsection
