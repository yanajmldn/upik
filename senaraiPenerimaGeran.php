<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Senarai Penerima Geran | UPIK PTSB</title>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: linear-gradient(135deg, #f7fafc, #eaf3fb);
            min-height: 100vh;
            color: #11233e;
        }

        /* ========================================
           MAIN CONTENT
        ======================================== */

        main {
            max-width: 1400px;
            margin: auto;
            padding: 60px 25px 80px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-title span {
            color: #3d4a86;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .page-title h1 {
            font-family: "Playfair Display", serif;
            font-size: 40px;
            margin-top: 10px;
            color: #11233e;
        }

        .page-title p {
            margin-top: 10px;
            color: #687386;
            font-size: 15px;
        }


        /* ========================================
           SLIDESHOW
        ======================================== */

        .slideshow {
            width: 100%;
            max-width: 1400px;
            aspect-ratio: 16 / 6;
            margin: 0 auto 40px;
            position: relative;
            overflow: hidden;
            border-radius: 18px;
            background: white;
            border: 1px solid #e1e7ee;
            box-shadow: 0 10px 30px rgba(17, 35, 62, 0.08);
        }

        .slide {
            display: none;
            width: 100%;
            height: 100%;
        }

        .slide.active {
            display: block;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            background: white;
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            background: rgba(17, 35, 62, 0.75);
            color: white;
            font-size: 25px;
            cursor: pointer;
            transition: 0.3s;
            z-index: 2;
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }

        .prev:hover,
        .next:hover {
            background: #11233e;
        }

        .dots {
            position: absolute;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 3;
        }

        .dot {
            width: 10px;
            height: 10px;
            background: rgba(17, 35, 62, 0.35);
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s;
        }

        .dot.active {
            background: #11233e;
            transform: scale(1.2);
        }


        /* ========================================
           SEARCH & FILTER
        ======================================== */

        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .search-box {
            width: 100%;
            max-width: 420px;
            padding: 13px 17px;
            border: 1px solid #d7e0ea;
            border-radius: 10px;
            background: white;
            font-family: "DM Sans", sans-serif;
            font-size: 14px;
            outline: none;
        }

        .search-box:focus {
            border-color: #5b9ecb;
            box-shadow: 0 0 0 3px rgba(91, 158, 203, 0.12);
        }

        .year-filter {
            padding: 13px 17px;
            border: 1px solid #d7e0ea;
            border-radius: 10px;
            background: white;
            color: #11233e;
            font-family: "DM Sans", sans-serif;
            font-size: 14px;
            outline: none;
            cursor: pointer;
        }

        .year-filter:focus {
            border-color: #5b9ecb;
            box-shadow: 0 0 0 3px rgba(91, 158, 203, 0.12);
        }

        .info {
            color: #687386;
            font-size: 13px;
            white-space: nowrap;
        }


        /* ========================================
           TABLE
        ======================================== */

        .table-card {
            background: white;
            border: 1px solid #e1e7ee;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(17, 35, 62, 0.08);
            overflow: hidden;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1250px;
            border-collapse: collapse;
        }

        th {
            background: #11233e;
            color: white;
            padding: 15px 10px;
            border: 1px solid #263b5b;
            font-size: 13px;
            text-align: center;
            vertical-align: middle;
            line-height: 1.35;
        }

        td {
            padding: 12px 10px;
            border: 1px solid #cfd7e1;
            color: #26364b;
            font-size: 13px;
            line-height: 1.35;
            vertical-align: middle;
        }

        tbody tr:nth-child(even) {
            background: #f8fafc;
        }

        tbody tr:hover {
            background: #eef5fb;
        }

        .center {
            text-align: center;
        }

        .project {
            text-align: left;
            font-weight: 500;
        }

        .researcher {
            text-align: left;
        }

        .amount {
            text-align: center;
            white-space: nowrap;
            font-weight: 600;
        }

        .date {
            text-align: center;
            min-width: 115px;
        }


        /* ========================================
           TABLE COLUMN WIDTH
        ======================================== */

        th:nth-child(1),
        td:nth-child(1) {
            width: 50px;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 135px;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 90px;
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 75px;
        }

        th:nth-child(5),
        td:nth-child(5) {
            width: 360px;
        }

        th:nth-child(6),
        td:nth-child(6) {
            width: 210px;
        }

        th:nth-child(7),
        td:nth-child(7) {
            width: 135px;
        }

        th:nth-child(8),
        td:nth-child(8) {
            width: 135px;
        }

        th:nth-child(9),
        td:nth-child(9) {
            width: 135px;
        }


        /* ========================================
           NOTE
        ======================================== */

        .note {
            margin-top: 15px;
            color: #687386;
            font-size: 12px;
        }


        /* ========================================
           MOBILE
        ======================================== */

        @media (max-width: 768px) {

            main {
                padding: 45px 15px 60px;
            }

            .page-title h1 {
                font-size: 31px;
            }

            .page-title p {
                font-size: 13px;
            }

            .slideshow {
                aspect-ratio: 4 / 3;
                margin-bottom: 30px;
                border-radius: 14px;
            }

            .slide img {
                object-fit: contain;
            }

            .prev,
            .next {
                width: 38px;
                height: 38px;
                font-size: 20px;
            }

            .prev {
                left: 10px;
            }

            .next {
                right: 10px;
            }

            .dots {
                bottom: 12px;
            }

            .dot {
                width: 8px;
                height: 8px;
            }

            .toolbar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                max-width: none;
            }

            .year-filter {
                width: 100%;
            }

            .info {
                text-align: center;
            }
        }

    </style>

</head>


<body>


    <!-- ========================================
         MAIN
    ======================================== -->

    <main>


        <!-- ========================================
             PAGE TITLE
        ======================================== -->

        <div class="page-title">

            <span>
                UPIK PTSB
            </span>

            <h1>
                Senarai Penerima Geran
            </h1>

            <p>
                Senarai penerimaan geran bagi tahun 2021 hingga 2026
            </p>

        </div>


        <!-- ========================================
             4 IMAGE SLIDESHOW
        ======================================== -->

        <div class="slideshow">


            <!-- IMAGE 1 -->

            <div class="slide active">

                <img
                    src="g1.jpg"
                    alt="Geran 1"
                >

            </div>


            <!-- IMAGE 2 -->

            <div class="slide">

                <img
                    src="g2.jpg"
                    alt="Geran 2"
                >

            </div>


            <!-- IMAGE 3 -->

            <div class="slide">

                <img
                    src="g3.jpg"
                    alt="Geran 3"
                >

            </div>


            <!-- IMAGE 4 -->

            <div class="slide">

                <img
                    src="g4.jpg"
                    alt="Geran 4"
                >

            </div>


            <!-- PREVIOUS BUTTON -->

            <button
                class="prev"
                onclick="changeSlide(-1)"
            >
                &#10094;
            </button>


            <!-- NEXT BUTTON -->

            <button
                class="next"
                onclick="changeSlide(1)"
            >
                &#10095;
            </button>


            <!-- DOTS -->

            <div class="dots">

                <span
                    class="dot active"
                    onclick="currentSlide(1)"
                ></span>

                <span
                    class="dot"
                    onclick="currentSlide(2)"
                ></span>

                <span
                    class="dot"
                    onclick="currentSlide(3)"
                ></span>

                <span
                    class="dot"
                    onclick="currentSlide(4)"
                ></span>

            </div>

        </div>


        <!-- ========================================
             SEARCH & YEAR FILTER
        ======================================== -->

        <div class="toolbar">


            <input
                type="text"
                id="searchInput"
                class="search-box"
                placeholder="Search project, researcher, category, department..."
                onkeyup="searchTable()"
            >


            <select
                id="yearFilter"
                class="year-filter"
                onchange="searchTable()"
            >

                <option value="all">
                    All Years
                </option>

                <option value="2021">
                    2021
                </option>

                <option value="2023">
                    2023
                </option>

                <option value="2024">
                    2024
                </option>

                <option value="2025">
                    2025
                </option>

                <option value="2026">
                    2026
                </option>

            </select>


            <div
                class="info"
                id="resultInfo"
            >
                14 records
            </div>

        </div>


        <!-- ========================================
             TABLE
        ======================================== -->

        <div class="table-card">

            <div class="table-wrapper">

                <table id="grantTable">

                    <thead>

                        <tr>

                            <th>
                                BIL
                            </th>

                            <th>
                                KATEGORI<br>GERAN
                            </th>

                            <th>
                                JABATAN
                            </th>

                            <th>
                                TAHUN
                            </th>

                            <th>
                                TAJUK PROJEK
                            </th>

                            <th>
                                KETUA<br>PENYELIDIK
                            </th>

                            <th>
                                NILAI
                            </th>

                            <th>
                                TARIKH<br>MULA PROJEK
                            </th>

                            <th>
                                TARIKH<br>TAMAT PROJEK
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>
                            <td class="center">1</td>
                            <td class="center">T-ARGS</td>
                            <td class="center">JKA</td>
                            <td class="center">2021</td>
                            <td class="project">
                                E.COLI REMOVAL VIA LOW FREQUENCY ELECTROMAGNETIC FIELD IN RIVERBANK FILTRATION
                            </td>
                            <td class="researcher">
                                DR. ROSSITAH BINTI SELAMAT
                            </td>
                            <td class="amount">RM97400</td>
                            <td class="date">1 JULAI 2021</td>
                            <td class="date">30 JUN 2022</td>
                        </tr>


                        <tr>
                            <td class="center">2</td>
                            <td class="center">PPRN</td>
                            <td class="center">JKM</td>
                            <td class="center">2023</td>
                            <td class="project">
                                PEMBANGUNAN SISTEM PEMAKANAN AUTOMATIK PINTAR BERPUSAT UNTUK INDUSTRI AKUAKULTUR IKAN KELI
                            </td>
                            <td class="researcher">
                                IZHAR B. AHMAD
                            </td>
                            <td class="amount">RM49992.5</td>
                            <td class="date">OGOS 2023</td>
                            <td class="date">MAY 2024</td>
                        </tr>


                        <tr>
                            <td class="center">3</td>
                            <td class="center">T-ACGS</td>
                            <td class="center">JKA</td>
                            <td class="center">2024</td>
                            <td class="project">
                                PRODUK PERENGKUH PAIP ERGONOMIK (PPE) @ SMART WRENCH PAIP
                            </td>
                            <td class="researcher">
                                TS. MOHD SYAFARIL BIN JAMALUDDIN
                            </td>
                            <td class="amount">RM60000</td>
                            <td class="date">18 MAC 2024</td>
                            <td class="date">17 MAC 2025</td>
                        </tr>


                        <tr>
                            <td class="center">4</td>
                            <td class="center">PPRN</td>
                            <td class="center">JKM</td>
                            <td class="center">2024</td>
                            <td class="project">
                                PEMINDAHAN TEKNOLOGI - PROJEK PENETASAN UNGGAS
                            </td>
                            <td class="researcher">
                                IZHAR B. AHMAD
                            </td>
                            <td class="amount">RM5000</td>
                            <td class="date">SEPT24</td>
                            <td class="date">DIS24</td>
                        </tr>


                        <tr>
                            <td class="center">5</td>
                            <td class="center">T-AIGS</td>
                            <td class="center">JKM</td>
                            <td class="center">2024</td>
                            <td class="project">
                                PEMBANGUNAN SISTEM JARINGAN PERTANIAN TERMAJU (SPT) BAGI PLEUROTUSOSTREATUS : KE ARAH APARAN SIFAR
                            </td>
                            <td class="researcher">
                                WAN NOR SHELA EZWANE BINTI WAN JUSOH, DR. MD RAZAK BIN DAUD
                            </td>
                            <td class="amount">RM66300</td>
                            <td class="date">MAC24</td>
                            <td class="date">DIS24</td>
                        </tr>


                        <tr>
                            <td class="center">6</td>
                            <td class="center">T-AIGS</td>
                            <td class="center">JKM</td>
                            <td class="center">2024</td>
                            <td class="project">
                                CONTROL MEASURE OF HAZARD MANAGEMENT AND RISK ASSESSMENT WITH MIXED REALITY APPLICATION(T-AIGS)
                            </td>
                            <td class="researcher">
                                NADIA HANIM BT. ABD RANI
                            </td>
                            <td class="amount">RM36000</td>
                            <td class="date">18 MAC 2024</td>
                            <td class="date">17 MAC 2025</td>
                        </tr>


                        <tr>
                            <td class="center">7</td>
                            <td class="center">
                                GERAN PEMBIAYAAN DI BAWAH GREEN FORTE SDN. BHD.
                            </td>
                            <td class="center">JKE</td>
                            <td class="center">2024</td>
                            <td class="project">
                                DEVELOPMENT OF PRE COMMERCIALIZATION URBAN FARMING CILTIVATION SYSTEM FOR SELECTION VEGETABLES WITH IOT (GREEN FORTE-UITMPP-PTSB)
                            </td>
                            <td class="researcher">
                                TS. NORSYIRA ZURAIZA BINTI OMAR
                            </td>
                            <td class="amount">RM47,717.00</td>
                            <td class="date">4 JUN 2025</td>
                            <td class="date">31 DEC 2025</td>
                        </tr>


                        <tr>
                            <td class="center">8</td>
                            <td class="center">T-AIGS</td>
                            <td class="center">JKA</td>
                            <td class="center">2025</td>
                            <td class="project">
                                DEVELOPMENT OF SMART MONITORING SYSTEM FOR CRACK DETECTION IN BUILDING ELEMENTS
                            </td>
                            <td class="researcher">
                                NOR ASHIKIN BINTI MARZUKI
                            </td>
                            <td class="amount">RM74250</td>
                            <td class="date">21 APRIL 2025</td>
                            <td class="date">20 APRIL 2026</td>
                        </tr>


                        <tr>
                            <td class="center">9</td>
                            <td class="center">DANA KAJIAN SOSIAL KPT</td>
                            <td class="center">JKA</td>
                            <td class="center">2025</td>
                            <td class="project">
                                KAJIAN PENERIMAAN KOMUNITI KULIM HI-TECH PARK DAN IMPLIKASI SOSIO-EKONOMI TERHADAP MATLAMAT KARBON NEUTRAL 2025
                            </td>
                            <td class="researcher">
                                DR. ROSSITAH BINTI SELAMAT
                            </td>
                            <td class="amount">RM41000</td>
                            <td class="date">1 SEPTEMBER 2025</td>
                            <td class="date">1 JUNE 2026</td>
                        </tr>


                        <tr>
                            <td class="center">10</td>
                            <td class="center">T-AIGS</td>
                            <td class="center">JMSK</td>
                            <td class="center">2025</td>
                            <td class="project">
                                PAIP PENEBAT DIGUNA PAKAI SEBAGAI SHIN GUARD BAGI SUKAN SEPAK RAGA TUJU
                            </td>
                            <td class="researcher">
                                TS. FAIZATUL HAIDA BT MD ISA
                            </td>
                            <td class="amount">RM11565</td>
                            <td class="date">10 FEBRUARI 2025</td>
                            <td class="date">9 FEBRUARI 2026</td>
                        </tr>


                        <tr>
                            <td class="center">11</td>
                            <td class="center">T-ARGS</td>
                            <td class="center">JKM</td>
                            <td class="center">2025</td>
                            <td class="project">
                                PEMBANGUNAN RUMAH PENGERING AL-QURAN TERMAJU DENGAN IOT DENGAN KAEDAH MENGGUNAKAN SOLAR
                            </td>
                            <td class="researcher">
                                AHMAD SABRI BIN MOHAMED
                            </td>
                            <td class="amount">RM76745</td>
                            <td class="date">FEB 2025</td>
                            <td class="date">FEB 2026</td>
                        </tr>


                        <tr>
                            <td class="center">12</td>
                            <td class="center">T-ACGS</td>
                            <td class="center">JKM</td>
                            <td class="center">2025</td>
                            <td class="project">
                                SMEG INCUBATOR (SMART MECANICAL EGG INCUBATOR)
                            </td>
                            <td class="researcher">
                                IZHAR BIN AHMAD
                            </td>
                            <td class="amount">RM60000</td>
                            <td class="date">FEB 2025</td>
                            <td class="date">FEB 2026</td>
                        </tr>


                        <tr>
                            <td class="center">13</td>
                            <td class="center">IMaP (USM-PTSB)</td>
                            <td class="center">JKE</td>
                            <td class="center">2025</td>
                            <td class="project">
                                HYBRID ZEOLITE-ZWITAD SYSTEM FOR ENHANCED AMMONIACAL NITROGEN REMOVAL IN SEWAGE TREATMENT PLANT (USM -PTSB)
                            </td>
                            <td class="researcher">
                                TS. NORSYIRA ZURAIZA BINTI OMAR
                            </td>
                            <td class="amount">RM175,726.00</td>
                            <td class="date">1 APRIL 2025</td>
                            <td class="date">31 OKTOBER 2026</td>
                        </tr>


                        <tr>
                            <td class="center">14</td>
                            <td class="center">T-ACGS</td>
                            <td class="center">JMSK</td>
                            <td class="center">2026</td>
                            <td class="project">
                                SRT Flexguard
                            </td>
                            <td class="researcher">
                                TS. DR. FAIZATULHAIDA BT MD ISA
                            </td>
                            <td class="amount">RM460000</td>
                            <td class="date">30 MAC 2026</td>
                            <td class="date">29 MAC 2027</td>
                        </tr>


                    </tbody>

                </table>

            </div>

        </div>


        <!-- ========================================
             NOTE
        ======================================== -->

        <div class="note">

            * Gunakan ruangan carian untuk mencari projek,
            ketua penyelidik, kategori geran atau jabatan.

        </div>


    </main>


    <!-- ========================================
         JAVASCRIPT
    ======================================== -->

    <script>

        /* ========================================
           SEARCH TABLE
        ======================================== */

        function searchTable() {

            const input =
                document
                .getElementById("searchInput")
                .value
                .toLowerCase();

            const selectedYear =
                document
                .getElementById("yearFilter")
                .value;

            const rows =
                document.querySelectorAll(
                    "#grantTable tbody tr"
                );

            let visible = 0;


            rows.forEach(function(row) {

                const text =
                    row.textContent.toLowerCase();

                const year =
                    row
                    .querySelector("td:nth-child(4)")
                    .textContent
                    .trim();


                const matchesSearch =
                    text.includes(input);

                const matchesYear =
                    selectedYear === "all" ||
                    year === selectedYear;


                if (
                    matchesSearch &&
                    matchesYear
                ) {

                    row.style.display = "";

                    visible++;

                } else {

                    row.style.display = "none";

                }

            });


            document
                .getElementById("resultInfo")
                .textContent =
                visible +
                (
                    visible === 1
                        ? " record"
                        : " records"
                );

        }


        /* ========================================
           SLIDESHOW
        ======================================== */

        let slideIndex = 1;


        showSlide(slideIndex);


        function changeSlide(n) {

            showSlide(slideIndex += n);

        }


        function currentSlide(n) {

            showSlide(slideIndex = n);

        }


        function showSlide(n) {

            const slides =
                document.querySelectorAll(".slide");

            const dots =
                document.querySelectorAll(".dot");


            if (n > slides.length) {

                slideIndex = 1;

            }


            if (n < 1) {

                slideIndex = slides.length;

            }


            slides.forEach(function(slide) {

                slide.classList.remove("active");

            });


            dots.forEach(function(dot) {

                dot.classList.remove("active");

            });


            slides[slideIndex - 1]
                .classList.add("active");


            dots[slideIndex - 1]
                .classList.add("active");

        }


        /* ========================================
           AUTO SLIDESHOW
        ======================================== */

        setInterval(function() {

            changeSlide(1);

        }, 5000);

    </script>


</body>


</html>


<?php include 'footer.php'; ?>