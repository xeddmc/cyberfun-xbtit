<?php
global $users, $torrents, $seeds, $leechers, $percent;
// $language["rtl"]="rtl"; // Εαν η γλώσσα είναι σωστή απο τα δεξιά προς τα αριστερά αποσχολιάσετε αυτη τη γραμμή
// $language["charset"]="ISO-8859-1"; // αποσχολιάσετε αυτή τη γραμμή με συγκεκριμένη γλώσσα χαρακτήρων εάν είναι διαφορετική απο αυτή του tracker
$language["ACCOUNT_CONFIRM"]="Επιβεβαίωση λογαριασμού στο $SITENAME site.";
$language["ACCOUNT_CONGRATULATIONS"]="Συγχαρητήρια ο λογαριασμός σας τώρα είναι έγκυρος!<br />Τώρα μπορείτε να <a href=index.php?page=login>συνδεθείτε</a> στο site χρησιμοποιώντας τον λογαριασμό σας.";
$language["ACCOUNT_CREATE"]="Δημιουργία λογαριασμού";
$language["ACCOUNT_DELETE"]="Διαγραφή λογαριασμού";
$language["ACCOUNT_DETAILS"]="Λεπτομέρειες λογαριασμού";
$language["ACCOUNT_EDIT"]="Επεξεργασία λογαριασμού";
$language["ACCOUNT_MGMT"]="Διαχείρηση λογαριασμού";
$language["ACCOUNT_MSG"]="Γειά σας,\n\nΑυτό το ηλεκ. ταχ. στάλθηκε γιατί κάποιος ζήτησε ένα λογαριασμό στο site μας με αυτή την ηλεκ. διεύθυνση.\nΕάν δεν είστε αυτός που το ζήτησε αγνοήστε αυτό το ηλεκ. ταχ. αλλιώς παρακαλώ επιβεβαιώστε τον λογαριασμό \n\nΤις καλύτερες ευχές απο το προσωπικό.";
$language["ACTION"]="Ενέργεια";
$language["ACTIVATED"]="Ενεργός";
$language["ACTIVE"]="Κατάσταση";
$language["ACTIVE_ONLY"]="Ενεργός μόνο";
$language["ADD"]="Πρόσθεσε";
$language["ADDED"]="Προστέθηκαν";
$language["ADMIN_CPANEL"]="Πίνακας ελέγχου διαχειρηστή";
$language["ADMINCP_NOTES"]="Εδώ μπορείτε να ελέγξετε όλες τις ρυθμίσεις του tracker...";
$language["ALL"]="Όλα";
$language["ALL_SHOUT"]="Όλα Shouts";
$language["ANNOUNCE_URL"]="Tracker ανακοινωθέν url:";
$language["ANONYMOUS"]="Ανώνυμος";
$language["ANSWER"]="Απάντηση";
$language["AUTHOR"]="Συγγραφέας";
$language["AVATAR_URL"]="Avatar (url): ";
$language["AVERAGE"]="Μέσος όρος";
$language["BACK"]="Πίσω";
$language["BAD_ID"]="Λάθος ταυτότητα!";
$language["BCK_USERCP"]="Πίσω στον πίνακα χρήστη";
$language["BLOCK"]="Block";
$language["BODY"]="Σώμα";
$language["BOTTOM"]="Κάτω";
$language["BY"]="Από";
$language["CANT_DELETE_ADMIN"]="Είναι αδύνατο να διαγράψετε άλλο διαχειριστή!";
$language["CANT_DELETE_NEWS"]="Δεν σου επιτρέπεται να διαγράψεις νέες ειδήσεις!";
$language["CANT_DELETE_TORRENT"]="Δεν σου επιτρέπεται να διαγράψεις αυτό το torrent!...";
$language["CANT_DELETE_USER"]="Δεν σου επιτρέπεται να διαγράψεις χρήστες!";
$language["CANT_DO_QUERY"]="Δεν μπορεί να κάνει SQL ερώτημα - ";
$language["CANT_EDIT_TORR"]="Δεν σου επιτρέπεται να επεξεργαστείς torrent!";
$language["CANT_FIND_TORRENT"]="Δεν μπορεί να βρεθεί torrent αρχείο!";
$language["CANT_READ_LANGUAGE"]="Δεν μπορεί να διαβάσει αρχείο γλώσσας!";
$language["CANT_SAVE_CONFIG"]="Δεν μπορεί να αποθηκεύσει τις ρυθμίσεις στο config.php";
$language["CANT_SAVE_LANGUAGE"]="Δεν μπορεί να αποθηκεύσει το αρχείο γλώσσας";
$language["CANT_WRITE_CONFIG"]="Προσοχή: Δεν μπορεί να γράψει το config.php!";
$language["CATCHUP"]="Μαρκαρισμένα όλα ως διαβασμένα";
$language["CATEGORY"]="Κατ.";
$language["CATEGORY_FULL"]="Κατηγορία";
$language["CENTER"]="Κέντρο";
$language["CHANGE_PID"]="Άλλαξε PID";
$language["CHARACTERS"]="Χαρακτήρες";
$language["CHOOSE"]="Διάλεξε";
$language["CHOOSE_ONE"]="Διάλεξε ένα";
$language["CLICK_HERE"]="κλίκ εδώ";
$language["CLOSE"]="Κλείσιμο";
$language["COMMENT"]="Σχ.";
$language["COMMENT_1"]="Σχόλιο";
$language["COMMENT_PREVIEW"]="Προεπισκόπιση σχολίων";
$language["COMMENTS"]="Σχόλια";
$language["CONFIG_SAVED"]="Συγχαρητήρια, η νέα διαμόρφωση αποθηκεύτηκε";
$language["COUNTRY"]="Χώρα";
$language["CURRENT_DETAILS"]="Τρέχοντες λεπτομέρειες";
$language["DATABASE_ERROR"]="Βάση δεδομένων λάθος.";
$language["DATE"]="Ημερομηνία";
$language["DB_ERROR_REQUEST"]="Βάση δεδομένων λάθος. Δεν μπορεί να ολοκληρωθεί το αίτημα.";
$language["DB_SETTINGS"]="Ρυθμίσεις βάσης δεδομένων";
$language["DEAD_ONLY"]="Ανενεργό μόνο";
$language["DELETE"]="Διαγραφή";
$language["DELETE_ALL_READED"]="Διαγραφή όλων των διαβασμένων";
$language["DELETE_CONFIRM"]="Είστε σίγουρος οτι θέλετε να διαγράψετε/μετακινήσετε αυτό?";
$language["DELETE_TORRENT"]="Διαγραφή Torrent";
$language["DELFAILED"]="Διαγραφή απέτυχε";
$language["DESCRIPTION"]="Περιγραφή";
$language["DONT_NEED_CHANGE"]="Δεν χρειάζετε να αλλάξετε αυτές τισ ρυθμίσεις!";
$language["DOWN"]="Dl";
$language["DOWNLOAD"]="ΚΑτέβασμα";
$language["DOWNLOAD_TORRENT"]="Κατέβασμα Torrent";
$language["DOWNLOADED"]="Κατεβασμένα";
$language["EDIT"]="Επεξεργασία";
$language["EDIT_LANGUAGE"]="Επεξεργασία γλώσσας";
$language["EDIT_POST"]="επεξεργασία μηνύματος";
$language["EDIT_TORRENT"]="Επεξεργασία Torrent";
$language["EMAIL"]="Ηλεκτορνικό Ταχυδρομείο";
$language["EMAIL_SENT"]="Ενα ηλεκτρονικό ταχυδρομείο στάλθηκε στην επειλεγμένη Ηλεκτρονική διεύθυνση<br />πατήστε στον σύνδεσμο για να επιβεβαιώσετε τον λογαριασμό σας.";
$language["EMAIL_VERIFY"]="Αναβάθμιση λογαριασμού Ηλεκ. Ταχ.$SITENAME";
$language["EMAIL_VERIFY_BLOCK"]="Στάλθηκε ηλεκ. ταχ. επιβεβαίωσης";
$language["EMAIL_VERIFY_MSG"]="Γειά σας,\n\nΑυτό το ηλεκτρονικό ταχυδρομείο στάλθηκε επειδή ζητήσατε μια αλλαγή στην ηλετρονική διεύθυνση που βρίσκετε αυτή τη στιγμή στην εγγραφή σας, παρακαλώ πατήστε στο σύνδεσμο παρακάτω για να ολοκληρώσετε την αλλαγή.\n\nΤις καλύτερες ευχές απο το προσωπικό.";
$language["EMAIL_VERIFY_SENT1"]="<br /><center>Ένα ηλεκ. ταχ. επιβεβαίωσης στάλθηκε στο:<br /><br /><strong><font color=\"red\">";
$language["EMAIL_VERIFY_SENT2"]="</font></strong><br /><br />Θα χρειασθεί να πατήσετε στο σύνδεσμο που περιέχεται στο ηλεκτρονικό ταχυδρομείο για να<br />αναβαθμίσετε την ηλεκτρονική σας διεύθυνση. Θα έχετε λάβει το ηλεκτρονικό ταχυδρομείο εντός 10 λεπτών<br />(συνήθως αμέσως) αν και μερικοί παροχείς ηλεκτρονικού ταχυδρομείου μπορεί να το έχουνε μαρκάρει ως SPAM<br />Για αυτό ελέγξτε το φάκελο SPAM εαν δεν μπορείτε να το βρείτε.<br /><br />";
$language["ERR_500"]="HTTP/1.0 500 Μη εξουσιοδοτημένη πρόσβαση!";
$language["ERR_AVATAR_EXT"]="Συγνώμη μόνο gif,jpg,bmp or png επιτρέπονται";
$language["ERR_BAD_LAST_POST"]="";
$language["ERR_BAD_NEWS_ID"]="Λάθος νέα ταυτότητα!";
$language["ERR_BODY_EMPTY"]="Η φόρμα δεν μπορεί να είναι άδεια!";
$language["ERR_CANT_CONNECT"]="Δεν μπορεί να συνδεθεί στον τοπικό MySQL κεντρικό υπολογιστή";
$language["ERR_CANT_OPEN_DB"]="Δεν μπορεί να ανοίξει την βάση δεδομένων";
$language["ERR_DB_ERR"]="Λάθος βάσης δεδομένων. Παρακαλώ επικοινωνήστε με ενα διαχειριστή για αυτό.";
$language["ERR_DELETE_POST"]="Διαγραφή μηνύματος. Λογικός έλεγχος: Πρόκειται να διαγράψετε ενα μήνυμα. Click";
$language["ERR_DELETE_TOPIC"]="Διαγραφή θέματος. Λογικός έλεγχος: Πρόκειται να διαγράψετε ενα θέμα. Click";
$language["ERR_EMAIL_ALREADY_EXISTS"]="Αυτό το ηλεκ. ταχ. υπάρχει ήδη στη βάση δεδομένων μας!";
$language["ERR_EMAIL_NOT_FOUND_1"]="Η ηλετρονική διεύθυνση";
$language["ERR_EMAIL_NOT_FOUND_2"]="Δεν βρέθηκε στη βάση δεδομένων μας.";
$language["ERR_ENTER_NEW_TITLE"]="Πρέπει να εισάγετε ενα νέο τίτλο!";
$language["ERR_FORUM_NOT_FOUND"]="Forum δεν βρέθηκε";
$language["ERR_FORUM_UNKW_ACT"]="Forum λάθος: Άγνωστη ενέργεια";
$language["ERR_GUEST_EXISTS"]="'Επισκέπτης' είναι ενα περιορισμένο όνομα χρήστη. Δεν μπορείτε ως 'επισκέπτης'";
$language["ERR_IMAGE_CODE"]="Ο κωδικός ασφαλείας δεν ταιριάζει";
$language["ERR_INS_TITLE_NEWS"]="Πρέπει να εισάγετε και τα δύο, τίτλο ΚΑΙ νέα";
$language["ERR_INV_NUM_FIELD"]="Άκυρα αριθμητικό(α) πεδίο(α) απο τον πελάτη";
$language["ERR_INVALID_CLIENT_EVENT"]="Άκυρο γεγονός = απο τον πελάτη.";
$language["ERR_INVALID_INFO_BT_CLIENT"]="Άκυρες πληροφορίες λήφθηκαν απο τον πελάτη  BitTorrent client";
$language["ERR_INVALID_IP_NUMB"]="Άκυρη IP διεύθυνση. Πρέπει να έχει τα τυπικά δεκαδικά (Ονόματα πάροχων δεν επιτρέπονται)";
$language["ERR_LEVEL"]="Συγνώμη, το επιπεδό σας ";
$language["ERR_LEVEL_CANT_POST"]="Δεν σας επιτρέπεται να στείλετε μήνυμα σε αυτό το  forum.";
$language["ERR_LEVEL_CANT_VIEW"]="Δεν σας επιτρέπεται να εμφανίσετε αυτό το θεμά.";
$language["ERR_MISSING_DATA"]="Λείπουν δεδομένα!";
$language["ERR_MUST_BE_LOGGED_SHOUT"]="Πρέπει να έχετε συνδεθεί για να μιλήσετε...";
$language["ERR_NO_BODY"]="Δεν υπάρχει κείμενο στη φόρμα";
$language["ERR_NO_NEWS_ID"]="Ταυτότητα νέων δεν βρέθηκε!";
$language["ERR_NO_POST_WITH_ID"]="Δεν υπάρχει μήνυμα με ταυτότητα";
$language["ERR_NO_SPACE"]="Το όνομα χρήστη δεν μπορεί να περιέχει κενό, παρακαλώ αντικαταστήστε με την κάτω παύλα (_)<br /><br />";
$language["ERR_NO_TOPIC_ID"]="Δεν επιστρέφεται θέμα ταυτότητας";
$language["ERR_NO_TOPIC_POST_ID"]="Κανένα θέμα δεν συσχετίζεται με ταυτότητα μηνύματος";
$language["ERR_NOT_AUTH"]="Δεν είστε εξουσιοδοτημένος!";
$language["ERR_NOT_FOUND"]="Δεν βρέθηκε...";
$language["ERR_NOT_PERMITED"]="Δεν επιτρέπεται";
$language["ERR_PASS_LENGTH"]="<font color=\"black\">Ο κωδικός σας πρέπει να είναι το λιγότερο 4 χαρακτήρες.</font>";
$language["ERR_PASSWORD_INCORRECT"]="Λάθος κωδικός";
$language["ERR_PERM_DENIED"]="Απαγορευμένη άδεια";
$language["ERR_PID_NOT_FOUND"]="Παρακαλώ ξανά κατεβάστε το torrent. Σύστημα προσωπικής ταυτότητας είναι ενεργό και δεν βρέθηκε στο torrent προσωπική ταυτότητα";
$language["ERR_RETR_DATA"]="Λάθος στη ανάκτηση δεδομένων!";
$language["ERR_SEND_EMAIL"]="Δεν μπορεί να σταλεί ηλεκ. ταχ. Παρακαλώ επικοινωνήστε με εναν διαχειριστή για αυτό το λάθος.";
$language["ERR_SERVER_LOAD"]="Ο κεντρικός υπολογιστής είναι υπέρ-φορτωμένος αυτή τη στιγμή. Ξαναγίνετε προσπάθεια, παρακαλώ περιμένετε...";
$language["ERR_SPECIAL_CHAR"]="<font color=\"black\">Το όνομα χρήστη δεν μπορεί να περιέχει ειδικούς χαρακτήρες όπως:<br /><br /><font color=\"red\"><strong>* ? < > @ $ & % etc.</strong></font></font><br />";
$language["ERR_SQL_ERR"]="SQL Λάθος";
$language["ERR_SUBJECT"]="Πρέπει να εισάγετε ένα θέμα.";
$language["ERR_TOPIC_ID_NA"]="Ταυτότητα θέματος είναι N/A";
$language["ERR_TOPIC_LOCKED"]="Το θέμα είναι κλειδωμένο";
$language["ERR_TORRENT_IN_BROWSER"]="Αυτό το αρχείο είναι για τους πελάτες του BitTorrent.";
$language["ERR_UPDATE_USER"]="Δεν μπορούν να αναβαθμιστούν τα δεδομένα του χρήστη. Παρακαλώ επικοινωνήστε με έναν διαχειριστή για αυτό το λάθος.";
$language["ERR_USER_ALREADY_EXISTS"]="Υπάρχει ήδη ένας χρήστης με αυτό το ψευδώνυμο!";
$language["ERR_USER_NOT_FOUND"]="Συγνώμη, δεν βρέθηκε χρήστης";
$language["ERR_USER_NOT_USER"]="Δεν είστε εξουσιοδοτημένος να έχετε πρόσβαση στον πίνακα ενος άλλου χρήστη!";
$language["ERR_USERNAME_INCORRECT"]="Λάθος όνομα χρήστη";
$language["ERROR"]="Λάθος";
$language["ERROR_ID"]="Λάθος ταυτότητα";
$language["FACOLTATIVE"]="προαιρετικό";
$language["FILE"]="Αρχείο";
$language["FILE_CONTENTS"]="Περιεχόμενα αρχείου";
$language["FILE_NAME"]="Όνομα αρχείου";
$language["FIND_USER"]="Βρές χρήστη";
$language["FINISHED"]="Ολοκληρωμένο";
$language["FORUM"]="Forum";
$language["FORUM_ERROR"]="Forum λάθος";
$language["FORUM_INFO"]="Forum πληροφορίες";
$language["FORUM_MIN_CREATE"]="Ελάχιστη δημιουργία τάξης";
$language["FORUM_MIN_READ"]="Ελάχιστη ανάγνωση τάξης";
$language["FORUM_SEARCH"]="Forums Αναζήτηση";
$language["FORUM_N_TOPICS"]="Νέα θέματα";
$language["FORUM_N_POSTS"]="Νέα μηνύματα";
$language["FRM_DELETE"]="Διαγραφή";
$language["FRM_LOGIN"]="Σύνδεθείτε";
$language["FRM_PREVIEW"]="Προεπισκόπιση";
$language["FRM_REFRESH"]="Ανανέωση";
$language["FRM_RESET"]="Επανεκκίνηση";
$language["FRM_SEND"]="Αποστολή";
$language["FRM_CONFIRM"]="Επιβεβαίωση";
$language["FRM_CANCEL"]="Ακύρωση";
$language["FRM_CLEAN"]="Καθαρισμός";
$language["GLOBAL_SERVER_LOAD"]="Φόρτωμα παγκόσμιου ηλεκτρονικού υπολογιστή (όλοι οι δικτυακοί τόποι στον κεντρικό υπολογιστή)";
$language["GO"]="Πήγαινε";
$language["GROUP"]="Σύνολο";
$language["GUEST"]="Επισκέπτης";
$language["GUESTS"]="Επισκέπτες";
$language["HERE"]="Εδώ";
$language["HISTORY"]="Ιστορικό";
$language["HOME"]="Σπίτι";
$language["IF_YOU_ARE_SURE"]="Εαν είστε σίγουρος.";
$language["IM_SURE"]="Είμαι σίγουρος";
$language["IN"]="μέσα";
$language["INF_CHANGED"]="Οι πληροφορίες άλλαξαν!";
$language["INFINITE"]="Πληροφ.";
$language["INFO_HASH"]="Πληροφορίες Hash";
$language["INS_NEW_PWD"]="Εισάγετε ΝΕΟ κωδικό!";
$language["INS_OLD_PWD"]="Εισάγετε ΠΑΛΙΟ κωδικό!";
$language["INSERT_DATA"]="Εισάγετε όλα τα απαραίτητα δεδομένα για το ανέβασμα.";
$language["INSERT_NEW_FORUM"]="Εισάγετε νέο forum";
$language["INVALID_ID"]="Δεν είναι έγκυρη η ταυτότητα. Συγνώμη!";
$language["INVALID_INFO_HASH"]="Άκυρες πληροφορίες hash value.";
$language["INVALID_PID"]="Άκυρη προσωπική ταυτότητα";
$language["INVALID_TORRENT"]="Tracker λάθος: άκυρο torrent";
$language["KEYWORDS"]="Λέξεις κλειδιά";
$language["LAST_EXTERNAL"]="Τα τελευταία εξωτερικά Torrents έγιναν στις";
$language["LAST_NEWS"]="Τελεύταια νέα";
$language["LAST_POST_BY"]="Τελεύταιο μήνυμα από";
$language["LAST_SANITY"]="Τελευταίος έλεγχος έγινε στις ";
$language["LAST_TORRENTS"]="Τελευταία Torrents";
$language["LAST_UPDATE"]="Τελευταία αναβάθμιση";
$language["LASTPOST"]="Τελευταίο μήνυμα";
$language["LEECHERS"]="leechers";
$language["LEFT"]="έμειναν";
$language["LOGIN"]="Συνδεθείτε";
$language["LOGOUT"]="Αποσυνδεθείτε";
$language["MAILBOX"]="Γραμματοκιβώτιο";
$language["MANAGE_NEWS"]="Διαχείρηση νέων";
$language["MEMBER"]="Χρήστης";
$language["MEMBERS"]="Χρήστες";
$language["MEMBERS_LIST"]="Λίστα χρηστών";
$language["MINIMUM_100_DOWN"]="(με ελάχιστο 100ΜΒ κατεβασμένα)";
$language["MINIMUM_5_LEECH"]="με ελάχιστο 5 leechers, να μην περιέχονται ανενεργά  torrents";
$language["MINIMUM_5_SEED"]="με ελάχιστο 5 seeders";
$language["MKTOR_INVALID_HASH"]="Φτιάξε Torrent: λήφθηκε ένα άκυρο hash";
$language["MNU_ADMINCP"]="Πίνακας διαχειριστή";
$language["MNU_FORUM"]="Forum";
$language["MNU_INDEX"]="Περιεχόμενα";
$language["MNU_MEMBERS"]="Μέλη";
$language["MNU_NEWS"]="Νέα";
$language["MNU_STATS"]="Επιπλέον στατιστικά";
$language["MNU_TORRENT"]="Torrents";
$language["MNU_UCP_CHANGEPWD"]="Αλλαγή κωδικού";
$language["MNU_UCP_HOME"]="Κεντρικός πίνακας ελέγχου χρήστη";
$language["MNU_UCP_IN"]="Εισερχόμενα προσωπικά μηνύματα";
$language["MNU_UCP_INFO"]="Αλλαγή προφίλ";
$language["MNU_UCP_NEWPM"]="Νέα προσωπικά μηνύματα";
$language["MNU_UCP_OUT"]="Εξερχόμενα προσωπικά μηνύματα";
$language["MNU_UCP_PM"]="Το γραμματοκιβώτιο σας";
$language["MNU_UPLOAD"]="Ανέβασμα";
$language["MORE_SMILES"]="Περισσότερα Emoticons";
$language["MORE_THAN"]="Περισσότερα από ";
$language["MORE_THAN_2"]="βρέθηκαν αντικείμενα, προβολή πρώτου";
$language["NA"]="N/A";
$language["NAME"]="Όνομα";
$language["NEED_COOKIES"]="Σημείωση: Χρειάζεστε να έχετε ενεργοποιημένα τα cookies για να συνδεθειτέ.";
$language["NEW_COMMENT"]="Εισήγαγε τα σχόλια σου...";
$language["NEW_COMMENT_T"]="Νέο σχόλιο";
$language["NEWS"]="τα νέα";
$language["NEWS_DESCRIPTION"]="Νέα:";
$language["NEWS_INSERT"]="Εισήγαγε τα νέα σου";
$language["NEWS_PANEL"]="Πίνακας νέων";
$language["NEWS_TITLE"]="Τίτλος:";
$language["NEXT"]="Επόμενο";
$language["NO"]="Όχι";
$language["NO_BANNED_IPS"]="Δεν υπάρχουν απαγορευμένες IPs";
$language["NO_COMMENTS"]="Ουδέν σχόλιο...";
$language["NO_FORUMS"]="Δέν βρέθηκαν forums!";
$language["NO_MAIL"]="δεν βρέθηκε νέο ηλεκτρονικό ταχυδρομείο.";
$language["NO_MESSAGES"]="Δεν βρέθηκαν προσωπικά μηνύματα...";
$language["NO_NEWS"]="Δεν έχετε νέα";
$language["NO_PEERS"]="No peers";
$language["NO_RECORDS"]="Συγνώμη, η λίστα είναι άδεια...";
$language["NO_TOPIC"]="Δεν βρέθηκαν θέματα";
$language["NO_TORR_UP_USER"]="Δεν υπάρχουν ανεβασμένα torrents απο αυτόν τον χρήστη";
$language["NO_TORRENTS"]="Δεν υπάρχουν torrents εδώ...";
$language["NO_USERS_FOUND"]="Δεν βρέθηκαν χρήστες!";
$language["NOBODY_ONLINE"]="Κανείς συνδεδεμένος";
$language["NONE"]="Κανείς";
$language["NOT_ADMIN_CP_ACCESS"]="Δεν είστε εξουσιοδοτημένος να έχετε πρόσβαση στον πίνακα ελέγχου του διαχειριστή!";
$language["NOT_ALLOW_DOWN"]="Δεν επιτρέπεται να κατεβάσετε από";
$language["NOT_AUTH_DOWNLOAD"]="Δεν είστε εξουσιοδοτημένος να κατεβάσετε. Συγνώμη...";
$language["NOT_AUTH_VIEW_NEWS"]="Δεν είστε εξουσιοδοτημένος να εμφανίσετε νέα!";
$language["NOT_AUTHORIZED"]="Δεν είστε εξουσιοδοτημένος να εμφανίσετε το";
$language["NOT_AUTHORIZED_UPLOAD"]="Δεν είστε εξουσιοδοτημένος να ανεβάσετε!";
$language["NOT_AVAILABLE"]="N/A";
$language["NOT_MAIL_IN_URL"]="Αυτή δεν είναι η ηλεκτρονική διεύθυνση που ήταν σε αυτό το url";
$language["NOT_POSS_RESET_PID"]="Δεν γίνεται να επανεκκινήσετε την προσωπική σας ταυτότητα! <br />Επικοινωνήστε με έναν διαχειριστή...";
$language["NOW_LOGIN"]="Τώρα θα παραπεμφθείτε για να συνδεθείτε";
$language["NUMBER_SHORT"]="#";
$language["OLD_PWD"]="Παλιός κωδικός";
$language["ONLY_REG_COMMENT"]="Μόνο εγγραμένα μέλη μπορούν να εισάγουν σχόλια!";
$language["OPT_DB_RES"]="Βελτιστοποίηση αποτελεσμάτων βάσης δεδομένων";
$language["OPTION"]="Επιλογή";
$language["PASS_RESET_CONF"]="Επιβεβαίωση επανεκκίνησης κωδικού";
$language["PEER_CLIENT"]="Πελάτης";
$language["PEER_COUNTRY"]="Χώρα";
$language["PEER_ID"]="Peer ταυτότητα";
$language["PEER_LIST"]="Peers λίστα";
$language["PEER_PORT"]="Θύρα";
$language["PEER_PROGRESS"]="Πρόοδος";
$language["PEER_STATUS"]="Κατάσταση";
$language["PEERS"]="peers";
$language["PEERS_DETAILS"]="Πατήστε εδώ για να εμφανίσετε τις λεπτομέρειες peers";
$language["PICTURE"]="Εικόνα";
$language["PID"]="Προσωπική ταυτότητα";
$language["PLEASE_WAIT"]="Παρακαλώ περιμένετε...";
$language["PM"]="Προσωπικό μήνυμα";
$language["POSITION"]="Θέση";
$language["POST_REPLY"]="Απάντηση μηνύματος";
$language["POSTED_BY"]="Μήνυμα από";
$language["POSTED_DATE"]="Μήνυμα στις";
$language["POSTS"]="Μηνύματα";
$language["POSTS_PER_DAY"]="%s μηνύματα ανα ημέρα";
$language["POSTS_PER_PAGE"]="μηνύματα ανα σελίδα";
$language["PREVIOUS"]="Προεπ.";
$language["PRIVATE_MSG"]="Προσωπικό μήνυμα";
$language["PWD_CHANGED"]="Ο κωδικός άλλαξε!";
$language["QUESTION"]="Ερώτηση";
$language["QUICK_JUMP"]="Quick Jump";
$language["QUOTE"]="Παράθεση";
$language["RANK"]="Βαθμολογία";
$language["RATIO"]="Βαθμός";
$language["REACHED_MAX_USERS"]="Μέγιστος αριθμός χρηστών";
$language["READED"]="Ανάγνωση";
$language["RECEIVER"]="Δέκτης";
$language["RECOVER_DESC"]="Χρησιμοποιήστε τη φόρμα παρακάτω για να έχετε επανεκκίνηση κωδικού και οι πληροφορίες του λογαριασμού σας θα σταλούν πίσω σε σας με ηλεκ. ταχ.<br />(Θα πρέπει να απαντήσετε στο ηλεκ. ταχ. επιβεβαίωσης.)";
$language["RECOVER_PWD"]="Ανάκτηση κωδικού";
$language["RECOVER_TITLE"]="Η ανάκτηση έχασε το όνομα χρήστη ή τον κωδικό";
$language["REDIRECT"]="εαν ο browser δεν έχει ενεργοποιημένο το javascript, click";
$language["REDOWNLOAD_TORR_FROM"]="Ξανακατεβάστε το torrent απο";
$language["REGISTERED"]="Εγγραμένος";
$language["REGISTERED_EMAIL"]="Εγγραμένο ηλεκ. ταχ.";
$language["REMOVE"]="Μετακίνησε";
$language["REPLIES"]="Απαντήσεις";
$language["REPLY"]="Απάντηση";
$language["RESULT"]="Αποτέλεσμα";
$language["RETRY"]="Ξαναπροσπάθησε";
$language["RETURN_TORRENTS"]="Πίσω στη λίστα torrent";
$language["REVERIFY_CONGRATS1"]="<center><br />Συγχαρητήρια, το ηλεκ. ταχ. σας έγινε έγκυρο και επιτυχώς άλλαξε<br /><br /><strong>From: <font color=\"red\">";
$language["REVERIFY_CONGRATS2"]="</strong></font><br /><strong>To: <font color=\"red\">";
$language["REVERIFY_CONGRATS3"]="</strong></font><br /><br />";
$language["REVERIFY_FAILURE"]="<center><br /><strong><font color=\"red\"><u>Συγνώμη αλλά αυτό το url δεν είναι έγκυρο</u></strong></font><br /><br />Ένας νέος τυχαίος αριθμός δημιουργείται κάθε φορά που προσπαθείτε να αλλάξετε το ηλεκ. ταχ. σας για αυτό<br />εαν βλέπεται αυτό το μήνυμα τότε θα έχετε προσπαθήσει να αλλάξετε το ηλεκ. ταχ. σας<br />παραπάνω απο μια φορά και χρησιμοποιήται ένα παλιό url.<br /><br /><strong>Παρακαλώ περιμένετε μέχρι μέχρι να είστε απόλυτα σίγουρος ότι δεν έχετε λάβει ένα νέο<br />ηλεκ. ταχ. επιβεβαίωσης πριν προσπαθήσετε να αλλάξετε το ηλεκ. ταχ. σας ξανά.</strong><br /><br />";
$language["REVERIFY_MSG"]="Εαν προσπαθήσετε να αλλάξετε την ηλεκτρονική διεύθυνσή σας, θα σας σταλεί ένας σύνδεσμος επιβεβαίωσης της ηλεκτρονικής διεύθυνσης στην οποία επιθυμείτε να αλλάξετε.<br /><br /><font color=\"red\"><strong>Η ηλεκτρονική διεύθυνση στην εγγραφή σας δεν θα αναβαθμιστεί μέχρι να επιβεβαιώσετε την νέα διεύθυνση κάνοντας click στο σύνδεσμο.</strong></font>";
$language["RIGHT"]="σωστά";
$language["SEARCH"]="αναζήτηση";
$language["SEEDERS"]="seeds";
$language["SEEN"]="Ειδώθηκε";
$language["SELECT"]="Επέλεξε...";
$language["SENDER"]="Αποστολέας";
$language["SENT_ERROR"]="Λάθος αποστολής";
$language["SHORT_C"]="C"; //Shortname for Completed
$language["SHORT_L"]="L"; //Shortname for Leechers
$language["SHORT_S"]="S"; //Shortname for Seeders
$language["SHOUTBOX"]="ShoutBox";
$language["SIZE"]="Μέγεθος";
$language["SORRY"]="Συγνώμη";
$language["SORTID"]="Ταξινόμηση ταυτότητας";
$language["SPEED"]="Ταχύτητα";
$language["STICKY"]="Κολλητικό";
$language["SUB_CATEGORY"]="Υπο-κατηγορία";
$language["SUBJECT"]="Θέμα";
$language["SUBJECT_MAX_CHAR"]="Το θέμα οροιοποιείται στο ";
$language["SUC_POST_SUC_EDIT"]="Το μήνυμα επεξεργάστηκε επιτυχώς.";
$language["SUC_SEND_EMAIL"]="Ένα ηλεκ. ταχ.στάλθηκε στο";
$language["SUC_SEND_EMAIL_2"]="Παρακαλώ περιμένετε λίγα λεπτά για να φτάσει το ταχ.";
$language["SUCCESS"]="Επιτυχία";
$language["SUMADD_BUG"]="Tracker bug καλεί πρόσθεση περίληψης";
$language["TABLE_NAME"]="Όνομα πίνακα";
$language["TIMEZONE"]="Ζώνη ώρας";
$language["TITLE"]="Τίτλος";
$language["TOP"]="Πάνω";
$language["TOP_10_ACTIVE"]="10 πιο ενεργά Torrents";
$language["TOP_10_BEST_SEED"]="10 καλύτεροι Seeders Torrents";
$language["TOP_10_BSPEED"]="10 Torrents καλύτερης ταχύτητας";
$language["TOP_10_DOWNLOAD"]="Top 10 Downloaders";
$language["TOP_10_SHARE"]="Top 10 καλύτερων διαμοιραστών";
$language["TOP_10_UPLOAD"]="Top 10 Uploaders";
$language["TOP_10_WORST"]="Top 10 Worst Sharers";
$language["TOP_10_WORST_SEED"]="10 Torrents Worst Seeders";
$language["TOP_10_WSPEED"]="10 Torrents χειρότερης ταχύτητας";
$language["TOP_TORRENTS"]="Τα πιο δημοφιλή  torrents";
$language["TOPIC"]="Θέμα";
$language["TOPICS"]="Θέματα";
$language["TOPICS_PER_PAGE"]="Θέματα ανα σελίδα";
$language["TORR_PEER_DETAILS"]="Torrent peers λεπτομέρειες";
$language["TORRENT"]="Torrent";
$language["TORRENT_ANONYMOUS"]="Σταλμένο ως ανώνυμο";
$language["TORRENT_CHECK"]="Επιτρέψτε στον tracker να ανακτήσει και να χρησιμοποιήσει πληροφορίες απο το αρχείο torrent.";
$language["TORRENT_DETAIL"]="Torrent's λεπτομέρειες";
$language["TORRENT_FILE"]="Torrent αρχείο";
$language["TORRENT_SEARCH"]="Αναζήτηση Torrents";
$language["TORRENT_STATUS"]="Κατάσταση";
$language["TORRENT_UPDATE"]="Αναβάθμιση, παρακαλώ περιμένετε...";
$language["TORRENTS"]="torrents";
$language["TORRENTS_PER_PAGE"]="Torrents ανα σελίδα";
$language["TRACK_DB_ERR"]="Tracker/βάση δεδομένων λάθος. Οι λεπτομέρειες είναι στο log λαθών.";
$language["TRACKER_INFO"]="$users χρήστες, tracking $torrents torrents ($seeds seeds e $leechers leechers, $percent%)";
$language["TRACKER_LOAD"]="Tracker φόρτωμα";
$language["TRACKER_SETTINGS"]="Tracker's ρυθμίσεις";
$language["TRACKER_STATS"]="Tracker στατιστικά";
$language["TRACKING"]="tracking";
$language["TRAFFIC"]="κίνηση";
$language["UCP_NOTE_1"]="Εδώ μπορείτε να ελέγξετε τα εισερχόμενα, γράψτε προσωπικά μηνύματα σε άλλους χρήστες";
$language["UCP_NOTE_2"]="Ελέγξτε και τροποποιήστε τις ρυθμίσεις, κλπ...";
$language["UNAUTH_IP"]="μη-εξουσιοδοτημένη διεύθυνση ταυτότητας.";
$language["UNKNOWN"]="άγνωστο";
$language["UPDATE"]="αναβάθμιση";
$language["UPFAILED"]="Το ανέβασμα απέτυχε";
$language["UPLOAD_IMAGE"]="Ανέβασμα εικόνας";
$language["UPLOAD_LANGUAGE_FILE"]="Ανέβασμα αρχείου γλώσσας";
$language["UPLOADED"]="Ανεβασμένα";
$language["UPLOADER"]="Uploader";
$language["UPLOADS"]="Uploads";
$language["URL"]="URL";
$language["USER_CP"]="Ο πίνακάς μου";
$language["USER_CP_1"]="Πίνακας ελέγχου χρήστη";
$language["USER_DETAILS"]="Λεπτομέρειες χρήστη";
$language["USER_EMAIL"]="Έγκυρο ηλεκ. ταχ.";
$language["USER_ID"]="Ταυτότητα χρήστη";
$language["USER_JOINED"]="Εισήλθε στις";
$language["USER_LASTACCESS"]="Τελευταία πρόσβαση";
$language["USER_LEVEL"]="Βαθμολογία";
$language["USER_LOCAL_TIME"]="Τοπική ώρα χρήστη";
$language["USER_NAME"]="Χρήστης";
$language["USER_PASS_RECOVER"]="Κωδικός/χρήστη ανάκτηση";
$language["USER_PWD"]="Κωδικός";
$language["USERS_SEARCH"]="Αναζήτηση χρήστη";
$language["VIEW_DETAILS"]="Εμφάνιση λεπτομερειών";
$language["VIEW_TOPIC"]="Εμφάνιση θέματος";
$language["VIEW_UNREAD"]="Εμφάνιση μη-αναγνωσμένων";
$language["VIEWS"]="Εμφανίσεις";
$language["VISITOR"]="Επισκέπτης";
$language["VISITORS"]="Επισκέπτες";
$language["WAIT_ADMIN_VALID"]="Θα έπρεπε να περιμένετε για την έγκριση του διαχειριστή...";
$language["WARNING"]="Προειδοποίηση!";
$language["WELCOME"]="Καλώς ήλθατε";
$language["WELCOME_ADMINCP"]="Καλώς ήλθατε στο πίνακα ελέγχου του διαχειριστή";
$language["WELCOME_BACK"]="Καλώς ήλθατε πάλι";
$language["WELCOME_UCP"]="Καλώς ήλθατε στον πίνακα ελέγχου σας";
$language["WORD_AND"]="και";
$language["WORD_NEW"]="νέο";
$language["WROTE"]="έγραψε";
$language["WT"]="WT";
$language["X_TIMES"]="φορές";
$language["YES"]="Ναί";
$language["LAST_IP"]="Τελευταία IP";
$language["FIRST_UNREAD"]="Πήγαινε στο πρώτο μη-αναγνωσμένο θέμα";
$language["MODULE_UNACTIVE"]="Η μέθοδος που χρειάζεται δεν είναι ενεργή!";
$language["MODULE_NOT_PRESENT"]="Η μέθοδος που χρειάζεται δεν υπάρχει!";
$language["MODULE_LOAD_ERROR"]="Η μέθοδος που χρειάζεται φαίνεται να είναι λαθος!";
?>