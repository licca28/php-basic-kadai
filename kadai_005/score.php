<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_005
     </title>
 </head>
 
 <body>
     <p>
     <?php
 $score1 = 80;
 $score2 = 60;
 $score3 = 55;
 $score4 = 40;
 $score5 = 100;
 $score6 = 25;
 $score7 = 80;
 $score8 = 95;
 $score9 = 30;
 $score10 = 60;

 // 合計点を計算する
 $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

 echo "合計点: " . $total . "<br>";

 // 平均点を計算（合計点 / 教科数）
 $average = $total / 10;

 echo "平均点: " . $average;
 ?>
</body>
</html>