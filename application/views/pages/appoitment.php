<?php
date_default_timezone_set('America/Bogota');
$user_data = $this->session->all_userdata();
require_once  dirname(__DIR__, 1) . '/templates/header.php'; ?>

<style>
    .calendar-container {
        background: #fff;
        width: 450px;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .calendar-container header {
        display: flex;
        align-items: center;
        padding: 25px 30px 10px;
        justify-content: space-between;
    }

    header .calendar-navigation {
        display: flex;
    }

    header .calendar-navigation span {
        height: 38px;
        width: 38px;
        margin: 0 1px;
        cursor: pointer;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        user-select: none;
        color: #aeabab;
        font-size: 1.9rem;
    }

    .calendar-navigation span:last-child {
        margin-right: -10px;
    }

    header .calendar-navigation span:hover {
        background: #f2f2f2;
    }

    header .calendar-current-date {
        font-weight: 500;
        font-size: 1.45rem;
    }

    .calendar-body {
        padding: 20px;
    }

    .calendar-body ul {
        list-style: none;
        flex-wrap: wrap;
        display: flex;
        text-align: center;
    }

    .calendar-body .calendar-dates {
        margin-bottom: 20px;
    }

    .calendar-body li {
        width: calc(100% / 7);
        font-size: 1.07rem;
        color: #414141;
    }

    .calendar-body .calendar-weekdays li {
        cursor: default;
        font-weight: 500;
    }

    .calendar-body .calendar-dates li {
        margin-top: 30px;
        position: relative;
        z-index: 1;
        cursor: pointer;
    }

    .calendar-dates li.inactive {
        color: #aaa;
    }

    .calendar-dates li.active {
        color: #fff;
    }

    .calendar-dates li::before {
        position: absolute;
        content: "";
        z-index: -1;
        top: 50%;
        left: 50%;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transform: translate(-50%, -50%);
    }

    .calendar-dates li.active::before {
        background: #6332c5;
    }

    .calendar-dates li:not(.active):hover::before {
        background: #e4e1e1;
    }
</style>

<main>
    <br><br><br><br>
    <div class="container">
        <hr>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-12">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="px-3 py-4 p-md-5 mx-md-4">
                                <div class="calendar-container">
                                    <header class="calendar-header">
                                        <p class="calendar-current-date"></p>
                                        <div class="calendar-navigation">
                                            <span id="calendar-prev" class="material-symbols-rounded">
                                                <i class="fa-solid fa-chevron-left"></i>
                                            </span>
                                            <span id="calendar-next" class="material-symbols-rounded">
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </header>

                                    <div class="calendar-body">
                                        <ul class="calendar-weekdays">
                                            <li>Dom</li>
                                            <li>Lun</li>
                                            <li>Mar</li>
                                            <li>Mie</li>
                                            <li>Jue</li>
                                            <li>Vie</li>
                                            <li>Sab</li>
                                        </ul>
                                        <ul class="calendar-dates"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <form action="#" method="post">
                                    <h5>Envianos un mensaje</h5>
                                    <br>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactFullName">Nombre Completo</label>
                                        <input type="text" id="fullName" class="form-control" placeholder="Juan Perez" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactEmail">Correo Electrónico</label>
                                        <input type="email" id="contactEmail" class="form-control" placeholder="Juan Perez" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactPhone">Teléfono</label>
                                        <input type="number" id="contactPhone" class="form-control" placeholder="Juan Perez" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactMessage">Mensaje</label>
                                        <textarea id="contactMessage" class="form-control"></textarea>
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-bd-primary btn-block main-button" type="submit">Enviar Mensaje</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<?php require_once  dirname(__DIR__, 1) . '/templates/footer.php'; ?>
<script>
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();

    const day = document.querySelector(".calendar-dates");

    const currdate = document
        .querySelector(".calendar-current-date");

    const prenexIcons = document
        .querySelectorAll(".calendar-navigation span");

    // Array of month names
    const months = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Deciembre"
    ];

    // Function to generate the calendar
    const manipulate = () => {

        // Get the first day of the month
        let dayone = new Date(year, month, 1).getDay();

        // Get the last date of the month
        let lastdate = new Date(year, month + 1, 0).getDate();

        // Get the day of the last date of the month
        let dayend = new Date(year, month, lastdate).getDay();

        // Get the last date of the previous month
        let monthlastdate = new Date(year, month, 0).getDate();

        // Variable to store the generated calendar HTML
        let lit = "";

        // Loop to add the last dates of the previous month
        for (let i = dayone; i > 0; i--) {
            lit +=
                `<li class="inactive">${monthlastdate - i + 1}</li>`;
        }

        // Loop to add the dates of the current month
        for (let i = 1; i <= lastdate; i++) {

            // Check if the current date is today
            let isToday = i === date.getDate() &&
                month === new Date().getMonth() &&
                year === new Date().getFullYear() ?
                "active" :
                "";
            lit += `<li class="${isToday}">${i}</li>`;
        }

        // Loop to add the first dates of the next month
        for (let i = dayend; i < 6; i++) {
            lit += `<li class="inactive">${i - dayend + 1}</li>`
        }

        // Update the text of the current date element 
        // with the formatted current month and year
        currdate.innerText = `${months[month]} ${year}`;

        // update the HTML of the dates element 
        // with the generated calendar
        day.innerHTML = lit;
    }

    manipulate();

    // Attach a click event listener to each icon
    prenexIcons.forEach(icon => {

        // When an icon is clicked
        icon.addEventListener("click", () => {

            // Check if the icon is "calendar-prev"
            // or "calendar-next"
            month = icon.id === "calendar-prev" ? month - 1 : month + 1;

            // Check if the month is out of range
            if (month < 0 || month > 11) {

                // Set the date to the first day of the 
                // month with the new year
                date = new Date(year, month, new Date().getDate());

                // Set the year to the new year
                year = date.getFullYear();

                // Set the month to the new month
                month = date.getMonth();
            } else {

                // Set the date to the current date
                date = new Date();
            }

            // Call the manipulate function to 
            // update the calendar display
            manipulate();
        });
    });
</script>