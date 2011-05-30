<?

define(S_HOME, '���');											//Forwards to home page
define(S_ADMIN, '�������');									//Forwards to Management Panel
define(S_RETURN, '����');										//Returns to image board
define(S_POSTING, '�l��ģʽ: �؏�');							//Prints message in red bar atop the reply screen
define(S_NOTAGS, '���Sʹ�� HTML ��ӛ.');						//Prints message on Management Board
define(S_NAME, '����');											//Describes name field
define(S_EMAIL, 'E-mail');										//Describes e-mail field
define(S_SUBJECT, '���}');										//Describes subject field
define(S_SUBMIT, '�ύ');										//Describes submit button
define(S_COMMENT, '�uՓ');										//Describes comment field
define(S_UPLOADFILE, '�n��');									//Describes file field
define(S_NOFILE, '�]�Йn��');										//Describes file/no file checkbox
define(S_DELPASS, '�ܴa');										//Describes password field
define(S_DELEXPL, '(�h���n���rʹ�õ��ܴa)');						//Prints explanation for password box (to the right)
define(S_RULES, '<ul><li>֧�ֵęn�����: GIF, JPG, PNG</li>
<li>�n����С���� '.MAX_KB.' KB.</li>
<li>��� '.MAX_W.'x'.MAX_H.' �DԪ�ĈDƬ���@ʾ��s�ԈD.</li></ul>');				//Prints rules under posting section
define(S_REPORTERR, 'ʧ��: δ�ҵ��؏�.');						//Returns error when a reply (res) cannot be found
define(S_THUMB, '�s�ԈD�@ʾ, �c��DƬ�@ʾԭʼ��D.');			//Prints instructions for viewing real source
define(S_PICNAME, '�n�� : ');									//Prints text before upload name/link
define(S_REPLY, '�؏�');										//Prints text for reply link
define(S_OLD, '�h����ӛ (��).');								//Prints text to be displayed before post is marked for deletion, see: retention
define(S_RESU, 'Post');											//Prints post?
define(S_ABBR, ' ���N������. �c���؏��@ʾ.');					//Prints text to be shown when replies are hidden
define(S_REPDEL, '�h�����N ');									//Prints text next to S_DELPICONLY (left)
define(S_DELPICONLY, 'ֻ�n��');									//Prints text next to checkbox for file deletion (right)
define(S_DELKEY, '�ܴa ');										//Prints text next to password field for deletion (left)
define(S_DELETE, '�h��');										//Defines deletion button's name
define(S_PREV, 'ǰ');											//Defines previous button
define(S_FIRSTPG, '��');										//Defines previous button
define(S_NEXT, '��');											//Defines next button
define(S_LASTPG, '��');											//Defines next button
define(S_FOOT, '- <a href="http://php.s3.to" target="_blank">GazouBBS</a> + <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://www.1chan.net/futallaby/" target="_blank">futallaby</a> -'); //Prints footer (leave these credits)
define(S_RELOAD, 'ˢ��');										//Reloads the image board (refresh)
define(S_UPFAIL, 'ʧ��: ���dʧ��.');							//Returns error for failed upload (reason: unknown?)
define(S_NOREC, 'ʧ��: �����ҵ�ӛ�.');							//Returns error when record cannot be found
define(S_SAMEPIC, 'ʧ��: ̽�y�����}�� md5 У��.');			//Returns error when a md5 checksum dupe is detected
define(S_TOOBIG, '�@���D�^��!  Ո�ς�СһЩ�ĈD!');
define(S_TOOBIGORNONE, '�@���D�^�������]�DƬ.  Ү.');
define(S_UPGOOD, ' '.$upfile_name.' �ς��ɹ�!<br><br>');		//Defines message to be displayed when file is successfully uploaded
define(S_STRREF, 'ʧ��: �ִ����ܽ^.');							//Returns error when a string is refused
define(S_UNJUST, 'ʧ��: �E�ðl�N.');							//Returns error on an unjust POST - prevents floodbots or ways not using POST method?
define(S_NOPIC, 'ʧ��: δ�x��n��.');								//Returns error for no file selected and override unchecked
define(S_NOTEXT, 'ʧ��: δݔ������.');							//Returns error for no text entered in to subject/comment
define(S_MANAGEMENT, '����T : ');								//Defines prefix for Manager Post name
define(S_DELETION, '�h��');										//Prints deletion message with quotes?
define(S_TOOLONG, 'ʧ��: ����̫�L.');							//Returns error for too many characters in a given field
define(S_UNUSUAL, 'ʧ��: �������Ļ؏�.');						//Returns error for abnormal reply? (this is a mystery!)
define(S_BADHOST, 'ʧ��: IP ��ֹ.');							//Returns error for banned host ($badip string)
define(S_PROXY80, 'ʧ��: ̽�y�� :80 �������ŷ���.');			//Returns error for proxy detection on port 80
define(S_PROXY8080, 'ʧ��: ̽�y�� :8080 �������ŷ���');			//Returns error for proxy detection on port 8080
define(S_SUN, '��');											//Defines abbreviation used for "Sunday"
define(S_MON, 'һ');											//Defines abbreviation used for "Monday"
define(S_TUE, '��');											//Defines abbreviation used for "Tuesday"
define(S_WED, '��');											//Defines abbreviation used for "Wednesday"
define(S_THU, '��');											//Defines abbreviation used for "Thursday"
define(S_FRI, '��');											//Defines abbreviation used for "Friday"
define(S_SAT, '��');											//Defines abbreviation used for "Saturday"
define(S_ANONAME, '������');									//Defines what to print if there is no text entered in the name field
define(S_ANOTEXT, '�o����');									//Defines what to print if there is no text entered in the comment field
define(S_ANOTITLE, '�o���}');									//Defines what to print if there is no text entered into subject field
define(S_RENZOKU, 'ʧ��: �l���l���^��, ���N���G��.');			//Returns error for $sec/post spam filter
define(S_RENZOKU2, 'ʧ��: �l���l���^��, �n�����G��.');			//Returns error for $sec/upload spam filter
define(S_RENZOKU3, 'ʧ��: �l���l���^��.');						//Returns error for flood? (don't know the specifics)
define(S_DUPE, 'ʧ��: �������}�ęn��.');						//Returns error for a duped file (same upload name or same tim/time)
define(S_NOTHREADERR, 'ʧ��: ָ����ӑՓ����������.');			//Returns error when a non-existant thread is accessed
define(S_SCRCHANGE, '����ˢ�����.');							//Defines message to be displayed when post is successful									//
define(S_BADDELPASS, 'ʧ��: �ܴa�e�`.');						//Returns error for wrong password (when user tries to delete file)
define(S_WRONGPASS, 'ʧ��: �����ܴa�����_.');					//Returns error for wrong password (when trying to access Manager modes)
define(S_RETURNS, '����');										//Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
define(S_LOGUPD, '����');										//Updates the log/SQLDB by accessing the PHP file
define(S_MANAMODE, '����Tģʽ');								//Prints heading on top of Manager page
define(S_MANAREPDEL, '�������');								//Defines Management Panel radio button--allows the user to view the management panel (overview of all posts)
define(S_MANAPOST, '�Թ���T��ݏ��N');							//Defines Manager Post radio button--allows the user to post using HTML code in the comment box
define(S_MANASUB, '�ύ');										//Defines name for submit button in Manager Mode
define(S_DELLIST, '�������');									//Prints sub-heading of Management Panel
define(S_ITDELETES, '�h��');									//Defines for deletion button in Management Panel
define(S_MDRESET, '����');										//Defines name for field reset button in Management Panel
define(S_MDONLYPIC, 'ֻ�n��');									//Sets whether or not to delete only file, or entire post/thread
define(S_MDTABLE1, '<th>�h��?</th><th>���N��̖ No.</th><th>�r�g</th><th>���}</th>');			//Explains field names for Management Panel (Delete?->Subject)
define(S_MDTABLE2, '<th>����</th><th>�uՓ</th><th>���C</th><th>��С<br>(λԪ�M)</th><th>md5</th><th>�؏� #</th><th>No idea</th><th>No idea</th>');						  //Explains names for Management Panel (Name->md5)
define(S_RESET, '����');										//Sets name for field reset button (global)
define(S_IMGSPACEUSAGE, '��ʹ�ÿ��g :');						//Prints space used KB by the board under Management Panel
define(S_CANNOTWRITE, 'ʧ��: ���܌��Y�ϊA.<br>');					//Returns error when the script cannot write to the directory, this is used on initial setup--check your chmod (777)
define(S_NOTWRITE, 'ʧ��: ���܌��Y�ϊA.<br>');					//Returns error when the script cannot write to the directory, the chmod (777) is wrong
define(S_NOTREAD, 'ʧ��: �����x�Y�ϊA.<br>');						//Returns error when the script cannot read from the directory, the chmod (777) is wrong
define(S_NOTDIR, 'ʧ��: �Y�ϊA������.<br>');						//Returns error when the script cannot find/read from the directory (does not exist/isn't directory), the chmod (777) is wrong
define(S_SQLCONF, 'MySQL �B��ʧ��');							//MySQL connection failure
define(S_SQLDBSF, '�Y�ώ�ʧ��, Ո�z�� SQL �O��<br>');			//database select failure
define(S_TCREATE, '���ڄ�����!<br>\n');							//creating table
define(S_TCREATEF, '���܄�����!<br>');							//table creation failed
define(S_SQLFAIL, '���� SQL ���}!<br>');						//SQL Failure
?>
