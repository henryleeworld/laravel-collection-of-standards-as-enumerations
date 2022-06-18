# Laravel 9 作為列舉的標準集合

引入 prinsfrank 的 standards 套件來擴增作為列舉的標準集合，標準為國家、屬地、具特殊科學價值地點建立國際認可的代碼，列舉則讓開發者自定義型別，限制有限數值的可能值。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/iso` 來進行台灣代碼取得。

----

## 畫面截圖
![](https://i.imgur.com/xhVCpSz.png)
> 各國皆有兩碼、三碼英文以及三位數字碼之編號
