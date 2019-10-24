<?php
/* Copyright (C) 2019 ATM Consulting <support@atm-consulting.fr>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Script créant et vérifiant que les champs requis s'ajoutent bien
 */

if(!defined('INC_FROM_DOLIBARR')) {
	define('INC_FROM_CRON_SCRIPT', true);

	require '../config.php';
} else {
	global $db;
}

// classe méthode
dol_include_once('/processrules/class/processrules.class.php');
$o=new processRules($db);
$o->init_db_by_vars();

// classe procedure
dol_include_once('/processrules/class/procedure.class.php');
$o=new procedure($db);
$o->init_db_by_vars();

// dictionnaire type de procedure
dol_include_once('/processrules/class/dictionaryproceduretype.class.php');
$o = new DictionaryProcedureType($db);
$o->init_db_by_vars();
