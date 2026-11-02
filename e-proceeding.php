<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Proceeding CiETVET | UPIK PTSB</title>
    <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: linear-gradient(135deg, #f7fafc, #eaf3fb);
            color: #11233e;
        }

        .site-header {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }

        main {
            width: min(1100px, 90%);
            max-width: 100%;
            margin: auto;
            padding: 70px 0;
        }

        .page-heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .page-heading .small-title {
            color: #3d4a86;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .page-heading h1 {
            font-family: "Playfair Display", serif;
            font-size: 42px;
            margin: 0;
            color: #11233e;
        }

        .page-heading p {
            color: #5c6675;
            line-height: 1.7;
            max-width: 650px;
            margin: 12px auto 0;
        }

        .intro-card {
            width: 100%;
            background: white;
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 8px 25px rgba(17, 35, 62, 0.08);
        }

        .intro-card h2 {
            margin-top: 0;
            color: #11233e;
            font-size: 25px;
        }

        .intro-card p {
            color: #5c6675;
            line-height: 1.7;
            margin-bottom: 0;
        }

        .search-box {
            width: 100%;
            margin-top: 25px;
            margin-bottom: 5px;
        }

        .search-box input {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            padding: 15px 18px;
            border: 1px solid #d6deea;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
            background: white;
            font-family: "DM Sans", sans-serif;
        }

        .search-box input:focus {
            border-color: #3d4a86;
        }

        .result-info {
            margin-bottom: 20px;
            color: #5c6675;
            font-size: 14px;
        }

        .file-list {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .file-card {
            width: 100%;
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 25px rgba(17, 35, 62, 0.08);
        }

        .file-card h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #11233e;
            font-size: 23px;
        }

        .file-card p {
            color: #687386;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 11px 20px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-family: "DM Sans", sans-serif;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
            text-align: center;
        }

        .btn-view {
            background: #3d4a86;
            color: white;
        }

        .btn-view:hover {
            background: #2f396b;
        }

        .btn-download {
            background: #11233e;
            color: white;
        }

        .btn-download:hover {
            background: #1d3557;
        }

        .preview-container {
            display: none;
            width: 100%;
            margin-top: 25px;
        }

        .preview-container.active {
            display: block;
        }

        .preview-title {
            font-size: 14px;
            font-weight: 600;
            color: #3d4a86;
            margin-bottom: 10px;
        }

        .pdf-preview {
            display: block;
            width: 100%;
            max-width: 100%;
            height: 650px;
            border: 1px solid #d6deea;
            border-radius: 10px;
            background: #f5f5f5;
        }

        .no-result {
            display: none;
            width: 100%;
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 15px;
            color: #687386;
            box-shadow: 0 8px 25px rgba(17, 35, 62, 0.08);
        }

        @media (max-width: 768px) {
            main {
                width: 92%;
                padding: 50px 0;
            }

            .page-heading h1 {
                font-size: 32px;
            }

            .intro-card,
            .file-card {
                padding: 22px;
            }

            .pdf-preview {
                height: 500px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>

<main>
    <div class="page-heading">
        <div class="small-title">UPIK PTSB</div>
        <h1>E-Proceeding CiETVET</h1>
        <p>Koleksi e-Proceeding Conference in Education - Technical &amp; Vocational Education and Training.</p>
    </div>

    <div class="intro-card">
        <h2>E-Proceeding Documents</h2>
        <p>Koleksi dokumen e-Proceeding CiETVET mengikut tahun penerbitan yang boleh dilihat dan dimuat turun.</p>

        <div class="search-box">
            <input
                type="text"
                id="searchInput"
                placeholder="Search by year or document title..."
                onkeyup="searchDocuments()"
            >
        </div>
    </div>

    <div class="result-info" id="resultInfo">3 documents</div>

    <div class="file-list" id="fileList">
        <div class="file-card" data-search="2023 cietvet e-proceeding conference education technical vocational education training">
            <h3>E-Proceeding CiETVET 2023</h3>
            <p>Conference in Education - Technical &amp; Vocational Education and Training 2023.</p>
            <div class="actions">
                <button class="btn btn-view" onclick="togglePreview('preview2023', this)">View</button>
                <a href="e-proceeding/E_PROCEEDING_CIETVET_2023.pdf" download class="btn btn-download">Download</a>
            </div>
            <div class="preview-container" id="preview2023">
                <div class="preview-title">PDF Preview — E-Proceeding CiETVET 2023</div>
                <iframe class="pdf-preview" src="e-proceeding/E_PROCEEDING_CIETVET_2023.pdf" title="E-Proceeding CiETVET 2023"></iframe>
            </div>
        </div>

        <div class="file-card" data-search="2024 cietvet e-proceeding international conference education technical vocational education training">
            <h3>E-Proceeding CiETVET 2024</h3>
            <p>International Conference in Education - Technical and Vocational Education and Training 2024.</p>
            <div class="actions">
                <button class="btn btn-view" onclick="togglePreview('preview2024', this)">View</button>
                <a href="e-proceeding/E_PROCEEDING_CIETVET_2024.pdf" download class="btn btn-download">Download</a>
            </div>
            <div class="preview-container" id="preview2024">
                <div class="preview-title">PDF Preview — E-Proceeding CiETVET 2024</div>
                <iframe class="pdf-preview" src="e-proceeding/E_PROCEEDING_CIETVET_2024.pdf" title="E-Proceeding CiETVET 2024"></iframe>
            </div>
        </div>

        <div class="file-card" data-search="2025 cietvet e-proceeding international conference education technical vocational education training">
            <h3>E-Proceeding CiETVET 2025</h3>
            <p>International Conference in Education - Technical and Vocational Education and Training 2025.</p>
            <div class="actions">
                <button class="btn btn-view" onclick="togglePreview('preview2025', this)">View</button>
                <a href="e-proceeding/E_PROCEEDING_ICIETVET_2025.pdf" download class="btn btn-download">Download</a>
            </div>
            <div class="preview-container" id="preview2025">
                <div class="preview-title">PDF Preview — E-Proceeding CiETVET 2025</div>
                <iframe class="pdf-preview" src="e-proceeding/E_PROCEEDING_ICIETVET_2025.pdf" title="E-Proceeding CiETVET 2025"></iframe>
            </div>
        </div>
    </div>

    <div class="no-result" id="noResult">No document found.</div>
</main>

<script>
    function togglePreview(previewId, button) {
        const preview = document.getElementById(previewId);

        if (preview.classList.contains("active")) {
            preview.classList.remove("active");
            button.textContent = "View";
        } else {
            preview.classList.add("active");
            button.textContent = "Hide Preview";

            setTimeout(function () {
                preview.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }, 100);
        }
    }

    function searchDocuments() {
        const input = document.getElementById("searchInput").value.toLowerCase().trim();
        const cards = document.querySelectorAll(".file-card");
        let count = 0;

        cards.forEach(function (card) {
            const searchText = card.getAttribute("data-search").toLowerCase();

            if (searchText.includes(input)) {
                card.style.display = "block";
                count++;
            } else {
                card.style.display = "none";
            }
        });

        document.getElementById("resultInfo").textContent =
            count + (count === 1 ? " document" : " documents");

        document.getElementById("noResult").style.display =
            count === 0 ? "block" : "none";
    }
</script>

<?php include 'footer.php'; ?>

</body>
</html>
