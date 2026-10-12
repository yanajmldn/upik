<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buku Program NICERS | UPIK PTSB</title>

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
            padding: 60px 0;
        }

        .page-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .page-title span {
            display: inline-block;
            font-size: 13px;
            font-weight: bold;
            color: #3d4a86;
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

        .program-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .program-item {
            background: white;
            border: 1px solid #e3eaf2;
            border-radius: 14px;
            padding: 25px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            box-shadow: 0 8px 25px rgba(17, 35, 62, 0.06);
        }

        .program-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .program-number {
            min-width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #eaf3fb;
            color: #3d4a86;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
        }

        .program-info h3 {
            font-size: 18px;
            color: #11233e;
            margin-bottom: 5px;
        }

        .program-info p {
            font-size: 13px;
            color: #8792a3;
        }

        .program-buttons {
            display: flex;
            gap: 10px;
            flex-shrink: 0;
        }

        .btn {
            text-decoration: none;
            padding: 11px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
        }

        .view-btn {
            background: #3d4a86;
            color: white;
        }

        .view-btn:hover {
            background: #11233e;
        }

        .download-btn {
            background: #eaf3fb;
            color: #3d4a86;
        }

        .download-btn:hover {
            background: #dceaf5;
        }

        .back-link {
            text-align: center;
            margin-top: 35px;
        }

        .back-link a {
            text-decoration: none;
            color: #3d4a86;
            font-size: 14px;
            font-weight: 600;
        }

        .back-link a:hover {
            color: #11233e;
        }

        @media (max-width: 700px) {

            .container {
                width: 90%;
                padding: 40px 0;
            }

            .page-title h1 {
                font-size: 32px;
            }

            .program-item {
                flex-direction: column;
                align-items: flex-start;
                padding: 22px;
            }

            .program-info {
                width: 100%;
            }

            .program-buttons {
                width: 100%;
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

    <div class="page-title">
        <span>UPIK PTSB</span>

        <h1>Buku Program NICERS</h1>

        <p>
            Koleksi buku program NICERS Politeknik Tuanku Sultanah Bahiyah
        </p>
    </div>

    <div class="program-list">

        <!-- NICERS 2024 -->
        <div class="program-item">

            <div class="program-info">

                <div class="program-number">
                    01
                </div>

                <div>
                    <h3>BUKU PROGRAM NICERS 2022</h3>
                    <p>Buku Program NICERS 2022</p>
                </div>

            </div>

            <div class="program-buttons">

                <a
                    href="img/BUKU PROGRAM_NICERS 2022.pdf"
                    target="_blank"
                    class="btn view-btn"
                >
                    View
                </a>

                <a
                    href="img/BUKU PROGRAM_NICERS 2022.pdf"
                    download
                    class="btn download-btn"
                >
                    Download
                </a>

            </div>

        </div>


        <!-- NICERS 2025 -->
        <div class="program-item">

            <div class="program-info">

                <div class="program-number">
                    02
                </div>

                <div>
                    <h3>BUKU PROGRAM NICERS 2024</h3>
                    <p>Buku Program NICERS 2024</p>
                </div>

            </div>

            <div class="program-buttons">

                <a
                    href="img/BUKU PROGRAM_NICERS 2024.pdf"
                    target="_blank"
                    class="btn view-btn"
                >
                    View
                </a>

                <a
                    href="img/BUKU PROGRAM_NICERS 2024.pdf"
                    download
                    class="btn download-btn"
                >
                    Download
                </a>

            </div>

        </div>

    </div>

    <div class="back-link">
        <a href="index.php"></a>
    </div>

</main>

<?php include 'footer.php'; ?>

</body>
</html>