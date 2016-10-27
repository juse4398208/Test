<?php
$number = range(1,100);
$date = new DateTime('now');
$timestamp = array();
$date -> format('Y-m-d H:i:s');
$ timestamp[] = $ array("id" =>"$number" , "time" => "$date");

  echo json_encode($timestamp);
?>




[2016/9/30 下午6:24:21] A++ Eric(#3853): Project : xmlHttpRequest
    成品：http://192.168.153.118/week2/xmlHttpRequest/
    說明：
        1.寫一支data.php檔案輸出json格式的資料，100筆，欄位為: id (1-100), datetime (時間戳 ex: 2015/07/13 12:00:01 )
        2.寫一支 update.php 只輸出一筆json格式 {id : 1-100(亂數) , datetime : 當前時間戳}
        3.撰寫一個javascript 使用XMLHttpRequest , 定義 function ajax(callback)
        4.撰寫html頁面，使用ajax()向data.php取得json資料並畫出資料列表。
        5.每5秒，使用ajax()向update.php取得更新一筆資料，並對頁面同id資料進行時間的更新，並對更新後的文字顏色閃爍3次後恢復正常
    備註：
        1.不使用jquery等任可套件撰寫
        2.了解非同步的操作方式，並能學習原生javascript的操作方式
    指定完成日期:2016/10/3

Project : Curl
    說明：
        6.使用php curl擷取URL (積分榜 http://stats.touch-line.com/CompTable.asp?cust=9&lang=3&compid=4)參考使用 curl , preg_match.. 把資料解析後輸出 json
        7.使用撰寫的ajax劃出相同的表格頁面，並每10秒取json資料更新
    備註：
        1.延續上一個作業 請完成這兩項，並提交到gitlab上
    指定完成日期:2016/10/5
Project : ResponsiveWebDesign
    說明：
        1. 學習Responsive Web Design
            * 詳讀此網頁內容：http://learn.shayhowe.com/advanced-html-css/responsive-web-design/
        2. 依據學習後所的實作與心得，建置至少30頁的ppt
    備註：
        1.學習ＲＷＤ相關技巧
    指定完成日期:2016/10/7中午前
