<?php
/**
*
* phpBB Directory extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 ErnadoO <http://www.phpbb-services.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'DIR_FLAG_CODE_AD' => 'Andora',
	'DIR_FLAG_CODE_AE' => 'Ujedinjeni Arapski Emirati',
	'DIR_FLAG_CODE_AF' => 'Avganistan',
	'DIR_FLAG_CODE_AG' => 'Antigva i Barbuda',
	'DIR_FLAG_CODE_AI' => 'Angvila',
	'DIR_FLAG_CODE_AL' => 'Albanija',
	'DIR_FLAG_CODE_AM' => 'Jermenija',
	'DIR_FLAG_CODE_AN' => 'Holandski Antili',
	'DIR_FLAG_CODE_AO' => 'Angola',
	'DIR_FLAG_CODE_AQ' => 'Antarktik',
	'DIR_FLAG_CODE_AR' => 'Argentina',
	'DIR_FLAG_CODE_AS' => 'Američka Samoa',
	'DIR_FLAG_CODE_AT' => 'Austrija',
	'DIR_FLAG_CODE_AU' => 'Australija',
	'DIR_FLAG_CODE_AW' => 'Aruba',
	'DIR_FLAG_CODE_AX' => 'Alandska Ostrva',
	'DIR_FLAG_CODE_AZ' => 'Azerbejdžan',
	'DIR_FLAG_CODE_BA' => 'Bosna i Hercegovina',
	'DIR_FLAG_CODE_BB' => 'Barbados',
	'DIR_FLAG_CODE_BD' => 'Bangladeš',
	'DIR_FLAG_CODE_BE' => 'Belgija',
	'DIR_FLAG_CODE_BF' => 'Burkina faso',
	'DIR_FLAG_CODE_BG' => 'Bugarska',
	'DIR_FLAG_CODE_BH' => 'Bahrein',
	'DIR_FLAG_CODE_BI' => 'Burundi',
	'DIR_FLAG_CODE_BJ' => 'Benin',
	'DIR_FLAG_CODE_BL' => 'Sveti Bartolomej',
	'DIR_FLAG_CODE_BM' => 'Bermudska Ostrva',
	'DIR_FLAG_CODE_BN' => 'Brunej',
	'DIR_FLAG_CODE_BO' => 'Bolivija',
	'DIR_FLAG_CODE_BR' => 'Brazil',
	'DIR_FLAG_CODE_BS' => 'Bahami',
	'DIR_FLAG_CODE_BT' => 'Butan',
	'DIR_FLAG_CODE_BV' => 'Buvetovo ostrvo',
	'DIR_FLAG_CODE_BW' => 'Bocvana',
	'DIR_FLAG_CODE_BY' => 'Belorusija',
	'DIR_FLAG_CODE_BZ' => 'Belize',
	'DIR_FLAG_CODE_CA' => 'Kanada',
	'DIR_FLAG_CODE_CC' => 'Kokosova ostrva',
	'DIR_FLAG_CODE_CD' => 'Demokratska Republika Kongo',
	'DIR_FLAG_CODE_CF' => 'Centralnoafrička Republika',
	'DIR_FLAG_CODE_CG' => 'Kongo',
	'DIR_FLAG_CODE_CH' => 'Švajcarska',
	'DIR_FLAG_CODE_CI' => 'Obala Slonovače',
	'DIR_FLAG_CODE_CK' => 'Kukova Ostrva',
	'DIR_FLAG_CODE_CL' => 'Čili',
	'DIR_FLAG_CODE_CM' => 'Kamerun',
	'DIR_FLAG_CODE_CN' => 'Kina',
	'DIR_FLAG_CODE_CO' => 'Kolumbija',
	'DIR_FLAG_CODE_CR' => 'Kostarika',
	'DIR_FLAG_CODE_CU' => 'Kuba',
	'DIR_FLAG_CODE_CV' => 'Zelenortska Ostrva',
	'DIR_FLAG_CODE_CX' => 'Božicno Ostrvo',
	'DIR_FLAG_CODE_CY' => 'Kipar',
	'DIR_FLAG_CODE_CZ' => 'Česka Republika',
	'DIR_FLAG_CODE_DE' => 'Nemačka',
	'DIR_FLAG_CODE_DJ' => 'Džibuti',
	'DIR_FLAG_CODE_DK' => 'Danska',
	'DIR_FLAG_CODE_DM' => 'Dominika',
	'DIR_FLAG_CODE_DO' => 'Dominikanska republika',
	'DIR_FLAG_CODE_DZ' => 'Alžir',
	'DIR_FLAG_CODE_EC' => 'Ekvator',
	'DIR_FLAG_CODE_EE' => 'Estonija',
	'DIR_FLAG_CODE_EG' => 'Egipat',
	'DIR_FLAG_CODE_EH' => 'Zapadna Sahara',
	'DIR_FLAG_CODE_ER' => 'Eritreja',
	'DIR_FLAG_CODE_ES' => 'Španija',
	'DIR_FLAG_CODE_ET' => 'Etiopija',
	'DIR_FLAG_CODE_FI' => 'Finska',
	'DIR_FLAG_CODE_FJ' => 'Fidži',
	'DIR_FLAG_CODE_FK' => 'Foklandska Ostrva',
	'DIR_FLAG_CODE_FM' => 'Mikronezija',
	'DIR_FLAG_CODE_FO' => 'Farska Ostrva',
	'DIR_FLAG_CODE_FR' => 'Francuska',
	'DIR_FLAG_CODE_GA' => 'Gabon',
	'DIR_FLAG_CODE_GB' => 'Ujedinjeno Kraljevstvo',
	'DIR_FLAG_CODE_GD' => 'Grenada',
	'DIR_FLAG_CODE_GE' => 'Gruzija',
	'DIR_FLAG_CODE_GF' => 'Francuska Gijana',
	'DIR_FLAG_CODE_GG' => 'Gernzi',
	'DIR_FLAG_CODE_GH' => 'Gana',
	'DIR_FLAG_CODE_GI' => 'Gibraltar',
	'DIR_FLAG_CODE_GL' => 'Grenland',
	'DIR_FLAG_CODE_GM' => 'Gambija',
	'DIR_FLAG_CODE_GN' => 'Gvineja',
	'DIR_FLAG_CODE_GP' => 'Gvadelup',
	'DIR_FLAG_CODE_GQ' => 'Ekvatorijalna Gvineja',
	'DIR_FLAG_CODE_GR' => 'Grčka',
	'DIR_FLAG_CODE_GS' => 'Južna Džordžija i Južna Sendvička Ostrva',
	'DIR_FLAG_CODE_GT' => 'Gvatemala',
	'DIR_FLAG_CODE_GU' => 'Guam',
	'DIR_FLAG_CODE_GW' => 'Gvineja-Bisao',
	'DIR_FLAG_CODE_GY' => 'Gijana',
	'DIR_FLAG_CODE_HK' => 'Hongkong',
	'DIR_FLAG_CODE_HM' => 'Ostrvo Hard i ostrva Mekdonald',
	'DIR_FLAG_CODE_HN' => 'Honduras',
	'DIR_FLAG_CODE_HR' => 'Hrvatska',
	'DIR_FLAG_CODE_HT' => 'Haiti',
	'DIR_FLAG_CODE_HU' => 'Madjarska',
	'DIR_FLAG_CODE_ID' => 'Indonezija',
	'DIR_FLAG_CODE_IE' => 'Irska',
	'DIR_FLAG_CODE_IL' => 'Izrael',
	'DIR_FLAG_CODE_IM' => 'Ostrvo Men',
	'DIR_FLAG_CODE_IN' => 'Indija',
	'DIR_FLAG_CODE_IO' => 'Britanska Teritorija Indijskog Okeana',
	'DIR_FLAG_CODE_IQ' => 'Irak',
	'DIR_FLAG_CODE_IR' => 'Iran',
	'DIR_FLAG_CODE_IS' => 'Island',
	'DIR_FLAG_CODE_IT' => 'Italija',
	'DIR_FLAG_CODE_JE' => 'Džersi',
	'DIR_FLAG_CODE_JM' => 'Jamajka',
	'DIR_FLAG_CODE_JO' => 'Jordan',
	'DIR_FLAG_CODE_JP' => 'Japan',
	'DIR_FLAG_CODE_KE' => 'Kenija',
	'DIR_FLAG_CODE_KG' => 'Kirgizija',
	'DIR_FLAG_CODE_KH' => 'Kambodža',
	'DIR_FLAG_CODE_KI' => 'Kiribati',
	'DIR_FLAG_CODE_KM' => 'Komori',
	'DIR_FLAG_CODE_KN' => 'Sveti Kits i Nevis',
	'DIR_FLAG_CODE_KP' => 'Severna Koreja',
	'DIR_FLAG_CODE_KR' => 'Južna Koreja',
	'DIR_FLAG_CODE_KW' => 'Kuvajt',
	'DIR_FLAG_CODE_KY' => 'Kajmanska ostrva',
	'DIR_FLAG_CODE_KZ' => 'Kazahstan',
	'DIR_FLAG_CODE_LA' => 'Laos',
	'DIR_FLAG_CODE_LB' => 'Liban',
	'DIR_FLAG_CODE_LC' => 'Sveta Lucija',
	'DIR_FLAG_CODE_LI' => 'Lihtenštajn',
	'DIR_FLAG_CODE_LK' => 'Šri Lanka',
	'DIR_FLAG_CODE_LR' => 'Liberija',
	'DIR_FLAG_CODE_LS' => 'Lesoto',
	'DIR_FLAG_CODE_LT' => 'Litvanija',
	'DIR_FLAG_CODE_LU' => 'Luksemburg',
	'DIR_FLAG_CODE_LV' => 'Letonija',
	'DIR_FLAG_CODE_LY' => 'Libija',
	'DIR_FLAG_CODE_MA' => 'Maroko',
	'DIR_FLAG_CODE_MC' => 'Monako',
	'DIR_FLAG_CODE_MD' => 'Moldavija',
	'DIR_FLAG_CODE_ME' => 'Crna Gora',
	'DIR_FLAG_CODE_MF' => 'Saint-Martin',
	'DIR_FLAG_CODE_MG' => 'Madagaskar',
	'DIR_FLAG_CODE_MH' => 'Maršalska ostrva',
	'DIR_FLAG_CODE_MK' => 'Makedonija',
	'DIR_FLAG_CODE_ML' => 'Mali',
	'DIR_FLAG_CODE_MM' => 'Mianmar',
	'DIR_FLAG_CODE_MN' => 'Mongolija',
	'DIR_FLAG_CODE_MO' => 'Makao',
	'DIR_FLAG_CODE_MP' => 'Severna Marijanska Ostrva',
	'DIR_FLAG_CODE_MQ' => 'Martinik',
	'DIR_FLAG_CODE_MR' => 'Mauritanija',
	'DIR_FLAG_CODE_MS' => 'Monserat',
	'DIR_FLAG_CODE_MT' => 'Malta',
	'DIR_FLAG_CODE_MU' => 'Mauricijus',
	'DIR_FLAG_CODE_MV' => 'Maldivi',
	'DIR_FLAG_CODE_MW' => 'Malavi',
	'DIR_FLAG_CODE_MX' => 'Meksiko',
	'DIR_FLAG_CODE_MY' => 'Malezija',
	'DIR_FLAG_CODE_MZ' => 'Mozambik',
	'DIR_FLAG_CODE_NA' => 'Namibija',
	'DIR_FLAG_CODE_NC' => 'Nova Kaledonija',
	'DIR_FLAG_CODE_NE' => 'Niger',
	'DIR_FLAG_CODE_NF' => 'Norfolk',
	'DIR_FLAG_CODE_NG' => 'Nigerija',
	'DIR_FLAG_CODE_NI' => 'Nikaragva',
	'DIR_FLAG_CODE_NL' => 'Holandija',
	'DIR_FLAG_CODE_NO' => 'Norveška',
	'DIR_FLAG_CODE_NP' => 'Nepal',
	'DIR_FLAG_CODE_NR' => 'Nauru',
	'DIR_FLAG_CODE_NU' => 'Niue',
	'DIR_FLAG_CODE_NZ' => 'Novi Zeland',
	'DIR_FLAG_CODE_OM' => 'Oman',
	'DIR_FLAG_CODE_PA' => 'Panama',
	'DIR_FLAG_CODE_PE' => 'Peru',
	'DIR_FLAG_CODE_PF' => 'Francuska Polinezija',
	'DIR_FLAG_CODE_PG' => 'Papua Nova Gvineja',
	'DIR_FLAG_CODE_PH' => 'Filipini',
	'DIR_FLAG_CODE_PK' => 'Pakistan',
	'DIR_FLAG_CODE_PL' => 'Poljska',
	'DIR_FLAG_CODE_PM' => 'Sveti Pjer i Mikelon',
	'DIR_FLAG_CODE_PN' => 'Ostrva Pitkern',
	'DIR_FLAG_CODE_PR' => 'Portoriko',
	'DIR_FLAG_CODE_PS' => 'Palestina',
	'DIR_FLAG_CODE_PT' => 'Portugal',
	'DIR_FLAG_CODE_PW' => 'Palau',
	'DIR_FLAG_CODE_PY' => 'Paragvaj',
	'DIR_FLAG_CODE_QA' => 'Katar',
	'DIR_FLAG_CODE_RE' => 'Reunion',
	'DIR_FLAG_CODE_RO' => 'Rumunija',
	'DIR_FLAG_CODE_RS' => 'Srbija',
	'DIR_FLAG_CODE_RU' => 'Rusija',
	'DIR_FLAG_CODE_RW' => 'Ruanda',
	'DIR_FLAG_CODE_SA' => 'Saudijska Arabija',
	'DIR_FLAG_CODE_SB' => 'Solomonova Ostrva',
	'DIR_FLAG_CODE_SC' => 'Sejšeli',
	'DIR_FLAG_CODE_SD' => 'Sudan',
	'DIR_FLAG_CODE_SE' => 'Švedska',
	'DIR_FLAG_CODE_SG' => 'Singapur',
	'DIR_FLAG_CODE_SH' => 'Sveta Jelena',
	'DIR_FLAG_CODE_SI' => 'Slovenija',
	'DIR_FLAG_CODE_SJ' => 'Svalbard i Jan Majen',
	'DIR_FLAG_CODE_SK' => 'Slovačka',
	'DIR_FLAG_CODE_SL' => 'Sijera Leone',
	'DIR_FLAG_CODE_SM' => 'San Marino',
	'DIR_FLAG_CODE_SN' => 'Senegal',
	'DIR_FLAG_CODE_SO' => 'Somalija',
	'DIR_FLAG_CODE_SR' => 'Surinam',
	'DIR_FLAG_CODE_ST' => 'Sao Tome i Principe',
	'DIR_FLAG_CODE_SV' => 'Salvador',
	'DIR_FLAG_CODE_SY' => 'Sirija',
	'DIR_FLAG_CODE_SZ' => 'Svazilend',
	'DIR_FLAG_CODE_TC' => 'Ostrva Turks i Kaikos Ostrva',
	'DIR_FLAG_CODE_TD' => 'Čad',
	'DIR_FLAG_CODE_TF' => 'Francuske Južne Teritorije',
	'DIR_FLAG_CODE_TG' => 'Togo',
	'DIR_FLAG_CODE_TH' => 'Tajland',
	'DIR_FLAG_CODE_TJ' => 'Tadžikistan',
	'DIR_FLAG_CODE_TK' => 'Tokelau',
	'DIR_FLAG_CODE_TL' => 'Istočni Timor',
	'DIR_FLAG_CODE_TM' => 'Turkmenistan',
	'DIR_FLAG_CODE_TN' => 'Tunis',
	'DIR_FLAG_CODE_TO' => 'Tonga',
	'DIR_FLAG_CODE_TR' => 'Turska',
	'DIR_FLAG_CODE_TT' => 'Trinidad i Tobago',
	'DIR_FLAG_CODE_TV' => 'Tuvalu',
	'DIR_FLAG_CODE_TW' => 'Tajvan',
	'DIR_FLAG_CODE_TZ' => 'Tanzanija',
	'DIR_FLAG_CODE_UA' => 'Ukrajina',
	'DIR_FLAG_CODE_UG' => 'Uganda',
	'DIR_FLAG_CODE_UM' => 'Manja Udaljena Ostrva SAD',
	'DIR_FLAG_CODE_US' => 'Sjedinjene Američke Drzave',
	'DIR_FLAG_CODE_UY' => 'Urugvaj',
	'DIR_FLAG_CODE_UZ' => 'Uzbekistan',
	'DIR_FLAG_CODE_VA' => 'Vatikan',
	'DIR_FLAG_CODE_VC' => 'Sveti Vincent i Grenandini',
	'DIR_FLAG_CODE_VE' => 'Venecuela',
	'DIR_FLAG_CODE_VG' => 'Britanska Devičanska Ostrva',
	'DIR_FLAG_CODE_VI' => 'Američka Devičanska ostrva',
	'DIR_FLAG_CODE_VN' => 'Vijetnam',
	'DIR_FLAG_CODE_VU' => 'Vanuatu',
	'DIR_FLAG_CODE_WF' => 'Valis i Futuna',
	'DIR_FLAG_CODE_WS' => 'Samoa',
	'DIR_FLAG_CODE_YE' => 'Jemen',
	'DIR_FLAG_CODE_YT' => 'Majot',
	'DIR_FLAG_CODE_ZA' => 'Južnoafrička republika',
	'DIR_FLAG_CODE_ZM' => 'Zambija',
	'DIR_FLAG_CODE_ZW' => 'Zimbabve',
));
