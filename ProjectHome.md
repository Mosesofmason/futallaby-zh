Futallaby 的中文化翻译工程

Futallaby 的介绍和未中文化的源码来自 http://www.1chan.net/futallaby/


安装:

```
CO 出本项目源码到一个指定目录下

编辑 config.php. ADMIN_PASS 和 SQL 值必须设置; 其余值可选.

要用日本语,  改变 imgboard.php 第二个包含文件为 strings_j.php. 
要用简体中文, 改变 imgboard.php 第二个包含文件为 strings_zhs.php. 
要用正体中文, 改变 imgboard.php 第二个包含文件为 strings_zht.php. 
要用英国语,  不需要改变.

在 Web 服务器上创建存放的目录, 并设置权限为 777.

在其中创建名为 src 和 thumb 的文件夹 (权限同为 777).

将 imgboard.php, gif2png, futaba.css, 编辑过的 config.php, 以及
 strings_e.php (英语)  或
 strings_j.php (日本语) 或
 strings_zhs.php (简体中文) 或
 strings_zht.php (正体中文) 
文件放入创建的顶级目录.

目录结构类似这样...


/public_html/
 |
 |-- /imgboard/ (777)
        |
        |-- imgboard.php (644)
        |
        |-- config.php (644)
	|
	|-- futaba.css (644) 
        |
        |-- strings_e.php 或 strings_j.php 或 strings_zhs.php (644)
        |
        |-- /src/ (777)
        |
        |-- /thumb/ (777)
```


在浏览器中访问 imgboard.php, 贴图板将自动初始化.

Enjoy!


---


Futallaby 的中文化翻譯工程

Futallaby 的介紹和未中文化的源碼來自 http://www.1chan.net/futallaby/


安裝:

```
CO 出本專案源碼到一個指定資料夾下

編輯 config.php. ADMIN_PASS 和 SQL 值必須設置; 其餘值可選.

要用日本語,  改變 imgboard.php 第二個包含檔為 strings_j.php. 
要用簡體中文, 改變 imgboard.php 第二個包含檔為 strings_zhs.php. 
要用正體中文, 改變 imgboard.php 第二個包含檔為 strings_zht.php. 
要用英國語,  不需要改變.

在 Web 伺服器上創建存放的資料夾, 並設置許可權為 777.

在其中創建名為 src 和 thumb 的資料夾 (許可權同為 777).

將 imgboard.php, gif2png, futaba.css, 編輯過的 config.php, 以及
 strings_e.php (英語) 或
 strings_j.php (日本語) 或
 strings_zhs.php (簡體中文) 或
 strings_zht.php (正體中文) 
檔放入創建的頂級目錄.

資料夾結構類似這樣...


/public_html/
 |
 |-- /imgboard/ (777)
        |
        |-- imgboard.php (644)
        |
        |-- config.php (644)
	|
	|-- futaba.css (644) 
        |
        |-- strings_e.php 或 strings_j.php 或 strings_zhs.php (644)
        |
        |-- /src/ (777)
        |
        |-- /thumb/ (777)
```


在流覽器中訪問 imgboard.php, 貼圖板將自動初始化.

Enjoy!
