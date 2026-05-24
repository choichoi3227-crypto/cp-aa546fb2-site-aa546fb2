<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'qpv0wb5oixlm8dy5qjda03a84z3prig2ze9503l8km4e9q0j0cmechl9a5s9rzgk' );
define( 'SECURE_AUTH_KEY',  'og70o2t6vya2mfq58g016g3sw1i4nmruhc89tw59o951c0pndbsf004xsgtzvvi1' );
define( 'LOGGED_IN_KEY',    'izstjyqhzb7tht7f9o6g2hh9zu4a571kqc3n38m0hnq6zi5m5uj653z0v92t4mon' );
define( 'NONCE_KEY',        '9ojjg1ixmp59kprs0510nma2n1cxb336tdqrxwpi98owvasxpuvlcuyieowbwskf' );
define( 'AUTH_SALT',        '846brnk5ly6svduwm0ty63bwnyu76zw6t7l0olj37zoat2fktithuubrths3b09m' );
define( 'SECURE_AUTH_SALT', 'ktxyp90p340gp6an09r3wl97hlz5gu78go61ki1ol1qylwulh1dwjzr3uq7kp1cy' );
define( 'LOGGED_IN_SALT',   'q29deu71ek48aq0tdbrvbntwimx89igp9ot2sonoljfx30h3atej0afqfj1gpz2f' );
define( 'NONCE_SALT',       'p9m0a9smlkyzv5hgv35ls7k1r1xwhy5wm45i1v4eev2c9ommwkffetl2pdcea9p6' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-aa546fb2-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-aa546fb2-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
