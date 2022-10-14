<span style="font-weight: bold; font-size: 12px;">
<?php 
  $decks = explode(", ", get_additional('Colors','pPortfolio'));
  $names = explode(", ", get_additional('Colors','pPortfolioNames'));
  echo "<span style='color: #85040a;'>";
  if (in_array("red", $decks)) {
    echo "🗹 $names[0]";
  } else {
    echo "❑ $names[0]";
  }
  echo "</span> | ";
  echo "<span style='color: #bd6813;'>";
  if (in_array("orange", $decks)) {
    echo "🗹 $names[1]";
  } else {
    echo "❑ $names[1]";
  }
  echo "</span> | ";
  echo "<span style='color: #abab16;'>";
  if (in_array("yellow", $decks)) {
    echo "🗹 $names[2]";
  } else {
    echo "❑ $names[2]";
  }
  echo "</span> | ";
  echo "<span style='color: #18ab16;'>";
  if (in_array("green", $decks)) {
    echo "🗹 $names[3]";
  } else {
    echo "❑ $names[3]";
  }
  echo "</span><br />";
  echo "<span style='color: #162aab;'>";
  if (in_array("blue", $decks)) {
    echo "🗹 $names[4]";
  } else {
    echo "❑ $names[4]";
  }
  echo "</span> | ";
  echo "<span style='color: #6b0d85;'>";
  if (in_array("purple", $decks)) {
    echo "🗹 $names[5]";
  } else {
    echo "❑ $names[5]";
  }
  echo "</span> | ";
  echo "<span style='color: #733509;'>";
  if (in_array("brown", $decks)) {
    echo "🗹 $names[6]";
  } else {
    echo "❑ $names[6]";
  }
  echo "</span> | ";
  if (in_array("gray", $decks)) {
    echo "🗹 $names[7]";
  } else {
    echo "❑ $names[7]";
  }
?>
</span>
