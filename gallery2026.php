<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery | UPIK PTSB</title>

    <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

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
            background: linear-gradient(135deg, #f7fafc, #eaf3fb);
            min-height: 100vh;
            color: #11233e;
        }

        main {
            max-width: 1150px;
            margin: auto;
            padding: 70px 25px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 50px;
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
            font-size: 45px;
            margin-top: 10px;
            color: #11233e;
        }

        .page-title p {
            margin-top: 12px;
            color: #687386;
            font-size: 15px;
        }

        .event-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .event-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #e1e7ee;
            box-shadow:
                0 10px 30px rgba(17, 35, 62, 0.08);
            cursor: pointer;
            transition: 0.3s ease;
        }

        .event-card:hover {
            transform: translateY(-7px);
            box-shadow:
                0 18px 40px rgba(17, 35, 62, 0.15);
        }

        .event-content {
            padding: 35px;
        }

        .event-content h2 {
            font-family: "Playfair Display", serif;
            color: #11233e;
            font-size: 24px;
            line-height: 1.4;
            margin-bottom: 12px;
        }

        .event-content p {
            color: #687386;
            font-size: 14px;
            line-height: 1.7;
        }

        .click-text {
            display: inline-block;
            margin-top: 20px;
            color: #3d4a86;
            font-weight: 700;
            font-size: 14px;
            transition: 0.3s ease;
        }

        .event-card:hover .click-text {
            transform: translateX(5px);
        }

        @media (max-width: 768px) {

            main {
                padding: 50px 20px;
            }

            .page-title {
                margin-bottom: 35px;
            }

            .page-title h1 {
                font-size: 35px;
            }

            .page-title p {
                font-size: 14px;
            }

            .event-container {
                grid-template-columns: 1fr;
            }

            .event-content {
                padding: 28px;
            }

            .event-content h2 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <main>

        <div class="page-title">

            <span>
                UPIK PTSB
            </span>

            <h1>
                Gallery
            </h1>

            <p>
                Koleksi aktiviti, bengkel dan program
                Unit Penyelidikan, Inovasi dan Komersil.
            </p>

        </div>

        <div class="event-container">

            <div
                class="event-card"
                onclick="openSmartResearch()">

                <div class="event-content">

                    <h2>
                        Bengkel Smart Research Writing with AI
                    </h2>

                    <p>
                        Accelerating Academic Writing and Publication
                    </p>

                    <span class="click-text">
                        Click to view →
                    </span>

                </div>

            </div>


            <div
                class="event-card"
                onclick="openHartaIntelek()">

                <div class="event-content">

                    <h2>
                        Pameran Sempena Hari Harta Intelek Negara 2026
                    </h2>

                    <p>
                        Koleksi gambar sempena Hari Harta Intelek Negara 2026
                    </p>

                    <span class="click-text">
                        Click to view →
                    </span>

                </div>

            </div>

        </div>

    </main>


    <?php include 'footer.php'; ?>


    <script>

        function openSmartResearch() {
            window.location.href = "galleryBengkel.html";
        }

        function openHartaIntelek() {
            window.location.href = "galleryPameran.html";
        }

    </script>

</body>
</html>