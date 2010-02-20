<?php
// CyBerFuN.ro & xList.ro

// xList .::. Last Torrents Block
// http://tracker.cyberfun.ro/
// http://www.cyberfun.ro/
// http://xlist.ro/
// Modified By CyBerNe7

global $CURUSER;
if (!$CURUSER || $CURUSER["view_torrents"] == "no")
   {
    // do nothing
   }
else
    {
  global $BASEURL, $STYLEPATH, $dblist, $XBTT_USE, $btit_settings;

  block_begin(LAST_TORRENTS);

  ?>
  <table cellpadding="4" cellspacing="1" width="100%">
  <?php

  if ($XBTT_USE)
     $sql = "SELECT f.free as free, f.image as img, f.info_hash as hash, f.seeds+ifnull(x.seeders,0) as seeds , f.leechers + ifnull(x.leechers,0) as leechers, dlbytes AS dwned, format(f.finished+ifnull(x.completed,0),0) as finished, filename, url, info, UNIX_TIMESTAMP(data) AS added, c.image, c.name AS cname, category AS catid, size, external, uploader FROM {$TABLE_PREFIX}files as f LEFT JOIN xbt_files x ON f.bin_hash=x.info_hash LEFT JOIN {$TABLE_PREFIX}categories as c ON c.id = f.category WHERE f.leechers + ifnull(x.leechers,0) + f.seeds+ifnull(x.seeders,0) > 0 ORDER BY data DESC LIMIT " . $GLOBALS["block_last10limit"];
  else
     $sql = "SELECT f.free as free, f.image as img, info_hash as hash, seeds, leechers, dlbytes AS dwned, format(finished,0) as finished, filename, url, info, UNIX_TIMESTAMP(data) AS added, c.image, c.name AS cname, category AS catid, size, external, uploader FROM {$TABLE_PREFIX}files as f LEFT JOIN {$TABLE_PREFIX}categories as c ON c.id = f.category WHERE leechers + seeds > 0 ORDER BY data DESC LIMIT " . $GLOBALS["block_last10limit"];

     $row = do_sqlquery($sql) or err_msg($language["ERROR"],$language["CANT_DO_QUERY"].mysql_error());
  ?>
  <tr>
      <td align="center" width="20" class="header">&nbsp;<?php echo $language["DOWN"]; ?>&nbsp;</td>
    <td align="center" width="55%" class="header">&nbsp;<?php echo $language["TORRENT_FILE"]; ?>&nbsp;</td>
    <td align="center" width="45" class="header">&nbsp;<?php echo $language["CATEGORY"]; ?>&nbsp;</td>
<?php
if (max(0,$CURUSER["WT"])>0)
    print("<td align=\"center\" width=\"20\" class=\"header\">&nbsp".$language["WT"]."&nbsp;</td>");
?>
    <td align="center" width="85" class="header">&nbsp;<?php echo $language["ADDED"]; ?>&nbsp;</td>
    <td align="center" width="60" class="header">&nbsp;<?php echo $language["SIZE"]; ?>&nbsp;</td>
    <td align="center" width="30" class="header">&nbsp;<?php echo $language["SHORT_S"]; ?>&nbsp;</td>
    <td align="center" width="30" class="header">&nbsp;<?php echo $language["SHORT_L"]; ?>&nbsp;</td>
    <td align="center" width="40" class="header">&nbsp;<?php echo $language["SHORT_C"]; ?>&nbsp;</td>
  </tr>
  <?php

  if ($row)
  {
      while ($data=mysql_fetch_array($row))
      {
      echo "<tr>";
          if ( strlen($data["hash"]) > 0 )
          {
      echo "\n\t<td align=\"center\" class=\"lista\" width=\"20\" style=\"text-align: center;\">";
      echo "<a href=\"download.php?id=".$data["hash"]."&amp;f=" . rawurlencode($data["filename"]) . ".torrent\"><img src='images/torrent.gif' border='0' alt='".$language["DOWNLOAD_TORRENT"]."' title='".$language["DOWNLOAD_TORRENT"]."' /></a>";
      echo "</td>";

       $data["filename"] = unesc($data["filename"]);
       $filename = cut_string($data["filename"], intval($btit_settings["cut_name"]));
//free leech hack

    $free_picture = '';
     $res = get_result("SELECT * FROM {$TABLE_PREFIX}files  WHERE `external`='no'", true);

    $free = '';
    if($data['free'] == yes)
    {
    $free = '<img src="images/freeleech.gif" alt="free leech"/>';
    }
// end free leech
// Start baloon hack DT
$hover = ($data["img"]);
if ($hover == "")
 $balon = ("nocover.jpg");
 else
 $balon = ($data["img"]);
// End baloon hack DT

       if ($GLOBALS["usepopup"])
           echo "\n\t<td width=\"45%\" class=\"lista\" style=\"padding-left:10px;\"><a href=\"javascript:popdetails('index.php?page=torrent-details&amp;id="  . $data['hash'] . "');\" onmouseover=\" return overlib('<img src=".$GLOBALS["uploaddir"]."/" . $balon . " width=200 border=0>', CENTER);\" onmouseout=\"return nd();\">" . $filename . "</a>".($data["external"]=="no"?"":" (<span style=\"color:red\">Multi.</span>)")."</td>";
       else
     echo "\n\t<td width=\"45%\" class=\"lista\" style=\"padding-left:10px;\"><a href=\"index.php?page=torrent-details&amp;id=" . $data['hash'] . "\" onmouseover=\" return overlib('<img src=".$GLOBALS["uploaddir"]."/" . $balon . " width=200 border=0>', CENTER);\" onmouseout=\"return nd();\">" . $filename . "</a>".($data["external"]=="no"?"":" (<span style=\"color:red\">Multi.</span>)")."</td>";
       echo "\n\t<td align=\"center\" class=\"lista\" width=\"45\" style=\"text-align: center;\"><a href=\"index.php?page=torrents&amp;category=$data[catid]\">" . image_or_link( ($data["image"] == "" ? "" : "$STYLEPATH/images/categories/" . $data["image"]), "", $data["cname"]) . "</a></td>";

    //waitingtime
    // only if current user is limited by WT
    if (max(0,$CURUSER["WT"])>0)
        {
          $wait=0;
          $resuser=do_sqlquery("SELECT * FROM {$TABLE_PREFIX}users WHERE id=".$CURUSER["uid"]);
          $rowuser=mysql_fetch_array($resuser);
          if (max(0,$rowuser['downloaded'])>0) $ratio=number_format($rowuser['uploaded']/$rowuser['downloaded'],2);
          else $ratio=0.0;
          $res2 =do_sqlquery("SELECT * FROM {$TABLE_PREFIX}files WHERE info_hash='".$data["hash"]."'");
          $added=mysql_fetch_array($res2);
          $vz = sql_timestamp_to_unix_timestamp($added["data"]);
          $timer = floor((time() - $vz) / 3600);
          if($ratio<1.0 && $rowuser['id']!=$added["uploader"]){
              $wait=$CURUSER["WT"];
          }
          $wait -=$timer;
          if ($wait<=0)$wait=0;

          echo "\n\t<td align=\"center\" width=\"20\" class=\"lista\" style=\"text-align: center;\">".$wait." h</td>";
        }
    //end waitingtime

             echo "\n\t<td nowrap=\"nowrap\" class=\"lista\" align=\"center\" width=\"85\" style=\"text-align: center;\">" . get_elapsed_time($data["added"]) . " ago</td>";
             echo "\n\t<td nowrap=\"nowrap\" class=\"lista\" align=\"center\" width=\"60\" style=\"text-align: center;\">" . makesize($data["size"]) . "</td>";

           if ( $data["external"] == "no" )
            {
              if ($GLOBALS["usepopup"])
                {
                echo "\n\t<td align=\"center\" class=\"".linkcolor($data["seeds"])."\" style=\"text-align: center;\"><a href=\"javascript:poppeer('index.php?page=peers&amp;id=".$data["hash"]."');\" title=\"".$language["PEERS_DETAILS"]."\">" . $data["seeds"] . "</a></td>\n";
                echo "\n\t<td align=\"center\" class=\"".linkcolor($data["leechers"])."\" style=\"text-align: center;\"><a href=\"javascript:poppeer('index.php?page=peers&amp;id=".$data["hash"]."');\" title=\"".$language["PEERS_DETAILS"]."\">" .$data["leechers"] . "</a></td>\n";
                if ($data["finished"]>0)
                   echo "\n\t<td align=\"center\" class=\"lista\" style=\"text-align: center;\"><a href=\"javascript:poppeer('index.php?page=torrent_history&amp;id=".$data["hash"]."');\" title=\"History - ".$data["filename"]."\">" . $data["finished"] . "</a></td>";
                else
                    echo "\n\t<td align=\"center\" class=\"lista\" style=\"text-align: center;\">---</td>";

                }
              else
                {
                echo "\n\t<td align=\"center\" class=\"".linkcolor($data["seeds"])."\" style=\"text-align: center;\"><a href=\"index.php?page=peers&amp;id=".$data["hash"]."\" title=\"".$language["PEERS_DETAILS"]."\">" . $data["seeds"] . "</a></td>\n";
                echo "\n\t<td align=\"center\" class=\"".linkcolor($data["leechers"])."\" style=\"text-align: center;\"><a href=\"index.php?page=peers&amp;id=".$data["hash"]."\" title=\"".$language["PEERS_DETAILS"]."\">" .$data["leechers"] . "</a></td>\n";
                if ($data["finished"]>0)
                   echo "\n\t<td align=\"center\" class=\"lista\" style=\"text-align: center;\"><a href=\"index.php?page=torrent_history&amp;id=".$data["hash"]."\" title=\"History - ".$data["filename"]."\">" . $data["finished"] . "</a></td>";
                else
                    echo "\n\t<td align=\"center\" class=\"lista\">---</td>";

                }
            }
           else
             {
               // linkcolor
               echo "\n\t<td align=\"center\" width=\"30\" class=\"".linkcolor($data["seeds"])."\" style=\"text-align: center;\">" . $data["seeds"] . "</td>";
               echo "\n\t<td align=\"center\" width=\"30\" class=\"".linkcolor($data["leechers"])."\" style=\"text-align: center;\">" .$data["leechers"] . "</td>";
               if ($data["finished"]>0)
                  echo "\n\t<td align=\"center\" width=\"40\" class=\"lista\" style=\"text-align: center;\">" . $data["finished"] . "</td>";
               else
                   echo "\n\t<td align=\"center\" class=\"lista\" style=\"text-align: center;\">---</td>";

        }
           echo "</tr>\n";
           }
      }
  }
  else
  {
    echo "\n<tr><td class=\"lista\" colspan=\"9\" align=\"center\" style=\"text-align: center;\">" . $language["NO_TORRENTS"] . "</td></tr>";
  }

  print("\n</table>");

  block_end();

} // end if user can view
?>
