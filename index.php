<?php
/*
Plugin Name: Первый плагин 
Plugin URI: http://vk.com/graffit401
Description: Описание первого плагина 
Version:  1.0
Author: SerG
Author URI: http://vk.com/graffit401
*/
/*  Copyright ГОД  ИМЯ_АВТОРА_ПЛАГИНА  (email: E-MAIL_АВТОРА)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
    add_action ('admin_menu', 'mt_add_pages');
    function mt_add_pages () {
               add_menu_page ('Первый плагин', 'Первый плагин', 8, __FILE__, 'mt_toplevel_page');
                }
    function mt_toplevel_page () {
                echo "<h2> Первый плагин </ h2>";
                }   
?>
