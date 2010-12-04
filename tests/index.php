<?php

// CyBerFuN.ro & xList.ro

// CyBerFuN .::. index
// http://tracker.cyberfun.ro/
// http://www.cyberfun.ro/
// http://xList.ro/
// http://xDnS.ro/
// http://yDnS.ro/
// Modified By cybernet2u

// CyBerFuN xBTiT Fully MoDDeD v1.2


// https://cyberfun-xbtit.svn.sourceforge.net/svnroot/cyberfun-xbtit/trunk/site

Index: trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/blocks/mainusertoolbar_block.php
===================================================================
--- trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/blocks/mainusertoolbar_block.php (revision 518)
+++ trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/blocks/mainusertoolbar_block.php (revision 562)
@@ -26,4 +26,12 @@
 print("</td><td class=\"yellow\" align=\"center\"> (<img src=\"images/arany.png\"> ".($CURUSER['downloaded'] > 0 ? number_format($CURUSER['uploaded'] / $CURUSER['downloaded'], 2):"---").")</td>\n");
 print("<td class=\"green\" align=\"center\"><a href=index.php?page=modules&module=seedbonus>(BON ".($CURUSER['seedbonus'] > 0 ? number_format($CURUSER['seedbonus'], 2):"---").")</a></td>\n");
+
+$full = "SELECT f.moder as moder, f.filename, f.info_hash, f.uploader as upname, u.username as uploader, c.image, c.name as cname, f.category as catid FROM {$TABLE_PREFIX}files f LEFT JOIN {$TABLE_PREFIX}users u ON u.id = f.uploader LEFT JOIN {$TABLE_PREFIX}categories c ON c.id = f.category";
+$sql = $full." WHERE moder='um'";
+$row = do_sqlquery($sql, true);
+$um_t = (int)mysql_num_rows($row);
+
+if ($CURUSER['moderate_trusted'] == 'yes')
+    print("<td align=\"center\"><a href=\"index.php?page=moder\">".$language["MODERATE_PANEL"]."</a> (".$um_t.")</td>");
 
 if ($CURUSER["admin_access"] == "yes")
Index: trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/blocks/serverload_block.php
===================================================================
--- trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/blocks/serverload_block.php (revision 127)
+++ trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/blocks/serverload_block.php (revision 604)
@@ -1,62 +1,88 @@
 <?php
-
-// CyBerFuN.ro & xList.ro
-
-// xList .::. ServerLoad Block
-// http://tracker.cyberfun.ro/
-// http://www.cyberfun.ro/
-// http://xlist.ro/
-// Modified By CyBerNe7
-
-block_begin("Trackerload");
+/////////////////////////////////////////////////////////////////////////////////////
+// xbtit - Bittorrent tracker/frontend
+//
+// Copyright (C) 2004 - 2007  Btiteam
+//
+//    This file is part of xbtit.
+//
+// Redistribution and use in source and binary forms, with or without modification,
+// are permitted provided that the following conditions are met:
+//
+//   1. Redistributions of source code must retain the above copyright notice,
+//      this list of conditions and the following disclaimer.
+//   2. Redistributions in binary form must reproduce the above copyright notice,
+//      this list of conditions and the following disclaimer in the documentation
+//      and/or other materials provided with the distribution.
+//   3. The name of the author may not be used to endorse or promote products
+//      derived from this software without specific prior written permission.
+//
+// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
+// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
+// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
+// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
+// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
+// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
+// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
+// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
+// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
+// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
+//
+////////////////////////////////////////////////////////////////////////////////////
 
 if (!function_exists("getmicrotime"))
 {
-   function getmicrotime(){
-       list($usec, $sec) = explode(" ", microtime());
-       return ((float)$usec + (float)$sec);
-       }
+    function getmicrotime()
+    {
+        list($usec, $sec) = explode(" ",microtime());
+        return ((float)$usec + (float)$sec);
+    }
 }
 
-$percent = min(100, round(@exec('ps ax | grep -c apache') / 256 * 10 ), 4);
+$percent = min(100, round(@exec('ps ax | grep -c apache') / 256 * 10 ),4);
 
 // try other method
 if ($percent == 0)
-    {
+{
     $time_start = getmicrotime();
-    $time = round(getmicrotime() - $time_start, 4);
+    $time = round(getmicrotime() - $time_start,4);
     $percent = $time * 60;
-    }
+}
 
-
-echo "<div align=\"center\">".$language["TRACKER_LOAD"].": ($percent %)</div><table class=\"blocklist\" align=\"center\" border=\"0\" width=\"400\"><tr><td style='padding: 0px; background-image: url(addons/serverload/loadbarbg.gif); background-repeat: repeat-x'>";
+echo "\n<div align='center'>".$language["TRACKER_LOAD"].": (".$percent."%)</div>\n<table class='blocklist' align='center' border='0' width='400'>\n<tr>\n<td style='padding: 0px; background-image: url(addons/serverload/loadbarbg.gif); background-repeat: repeat-x'>";
 
 //TRACKER LOAD
-if ($percent <= 70) $pic = "addons/serverload/loadbargreen.gif";
-elseif ($percent <= 90) $pic = "addons/serverload/loadbaryellow.gif";
-else $pic = "addons/serverload/loadbarred.gif";
-$width = $percent * 4;
-echo "<img height=\"15\" src=\"$pic\" alt=\"$percent%\" /></td></tr></table>";
-echo "<center>" . trim(@exec('uptime')) . "</center><br />";
+if ($percent <= 70)
+    $pic = "addons/serverload/loadbargreen.gif";
+elseif ($percent <= 90)
+    $pic = "addons/serverload/loadbaryellow.gif";
+else
+    $pic = "addons/serverload/loadbarred.gif";
+$width = $percent*4;
+echo "<img height='15' width='$width' src='$pic' alt='".$percent."%' /></td>\n</tr>\n</table>\n";
+echo "<center>" . trim(@exec('uptime')) . "</center><br />\n";
 
 if (isset($load))
-print("<tr><td class=\"blocklist\">10min load average (%)</td><td align=\"right\">$load</td></tr>\n");
+    print("<tr><td class='blocklist'>10min load average (%)</td><td align='right'>$load</td></tr>\n");
 print("<br />");
-$percent = min(100, round(@exec('ps ax | grep -c apache') / 256 * 50), 4);
+$percent = min(100, round(@exec('ps ax | grep -c apache') / 256 * 50),4);
 // try other method
 if ($percent == 0)
-    {
-    $time = round(getmicrotime() - $time_start, 4);
+{
+    $time = round(getmicrotime() - $time_start,4);
     $percent = $time * 60;
-    }
+}
 
-echo "<div align=\"center\">".$language["GLOBAL_SERVER_LOAD"].": ($percent %)</div><table class=\"main\" align=\"center\" border=\"0\" width=\"400\"><tr><td style='padding: 0px; background-image: url(addons/serverload/loadbarbg.gif); background-repeat: repeat-x'>";
+echo "<div align='center'>".$language["GLOBAL_SERVER_LOAD"].": (".$percent."%)</div>\n<table class='main' align='center' border='0' width='400'>\n<tr>\n<td style='padding: 0px; background-image: url(addons/serverload/loadbarbg.gif); background-repeat: repeat-x'>";
 
- if ($percent <= 70) $pic = "addons/serverload/loadbargreen.gif";
-  elseif ($percent <= 90) $pic = "addons/serverload/loadbaryellow.gif";
-   else $pic = "addons/serverload/loadbarred.gif";
-        $width = $percent * 4;
-echo "<img height=\"15\" src=\"$pic\" alt=\"$percent%\" /></td></tr></table><br /><br />";
-block_end();
+if ($percent <= 70)
+    $pic = "addons/serverload/loadbargreen.gif";
+elseif ($percent <= 90)
+    $pic = "addons/serverload/loadbaryellow.gif";
+else
+    $pic = "addons/serverload/loadbarred.gif";
+$width = $percent * 4;
+echo "<img height='15' width='$width' src='$pic' alt='".$percent."%' /></td>\n</tr>\n</table><br /><br />\n";
 print("<br />");
+
 ?>
Index: trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/user/usercp.profile.php
===================================================================
--- trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/user/usercp.profile.php (revision 490)
+++ trunk/CyBerFuN_xBTiT_Fully_MoDDeD_v1.2/user/usercp.profile.php (revision 627)
@@ -38,17 +38,17 @@
 {
     case 'post':
-           $idlangue=intval(0+$_POST["language"]);
-           $idstyle=intval(0+$_POST["style"]);
-           $email=AddSlashes($_POST["email"]);
-           $avatar=htmlspecialchars(AddSlashes($_POST["avatar"]));
-           $idflag=intval(0+$_POST["flag"]);
-           $timezone=intval($_POST["timezone"]);
+           $idlangue = intval(0 + $_POST["language"]);
+           $idstyle = intval(0 + $_POST["style"]);
+           $email = AddSlashes($_POST["email"]);
+           $avatar = str_replace(array('\t','%25','%00'), array('','',''), htmlspecialchars(AddSlashes($_POST["avatar"])));
+           $idflag = intval(0 + $_POST["flag"]);
+           $timezone = intval($_POST["timezone"]);
 
            // Password confirmation required to update user record
-           (isset($_POST["passconf"])) ? $password=md5($_POST["passconf"]) : $password="";
+           (isset($_POST["passconf"])) ? $password = md5($_POST["passconf"]) : $password="";
                       
-           $res=do_sqlquery("SELECT password FROM {$TABLE_PREFIX}users WHERE id=".$CURUSER["uid"],true);
-           if(mysql_num_rows($res)>0)
-               $user=mysql_fetch_assoc($res);           
+           $res = do_sqlquery("SELECT password FROM {$TABLE_PREFIX}users WHERE id=".$CURUSER["uid"],true);
+           if(mysql_num_rows($res) > 0)
+               $user = mysql_fetch_assoc($res);           
 
            if(!isset($user) || $password=="" || $user["password"]!=$password)
@@ -132,5 +132,5 @@
                // <--- Reverify Mail Hack by Petr1fied - End
                   {
-                  do_sqlquery("UPDATE {$TABLE_PREFIX}users SET $updateset WHERE id='".$uid."'",true);
+                  do_sqlquery("UPDATE {$TABLE_PREFIX}users SET $updateset WHERE id='".$uid."'", true);
 
                   success_msg($language["SUCCESS"], $language["INF_CHANGED"]."<br /><a href=\"index.php?page=usercp&amp;uid=".$uid."\">".$language["BCK_USERCP"]."</a>");
@@ -138,4 +138,6 @@
                   exit;
                   }
+                $_SESSION['user']['style_url'] = '';
+                $_SESSION['user']['language_path'] = '';
               }
     break;

?>