<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */
 
$MONGO = array();
$MONGO["features"]["log_query"] = "off";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
* Configuration of MongoDB servers
* 
* @see more details at http://rockmongo.com/wiki/configuration?lang=en_us
*/
$MONGO["servers"][$i]["mongo_name"] = "Localhost";//mongo server name
$MONGO["servers"][$i]["mongo_host"] = "127.0.0.1";//mongo host
$MONGO["servers"][$i]["mongo_port"] = "27017";//mongo port
$MONGO["servers"][$i]["mongo_timeout"] = 0;//mongo connection timeout
//$MONGO["servers"][$i]["mongo_db"] = "tictactoe";//default mongo db to connect, works only if mongo_auth=false
//$MONGO["servers"][$i]["mongo_user"] = "dat";//mongo authentication user name, works only if mongo_auth=false
//$MONGO["servers"][$i]["mongo_pass"] = "dat";//mongo authentication password, works only if mongo_auth=false
//$MONGO["servers"][$i]["mongo_auth"] = true;//enable mongo authentication?

$MONGO["servers"][$i]["control_auth"] = true;//enable control users, works only if mongo_auth=false
$MONGO["servers"][$i]["control_users"]["admin"] = "admin";//one of control users ["USERNAME"]=PASSWORD, works only if mongo_auth=false

$MONGO["servers"][$i]["ui_only_dbs"] = "";//databases to display
$MONGO["servers"][$i]["ui_hide_dbs"] = "";//databases to hide
$MONGO["servers"][$i]["ui_hide_collections"] = "";//collections to hide
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;//if hide the system collections
$i ++;

/**
 * mini configuration for another mongo server
 */
/**
$MONGO["servers"][$i]["mongo_name"] = "Localhost2";
$MONGO["servers"][$i]["mongo_host"] = "127.0.0.1";
$MONGO["servers"][$i]["mongo_port"] = "27017";
$MONGO["servers"][$i]["control_users"]["admin"] = "password";
$i ++;
**/

?>