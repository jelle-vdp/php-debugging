<?php
declare(strict_types=1);


// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}


new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);


new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);


new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array


new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
// $arr = [];


function combineNames($str1 = "", $str2 = "") {
        $params = [$str1, $str2];
        if ($params[0] == "") {
            $params[0] = randomHeroFirstName();
        }
        if ($params[1] == "") {
            $params[1] = randomHeroLastName();
        }
    return ucwords(implode(" ", $params));
};

function randomHeroFirstName()
{
    $heroes_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    return $heroes_firstnames[rand(0,count($heroes_firstnames) - 1)];
}

function randomHeroLastName()
{
    $heroes_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    return $heroes_lastnames[rand(0,count($heroes_lastnames) - 1)];
}

echo "Here is the name: " . combineNames();


new_exercise(7);
function copyright(int $year) {
    echo "&copy; $year BeCode";
}
//print the copyright
copyright(idate('Y'));


new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    } else if ($email == 'john@example.be' && $password != 'pocahontas') {
        return 'Wrong password John';
    } else {
        return 'Login failed';
    }
}

//do not change anything below
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
echo " / ";
//no access
echo login('john@example.be', 'dfgidfgdfg');
echo " / ";
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!


new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) > -1) {
            echo 'Unacceptable Found<br />';
            return;
        }
    }
    echo 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');