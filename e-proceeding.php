<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Proceeding CiETVET | UPIK PTSB</title>

    <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">

    <!-- SHARED HEADER -->
    <link rel="stylesheet" href="header.css">

    <!-- SHARED FOOTER -->
    <link rel="stylesheet" href="footer.css">

    <!-- GOOGLE FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: "DM Sans", sans-serif;

            background: linear-gradient(
                135deg,
                #f7fafc,
                #eaf3fb
            );

            min-height: 100vh;

            color: #11233e;
        }


        /* =========================
           MAIN
        ========================= */

        main {
            max-width: 1200px;

            margin: auto;

            padding: 60px 25px 80px;
        }


        /* =========================
           PAGE TITLE
        ========================= */

        .page-title {
            text-align: center;

            margin-bottom: 40px;
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


        /* =========================
           SEARCH
        ========================= */

        .search-container {
            display: flex;

            justify-content: center;

            margin-bottom: 35px;
        }


        .search-box {
            width: 100%;

            max-width: 600px;

            padding: 15px 20px;

            border: 1px solid #d7e0ea;

            border-radius: 12px;

            background: white;

            font-family: "DM Sans", sans-serif;

            font-size: 14px;

            outline: none;

            box-shadow: 0 5px 20px rgba(17,35,62,0.05);
        }


        .search-box:focus {
            border-color: #5b9ecb;

            box-shadow:
                0 0 0 3px
                rgba(91,158,203,0.12);
        }


        /* =========================
           RESULT INFO
        ========================= */

        .result-info {
            text-align: center;

            color: #687386;

            font-size: 13px;

            margin-bottom: 25px;
        }


        /* =========================
           PROCEEDING LIST
        ========================= */

        .proceeding-list {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }


        /* =========================
           PROCEEDING CARD
        ========================= */

        .proceeding-card {
            background: white;

            border: 1px solid #e1e7ee;

            border-radius: 18px;

            padding: 28px;

            box-shadow:
                0 10px 30px
                rgba(17,35,62,0.08);

            transition: 0.3s;
        }


        .proceeding-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 15px 35px
                rgba(17,35,62,0.12);
        }


        /* =========================
           ICON
        ========================= */

        .proceeding-icon {
            width: 60px;

            height: 60px;

            background: #11233e;

            color: white;

            border-radius: 14px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 28px;

            margin-bottom: 20px;
        }


        /* =========================
           YEAR
        ========================= */

        .proceeding-year {
            color: #3d4a86;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 1px;

            margin-bottom: 8px;
        }


        /* =========================
           TITLE
        ========================= */

        .proceeding-card h2 {
            font-family: "Playfair Display", serif;

            font-size: 23px;

            line-height: 1.3;

            color: #11233e;

            margin-bottom: 12px;
        }


        .proceeding-card p {
            color: #687386;

            font-size: 14px;

            line-height: 1.6;

            margin-bottom: 22px;
        }


        /* =========================
           BUTTON GROUP
        ========================= */

        .button-group {
            display: flex;

            gap: 10px;

            flex-wrap: wrap;
        }


        .btn {
            text-decoration: none;

            border: none;

            padding: 11px 15px;

            border-radius: 9px;

            font-family: "DM Sans", sans-serif;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;
        }


        /* VIEW BUTTON */

        .view-btn {
            background: #11233e;

            color: white;
        }


        .view-btn:hover {
            background: #263b5b;
        }


        /* DOWNLOAD BUTTON */

        .download-btn {
            background: #eef3f8;

            color: #11233e;

            border: 1px solid #d7e0ea;
        }


        .download-btn:hover {
            background: #dfe8f1;
        }


        /* =========================
           NO RESULT
        ========================= */

        .no-result {
            display: none;

            text-align: center;

            background: white;

            border: 1px solid #e1e7ee;

            border-radius: 18px;

            padding: 40px;

            color: #687386;
        }


        /* =========================
           PDF MODAL
        ========================= */

        .modal {
            display: none;

            position: fixed;

            z-index: 9999;

            left: 0;

            top: 0;

            width: 100%;

            height: 100%;

            background: rgba(0,0,0,0.75);

            padding: 30px;
        }


        .modal-content {
            width: 100%;

            height: 100%;

            max-width: 1200px;

            margin: auto;

            background: white;

            border-radius: 15px;

            overflow: hidden;

            position: relative;
        }


        /* =========================
           MODAL HEADER
        ========================= */

        .modal-header {
            height: 60px;

            background: #11233e;

            color: white;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 20px;
        }


        .modal-header h3 {
            font-size: 16px;
        }


        .close-btn {
            background: none;

            border: none;

            color: white;

            font-size: 28px;

            cursor: pointer;

            line-height: 1;
        }


        /* =========================
           PDF VIEWER
        ========================= */

        .pdf-viewer {
            width: 100%;

            height: calc(100% - 60px);

            border: none;
        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 900px) {

            .proceeding-list {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 600px) {

            main {
                padding: 45px 15px 60px;
            }


            .page-title h1 {
                font-size: 31px;
            }


            .page-title p {
                font-size: 13px;
            }


            .proceeding-list {
                grid-template-columns: 1fr;
            }


            .proceeding-card {
                padding: 23px;
            }


            .button-group {
                flex-direction: column;
            }


            .btn {
                width: 100%;

                text-align: center;
            }


            .modal {
                padding: 10px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         SHARED HEADER
    ========================= -->

    <?php include 'header.php'; ?>


    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main>


        <!-- PAGE TITLE -->

        <div class="page-title">

            <span>
                UPIK PTSB
            </span>


            <h1>
                E-Proceeding CiETVET
            </h1>


            <p>
                Koleksi e-Proceeding Conference in Education -
                Technical & Vocational Education and Training
            </p>

        </div>


        <!-- =========================
             SEARCH
        ========================= -->

        <div class="search-container">

            <input
                type="text"
                id="searchInput"
                class="search-box"
                placeholder="Search by year or proceeding title..."
                onkeyup="searchProceeding()"
            >

        </div>


        <!-- RESULT INFO -->

        <div
            class="result-info"
            id="resultInfo"
        >
            3 proceedings
        </div>


        <!-- =========================
             PROCEEDING LIST
        ========================= -->

        <div
            class="proceeding-list"
            id="proceedingList"
        >


            <!-- =========================
                 CIETVET 2023
            ========================= -->

            <div
                class="proceeding-card"
                data-search="2023 cietvet e-proceeding conference education technical vocational education training"
            >

                <div class="proceeding-icon">
                    📄
                </div>


                <div class="proceeding-year">
                    CIETVET 2023
                </div>


                <h2>
                    E-Proceeding CiETVET 2023
                </h2>


                <p>
                    Conference in Education -
                    Technical & Vocational Education
                    and Training 2023.
                </p>


                <div class="button-group">


                    <!-- VIEW -->

                    <button
                        class="btn view-btn"
                        onclick="viewPDF(
                            'e-proceeding/E_PROCEEDING_CIETVET_2023.pdf',
                            'E-Proceeding CiETVET 2023'
                        )"
                    >

                        👁 View

                    </button>


                    <!-- DOWNLOAD -->

                    <a
                        href="e-proceeding/E_PROCEEDING_CIETVET_2023.pdf"
                        download
                        class="btn download-btn"
                    >

                        ↓ Download

                    </a>


                </div>

            </div>


            <!-- =========================
                 CIETVET 2024
            ========================= -->

            <div
                class="proceeding-card"
                data-search="2024 cietvet e-proceeding international conference education technical vocational education training"
            >

                <div class="proceeding-icon">
                    📄
                </div>


                <div class="proceeding-year">
                    CIETVET 2024
                </div>


                <h2>
                    E-Proceeding CiETVET 2024
                </h2>


                <p>
                    International Conference in Education -
                    Technical and Vocational Education
                    and Training 2024.
                </p>


                <div class="button-group">


                    <!-- VIEW -->

                    <button
                        class="btn view-btn"
                        onclick="viewPDF(
                            'e-proceeding/E_PROCEEDING_CIETVET_2024.pdf',
                            'E-Proceeding CiETVET 2024'
                        )"
                    >

                        👁 View

                    </button>


                    <!-- DOWNLOAD -->

                    <a
                        href="e-proceeding/E_PROCEEDING_CIETVET_2024.pdf"
                        download
                        class="btn download-btn"
                    >

                        ↓ Download

                    </a>


                </div>

            </div>


            <!-- =========================
                 CIETVET 2025
            ========================= -->

            <div
                class="proceeding-card"
                data-search="2025 cietvet e-proceeding international conference education technical vocational education training"
            >

                <div class="proceeding-icon">
                    📄
                </div>


                <div class="proceeding-year">
                    CIETVET 2025
                </div>


                <h2>
                    E-Proceeding CiETVET 2025
                </h2>


                <p>
                    International Conference in Education -
                    Technical and Vocational Education
                    and Training.
                </p>


                <div class="button-group">


                    <!-- VIEW -->

                    <button
                        class="btn view-btn"
                        onclick="viewPDF(
                            'e-proceeding/E_PROCEEDING_ICIETVET_2025.pdf',
                            'E-Proceeding CiETVET 2025'
                        )"
                    >

                        👁 View

                    </button>


                    <!-- DOWNLOAD -->

                    <a
                        href="e-proceeding/E_PROCEEDING_ICIETVET_2025.pdf"
                        download
                        class="btn download-btn"
                    >

                        ↓ Download

                    </a>


                </div>

            </div>


        </div>


        <!-- NO RESULT -->

        <div
            class="no-result"
            id="noResult"
        >

            No proceeding found.

        </div>


    </main>


    <!-- =========================
         PDF MODAL
    ========================= -->

    <div
        class="modal"
        id="pdfModal"
    >


        <div class="modal-content">


            <div class="modal-header">


                <h3 id="pdfTitle">
                    E-Proceeding
                </h3>


                <button
                    class="close-btn"
                    onclick="closePDF()"
                >

                    ×

                </button>


            </div>


            <iframe
                id="pdfViewer"
                class="pdf-viewer"
                src=""
            >

            </iframe>


        </div>

    </div>


    <!-- =========================
         SHARED FOOTER
    ========================= -->

    <?php include 'footer.php'; ?>


    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script>

        /* =========================
           SEARCH PROCEEDING
        ========================= */

        function searchProceeding() {

            const input =
                document
                    .getElementById("searchInput")
                    .value
                    .toLowerCase()
                    .trim();


            const cards =
                document.querySelectorAll(
                    ".proceeding-card"
                );


            let visible = 0;


            cards.forEach(function(card) {

                const text =
                    card
                        .getAttribute("data-search")
                        .toLowerCase();


                if (text.includes(input)) {

                    card.style.display = "";

                    visible++;

                } else {

                    card.style.display = "none";

                }

            });


            document
                .getElementById("resultInfo")
                .textContent =
                visible +
                (
                    visible === 1
                        ? " proceeding"
                        : " proceedings"
                );


            if (visible === 0) {

                document
                    .getElementById("noResult")
                    .style.display = "block";

            } else {

                document
                    .getElementById("noResult")
                    .style.display = "none";

            }

        }


        /* =========================
           OPEN PDF
        ========================= */

        function viewPDF(file, title) {

            document
                .getElementById("pdfTitle")
                .textContent = title;


            document
                .getElementById("pdfViewer")
                .src = file;


            document
                .getElementById("pdfModal")
                .style.display = "block";


            document.body.style.overflow = "hidden";

        }


        /* =========================
           CLOSE PDF
        ========================= */

        function closePDF() {

            document
                .getElementById("pdfModal")
                .style.display = "none";


            document
                .getElementById("pdfViewer")
                .src = "";


            document.body.style.overflow = "auto";

        }


        /* =========================
           CLICK OUTSIDE MODAL
        ========================= */

        window.onclick = function(event) {

            const modal =
                document.getElementById("pdfModal");


            if (event.target === modal) {

                closePDF();

            }

        };


        /* =========================
           ESC KEY
        ========================= */

        document.addEventListener(
            "keydown",
            function(event) {

                if (event.key === "Escape") {

                    closePDF();

                }

            }
        );

    </script>


</body>

</html>