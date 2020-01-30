<?php
// include를 통해 기존의 db연결 코드를 가져온다.
include "./db_connect.php";

// 디버깅을 위한 코드
error_reporting(E_ALL);
ini_set("display_errors",1);

// 정보를 받기 전 데이터 정의
$num = 0;
$id = null;
$password = null;
$email = null;
$name = null;

// user_add.php로 부터 정보 받기
$id = $_POST['id'];
$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];

// 비어있는 정보 검출.
if($id == NULL || $password == NULL){ // 아이디와 패스워드가 비어있는 경우.
    echo '<script> 
            alert("필요한 정보가 누락되어 있습니다.);
            location.replace("./user_add.php");
            </script>';
}else{// 아이디와 패스워드가 비어있지 않은 경우.

    // sql 쿼리를 담는 변수 작성.
    $sql_query = "INSERT INTO USER(NUM,ID,PASSWORD,EMAIL,NAME)
    VALUES('$num','$id','$password','$email','$name')";
    $result = mysqli_query($db,$sql_query); // sql 쿼리 실행.

    mysqli_close($db); // db의 연결 종료.

    // 회원가입이 성공되었다는 메세지를 보여주고 main.php로 이동.
    echo '<script>
    alert("회원가입이 완료되었습니다.);
    location.replace("./main.php");
    </script>';



}


?>