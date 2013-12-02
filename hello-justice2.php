<?php
/*  
Plugin Name: Hello Justice2
Plugin URI: https://github.com/j801/hello-justice2
Description: This is just a joke plugin.   
Author: Yuki Okamoto (HN:Justice)      
Version: 2.0
Author URI: http://press.monaca.mobi/                                   
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/                                  

function hello_justice2($content) {
  $messages[] = '僕、君たちにお願いがあって来たんだ。僕と契約して、MonacaPressの開発者になってよ！';
  $messages[] = 'よりにもよって、プラグインをGPLで公開するなんて、どうかしてるよ';
  $messages[] = '公式がGPLを優遇するなら、みんなGPLで書くしかないじゃない！あなたも・・・私もっ！';
  $messages[] = '君のソースコードはエントロピーを凌駕した';
  $messages[] = 'GPLってのはタダじゃないんだ。コードを活用すればそれ以上のコードがGPLで撒き散らされる。';
  $messages[] = '訳が分からないよ。どうして公式はそんなに、GPLにこだわるんだい';
  
  // choise message from messages by random  
  $min = 0;  
  $max = count($messages) - 1;  
  $key = mt_rand($min, $max);  
  $message = $messages[$key];    
  return $content.$message;
}

// set that function up to execute when action is called
add_filter('the_content', 'hello_justice2');
?>
