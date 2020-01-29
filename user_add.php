<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style>
        a{
            pointer-events: none;
            color: black;
        }
        #nav_bar{
            margin-top:30px;
            padding-top:30px;
            width:100%;
            height:80px;
            background-color:antiquewhite;
            font-size:1.3em;
        }
        #login{
            margin-top:30px;
            padding-bottom:10px;
            background-color:azure;
            text-align: center;
    
        }
        #login-button{
            padding-top:8px;
        }
        #login-group{
            margin-bottom: 5px;
            margin-top:10px;
        }

    </style>

    <title>유저 등록</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="nav" id="nav_bar">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <a herf="board.php"><strong>게시판</strong></a>
                </div>
                <div class="col-md-3">
                    <a herf="login.php"><strong>로그인</strong></a>

                </div>
                <div class="col-md-3">
                    <a herf="question.php"><strong>문의사항</strong></a>

                </div>
                <div class="col-md-1"></div>


            
             </div>
        </div> 

        <!-- 로그인 폼 -->
        <div class="row" id="login">
            <label><strong> 회원가입 </strong></label>
            <form method="POST" action="user_add_action.php">
                <div class="row" id="login-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" placeholder="아이디" name="id">

                    </div>
                    <div class="col-md-4"></div>

                </div>

                <div class="row" id="login-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input class="form-control" type="password" placeholder="비밀번호" name="password">

                    </div>
                    <div class="col-md-4"></div>


                </div>

                <div class="row" id="login-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input class="form-control" type="mail" placeholder="메일주소" name="email">

                    </div>
                    <div class="col-md-4"></div>


                </div>

                <div class="row" id="login-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" placeholder="이름" name="name">

                    </div>
                    <div class="col-md-4"></div>


                </div>

                <div class="row" id="login-button">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary"> 회원가입 </button>

                    </div>
                    <div class="col-md-4"></div>
                    
                </div>

                



            </form>


        </div>



    </div> <!-- container 마지막-->

    
    
</body>
</html>