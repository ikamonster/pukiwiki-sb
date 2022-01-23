# PukiWiki用プラグイン<br>	セクション区切り表示 sb.inc.php

アスタリスクほか文字・記号によるセクション区切りを表示する[PukiWiki](https://pukiwiki.osdn.jp/)用プラグイン。  
画面の幅に応じて伸縮します。

|対象PukiWikiバージョン|対象PHPバージョン|
|:---:|:---:|
|PukiWiki 1.5.3 ~ 1.5.4RC (UTF-8)|PHP 7.4 ~ 8.1|

## インストール

sb.inc.php を PukiWiki の plugin ディレクトリに配置してください。

## 使い方

```
#sb([num][,scale])
```

* num … 区切り文字の数。省略時の既定値は 3
* scale … 表示スケール（百分率）。省略時の既定値は 100

## 使用例

```
#sb
#sb(1,200)
```

## 設定

ソース内の下記の定数で動作を制御することができます。

|定数名|値|既定値|意味|
|:---|:---:|:---:|:---|
|PLUGIN_SB_CHARACTER|文字列|'⁕'|区切り文字|
|PLUGIN_SB_MAX_WIDTH|数値|0|表示領域最大幅（0：100%）|
|PLUGIN_SB_DEFAULT_NUM|数値|3|既定の区切り文字数|
|PLUGIN_SB_DEFAULT_SCALE|数値|100|既定の表示スケール|
