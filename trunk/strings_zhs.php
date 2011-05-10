<?

define(S_HOME, '主页');											//Forwards to home page
define(S_ADMIN, '管理入口');										//Forwards to Management Panel
define(S_RETURN, '返回');										//Returns to image board
define(S_POSTING, '发帖模式: 回复');								//Prints message in red bar atop the reply screen
define(S_NOTAGS, '允许使用 HTML 标签.');								//Prints message on Management Board
define(S_NAME, '姓名');											//Describes name field
define(S_EMAIL, 'E-mail');										//Describes e-mail field
define(S_SUBJECT, '标题');										//Describes subject field
define(S_SUBMIT, '提交');										//Describes submit button
define(S_COMMENT, '评论');										//Describes comment field
define(S_UPLOADFILE, '文件');										//Describes file field
define(S_NOFILE, '没有文件');										//Describes file/no file checkbox
define(S_DELPASS, '密码');										//Describes password field
define(S_DELEXPL, '(删除文件时使用的密码)');							//Prints explanation for password box (to the right)
define(S_RULES, '<ul><li>支持的文件类型: GIF, JPG, PNG</li>
<li>文件大小上限 '.MAX_KB.' KB.</li>
<li>大于 '.MAX_W.'x'.MAX_H.' 像素的图片将显示为缩略图.</li></ul>');				//Prints rules under posting section
define(S_REPORTERR, '失败: 未找到回复.');							//Returns error when a reply (res) cannot be found
define(S_THUMB, '缩略图显示, 点击图片显示原始大图.');					//Prints instructions for viewing real source
define(S_PICNAME, '文件 : ');										//Prints text before upload name/link
define(S_REPLY, '回复');										//Prints text for reply link
define(S_OLD, '删除标记 (老).');								//Prints text to be displayed before post is marked for deletion, see: retention
define(S_RESU, 'Post');											//Prints post?
define(S_ABBR, ' 帖子被忽略. 点击回复显示.');						//Prints text to be shown when replies are hidden
define(S_REPDEL, '删除帖子 ');									//Prints text next to S_DELPICONLY (left)
define(S_DELPICONLY, '只文件');									//Prints text next to checkbox for file deletion (right)
define(S_DELKEY, '密码 ');										//Prints text next to password field for deletion (left)
define(S_DELETE, '删除');										//Defines deletion button's name
define(S_PREV, '前');										//Defines previous button
define(S_FIRSTPG, '后');										//Defines previous button
define(S_NEXT, '下');											//Defines next button
define(S_LASTPG, '下');										//Defines next button
define(S_FOOT, '- <a href="http://php.s3.to" target="_blank">GazouBBS</a> + <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://www.1chan.net/futallaby/" target="_blank">futallaby</a> -'); //Prints footer (leave these credits)
define(S_RELOAD, '刷新');										//Reloads the image board (refresh)
define(S_UPFAIL, '失败: 上载失败.');								//Returns error for failed upload (reason: unknown?)
define(S_NOREC, '失败: 不能找到记录.');								//Returns error when record cannot be found
define(S_SAMEPIC, '失败: 探测到重复的 md5 校验和.');						//Returns error when a md5 checksum dupe is detected
define(S_TOOBIG, '这幅图过大!  请上传小一些的图!');
define(S_TOOBIGORNONE, '这幅图过大或根本没图片.  耶.');
define(S_UPGOOD, ' '.$upfile_name.' 上传成功!<br><br>');					//Defines message to be displayed when file is successfully uploaded
define(S_STRREF, '失败: 字符串被拒绝.');								//Returns error when a string is refused
define(S_UNJUST, '失败: 滥用发贴.');								//Returns error on an unjust POST - prevents floodbots or ways not using POST method?
define(S_NOPIC, '失败: 未选择文件.');								//Returns error for no file selected and override unchecked
define(S_NOTEXT, '失败: 未输入文字.');								//Returns error for no text entered in to subject/comment
define(S_MANAGEMENT, '管理员 : ');									//Defines prefix for Manager Post name
define(S_DELETION, '删除');										//Prints deletion message with quotes?
define(S_TOOLONG, '失败: 文字太长.');								//Returns error for too many characters in a given field
define(S_UNUSUAL, '失败: 不正常的回复.');								//Returns error for abnormal reply? (this is a mystery!)
define(S_BADHOST, '失败: IP 禁止.');								//Returns error for banned host ($badip string)
define(S_PROXY80, '失败: 探测到 :80 端口代理服务器.');							//Returns error for proxy detection on port 80
define(S_PROXY8080, '失败: 探测到 :8080 端口代理服务器');							//Returns error for proxy detection on port 8080
define(S_SUN, '日');											//Defines abbreviation used for "Sunday"
define(S_MON, '一');											//Defines abbreviation used for "Monday"
define(S_TUE, '二');											//Defines abbreviation used for "Tuesday"
define(S_WED, '三');											//Defines abbreviation used for "Wednesday"
define(S_THU, '四');											//Defines abbreviation used for "Thursday"
define(S_FRI, '五');											//Defines abbreviation used for "Friday"
define(S_SAT, '六');											//Defines abbreviation used for "Saturday"
define(S_ANONAME, '匿名者');										//Defines what to print if there is no text entered in the name field
define(S_ANOTEXT, '无文字');										//Defines what to print if there is no text entered in the comment field
define(S_ANOTITLE, '无主题');									//Defines what to print if there is no text entered into subject field
define(S_RENZOKU, '失败: 发帖频率过高, 帖子被丢弃.');						//Returns error for $sec/post spam filter
define(S_RENZOKU2, '失败: 发帖频率过高, 文件被丢弃.');						//Returns error for $sec/upload spam filter
define(S_RENZOKU3, '失败: 发帖频率过高.');								//Returns error for flood? (don't know the specifics)
define(S_DUPE, '失败: 存在重复的文件.');						//Returns error for a duped file (same upload name or same tim/time)
define(S_NOTHREADERR, '失败: 指定的讨论线索不存在.');					//Returns error when a non-existant thread is accessed
define(S_SCRCHANGE, '正在刷新页面.');									//Defines message to be displayed when post is successful									//
define(S_BADDELPASS, '失败: 密码错误.');							//Returns error for wrong password (when user tries to delete file)
define(S_WRONGPASS, '失败: 管理密码不正确.');						//Returns error for wrong password (when trying to access Manager modes)
define(S_RETURNS, '返回');										//Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
define(S_LOGUPD, '更新');										//Updates the log/SQLDB by accessing the PHP file
define(S_MANAMODE, '管理员模式');									//Prints heading on top of Manager page
define(S_MANAREPDEL, '管理面板');								//Defines Management Panel radio button--allows the user to view the management panel (overview of all posts)
define(S_MANAPOST, '以管理员身份发帖');									//Defines Manager Post radio button--allows the user to post using HTML code in the comment box
define(S_MANASUB, '提交');										//Defines name for submit button in Manager Mode
define(S_DELLIST, '管理面板');									//Prints sub-heading of Management Panel
define(S_ITDELETES, '删除');										//Defines for deletion button in Management Panel
define(S_MDRESET, '重置');										//Defines name for field reset button in Management Panel
define(S_MDONLYPIC, '只文件');									//Sets whether or not to delete only file, or entire post/thread
define(S_MDTABLE1, '<th>删除?</th><th>帖子号 No.</th><th>时间</th><th>主题</th>');			//Explains field names for Management Panel (Delete?->Subject)
define(S_MDTABLE2, '<th>姓名</th><th>评论</th><th>主机</th><th>大小<br>(字节)</th><th>md5</th><th>回复 #</th><th>No idea</th><th>No idea</th>');	//Explains names for Management Panel (Name->md5)
define(S_RESET, '重置');										//Sets name for field reset button (global)
define(S_IMGSPACEUSAGE, '已使用空间 :');						//Prints space used KB by the board under Management Panel
define(S_CANNOTWRITE, '失败: 不能写目录.<br>');						//Returns error when the script cannot write to the directory, this is used on initial setup--check your chmod (777)
define(S_NOTWRITE, '失败: 不能写目录.<br>');						//Returns error when the script cannot write to the directory, the chmod (777) is wrong
define(S_NOTREAD, '失败: 不能读目录.<br>');						//Returns error when the script cannot read from the directory, the chmod (777) is wrong
define(S_NOTDIR, '失败: 目录不存在.<br>');						//Returns error when the script cannot find/read from the directory (does not exist/isn't directory), the chmod (777) is wrong
define(S_SQLCONF, 'MySQL 连接失败');		//MySQL connection failure
define(S_SQLDBSF, '数据库失败, 请检查 SQL 设置<br>');	//database select failure
define(S_TCREATE, '正在创建表!<br>\n');	//creating table
define(S_TCREATEF, '不能创建表!<br>');		//table creation failed
define(S_SQLFAIL, '严重 SQL 问题!<br>');		//SQL Failure
?>
