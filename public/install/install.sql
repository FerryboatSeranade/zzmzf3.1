-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-06-18 19:28:07
-- 服务器版本： 5.7.41-log
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `pay_zzwll_cn`
--

-- --------------------------------------------------------

--
-- 表的结构 `zz_system_admin`
--

CREATE TABLE `zz_system_admin` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户密码',
  `status` int(1) NOT NULL COMMENT '用户状态：0禁用，1开启',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  `update_time` bigint(20) NOT NULL COMMENT '更新时间',
  `login_time` bigint(20) NOT NULL COMMENT '登录时间',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号',
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮箱',
  `role` int(11) NOT NULL COMMENT '角色',
  `head_img` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户头像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员管理';

--
-- 转存表中的数据 `zz_system_admin`
--

INSERT INTO `zz_system_admin` (`id`, `username`, `password`, `status`, `create_time`, `update_time`, `login_time`, `phone`, `email`, `role`, `head_img`) VALUES
(1, 'admin', '$2y$10$t0BlL4SB7Hi6UfQEJogtZuAqyLFnTVs2tGANmIAnnueZNXcR.KMSW', 1, 1677308198, 1687086406, 1687086406, '', '', 1, '/static/admin/images/head.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `zz_system_config`
--

CREATE TABLE `zz_system_config` (
  `k` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `v` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='配置管理';

--
-- 转存表中的数据 `zz_system_config`
--

INSERT INTO `zz_system_config` (`k`, `v`) VALUES
('authcode', ''),
('confirm', '0'),
('cron_key', '123456'),
('description', '至尊码支付'),
('e_char_set', 'utf-8'),
('e_from_name', '至尊网络'),
('e_host', 'smtp.qq.com'),
('e_password', ''),
('e_port', '465'),
('e_set_from', '123456@qq.com'),
('e_smtp_secure', 'ssl'),
('e_status', '0'),
('e_username', '123456@qq.com'),
('email', 'z@zzwws.cn'),
('epayid_ali', '123456'),
('epaykey_ali', '123456'),
('epayurl_ali', 'http://pay.zzwws.top:81/'),
('fileext', 'png,jpg,gif,jpeg,zip'),
('filesize', '10'),
('footer', 'Copyright © 2023 <a href=\"http://www.zzwws.cn\"  target=\"_blank\">至尊码支付</a> All Rights Reserved'),
('formwork', '3'),
('keywords', '至尊码支付'),
('mail_login', '0'),
('mail_order', ''),
('mail_order_bd', '1'),
('offline', '1'),
('order_timeout', '5'),
('phone', ''),
('popup', '0'),
('prompt', ''),
('qq', '2352164397'),
('timeout_url', ''),
('title', '至尊码支付'),
('url', 'http://pay.zzwws.top:81/'),
('voice', '0'),
('voice_text', '你好，你本次订单实际金额为{money}元，请按照金额进行付款。'),
('weixin', '');

-- --------------------------------------------------------

--
-- 表的结构 `zz_system_log`
--

CREATE TABLE `zz_system_log` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `uid` int(11) NOT NULL COMMENT '用户id：0系统，-1游客',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `ip` bigint(20) NOT NULL COMMENT 'ip地址',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='日志管理';

-- --------------------------------------------------------

--
-- 表的结构 `zz_system_menu`
--

CREATE TABLE `zz_system_menu` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'ID',
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '父ID',
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '名称',
  `icon` varchar(30) NOT NULL DEFAULT '' COMMENT '菜单图标',
  `href` varchar(50) NOT NULL DEFAULT '' COMMENT '链接',
  `target` varchar(10) NOT NULL DEFAULT '_self' COMMENT '链接打开方式',
  `sort` int(11) DEFAULT '0' COMMENT '菜单排序',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT '状态(0:禁用,1:启用)',
  `remark` varchar(50) DEFAULT NULL COMMENT '备注信息',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  `update_time` bigint(20) NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='系统菜单表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `zz_system_menu`
--

INSERT INTO `zz_system_menu` (`id`, `pid`, `title`, `icon`, `href`, `target`, `sort`, `status`, `remark`, `create_time`, `update_time`) VALUES
(250, 0, '系统管理', 'fa fa-cog', '', '_self', 0, 1, '', 0, 0),
(254, 250, '配置管理', 'fa fa-asterisk', 'system.config/edit', '_self', 6, 1, '', 0, 0),
(255, 250, '菜单管理', 'fa fa-tree', 'system.menu/index', '_self', 5, 1, '', 0, 0),
(260, 250, '快捷入口', 'fa fa-arrow-circle-right', 'system.quick/index', '_self', 7, 1, '', 0, 0),
(264, 250, '通道管理', 'fa fa-archive', 'system.passage/index', '_self', 1, 1, '', 1678279537, 1678279537),
(266, 250, '支付配置', 'fa fa-gratipay', 'system.pay/edit', '_self', 3, 1, '', 1678279853, 1678279853),
(267, 250, '定时任务', 'fa fa-clock-o', 'system.cron/index', '_self', 4, 1, '', 1686037663, 1686037663),
(268, 250, '订单管理', 'fa fa-first-order', 'system.order/index', '_self', 2, 1, '', 1686037775, 1686037775);

-- --------------------------------------------------------

--
-- 表的结构 `zz_system_notice`
--

CREATE TABLE `zz_system_notice` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `status` int(1) NOT NULL COMMENT '状态：0关闭，1开启',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  `update_time` bigint(20) NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='系统公告';

-- --------------------------------------------------------

--
-- 表的结构 `zz_system_order`
--

CREATE TABLE `zz_system_order` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `pid` int(11) NOT NULL COMMENT '通道ID',
  `trade_no` varchar(20) NOT NULL COMMENT '订单号',
  `out_trade_no` varchar(50) NOT NULL COMMENT '商户订单号',
  `name` varchar(50) CHARACTER SET utf8mb4 NOT NULL COMMENT '商品名称',
  `type` int(1) NOT NULL COMMENT '支付方式：1微信，2支付宝，3QQ，4数字人民币',
  `money` decimal(10,2) NOT NULL COMMENT '金额',
  `truemoney` decimal(10,2) NOT NULL COMMENT '实付金额',
  `notify_url` text NOT NULL COMMENT '异步通知地址',
  `return_url` text NOT NULL COMMENT '跳转通知地址',
  `email` varchar(50) NOT NULL COMMENT '补单邮箱',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  `pay_time` bigint(20) NOT NULL COMMENT '支付时间',
  `status` int(1) NOT NULL COMMENT '状态：0未支付，1已支付，2回调失败，3已过期',
  `ip` bigint(20) NOT NULL COMMENT 'ip地址',
  `sitename` varchar(100) CHARACTER SET utf8mb4 NOT NULL COMMENT '网站名称',
  `close_time` bigint(20) NOT NULL DEFAULT '0' COMMENT '关闭时间',
  `send_mail` int(1) DEFAULT '0' COMMENT '是否提交过补单：0否，1是',
  `update_time` bigint(20) NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单管理';

--
-- 转存表中的数据 `zz_system_order`
--


-- --------------------------------------------------------

--
-- 表的结构 `zz_system_passage`
--

CREATE TABLE `zz_system_passage` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `type` int(1) NOT NULL COMMENT '支付模式：1微信，2支付宝，3QQ，4数字人民币',
  `code` int(1) NOT NULL COMMENT '通道模式：0无金额收款码，1有金额收款码，2免输入',
  `zf_pid` varchar(20) NOT NULL COMMENT '支付用户ID',
  `ewm` text NOT NULL COMMENT '二维码解码地址',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '当前余额',
  `old_balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '上次余额',
  `succcount` int(11) NOT NULL COMMENT '收款笔数',
  `succprice` decimal(10,2) NOT NULL COMMENT '收款金额',
  `is_status` int(1) NOT NULL COMMENT '在线状态',
  `status` int(1) NOT NULL COMMENT '状态：0关闭，1开启',
  `hang_free` int(1) NOT NULL COMMENT '免挂：0关闭，1开启',
  `cookie` text NOT NULL COMMENT 'cookie',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  `update_time` bigint(20) NOT NULL COMMENT '更新时间',
  `run_time` bigint(20) NOT NULL COMMENT '监控运行时间',
  `remarks` varchar(20) NOT NULL COMMENT '备注',
  `money_change` int(1) NOT NULL DEFAULT '0' COMMENT '免递增：0关闭，1开启',
  `pay_qf` int(1) NOT NULL DEFAULT '0' COMMENT '区分方式：0金额递增，1金额递减',
  `transfer` int(1) NOT NULL DEFAULT '0' COMMENT '个人转账：0关闭，1个人转账，2转入小钱袋，3扫码转账',
  `ck_time` bigint(20) NOT NULL DEFAULT '0' COMMENT 'CK更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='通道管理';

--
-- 转存表中的数据 `zz_system_passage`
--


-- --------------------------------------------------------

--
-- 表的结构 `zz_system_qrcode`
--

CREATE TABLE `zz_system_qrcode` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `pid` int(11) NOT NULL COMMENT '通道ID',
  `money` decimal(10,2) NOT NULL COMMENT '固定金额',
  `ewm` varchar(200) NOT NULL COMMENT '收款码地址',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  `update_time` bigint(20) NOT NULL COMMENT '更新时间',
  `status` int(1) NOT NULL COMMENT '状态：0关闭，1开启'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='有金额收款码';

--
-- 转存表中的数据 `zz_system_qrcode`
--


-- --------------------------------------------------------

--
-- 表的结构 `zz_system_quick`
--

CREATE TABLE `zz_system_quick` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `sort` int(11) NOT NULL COMMENT '排序',
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '权限名称',
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '图标',
  `href` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '快捷链接',
  `remark` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  `status` int(1) NOT NULL COMMENT '状态：0关闭，1开启',
  `create_time` bigint(20) NOT NULL COMMENT '添加时间',
  `update_time` bigint(20) NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='快捷入口';

--
-- 转存表中的数据 `zz_system_quick`
--

INSERT INTO `zz_system_quick` (`id`, `sort`, `title`, `icon`, `href`, `remark`, `status`, `create_time`, `update_time`) VALUES
(1, 0, '通道管理', 'fa fa-archive', 'system.passage/index', '', 1, 1676622894, 1676622894),
(2, 1, '订单管理', 'fa fa-first-order', 'system.order/index', '', 1, 1676880931, 1676880931),
(5, 4, '配置管理', 'fa fa-asterisk', 'system.config/index', '', 1, 1676881751, 1676881751);

-- --------------------------------------------------------

--
-- 表的结构 `zz_tmp_price`
--

CREATE TABLE `zz_tmp_price` (
  `price` varchar(20) NOT NULL COMMENT '整数金额和支付方式',
  `oid` bigint(20) NOT NULL COMMENT '订单号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='临时金额';

--
-- 转存表中的数据 `zz_tmp_price`
--

--
-- 转储表的索引
--

--
-- 表的索引 `zz_system_admin`
--
ALTER TABLE `zz_system_admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zz_system_config`
--
ALTER TABLE `zz_system_config`
  ADD PRIMARY KEY (`k`);

--
-- 表的索引 `zz_system_log`
--
ALTER TABLE `zz_system_log`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zz_system_menu`
--
ALTER TABLE `zz_system_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `href` (`href`);

--
-- 表的索引 `zz_system_notice`
--
ALTER TABLE `zz_system_notice`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zz_system_order`
--
ALTER TABLE `zz_system_order`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zz_system_passage`
--
ALTER TABLE `zz_system_passage`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zz_system_qrcode`
--
ALTER TABLE `zz_system_qrcode`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zz_system_quick`
--
ALTER TABLE `zz_system_quick`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zz_tmp_price`
--
ALTER TABLE `zz_tmp_price`
  ADD PRIMARY KEY (`price`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `zz_system_admin`
--
ALTER TABLE `zz_system_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `zz_system_log`
--
ALTER TABLE `zz_system_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- 使用表AUTO_INCREMENT `zz_system_menu`
--
ALTER TABLE `zz_system_menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=269;

--
-- 使用表AUTO_INCREMENT `zz_system_notice`
--
ALTER TABLE `zz_system_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- 使用表AUTO_INCREMENT `zz_system_order`
--
ALTER TABLE `zz_system_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=93;

--
-- 使用表AUTO_INCREMENT `zz_system_passage`
--
ALTER TABLE `zz_system_passage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `zz_system_qrcode`
--
ALTER TABLE `zz_system_qrcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `zz_system_quick`
--
ALTER TABLE `zz_system_quick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
