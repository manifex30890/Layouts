<?PHP
# Account Maker Config
$config['site']['serverPath'] = "/home/otserv/";
$config['site']['useServerConfigCache'] = false;
$config['site']['server_name'] = 'Telara';
$towns_list = array(1 => 'Telara');

$config['site']['outfit_images_url'] = 'http://outfit-images.ots.me/animatedOutfits1099/outfit.php';
$config['site']['item_images_url'] = 'http://item-images.ots.me/1099/';
$config['site']['equipaments_images_url'] = 'http://telara.servegame.com/images/equipaments/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';
$config['site']['encryptionType'] = 'sha1';

# Create Account Options
$config['site']['one_email'] = false;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 9999;
$config['site']['send_register_email'] = false;
$config['site']['select_flag'] = true;

# Create Character Options
$config['site']['newchar_vocations'] = array(1 => 'Sorcerer Sample', 2 => 'Druid Sample', 3 => 'Paladin Sample', 4 => 'Knight Sample');
$config['site']['newchar_towns'] = array(1);
$config['site']['max_players_per_account'] = 25;


# Emails Config
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "thoriaonline@gmail.com";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "ssl://smtp.gmail.com";
$config['site']['smtp_port'] = 465;
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "thoriaonline@gmail.com";
$config['site']['smtp_pass'] = "pedrorlx";

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 0;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array();
$config['site']['show_skills_info'] = true;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = false;
$config['site']['generate_new_reckey_price'] = 500;

# PAGE: guilds.php
$config['site']['invite_player_level'] = 1;
$config['site']['guild_need_level'] = 15;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'metro';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;

############################
######    PagSeguro   ######
############################

$config['pagSeguro']['email'] = "pedrin.rlx@hotmail.com";
$config['pagSeguro']['token'] = "5E8A9CF58C2949609861B0E70929BF15";
$config['pagSeguro']['urlRedirect'] = 'http://thoria.online/?view=donate&action=final';
$config['pagSeguro']['urlNotification'] = 'http://thoria.online/retpagseguro.php';
$config['pagSeguro']['productName'] = 'Tibia Coins';
$config['pagSeguro']['productValue'] = 0.09;
$config['pagSeguro']['doublePoints'] = false;
$config['pagSeguro']['host'] = 'localhost';
$config['pagSeguro']['database'] = 'banco';
$config['pagSeguro']['databaseUser'] = 'root';
$config['pagSeguro']['databasePass'] = 'pedrorlx';