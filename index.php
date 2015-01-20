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
<title>Main</title>
</head>

<body style="margin:0;">
<header id="navb">
    <div class="klogo">
        <span>MOLRA</span>
    </div>
    <div class="rimg">
        <img style="cursor:pointer;"src="img/3bu.png"/>
    </div>
</header>
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
            <input type="submit" value="로그인" style="border=0; background-color:white; border-radius:10%; width:150px; height:40px; margin-left: 30px; margin-right: 30px;; margin-top:10px;"/>
        </form>
        
    </div>
</div>
</body>
    
</html>