<?php

    // # 인사말1
    // echo "안녕하세요. <br>";
    // print "대림대학교의 ";
    // print "최예은 입니다." . "<br>"; //문자열 결합 연산자 .
    

    # 인사말2 함수를 호출
    // 호출은 어디서 하던 상관 없습니다.
    // 매개변수 ↓
    hello("최예은");


    #목록, 내장함수 확인
    $funcs = get_defined_functions(); // 함수의 목록을 배열로 저장.
    echo "<pre>";
    print_r($funcs);
    echo "</pre>";

    #조건문
    if(function_exists("hello")){
        echo "hello 함수가 존재합니다.";
    } else {
        echo "hello 함수가 없습니다.";
    }
    

    # 인사말3
    // 코드를... 묶고싶다. => 중괄호를 이용한다. `{` ~~~~~~~~~~~~~ `}` => 함수의 선언.

    // 들여쓰기 tab / 스페이스 4칸 으로 지정!
    // 입력 () , 여러개의 값이 전달될 수 있음
    // 출력 , return
    function hello($name)
    {
        // $name 이라는 변수가 함수 내에 생성됨.
        echo "안녕하세요. <br>";
        print "대림대학교의 ";
        print $name . " 입니다~. ^^" . "<br>";
        return true;
    }
    // 시용하려면 호출(실행)이 필요하다.
    hello("루비");