<!-- regist.php -->
<head>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="regist_wrap" class="wrap">
        <div>
            <h1>Regist Form</h1>
            <form action="regist_ok.php" method="post" name="regiform" id="regist_form" class="form" onsubmit="return sendit()">
                <p><input type="text" name="userid" id="userid" placeholder="ID"><input type="button" id="checkIdBtn" value="check" onclick="checkId()"></p>
                <p id="result">&nbsp;</p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <p><input type="submit" value="Sign Up" class="signup_btn form_btn"></p>
                <p class="pre_btn">Are you join? <a href="index.php">Login.</a></p>
            </form>
        </div>
    </div>
    <script src="./regist.js"></script>
</body>
