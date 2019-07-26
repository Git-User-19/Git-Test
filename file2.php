<?php
/*
 * Filename: file2.php
 Cron using influencer_master table as below:
-Cron that run everyday once
-Queries the database for all influencers that are suspended (Get all records whose status is 3 [suspended] and suspendflag = W/M [Week/Month])
-Update "status=1(Active)" in influencer_master table to check whether suspension time finished.
*/


echo "This is just for testing";
echo "second file";
//===========================
?>
