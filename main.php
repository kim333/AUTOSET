<!-- 이거는 따로 main 폴더 만들어서 안에 넣어주세요.-->
<!doctype html>
<html lang="ko">

<head>
    
<meta charset="utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=960">
<script src="./js/html5.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="../css/main.css"/>
<link rel="stylesheet" href="../css/mmain.css"/>    
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

<body style="margin:0; background-color:#f6f6f6;">
<header id="navb">
    <div class="klogo">
        <span>MOLRA</span>
    </div>
    <div class="rimg">
        <img style="cursor:pointer;"src="../img/3bu.png"/>
    </div>
     <div class="rimg2">
        <img style="cursor:pointer;"src="../img/3bu.png"/>
    </div>
</header>
    <div id="hmenu">
        <div class="mitem">
            <span>소 개</span>
        </div>
        <div class="mitem">
            <span>제품 설명</span>
        </div>
        <div class="mitem">
            <span>게 시 판</span>
        </div>
        <div class="mitem">
            <span>나의 제품</span>
        </div>
         <div class="mitem">
            <span>Q/A</span>
        </div>
         <div class="mitem">
            <span>내 정보</span>
        </div>
    </div>
</body>
</html>
