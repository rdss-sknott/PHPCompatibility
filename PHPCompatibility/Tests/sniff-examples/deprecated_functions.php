<?php

call_user_method();
call_user_method_array();
define_syslog_variables();
dl();
ereg();
ereg_replace();
eregi();
eregi_replace();
import_request_variables();
mcrypt_generic_end();
mysql_db_query();
mysql_escape_string();
mysql_list_dbs();
mysqli_bind_param();
mysqli_bind_result();
mysqli_client_encoding();
mysqli_fetch();
mysqli_param_count();
mysqli_get_metadata();
mysqli_send_long_data();
magic_quotes_runtime();
session_register();
session_unregister();
session_is_registered();
set_magic_quotes_runtime();
set_socket_blocking();
split();
spliti();
sql_regcase();
php_logo_guid();
php_egg_logo_guid();
php_real_logo_guid();
zend_logo_guid();
datefmt_set_timezone_id();
mcrypt_ecb();
mcrypt_cbc();
mcrypt_cfb();
mcrypt_ofb();
ocibindbyname();
ocicancel();
ocicloselob();
ocicollappend();
ocicollassign();
ocicollassignelem();
ocicollgetelem();
ocicollmax();
ocicollsize();
ocicolltrim();
ocicolumnisnull();
ocicolumnname();
ocicolumnprecision();
ocicolumnscale();
ocicolumnsize();
ocicolumntype();
ocicolumntyperaw();
ocicommit();
ocidefinebyname();
ocierror();
ociexecute();
ocifetch();
ocifetchinto();
ocifetchstatement();
ocifreecollection();
ocifreecursor();
ocifreedesc();
ocifreestatement();
ociinternaldebug();
ociloadlob();
ocilogoff();
ocilogon();
ocinewcollection();
ocinewcursor();
ocinewdescriptor();
ocinlogon();
ocinumcols();
ociparse();
ociplogon();
ociresult();
ocirollback();
ocirowcount();
ocisavelob();
ocisavelobfile();
ociserverversion();
ocisetprefetch();
ocistatementtype();
ociwritelobtofile();
ociwritetemporarylob();
imagepsbbox();
imagepsencodefont();
imagepsextendfont();
imagepsfreefont();
imagepsloadfont();
imagepsslantfont();
imagepstext();
ldap_sort();
php_check_syntax();
mysqli_get_cache_stats();
mcrypt_create_iv();
mcrypt_decrypt();
mcrypt_enc_get_algorithms_name();
mcrypt_enc_get_block_size();
mcrypt_enc_get_iv_size();
mcrypt_enc_get_key_size();
mcrypt_enc_get_modes_name();
mcrypt_enc_get_supported_key_sizes();
mcrypt_enc_is_block_algorithm_mode();
mcrypt_enc_is_block_algorithm();
mcrypt_enc_is_block_mode();
mcrypt_enc_self_test();
mcrypt_encrypt();
mcrypt_generic_deinit();
mcrypt_generic_init();
mcrypt_generic();
mcrypt_get_block_size();
mcrypt_get_cipher_name();
mcrypt_get_iv_size();
mcrypt_get_key_size();
mcrypt_list_algorithms();
mcrypt_list_modes();
mcrypt_module_close();
mcrypt_module_get_algo_block_size();
mcrypt_module_get_algo_key_size();
mcrypt_module_get_supported_key_sizes();
mcrypt_module_is_block_algorithm_mode();
mcrypt_module_is_block_algorithm();
mcrypt_module_is_block_mode();
mcrypt_module_open();
mcrypt_module_self_test();
mdecrypt_generic();

// Test against false positives.
$class->php_check_syntax();
MyClass::php_check_syntax();
MyNamespace\php_check_syntax();
echo PHP_CHECK_SYNTAX; // Constant.
const php_check_syntax = 'abc';
use php_check_syntax;
function php_check_syntax() {}
abstract class Split {}

// More deprecated functions, PHP 7.2
jpeg2wbmp();
png2wbmp();
create_function();
while (list($key, $val) = each($array)) {}
gmp_random(2);
read_exif_data();

// PHP 7.3.
image2wbmp();
mbregex_encoding();
mbereg();
mberegi();
mbereg_replace();
mberegi_replace();
mbsplit();
mbereg_match();
mbereg_search();
mbereg_search_pos();
mbereg_search_regs();
mbereg_search_init();
mbereg_search_getregs();
mbereg_search_getpos();
mbereg_search_setpos();
fgetss();
gzgetss();
