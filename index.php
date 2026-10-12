
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UPIK PTSB</title>

    <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">
    <link rel="stylesheet" href="header.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: #f5f8fc;
            color: #11233e;
            overflow-x: hidden;
            overflow-y: auto;
        }

        /* HERO SECTION */

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 100vh;
            overflow: hidden;
            background: linear-gradient(
                135deg,
                #f8fbff 0%,
                #eaf3fb 50%,
                #dceaf5 100%
            );
        }

        .background-logo {
            position: absolute;
            top: 55%;
            right: 8%;
            transform: translateY(-50%);
            z-index: 1;
            opacity: 0.15;
            pointer-events: none;
        }

        .background-logo img {
            width: min(700px, 45vw);
            height: min(700px, 45vw);
            object-fit: contain;
        }

        .circle-one {
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: rgba(61, 74, 134, 0.06);
            top: -180px;
            right: -100px;
            z-index: 0;
        }

        .circle-two {
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(91, 158, 203, 0.07);
            bottom: -150px;
            left: -100px;
            z-index: 0;
        }

        main {
            position: relative;
            z-index: 10;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 120px clamp(30px, 10vw, 150px) 60px;
        }

        .eyebrow {
            color: #3d4a86;
            font-size: clamp(14px, 1.4vw, 20px);
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: 0;
            transform: translateX(-80px);
            animation: slideInLeft 1s ease-out forwards;
            animation-delay: 0.2s;
        }

        .line {
            width: 90px;
            height: 4px;
            background: #3d4a86;
            margin-top: 25px;
            border-radius: 10px;
            opacity: 0;
            transform: translateX(-80px);
            animation: slideInLeft 1s ease-out forwards;
            animation-delay: 0.3s;
        }

        h1 {
            max-width: 850px;
            margin: 15px 0 22px;
            color: #11233e;
            font-family: "Playfair Display", serif;
            font-size: clamp(48px, 6.5vw, 90px);
            line-height: 0.98;
            letter-spacing: -3px;
            opacity: 0;
            transform: translateX(-80px);
            animation: slideInLeft 1s ease-out forwards;
            animation-delay: 0.45s;
        }

        .subtitle {
            color: #536076;
            font-size: clamp(15px, 1.5vw, 20px);
            font-weight: 500;
            opacity: 0;
            transform: translateX(-80px);
            animation: slideInLeft 1s ease-out forwards;
            animation-delay: 0.65s;
        }

        .datetime {
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            opacity: 0;
            transform: translateX(-80px);
            animation: slideInLeft 1s ease-out forwards;
            animation-delay: 0.75s;
        }

        .current-date {
            color: #11233e;
            font-size: 14px;
            font-weight: 600;
        }

        .current-time {
            color: #3d4a86;
            font-size: 13px;
            font-weight: 600;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-80px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ABOUT UPIK SECTION */

        .about-upik {
            background: #ffffff;
            padding: 90px 7%;
            position: relative;
            overflow: hidden;
        }

        .about-container {
            max-width: 1200px;
            margin: auto;
        }

        .about-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .about-title span {
            color: #3d4a86;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .about-title h2 {
            color: #11233e;
            font-family: "Playfair Display", serif;
            font-size: 38px;
            margin-top: 10px;
        }

        .about-content {
            display: grid;
            grid-template-columns: 280px 1fr;
            align-items: center;
            gap: 60px;
            background: #f4f8fc;
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(17, 35, 62, 0.06);
        }

        .about-logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-logo img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            border: 8px solid white;
            box-shadow: 0 10px 30px rgba(17, 35, 62, 0.15);
        }

        .about-text {
            color: #5f6b7a;
            font-size: 16px;
            line-height: 1.9;
            text-align: justify;
        }

        .about-text p {
            margin-bottom: 18px;
        }

        .about-text p:last-child {
            margin-bottom: 0;
        }

        /* FOOTER */

        .site-footer {
            width: 100%;
            background: #11233e;
            color: #ffffff;
            text-align: center;
            padding: 25px 20px;
        }

        .footer-unit {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        .footer-address {
            font-size: 12px;
            line-height: 1.8;
            color: #dbe5ef;
            margin-bottom: 12px;
        }

        .footer-copy {
            font-size: 11px;
            color: #dbe5ef;
        }

        /* RESPONSIVE TABLET */

        @media (max-width: 1100px) {
            main {
                padding: 120px 7vw 60px;
            }
        }

        /* RESPONSIVE MOBILE */

        @media (max-width: 700px) {
            body {
                overflow: auto;
            }

            .hero {
                height: auto;
                min-height: 100vh;
            }

            main {
                height: 100vh;
                padding: 160px 25px 80px;
            }

            .eyebrow {
                font-size: 12px;
                letter-spacing: 1px;
            }

            h1 {
                font-size: clamp(40px, 12vw, 60px);
                letter-spacing: -2px;
            }

            .subtitle {
                font-size: 14px;
            }

            .datetime {
                margin-top: 20px;
            }

            .current-date {
                font-size: 13px;
            }

            .current-time {
                font-size: 12px;
            }

            .background-logo {
                top: 62%;
                right: 5%;
                opacity: 0.10;
            }

            .background-logo img {
                width: 450px;
                height: 450px;
            }

            .about-upik {
                padding: 60px 5%;
            }

            .about-title h2 {
                font-size: 30px;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 35px;
                padding: 30px;
            }

            .about-logo img {
                width: 170px;
                height: 170px;
            }

            .about-text {
                font-size: 14px;
                line-height: 1.8;
                text-align: left;
            }

            .site-footer {
                padding: 20px 15px;
            }

            .footer-unit {
                font-size: 9px;
                letter-spacing: 1px;
                line-height: 1.6;
            }

            .footer-address {
                font-size: 10px;
                line-height: 1.8;
            }

            .footer-copy {
                font-size: 9px;
            }
        }

        /* SMALL MOBILE */

        @media (max-width: 450px) {
            h1 {
                font-size: 40px;
            }

            .background-logo img {
                width: 350px;
                height: 350px;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="hero">

        <div class="background-logo">
            <img
                src="img/logoupik.jpg"
                alt="UPIK PTSB Logo">
        </div>

        <div class="circle-one"></div>
        <div class="circle-two"></div>

        <main id="home">

            <div class="eyebrow">
                SELAMAT DATANG KE
            </div>

            <div class="line"></div>

            <h1>
                Unit Penyelidikan,
                Inovasi dan
                Pengkomersialan.
            </h1>

            <div class="subtitle">
                Politeknik Tuanku Sultanah Bahiyah
            </div>

            <div class="datetime">

                <div class="current-date" id="currentDate">
                    Loading date...
                </div>

                <div class="current-time" id="currentTime">
                    Loading time...
                </div>

            </div>

        </main>

    </section>

    <!-- ABOUT UPIK SECTION -->
    <section class="about-upik" id="about">

        <div class="about-container">

            <div class="about-title">

                <span>TENTANG UPIK</span>

                <h2>
                    Unit Penyelidikan, Inovasi dan Komersil (UPIK)
                </h2>

            </div>

            <div class="about-content">

                <div class="about-logo">
                    <img
                        src="img/logoupik.jpg"
                        alt="Logo UPIK PTSB">
                </div>

                <div class="about-text">

                    <p>
                        Unit Penyelidikan, Inovasi dan Komersil (UPIK)
                        diwujudkan dalam sistem Jabatan Pendidikan
                        Politeknik, Kementerian Pendidikan Tinggi bertujuan
                        memperkasa dan membudayakan penyelidikan di Politeknik.
                    </p>

                    <p>
                        UPIK memainkan peranan penting sebagai pusat
                        penyelarasan aktiviti penyelidikan, inovasi dan
                        komersial dalam kalangan pensyarah dan stafnya.
                    </p>

                    <p>
                        UPIK juga berperanan menjadi pusat pengumpulan dan
                        rujukan bahan penulisan ilmiah, bahan inovasi dan
                        bahan penyelidikan peringkat institusi, zon,
                        kebangsaan dan antarabangsa.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer class="site-footer">

        <div class="footer-unit">
            UNIT PENYELIDIKAN • INOVASI • PENGKOMERSIALAN
        </div>

        <div class="footer-address">
            Unit Penyelidikan, Inovasi &amp; Pengkomersialan<br>
            Politeknik Tuanku Sultanah Bahiyah<br>
            09000 Kulim, Kedah
        </div>

        <div class="footer-copy">
            © 2026 UPIK PTSB. All Rights Reserved.
        </div>

    </footer>

    <!-- DATE AND TIME SCRIPT -->
    <script>
        function updateDateTime() {
            const now = new Date();

            const dateOptions = {
                weekday: "long",
                day: "numeric",
                month: "long",
                year: "numeric"
            };

            const timeOptions = {
                hour: "2-digit",
                minute: "2-digit",
                second: "2-digit",
                hour12: true
            };

            document.getElementById("currentDate").textContent =
                now.toLocaleDateString("en-MY", dateOptions);

            document.getElementById("currentTime").textContent =
                "Current Time: " +
                now.toLocaleTimeString("en-MY", timeOptions);
        }

        updateDateTime();
        setInterval(updateDateTime, 1000);
    </script>

</body>
</html>
