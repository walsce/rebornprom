<?php
/* REBORN PROMISANCE - Turn-based strategy game
 * Copyright (C) QMT Productions
 *
 * $Id: config.php 1984 2014-10-01 15:41:08Z quietust $
 */

if (!defined('IN_GAME'))
	die("Access denied");

define('DB_TYPE', 'mysql');	// Database server type (see includes/database.php for allowed values)

define('DB_SOCK', '');		// Database server socket (for local connections, UNIX only - use instead of host/port)
define('DB_HOST', '');		// Database server hostname (for Windows, or for remote connections - use instead of socket)
define('DB_PORT', '');		// Database server port (blank for default)
define('DB_USER', '');		// Database server username
define('DB_PASS', '');		// Database server password
define('DB_NAME', '');		// Database schema

define('TABLE_PREFIX', 'modern_');	// Table name prefix (in case only a single database schema is available)

define('GAME_VERSION', '1.0');
define('GAME_TITLE', 'Reborn Promisance '. GAME_VERSION);				// server title, may customize to liking
define('URL_BASE', 'https://example.com/modern');			// the path in which Promisance is installed
define('URL_HOMEPAGE', 'https://example.com/');				// where users will be sent when they logout
//define('URL_FORUMS', 'https://example.com/forums/');	// where your site's forums are located
define('URL_DISCORD', '');	// where your site's Discord are located
										// (comment out if you have none)
define('MAIL_ADMIN', 'admin@example.com');					// administrative contact address
define('MAIL_VALIDATE', 'admin@example.com');				// source address for validation emails
define('TXT_NEWS', '<span style="color:white">Welcome to '. GAME_TITLE .'!</span>');
										// news message displayed at top of all pages
										// undefine if you don't want any
define('TXT_RULES', 'Additional information can be found in our forums.<br />'	// extra rules to display on signup page
	.'Please read through the FAQs before contacting an Administrator.');	// undefine if you don't want any
define('TXT_EMAIL', 'Be sure to check out https://www.example.com/ and tell your friends about us!');
										// custom text to display in signup email
define('DEFAULT_LANGUAGE', 'en-US');	// Default language pack to use, also used when not logged in
define('BASE_LANGUAGE', 'en-US');	// Base language pack, used for anything not defined in current/default

define('EMPIRES_PER_USER', 1);		// How many empires can be owned at once by a particular user?
define('TURNS_PROTECTION', 200);	// Duration of protection
define('TURNS_INITIAL', 200);		// Turns given on signup
define('TURNS_MAXIMUM', 360);		// Max accumulated turns
define('TURNS_STORED', 150);		// Max stored turns
define('TURNS_VALIDATE', 150);		// How long before validation is necessary
define('TURNS_ERA', 500);		// Minimum number of turns that must be spent in an era before one can advance or regress

define('VACATION_START', 12);		// Delay before empire is protected
define('VACATION_LIMIT', 72);		// Minimum vacation length (not including start delay)

define('TURNS_FREQ', 15);	// how often to give turns
define('TURNS_OFFSET', 0);	// offset (in minutes) for giving turns, relative to round start
define('TURNS_OFFSET_HOURLY', 0);	// offset (in minutes) for performing hourly events, relative to round start
define('TURNS_OFFSET_DAILY', 60*12);	// offset (in minutes) for performing daily events, relative to round start
define('TURNS_CRONTAB', TRUE);	// use "turns.php" to give out turns, scheduled via crontab; otherwise, trigger on page loads
define('TURNS_CRONLOG', TRUE);	// if TURNS_CRONTAB is disabled, store turn logs in the database for retrieval by turns.php
define('TURNS_COUNT', 2);	// how many turns to give during each period
define('TURNS_UNSTORE', 1);	// how many turns to release from Stored Turns at once

define('IDLE_TIMEOUT_NEW', 14);		// Remove new empire if idle for this many days before being prompted to validate (create and abandon)
define('IDLE_TIMEOUT_VALIDATE', 14);	// Remove new empire if prompted to validate but fails to do so within this many days (bad email address)
define('IDLE_TIMEOUT_ABANDON', 30);	// Remove established empire if idle for this many days (and not on vacation or disabled)
define('IDLE_TIMEOUT_KILLED', 2);	// Remove dead empire after this many days if never logged in to see notification
define('IDLE_TIMEOUT_DELETE', 3);	// Remove deleted empire after this many days (unless still under protection, in which case it is immediate)

define('LOTTERY_MAXTICKETS', 3);	// Maximum number of lottery tickets per empire
define('LOTTERY_JACKPOT', 1000000000);	// Base jackpot
define('LOTTERY_JACKPOT_MAX', 20000000000);	//Maximum value of lottery jackpot

define('BUILD_COST', 3500);	// Base building cost
define('DROP_DELAY', 60*60*12);	// Minimum delay (in seconds) between gaining land and dropping it

define('BANK_SAVERATE', 4.0);	// Base savings interest rate
define('BANK_LOANRATE', 7.5);	// Base loan interest rate

define('IDLE_OFFLINE', 15);    // set empires that are idle for this many minutes offline each time turns are given

define('PUBMKT_MINSTART', 2); // Minimum hours before goods will arrive on public market
define('PUBMKT_START', 6);	// Hours before goods will arrive on public market
define('PUBMKT_DISPLAY_TRANSFER_TIME', FALSE);	// Displays the transit time
define('PUBMKT_MINCASH', 10000000);	//Minimum value of goods required for transaction on the public market
define('PUBMKT_MINTIME', -1);	// Number of hours before users can manually remove items (-1 to disallow)
define('PUBMKT_MAXTIME', 72);	// Number of hours before items are automatically removed (-1 to disallow)
define('PUBMKT_UPDATETIME', 0); // Number of hours before items may have their price changed (-1 to disallow)
define('PUBMKT_MINSELL', 0);	// Minimum percentage of troops, per shipment, that can be sold on public market (0-100)
define('PUBMKT_MAXSELL', 50);	// Maximum percentage of troops, total, that can be sold on public market (0-100)
define('PUBMKT_MINFOOD', 0);	// Same as MINSELL, except for food
define('PUBMKT_MAXFOOD', 90);	// Same as MAXSELL, except for food
define('PUBMKT_MINRUNES', 0);    // Same as MINSELL, except for mana
define('PUBMKT_MAXRUNES', 75);    // Same as MAXSELL, except for mana
define('PUBMKT_MINPRICE', 42);	//Minimum percentage of base price allowed to sell troops for on the public market
define('PUBMKT_MAXPRICE', 300);	//Maximum percentage of base price allowed to sell troops for on the public market
define('PUBMKT_MINPRICE_FOOD', 30);	//Minimum percentage of base price allowed to sell food and runes for on the public market
define('PUBMKT_MAXPRICE_FOOD', 300);	//Maximum percentage of base price allowed to sell food and runes for on the public market
define('PUBMKT_CLOSE', 24);		//Disallow new listings and price changes this many hours before the round ends (0 to disable)

define('PVTM_RUNES', 750);

define('TURNS_POLYMORPH', 200);        // Turns required to polymorph
define('TURNS_RENAME', 1000);		// Players may rename their empire before using this many turns (-1 for unlimited)

define('LANDFARM_ID', 0);         // User ID of land farms (0 to disable)
define('LANDFARM_FOOD_GAIN', 50000);    // How much food to add to land farms per turn cycle (to pad their net worth)

define('CLAN_ENABLE', TRUE);	// Master enable for clans
define('CLAN_LIMIT_RATIO', 15);		// Limit clan size to 1 member for this many registered players
define('CLAN_LIMIT_MINIMUM', 6);	// Clan Size lower limit regardless of number of registered players
define('CLAN_ALLOW_EARLY', TRUE); //Allow clanning during protection?
define('CLAN_WARLEAVE_PENALTY', 48);	// Empires leaving a clan at war may be hit without regard to attack limits for this many hours
define('CLAN_MINJOIN', 72);	// Empires can't leave clans until they've been a member for this many hours
define('CLAN_MINREJOIN', 24);	// Empires can't create/join a new clan until this many hours after they left
define('CLAN_MINREJOIN_SAME', 72);	// Empires can't rejoin the same clan until this many hours after they left
define('CLAN_LEAVE_ATTACK', 6);	// Amount of time before an empire that left a clan may be attacked by members of that clan
define('CLAN_MINSHARE', 2);	// Unsharing clan forces takes this many hours to take effect
define('CLAN_SHARE_PCT', 10);	// Percentage of forces each clan member can share for defense
define('CLAN_SHARE_MEMBER_SCALING', 6);	// Scale down the effects of shared forces for clans exceeding this many players
define('CLAN_MINRELATE', 48);	// How long a clan must wait before it can modify an alliance or war slot
define('CLAN_MAXALLY', 0);	// Maximum number of alliances (outbound and inbound)
define('CLAN_MAXWAR', 3);	// Maximum number of wars (outbound only)
define('CLAN_VIEW_STAT', TRUE);	// Allow clan leaders to view the detailed Empire Status of members
define('CLAN_VIEW_AID', TRUE);	// Display summary of all foreign aid sent between clan members on Clan Management page
define('CLAN_INVITE_TIME', 48);	// How long clan invites last before they expire
define('CLAN_LATE_JOIN', TRUE);	// Allow empires to join clans during the cooldown period
define('CLAN_PASSIVE_WAR_TAX', TRUE);	//Should clans who declare war on others be subject to the passive war tax?

define('CLAN_FORCED', FALSE);    // Are players forced into a clan on this server? Prevents leaving or removal of clan members if TRUE
define('CLAN_MASTER_PASSWORD', ''); // If set, require players to enter this password to create a clan (for forced clan servers)

define('PVTM_MAXSELL', 6666);	// Percentage of troops that can be sold on private market (0-10000)
define('PVTM_SHOPBONUS', 0.20);	// Percentage of private market cost bonus for which shops are responsible (0-1)
define('PVTM_TRPARM', 500);	// Base market costs for each unit
define('PVTM_TRPLND', 1000);
define('PVTM_TRPFLY', 2000);
define('PVTM_TRPSEA', 3000);
define('PVTM_FOOD', 45);
define('PVTM_SELL_MULTIPLIER', 1);	// Private Market sell multiplier. Affects the private market sell price
define('PVTM_SELL_MAX_PRICE', .5);

define('INDUSTRY_MULT', 2.5);	// Industry output multiplier
define('ATTACKS_OUTBOUND', 30);		// Maximum number of attacks an empire can make (-1 for unlimited)
define('ATTACKS_INBOUND', -1); 		// Maximum number of attacks an empire can receive (-1 for unlimited)
define('ATTACKS_INBOUND_RECOVERY', 2); 	// Number of inbound attack counters to remove from all empires hourly
define('SPELLS_OUTBOUND', 30);		// Maximum number of spells an empire can make (-1 for unlimited)
define('SPELLS_INBOUND', -1); 		// Maximum number of spells an empire can receive (-1 for unlimited)
define('SPELLS_INBOUND_RECOVERY', 2); 	// Number of inbound spell counters to remove from all empires hourly

define('RESET_RESOURCE_PCT', 30);	//percentage of resources from old empire to start revived empires with
define('RESET_BANK_PCT', 100);		//percentage of bank savings to transfer to revived empires
define('RESET_MINIMUM_CASH', 500000000);	//minimum amount of cash to start revived empires off with
define('RESET_MINIMUM_FOOD', 20000000);		//minimum amount of food to start revived empires off with
define('RESET_UPKEEP_TURNS', 200);		//number of turns to reduce expenses for revived empires
define('LOOT_RESOURCE_PCT', 0);		//Percentage of resources to loot on a successful kill

//Diminishing Returns for land gains on repeated attacks - land_gain * .99^DR_Counters
define('DR_PERHIT', 5);			// DR counters added on successful military attack (0 to disable)
define('DR_REMOVE_PERHOUR', 10);	// Percentage of DR counters to remove hourly
define('DR_REMOVE_PERATTACK', 20);	// Percentage of DR counters to remove from attacker when launching an attack
define('LAND_GAIN_MINIMUM', 32);	// Minimum land acres to award in a successful land gaining attack

define('AID_ENABLE', TRUE);    // Enable sending foreign aid
define('AID_DISPLAY_CLAN', TRUE);    // Publicly display foreign aid in news search between clan members
define('AID_COST_ALLY', 1);    // Credits needed to aid to allied empires
define('AID_COST_NONALLY', 1);   // Credits needed to aid to non-allied empires
define('AID_COST_ALLY_CLOSING', 2);	//Credits needed to aid to allied empires during the cooldown period
define('AID_COST_NONALLY_CLOSING', 2);	//Credits needed to aid to non-allied empires during the cooldown period
define('AID_CLOSE', 24);	// Disallow aid shipments this many hours before the end of the round (0 to disable)
define('AID_MAXCREDITS', 3);    // Maximum number of aid credits that can be accumulated at once
define('AID_MAXCLANCREDITS', 4);    // Maximum number of aid credits that can be accumulated at once
define('AID_REFUSE_NETWORTH', 2); //Disallow aiding to empires more than X times the net worth of the sender
define('AID_REFUSE_NETWORTH_ALLY', 2); //Disallow aiding to allied empires more than X times the net worth of the sender
define('AID_PERCENT_MILITARY', 15);    //Percentage of military allowed to be sent in a single shipment
define('AID_PERCENT_CASH', 20);        //Percentage of cash allowed to be sent in a single shipment
define('AID_PERCENT_FOOD', 20);        //Percentage of food allowed to be sent in a single shipment
define('AID_PERCENT_RUNES', 20);    //Percentage of runes allowed to be sent in a single shipment
define('AID_DELAY', 60 * 60 * 4);    // Once you send too much aid, how many seconds before you can send more
define('AID_CLAN_DELAY', 60 * 60);    // Once you send too much aid, how many seconds before you can send more
define('MESSAGES_MAXCREDITS', 10);	// Maximum number of new private messages that can be sent at once
define('MESSAGES_DELAY', 10 * 60);	// Once you send too many messages, how many seconds before you can send more
define('FRIEND_MAGIC_ENABLE', FALSE);	// Enable casting spells on friendly empires
define('SCORE_ENABLE', FALSE);	// Enable keeping score for empires attacking each other
define('MAGIC_ALLOW_REGRESS', TRUE);	// Enables usage of the "Regress to Previous Era" spell
define('GRAVEYARD_DISCLOSE', FALSE);	// Reveal user account name of empires in the Graveyard

define('CLANSTATS_MINSIZE', 1);	// Minimum member count for inclusion on Top Clans page
define('TOPEMPIRES_COUNT', 10);	// Maximum number of empires to list on Top Empires page
define('TOPPLAYERS_COUNT', 10);	// Maximum number of user accounts to list on All Time Top Players page

define('SNAPSHOT_DAILY_MAXIMUM', 5);    // Maximum number of times an empire may log their own stats into the intel center each day
define('INTEL_SNAPSHOT_SHARE_DEFAULT', FALSE); // Share snapshot by default?
define('INTEL_SPY_SHARE_DEFAULT', TRUE); // Share crystal ball by default?

define('SIGNUP_CLOSED_USER', FALSE);	// Don't allow creation of new user accounts from signup page
define('SIGNUP_CLOSED_EMPIRE', FALSE);	// Don't allow creation of new empires from signup page

define('VALIDATE_REQUIRE', FALSE);	// Require users to validate their empires before they can continue playing
define('VALIDATE_ALLOW', FALSE);	// Allow users to validate their own empires
define('VALIDATE_RESEND', 60 * 60);	// How long users must wait between resending their validation code

define('COUNTER_TEMPLATE', 'counter2.png');	// Digit style for "registered empires" counter
						// Set to empty string to use plain bold text
define('COUNTER_DIGITS', 3);	// Number of digits for "registered empires" counter
				// Set to 0 to determine automatically

define('BONUS_TURNS', TRUE);	// Allow users to collect 1 hour worth of bonus turns each day.
				// Turns are collected by clicking a banner (defined below) or,
				// if none are defined, a "Bonus Turns" button at the top of the page.

$banners = array();		// Define banners below. Do NOT use paid advertisements if bonus
				// turns are enabled, as it provides an incentive for click fraud.
// $banners[] = array('label' => 'Hover text', 'image' => 'Image URL', 'url' => 'Click URL', 'width' => '468', 'height' => '60', 'ismap' => '1' if imagemap, '0' if not);

// Stylesheets for use in-game
$styles = array(
	'qmt' => array('file' => 'qmt.css', 'name' => 'QMT Black'),
	'rwl' => array('file' => 'rwlish.css', 'name' => 'RWL-ish'),
	'ezclan' => array('file' => 'ezclan.css', 'name' => 'EZClan Blue'),
	'reborn' => array('file' => 'reborn.css', 'name' => 'Reborn'),
	'starfield' => array('file' => 'starfield.css', 'name' => 'Starfield'),
);
define('DEFAULT_STYLE', 'reborn');	// Default style, also used when not logged in
define('DEFAULT_TIMEZONE', -21600);	// Default timezone for new accounts
					// Specify UTC offset in seconds, must be defined in constants.php
define('DEFAULT_DATEFORMAT', 'r');	// Default date/time format for new accounts

// Default values for newly created empires
$empire_defaults = array(
	// Resources
	'e_cash'	=> 5000000,
	'e_food'	=> 500000,
	'e_runes'	=> 0,

	// Units
	'e_peasants'	=> 1000,
	'e_trparm'	=> 100,
	'e_trplnd'	=> 50,
	'e_trpfly'	=> 20,
	'e_trpsea'	=> 10,
	'e_trpwiz'	=> 0,

	// Buildings
	'e_land'	=> 1000,	// acre counts below MUST add up to this value!
	'e_bldpop'	=> 0,
	'e_bldcash'	=> 0,
	'e_bldtrp'	=> 0,
	'e_bldcost'	=> 0,
	'e_bldwiz'	=> 0,
	'e_bldfood'	=> 0,
	'e_freeland'	=> 1000,

	// Private Market supplies
	'e_mktarm'	=> 4000,
	'e_mktlnd'	=> 3000,
	'e_mktfly'	=> 2000,
	'e_mktsea'	=> 1000,
	'e_mktfood'	=> 100000,

	// Others
	'e_indarm'	=> 25,
	'e_indlnd'	=> 25,
	'e_indfly'	=> 25,
	'e_indsea'	=> 25,
	'e_magetowerfocus'	=> 0,
	'e_health'	=> 100,
	'e_tax'		=> 35,
);
// Private Market supplies
$empire_defaults['e_mktarm'] = ceil($empire_defaults['e_land'] * 1 * 1.2 * INDUSTRY_MULT * TURNS_MAXIMUM);
$empire_defaults['e_mktlnd'] = ceil($empire_defaults['e_land'] * 1 * 0.6 * INDUSTRY_MULT * TURNS_MAXIMUM);
$empire_defaults['e_mktfly'] = ceil($empire_defaults['e_land'] * 1 * 0.3 * INDUSTRY_MULT * TURNS_MAXIMUM);
$empire_defaults['e_mktsea'] = ceil($empire_defaults['e_land'] * 1 * 0.2 * INDUSTRY_MULT * TURNS_MAXIMUM);
$empire_defaults['e_mktfood'] = ceil($empire_defaults['e_land'] * 62 * TURNS_MAXIMUM);

// target upkeep cost for each troop for full run of turns
define('TRPARM_BASE_UPKEEP', 75);
define('TRPLND_BASE_UPKEEP', 150);
define('TRPFLY_BASE_UPKEEP', 300);
define('TRPSEA_BASE_UPKEEP', 450);
// trpwiz: x + y = total. x is cash, y is food worth in cash
define('TRPWIZ_BASE_UPKEEP', 30 + 720);

// percentage of upkeep to assess as cash (the remainder will be assessed as food)
define('TRPARM_CASH_UPKEEP_PERCENTAGE', 20);
define('TRPLND_CASH_UPKEEP_PERCENTAGE', 40);
define('TRPFLY_CASH_UPKEEP_PERCENTAGE', 60);
define('TRPSEA_CASH_UPKEEP_PERCENTAGE', 80);
// trpwiz: 30 out of total, and then multiplie by 100.
define('TRPWIZ_CASH_UPKEEP_PERCENTAGE', 30 / 750 * 100);

// target price to balance the amount of food consumed per turn
define('SUGGESTED_FOOD_PRICE', 25);

// The amount of hours before one can cast super shield again
define('SUPERSHIELD_COOLDOWN', 3600 * (int) round(TURNS_MAXIMUM / (60 / TURNS_FREQ * TURNS_COUNT + 60 / TURNS_FREQ * TURNS_UNSTORE)));
// When to prematurely end this spell with x remaining turns
define('SUPERSHIELD_END_AT_REMAINING_TURNS', ceil(TURNS_MAXIMUM / 10));

// Minimal acres of land for build rate
define('BUILD_RATE_MIN_LAND', 5000);

// Any value higher than 1 amplifies the impact that corruption the will have.
// 1 is default and 0 disables corruption.
define('CORRUPTION_BASE_MULTIPLIER', .2);

// The amount of time to delay the start of inflation after the round has begun
define('INFLATION_START_DELAY', 60 * 60 * 24 * 3);

// The amount of cycles that will occur for the diration of this round. How
// frequent a cycle occurs derives from the time between INFLATION_START_DELAY
// and the end of this round
//define('INFLATION_CYCLES', 4 * 7 * 4);
define('INFLATION_CYCLES', 0);

// Isolationist deadline
define('ISOLATIONIST_DEADLINE', 60 * 60 * 24 * 7);

// The rate of how fast to move military units to the hospital this value is
// defined as a faction of units queued.
define('HOSPITAL_OFF_HEALING_RATE', TURNS_COUNT / (60 / TURNS_FREQ * TURNS_COUNT * 24));

// The rate of how fast to heal military units, defined as a faction of units
// queued. this value is defined as a faction of units queued.
define('HOSPITAL_DEF_HEALING_RATE', 1 / (60 / TURNS_FREQ * TURNS_COUNT * 24));

// True net worth
define('TRUE_NETWORTH_RESIZE_RATE', TURNS_COUNT / (60 / TURNS_FREQ * TURNS_COUNT * 24));

// base percentage of population to kill, regardless of tax rate.
define('MASSACRE_BASE_KILL', 3);
// additional percentage of population to kill based on tax rate.
define('MASSACRE_BONUS_KILL', 6);

define('LOG_ENABLE', TRUE);	// Enable logging of all in-game events
				// Warnings are logged regardless of this setting
define('DEBUG_FOOTER', FALSE);	// Display page generation time, memory usage, and query count at bottom of page
?>
