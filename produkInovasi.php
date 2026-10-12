<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product by Jabatan - Innovation | UPIK PTSB</title>

    <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: linear-gradient(135deg, #f7fafc, #eaf3fb);
            color: #11233e;
            min-height: 100vh;
        }

        main {
            width: min(1250px, 92%);
            margin: auto;
            padding: 70px 0;
        }

        .heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .heading-small {
            color: #3d4a86;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .heading h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(38px, 5vw, 58px);
            color: #11233e;
            margin-bottom: 12px;
        }

        .heading p {
            max-width: 720px;
            margin: auto;
            color: #667085;
            font-size: 14px;
            line-height: 1.7;
        }

        .innovation-box {
            background: white;
            border: 1px solid #e1e8ef;
            border-radius: 20px;
            padding: 28px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(17,35,62,0.05);
        }

        .innovation-box h2 {
            font-family: "Playfair Display", serif;
            font-size: 25px;
            margin-bottom: 8px;
        }

        .innovation-box p {
            color: #667085;
            font-size: 13px;
            line-height: 1.7;
        }

        .filter-area {
            background: white;
            border: 1px solid #e1e8ef;
            border-radius: 18px;
            padding: 22px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(17,35,62,0.05);
        }

        .filter-row {
            display: grid;
            grid-template-columns: 1fr 220px;
            gap: 15px;
        }

        .search-box,
        .year-select {
            width: 100%;
            height: 48px;
            border: 1px solid #d8e1ea;
            border-radius: 10px;
            padding: 0 15px;
            font-family: "DM Sans", sans-serif;
            font-size: 13px;
            color: #11233e;
            background: white;
            outline: none;
        }

        .search-box:focus,
        .year-select:focus {
            border-color: #3d4a86;
            box-shadow: 0 0 0 3px rgba(61,74,134,0.10);
        }

        .result-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin: 0 0 15px;
        }

        .result-info strong {
            color: #11233e;
            font-size: 14px;
        }

        .result-info span {
            color: #667085;
            font-size: 12px;
        }

        .table-wrapper {
            background: white;
            border: 1px solid #e1e8ef;
            border-radius: 18px;
            overflow-x: auto;
            box-shadow: 0 8px 25px rgba(17,35,62,0.06);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1050px;
        }

        thead {
            background: #11233e;
            color: white;
        }

        th {
            padding: 15px 13px;
            font-size: 11px;
            letter-spacing: 0.5px;
            text-align: left;
            white-space: nowrap;
        }

        td {
            padding: 16px 13px;
            border-bottom: 1px solid #edf1f5;
            font-size: 12px;
            color: #475467;
            vertical-align: top;
            line-height: 1.6;
        }

        tbody tr {
            transition: background 0.2s ease;
        }

        tbody tr:hover {
            background: #f7fafc;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .bil {
            width: 55px;
            text-align: center;
            font-weight: 700;
            color: #11233e;
        }

        .name {
            min-width: 210px;
            font-weight: 600;
            color: #11233e;
        }

        .product {
            min-width: 300px;
            font-weight: 600;
            color: #3d4a86;
        }

        .expo {
            min-width: 260px;
        }

        .level {
            min-width: 120px;
        }

        .recognition {
            min-width: 170px;
        }

        .date {
            min-width: 100px;
            white-space: nowrap;
        }

        .badge {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            background: #eaf3fb;
            color: #3d4a86;
            font-size: 10px;
            font-weight: 700;
        }

        .empty {
            text-align: center;
            padding: 45px 20px;
            color: #667085;
            font-size: 13px;
        }

        @media (max-width: 700px) {
            main {
                width: 92%;
                padding: 45px 0;
            }

            .filter-row {
                grid-template-columns: 1fr;
            }

            .innovation-box {
                padding: 22px;
            }

            .result-info {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<main>

    <section class="heading">
        <div class="heading-small">
            UPIK PTSB
        </div>

        <h1>
            Product by Jabatan - Innovation
        </h1>

        <p>
            Innovation products and projects recorded by UPIK PTSB
            for the years 2023 to 2025.
        </p>
    </section>


    <section class="innovation-box">
        <h2>
            Innovation
        </h2>

        <p>
            Senarai produk dan projek inovasi yang telah disertai
            dalam pelbagai ekspo dan pertandingan inovasi.
            Gunakan carian untuk mencari nama atau nama produk,
            dan pilih tahun untuk menapis rekod.
        </p>
    </section>


    <section class="filter-area">

        <div class="filter-row">

            <input
                type="text"
                id="searchInput"
                class="search-box"
                placeholder="Search nama atau nama produk..."
                autocomplete="off"
            >

            <select id="yearFilter" class="year-select">
                <option value="all">Semua Tahun</option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
            </select>

        </div>

    </section>


    <div class="result-info">
        <strong id="resultCount">
            91 rekod
        </strong>

        <span>
            Tahun 2023 - 2025
        </span>
    </div>


    <section class="table-wrapper">

        <table>

            <thead>
                <tr>
                    <th class="bil">BIL</th>
                    <th>NAMA</th>
                    <th>NAMA PRODUK / TAJUK PROJEK</th>
                    <th>NAMA EKSPO / PAMERAN</th>
                    <th>PERINGKAT</th>
                    <th>PENGIKTIRAFAN</th>
                    <th>TARIKH</th>
                </tr>
            </thead>

            <tbody id="innovationTable">
            </tbody>

        </table>

    </section>

</main>


<script>
    const innovationData = [{"bil": 1, "name": "TS. FAIZATULHAIDA BT MD ISA", "title": "PROJEK SRT FLEXGUARD (Pelindung Inovatif)", "expo": "7TH SIRIM INVENTION, INNOVATION & TECHNOLOGI EXPO 2025", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "07/10/2025", "year": 2025}, {"bil": 2, "name": "TS. FAIZATULHAIDA BT MD ISA", "title": "PAIP PENEBAT DIGUNA PAKAI SEBAGAI SHIN GUARD", "expo": "iCompEx 2025", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "12/08/2025", "year": 2025}, {"bil": 3, "name": "NUR AIN BINTI MAHAT", "title": "MAZERUSH", "expo": "VIRTUAL INNOVATION COMPETITION 2025 (VIC25)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "08/06/2025", "year": 2025}, {"bil": 4, "name": "INTAN RADINA BINTI AHMAD", "title": "ARABIC GAME BOARD 2.0", "expo": "VIRTUAL INNOVATION COMPETITION 2025", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "30/05/2025", "year": 2025}, {"bil": 5, "name": "AHMAD SABRI BIN MOHAMED", "title": "INOVASI KIT PEMBELAJARAN SISTEM SOLAR STEM UNTUK PEMBELAJARAN BERASASKAN HANDS-ON DAN INKUIRI AKTIF.", "expo": "INTERNATIONAL VIRTUAL COMPETITION OF CREATIVE & INNOVATIVE IDEA", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "23/05/2025", "year": 2025}, {"bil": 6, "name": "TS. NORSYIRA ZURAIZA BINTI OMAR", "title": "PLC2IOT EDUKIT SUITE", "expo": "INTERNATIONAL EDUCATION INNOVATION COMPETITION EDU @ INNOVATE 2025", "level": "ANTARABANGSA", "recognition": "GANGSA DAN SETARA", "date": "19/05/2025", "year": 2025}, {"bil": 7, "name": "SHARIPAH KHADIJAH BINTI S.HASHIM", "title": "MOSQUINO", "expo": "IDEANOVA2025 - ENVIRONMENTAL AND OCCUPATIONAL HEALTH SOCIETY (EOHS)", "level": "KEBANGSAAN", "recognition": "GANGSA DAN SETARA", "date": "05/05/2025", "year": 2025}, {"bil": 8, "name": "TS. NORSYIRA ZURAIZA BINTI OMAR", "title": "PLC2IOT EDUKIT SUITE", "expo": "FESTIVAL TVET 2025", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "29/04/2025", "year": 2025}, {"bil": 9, "name": "SHARIPAH BINTI DAUD", "title": "4-BIT DIGITAL TO ANALOG CONVERTER (DAC) TRAINING KIT", "expo": "SEMINAR PENYELIDIKAN, INOVASI & PENULISAN ILMIAH 2025 (SPPIP'25)", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "29/04/2025", "year": 2025}, {"bil": 10, "name": "MUNIRAH BINTI MD. NUJID", "title": "BRIDGEX: TRANSFORMASI DC WHEATSTONE BRIDGE KE ARAH APLIKASI PINTAR BERASASKAN IOT", "expo": "FESTIVAL TEVT 2025", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "29/04/2025", "year": 2025}, {"bil": 11, "name": "AMRAH BINTI MAT SAFRI", "title": "LIGHTING MONITORING TRAINER", "expo": "FESTIVAL TVET 2025", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "29/04/2025", "year": 2025}, {"bil": 12, "name": "ZARINA BINTI ISMAIL", "title": "INTERACTIVE MAGNETIC IMPEDANCE KIT (IMI KIT)", "expo": "INTERNATIONAL EDUCATION INNOVATION CARNIVAL", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "27/04/2025", "year": 2025}, {"bil": 13, "name": "TS. NORSYIRA ZURAIZA BINTI OMAR", "title": "PLC2IOT EDUKIT SUITE", "expo": "INTERNATIONAL EDUCATION INNOVATION COMPETITION EDU @ INNOVATE 2025", "level": "ANTARABANGSA", "recognition": "GANGSA DAN SETARA", "date": "19/04/2025", "year": 2025}, {"bil": 14, "name": "NURBAITI BINTI MAHRAN", "title": "INVESTIGATING FOOD SPENDING HABITS AMONG STUDENTS AT POLYTECHNIC TUANKU SULTANAH BAHIYAH", "expo": "CIE-TVET PTSB2024", "level": "KEBANGSAAN", "recognition": "LAIN-LAIN", "date": "08/01/2025", "year": 2025}, {"bil": 15, "name": "NOOR AZALINA BT KHALIL", "title": "PEMBANGUNAN SOLAR HYDRO POWER PORTABLE GENSET DI KAWASAN SUNGAI BAGI MENGHASILKAN TENAGA ELEKTRIK", "expo": "4TH INTERNATIONAL CREATIVE AND INNOVATIVE PRODUCT EXHIBITION 2024", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "15/12/2024", "year": 2024}, {"bil": 16, "name": "FARIZOH BINTI HAMID", "title": "HYDROGUARD ECOPOT KIT", "expo": "INTERNATIONAL BUSINESS INNOVATION AND IDEAS COMPETITION 2024 (INOVASI24)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "12/12/2024", "year": 2024}, {"bil": 17, "name": "ZATIL AQMAR BINTI ZAINUDIN", "title": "GOLEARN BOARD GAME", "expo": "INTERNATIONAL BUSINESS INNOVATION AND IDEAS COMPETITION 2024", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "12/12/2024", "year": 2024}, {"bil": 18, "name": "MOHD. HUZAIMI BIN MD. ZUKI", "title": "E BOOK :MARKETING PLAN PROJECT COLLECTION", "expo": "INOVASI 24", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "12/12/2024", "year": 2024}, {"bil": 19, "name": "ZATIL AQMAR BINTI ZAINUDIN", "title": "GOLEARN BOARD GAME", "expo": "INTERNATIONAL BUSINESS AND MANAGEMENT VIRTUAL INNOVATION & INVENTION OF IDEAS COMPETITION (VIIIC)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "30/11/2024", "year": 2024}, {"bil": 20, "name": "NADIA HANIM BT ABD. RANI", "title": "CONTROL MEASURES OF HAZARD MANAGEMENT AND RISK ASSESSMENT WITH MIXED REALITY APPLICATION", "expo": "INTERNATIONAL COMPETITION AND EXHIBITION ON COMPUTING INNOVATION (ICE-CINNO)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "28/11/2024", "year": 2024}, {"bil": 21, "name": "NORMAWAR BINTI ALI", "title": "INTELLIGENT LOCKING SYSTEM FOR WEAPON RACK (IWTR)", "expo": "INTERNATIONAL COMPETITION AND EXHIBITION ON COMPUTING INNOVATION 2024", "level": "ANTARABANGSA", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "27/11/2024", "year": 2024}, {"bil": 22, "name": "MUHAMAD AIZAT BIN ZOLKOFLE", "title": "KONKRIT PEJALAN KAKI REFLEKSOLOGI MAMPAN", "expo": "FKAAB INNOVATION WEEK 2024 (INNOW 2024)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "18/11/2024", "year": 2024}, {"bil": 23, "name": "FARIZOH BINTI HAMID", "title": "HYDROGUARD ECOPOT KIT", "expo": "BALIK PULAU NATIONAL INNOVATION COMPETITION 2024 (BPNIC2024)", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "05/11/2024", "year": 2024}, {"bil": 24, "name": "SHARIPAH KHADIJAH BINTI S.HASHIM", "title": "SUPPLY CHAIN MASTERY GAME BOARD", "expo": "HARI INOVASI PPAL 4.0", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "23/10/2024", "year": 2024}, {"bil": 25, "name": "SHARIPAH KHADIJAH BINTI S.HASHIM", "title": "DURIAN CRUNCH DELIGHT", "expo": "TECHNOLOGY INNOVATION COMPETITION (TECHIC 2024)", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "23/10/2024", "year": 2024}, {"bil": 26, "name": "MASBURAH BINTI MUSTAFFA", "title": "IOT MK TRAINER", "expo": "INOVASI DALAM PENDIDIKAN KE ARAH MATLAMAT PEMBANGUNAN LESTARI (SDG)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "23/10/2024", "year": 2024}, {"bil": 27, "name": "FAIZATULHAIDA BINTI MD.ISA", "title": "AQUAMIND:WASTE WATER TREATMENT LEARNING INNOVATION", "expo": "INTERNATIONAL LEARNING  INNOVATION COMPETITION 2024", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "07/10/2024", "year": 2024}, {"bil": 28, "name": "ZALIATI BINTI JAAFAR", "title": "OKU-TECH", "expo": "AI & OT INTERNATIONAL INNOVATION EXPO 2024", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "25/09/2024", "year": 2024}, {"bil": 29, "name": "ZARINA SYUHAIDA BINTI SHAARANI", "title": "PELUPUSAN E-SISA DI KALANGAN WARGA IPT DI SEKITAR KULIM, KEDAH: APA MASALAHNYA?", "expo": "NATIONAL CONFERENCE IN EDUCATION-TECHNICAL & VOCATIONAL EDUCATION AND TRAINING 2023", "level": "KEBANGSAAN", "recognition": "SIJIL PENGHARGAAN", "date": "11/09/2024", "year": 2024}, {"bil": 30, "name": "WAN NOR SHELA EZWANE BINTI WAN JUSOH", "title": "INTEGRASI SISTEM RANTAIAN AGRI KOMUNITI (ISRAK)", "expo": "KONVENSYEN KUMPULAN INOVATIF DAN KREATIF HORIZON BAHARU", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "27/08/2024", "year": 2024}, {"bil": 31, "name": "NURUL ASMA BINTI EFFENDI", "title": "TASAWWUR BOX (T-BOX)", "expo": "NICERS 24", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "21/08/2024", "year": 2024}, {"bil": 32, "name": "NOR AIZAM BT. MUHAMED YUSOF", "title": "ALPHABET RECOGNITION FOR SIGN LANGUAGE USING DEEP LEARNING", "expo": "CONFERENCE IN EDUCATION TECHNICAL AND VOCATIONAL EDUCATION AND TRAINING (CIETVET 2024)", "level": "KEBANGSAAN", "recognition": "SIJIL PENGHARGAAN", "date": "21/08/2024", "year": 2024}, {"bil": 33, "name": "AZHAR BIN FIKRI", "title": "REKA BENTUK DAN PEMBANGUNAN SMART PORTABLE SNAKE CAGE (SPSC): SOLUSI INOVATIF UNTUK MENEMPATKAN ULAR BERBISA SECARA SELAMAT", "expo": "NATIONAL INVENTION & INNOVATION COMPETITION EXIBITION AND ROBOT-SUMO 2024", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "20/08/2024", "year": 2024}, {"bil": 34, "name": "FAIZATULHAIDA BINTI MD.ISA", "title": "WUDUK ECO CONVERT", "expo": "NATIONAL INVENTION & INNOVATION COMPETITION EXHIBITION AND ROBOT-SUMO 2024", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "20/08/2024", "year": 2024}, {"bil": 35, "name": "MUHAMAD AIZAT BIN ZOLKOFLE", "title": "KAJIAN PENGHASILAN TUKUN TIRUAN REKREASI IBS BERBENTUK SEGI TIGA", "expo": "NATIONAL INVENTION AND INNOVATION, COMPETITION, EXHIBITION AND ROBOT-SUMO 2024 (NICERS'24)", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "20/08/2024", "year": 2024}, {"bil": 36, "name": "NOR FARAHAIN BINTI DZULKAFLI", "title": "STUDENT ENGAGEMENT, INTERACTION AND ENJOYMENT ON GAME BASED LEARNING ACTIVITIES IN THE CLASSROOM: MASTERSQUARE GAME", "expo": "NATIONAL CONFERENCE IN EDUCATION-TECHNICAL & VOCATIONAL TRAINING 2024 (CIE-TVET 2024)", "level": "KEBANGSAAN", "recognition": "SIJIL PENGHARGAAN", "date": "20/08/2024", "year": 2024}, {"bil": 37, "name": "FARIZOH BINTI HAMID", "title": "HUBUNGAN PENGUASAAN TOPIK PERSAMAAN (ALGEBRA) DENGAN KEPUTUSAN PEPERIKSAAN AKHIR BAGI SUBJEK BUSINESS MATHEMATICS : SATU KAJIAN DALAM KALANGAN PELAJAR JABATAN PERDAGANGAN, POLITEKNIK TUANKU SULTANAH BAHIYAH.", "expo": "NATIONAL CONFERENCE IN EDUCATION-TECHNICAL & VOCATIONAL TRAINING 2024 (CIE-TVET 2024)", "level": "KEBANGSAAN", "recognition": "SIJIL PENGHARGAAN", "date": "20/08/2024", "year": 2024}, {"bil": 38, "name": "ZATIL AQMAR BINTI ZAINUDIN", "title": "GOLEARN BOARD GAME", "expo": "NATIONAL INVENTION & INNOVATION COMPETITION, EXHIBITION AND ROBOT-SUMO 2024", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "20/08/2024", "year": 2024}, {"bil": 39, "name": "AINUR HANA BINTI HUZAIDY", "title": "THE INCLINATION OF STUDENTS AT POLITEKNIK TUANKU SULTANAH BAHIYAH (PTSB) TO PURCHASE READY-TO-EAT (RTE) MEAL PRODUCTS", "expo": "CONFERENCE IN EDUCATION TECHNICAL & VOCATIONAL EDUCATION AND TRAINING 2024", "level": "KEBANGSAAN", "recognition": "SIJIL PENGHARGAAN", "date": "20/08/2024", "year": 2024}, {"bil": 40, "name": "NOR HAYATI BT. MOHAMAD ALLI", "title": "FLOOD WARNING SYSTEM KIT (FLAWS)", "expo": "NATIONAL INVENTION & INNOVATION COMPETITION EXHIBITION AND ROBOT-SUMO 2024", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "20/08/2024", "year": 2024}, {"bil": 41, "name": "NOOR AZALINA BT KHALIL", "title": "ESPAH@PTSB", "expo": "INTERNATIONAL STEM INNOVATION COMPETITION (ISIC-WOU24)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "30/07/2024", "year": 2024}, {"bil": 42, "name": "AINUR HANA BINTI HUZAIDY", "title": "360 MARKETING", "expo": "PERTANDINGAN INOVASI PEMBELAJARAN DAN PENGAJARAN PERINGKAT KEBANGSAAN SECARA DALAM TALIAN 2024 - KALI KE-3", "level": "KEBANGSAAN", "recognition": "GANGSA DAN SETARA", "date": "28/07/2024", "year": 2024}, {"bil": 43, "name": "WAN NOR SHELA EZWANE BINTI WAN JUSOH", "title": "PEMBANGUNAN SISTEM TERMAJU DENGAN KAWALAN IOT: SISTEM PERTANIAN JIMAT TENAGA", "expo": "POLYCC KOMERSIAL PERINGKAT KEBANGSAAN", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "26/07/2024", "year": 2024}, {"bil": 44, "name": "NURUL AZUWA BINTI MD MUHAYADIN", "title": "QIBLAH KIT", "expo": "INTERNATIONAL DEVELOPMENT RESEARCH & INNOVATION VIRTUAL EXHIBITION (1ST IDRIVE)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "15/07/2024", "year": 2024}, {"bil": 45, "name": "INTAN RADINA BINTI AHMAD", "title": "ARABIC GAME BOARD", "expo": "INTERNATIONAL INDUSTRIAL REVOLUTION 4.0 EXPOSITION 2024", "level": "ANTARABANGSA", "recognition": "GANGSA DAN SETARA", "date": "20/05/2024", "year": 2024}, {"bil": 46, "name": "WAN NOR SHELA EZWANE BINTI WAN JUSOH", "title": "APLIKASI PENDERIA DALAM PENGAJARAN DAN PEMBELAJARAN: MEMPERKASAKAN PERTANIAN", "expo": "INTERNATIONAL PSA INNOVATION, TECHNOLOGY, ENGINEERING AND COMERLIZATION (IPITEC)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "14/05/2024", "year": 2024}, {"bil": 47, "name": "ZALIATI BINTI JAAFAR", "title": "PEMBANGUNAN AUGMENTED REALITY IMAGINE DRAW SEBAGAI MEDIA PEMBELAJARAN", "expo": "INTERNATIONAL PSA INNOVATION, TECHNOLOGY, ENGINEERING & COMMERCIALIZATION CONFERENCE", "level": "ANTARABANGSA", "recognition": "GANGSA DAN SETARA", "date": "14/05/2024", "year": 2024}, {"bil": 48, "name": "LACHMY NARAYANA A/L JOGULU", "title": "CLASLA XTRA - LEARN ENGLISH THE EASY WAY", "expo": "INTERNATIONAL INNOVATION FESTIVAL (INNOFEST 2024)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "29/04/2024", "year": 2024}, {"bil": 49, "name": "WAN NOR SHELA EZWANE BINTI WAN JUSOH", "title": "THE USE OF SMART INTEGRATION AGRICULTURAL SYSTEMS (SIAS) TOWARD ENVIRONMENTAL SUSTAINABILITY", "expo": "INTERNATIONAL INNOVATION FESTIVAL (INNOFEST)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "29/04/2024", "year": 2024}, {"bil": 50, "name": "MD RAZAK BIN DAUD", "title": "THE USE OF SMART INTEGRATION AGRICULTURAL SYSTEMS (SIAS) TOWARDS ENVIRONMENTAL SUSTAINABILITY", "expo": "INNOFEST 2024", "level": "ANTARABANGSA", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "29/04/2024", "year": 2024}, {"bil": 51, "name": "NORIZA BT. MUHAMED YUSOF", "title": "ALAT DIGITAL HUKUM ZEROTH TERMODINAMIK", "expo": "INNOFEST 24 (THE INTERNATIONAL INNOVATION FESTIVAL 2024)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "29/04/2024", "year": 2024}, {"bil": 52, "name": "FATIN HAMIMAH BT. MOHAMED SALLEH", "title": "MARBLE ROUND GAME", "expo": "RECYCLE & COMMERCIAL (RECCOMâ€™24) SEMPENA NATIONAL POLYCC TECHNOLOGY TRANSFER  CONFERENCE 2024 (NTTCâ€™ 24)", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "29/04/2024", "year": 2024}, {"bil": 53, "name": "NOR AIZAM BT. MUHAMED YUSOF", "title": "SMART HOME MONITORING SYSTEM WITH IOT APPLICATION", "expo": "INTERNATIONAL FINAL YEAR PROJECT COMPETITION AND EXHIBITION 2023", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "07/03/2024", "year": 2024}, {"bil": 54, "name": "NOR AIZAM BT. MUHAMED YUSOF", "title": "SMART HOME MONITORING SYSTEM WITH IOT APPLICATION", "expo": "FINAL YEAR PROJECT COMPETITION & EXHIBITION", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "07/03/2024", "year": 2024}, {"bil": 55, "name": "SHARIPAH KHADIJAH BINTI S.HASHIM", "title": "DPL INTERACTIVE HUB", "expo": "INTERNATIONAL CREATIVE INNOVATION IDEA COMPETITION (ICIIC) 2024", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "14/02/2024", "year": 2024}, {"bil": 56, "name": "MOHD KHAIRUL ANUAR B HARON", "title": "SMART WASTE TRAP", "expo": "BANGKOK'S INTERNATIONAL INTELLECTUAL PROPERTY, INVENTION, INNOVATION AND TECHNOLOGY EXPOSITION (IPITEX 2024)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "02/02/2024", "year": 2024}, {"bil": 57, "name": "SITI MARIAM BINTI HUSSAIN", "title": "SMART INTERNSHIP SYSTEM (SIS)", "expo": "4TH INTERNATIONAL CREATIVE AND INNOVATIVE PRODUCT EXHIBITION (ICRIPE) 2024", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "24/01/2024", "year": 2024}, {"bil": 58, "name": "WAN NOR SHELA EZWANE BINTI WAN JUSOH", "title": "DEVELOPMENT OF SUSTAINABLE WATER CONTROL FOR SMART INCUBATOR PLEUROTUS OSTRETUS", "expo": "4TH INTERNATIONAL CREATIVE AND INNOVATIVE PRODUCT EXHIBITION 2024 (ICRIPE)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "24/01/2024", "year": 2024}, {"bil": 59, "name": "NOR AIZAM BT. MUHAMED YUSOF", "title": "ALPHABET RECOGNITION USING DEEP LEARNING", "expo": "INVENTION COMPETITION, CONFERENCE & EXHIBITION (ICCE 2023)", "level": "POLITEKNIK", "recognition": "EMAS DAN SETARA", "date": "11/12/2023", "year": 2023}, {"bil": 60, "name": "NOR AIZAM BT. MUHAMED YUSOF", "title": "DIGITAL POWER SUPPLY", "expo": "INVENTION COMPETITION, CONFERENCE & EXHIBITION (ICCE 2023)", "level": "POLITEKNIK", "recognition": "EMAS DAN SETARA", "date": "11/12/2023", "year": 2023}, {"bil": 61, "name": "TS. NORSYIRA ZURAIZA BINTI OMAR", "title": "GREEN-LAWN: SOLAR POWEREED SMART CUTTER", "expo": "ICCE V14", "level": "POLITEKNIK", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "11/12/2023", "year": 2023}, {"bil": 62, "name": "NUR SYUHAILA BINTI AHMAD", "title": "INOVASI SEGI TIGA KECEMASAN SENSOR DETECTOR MOTION", "expo": "FKAAB INNOVATION WEEK 2023 (INNOW 2023)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "19/11/2023", "year": 2023}, {"bil": 63, "name": "FAIZAN MAISARAH BINTI ABU BAKAR", "title": "FINQUIRKS", "expo": "VIRTUAL INTERNATIONAL INNOVATION CONFERENCE 2023", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "18/11/2023", "year": 2023}, {"bil": 64, "name": "MAHDZIR BIN JAMIA`AN", "title": "AUTONOMOUS CAR RACING", "expo": "PERTANDINGAN INOVASI DAN ROBOTIK (INORO TVET 23)", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "07/11/2023", "year": 2023}, {"bil": 65, "name": "NUR SYUHAILA BINTI AHMAD", "title": "KAJIAN PENGHASILAN SINKI SEDIMEN MUDAH ALIH (SISMA) UNTUK RAWATAN AIR SISA BENGKEL BATA", "expo": "BORNEO INNOVATION FESTIVAL 2023 (BIF'23)", "level": "KEBANGSAAN", "recognition": "GANGSA DAN SETARA", "date": "17/10/2023", "year": 2023}, {"bil": 66, "name": "MAHDZIR BIN JAMIA`AN", "title": "AUTONOMOUS RACING CAR APPLICATION USING TENSORFLOW", "expo": "INTERNATIONAL EUREKA INNOVATION EXHIBITION I-EIE 2023", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "11/10/2023", "year": 2023}, {"bil": 67, "name": "NORIZAH BINTI MD ISHAK", "title": "DEVELOPMENT OF PORTABLE DC POWER SUPPLY FOR ELECTRONIC LABORATORY PURPOSES", "expo": "INTERNATIONAL EUREKA INNOVATION EXHIBITION", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "11/10/2023", "year": 2023}, {"bil": 68, "name": "IDA SAFINAR BT AZIZ", "title": "PORTABLE DC POWER SUPPLY FOR ELECTRONIC LABORATORY PURPOSES", "expo": "UEREKA INNOVATION EXHIBITION", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "11/10/2023", "year": 2023}, {"bil": 69, "name": "ABDUL LATIB BIN AHMAD", "title": "PLC MODBUS INTEGRATED WITH AN IOT BASED AUTOMATED MATERIAL TRAINING KIT SYSTEM", "expo": "EUREKA 2023", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "10/10/2023", "year": 2023}, {"bil": 70, "name": "MUHAMAD AIZAT BIN ZOLKOFLE", "title": "ARTIFICIAL REEF CED", "expo": "INTERNATIONAL EUREKA INNOVATION EXHIBITION (I-EIE 2023)", "level": "ANTARABANGSA", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "10/10/2023", "year": 2023}, {"bil": 71, "name": "SYAJARATUL DUR BINTI RAMLI", "title": "X6 MOBILE", "expo": "PERISA 2023", "level": "KEBANGSAAN", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "04/10/2023", "year": 2023}, {"bil": 72, "name": "NORIZAN BT MD ISA", "title": "X6 MOBILE", "expo": "PERISA 2023", "level": "KEBANGSAAN", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "04/10/2023", "year": 2023}, {"bil": 73, "name": "WAN NOR HASNAH BINTI WAN YUNUS", "title": "MAI-SOLAT", "expo": "PERTANDINGAN KUMPULAN INOVASI DAN KREATIF HORIZON BAHARU (KIKHB)", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "25/09/2023", "year": 2023}, {"bil": 74, "name": "MAHDZIR BIN JAMIA`AN", "title": "PENAMBAHBAIKAN REKABENTUK KIT POLYDUINO POLYSUMO V2 BAGI PENGAJARAN DAN PEMBELAJARAN SISTEM TERBENAM", "expo": "CONFERENCE IN EDUCATION TECHNICAL AND VACATIONAL EDUCATION AND TRAINING (CIETVET 2023)", "level": "KEBANGSAAN", "recognition": "SIJIL PENGHARGAAN", "date": "11/09/2023", "year": 2023}, {"bil": 75, "name": "TS. NORSYIRA ZURAIZA BINTI OMAR", "title": "SMART IRRIGITAION AND FERTILIZER SYSTEM USING IOT FOR CROP GROWTH", "expo": "VIRTUAL ASIA INNOVATION SHOW 2023", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "14/08/2023", "year": 2023}, {"bil": 76, "name": "MD RAZAK BIN DAUD", "title": "PEMBANGUNAN SISTEM TERMAJU DENGAN KAWALAN IOT : SISTEM PERTANIAN JIMAT TENAGA (SPJT)", "expo": "INOVASI POLYCCOM23", "level": "KEBANGSAAN", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "27/07/2023", "year": 2023}, {"bil": 77, "name": "ANUAR BIN JUSOH", "title": "INKUBATOR UNGGAS IKS", "expo": "POLYCCOM 23", "level": "KEBANGSAAN", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "26/07/2023", "year": 2023}, {"bil": 78, "name": "ROSZAINI BINTI YAHAYA", "title": "IOT SOLAR TRAINING KIT", "expo": "PERTANDINGAN INOVASI SEMPENA INORO TVET 2023", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "07/07/2023", "year": 2023}, {"bil": 79, "name": "ZARINA BINTI ISMAIL", "title": "BASIC CIRCUIT TRAINER", "expo": "PERTANDINGAN INOVASI DAN ROBOTIK PERINGKAT KEBANGSAAN 2023 (INORO â€™23)", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "07/07/2023", "year": 2023}, {"bil": 80, "name": "NORIZAH BINTI MD ISHAK", "title": "AD-DA TRAINER", "expo": "PERTANDINGAN INOVASI DAN ROBOTIK PERINGKAT KEBANGSAAN (INORO TVET) 2023", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "07/07/2023", "year": 2023}, {"bil": 81, "name": "SHARIPAH KHADIJAH BINTI S.HASHIM", "title": "TIKTOK IN EDUCATION: ENGAGING STUDENTS AND ENHANCING LEARNING OUTCOMES", "expo": "INTERNATIONAL TEACHING ENHANCEMENT AND LEARNING INNOVATION CARNIVAL 2023", "level": "ANTARABANGSA", "recognition": "GANGSA DAN SETARA", "date": "05/07/2023", "year": 2023}, {"bil": 82, "name": "SHARIPAH KHADIJAH BINTI S.HASHIM", "title": "H2OASIS A SUSTAINABLE WATER FILTRATION SYSTEM FOR SINK TO ADDRESS ENVIRONMENTAL CHALLENGES", "expo": "PERTANDINGAN INOVASI SEMINAR PENYELIDIKAN KEBANGSAAN 2023", "level": "KEBANGSAAN", "recognition": "EMAS DAN SETARA", "date": "05/07/2023", "year": 2023}, {"bil": 83, "name": "NOOR AZMA BT ABU BAKAR", "title": "SMART FILTRO AGUA", "expo": "BANGKOK'S INTERNATIONAL INTELLECTUAL PROPERTY, INVENTION, INNOVATION AND TECHNOLOGY EXPOSITION (IPITEX 2024)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "01/07/2023", "year": 2023}, {"bil": 84, "name": "WAN NOR SHELA EZWANE BINTI WAN JUSOH", "title": "SENSOR LEARNING APPLICATION FOR PRECISION AGRICULTURE", "expo": "INTERNATIONAL INNOVATION ARSVOT MALAYSIA (IAM)", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "24/06/2023", "year": 2023}, {"bil": 85, "name": "JAMIL BIN SHAARI", "title": "MINI VERTICAL AXIS WIND TURBINE TRAINER", "expo": "INTERNATIONAL EUREKA INNOVATION EXHIBITION 2022", "level": "ANTARABANGSA", "recognition": "EMAS DAN ANUGERAH TAMBAHAN", "date": "23/06/2023", "year": 2023}, {"bil": 86, "name": "SHARIPAH KHADIJAH BINTI S.HASHIM", "title": "BSCAPPS (BRIGHT SUPPLIER COMMUNICATION)", "expo": "INTERNATIONAL BORNEO INNOVATION EXHIBITION AND COMPETITION (IBIEC) 2022", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "21/06/2023", "year": 2023}, {"bil": 87, "name": "SYAMSIAH BINTI HUSSIN", "title": "MATH360: LEARN MATHEMATICAL COMPUTING IN VIRTUAL REALITY", "expo": "MALAYSIA INTERNATIONAL CONVENTION ON EDUCATION RESEARCH AND MANAGEMENT (MICER2.0)", "level": "ANTARABANGSA", "recognition": "LAIN-LAIN", "date": "13/06/2023", "year": 2023}, {"bil": 88, "name": "MOHD YUAIZUDDIN BIN MOHD YUNUS", "title": "SMART FISH FEEDER BY IOT", "expo": "KARNIVAL TVET@POLYCC2023 ZON KELANTAN & TERENGGANU", "level": "POLITEKNIK", "recognition": "PERAK DAN SETARA", "date": "15/05/2023", "year": 2023}, {"bil": 89, "name": "WAN NOR SHELA EZWANE BINTI WAN JUSOH", "title": "INTERNET OF THINGS (IOT) IN FERTIGATION FOR SUSTAINABLE NATURAL INSECT CONTROL", "expo": "3RD INTERNATIONAL CREATIVE AND INNOVATIVE PRODUCT  EXHIBITION 2023 (ICRIPE)", "level": "ANTARABANGSA", "recognition": "EMAS DAN SETARA", "date": "22/03/2023", "year": 2023}, {"bil": 90, "name": "MD RAZAK BIN DAUD", "title": "PLANT HEALTH SCREENING MECHANISM FOR ZEA MAYS FERTIGATION SYSTEM", "expo": "ICRIPE 2023 : INTERNATIONAL CREATIVE AND INNOVATIVE PRODUCT EXHIBITION 2023", "level": "ANTARABANGSA", "recognition": "PERAK DAN SETARA", "date": "21/02/2023", "year": 2023}, {"bil": 91, "name": "MOHAMAD PAUZI BIN MAT ZAM", "title": "GEOMATIC LAB EQUIPMENT BORROWING SYSTEM (GEOLEBS) / SISTEM PINJAMAN ALAT MAKMAL GEOMATIK", "expo": "PERTANDINGAN REKACIPTA & INOVASI NASIONAL (PRIN 2021)", "level": "KEBANGSAAN", "recognition": "PERAK DAN SETARA", "date": "15/02/2023", "year": 2023}];

    const tableBody = document.getElementById("innovationTable");
    const searchInput = document.getElementById("searchInput");
    const yearFilter = document.getElementById("yearFilter");
    const resultCount = document.getElementById("resultCount");


    function escapeHTML(value) {
        return String(value)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }


    function displayData() {

        const searchText = searchInput.value
            .toLowerCase()
            .trim();

        const selectedYear = yearFilter.value;


        const filteredData = innovationData.filter(function(item) {

            const name = item.name.toLowerCase();
            const title = item.title.toLowerCase();

            const matchesSearch =
                name.includes(searchText) ||
                title.includes(searchText);

            const matchesYear =
                selectedYear === "all" ||
                String(item.year) === selectedYear;

            return matchesSearch && matchesYear;

        });


        tableBody.innerHTML = "";


        if (filteredData.length === 0) {

            tableBody.innerHTML = `
                <tr>
                    <td colspan="7" class="empty">
                        Tiada rekod dijumpai.
                    </td>
                </tr>
            `;

        } else {

            filteredData.forEach(function(item) {

                const row = document.createElement("tr");

                row.innerHTML = `
                    <td class="bil">
                        ${escapeHTML(item.bil)}
                    </td>

                    <td class="name">
                        ${escapeHTML(item.name)}
                    </td>

                    <td class="product">
                        ${escapeHTML(item.title)}
                    </td>

                    <td class="expo">
                        ${escapeHTML(item.expo)}
                    </td>

                    <td class="level">
                        <span class="badge">
                            ${escapeHTML(item.level)}
                        </span>
                    </td>

                    <td class="recognition">
                        ${escapeHTML(item.recognition)}
                    </td>

                    <td class="date">
                        ${escapeHTML(item.date)}
                    </td>
                `;

                tableBody.appendChild(row);

            });
        }


        resultCount.textContent =
            filteredData.length + " rekod";

    }


    searchInput.addEventListener("input", displayData);
    yearFilter.addEventListener("change", displayData);


    displayData();
</script>


<?php include 'footer.php'; ?>

</body>
</html>
