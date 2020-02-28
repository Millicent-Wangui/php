<?php
//php conditional statements
//conditional statements are used to perform different actions based on different conditions
//to allow your code to perform diff actions based on diff variables
//php has the following if conditional statements
//
//1.if statement-executes some code if one condition is true
//syntax
//if(condition)
//   code to execute if the condition is true
//}
$name="Johndoe";
$password="pass1234";
$age="17";
if($name=='Johndoe'and $password!='pass1234'){
    echo "Login successful";//will run if true
}
if($age<'18') {
    echo "Go home and study hard <br>";
}
//if else executes some code if a condition is true and false if another code is false
if($name=='Johndoe'and $password!='pass1234'){
    echo "Login successful <br>";//will run if true
} else{
    echo "Login  <br>";//WILL RUN IF FALSE

//IF...ELSEIF....ELSE STATEMENT EXECUTES DIFF CODES FOR MORE THAN TWO CONDITIONS
//IF(condition 1)
//    code to execute if true;
//elseif(condition 2){
//    code to execute if true;
//elseif(condition 3)
//    code to execute if true;
//else{
//    code to execute above conditions are false
//}
$country="China";
if($country=='Kenya'){
   echo "Covid_19 not present <br>";
}elseif ($country=='Tanzania') {
    echo "Covid_19 not present <br>";
}elseif($country=='China'){
  echo "Covid_19 present <br>";
}else{
echo "covid_19 is a pandemic <br>";
}
}

//switch statement
//it selects one of many blocks to be executed
//switch (n){}
//  case label 1:
//   code to execute if n =label 1
//     break
//  case label 2:
//   code to execute if n =label 2
//     break
//  case label 3:
//   code to execute if n =label 3
//     break
//  default{
//code to execute if the above conditions are false
// }
//
//}
$fav_color="blue";
switch($fav_color){
    case 'blue':
        echo"Blue is my fav color";
        break;
    case 'red':
        echo"Red is my fav color";
        break;
    case 'black':
        echo"Black is my fav color";
        break;
    default;
        echo "none of the above is my fav color";

}
//for loops
//functions
//arrays



























?>
