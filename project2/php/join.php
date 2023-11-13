<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "../include/head.php"?>

    <title>뮤지컬 회원가입</title>

</head>

<body>
    <header id="header">
        <h1 class="logo">
            <a href="main.html">myuduck</a>
        </h1>
        <nav class="category">
            <ul>
                <li><a href="theater.html">Theater</a></li>
                <li><a href="musical.html">Musical</a></li>
                <li><a href="actor.html">Actor</a></li>
            </ul>
        </nav>

        <div class="header_ham">
            <div class="navbar_overlay"></div>
            <div class="navbar_burger">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </div>
            <div class="navbar_menu">
                <ul>
                    <li><a href="#" class="m">마이페이지</a>
                        <ul class="submenu">
                            <li><a href="#" class="m">나의 찜 목록</a></li>
                            <li><a href="#" class="m">회원 정보 수정</a></li>
                        </ul>
                    </li>

                    <li><a href="#" class="m">로그인</a></li>
                    <li><a href="#" class="m">문의하기</a></li>
                    <li><a href="#" class="m">회원탈퇴</a></li>
                </ul>
                <div class="navbar_burger_back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="join__inner3">
            <h2 class="blind">회원가입</h2>
            <div class="join__from2 container2">
                <h3>회원가입 <span>Sing up</span></h3>
                <form action="#" name="#" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div>
                            <label for="youID" class="required blind">아이디</label>
                            <input type="text" name="youID" id="youID" placeholder="아이디" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required blind">비밀번호 확인</label>
                            <input type="password" name="youPassC" id="youPassC" placeholder="비밀번호 확인" class="input__style" required>
                        </div>
                        <div>
                            <label for="youName" class="required">이름 *</label>
                            <input type="text" name="youName" id="youName" placeholder="이름을 입력하세요" class="input__style" required>
                        </div>
                        <div>
                            <label for="youEmail" class="required">이메일 *</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일을 입력하세요" class="input__style" required>
                        </div>
                        <button type="submit" class="join_btn btn-style3">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>

        </section>
        
    </main>
    <!-- //main-->

    <?php "../css/join.css" ?>
    <!-- footer -->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="../script/checkBox.js"></script>

</body>
</html>