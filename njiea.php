
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NJIEA | UPIK PTSB</title>

    <link
        rel="icon"
        type="image/jpeg"
        href="img/logoupik.jpg"
    >

    <link rel="stylesheet" href="header.css">

    <link rel="stylesheet" href="footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

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

            background:
                linear-gradient(
                    135deg,
                    #f7fafc,
                    #eaf3fb
                );

            color: #11233e;

            min-height: 100vh;
        }


        /* =========================
           MAIN
        ========================= */

        main {
            width: min(1150px, 90%);

            margin: auto;

            padding: 70px 0;
        }


        /* =========================
           PAGE HEADING
        ========================= */

        .page-heading {
            text-align: center;

            margin-bottom: 40px;
        }


        .small-title {
            color: #3d4a86;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 12px;
        }


        .page-heading h1 {
            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(40px, 6vw, 65px);

            color: #11233e;

            margin-bottom: 12px;
        }


        .page-heading p {
            color: #667085;

            font-size: 15px;

            max-width: 600px;

            margin: auto;

            line-height: 1.7;
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

            border:
                1px solid
                #dce4eb;

            border-radius: 14px;

            background: white;

            outline: none;

            font-family:
                "DM Sans",
                sans-serif;

            font-size: 14px;

            color: #11233e;

            box-shadow:
                0 5px 20px
                rgba(17,35,62,0.05);
        }


        .search-box:focus {
            border-color: #3d4a86;

            box-shadow:
                0 0 0 3px
                rgba(61,74,134,0.08);
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
           DOCUMENT LIST
        ========================= */

        .document-list {
            display: flex;

            flex-direction: column;

            gap: 30px;
        }


        /* =========================
           DOCUMENT CARD
        ========================= */

        .document-card {
            background: white;

            border:
                1px solid
                #e1e8ef;

            border-radius: 20px;

            padding: 30px;

            box-shadow:
                0 10px 30px
                rgba(17,35,62,0.08);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }


        .document-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 15px 35px
                rgba(17,35,62,0.12);
        }


        /* =========================
           DOCUMENT TITLE
        ========================= */

        .document-title {
            display: flex;

            align-items: center;

            gap: 15px;

            margin-bottom: 20px;
        }


        .pdf-icon {
            width: 55px;

            height: 55px;

            background: #fcebea;

            border-radius: 13px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 27px;

            flex-shrink: 0;
        }


        .document-year {
            color: #3d4a86;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 1px;

            margin-bottom: 5px;
        }


        .document-title h2 {
            font-family:
                "Playfair Display",
                serif;

            font-size: 23px;

            color: #11233e;
        }


        .document-description {
            color: #687386;

            font-size: 14px;

            line-height: 1.6;

            margin-bottom: 20px;
        }


        /* =========================
           PDF PREVIEW
        ========================= */

        .pdf-preview {
            width: 100%;

            height: 650px;

            border:
                1px solid
                #dce4eb;

            border-radius: 12px;

            display: block;

            background: #f8fafc;
        }


        /* =========================
           DOCUMENT ACTIONS
        ========================= */

        .document-actions {
            display: flex;

            justify-content: flex-end;

            gap: 10px;

            margin-top: 15px;

            flex-wrap: wrap;
        }


        .document-actions a {
            text-decoration: none;

            padding: 11px 18px;

            border-radius: 9px;

            font-size: 13px;

            font-weight: 700;

            transition: 0.2s;
        }


        /* =========================
           VIEW BUTTON
        ========================= */

        .view-btn {
            background: #11233e;

            color: white;
        }


        .view-btn:hover {
            background: #3d4a86;
        }


        /* =========================
           DOWNLOAD BUTTON
        ========================= */

        .download-btn {
            background: #eaf3fb;

            color: #11233e;

            border:
                1px solid
                #d7e0ea;
        }


        .download-btn:hover {
            background: #d7e8f7;
        }


        /* =========================
           NO RESULT
        ========================= */

        .no-result {
            display: none;

            text-align: center;

            background: white;

            border:
                1px solid
                #e1e8ef;

            border-radius: 18px;

            padding: 40px;

            color: #687386;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 600px) {

            main {
                width: 92%;

                padding: 45px 0;
            }


            .page-heading {
                margin-bottom: 35px;
            }


            .page-heading h1 {
                font-size: 42px;
            }


            .page-heading p {
                font-size: 13px;
            }


            .document-card {
                padding: 20px;
            }


            .document-title h2 {
                font-size: 20px;
            }


            .pdf-preview {
                height: 500px;
            }


            .document-actions {
                flex-direction: column;

                justify-content: stretch;
            }


            .document-actions a {
                width: 100%;

                text-align: center;
            }

        }

    </style>

</head>


<body>


    <?php include 'header.php'; ?>


    <main>


        <!-- =========================
             PAGE HEADING
        ========================= -->

        <div class="page-heading">

            <div class="small-title">
                UPIK PTSB<br>
                NJIEA DOCUMENTS
            </div>


            <h1>
                NJIEA
            </h1>


            <p>
                Browse and access NJIEA documents
                by publication year.
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
                placeholder="Search by year or document title..."
                onkeyup="searchDocuments()"
            >

        </div>


        <!-- =========================
             RESULT INFO
        ========================= -->

        <div
            class="result-info"
            id="resultInfo"
        >
            4 documents
        </div>


        <!-- =========================
             DOCUMENT LIST
        ========================= -->

        <div
            class="document-list"
            id="documentList"
        >


            <!-- =========================
                 NJIEA 2022
            ========================= -->

            <div
                class="document-card"
                data-search="2022 njiea documents njiea 2022"
            >

                <div class="document-title">

                    <div class="pdf-icon">
                        📄
                    </div>


                    <div>

                        <div class="document-year">
                            NJIEA 2022
                        </div>


                        <h2>
                            NJIEA 2022
                        </h2>

                    </div>

                </div>


                <p class="document-description">
                    NJIEA document for publication year 2022.
                    PDF file size: 6.92 MB.
                </p>


                <!-- PDF PREVIEW -->

                <iframe
                    src="njiea/2022_NJIEA.pdf"
                    class="pdf-preview"
                    title="NJIEA 2022"
                >
                </iframe>


                <!-- BUTTONS -->

                <div class="document-actions">

                    <a
                        href="njiea/2022_NJIEA.pdf"
                        target="_blank"
                        class="view-btn"
                    >
                        👁 View
                    </a>


                    <a
                        href="njiea/2022_NJIEA.pdf"
                        download
                        class="download-btn"
                    >
                        ↓ Download
                    </a>

                </div>

            </div>


            <!-- =========================
                 NJIEA 2023
            ========================= -->

            <div
                class="document-card"
                data-search="2023 njiea documents njiea 2023"
            >

                <div class="document-title">

                    <div class="pdf-icon">
                        📄
                    </div>


                    <div>

                        <div class="document-year">
                            NJIEA 2023
                        </div>


                        <h2>
                            NJIEA 2023
                        </h2>

                    </div>

                </div>


                <p class="document-description">
                    NJIEA document for publication year 2023.
                    PDF file size: 7.60 MB.
                </p>


                <!-- PDF PREVIEW -->

                <iframe
                    src="njiea/2023_NJIEA.pdf"
                    class="pdf-preview"
                    title="NJIEA 2023"
                >
                </iframe>


                <!-- BUTTONS -->

                <div class="document-actions">

                    <a
                        href="njiea/2023_NJIEA.pdf"
                        target="_blank"
                        class="view-btn"
                    >
                        👁 View
                    </a>


                    <a
                        href="njiea/2023_NJIEA.pdf"
                        download
                        class="download-btn"
                    >
                        ↓ Download
                    </a>

                </div>

            </div>


            <!-- =========================
                 NJIEA 2024
            ========================= -->

            <div
                class="document-card"
                data-search="2024 njiea documents njiea 2024"
            >

                <div class="document-title">

                    <div class="pdf-icon">
                        📄
                    </div>


                    <div>

                        <div class="document-year">
                            NJIEA 2024
                        </div>


                        <h2>
                            NJIEA 2024
                        </h2>

                    </div>

                </div>


                <p class="document-description">
                    NJIEA document for publication year 2024.
                    PDF file size: 6.15 MB.
                </p>


                <!-- PDF PREVIEW -->

                <iframe
                    src="njiea/2024_NJIEA.pdf"
                    class="pdf-preview"
                    title="NJIEA 2024"
                >
                </iframe>


                <!-- BUTTONS -->

                <div class="document-actions">

                    <a
                        href="njiea/2024_NJIEA.pdf"
                        target="_blank"
                        class="view-btn"
                    >
                        👁 View
                    </a>


                    <a
                        href="njiea/2024_NJIEA.pdf"
                        download
                        class="download-btn"
                    >
                        ↓ Download
                    </a>

                </div>

            </div>


            <!-- =========================
                 NJIEA 2025
            ========================= -->

            <div
                class="document-card"
                data-search="2025 njiea documents njiea 2025"
            >

                <div class="document-title">

                    <div class="pdf-icon">
                        📄
                    </div>


                    <div>

                        <div class="document-year">
                            NJIEA 2025
                        </div>


                        <h2>
                            NJIEA 2025
                        </h2>

                    </div>

                </div>


                <p class="document-description">
                    NJIEA document for publication year 2025.
                    PDF file size: 17.4 MB.
                </p>


                <!-- PDF PREVIEW -->

                <iframe
                    src="njiea/2025_NJIEA.pdf"
                    class="pdf-preview"
                    title="NJIEA 2025"
                >
                </iframe>


                <!-- BUTTONS -->

                <div class="document-actions">

                    <a
                        href="njiea/2025_NJIEA.pdf"
                        target="_blank"
                        class="view-btn"
                    >
                        👁 View
                    </a>


                    <a
                        href="njiea/2025_NJIEA.pdf"
                        download
                        class="download-btn"
                    >
                        ↓ Download
                    </a>

                </div>

            </div>


        </div>


        <!-- =========================
             NO RESULT
        ========================= -->

        <div
            class="no-result"
            id="noResult"
        >
            No document found.
        </div>


    </main>


    <?php include 'footer.php'; ?>
    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script>

        function serchDocuments() {

            const input =
                document
                    .getElementById("searchInput")
                    .value
                    .toLowerCase()
                    .trim();


            const cards =
                document.querySelectorAll(
                    ".document-card"
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
                        ? " document"
                        : " documents"
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

    </script>


</body>

</html>