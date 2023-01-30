// regist.js
const sendit = () => {
	// Input들을 각각 변수에 대입
    const userid = document.regiform.userid;
	const userpw = document.regiform.userpw;
    
    // userid값이 비어있으면 실행.
    if(userid.value == '') {
        alert('아이디를 입력해주세요.');
        userid.focus(); // 커서 이동
        return false;
    }
    // userid값이 4자 이상 12자 이하를 벗어나면 실행.
    if(userid.value.length < 4 || userid.value.length > 12){
        alert("아이디는 4자 이상 12자 이하로 입력해주세요.");
        userid.focus();
        return false;
    }
    // userpw값이 비어있으면 실행.
    if(userpw.value == '') {
        alert('비밀번호를 입력해주세요.');
        userpw.focus();
        return false;
    }
    // userpw값이 6자 이상 20자 이하를 벗어나면 실행.
    if(userpw.value.length < 6 || userpw.value.length > 20){
        alert("비밀번호는 6자 이상 20자 이하로 입력해주세요.");
        userpw.focus();
        return false;
    }
	// 유효성 검사 정상 통과 시 true 리턴 후 form 제출.
    return true;
}

const checkId = () => {
	// userid, result 변수에 대입
    const userid = document.regiform.userid;
    const result = document.querySelector('#result');
    
    // 중복체크 시에 한번 더 userid 입력값 체크
    if(userid.value == '') {
        alert('아이디를 입력해주세요.');
        userid.focus();
        return false;
    }
    if(userid.value.length < 4 || userid.value.length > 12){
        alert("아이디는 4자 이상 12자 이하로 입력해주세요.");
        userid.focus();
        return false;
    }
    
    // Ajax를 사용한 아이디 중복 체크
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        if(xhr.readyState == XMLHttpRequest.DONE) {
            if(xhr.status == 200) {
                let txt = xhr.responseText.trim();
                if(txt == "O") {
                    result.style.display = "block";
                    result.style.color = "green";
                    result.innerHTML = "사용할 수 있는 아이디입니다.";
                } else {
                    result.style.display = "block";
                    result.style.color = "red";
                    result.innerHTML = "중복된 아이디입니다.";
                    userid.focus();
                    // 키 입력 시 result 숨김 이벤트
                    userid.addEventListener("keydown", function(){
                        result.style.display = "none";
                    });
                }
            }
        }
    }
    xhr.open("GET", "checkId_ok.php?userid="+userid.value, true);
    xhr.send();
}