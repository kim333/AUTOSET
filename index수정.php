<!doctype html>
<html lang="ko">

<head>
    
<meta charset="utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=960">
<script src="./js/html5.js"></script>
<link rel="stylesheet" href="./css/main.css"/>
    <link rel="stylesheet" href="./css/mmain.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<title>Main</title>
    
<script>
    $(document).ready(function(){
    $(".rimg").click(function(){
    /*$("#hmenu").css('display','block');*/
    $(".rimg").css('display','none');
    $(".rimg2").css('display','block');
    $("#hmenu").slideDown("slow");  
    });
    });
</script>
<script>
    $(document).ready(function(){
    $(".rimg2").click(function(){
    /*$("#hmenu").css('display','block');*/
    $(".rimg2").css('display','none');
    $(".rimg").css('display','block');
    $("#hmenu").slideUp("slow");  
    });
    });
    </script>
</head>

<body style="margin:0;">
<header id="navb">
    <div class="klogo">
        <span>MOLRA</span>
    </div>
    <div class="rimg">
        <img style="cursor:pointer;"src="img/3bu.png"/>
    </div>
    <div class="rimg2">
        <img style="cursor:pointer;"src="../img/3bu.png"/>
    </div>
</header>
     <div id="hmenu">
        <div class="signup">
            <span>회원 가입을 하시면 서비스들을 모두 이용 하실 수 있습니다. 회원가입 먼저 해주세요.</span>
            <div class="hbtn">
                회원 가입
            </div>
        </div>
        </div>
    </div>
<div id="container">
    <div class="loginf">
        <div class="llogo">
        <span>MOLRA</span>
        </div>

        <form action="login.php" method="post">
            <div class="idbox">
                <label style="display:none; ">아이디</label>
                <input type="text" name="username" class="box" placeholder="ID" required style="-ms-ime-mode: disabled; ime-mode: disabled;" accesskey="L" maxlength="30"/>
            </div>
            <div class="pwbox">
                 <label style="display:none;">패스워드</label>
                <input type="password" name="password" class="box" placeholder="PASSWORD" required style="-ms-ime-mode: disabled; ime-mode: disabled;" accesskey="L" maxlength="30"/>
            </div>
        <div id="ind">
        <div class="gaip">
            <span>회원 가입</span>
        </div>
        <div class="find">
            <span>아이디/비밀번호 찾기</span>
        </div>
        </div>
        <!--<div class="lbt" onclick="document.submitform.submit()";>
            <span>Go!</span>
        </div>-->
            <input type="submit" value="로그인" style="border=1; border-style:solid; background-color:white; border-radius:10%; width:150px; height:40px; margin-left: 85px; margin-right: 30px;; margin-top:30px;"/>
        </form>
        
    </div>
</div>
</body>
    
</html>
