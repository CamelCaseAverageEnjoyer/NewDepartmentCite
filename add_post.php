<?php
    $date = (string) $_POST["news_date"];
    $title = (string) $_POST["news_title"];
    $text = (string) $_POST["news_text"];
    $img_src = "i.webp";
    

    $filename = 'storage/data.json';
    $json = file_get_contents($filename);
    $json_data = json_decode($json, TRUE);

    echo "1<br>";
    echo gettype($title) . " " . $title . "<br>";
    $new_data = '{"date":"'.$date.'","title":"'.$title.'","text":"'.$text.'","img_more":["'.$img_src.'"], "img_src":"'.$img_src.'"}';
    # $new_data = '[{"date":1,"title":2,"text":3,"img_more","img_src":"i.webp"}]';
    # $new_data = '{"date":1,"title":2}';
    $obj = json_decode($new_data, TRUE);
    print_r($obj);
    echo "<br><br>";
    # $json_data[] = ["date"=>"$date","title"=>"$title","text"=>"$text","img_more"=>"$img_src", "img_src"=>"$img_src"]
    print_r($json_data);
    $json_data = array_merge_recursive($json_data, $new_data);
    echo "1<br>";

    foreach ($json_data as $news){
    $whole_text = $news->text;
    $part_text = mb_substr($whole_text, 0, 300)."...";
    print_r($news);
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

    # file_put_contents($filename, json_encode($json_data));
