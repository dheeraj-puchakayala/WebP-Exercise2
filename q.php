<?php
$con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
$sql = "SELECT c.course_name, s.link FROM courses as c, search as s WHERE c.courseid=s.courseid";
$row = mysqli_query($con,$sql);

//get the q parameter from URL
$q='h';

//lookup all links from the xml file if length of q>0

if (strlen($q)>0) {
  $hint="";
  while($res = mysqli_fetch_array($row)) {
    $y=$res[0];
    $z=$res[1];
    if ($y) {
      //find a link matching the search text
      if (stristr($y,$q)) {
        if ($hint=="") {
          $hint="<a href='//"  .
          $z.
          "' target='_blank'>" .
          $y . "</a>";
        } else {
          $hint=$hint . "<br /><a href='//" .
          $z .
          "' target='_blank'>" .
          $y. "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>