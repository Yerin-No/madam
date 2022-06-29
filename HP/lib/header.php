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

<!-- 헤더 영역의 로고와 회원가입/로그인 표시 영역 -->
        <!------------------------- 제목 부분 ------------------------>
        <div class="jumbotron text-center" style="margin-bottom:0" >
      <div class="w3-container w3-lobster"> 
        <p class="w3-xxxlarge font-effect-shadow-multiple"><a href="index.php">Welcome MD Web Diary</a></p>
      </div>
      </div>

    <!-- 2. 회원가입/로그인 버튼 표시 영역 -->
    <!------------------------ 상단 바 부분 ------------------------->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark" style="font-family: 'EarlyFontDiary';">
    <!-- 로고 넣기 -->
    <a class="navbar-brand" href="./index.php"><img src="./img/MD_Plogo.png" height="40px" width="45px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); });
        </script>

      <li class="nav-item" style="font-size: 21px;"><a class="nav-link" href="./calendar/index.html" data-toggle="tooltip" data-placement="bottom" title="메모가 가능한 달력">
          📆 달력 메모</a></li>

      <li class="nav-item" style="font-size: 21px;"><a class="nav-link" href="../Paint/index.html" data-toggle="tooltip" data-placement="bottom" title="쉽게 저장이 가능한 그림판">
        🎨 그림판</a></li>  

      <li class="nav-item" style="font-size: 21px;"><a class="nav-link" href="./developer.html" data-toggle="tooltip" data-placement="bottom" title="이 웹을 제작한 친구들">
        👩🏻 개발자</a></li>

            <!-- 로그인 안되었을 때 -->

        <?php if(!$userid){  ?>
          <li class="nav-item dropdown" style="font-size: 21px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-placement="bottom" title="회원가입 및 로그인">
          💬 회원가입 / 로그인 </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="./member/member_form.php" style="font-size: 23px;">회원가입</a>
            <a class="dropdown-item" href="./login/login_form.php" style="font-size: 23px;">로 그 인</a>

        <?php }else{ ?>
          <li class="nav-item dropdown" style="font-size: 21px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-placement="bottom" title="로그아웃 및 정보수정">
          💬 로그아웃 / 정보수정 </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="./login/logout.php" style="font-size: 23px;">로그아웃</a>
            <a class="dropdown-item" href="./login/member_modify_form.php" style="font-size: 23px;">정보수정</a>
        <?php }?> 

        <!-- 관리자모드로 로그인되었을 때 추가로.. -->
        <?php if($userlevel==1){?>
            <li> | </li>
            <li><a href="./admin/admin.php">관리자모드</a></li>
        <?php } ?>
        </div>
        </li>
        <li class="nav-item dropdown" style="font-size: 21px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">오늘의 요약</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="./glad.php" style="font-size: 21px;">기뻐요 😀</a>
            <a class="dropdown-item" href="./sad.php" style="font-size: 21px;">슬퍼요 😭</a>
            <a class="dropdown-item" href="./mad.php" style="font-size: 21px;">화나요 😣</a>
            <a class="dropdown-item" href="./happy.php" style="font-size: 21px;">행복해요 😊</a>
            <a class="dropdown-item" href="./funny.php" style="font-size: 21px;">웃겨요 😂</a>
            <a class="dropdown-item" href="./sick.php" style="font-size: 21px;">아파요😥</a>
            <a class="dropdown-item" href="./like.php" style="font-size: 21px;">좋아요 😍</a>
            <a class="dropdown-item" href="./notgood.php" style="font-size: 21px;">별로예요 😑</a>
        </div>
      </li>
    </ul>
</div>
      
      <!-- <div id="datepicker" align="center" class="hasDatepicker">
        <div class="ui-datepicker-inline ui-datepicker ui-widget-content ui-helper-clearfix ui-corner-all" style="y: block;">
        </div> -->

      </div>
    </ul>
  </div>  

</nav>
