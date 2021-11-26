<?php
$effectiveDate= date("Y-m-d");
echo "Current Date => ".$effectiveDate;
echo "<br>";

$threemonnths = date('Y-m-d', strtotime("+3 months", strtotime($effectiveDate)));
echo "+3 months => ".$threemonnths;
echo "<br>";

$sixmonnths = date('Y-m-d', strtotime("+6 months", strtotime($effectiveDate)));
echo "+6 months => ".$sixmonnths;
echo "<br>";

$twelvemonnths = date('Y-m-d', strtotime("+12 months", strtotime($effectiveDate)));
echo "+12 months => ".$twelvemonnths;
echo "<br>";
?>