<meta name="mobile-web-app-capable" content="yes" />
   <meta name="apple-mobile-web-app-capable" content="yes" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- 부트스트랩 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <!-- 로고 넣기 -->
  <link rel="apple-touch-icon" sizes="180x180" href="./img/MD_applogo.png" />
	<link rel="shortcut icon" type="image/png" href="./img/MD_applogo.png" sizes="192x192" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
  <link rel="stylesheet" href="./css/common.css">
        <!-- main.php 고유의 스타일시트 연결 -->
        <link rel="stylesheet" href="./css/main.css">
  <style>
  /* 제목 스타일 */
  .w3-lobster { font-family: "Lobster", Sans-serif; }
  
  /* Make the image fully responsive */
  .carousel-inner img { width: 100%; /* height: 100%; */ }
  </style>
</head>

<body style="font-family: 'EarlyFontDiary';" >
  <style type="text/css">
    /* 상단 색 */
    .jumbotron { background-color: rgb(255, 213, 222); }
    /* 제목폰트색 */
    a:hover { color:rgb(255, 95, 175); }

    /* 폰트 설정 */
    @font-face {
    font-family: 'PyeongChangPeace-Bold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2206-02@1.0/PyeongChangPeace-Bold.woff2') format('woff2');
    font-weight: 700;
    font-style: normal;
}
    
    /* 네브바 색상 */
    .navbar{ background-color:rgb(255, 106, 130) !important; }
    footer {
      font-size: 22px;
      color: whitesmoke; }
  </style>
<!------------------------- 제목 부분 ------------------------>
  <div class="jumbotron text-center" style="margin-bottom:0" >
    <!-- 웹폰트, 사이즈-->
    <div style="font-family: 'PyeongChangPeace-Bold';">
    <!-- <div class="w3-container w3-lobster">  -->
      <p class="w3-xxxlarge font-effect-shadow-multiple"><a href="./index.php">누가 뭐래도 상처받지 않는 약은 나를 믿어주는 사람입니다.</a></p>
    <!-- <p>마음의 이야기를 꺼내어 보아요~</p>  --></div>
    </div>
  </div>
  <header>
    <!-- 공통사용 php문서 외부 추가하기 : 공통 사용하는 php는 lib폴더에 작성 -->
<?php include "./lib/header2.php" ?>
</header>
<section>
<!-- Main Content 문서를 별도로 제작 : 추루 유지보수시의 편리성 -->
<?php include "./main.php" ?>
</section>

<footer>
<!-- 공통모듈 추가 -->
<?php include "./lib/footer.php" ?>
</footer>

</body>
</html>