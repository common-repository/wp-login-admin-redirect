<?php
/*
Plugin Name: WP Login Admin Redirect
Plugin URI: https://flares.jp/tools/wp-login-admin-redirect/
Description: If the redirect_to parameter is assigned to the URL in the logged-in state, accessing the management screen redirects to the URL specified by redirect_to.
Version: 1.0
Author: YAMAGUCHI Shin
Author URI: https://flares.jp/
License: GPL2
*/
/*  Copyright 2019 YAMAGUCHI Shin (email : shin.yamaguchi@flares.jp)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function logedInAdminRedirect() {
    if(isset($_GET['redirect_to'])){
        $to = esc_url($_GET['redirect_to']);
        header('Location: ' . $to);
        exit;
    }
}
add_action( 'admin_init', 'logedInAdminRedirect' );

?>