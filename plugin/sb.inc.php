<?php
/*
PukiWiki - Yet another WikiWikiWeb clone.
sb.inc.php, v1.0 2020 M.Taniguchi
License: GPL v3 or (at your option) any later version

文字（アスタリスク）によるセクション区切りを表示するプラグイン。
画面の幅に応じて伸縮します。

【使い方】
#sb([num][,scale])

num   … 区切り文字の数。省略時の既定値は 3
scale … 表示スケール（百分率）。省略時の既定値は 100

【使用例】
#sb
#sb(1,200)
*/

/////////////////////////////////////////////////
// セクション区切りプラグイン設定（sb.inc.php）
if (!defined('PLUGIN_SB_CHARACTER'))     define('PLUGIN_SB_CHARACTER',    '⁕'); // 区切り文字
if (!defined('PLUGIN_SB_MAX_WIDTH'))     define('PLUGIN_SB_MAX_WIDTH',     0);   // 表示領域最大幅（0：100%）
if (!defined('PLUGIN_SB_DEFAULT_NUM'))   define('PLUGIN_SB_DEFAULT_NUM',   3);   // 既定の区切り文字数
if (!defined('PLUGIN_SB_DEFAULT_SCALE')) define('PLUGIN_SB_DEFAULT_SCALE', 100); // 既定の表示スケール


function plugin_sb_convert() {
	list($num, $size) = func_get_args();

	$num = ($num)? (int)$num : PLUGIN_SB_DEFAULT_NUM;
	$size = ($size)? (int)$size : PLUGIN_SB_DEFAULT_SCALE;
	$ch = '<div style="flex:0 1 0;padding:0;margin:0">' . PLUGIN_SB_CHARACTER . '</div>';

	$body .= '<div style="flex:0 1 0;padding:0;margin:0"></div>';
	for ($i = 0; $i < $num; $i++) $body .= $ch;
	$body .= '<div style="flex:0 1 0;padding:0;margin:0"></div>';

	$body = '<div><div class="_p_sb" style="display:flex;justify-content:space-between;width:100%;min-width:0;max-width:' . ((PLUGIN_SB_MAX_WIDTH)? PLUGIN_SB_MAX_WIDTH . 'px' : '100%') . ';font-size:' . $size . '%;line-height:1em;text-align:center;vertical-align:middle;padding:0;margin:0">' . $body . '</div></div>';

	return $body;
}
