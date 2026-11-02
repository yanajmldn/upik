
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buku Program NICERS | UPIK PTSB</title>

    <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

    <style>
        /* ================================
           GENERAL
        ================================= */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: linear-gradient(135deg, #f7fafc, #eaf3fb);
            color: #11233e;
        }

        .site-header {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }

        /* ================================
           MAIN
        ================================= */

        main {
            width: min(1100px, 90%);
            max-width: 100%;
            margin: 0 auto;
            padding: 70px 0;
        }

        /* ================================
           PAGE HEADING
        ================================= */

        .page-heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .page-heading .small-title {
            display: inline-block;
            margin-bottom: 12px;
            color: #3d4a86;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .page-heading h1 {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            margin: 0;
            color: #11233e;
        }

        /* ================================
           INTRODUCTION
        ================================= */

        .intro-card {
            width: 100%;
            max-width: 100%;
            background: #ffffff;
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

        /* ================================
           SEARCH
        ================================= */

        .search-box {
            width: 100%;
            max-width: 100%;
            margin-top: 25px;
            margin-bottom: 5px;
        }

        .search-box input {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 15px 18px;

            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            color: #11233e;

            border: 1px solid #d6deea;
            border-radius: 10px;
            outline: none;
            background: #ffffff;

            transition: 0.3s;
        }

        .search-box input:focus {
            border-color: #3d4a86;
            box-shadow: 0 0 0 3px rgba(61, 74, 134, 0.10);
        }

        /* ================================
           RESULT INFORMATION
        ================================= */

        .result-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;

            margin: 30px 0 20px;
            color: #5c6675;
            font-size: 14px;
        }

        .result-info h2 {
            margin: 0;
            color: #11233e;
            font-family: 'Playfair Display', serif;
            font-size: 25px;
        }

        .result-count {
            padding: 7px 14px;
            color: #245b85;
            background: #dceefa;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
        }

        /* ================================
           FILE LIST
        ================================= */

        .file-list {
            display: flex;
            flex-direction: column;
            gap: 25px;
            width: 100%;
            max-width: 100%;
        }

        /* ================================
           FILE CARD
        ================================= */

        .file-card {
            width: 100%;
            max-width: 100%;
            padding: 30px;

            background: #ffffff;
            border: 1px solid #e4edf5;
            border-radius: 18px;

            box-shadow: 0 8px 25px rgba(17, 35, 62, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .file-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(17, 35, 62, 0.10);
        }

        .file-card-content {
            display: flex;
            align-items: flex-start;
            gap: 18px;
        }

        .file-icon {
            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;
            width: 60px;
            height: 60px;

            color: #245b85;
            background: #e5f2fc;
            border-radius: 14px;

            font-size: 21px;
            font-weight: 700;
        }

        .file-details {
            flex: 1;
            min-width: 0;
        }

        .file-details h3 {
            margin: 0 0 10px;
            color: #11233e;
            font-size: 21px;
            line-height: 1.5;
        }

        .file-details p {
            margin: 0;
            color: #687386;
            line-height: 1.7;
            font-size: 14px;
        }

        .file-year {
            display: inline-block;
            margin-top: 12px;
            padding: 5px 12px;

            color: #245b85;
            background: #eaf4fc;
            border-radius: 20px;

            font-size: 12px;
            font-weight: 700;
        }

        /* ================================
           BUTTONS
        ================================= */

        .actions {
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 22px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-height: 42px;
            padding: 11px 20px;

            border: 1px solid transparent;
            border-radius: 8px;

            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;

            cursor: pointer;
            transition: 0.3s;
        }

        .btn-view {
            color: #ffffff;
            background: #3d4a86;
        }

        .btn-view:hover {
            background: #2f396b;
        }

        .btn-download {
            color: #245b85;
            background: #e5f2fc;
            border-color: #cfe5f6;
        }

        .btn-download:hover {
            color: #ffffff;
            background: #5b9ecb;
            border-color: #5b9ecb;
        }

        /* ================================
           PDF PREVIEW
        ================================= */

        .preview-container {
            display: none;
            width: 100%;
            max-width: 100%;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #e4edf5;
        }

        .preview-container.active {
            display: block;
        }

        .preview-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }

        .preview-title h4 {
            margin: 0;
            color: #11233e;
            font-size: 16px;
        }

        .close-preview {
            padding: 8px 12px;
            color: #64748b;
            background: #f1f5f9;
            border: none;
            border-radius: 6px;

            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            font-weight: 600;

            cursor: pointer;
        }

        .close-preview:hover {
            color: #11233e;
            background: #e2e8f0;
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

        /* ================================
           NO RESULT
        ================================= */

        .no-result {
            display: none;
            width: 100%;
            max-width: 100%;

            padding: 30px;
            text-align: center;

            color: #687386;
            background: #ffffff;
            border: 1px solid #e4edf5;
            border-radius: 15px;

            box-shadow: 0 8px 25px rgba(17, 35, 62, 0.08);
            line-height: 1.7;
        }

        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 768px) {
            main {
                width: 92%;
                padding: 50px 0;
            }

            .page-heading {
                margin-bottom: 30px;
            }

            .page-heading h1 {
                font-size: 32px;
            }

            .intro-card {
                padding: 22px;
            }

            .intro-card h2 {
                font-size: 22px;
            }

            .result-info h2 {
                font-size: 22px;
            }

            .file-card {
                padding: 22px;
            }

            .file-icon {
                width: 50px;
                height: 50px;
                font-size: 18px;
            }

            .file-details h3 {
                font-size: 18px;
            }

            .pdf-preview {
                height: 500px;
            }
        }

        @media (max-width: 480px) {
            .page-heading h1 {
                font-size: 29px;
            }

            .page-heading .small-title {
                font-size: 14px;
            }

            .intro-card {
                padding: 18px;
            }

            .file-card {
                padding: 18px;
            }

            .file-card-content {
                flex-direction: column;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                text-align: center;
            }

            .pdf-preview {
                height: 400px;
            }
        }
    </style>
</head>

<body>

<main>

    <!-- PAGE HEADING -->
    <section class="page-heading">

        <div class="small-title">
            UPIK PTSB
        </div>

        <h1>
            Buku Program NICERS
        </h1>

    </section>

    <!-- INTRODUCTION -->
    <section class="intro-card">

        <h2>
            NICERS Programme Collection
        </h2>

        <p>
            Koleksi buku program NICERS bagi tahun yang disenaraikan.
            Dokumen boleh dilihat secara terus pada halaman ini
            atau dimuat turun untuk rujukan.
        </p>

        <!-- SEARCH -->
        <div class="search-box">

            <input
                type="text"
                id="searchInput"
                placeholder="Search by year or document title..."
                aria-label="Search NICERS documents"
                oninput="searchDocuments()"
            >

        </div>

    </section>

    <!-- RESULT INFORMATION -->
    <section class="result-info">

        <h2>
            Available Documents
        </h2>

        <span class="result-count" id="resultCount">
            2 Documents
        </span>

    </section>

    <!-- DOCUMENT LIST -->
    <section class="file-list" id="fileList">

        <!-- NICERS 2022 -->
        <article
            class="file-card"
            data-search="nicers 2022 buku program programme book pdf"
        >

            <div class="file-card-content">

                <div class="file-icon">
                    PDF
                </div>

                <div class="file-details">

                    <h3>
                        BUKU PROGRAM NICERS 2022
                    </h3>

                    <p>
                        Buku program NICERS bagi tahun 2022.
                        Klik View untuk melihat dokumen atau Download
                        untuk menyimpan fail PDF.
                    </p>

                    <span class="file-year">
                        Year 2022
                    </span>

                </div>

            </div>

            <div class="actions">

                <button
                    type="button"
                    class="btn btn-view"
                    onclick="togglePreview('preview2022', this)"
                >
                    View
                </button>

                <a
                    href="img/BUKU PROGRAM_NICERS 2022.pdf"
                    class="btn btn-download"
                    download
                >
                    Download
                </a>

            </div>

            <div class="preview-container" id="preview2022">

                <div class="preview-title">

                    <h4>
                        PDF Preview — NICERS 2022
                    </h4>

                    <button
                        type="button"
                        class="close-preview"
                        onclick="closePreview('preview2022')"
                    >
                        Close Preview
                    </button>

                </div>

                <iframe
                    class="pdf-preview"
                    src="img/BUKU%20PROGRAM_NICERS%202022.pdf"
                    title="NICERS Programme Book 2022"
                ></iframe>

            </div>

        </article>

        <!-- NICERS 2024 -->
        <article
            class="file-card"
            data-search="nicers 2024 buku program programme book pdf"
        >

            <div class="file-card-content">

                <div class="file-icon">
                    PDF
                </div>

                <div class="file-details">

                    <h3>
                        BUKU PROGRAM NICERS 2024
                    </h3>

                    <p>
                        Buku program NICERS bagi tahun 2024.
                        Klik View untuk melihat dokumen atau Download
                        untuk menyimpan fail PDF.
                    </p>

                    <span class="file-year">
                        Year 2024
                    </span>

                </div>

            </div>

            <div class="actions">

                <button
                    type="button"
                    class="btn btn-view"
                    onclick="togglePreview('preview2024', this)"
                >
                    View
                </button>

                <a
                    href="img/BUKU PROGRAM_NICERS 2024.pdf"
                    class="btn btn-download"
                    download
                >
                    Download
                </a>

            </div>

            <div class="preview-container" id="preview2024">

                <div class="preview-title">

                    <h4>
                        PDF Preview — NICERS 2024
                    </h4>

                    <button
                        type="button"
                        class="close-preview"
                        onclick="closePreview('preview2024')"
                    >
                        Close Preview
                    </button>

                </div>

                <iframe
                    class="pdf-preview"
                    src="img/BUKU%20PROGRAM_NICERS%202024.pdf"
                    title="NICERS Programme Book 2024"
                ></iframe>

            </div>

        </article>

    </section>

    <!-- NO RESULT -->
    <div class="no-result" id="noResult">

        <strong>No documents found.</strong>
        <br>

        Please try searching using a different keyword or year.

    </div>

</main>

<script>
    /* ================================
       SEARCH DOCUMENTS
    ================================= */

    function searchDocuments() {

        const input = document
            .getElementById('searchInput')
            .value
            .toLowerCase()
            .trim();

        const cards = document.querySelectorAll('.file-card');

        let count = 0;

        cards.forEach(function(card) {

            const searchText = (
                card.dataset.search + ' ' + card.textContent
            ).toLowerCase();

            if (searchText.includes(input)) {

                card.style.display = '';

                count++;

            } else {

                card.style.display = 'none';

                const preview = card.querySelector('.preview-container');

                if (preview) {
                    preview.classList.remove('active');
                }

                const button = card.querySelector('.btn-view');

                if (button) {
                    button.textContent = 'View';
                }

            }

        });

        // Update document count
        document.getElementById('resultCount').textContent =
            count + (count === 1 ? ' Document' : ' Documents');

        // Show or hide no-result message
        document.getElementById('noResult').style.display =
            count === 0 ? 'block' : 'none';
    }


    /* ================================
       OPEN / CLOSE PDF PREVIEW
    ================================= */

    function togglePreview(previewId, button) {

        const preview = document.getElementById(previewId);

        const isOpen = preview.classList.contains('active');

        // Close all previews first
        document.querySelectorAll('.preview-container').forEach(function(item) {
            item.classList.remove('active');
        });

        // Reset all View buttons
        document.querySelectorAll('.btn-view').forEach(function(item) {
            item.textContent = 'View';
        });

        // Open selected preview if it was closed
        if (!isOpen) {

            preview.classList.add('active');

            button.textContent = 'Hide Preview';

            setTimeout(function() {

                preview.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

            }, 100);

        }
    }


    /* ================================
       CLOSE PDF PREVIEW
    ================================= */

    function closePreview(previewId) {

        const preview = document.getElementById(previewId);

        preview.classList.remove('active');

        const card = preview.closest('.file-card');

        const button = card.querySelector('.btn-view');

        if (button) {
            button.textContent = 'View';
        }
    }
</script>

</body>
</html>

<?php include 'footer.php'; ?>
