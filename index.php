<?php
  $lng = "en";
  $title = "Home";
  $keywords = "celectial, dynamic, satellite, spacecraft, kiam, KIAM, keldysh, ras, RAS";
  $description = "";
  $author = "";
  require_once "blocks/header.php";
?>

<div class="row">
  <div class="navbar">
    <a href="#">Link</a>
    <a href="#">Link</a>
    <a href="#">Link</a>
  </div>
  <div class="main">
    <div  class="label_center"><label>Форма для новой новости</label></div>
    <div class="container">
    <form action="add_post.php" method="post">
      <input type="text" id="text_form"  name="news_title" placeholder="Заголовок" height="500">
      <input type="date" id="start" name="news_date" value="2016-06-29" min="2016-06-29" max="2025-01-01" />
      <textarea name="news_text" cols="100" rows="20"></textarea>
      <input type="submit" value="Отправить" class="btn btn-success">
    </form>
    </div>
  </div>
  <div class="main2">
  <?php
  // Read the JSON file
  $filename = 'storage/data.json';
  $json = file_get_contents($filename);
  $json_data = json_decode($json);

  // Display data
  foreach ($json_data as $news){
    $whole_text = $news->text;
    $part_text = mb_substr($whole_text, 0, 300)."...";
    echo "<table>
            <tr>
            <th>
            <image class='post-image' src='images/".$news->img_src."' width='300'/></th>
            <th>
                <h3 class='title'>".$news->title."</h3>
                <div class='post-body'>
                    <div class='post-text'>".$part_text."</div>
                </div>
            </th>
            </tr>
        </table> ";
  }
  echo "<br>Конец новостей";
  ?>
  </div>
</div>

<?php
  require_once "blocks/footer.php";
?>
