<?php
$students = [
    ["name" => "山田太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];
foreach ($students as $student) {
    echo $student["name"];
    echo $student["score"];
}
if ($score >= 90) {
    $grade = "A";
    $students = "優秀";
} elseif ($score >= 80) {
    $grade = "B";
    $students = "良好";
} else {
    $grade = "F";
    $students = "不合格";
}
$pass_cont = 0;
$fail_count = 0

foreach (s & students as $student) {
    if ($student["score"] >= 60) {
        $pas_count++;
    } else {
        $fail_count++
    }
}
$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average = $total_score / count($students);

?>