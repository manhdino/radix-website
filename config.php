<?php
/*File này chứa các hằng số cấu hình
+ Do khi sử dụng các hàm để lấy thời gian hiện tại nhưng thời gian trả về
lại không khớp vì timezone trên Server đang bị sai
  -> Sử dụng: Hàm date_default_timezone_set() sẽ đặt giá trị timezone mặc định cho hệ thống, 
tất cả các hàm về xử lí thời gian sẽ sử dụng timezone này, thì lúc này ta sẽ lấy được chính xác
thời gian hiện tại
*/
date_default_timezone_set('Asia/Ho_Chi_Minh');

//Thiết lập hằng số cho client
const _MODULE_DEFAULT = 'home'; //Module mặc định, 
const _ACTION_DEFAULT = 'lists'; //Action mặc định

//Thiết lập hằng số cho admin
const _MODULE_DEFAULT_ADMIN = 'dashboard';
 

const _INCODE = true; //Ngăn chặn hành vi truy cập trực tiếp vào file

//Thiết lập host
define('_WEB_HOST_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/radix-website'); //Địa chỉ trang chủ
define('_WEB_HOST_ADMIN_TEMPLATE', _WEB_HOST_ROOT.'/templates/admin');
define('_WEB_HOST_CLIENT_TEMPLATE', _WEB_HOST_ROOT.'/templates/client');
//Thiết lập path
define('_WEB_PATH_ROOT', __DIR__);
define('_WEB_PATH_ADMIN_TEMPLATE', _WEB_PATH_ROOT.'/templates/admin');
define('_WEB_PATH_CLIENT_TEMPLATE', _WEB_PATH_ROOT.'/templates/client');

//Thiết lập kết nối database

const _HOST = 'localhost';
const _USER = 'root';
const _PASS = ''; //Xampp => pass='';
const _DB = 'radix_web_db';
const _DRIVER = 'mysql';

//Thiết lập số lượng bản ghi hiển thị trên 1 trang
const _PER_PAGE = 10;