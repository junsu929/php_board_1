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
        a:link{text-decoration:none; color:#000000;}
        a:visited{text-decoration:none; color:#000000;}
        a:active{text-decoration:none; color:#000000;}
        a:hover{text-decoration:none; color:#000000;}
        #nav_bar{
            margin-top:30px;
            padding-top:30px;
            width:100%;
            height:80px;
            background-color:antiquewhite;
            font-size:1.3em;
    
        }
        #question_banner{
            margin-top:30px;
            padding:50px;
            padding-left:200px;
            padding-right:200px;
        }
        #question_banner_row{
            margin-top:10px;
            text-align:center;
        }


    
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="nav" id="nav_bar">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <a href="board.php"><strong>게시판</strong></a>
                </div>
                <div class="col-md-3">
                    <a href="login.php"><strong>로그인</strong></a>

                </div>
                <div class="col-md-3">
                    <a href="question.php"><strong>문의사항</strong></a>

                </div>
                <div class="col-md-1"></div>


            
             </div>
        </div> 
        <div class="row" id="question_banner"> 
            <p class="text-center"><strong>문의사항</strong></p>
            <form method="POST" action="">
            <div class="row" id="question_banner_row">
                <select class="form-control">
                    <option>가입/로그인 문의 </option>
                    <option>게시판 문의 </option>
                    <option>유저 신고   </option>
                </select>
            </div>
            <div class="row" id="question_banner_row">
                <textarea class="form-control" row="5" placeholder="문의사항을 적어주세요."></textarea>

            </div>
            <div class="row" id="question_banner_row">
                    <button class="btn btn-primary">보내기</button>
            </div>
            

            </form>
        </div>



    </div> <!-- container 마지막-->




</body>
</html>