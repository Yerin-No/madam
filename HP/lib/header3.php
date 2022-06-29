<?php 
    //로그인을 하면 session에 정보를 저장하고 각 페이지들에서 모두 사용하고자 함.
    //로그인에 띠라 화면구성이 다르기에 세션에 저장되어 있는 회원정보 중 id, name, level 값 읽어오기
    session_start(); //세션을 저장하든 읽어오든 사용하고자 하면 이 함수로 시작

    $userid="";
    $username="";
    $userlevel=""; //회원등급 : 1~9등급 [1등급:관리자, 9등급:신규회원]
    $userpoint="";

    if( isset($_SESSION['userid'])) $userid= $_SESSION['userid'];
    if( isset($_SESSION['username'])) $username= $_SESSION['username'];
    if( isset($_SESSION['userlevel'])) $userlevel= $_SESSION['userlevel'];
    if( isset($_SESSION['userpoint'])) $userpoint= $_SESSION['userpoint'];

?>
<!-- 모바일 허용 -->
<meta name="mobile-web-app-capable" content="yes" />
   <meta name="apple-mobile-web-app-capable" content="yes" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- 부트스트랩 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <!-- 로고 넣기 -->
  <link rel="apple-touch-icon" sizes="180x180" href="imgs/mdlogo.png" />
   <link rel="shortcut icon" type="image/png" href="imgs/mdlogo.png" sizes="192x192" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">

  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style> 
  /* 제목 스타일 */
  .w3-lobster { font-family: "Lobster", Sans-serif; }
  body{background-color: rgb(255, 213, 222);}
  </style>
</head>
<body style="background-color: rgb(255, 223, 228)" >

  <style type="text/css">
    .jumbotron { background-color: rgb(255, 213, 222); }
    a:hover { color:rgb(255, 72, 163); }
    @font-face {
    font-family: 'EarlyFontDiary';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_220508@1.0/EarlyFontDiary.woff2') format('woff2');
    font-weight: normal;
    font-style: normal;
    font-size: 20px;
    }

  </style>

  <!-- 헤더 영역의 로고와 회원가입/로그인 표시 영역 -->
        <!-- <div id="top"> -->
        <!------------------------- 제목 부분 ------------------------>
        <div class="jumbotron text-center" style="margin-bottom:0" >
    <!-- 웹폰트, 사이즈-->
    <div class="w3-container w3-lobster"> 
      <p class="w3-xxxlarge font-effect-shadow-multiple"><a href="../index.php">Welcome MD Web Diary</a></p>
  </div>
    </div>