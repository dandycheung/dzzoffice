<?php
//计划任务示例，应用安装和卸载都将同步加入和删除此计划任务
//cronname:test     计划任务名称
//week:             设置星期几执行本任务，留空为不限制
//day:              设置哪一日执行本任务，留空为不限制
//hour:0            设置哪一小时执行本任务，留空为不限制
//minute:0,30       设置哪些分钟执行本任务，至多可以设置 12 个分钟值，多个值之间用半角逗号 "," 隔开，留空为不限制

if (!defined('IN_DZZ')) {
    exit('Access Denied');
}

//您的计划任务脚本内容