<?php

  $Q1 = $_GET['questionnaire1'];
  $Q2 = $_GET['questionnaire2'];
  $Q3 = $_GET['questionnaire3'];

  $array = array('性別', '年齢', $Q1, $Q2, $Q3);

  $file = fopen('data/data.csv', 'a');
  flock($file, LOCK_EX);
  fputcsv($file, $array);
  flock($file, LOCK_UN);
  fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <form action="create.php" method="GET">
    <fieldset>
      <legend>アンケート</legend>
        <div>
          <input type="radio" name="gender" value="男性">男性
          <input type="radio" name="gender" value="女性">女性
        </div>
        <div>
          <input type="radio" name="age" value="10代">10代
          <input type="radio" name="age" value="20代">20代
          <input type="radio" name="age" value="30代">30代
          <input type="radio" name="age" value="40代">40代
          <input type="radio" name="age" value="50代">50代
        </div>
        <label>
          <div >
            <?=$Q1?>
          </div>
            <input type="radio" name="answer1" value="yes">yes
            <input type="radio" name="answer1" value="no">no
        </label>
        <label>
          <div>
            <?=$Q2?>
          </div>
            <input type="radio" name="answer2" value="yes">yes
            <input type="radio" name="answer2" value="no">no
        <label>
        </label>
          <div>
            <?=$Q3?>
          </div>
            <input type="radio" name="answer3" value="yes">yes
            <input type="radio" name="answer3" value="no">no
        </label>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

  <script>
    
  </script>

</body>

</html>