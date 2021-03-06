<?

define(S_HOME, '主頁');											//Forwards to home page
define(S_ADMIN, '管理入口');									//Forwards to Management Panel
define(S_RETURN, '返回');										//Returns to image board
define(S_POSTING, '發帖模式: 回復');							//Prints message in red bar atop the reply screen
define(S_NOTAGS, '允許使用 HTML 標記.');						//Prints message on Management Board
define(S_NAME, '姓名');											//Describes name field
define(S_EMAIL, 'E-mail');										//Describes e-mail field
define(S_SUBJECT, '標題');										//Describes subject field
define(S_SUBMIT, '提交');										//Describes submit button
define(S_COMMENT, '評論');										//Describes comment field
define(S_UPLOADFILE, '檔案');									//Describes file field
define(S_NOFILE, '沒有檔案');										//Describes file/no file checkbox
define(S_DELPASS, '密碼');										//Describes password field
define(S_DELEXPL, '(刪除檔案時使用的密碼)');						//Prints explanation for password box (to the right)
define(S_RULES, '<ul><li>支持的檔案類型: GIF, JPG, PNG</li>
<li>檔案大小上限 '.MAX_KB.' KB.</li>
<li>大於 '.MAX_W.'x'.MAX_H.' 圖元的圖片將顯示為縮略圖.</li></ul>');				//Prints rules under posting section
define(S_REPORTERR, '失敗: 未找到回復.');						//Returns error when a reply (res) cannot be found
define(S_THUMB, '縮略圖顯示, 點擊圖片顯示原始大圖.');			//Prints instructions for viewing real source
define(S_PICNAME, '檔案 : ');									//Prints text before upload name/link
define(S_REPLY, '回復');										//Prints text for reply link
define(S_OLD, '刪除標記 (老).');								//Prints text to be displayed before post is marked for deletion, see: retention
define(S_RESU, 'Post');											//Prints post?
define(S_ABBR, ' 張貼被忽略. 點擊回復顯示.');					//Prints text to be shown when replies are hidden
define(S_REPDEL, '刪除張貼 ');									//Prints text next to S_DELPICONLY (left)
define(S_DELPICONLY, '只檔案');									//Prints text next to checkbox for file deletion (right)
define(S_DELKEY, '密碼 ');										//Prints text next to password field for deletion (left)
define(S_DELETE, '刪除');										//Defines deletion button's name
define(S_PREV, '前');											//Defines previous button
define(S_FIRSTPG, '後');										//Defines previous button
define(S_NEXT, '下');											//Defines next button
define(S_LASTPG, '下');											//Defines next button
define(S_FOOT, '- <a href="http://php.s3.to" target="_blank">GazouBBS</a> + <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://www.1chan.net/futallaby/" target="_blank">futallaby</a> -'); //Prints footer (leave these credits)
define(S_RELOAD, '刷新');										//Reloads the image board (refresh)
define(S_UPFAIL, '失敗: 上載失敗.');							//Returns error for failed upload (reason: unknown?)
define(S_NOREC, '失敗: 不能找到記錄.');							//Returns error when record cannot be found
define(S_SAMEPIC, '失敗: 探測到重複的 md5 校驗和.');			//Returns error when a md5 checksum dupe is detected
define(S_TOOBIG, '這幅圖過大!  請上傳小一些的圖!');
define(S_TOOBIGORNONE, '這幅圖過大或根本沒圖片.  耶.');
define(S_UPGOOD, ' '.$upfile_name.' 上傳成功!<br><br>');		//Defines message to be displayed when file is successfully uploaded
define(S_STRREF, '失敗: 字串被拒絕.');							//Returns error when a string is refused
define(S_UNJUST, '失敗: 濫用發貼.');							//Returns error on an unjust POST - prevents floodbots or ways not using POST method?
define(S_NOPIC, '失敗: 未選擇檔案.');								//Returns error for no file selected and override unchecked
define(S_NOTEXT, '失敗: 未輸入文字.');							//Returns error for no text entered in to subject/comment
define(S_MANAGEMENT, '管理員 : ');								//Defines prefix for Manager Post name
define(S_DELETION, '刪除');										//Prints deletion message with quotes?
define(S_TOOLONG, '失敗: 文字太長.');							//Returns error for too many characters in a given field
define(S_UNUSUAL, '失敗: 不正常的回復.');						//Returns error for abnormal reply? (this is a mystery!)
define(S_BADHOST, '失敗: IP 禁止.');							//Returns error for banned host ($badip string)
define(S_PROXY80, '失敗: 探測到 :80 埠代理伺服器.');			//Returns error for proxy detection on port 80
define(S_PROXY8080, '失敗: 探測到 :8080 埠代理伺服器');			//Returns error for proxy detection on port 8080
define(S_SUN, '日');											//Defines abbreviation used for "Sunday"
define(S_MON, '一');											//Defines abbreviation used for "Monday"
define(S_TUE, '二');											//Defines abbreviation used for "Tuesday"
define(S_WED, '三');											//Defines abbreviation used for "Wednesday"
define(S_THU, '四');											//Defines abbreviation used for "Thursday"
define(S_FRI, '五');											//Defines abbreviation used for "Friday"
define(S_SAT, '六');											//Defines abbreviation used for "Saturday"
define(S_ANONAME, '匿名者');									//Defines what to print if there is no text entered in the name field
define(S_ANOTEXT, '無文字');									//Defines what to print if there is no text entered in the comment field
define(S_ANOTITLE, '無主題');									//Defines what to print if there is no text entered into subject field
define(S_RENZOKU, '失敗: 發帖頻率過高, 張貼被丟棄.');			//Returns error for $sec/post spam filter
define(S_RENZOKU2, '失敗: 發帖頻率過高, 檔案被丟棄.');			//Returns error for $sec/upload spam filter
define(S_RENZOKU3, '失敗: 發帖頻率過高.');						//Returns error for flood? (don't know the specifics)
define(S_DUPE, '失敗: 存在重複的檔案.');						//Returns error for a duped file (same upload name or same tim/time)
define(S_NOTHREADERR, '失敗: 指定的討論線索不存在.');			//Returns error when a non-existant thread is accessed
define(S_SCRCHANGE, '正在刷新頁面.');							//Defines message to be displayed when post is successful									//
define(S_BADDELPASS, '失敗: 密碼錯誤.');						//Returns error for wrong password (when user tries to delete file)
define(S_WRONGPASS, '失敗: 管理密碼不正確.');					//Returns error for wrong password (when trying to access Manager modes)
define(S_RETURNS, '返回');										//Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
define(S_LOGUPD, '更新');										//Updates the log/SQLDB by accessing the PHP file
define(S_MANAMODE, '管理員模式');								//Prints heading on top of Manager page
define(S_MANAREPDEL, '管理面板');								//Defines Management Panel radio button--allows the user to view the management panel (overview of all posts)
define(S_MANAPOST, '以管理員身份張貼');							//Defines Manager Post radio button--allows the user to post using HTML code in the comment box
define(S_MANASUB, '提交');										//Defines name for submit button in Manager Mode
define(S_DELLIST, '管理面板');									//Prints sub-heading of Management Panel
define(S_ITDELETES, '刪除');									//Defines for deletion button in Management Panel
define(S_MDRESET, '重置');										//Defines name for field reset button in Management Panel
define(S_MDONLYPIC, '只檔案');									//Sets whether or not to delete only file, or entire post/thread
define(S_MDTABLE1, '<th>刪除?</th><th>張貼編號 No.</th><th>時間</th><th>主題</th>');			//Explains field names for Management Panel (Delete?->Subject)
define(S_MDTABLE2, '<th>姓名</th><th>評論</th><th>主機</th><th>大小<br>(位元組)</th><th>md5</th><th>回復 #</th><th>No idea</th><th>No idea</th>');						  //Explains names for Management Panel (Name->md5)
define(S_RESET, '重置');										//Sets name for field reset button (global)
define(S_IMGSPACEUSAGE, '已使用空間 :');						//Prints space used KB by the board under Management Panel
define(S_CANNOTWRITE, '失敗: 不能寫資料夾.<br>');					//Returns error when the script cannot write to the directory, this is used on initial setup--check your chmod (777)
define(S_NOTWRITE, '失敗: 不能寫資料夾.<br>');					//Returns error when the script cannot write to the directory, the chmod (777) is wrong
define(S_NOTREAD, '失敗: 不能讀資料夾.<br>');						//Returns error when the script cannot read from the directory, the chmod (777) is wrong
define(S_NOTDIR, '失敗: 資料夾不存在.<br>');						//Returns error when the script cannot find/read from the directory (does not exist/isn't directory), the chmod (777) is wrong
define(S_SQLCONF, 'MySQL 連接失敗');							//MySQL connection failure
define(S_SQLDBSF, '資料庫失敗, 請檢查 SQL 設置<br>');			//database select failure
define(S_TCREATE, '正在創建表!<br>\n');							//creating table
define(S_TCREATEF, '不能創建表!<br>');							//table creation failed
define(S_SQLFAIL, '嚴重 SQL 問題!<br>');						//SQL Failure
?>
