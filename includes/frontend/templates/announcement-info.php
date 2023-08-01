<head>
  <style>
    .card-announcement {
      margin-top: -25px;
    }

    .ticker {
      display: flex;
      flex-wrap: wrap;
      width: 70%;
      height: 50px;
      margin: 0 auto
    }

    .news {
      width: 100%;
      box-shadow: 1px 1px 10px #aaa;
      background: #fff;
      padding: 0 2%;
      border-radius: 50px;
    }

    .news marquee {
      font-size: 18px;
      margin-top: 12px
    }

    .news-content p {
      margin-right: 41px;
      display: inline
    }
  </style>
</head>
<div class="container card-announcement">
  <div class="ticker">
    <div class="news">
      <marquee class="news-content" onMouseOver="this.stop()" onMouseOut="this.start()">
        <p>
          <strong>Informasi : </strong> <?= $rowAnnouncement["description"]; ?>
        </p>
      </marquee>
    </div>
  </div>
</div>
<script>

</script>