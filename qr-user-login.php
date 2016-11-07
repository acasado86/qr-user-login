<?php

/*
Plugin Name: QR User Login
Plugin URI: 
Description: Allow login to users using a link (or QR code).
Version: 1.0.0
Author: acasado
Author URI: https://github.com/acasado86
License: GPLv2
*/

/* 
Copyright (C) 2016 acasado

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

class QR_User_Login {
    static $instance = null;
    
    static function & get_instance() {
        if (null == QR_User_Login::$instance) {
            QR_User_Login::$instance = new QR_User_Login();
        }
        return QR_User_Login::$instance;
    }
    
    function QR_User_Login(){
        //ACTION AND FILTERS HOOKS
    }
    
    function activate_plugin() {
        
    }
    function desactivate_plugin() {
        
    }
    
}
$QRUL_instance = QR_User_Login::get_instance();
register_activation_hook(__FILE__, array($QRUL_instance, 'activate_plugin'));
register_deactivation_hook(__FILE__, array($QRUL_instance, 'desactivate_plugin'));