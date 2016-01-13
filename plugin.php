<?php
/*
Plugin Name: TEST PLUGIN 3
Plugin URI: http://example.com/
Description: Used by millions, Test Plugins are an important part of the world
Version: 1.1.2
Author: Dion Hulse
Author URI: http://dd32.id.au/
License: GPLv2 or later
Text Domain: test-plugin
*/

/*
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
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_action( 'init', function() { echo '<h1>HELLO WORLD</h1>'; } );
add_action( 'admin_init', function() { echo '<h2>Hello Admin!</h1>'; } );

// Auto-sync'd by wporg
