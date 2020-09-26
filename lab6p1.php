<?php
mysqli_connect("localhost", "sferroli", "shalinyo", "sferroli")
or die(mysql_error());
echo "";
?>

<html>
<head>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</head>
<body>
<center>
<h1> Lab 6 </h1>
<br>
<hr>
<br>
</center>
<table border=\"1\" align=\"center\">
<tr><th>Subject</th>
<th>Location</th>
<th>Date Taken</th>
</tr>

<tr><td>Ridges Moraine Walk</td>
<td>Richmond Hill, Ontario</td>
<td>September 2016</td>

</tr>

<tr><td>Ian Reid Side Trail</td>                                           <td>Burlington, Ontario</td>
<td>August 2016</td>

</tr>

<tr><td>Glen Major Loop Trail</td>
<td>Uxbridge, Ontario</td>
<td> May 2016</td>

</tr>

<tr><td>Kabeyun Trail</td>
<td>Thunder Bay District, Ontario</td>
<td>October 2018</td>

</tr>
</table>
<div class='container' style='width: 50%; '>
<center>
<h1>Here are some fun pictures!</h1>
</center>
<div id='caro' class='carousel slide' data-ride='carousel'>
<ol class='carousel-indicators'><li data-target='#caro' data-slide-to='0' class='active'></li><li data-target='#caro' data-slide-to='1'></li><li data-target='#caro' data-slide-to='2'></li><li data-target='#caro' data-slide-to='3'></li></ol><div class='carousel-inner'><div class='item active'><img src='https://cdn-assets.alltrails.com/uploads/photo/image/11902041/extra_large_3f8a2aa2bef85bfe0a19e6fd139151bc.jpg' style='width: 100%; height: 400px; max-height: 500px; margin-left: auto; margin-right: auto;'>
        <div class='carousel-caption'>
        <h1>Ian Reid Side Trail</h1>
        <p>Located in Burlington, Ontario.</p>
        </div>
        </div><div class='item'>
        <img src='https://cdn-assets.alltrails.com/uploads/photo/image/22731156/extra_large_78f79ac9d8e878cae52a3dfc6c20a58e.jpg' setyle='width: 100%; height: 400px; max-height: 400px; margin-left: auto; margin-right: auto;'>
        <div class='carousel-caption'>
        <h1>Glen Major Loop Trail</h1>
        <p>Located in Uxbridge, Ontario.</p>
        </div>
        </div><div class='item'>
        <img src='https://cdn-assets.alltrails.com/uploads/photo/image/24417444/extra_large_a2bfb4f5ffdd42d7e2f3ba4a50ba9ff6.jpg' style='width: 100%; height: 400px; max-height: 400px; margin-left: auto; margin-right: auto;'>
        <div class='carousel-caption'>
        <h1>Fruits</h1>
        <p>Located in Toronto, Ontario.</p>
        </div>
        </div><div class='item'>
        <img src='https://cdn-assets.alltrails.com/uploads/photo/image/21007790/extra_large_1a9b0da7c6c6d79783ba8f1302790d2f.jpg' style='width: 100%; height: 400px; max-height: 400px; margin-left: auto; margin-right: auto;'>
        <div class='carousel-caption'>
        <h1>Kabeyun Trail</h1>
        <p>Located in Thunder Bay District, Ontario.</p>
        </div>
        </div></div>
<a class='left carousel-control' href='#caro' data-slide='prev'>
<span class='glyphicon glyphicon-chevron-left'></span>
<span class='sr-only'>Previous</span>
</a>
<a class='right carousel-control' href='#caro' data-slide='next'>
<span class='glyphicon glyphicon-chevron-right'></span>
<span class='sr-only'>Next</span>
</a>
</div>
</body>
</html>