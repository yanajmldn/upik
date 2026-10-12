<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Proceeding CiETVET | UPIK PTSB</title>
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
            background: linear-gradient(
                135deg,
                #f7fafc,
                #eaf3fb
            );
            min-height: 100vh;
            color: #11233e;
        }
        main {
            max-width: 1200px;
            margin: auto;
            padding: 60px 25px 80px;
        }
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
        .result-info {
            text-align: center;
            color: #687386;
            font-size: 13px;
            margin-bottom: 25px;
        }
        .proceeding-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .proceeding-card {
            background: white;
            border: 1px solid #e1e7ee;
            border-radius: 18px;
            padding: 30px;
            box-shadow:
                0 10px 30px
                rgba(17,35,62,0.08);
            transition: 0.3s;
        }
        .proceeding-card:hover {
            box-shadow:
                0 15px 35px
                rgba(17,35,62,0.12);
        }
        .document-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }
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
            flex-shrink: 0;
        }
        .proceeding-year {
            color: #3d4a86;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        .proceeding-card h2 {
            font-family: "Playfair Display", serif;
            font-size: 23px;
            line-height: 1.3;
            color: #11233e;
        }
        .proceeding-card p {
            color: #687386;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .pdf-preview {
            width: 100%;
            height: 650px;
            border: 1px solid #dce4ed;
            border-radius: 12px;
            display: block;
            background: #f8fafc;
        }
        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 15px;
            flex-wrap: wrap;
        }
        .btn {
            text-decoration: none;
            border: none;
            padding: 11px 18px;
            border-radius: 9px;
            font-family: "DM Sans", sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            display: inline-block;
        }
        .view-btn {
            background: #11233e;
            color: white;
        }
        .view-btn:hover {
            background: #263b5b;
        }
        .download-btn {
            background: #eef3f8;
            color: #11233e;
            border: 1px solid #d7e0ea;
        }
        .download-btn:hover {
            background: #dfe8f1;
        }
        .no-result {
            display: none;
            text-align: center;
            background: white;
            border: 1px solid #e1e7ee;
            border-radius: 18px;
            padding: 40px;
            color: #687386;
        }
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
            .proceeding-card {
                padding: 20px;
            }
            .proceeding-card h2 {
                font-size: 20px;
            }
            .pdf-preview {
                height: 500px;
            }
            .button-group {
                justify-content: stretch;
                flex-direction: column;
            }
            .btn {
                width: 100%;
                text-align: center;
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
                E-Proceeding CiETVET
            </h1>
            <p>
                Koleksi e-Proceeding Conference in Education -
                Technical & Vocational Education and Training
            </p>
        </div>

        <div class="search-container">
            <input
                type="text"
                id="searchInput"
                class="search-box"
                placeholder="Search by year or proceeding title..."
                onkeyup="searchProceeding()"
            >
        </div>

        <div
            class="result-info"
            id="resultInfo"
        >
            3 proceedings
        </div>

        <div
            class="proceeding-list"
            id="proceedingList"
        >
            <div
                class="proceeding-card"
                data-search="2023 cietvet e-proceeding conference education technical vocational education training"
            >
                <div class="document-title">
                    <div class="proceeding-icon">
                        📄
                    </div>
                    <div>
                        <div class="proceeding-year">
                            CIETVET 2023
                        </div>
                        <h2>
                            E-Proceeding CiETVET 2023
                        </h2>
                    </div>
                </div>
                <p>
                    Conference in Education -
                    Technical & Vocational Education
                    and Training 2023.
                </p>
                <iframe
                    src="e-proceeding/E_PROCEEDING_CIETVET_2023.pdf"
                    class="pdf-preview"
                    title="E-Proceeding CiETVET 2023">
                </iframe>
                <div class="button-group">
                    <a
                        href="e-proceeding/E_PROCEEDING_CIETVET_2023.pdf"
                        target="_blank"
                        class="btn view-btn"
                    >
                        👁 View
                    </a>
                    <a
                        href="e-proceeding/E_PROCEEDING_CIETVET_2023.pdf"
                        download
                        class="btn download-btn"
                    >
                        ↓ Download
                    </a>
                </div>
            </div>
            <div
                class="proceeding-card"
                data-search="2024 cietvet e-proceeding international conference education technical vocational education training"
            >
                <div class="document-title">
                    <div class="proceeding-icon">
                        📄
                    </div>
                    <div>
                        <div class="proceeding-year">
                            CIETVET 2024
                        </div>
                        <h2>
                            E-Proceeding CiETVET 2024
                        </h2>
                    </div>
                </div>
                <p>
                    International Conference in Education -
                    Technical and Vocational Education
                    and Training 2024.
                </p>

                <iframe
                    src="e-proceeding/E_PROCEEDING_CIETVET_2024.pdf"
                    class="pdf-preview"
                    title="E-Proceeding CiETVET 2024">
                </iframe>
                <div class="button-group">
                    <a
                        href="e-proceeding/E_PROCEEDING_CIETVET_2024.pdf"
                        target="_blank"
                        class="btn view-btn"
                    >
                        👁 View
                    </a>
                    <a
                        href="e-proceeding/E_PROCEEDING_CIETVET_2024.pdf"
                        download
                        class="btn download-btn"
                    >
                        ↓ Download
                    </a>
                </div>
            </div>
            <div
                class="proceeding-card"
                data-search="2025 cietvet e-proceeding international conference education technical vocational education training"
            >
                <div class="document-title">
                    <div class="proceeding-icon">
                        📄
                    </div>
                    <div>
                        <div class="proceeding-year">
                            CIETVET 2025
                        </div>
                        <h2>
                            E-Proceeding CiETVET 2025
                        </h2>
                    </div>
                </div>
                <p>
                    International Conference in Education -
                    Technical and Vocational Education
                    and Training.
                </p>
                <iframe
                    src="e-proceeding/E_PROCEEDING_ICIETVET_2025.pdf"
                    class="pdf-preview"
                    title="E-Proceeding CiETVET 2025">
                </iframe>
                <div class="button-group">
                    <a
                        href="e-proceeding/E_PROCEEDING_ICIETVET_2025.pdf"
                        target="_blank"
                        class="btn view-btn"
                    >
                        👁 View
                    </a>
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
        <div
            class="no-result"
            id="noResult"
        >
            No proceeding found.
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script>
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
    </script>
</body>
</html>