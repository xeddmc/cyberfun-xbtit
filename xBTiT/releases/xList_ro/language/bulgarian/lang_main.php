<?php
global $users, $torrents, $seeds, $leechers, $percent;
// $language["rtl"]="rtl"; // if your language is  right to left then uncomment this line
// $language["charset"]="ISO-8859-1"; // uncomment this line with specific language charset if different than tracker's one
$language["ACCOUNT_CONFIRM"]="������������� �� ����������� � $SITENAME.";
$language["ACCOUNT_CONGRATULATIONS"]="������������! ������ ������ � ���� �������!<br />���� ������ �� <a href=index.php?page=login>��������</a> � ����� ���� ���������� ������ ��� � ������.";$language["ACCOUNT_CREATE"]="������ ������";
$language["ACCOUNT_DELETE"]="������ ������";
$language["ACCOUNT_DETAILS"]="������� �� �������";
$language["ACCOUNT_EDIT"]="������� ������";
$language["ACCOUNT_MGMT"]="������� ������";
$language["ACCOUNT_MSG"]="���������,\n\n���� email ���� �������� ,������ ����� � ����������� ������ ��� ��� � ���� email �����.\n��� �� ��� ���� ��� ���� ����������� ���� email, ��� ���� ���������� \n\n�������� �� �����.";
$language["ACTION"]="��������";
$language["ACTIVATED"]="�������";
$language["ACTIVE"]="������";
$language["ACTIVE_ONLY"]="��������� ����";
$language["ADD"]="������";
$language["ADDED"]="�������";
$language["ADMIN_CPANEL"]="���������������� �����";
$language["ADMINCP_NOTES"]="�� ��� ������ �� ������������ ������ ��������� �� �������...";
$language["ALL"]="������";
$language["ALL_SHOUT"]="������";
$language["ANNOUNCE_URL"]="������ ������ url:";
$language["ANONYMOUS"]="��������";
$language["ANSWER"]="��������";
$language["AUTHOR"]="�����";
$language["AVATAR_URL"]="������ (url): ";
$language["AVERAGE"]="������";
$language["BACK"]="�����";
$language["BAD_ID"]="������ ID!";
$language["BCK_USERCP"]="������� ��� �������������� �����";
$language["BLOCK"]="����";
$language["BODY"]="����";
$language["BOTTOM"]="����";
$language["BY"]="��";
$language["CANT_DELETE_ADMIN"]="���������� � �� �������� ���� �����!";
$language["CANT_DELETE_NEWS"]="������ ����� �� ������ ������!";
$language["CANT_DELETE_TORRENT"]="������ ����� �� �������� ���� ������!...";
$language["CANT_DELETE_USER"]="������ ����� �� �������� ���� ����������!";
$language["CANT_DO_QUERY"]="�� ���� �� �� ������� SQL ������ - ";
$language["CANT_EDIT_TORR"]="������ ����� �� ��������� ���� ������!";
$language["CANT_FIND_TORRENT"]="���� ������ �����!";
$language["CANT_READ_LANGUAGE"]="���������� ��������� �� �������� ����!";
$language["CANT_SAVE_CONFIG"]="���������� ��������� �� ����������� � config.php";
$language["CANT_SAVE_LANGUAGE"]="���������� ��������� �� �������� ����";
$language["CANT_WRITE_CONFIG"]="��������: ���������� ��������� � config.php!";
$language["CATCHUP"]="�������� ������ ���� ���������";
$language["CATEGORY"]="���.";
$language["CATEGORY_FULL"]="���������";
$language["CENTER"]="������";
$language["CHANGE_PID"]="����� PID";
$language["CHARACTERS"]="�����";
$language["CHOOSE"]="������";
$language["CHOOSE_ONE"]="������ ����";
$language["CLICK_HERE"]="����� ���";
$language["CLOSE"]="�������";
$language["COMMENT"]="���.";
$language["COMMENT_1"]="��������";
$language["COMMENT_PREVIEW"]="������� �� ���������";
$language["COMMENTS"]="���������";
$language["CONFIG_SAVED"]="������������, ������ ������������ ���� ��������";
$language["COUNTRY"]="�������";
$language["CURRENT_DETAILS"]="������� �������";
$language["DATABASE_ERROR"]="������ � ������ �����.";
$language["DATE"]="����";
$language["DB_ERROR_REQUEST"]="������ � ������ �����. �� ���� �� �� ������� ��������.";
$language["DB_SETTINGS"]="��������� �� ������ �����";
$language["DEAD_ONLY"]="���� ���������";
$language["DELETE"]="������";
$language["DELETE_ALL_READED"]="������ ������ ���������";
$language["DELETE_CONFIRM"]="������� �� ��� �� ������ �� ��������/���������� ����?";
$language["DELETE_TORRENT"]="������ ������";
$language["DELFAILED"]="������ ��� ���������";
$language["DESCRIPTION"]="��������";
$language["DONT_NEED_CHANGE"]="���� ����� �� ��������� ���� ���������!";
$language["DOWN"]="��";
$language["DOWNLOAD"]="��������";
$language["DOWNLOAD_TORRENT"]="����� ������";
$language["DOWNLOADED"]="������";
$language["EDIT"]="�������";
$language["EDIT_LANGUAGE"]="������� �����";
$language["EDIT_POST"]="������� �����";
$language["EDIT_TORRENT"]="������� ������";
$language["EMAIL"]="Email";
$language["EMAIL_SENT"]="���� ���������� ����� �� ����� email �����<br />�������� �� ����� �� �� ����������.";
$language["EMAIL_VERIFY"]="email ������ �������� � $SITENAME";
$language["EMAIL_VERIFY_BLOCK"]="������������� ����� ���������";
$language["EMAIL_VERIFY_MSG"]="���������,\n\n���� ����� �� � ��������� ��� ������ � �������� �� �� ������� email-a ��, ���� �������� ������ �� �� ����������.\n\n�������� �� �����.";
$language["EMAIL_VERIFY_SENT1"]="<br /><center>������������� ����� ���� ��������� ��:<br /><br /><strong><font color=\"red\">";
$language["EMAIL_VERIFY_SENT2"]="</font></strong><br /><br />�� ������ �� �������� �� ����� �  email-� �� ��<br />��������� email ������ ��. �mail-�� ������ �� ��������� �� 10 ������<br />(��������� �������) ������� ���� email-�� ���� �� ���� �������� ���� ����<br />������ ���� ��������� � ���� �������� � ������ �� ��� �� �������� �����.<br /><br />";
$language["ERR_500"]="HTTP/1.0 500 ���������� ������!";
$language["ERR_AVATAR_EXT"]="��������� ������� ���� �� gif,jpg,bmp ��� png";
$language["ERR_BAD_LAST_POST"]="";
$language["ERR_BAD_NEWS_ID"]="������ ID �� ��������!";
$language["ERR_BODY_EMPTY"]="������ �� ���� �� ���� ������!";
$language["ERR_CANT_CONNECT"]="�� ���� �� �� ������ � �������� MySQL ������";
$language["ERR_CANT_OPEN_DB"]="�� ���� �� ������ ������ �����";
$language["ERR_DB_ERR"]="������ � ������ �����. ���� �������� �� � ����� �� ����� �� ����.";
$language["ERR_DELETE_POST"]="������ �����. ��������: ������ �� �������� �����. ����";
$language["ERR_DELETE_TOPIC"]="������ ����. ��������: ������ �� �������� ����. ����";
$language["ERR_EMAIL_ALREADY_EXISTS"]="���� Email ���� ���������� � ������ ����!";
$language["ERR_EMAIL_NOT_FOUND_1"]="�mail �����";
$language["ERR_EMAIL_NOT_FOUND_2"]="�� ���� ������� � ������ �����.";
$language["ERR_ENTER_NEW_TITLE"]="������ �� �������� ���� ��������!";
$language["ERR_FORUM_NOT_FOUND"]="������� �� � ������";
$language["ERR_FORUM_UNKW_ACT"]="������� ������: ��������� ��������";
$language["ERR_GUEST_EXISTS"]="'����' � �������� ���. �� ���� �� �� ������������ ���� '����'";
$language["ERR_IMAGE_CODE"]="���� �� ��������� �� �������";
$language["ERR_INS_TITLE_NEWS"]="������ �� �������� ����� �������� � ������";
$language["ERR_INV_NUM_FIELD"]="Invalid numerical field(s) from client";
$language["ERR_INVALID_CLIENT_EVENT"]="Invalid event= from client.";
$language["ERR_INVALID_INFO_BT_CLIENT"]="��������� ���������� ������ �� BitTorrent �������";
$language["ERR_INVALID_IP_NUMB"]="��������� IP �����. ������ �� ���� ���������� � ����� (hostnames �� �� ���������)";
$language["ERR_LEVEL"]="���������, ������ ����� ";
$language["ERR_LEVEL_CANT_POST"]="������ ����� �� �������� ��� ���� �����.";
$language["ERR_LEVEL_CANT_VIEW"]="������ ����� �� ������� �� ������.";
$language["ERR_MISSING_DATA"]="�������� ����������!";
$language["ERR_MUST_BE_LOGGED_SHOUT"]="������ �� ��� ������ �� �� ������...";
$language["ERR_NO_BODY"]="���� ����� � ������";
$language["ERR_NO_NEWS_ID"]="ID-�� �� �������� �� � �������!";
$language["ERR_NO_POST_WITH_ID"]="���� ������� � ID ";
$language["ERR_NO_SPACE"]="����� �� �� ���� �� ������� ������ �����, ���� �������� �� � ����� ����:<br /><br />";
$language["ERR_NO_TOPIC_ID"]="������ � ID �� ������";
$language["ERR_NO_TOPIC_POST_ID"]="���� ���� �������� � ���� ���� ID";
$language["ERR_NOT_AUTH"]="������ ����������!";
$language["ERR_NOT_FOUND"]="�� � ������...";
$language["ERR_NOT_PERMITED"]="������ ����������";
$language["ERR_PASS_LENGTH"]="<font color=\"black\">������ ������ ������ �� ���� �� ������� 4 �������.</font>";
$language["ERR_PASSWORD_INCORRECT"]="������ ������";
$language["ERR_PERM_DENIED"]="������ �������";
$language["ERR_PID_NOT_FOUND"]="���� ������� ������� ������. PID ��������� � ���������� � � ������� �� �� ��������";
$language["ERR_RETR_DATA"]="������ ��� ���������� �� ����������!";
$language["ERR_SEND_EMAIL"]="���������� ��������� �� �������. ���� �������� �� � ����� �� ����� �� ����.";
$language["ERR_SERVER_LOAD"]="������������� �� ������� � ��������� ������. ���� ���������...";
$language["ERR_SPECIAL_CHAR"]="<font color=\"black\">����� �� �� ���� �� ������� ��������� ������� ����:<br /><br /><font color=\"red\"><strong>* ? < > @ $ & % etc.</strong></font></font><br />";
$language["ERR_SQL_ERR"]="SQL ������";
$language["ERR_SUBJECT"]="������ �� �������� ����.";
$language["ERR_TOPIC_ID_NA"]="ID-�� �� ������ � ����������";
$language["ERR_TOPIC_LOCKED"]="������ � ���������";
$language["ERR_TORRENT_IN_BROWSER"]="���� ���� � �� BitTorrent �������.";
$language["ERR_UPDATE_USER"]="���������� ������� �� ��������������� ����������. ���� �������� �� � ����� �� ����� �� ����.";
$language["ERR_USER_ALREADY_EXISTS"]="��������������� ��� ���� ����������!";
$language["ERR_USER_NOT_FOUND"]="���� ����� ����������";
$language["ERR_USER_NOT_USER"]="������ ����� �� ����������� ������� �� ����� �����������!";
$language["ERR_USERNAME_INCORRECT"]="������ ������������� ���";
$language["ERROR"]="������";
$language["ERROR_ID"]="Error ID";
$language["FACOLTATIVE"]="��������������";
$language["FILE"]="����";
$language["FILE_CONTENTS"]="���������� �� �����";
$language["FILE_NAME"]="��� �� �����";
$language["FIND_USER"]="������ ����������";
$language["FINISHED"]="��������";
$language["FORUM"]="�����";
$language["FORUM_ERROR"]="����� ������";
$language["FORUM_INFO"]="����� ����";
$language["FORUM_MIN_CREATE"]="��� ���� ���������";
$language["FORUM_MIN_READ"]="��� ���� ������";
$language["FORUM_SEARCH"]="����� �������";
$language["FORUM_N_TOPICS"]="�. ����";
$language["FORUM_N_POSTS"]="�. �������";
$language["FRM_DELETE"]="������";
$language["FRM_LOGIN"]="����";
$language["FRM_PREVIEW"]="�������";
$language["FRM_REFRESH"]="������";
$language["FRM_RESET"]="�������";
$language["FRM_SEND"]="�������";
$language["FRM_CONFIRM"]="��������";
$language["FRM_CANCEL"]="������";
$language["FRM_CLEAN"]="�������";
$language["GLOBAL_SERVER_LOAD"]="����������� �� ������� (������ ������� �� �������)";
$language["GO"]="�����";
$language["GROUP"]="�����";
$language["GUEST"]="����";
$language["GUESTS"]="�����";
$language["HERE"]="���";
$language["HISTORY"]="�������";
$language["HOME"]="������";
$language["IF_YOU_ARE_SURE"]="��� ��� �������.";
$language["IM_SURE"]="������� ���";
$language["IN"]="�";
$language["INF_CHANGED"]="������� ����������!";
$language["INFINITE"]="�����.";
$language["INFO_HASH"]="���";
$language["INS_NEW_PWD"]="�������� ���� ������!";
$language["INS_OLD_PWD"]="�������� ������� ������!";
$language["INSERT_DATA"]="�������� �������� ����� ���������� �� ���������.";
$language["INSERT_NEW_FORUM"]="������ ��� �����";
$language["INVALID_ID"]="�� � ������� ID. ���������!";
$language["INVALID_INFO_HASH"]="��������� ���.";
$language["INVALID_PID"]="��������� PID";
$language["INVALID_TORRENT"]="������ ������: ��������� ������";
$language["KEYWORDS"]="������� ����";
$language["LAST_EXTERNAL"]="���������� �������� �� �������� ������� ���� �� ";
$language["LAST_NEWS"]="�������� ������";
$language["LAST_POST_BY"]="�������� ���� ��";
$language["LAST_SANITY"]="���������� �������� ���� �� ";
$language["LAST_TORRENTS"]="���������� �������";
$language["LAST_UPDATE"]="�������� ������";
$language["LASTPOST"]="�������� ����";
$language["LEECHERS"]="�������";
$language["LEFT"]="����";
$language["LOGIN"]="����";
$language["LOGOUT"]="�����";
$language["MAILBOX"]="����";
$language["MANAGE_NEWS"]="�������� �� ��������";
$language["MEMBER"]="����������";
$language["MEMBERS"]="�����������";
$language["MEMBERS_LIST"]="������ � �������������";
$language["MINIMUM_100_DOWN"]="(� ������� 100 �� �������)";
$language["MINIMUM_5_LEECH"]="� ������� 5 �������, �� ������� ��������� �������";
$language["MINIMUM_5_SEED"]="� ������� 5 �������";
$language["MKTOR_INVALID_HASH"]="������ ���";
$language["MNU_ADMINCP"]="����� �����";
$language["MNU_FORUM"]="�����";
$language["MNU_INDEX"]="������";
$language["MNU_MEMBERS"]="�����������";
$language["MNU_NEWS"]="������";
$language["MNU_STATS"]="����������";
$language["MNU_TORRENT"]="�������";
$language["MNU_UCP_CHANGEPWD"]="����� ������";
$language["MNU_UCP_HOME"]="������������� �����";
$language["MNU_UCP_IN"]="������ ������� ��-��";
$language["MNU_UCP_INFO"]="������� ������";
$language["MNU_UCP_NEWPM"]="���� ��";
$language["MNU_UCP_OUT"]="������ �������� ��-��";
$language["MNU_UCP_PM"]="������ �� �����";
$language["MNU_UPLOAD"]="����";
$language["MORE_SMILES"]="��� ���������";
$language["MORE_THAN"]="������ �� ";
$language["MORE_THAN_2"]="��������, ��������� �� �������";
$language["NA"]="N/A";
$language["NAME"]="���";
$language["NEED_COOKIES"]="�������: ������� �� �������� cookies �� �� ��������.";
$language["NEW_COMMENT"]="������� ��������";
$language["NEW_COMMENT_T"]="��� ��������";
$language["NEWS"]="��������";
$language["NEWS_DESCRIPTION"]="������:";
$language["NEWS_INSERT"]="�������� ������";
$language["NEWS_PANEL"]="���������� �����";
$language["NEWS_TITLE"]="��������:";
$language["NEXT"]="�������";
$language["NO"]="��";
$language["NO_BANNED_IPS"]="���� ������� IP-��";
$language["NO_COMMENTS"]="��� ��� ���� ���������...";
$language["NO_FORUMS"]="���� ������!";
$language["NO_MAIL"]="������ ���� ���������.";
$language["NO_MESSAGES"]="���� �������� ��-��...";
$language["NO_NEWS"]="���� ������";
$language["NO_PEERS"]="���� �����";
$language["NO_RECORDS"]="�������� � ������...";
$language["NO_TOPIC"]="���� �������� ����";
$language["NO_TORR_UP_USER"]="����������� ���� ������ �������";
$language["NO_TORRENTS"]="���� �������...";
$language["NO_USERS_FOUND"]="���� �����������!";
$language["NOBODY_ONLINE"]="����� ������";
$language["NONE"]="�����";
$language["NOT_ADMIN_CP_ACCESS"]="������ ����� � ����� ������!";
$language["NOT_ALLOW_DOWN"]="���� ���������� �� �������� ��";
$language["NOT_AUTH_DOWNLOAD"]="������ ����� �� �������.";
$language["NOT_AUTH_VIEW_NEWS"]="������ ����� �� ����������� ��������!";
$language["NOT_AUTHORIZED"]="������ ����� �� �����������";
$language["NOT_AUTHORIZED_UPLOAD"]="������ ����� �� ������!";
$language["NOT_AVAILABLE"]="N/A";
$language["NOT_MAIL_IN_URL"]="���� �� � email ����� ���� � ���� url";
$language["NOT_POSS_RESET_PID"]="�� � �������� ������� �� PID-� ��! <br />�������� �� � �����...";
$language["NOW_LOGIN"]="���� ������ �� ��������";
$language["NUMBER_SHORT"]="#";
$language["OLD_PWD"]="����� ������";
$language["ONLY_REG_COMMENT"]="���� ������������ ����� �� ������ ���������!";
$language["OPT_DB_RES"]="������������ �� ������ �����";
$language["OPTION"]="�����";
$language["PASS_RESET_CONF"]="������������ �� ������������ �� ������";
$language["PEER_CLIENT"]="������";
$language["PEER_COUNTRY"]="�������";
$language["PEER_ID"]="���� ID";
$language["PEER_LIST"]="������ � �����";
$language["PEER_PORT"]="����";
$language["PEER_PROGRESS"]="�������";
$language["PEER_STATUS"]="������";
$language["PEERS"]="�����";
$language["PEERS_DETAILS"]="�������� ��� �� �������";
$language["PICTURE"]="�������";
$language["PID"]="PID";
$language["PLEASE_WAIT"]="���� ���������...";
$language["PM"]="��";
$language["POSITION"]="�������";
$language["POST_REPLY"]="��������";
$language["POSTED_BY"]="������� ��";
$language["POSTED_DATE"]="�������� ��";
$language["POSTS"]="�������";
$language["POSTS_PER_DAY"]="%s ������� �� ���";
$language["POSTS_PER_PAGE"]="������� �� ��������";
$language["PREVIOUS"]="����.";
$language["PRIVATE_MSG"]="����� ���������";
$language["PWD_CHANGED"]="������ �������!";
$language["QUESTION"]="������";
$language["QUICK_JUMP"]="���� ����";
$language["QUOTE"]="�������";
$language["RANK"]="����";
$language["RATIO"]="����������";
$language["REACHED_MAX_USERS"]="���������� ���� �����������";
$language["READED"]="�������";
$language["RECEIVER"]="���������";
$language["RECOVER_DESC"]="��������� ������� ������ �� ������������ �� �������� � �� �� ���� ��������� �������.<br />(������ �� ���������� �� �������������� email.)";
$language["RECOVER_PWD"]="��������� ������";
$language["RECOVER_TITLE"]="��������� ��� ��� ������";
$language["REDIRECT"]="��� ��������� �� ���� ������� javascript, ����";
$language["REDOWNLOAD_TORR_FROM"]="������� ������� ������ ��";
$language["REGISTERED"]="�����������";
$language["REGISTERED_EMAIL"]="����������� email";
$language["REMOVE"]="��������";
$language["REPLIES"]="��������";
$language["REPLY"]="�������";
$language["RESULT"]="��������";
$language["RETRY"]="������ ������";
$language["RETURN_TORRENTS"]="������� ��� ���������";
$language["REVERIFY_CONGRATS1"]="<center><br />������������, ������ email ���� ��������� � ������� ������<br /><br /><strong>��: <font color=\"red\">";
$language["REVERIFY_CONGRATS2"]="</strong></font><br /><strong>��: <font color=\"red\">";
$language["REVERIFY_CONGRATS3"]="</strong></font><br /><br />";
$language["REVERIFY_FAILURE"]="<center><br /><strong><font color=\"red\"><u>���� url �� � �������</u></strong></font><br /><br />���������� ����� �� �������� ����� ��� ���� ������� �� ������� email-� �� ���� ��<br />��� ������� ���� ��������� ���-�������� �� �������� �� ������� email-� ��<br />������ �� ������ � ���������� ������ url.<br /><br /><strong>���� ��������� ������ ��� ������� �� �� ��� �������� <br />������������� email ����� �� �������� �� ������� ����� email ������.</strong><br /><br />";
$language["REVERIFY_MSG"]="��� �� �������� �� ������� ����� email ����� �� �� ���� ��������� ����� �� ������������.<br /><br /><font color=\"red\"><strong>�mail ������� ���� �� ���� ������ ������ �� �� ����������.</strong></font>";
$language["RIGHT"]="�����";
$language["SEARCH"]="�����";
$language["SEEDERS"]="�������";
$language["SEEN"]="������";
$language["SELECT"]="������...";
$language["SENDER"]="��������";
$language["SENT_ERROR"]="������ ��� ���������";
$language["SHORT_C"]="�"; //Shortname for Completed
$language["SHORT_L"]="�"; //Shortname for Leechers
$language["SHORT_S"]="�"; //Shortname for Seeders
$language["SHOUTBOX"]="���";
$language["SIZE"]="��������";
$language["SORRY"]="�����������";
$language["SORTID"]="����������";
$language["SPEED"]="�������";
$language["STICKY"]="�����";
$language["SUB_CATEGORY"]="���-���������";
$language["SUBJECT"]="����";
$language["SUBJECT_MAX_CHAR"]="������ � �������� �� ";
$language["SUC_POST_SUC_EDIT"]="������ ���� ������� �������.";
$language["SUC_SEND_EMAIL"]="������������� emdil �� ���� ��������";
$language["SUC_SEND_EMAIL_2"]="���� ��������� ������� ������ ������ �������� email-�.";
$language["SUCCESS"]="�����";
$language["SUMADD_BUG"]="Tracker bug calling summaryAdd";
$language["TABLE_NAME"]="��� �� ���������";
$language["TIMEZONE"]="������� ����";
$language["TITLE"]="��������";
$language["TOP"]="������";
$language["TOP_10_ACTIVE"]="10 ���-������� �������";
$language["TOP_10_BEST_SEED"]="10 ������� � ���-����� �������";
$language["TOP_10_BSPEED"]="10 ������� � ���-����� �������";
$language["TOP_10_DOWNLOAD"]="��� 10 �����������";
$language["TOP_10_SHARE"]="��� 10 ���-����� �����������";
$language["TOP_10_UPLOAD"]="��� 10 ���������";
$language["TOP_10_WORST"]="��� 10 ���-���� �����������";
$language["TOP_10_WORST_SEED"]="10 Torrents Worst Seeders";
$language["TOP_10_WSPEED"]="10 ������� � ���-����� �������";
$language["TOP_TORRENTS"]="���-��������� �������";
$language["TOPIC"]="����";
$language["TOPICS"]="T���";
$language["TOPICS_PER_PAGE"]="T��� �� ��������";
$language["TORR_PEER_DETAILS"]="������� �� �������";
$language["TORRENT"]="������";
$language["TORRENT_ANONYMOUS"]="������� ���� ��������";
$language["TORRENT_CHECK"]="������� �� ������� �� �������� � �������� ���������� �� ������ �����.";
$language["TORRENT_DETAIL"]="������ �������";
$language["TORRENT_FILE"]="T����� ����";
$language["TORRENT_SEARCH"]="����� �������";
$language["TORRENT_STATUS"]="������";
$language["TORRENT_UPDATE"]="����������, ���� ���������...";
$language["TORRENTS"]="�������";
$language["TORRENTS_PER_PAGE"]="������� �� ��������";
$language["TRACK_DB_ERR"]="������/���� ����� ������. ��������� �� � ���� �� ������.";
$language["TRACKER_INFO"]="$users �����������, �������� $torrents ������� ($seeds ������� e $leechers �������, $percent%)";
$language["TRACKER_LOAD"]="����������� �� �������";
$language["TRACKER_SETTINGS"]="��������� �� �������";
$language["TRACKER_STATS"]="���������� �� �������";
$language["TRACKING"]="������������";
$language["TRAFFIC"]="������";
$language["UCP_NOTE_1"]="��� ������ �� ������������ ��������� �� �����, ������ ��-�� �� ����� �����������,";
$language["UCP_NOTE_2"]="������������ � ��������� ������ ���������, etc...";
$language["UNAUTH_IP"]="������������� IP �����.";
$language["UNKNOWN"]="����������";
$language["UPDATE"]="������";
$language["UPFAILED"]="���������� ����������";
$language["UPLOAD_IMAGE"]="���� �������";
$language["UPLOAD_LANGUAGE_FILE"]="���� ������ ����";
$language["UPLOADED"]="�����";
$language["UPLOADER"]="��������";
$language["UPLOADS"]="�����������";
$language["URL"]="URL";
$language["USER_CP"]="������� ������";
$language["USER_CP_1"]="������������� ��������� �����";
$language["USER_DETAILS"]="������������� �������";
$language["USER_EMAIL"]="������� email";
$language["USER_ID"]="������������� ID";
$language["USER_JOINED"]="����������� �� ��";
$language["USER_LASTACCESS"]="�������� ������";
$language["USER_LEVEL"]="����";
$language["USER_LOCAL_TIME"]="������� �����";
$language["USER_NAME"]="����������";
$language["USER_PASS_RECOVER"]="������/���������� �������������";
$language["USER_PWD"]="������";
$language["USERS_SEARCH"]="������� �� �����������";
$language["VIEW_DETAILS"]="��������� �������";
$language["VIEW_TOPIC"]="��������� ����";
$language["VIEW_UNREAD"]="��������� �������������";
$language["VIEWS"]="��������";
$language["VISITOR"]="���������";
$language["VISITORS"]="����������";
$language["WAIT_ADMIN_VALID"]="������ �� �������� �� ���������...";
$language["WARNING"]="��������!";
$language["WELCOME"]="���������";
$language["WELCOME_ADMINCP"]="����� ����� � ����������������� �����";
$language["WELCOME_BACK"]="��������� ������";
$language["WELCOME_UCP"]="����� ����� ��� �������������� �����";
$language["WORD_AND"]="�";
$language["WORD_NEW"]="���";
$language["WROTE"]="������";
$language["WT"]="WT";
$language["X_TIMES"]="����";
$language["YES"]="��";
$language["LAST_IP"]="�������� IP";
$language["FIRST_UNREAD"]="����� �� ������ ���������� ����";
$language["MODULE_UNACTIVE"]="��������� ����� � ���������!";
$language["MODULE_NOT_PRESENT"]="��������� ����� �� ����������!";
$language["MODULE_LOAD_ERROR"]="��������� ����� �������� � ������!";

$language["SIGNATURE"]="������";
?>