<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Inkubator PTSB | UPIK PTSB</title>

  <link rel="icon" type="image/jpeg" href="img/logoupik.jpg">

  <!-- Shared Header & Footer CSS -->
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

    /* MAIN */
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

    /* SEARCH */
    .search-box {
      max-width: 600px;
      margin: 0 auto 35px;
      position: relative;
    }

    .search-box input {
      width: 100%;
      padding: 16px 20px;
      border: 1px solid #d7e0eb;
      border-radius: 12px;
      font-size: 15px;
      outline: none;
      background: white;
      box-shadow: 0 5px 20px rgba(17,35,62,0.06);
    }

    .search-box input:focus {
      border-color: #3d4a86;
    }

    /* LIST */
    .incubator-list {
      background: white;
      border: 1px solid #e3eaf2;
      border-radius: 16px;
      padding: 10px 30px;
      box-shadow: 0 8px 25px rgba(17,35,62,0.06);
    }

    .incubator-item {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 18px 10px;
      border-bottom: 1px solid #e5eaf0;
    }

    .incubator-item:last-child {
      border-bottom: none;
    }

    .number {
      min-width: 42px;
      color: #3d4a86;
      font-size: 15px;
      font-weight: bold;
    }

    .incubator-info h3 {
      font-size: 16px;
      line-height: 1.4;
      color: #11233e;
      font-weight: 600;
    }

    .incubator-info p {
      margin-top: 3px;
      font-size: 12px;
      color: #8792a3;
    }

    /* EMPTY RESULT */
    .no-result {
      display: none;
      text-align: center;
      color: #687386;
      padding: 40px;
    }

    /* RESPONSIVE */
    @media (max-width: 600px) {

      .container {
        width: 90%;
        padding: 40px 0;
      }

      .page-title h1 {
        font-size: 32px;
      }

      .incubator-list {
        padding: 5px 15px;
      }

      .incubator-item {
        gap: 12px;
        padding: 16px 5px;
      }

      .number {
        min-width: 35px;
      }
    }
  </style>
</head>

<body>

  <!-- SHARED HEADER -->
  <?php include 'header.php'; ?>


  <!-- MAIN CONTENT -->
  <main class="container">

    <div class="page-title">

      <span>UPIK PTSB</span>

      <h1>INKUBATOR PTSB</h1>

      <p>
        Senarai inkubator di Politeknik Tuanku Sultanah Bahiyah
      </p>

    </div>


    <!-- SEARCH -->
    <div class="search-box">

      <input
        type="text"
        id="searchInput"
        placeholder="Search incubator..."
        onkeyup="searchIncubator()"
      >

    </div>


    <!-- INCUBATOR LIST -->
    <div class="incubator-list" id="incubatorList">


      <!-- 1 -->
      <div class="incubator-item">

        <div class="number">
          01
        </div>

        <div class="incubator-info">
          <h3>DZ RADIANCE</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 2 -->
      <div class="incubator-item">

        <div class="number">
          02
        </div>

        <div class="incubator-info">
          <h3>DIGINEST</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 3 -->
      <div class="incubator-item">

        <div class="number">
          03
        </div>

        <div class="incubator-info">
          <h3>CHILLTOPIA</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 4 -->
      <div class="incubator-item">

        <div class="number">
          04
        </div>

        <div class="incubator-info">
          <h3>BREWLATTE</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 5 -->
      <div class="incubator-item">

        <div class="number">
          05
        </div>

        <div class="incubator-info">
          <h3>FASHION EXEC</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 6 -->
      <div class="incubator-item">

        <div class="number">
          06
        </div>

        <div class="incubator-info">
          <h3>SMART HATCHERY POLYTECHNIC</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 7 -->
      <div class="incubator-item">

        <div class="number">
          07
        </div>

        <div class="incubator-info">
          <h3>GOLDEN DRIZZLE</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 8 -->
      <div class="incubator-item">

        <div class="number">
          08
        </div>

        <div class="incubator-info">
          <h3>BOTANISA</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 9 -->
      <div class="incubator-item">

        <div class="number">
          09
        </div>

        <div class="incubator-info">
          <h3>BOLTBUDDY</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 10 -->
      <div class="incubator-item">

        <div class="number">
          10
        </div>

        <div class="incubator-info">
          <h3>BONITO'S</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


      <!-- 11 -->
      <div class="incubator-item">

        <div class="number">
          11
        </div>

        <div class="incubator-info">
          <h3>SWEET ANGEL LEGACY</h3>
          <p>Inkubator PTSB</p>
        </div>

      </div>


    </div>


    <div class="no-result" id="noResult">
      No incubator found.
    </div>

  </main>


  <!-- SHARED FOOTER -->
  <?php include 'footer.php'; ?>


  <script>
    function searchIncubator() {

      let input =
        document.getElementById("searchInput")
          .value
          .toLowerCase();

      let items =
        document.querySelectorAll(".incubator-item");

      let found = 0;

      items.forEach(function(item) {

        let name =
          item.querySelector("h3")
            .textContent
            .toLowerCase();

        if (name.includes(input)) {

          item.style.display = "flex";
          found++;

        } else {

          item.style.display = "none";

        }

      });

      if (found === 0) {

        document.getElementById("noResult")
          .style.display = "block";

      } else {

        document.getElementById("noResult")
          .style.display = "none";

      }
    }
  </script>

</body>
</html>