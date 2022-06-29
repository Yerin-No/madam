<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
      <!-- 로고 넣기 -->
  <link rel="apple-touch-icon" sizes="180x180" href="../img/MD_applogo.png" />
	<link rel="shortcut icon" type="image/png" href="../img/MD_applogo.png" sizes="192x192" />

    <title>로그인</title>

    <!-- 공통사용 스타일 적용 -->
    <link rel="stylesheet" href="../css/common.css">
    <!-- login_form 전용 스타일 -->
     <link rel="stylesheet" href="../css/member.css">
</head>
<style type="text/css">
    .jumbotron { background-color: rgb(255, 213, 222); }
    a:hover { color:rgb(255, 72, 163); }
    @font-face {
    font-family: 'HS-Regular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2201-2@1.0/HS-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    }
  </style>
<body style="font-family: 'HS-Regular';">
    <header>
    <!-- 공통모듈 lib -->
    <?php include "../lib/header3.php" ?>
    </header>

    <section>
        <div id="main_content" style="font-size: 20px;">
            <div id="join_box">
                <div id="login_title" style="font-size: 44px;">로그인</div>
                <div id="login_form">
                <form action="./login.php" method="post">
                    <ul>
                        <li><input type="text" name="id" placeholder=" 아이디를 입력하세요" style="width:250px;" ></li>
                        <br>
                        <li><input type="password" name="pass" placeholder=" 비밀번호를 입력하세요" style="width:250px;"></li>
                    </ul>
                    <div id="login_btn">
                        <input type="image" src="../img/log.png">
                    </div>
                    <br><br><br><br>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- 공통모듈 lib -->
    <?php include "../lib/footer2.php" ?>
</body>
</html>