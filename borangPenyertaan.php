<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Penyertaan | UPIK PTSB</title>

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

        .container {
            width: 86%;
            max-width: 1000px;
            margin: auto;
            padding: 65px 0;
        }

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

        /* DOCUMENT SECTION */
        .document-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid #e1e8f0;
            box-shadow: 0 10px 30px rgba(17,35,62,0.08);
        }

        .document-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .pdf-icon {
            width: 55px;
            height: 55px;
            background: #eaf3fb;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            flex-shrink: 0;
        }

        .document-title h2 {
            font-size: 21px;
            margin-bottom: 5px;
        }

        .document-title p {
            font-size: 13px;
            color: #7b8797;
        }

        /* PDF PREVIEW */
        .pdf-preview {
            width: 100%;
            height: 650px;
            border: 1px solid #dce4ed;
            border-radius: 12px;
            display: block;
            background: #f8fafc;
        }

        /* ACTION BUTTONS */
        .document-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 15px;
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

        @media (max-width: 700px) {

            .container {
                width: 90%;
                padding: 45px 0;
            }

            .page-title h1 {
                font-size: 32px;
            }

            .document-section {
                padding: 20px;
            }

            .document-title h2 {
                font-size: 18px;
            }

            .pdf-preview {
                height: 500px;
            }

            .document-actions {
                justify-content: stretch;
            }

            .btn {
                flex: 1;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <main class="container">

        <!-- PAGE TITLE -->
        <div class="page-title">

            <span>UPIK PTSB</span>

            <h1>BORANG PENYERTAAN</h1>

            <p>
                Borang penyertaan aktiviti dan program UPIK PTSB
            </p>

        </div>


        <!-- DOCUMENT 1 -->
        <div class="document-section">

            <div class="document-title">

                <div class="pdf-icon">
                    📄
                </div>

                <div>
                    <h2>
                        Borang Maklumat Kumpulan
                    </h2>

                    <p>
                        PDF Document
                    </p>
                </div>

            </div>


            <!-- PREVIEW DOCUMENT 1 -->
            <iframe
                src="img/BORANG MAKLUMAT KUMP.docx.pdf"
                class="pdf-preview"
                title="Borang Maklumat Kumpulan">
            </iframe>


            <!-- BUTTONS DOCUMENT 1 -->
            <div class="document-actions">

                <a
                    href="img/BORANG MAKLUMAT KUMP.docx.pdf"
                    target="_blank"
                    class="btn view-btn">
                    👁 View
                </a>

                <a
                    href="img/BORANG MAKLUMAT KUMP.docx.pdf"
                    download
                    class="btn download-btn">
                    ↓ Download
                </a>

            </div>

        </div>


        <!-- DOCUMENT 2 -->
        <div class="document-section">

            <div class="document-title">

                <div class="pdf-icon">
                    📄
                </div>

                <div>
                    <h2>
                        Lampiran A : Borang Maklumat Kumpulan
                    </h2>

                    <p>
                        PDF Document
                    </p>
                </div>

            </div>


            <!-- PREVIEW DOCUMENT 2 -->
            <iframe
                src="img/LAMPIRAN A_Borang Maklumat Kumpulan (2).docx.pdf"
                class="pdf-preview"
                title="Lampiran A Borang Maklumat Kumpulan">
            </iframe>


            <!-- BUTTONS DOCUMENT 2 -->
            <div class="document-actions">

                <a
                    href="img/LAMPIRAN A_Borang Maklumat Kumpulan (2).docx.pdf"
                    target="_blank"
                    class="btn view-btn">
                    👁 View
                </a>

                <a
                    href="img/LAMPIRAN A_Borang Maklumat Kumpulan (2).docx.pdf"
                    download
                    class="btn download-btn">
                    ↓ Download
                </a>

            </div>

        </div>


        <!-- DOCUMENT 3 -->
        <div class="document-section">

            <div class="document-title">

                <div class="pdf-icon">
                    📄
                </div>

                <div>
                    <h2>
                        Lampiran B : Ringkasan Eksekutif
                    </h2>

                    <p>
                        PDF Document
                    </p>
                </div>

            </div>


            <!-- PREVIEW DOCUMENT 3 -->
            <iframe
                src="img/LAMPIRAN B_Ringkasan Eksekutif (1).docx.pdf"
                class="pdf-preview"
                title="Lampiran B Ringkasan Eksekutif">
            </iframe>


            <!-- BUTTONS DOCUMENT 3 -->
            <div class="document-actions">

                <a
                    href="img/LAMPIRAN B_Ringkasan Eksekutif (1).docx.pdf"
                    target="_blank"
                    class="btn view-btn">
                    👁 View
                </a>
                <a
                    href="img/LAMPIRAN B_Ringkasan Eksekutif (1).docx.pdf"
                    download
                    class="btn download-btn">
                    ↓ Download
                </a>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>