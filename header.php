
<header class="site-header">
    <a class="brand" href="index.php">
        <img src="img/logoupik.jpg" alt="UPIK PTSB Logo">
        <span>UPIK PTSB</span>
    </a>

    <nav>
        <a href="index.php">Home</a>

        <div class="dropdown">
            <a href="index.php#research" class="dropbtn">Research ▾</a>
            <div class="dropdown-menu">
                <a href="index.php#research-management">Publication</a>
                <a href="njiea.php">NJIEA</a>
                <a href="e-proceeding.php">E-Proceeding</a>
                <a href="index.php#research-grant">Grantt</a>
                <a href="index.php#researcher">Permohonan</a>
                <a href="senaraiPenerimaGeran.php">Grant Active</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="index.php#innovation" class="dropbtn">Innovation ▾</a>
            <div class="dropdown-menu">
                <a href="produkInovasi.php">Produk by Jabatan</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="index.php#commercial" class="dropbtn">Commersial ▾</a>
            <div class="dropdown-menu">
                <a href="senaraiInkubator.php">Seanarai Inkubator</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="index.php#kk" class="dropbtn">KIK ▾</a>
            <div class="dropdown-menu">
                <a href="garisPanduan.php">Garis Panduan</a>
                <a href="rubrik.php">Rubrik</a>
                <a href="index.php#kk-project">Penyertaan</a>
                <a href="index.php#kk-members">Pencapaian</a>
                <a href="borangPenyertaan.php">Borang Penyertaan</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="index.php#fyp" class="dropbtn">FYP ▾</a>
            <div class="dropdown-menu">
                <a href="index.php#fyp-project">Abstract + pic</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="index.php#event" class="dropbtn">Event ▾</a>
            <div class="dropdown-menu">
                <a href="cie-tvet.php">CIE-TVET</a>
                <a href="nicers.php">NICERS</a>
                <a href="index.php#event-calendar">ICCE</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="index.php#gallery" class="dropbtn">Gallery ▾</a>
            <div class="dropdown-menu gallery-menu">
                <div class="sub-dropdown">
                    <a href="index.php#gallery-main" class="sub-dropbtn">
                        Kisah Kejayaan <span>▸</span>
                    </a>
                    <div class="sub-dropdown-menu">
                        <a href="index.php#gallery-1">2022</a>
                        <a href="index.php#gallery-2">2023</a>
                        <a href="index.php#gallery-3">2024</a>
                        <a href="index.php#gallery-4">2025</a>
                        <a href="gallery2026.php">2026</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <a href="index.php#document" class="dropbtn">Document ▾</a>
            <div class="dropdown-menu">
                <a href="index.php#document-1">Garis Panduan</a>
                <a href="borangTuntutan.php">Borang Tuntutan</a>
            </div>
        </div>

        <!-- CONTACT US BUTTON -->
        <a href="#" class="contact-btn" onclick="openContactPopup(event)">
            Contact Us
        </a>
    </nav>
</header>

<!-- CONTACT US POPUP -->
<div
    id="contactOverlay"
    class="contact-overlay"
    onclick="closeContactOutside(event)"
    aria-hidden="true"
>
    <div
        class="contact-popup"
        role="dialog"
        aria-modal="true"
        aria-labelledby="contactTitle"
    >
        <button
            type="button"
            class="contact-close"
            onclick="closeContactPopup()"
            aria-label="Close popup"
        >
            &times;
        </button>

        <div class="contact-logo">
        <img src="img/logoupik.jpg" alt="Logo UPIK PTSB">
        </div>


        <h2 id="contactTitle">Contact Us</h2>

        <div class="contact-divider"></div>

        <p class="contact-description">
            Unit Penyelidikan, Inovasi dan Pengkomersialan (UPIK)
        </p>

        <div class="contact-details">
            <div class="contact-detail">
                <span class="contact-detail-icon">⌖</span>
                <div>
                    <strong>Address</strong>
                    <p>
                        Politeknik Tuanku Sultanah Bahiyah<br>
                        09000 Kulim, Kedah, Malaysia
                    </p>
                </div>
            </div>

            <div class="contact-detail">
                <span class="contact-detail-icon">✉</span>
                <div>
                    <strong>Enquiries</strong>
                    <p>
                        For enquiries, please contact the UPIK office.
                    </p>
                </div>
            </div>
            
            <div class="contact-detail">
            <span class="contact-detail-icon">☎</span>
        <div>
        <strong>Phone Number</strong>
        <p>
            <a href="tel:+604XXXXXXX">+604-XXXXXXX</a>
        </p>
    </div>
</div>
        </div>

        <button
            type="button"
            class="contact-done"
            onclick="closeContactPopup()"
        >
            Close
        </button>
    </div>
</div>

<script>
(function () {
    const overlay = document.getElementById('contactOverlay');

    if (!overlay) return;

    let previousFocus = null;

    window.openContactPopup = function (event) {
        if (event) {
            event.preventDefault();
        }

        previousFocus = document.activeElement;

        overlay.classList.add('show');
        overlay.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';

        const closeButton = overlay.querySelector('.contact-close');

        if (closeButton) {
            closeButton.focus();
        }
    };

    window.closeContactPopup = function () {
        overlay.classList.remove('show');
        overlay.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';

        if (previousFocus && typeof previousFocus.focus === 'function') {
            previousFocus.focus();
        }
    };

    window.closeContactOutside = function (event) {
        if (event.target === overlay) {
            window.closeContactPopup();
        }
    };

    document.addEventListener('keydown', function (event) {
        if (
            event.key === 'Escape' &&
            overlay.classList.contains('show')
        ) {
            window.closeContactPopup();
        }
    });
})();
</script>
