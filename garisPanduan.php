<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Garis Panduan | UPIK PTSB</title>

    <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f8fc;
            color: #11233e;
        }


        /* =========================
           MAIN CONTAINER
        ========================= */

        .container {
            width: 86%;
            max-width: 1000px;
            margin: auto;
            padding: 65px 0;
        }


        /* =========================
           PAGE TITLE
        ========================= */

        .page-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .page-title span {
            display: inline-block;
            color: #3d4a86;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .page-title h1 {
            font-size: 42px;
            margin-bottom: 12px;
        }

        .page-title p {
            color: #687386;
            font-size: 16px;
        }


        /* =========================
           DOCUMENT CARD
        ========================= */

        .document-card {
            background: white;

            border-radius: 20px;

            padding: 35px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 30px;

            border: 1px solid #e1e8f0;

            box-shadow: 0 10px 30px rgba(17,35,62,0.08);

            transition: 0.3s;
        }

        .document-card:hover {
            transform: translateY(-5px);

            box-shadow: 0 15px 35px rgba(17,35,62,0.13);
        }


        /* =========================
           DOCUMENT INFO
        ========================= */

        .document-info {
            display: flex;

            align-items: center;

            gap: 20px;
        }

        .pdf-icon {
            width: 65px;

            height: 65px;

            background: #eaf3fb;

            border-radius: 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;
        }

        .document-info h2 {
            font-size: 20px;

            margin-bottom: 8px;
        }

        .document-info p {
            font-size: 13px;

            color: #7b8797;
        }


        /* =========================
           BUTTONS
        ========================= */

        .document-actions {
            display: flex;

            gap: 10px;

            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;

            padding: 12px 20px;

            border-radius: 9px;

            font-size: 13px;

            font-weight: bold;

            transition: 0.3s;

            display: inline-block;
        }

        .view-btn {
            background: #11233e;

            color: white;
        }

        .view-btn:hover {
            background: #3d4a86;
        }

        .download-btn {
            background: #eaf3fb;

            color: #11233e;
        }

        .download-btn:hover {
            background: #d7e8f7;
        }


        /* =========================
           PDF PREVIEW
        ========================= */

        .preview-section {
            margin-top: 35px;

            background: white;

            border-radius: 20px;

            padding: 25px;

            box-shadow: 0 10px 30px rgba(17,35,62,0.08);
        }

        .preview-section h2 {
            margin-bottom: 20px;

            font-size: 20px;
        }

        .pdf-preview {
            width: 100%;

            height: 700px;

            border: 1px solid #dce4ed;

            border-radius: 12px;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            .container {
                width: 90%;

                padding: 45px 0;
            }

            .page-title h1 {
                font-size: 32px;
            }

            .document-card {
                flex-direction: column;

                align-items: flex-start;

                padding: 25px;
            }

            .document-actions {
                width: 100%;
            }

            .btn {
                flex: 1;

                text-align: center;
            }

            .pdf-preview {
                height: 500px;
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

    <main class="container">


        <!-- PAGE TITLE -->

        <div class="page-title">

            <span>UPIK PTSB</span>

            <h1>GARIS PANDUAN</h1>

            <p>
                Dokumen dan garis panduan UPIK PTSB
            </p>

        </div>


        <!-- =========================
             DOCUMENT CARD
        ========================= -->

        <div class="document-card">


            <div class="document-info">


                <div class="pdf-icon">
                    📄
                </div>


                <div>

                    <h2>
                        Garis Panduan UPIK
                    </h2>

                    <p>
                        PDF Document
                    </p>

                </div>


            </div>


            <!-- DOCUMENT BUTTONS -->

            <div class="document-actions">


                <!-- VIEW BUTTON -->

                <a
                    href="img/Garis_Panduan_Umum_KIKHB_JPPKK_Terbitan_2023 .pdf"
                    target="_blank"
                    class="btn view-btn">

                    👁 View

                </a>


                <!-- DOWNLOAD BUTTON -->

                <a
                    href="img/Garis_Panduan_Umum_KIKHB_JPPKK_Terbitan_2023 .pdf"
                    download
                    class="btn download-btn">

                    ↓ Download

                </a>


            </div>


        </div>


        <!-- =========================
             PDF PREVIEW
        ========================= -->

        <div class="preview-section">


            <h2>
                Document Preview
            </h2>


            <iframe
                src="img/Garis_Panduan_Umum_KIKHB_JPPKK_Terbitan_2023 .pdf"
                class="pdf-preview"
                title="Garis Panduan Preview">
            </iframe>


        </div>


    </main>


    <!-- =========================
         SHARED FOOTER
    ========================= -->

    <?php include 'footer.php'; ?>


</body>

</html>