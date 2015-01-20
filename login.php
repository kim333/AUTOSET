<?php

	//세션을 사용하기 위해 선언하는 부분
	session_cache_limiter('');

	//데이터베이스에 접근하기 위한 부분

$db_host="localhost";

$db_user="root";

$db_pass="autoset";

$db_name="project2";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

/*if(mysqli_connect_errno($conn))
{

echo "database connect failed";

}else
{

echo "database connect success";

}*/


	//아이디와 비밀번호의 값을 POST방식으로 받는 것

	$id = $_POST['username'];

	$pass = $_POST['password'];

	

	//입력받은 아이디가 존재하는지 체크하기 위해 데이터베이스에서 id를 가져옴

	$getID = "SELECT id FROM id_list WHERE id='$id'";

	$getID = mysqli_query($conn,$getID);
    
	$getID = mysqli_fetch_array($getID, MYSQLI_ASSOC);

	

	//아이디가 있다면

	if($getID['id']) {

		//아이디를 바탕으로 그 아이디가 가진 곳의 비밀번호를 가져온다

		$getPASS = "SELECT password FROM id_list WHERE id='$id'";
		$getPASS = mysqli_query($conn,$getPASS);
       
		$getPASS = mysqli_fetch_array($getPASS, MYSQLI_ASSOC);
		//데이터베이스에서 가져온 비밀번호가 입력받은 비밀번호와 같다면,

		if($getPASS['password'] == $pass) {

			//64자리의 무작위 문자열을 생성한다.

			//이 64자리의 임의의 수가 바로 토큰으로 로그인 대조에 사용할 키 값.
            header("location: ./main/main.php");
		}

		else {

			echo "<script>alert('패스워드가 다릅니다.');</script>";
            echo "<script>history.back();</script>";
			return 1;

		}

	}

	

	else {

		echo "<script>alert('아이디가 존재하지 않습니다.');</script>";
        echo "<script>history.back();</script>";
		return 1;

	}


?>
