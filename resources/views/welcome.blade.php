<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Love Your Home Again Renovations"/>

        <title>Love Your Home Again Renovations - Darcy Boyce - Court Order</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link crossorigin="anonymous" media="all" rel="stylesheet" href="./darcy-boyce-court-order.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container pb-5">
                <h1 class="text-center py-4">Darcy Boyce Court Order</h1>
                
                <div class="p-2">
                    <div class="row justify-content-center">
                        <div class="card p-3 timer col col-lg-4 col-lg-offset-4" style="opacity: 0; transition: opacity 0.3s ease">
                            <div style="display: flex; align-items: baseline; justify-content: center;">
                                <div id="days" class="fw-bold text-danger font-monospace" style="font-size: 3rem">0</div>
                                <div class="ps-2 fw-bold">Days</div>
                            </div>

                            <div  class="fs-1 fw-bold font-monospace" style="display: flex; align-items: baseline; justify-content: center">
                                <div id="hours">0</div>
                                <div>:</div>
                                <div id="minutes">0</div>
                                <div>:</div>
                                <div id="seconds">0</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    I knew I'd get you to see this one way or another ;)
                </div>

                <a href="/images/darcy-boyce-court-order.jpg" target="_blank" id="court-order" class="d-block mx-auto text-center" style="opacity: 0; transition: opacity 0.3s ease 1s">
                    <img src="/images/darcy-boyce-court-order.jpg" class="img-fluid mt-3" alt="Darcy Boyce court order">
                </a>

                @if($position)
                <div class="text center mt-3 pt-3">
                    <h3>Location has been logged.</h3>

                    <div class="table-responsive">
                        <table class="table table-warning table-borders table-sm">
                            <thead>
                                <tr>
                                <th scope="col">IP</th>
                                <th scope="col">Country</th>
                                <th scope="col">Region</th>
                                <th scope="col">City</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitude</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">{{ $position->ip }}</th>
                                <td>{{ $position->countryName }}</td>
                                <td>{{ $position->regionName }}</td>
                                <td>{{ $position->cityName }}</td>
                                <td>{{ $position->latitude }}</td>
                                <td>{{ $position->longitude }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                <div class="text-center small pt-5">
                    Copyright &copy; 2021 Matt Beckett
                </div>
        </div>

            <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script>
        const daysElem = document.getElementById('days');
        const hoursElem = document.getElementById('hours');
        const minutesElem = document.getElementById('minutes');
        const secondsElem = document.getElementById('seconds');

        const timerElem = document.querySelector('.timer');
        const imgElem = document.getElementById('court-order');

        const timeSince = () => {
            const nowUTC = Date.now();
            const thenUTC = Date.UTC(2021, 3, 15, 2, 31);

            let diff = nowUTC - thenUTC;

            const msperDay = 1000 * 60 * 60 * 24;
            const msperHr = 1000 * 60 * 60;
            const msperMin = 1000 * 60;
            const msperSec = 1000;

            const days = Math.floor(diff/msperDay);

            diff = diff - (days * msperDay);

            const hours = Math.floor(diff/msperHr);

            diff = diff - (hours * msperHr);

            const minutes = Math.floor(diff/msperMin);

            diff = diff - (minutes * msperMin);

            const seconds = Math.floor(diff/msperSec);

            daysElem.innerText = days;
            hoursElem.innerText = hours < 10 ? `0${hours}` : hours;
            minutesElem.innerText = minutes < 10 ? `0${minutes}` : minutes;
            secondsElem.innerText = seconds < 10 ? `0${seconds}` : seconds;

            timerElem.style.opacity = 1;
            imgElem.style.opacity = 1;
        }

        setInterval(timeSince, 1000);
        </script>
    </body>
</html>
