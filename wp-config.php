<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'CN_WordPress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'w314314');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '++#-3Rz^ 8osZVdM:u,Qkh/Oe!olZ_%^s306V3 aB4dV0K+TexwkwaCTv6:vt~  ');
define('SECURE_AUTH_KEY',  'B(K+<u=R6BDaUUre3iY,C~G3x|^?t1qIv`qb >0-{)O,EZ3!7?WQJ8DT^!v-2GW:');
define('LOGGED_IN_KEY',    'xdjtN:g-ddPpB@o*|t~3zz9h?S2bd@`!}JhWt0j=F:y<#-pd}R_lpBd4y#U2 b>@');
define('NONCE_KEY',        'Ugn&0-6f+]])w W:byD+0am6UD@og^WU}=<J!q~uR6TW}nw|Rf1X4QH-Rw3X 2Hh');
define('AUTH_SALT',        '%^WLH[yQX1hXFg(jen.jCy.NCDc-qW!cp1e0ti*.X;~|Kl6p$QRyG_vm;^Xa5x#|');
define('SECURE_AUTH_SALT', 'b4eSS%os}*Cg=; Lq;*cS]/Ag^P.F^zterSt?!j>#^j4go.2%LxSs?u[OefM?Bo(');
define('LOGGED_IN_SALT',   'we# su2S^)HiA-h[PlcL/[m&xwpB=)N:W_G|~#>g+:WYSM-ZC8IX<0&S+/s4O*_,');
define('NONCE_SALT',       ';v_VGs%/+7=l{;G6#KuA)4m]$++Q^_tm~t/^dyC8YmD7`a2t.9`Z8&h!P:6l!{eG');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');


