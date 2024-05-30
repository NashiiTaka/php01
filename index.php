<?php
$datas = [];
if (($handle = fopen("data/data.txt", "r")) !== FALSE) {
  while (($data = fgetcsv($handle)) !== FALSE) {
    $datas[] = $data;
  }
  fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List</title>
  <style type="text/css">
    th , td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>No.</th>
        <th>お名前</th>
        <th>EMAIL</th>
        <th>年齢</th>
        <th>解答</th>
        <th>解答時間</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($iRow = 0; $iRow < count($datas); $iRow++) {
        echo "<tr>";
        echo "<td>$iRow</td>";
        for ($iCol = 0; $iCol < count($datas[$iRow]); $iCol++) {
          echo "<td>" . htmlspecialchars($datas[$iRow][$iCol], ENT_QUOTES) . "</td>";
        }
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <a href="post.php">解答フォーム</a><br />
  <a href="https://javascript-dojo.vercel.app/">JavaScript道場</a>
</body>
</html>