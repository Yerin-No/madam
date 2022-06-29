<style>
    footer{ height: 100px; background-color: rgb(255, 200, 200); margin-bottom: 0;}
    /* 안에 배피는 absolute를 사용할 것이어서 부모뷰는 relative */
    #footer_content{position: relative; width: 1000px; margin: 0 auto; color: #000000;}
    #footer_logo{position: absolute; top: 30px; left: 50px; font-size: 16px;}
    #footer_logo span{color: rgb(255, 255, 0);}
    #download{position: absolute; top: 20px; left: 400px;}
    #download a{color:blue;}
    #author{position: absolute; top: 20px; left: 700px;}
    <body style="font-family: 'EarlyFontDiary';" >
  <style type="text/css">
    /* 상단 색 */
    .jumbotron { background-color: rgb(255, 213, 222); }
    /* 제목폰트색 */
    a:hover { color:rgb(255, 95, 175); }

    /* 폰트 설정 */
    @font-face { font-family: 'EarlyFontDiary';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_220508@1.0/EarlyFontDiary.woff2') format('woff2');
    font-weight: normal; font-style: normal; }

    @font-face {
    font-family: 'PyeongChangPeace-Light';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2206-02@1.0/PyeongChangPeace-Light.woff2') format('woff2');
    font-weight: 300; font-style: normal; }

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

<footer style="font-family: 'PyeongChangPeace-Light';">
<div class="jumbotron text-center" style="margin-bottom: 0; background-color: rgb(255, 205, 213)" >
  <p>MD - 마음의 담소</p>
  Back-end : 노예린 &nbsp;&nbsp;
  Front-end : 진이지 &nbsp;&nbsp;
  Design : 정나라, 진이지 <p></p>
  <strong><a href="../developer.html">💌 Email information</a></strong>
  
</div>
</footer>