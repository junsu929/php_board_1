<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title>php 게시판</title>

    <style>
        a{
            color: black;
        }
        a:active{
            color:black;
        }
        #nav_bar{
            margin-top:30px;
            padding-top:30px;
            width:100%;
            height:80px;
            background-color:antiquewhite;
            font-size:1.3em;
    
        }
        #banner{
          margin-top:30px;
          border: 1px solid black;  
        }


    
    </style>
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
                    <a href="question.html"><strong>문의사항</strong></a>

                </div>
                <div class="col-md-1"></div>


            
             </div>
        </div> 
        <div class="row" id="banner"> 
            <p class="text-center"><strong>배너창</strong></p>

        </div>



    </div> <!-- container 마지막-->




</body>
</html>