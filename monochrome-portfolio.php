<span style="font-weight: bold; font-size: 12px;">
<?php 
  $color = explode(", ", get_additional('Colors','mPortfolio'));
  $names = explode(", ", get_additional('Colors','mPortfolioNames'));
  if ($color[0] == "red") {
    echo "<span style='color: #85040a;'>";
  } elseif ($color[0] == "orange") {
    echo "<span style='color: #bd6813;'>";
  } elseif ($color[0] == "yellow") {
    echo "<span style='color: #abab16;'>";
  } elseif ($color[0] == "green") {
    echo "<span style='color: #18ab16;'>";
  } elseif ($color[0] == "blue") {
    echo "<span style='color: #162aab;'>";
  } elseif ($color[0] == "purple") {
    echo "<span style='color: #6b0d85;'>";
  } elseif ($color[0] == "brown") {
    echo "<span style='color: #733509;'>";
  } else {
    echo "<span>";
  }
  if (in_array("one", $color)) {
    echo "🗹 $names[0]";
  } else {
    echo "❑ $names[0]";
  }
  echo " | ";
  if (in_array("two", $color)) {
    echo "🗹 $names[1]";
  } else {
    echo "❑ $names[1]";
  }
  echo " | ";
  if (in_array("three", $color)) {
    echo "🗹 $names[2]";
  } else {
    echo "❑ $names[2]";
  }
  echo " | ";
  if (in_array("four", $color)) {
    echo "🗹 $names[3]";
  } else {
    echo "❑ $names[3]";
  }
  echo "<br />";
  if (in_array("five", $color)) {
    echo "🗹 $names[4]";
  } else {
    echo "❑ $names[4]";
  }
  echo " | ";
  if (in_array("six", $color)) {
    echo "🗹 $names[5]";
  } else {
    echo "❑ $names[5]";
  }
  echo " | ";
  if (in_array("seven", $color)) {
    echo "🗹 $names[6]";
  } else {
    echo "❑ $names[6]";
  }
  echo " | ";
  if (in_array("eight", $color)) {
    echo "🗹 $names[7]";
  } else {
    echo "❑ $names[7]";
  }
?>
</span></span>
