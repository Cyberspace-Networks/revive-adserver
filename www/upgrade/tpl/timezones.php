<?php
/*
+---------------------------------------------------------------------------+
| Openads v2.3                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id: timezones.php 6032 2007-04-25 16:12:07Z aj@seagullproject.org $
*/

function returnTimezoneList() {
    $timezones = Array
    (
        "0" => "Africa/Abidjan",
        "1" => "Africa/Accra",
        "2" => "Africa/Addis_Ababa",
        "3" => "Africa/Algiers",
        "4" => "Africa/Asmera",
        "5" => "Africa/Bamako",
        "6" => "Africa/Bangui",
        "7" => "Africa/Banjul",
        "8" => "Africa/Bissau",
        "9" => "Africa/Blantyre",
        "10" => "Africa/Brazzaville",
        "11" => "Africa/Bujumbura",
        "12" => "Africa/Cairo",
        "13" => "Africa/Casablanca",
        "14" => "Africa/Ceuta",
        "15" => "Africa/Conakry",
        "16" => "Africa/Dakar",
        "17" => "Africa/Dar_es_Salaam",
        "18" => "Africa/Djibouti",
        "19" => "Africa/Douala",
        "20" => "Africa/El_Aaiun",
        "21" => "Africa/Freetown",
        "22" => "Africa/Gaborone",
        "23" => "Africa/Harare",
        "24" => "Africa/Johannesburg",
        "25" => "Africa/Kampala",
        "26" => "Africa/Khartoum",
        "27" => "Africa/Kigali",
        "28" => "Africa/Kinshasa",
        "29" => "Africa/Lagos",
        "30" => "Africa/Libreville",
        "31" => "Africa/Lome",
        "32" => "Africa/Luanda",
        "33" => "Africa/Lubumbashi",
        "34" => "Africa/Lusaka",
        "35" => "Africa/Malabo",
        "36" => "Africa/Maputo",
        "37" => "Africa/Maseru",
        "38" => "Africa/Mbabane",
        "39" => "Africa/Mogadishu",
        "40" => "Africa/Monrovia",
        "41" => "Africa/Nairobi",
        "42" => "Africa/Ndjamena",
        "43" => "Africa/Niamey",
        "44" => "Africa/Nouakchott",
        "45" => "Africa/Ouagadougou",
        "46" => "Africa/Porto-Novo",
        "47" => "Africa/Sao_Tome",
        "48" => "Africa/Timbuktu",
        "49" => "Africa/Tripoli",
        "50" => "Africa/Tunis",
        "51" => "Africa/Windhoek",
        "52" => "America/Adak",
        "53" => "America/Anchorage",
        "54" => "America/Anguilla",
        "55" => "America/Antigua",
        "56" => "America/Araguaina",
        "57" => "America/Argentina/Buenos_Aires",
        "58" => "America/Argentina/Catamarca",
        "59" => "America/Argentina/ComodRivadavia",
        "60" => "America/Argentina/Cordoba",
        "61" => "America/Argentina/Jujuy",
        "62" => "America/Argentina/La_Rioja",
        "63" => "America/Argentina/Mendoza",
        "64" => "America/Argentina/Rio_Gallegos",
        "65" => "America/Argentina/San_Juan",
        "66" => "America/Argentina/Tucuman",
        "67" => "America/Argentina/Ushuaia",
        "68" => "America/Aruba",
        "69" => "America/Asuncion",
        "70" => "America/Atikokan",
        "71" => "America/Atka",
        "72" => "America/Bahia",
        "73" => "America/Barbados",
        "74" => "America/Belem",
        "75" => "America/Belize",
        "76" => "America/Blanc-Sablon",
        "77" => "America/Boa_Vista",
        "78" => "America/Bogota",
        "79" => "America/Boise",
        "80" => "America/Buenos_Aires",
        "81" => "America/Cambridge_Bay",
        "82" => "America/Campo_Grande",
        "83" => "America/Cancun",
        "84" => "America/Caracas",
        "85" => "America/Catamarca",
        "86" => "America/Cayenne",
        "87" => "America/Cayman",
        "88" => "America/Chicago",
        "89" => "America/Chihuahua",
        "90" => "America/Coral_Harbour",
        "91" => "America/Cordoba",
        "92" => "America/Costa_Rica",
        "93" => "America/Cuiaba",
        "94" => "America/Curacao",
        "95" => "America/Danmarkshavn",
        "96" => "America/Dawson",
        "97" => "America/Dawson_Creek",
        "98" => "America/Denver",
        "99" => "America/Detroit",
        "100" => "America/Dominica",
        "101" => "America/Edmonton",
        "102" => "America/Eirunepe",
        "103" => "America/El_Salvador",
        "104" => "America/Ensenada",
        "105" => "America/Fort_Wayne",
        "106" => "America/Fortaleza",
        "107" => "America/Glace_Bay",
        "108" => "America/Godthab",
        "109" => "America/Goose_Bay",
        "110" => "America/Grand_Turk",
        "111" => "America/Grenada",
        "112" => "America/Guadeloupe",
        "113" => "America/Guatemala",
        "114" => "America/Guayaquil",
        "115" => "America/Guyana",
        "116" => "America/Halifax",
        "117" => "America/Havana",
        "118" => "America/Hermosillo",
        "119" => "America/Indiana/Indianapolis",
        "120" => "America/Indiana/Knox",
        "121" => "America/Indiana/Marengo",
        "122" => "America/Indiana/Petersburg",
        "123" => "America/Indiana/Vevay",
        "124" => "America/Indiana/Vincennes",
        "125" => "America/Indianapolis",
        "126" => "America/Inuvik",
        "127" => "America/Iqaluit",
        "128" => "America/Jamaica",
        "129" => "America/Jujuy",
        "130" => "America/Juneau",
        "131" => "America/Kentucky/Louisville",
        "132" => "America/Kentucky/Monticello",
        "133" => "America/Knox_IN",
        "134" => "America/La_Paz",
        "135" => "America/Lima",
        "136" => "America/Los_Angeles",
        "137" => "America/Louisville",
        "138" => "America/Maceio",
        "139" => "America/Managua",
        "140" => "America/Manaus",
        "141" => "America/Martinique",
        "142" => "America/Mazatlan",
        "143" => "America/Mendoza",
        "144" => "America/Menominee",
        "145" => "America/Merida",
        "146" => "America/Mexico_City",
        "147" => "America/Miquelon",
        "148" => "America/Moncton",
        "149" => "America/Monterrey",
        "150" => "America/Montevideo",
        "151" => "America/Montreal",
        "152" => "America/Montserrat",
        "153" => "America/Nassau",
        "154" => "America/New_York",
        "155" => "America/Nipigon",
        "156" => "America/Nome",
        "157" => "America/Noronha",
        "158" => "America/North_Dakota/Center",
        "159" => "America/North_Dakota/New_Salem",
        "160" => "America/Panama",
        "161" => "America/Pangnirtung",
        "162" => "America/Paramaribo",
        "163" => "America/Phoenix",
        "164" => "America/Port-au-Prince",
        "165" => "America/Port_of_Spain",
        "166" => "America/Porto_Acre",
        "167" => "America/Porto_Velho",
        "168" => "America/Puerto_Rico",
        "169" => "America/Rainy_River",
        "170" => "America/Rankin_Inlet",
        "171" => "America/Recife",
        "172" => "America/Regina",
        "173" => "America/Rio_Branco",
        "174" => "America/Rosario",
        "175" => "America/Santiago",
        "176" => "America/Santo_Domingo",
        "177" => "America/Sao_Paulo",
        "178" => "America/Scoresbysund",
        "179" => "America/Shiprock",
        "180" => "America/St_Johns",
        "181" => "America/St_Kitts",
        "182" => "America/St_Lucia",
        "183" => "America/St_Thomas",
        "184" => "America/St_Vincent",
        "185" => "America/Swift_Current",
        "186" => "America/Tegucigalpa",
        "187" => "America/Thule",
        "188" => "America/Thunder_Bay",
        "189" => "America/Tijuana",
        "190" => "America/Toronto",
        "191" => "America/Tortola",
        "192" => "America/Vancouver",
        "193" => "America/Virgin",
        "194" => "America/Whitehorse",
        "195" => "America/Winnipeg",
        "196" => "America/Yakutat",
        "197" => "America/Yellowknife",
        "198" => "Antarctica/Casey",
        "199" => "Antarctica/Davis",
        "200" => "Antarctica/DumontDUrville",
        "201" => "Antarctica/Mawson",
        "202" => "Antarctica/McMurdo",
        "203" => "Antarctica/Palmer",
        "204" => "Antarctica/Rothera",
        "205" => "Antarctica/South_Pole",
        "206" => "Antarctica/Syowa",
        "207" => "Antarctica/Vostok",
        "208" => "Arctic/Longyearbyen",
        "209" => "Asia/Aden",
        "210" => "Asia/Almaty",
        "211" => "Asia/Amman",
        "212" => "Asia/Anadyr",
        "213" => "Asia/Aqtau",
        "214" => "Asia/Aqtobe",
        "215" => "Asia/Ashgabat",
        "216" => "Asia/Ashkhabad",
        "217" => "Asia/Baghdad",
        "218" => "Asia/Bahrain",
        "219" => "Asia/Baku",
        "220" => "Asia/Bangkok",
        "221" => "Asia/Beirut",
        "222" => "Asia/Bishkek",
        "223" => "Asia/Brunei",
        "224" => "Asia/Calcutta",
        "225" => "Asia/Choibalsan",
        "226" => "Asia/Chongqing",
        "227" => "Asia/Chungking",
        "228" => "Asia/Colombo",
        "229" => "Asia/Dacca",
        "230" => "Asia/Damascus",
        "231" => "Asia/Dhaka",
        "232" => "Asia/Dili",
        "233" => "Asia/Dubai",
        "234" => "Asia/Dushanbe",
        "235" => "Asia/Gaza",
        "236" => "Asia/Harbin",
        "237" => "Asia/Hong_Kong",
        "238" => "Asia/Hovd",
        "239" => "Asia/Irkutsk",
        "240" => "Asia/Istanbul",
        "241" => "Asia/Jakarta",
        "242" => "Asia/Jayapura",
        "243" => "Asia/Jerusalem",
        "244" => "Asia/Kabul",
        "245" => "Asia/Kamchatka",
        "246" => "Asia/Karachi",
        "247" => "Asia/Kashgar",
        "248" => "Asia/Katmandu",
        "249" => "Asia/Krasnoyarsk",
        "250" => "Asia/Kuala_Lumpur",
        "251" => "Asia/Kuching",
        "252" => "Asia/Kuwait",
        "253" => "Asia/Macao",
        "254" => "Asia/Macau",
        "255" => "Asia/Magadan",
        "256" => "Asia/Makassar",
        "257" => "Asia/Manila",
        "258" => "Asia/Muscat",
        "259" => "Asia/Nicosia",
        "260" => "Asia/Novosibirsk",
        "261" => "Asia/Omsk",
        "262" => "Asia/Oral",
        "263" => "Asia/Phnom_Penh",
        "264" => "Asia/Pontianak",
        "265" => "Asia/Pyongyang",
        "266" => "Asia/Qatar",
        "267" => "Asia/Qyzylorda",
        "268" => "Asia/Rangoon",
        "269" => "Asia/Riyadh",
        "270" => "Asia/Saigon",
        "271" => "Asia/Sakhalin",
        "272" => "Asia/Samarkand",
        "273" => "Asia/Seoul",
        "274" => "Asia/Shanghai",
        "275" => "Asia/Singapore",
        "276" => "Asia/Taipei",
        "277" => "Asia/Tashkent",
        "278" => "Asia/Tbilisi",
        "279" => "Asia/Tehran",
        "280" => "Asia/Tel_Aviv",
        "281" => "Asia/Thimbu",
        "282" => "Asia/Thimphu",
        "283" => "Asia/Tokyo",
        "284" => "Asia/Ujung_Pandang",
        "285" => "Asia/Ulaanbaatar",
        "286" => "Asia/Ulan_Bator",
        "287" => "Asia/Urumqi",
        "288" => "Asia/Vientiane",
        "289" => "Asia/Vladivostok",
        "290" => "Asia/Yakutsk",
        "291" => "Asia/Yekaterinburg",
        "292" => "Asia/Yerevan",
        "293" => "Atlantic/Azores",
        "294" => "Atlantic/Bermuda",
        "295" => "Atlantic/Canary",
        "296" => "Atlantic/Cape_Verde",
        "297" => "Atlantic/Faeroe",
        "298" => "Atlantic/Jan_Mayen",
        "299" => "Atlantic/Madeira",
        "300" => "Atlantic/Reykjavik",
        "301" => "Atlantic/South_Georgia",
        "302" => "Atlantic/St_Helena",
        "303" => "Atlantic/Stanley",
        "304" => "Australia/ACT",
        "305" => "Australia/Adelaide",
        "306" => "Australia/Brisbane",
        "307" => "Australia/Broken_Hill",
        "308" => "Australia/Canberra",
        "309" => "Australia/Currie",
        "310" => "Australia/Darwin",
        "311" => "Australia/Hobart",
        "312" => "Australia/LHI",
        "313" => "Australia/Lindeman",
        "314" => "Australia/Lord_Howe",
        "315" => "Australia/Melbourne",
        "316" => "Australia/North",
        "317" => "Australia/NSW",
        "318" => "Australia/Perth",
        "319" => "Australia/Queensland",
        "320" => "Australia/South",
        "321" => "Australia/Sydney",
        "322" => "Australia/Tasmania",
        "323" => "Australia/Victoria",
        "324" => "Australia/West",
        "325" => "Australia/Yancowinna",
        "326" => "Brazil/Acre",
        "327" => "Brazil/DeNoronha",
        "328" => "Brazil/East",
        "329" => "Brazil/West",
        "330" => "Canada/Atlantic",
        "331" => "Canada/Central",
        "332" => "Canada/East-Saskatchewan",
        "333" => "Canada/Eastern",
        "334" => "Canada/Mountain",
        "335" => "Canada/Newfoundland",
        "336" => "Canada/Pacific",
        "337" => "Canada/Saskatchewan",
        "338" => "Canada/Yukon",
        "339" => "CET",
        "340" => "Chile/Continental",
        "341" => "Chile/EasterIsland",
        "342" => "CST6CDT",
        "343" => "Cuba",
        "344" => "EET",
        "345" => "Egypt",
        "346" => "Eire",
        "347" => "EST",
        "348" => "EST5EDT",
        "349" => "Etc/GMT",
        "350" => "Etc/GMT+0",
        "351" => "Etc/GMT+1",
        "352" => "Etc/GMT+10",
        "353" => "Etc/GMT+11",
        "354" => "Etc/GMT+12",
        "355" => "Etc/GMT+2",
        "356" => "Etc/GMT+3",
        "357" => "Etc/GMT+4",
        "358" => "Etc/GMT+5",
        "359" => "Etc/GMT+6",
        "360" => "Etc/GMT+7",
        "361" => "Etc/GMT+8",
        "362" => "Etc/GMT+9",
        "363" => "Etc/GMT-0",
        "364" => "Etc/GMT-1",
        "365" => "Etc/GMT-10",
        "366" => "Etc/GMT-11",
        "367" => "Etc/GMT-12",
        "368" => "Etc/GMT-13",
        "369" => "Etc/GMT-14",
        "370" => "Etc/GMT-2",
        "371" => "Etc/GMT-3",
        "372" => "Etc/GMT-4",
        "373" => "Etc/GMT-5",
        "374" => "Etc/GMT-6",
        "375" => "Etc/GMT-7",
        "376" => "Etc/GMT-8",
        "377" => "Etc/GMT-9",
        "378" => "Etc/GMT0",
        "379" => "Etc/Greenwich",
        "380" => "Etc/UCT",
        "381" => "Etc/Universal",
        "382" => "Etc/UTC",
        "383" => "Etc/Zulu",
        "384" => "Europe/Amsterdam",
        "385" => "Europe/Andorra",
        "386" => "Europe/Athens",
        "387" => "Europe/Belfast",
        "388" => "Europe/Belgrade",
        "389" => "Europe/Berlin",
        "390" => "Europe/Bratislava",
        "391" => "Europe/Brussels",
        "392" => "Europe/Bucharest",
        "393" => "Europe/Budapest",
        "394" => "Europe/Chisinau",
        "395" => "Europe/Copenhagen",
        "396" => "Europe/Dublin",
        "397" => "Europe/Gibraltar",
        "398" => "Europe/Guernsey",
        "399" => "Europe/Helsinki",
        "400" => "Europe/Isle_of_Man",
        "401" => "Europe/Istanbul",
        "402" => "Europe/Jersey",
        "403" => "Europe/Kaliningrad",
        "404" => "Europe/Kiev",
        "405" => "Europe/Lisbon",
        "406" => "Europe/Ljubljana",
        "407" => "Europe/London",
        "408" => "Europe/Luxembourg",
        "409" => "Europe/Madrid",
        "410" => "Europe/Malta",
        "411" => "Europe/Mariehamn",
        "412" => "Europe/Minsk",
        "413" => "Europe/Monaco",
        "414" => "Europe/Moscow",
        "415" => "Europe/Nicosia",
        "416" => "Europe/Oslo",
        "417" => "Europe/Paris",
        "418" => "Europe/Podgorica",
        "419" => "Europe/Prague",
        "420" => "Europe/Riga",
        "421" => "Europe/Rome",
        "422" => "Europe/Samara",
        "423" => "Europe/San_Marino",
        "424" => "Europe/Sarajevo",
        "425" => "Europe/Simferopol",
        "426" => "Europe/Skopje",
        "427" => "Europe/Sofia",
        "428" => "Europe/Stockholm",
        "429" => "Europe/Tallinn",
        "430" => "Europe/Tirane",
        "431" => "Europe/Tiraspol",
        "432" => "Europe/Uzhgorod",
        "433" => "Europe/Vaduz",
        "434" => "Europe/Vatican",
        "435" => "Europe/Vienna",
        "436" => "Europe/Vilnius",
        "437" => "Europe/Volgograd",
        "438" => "Europe/Warsaw",
        "439" => "Europe/Zagreb",
        "440" => "Europe/Zaporozhye",
        "441" => "Europe/Zurich",
        "442" => "Factory",
        "443" => "GB",
        "444" => "GB-Eire",
        "445" => "GMT",
        "446" => "GMT+0",
        "447" => "GMT-0",
        "448" => "GMT0",
        "449" => "Greenwich",
        "450" => "Hongkong",
        "451" => "HST",
        "452" => "Iceland",
        "453" => "Indian/Antananarivo",
        "454" => "Indian/Chagos",
        "455" => "Indian/Christmas",
        "456" => "Indian/Cocos",
        "457" => "Indian/Comoro",
        "458" => "Indian/Kerguelen",
        "459" => "Indian/Mahe",
        "460" => "Indian/Maldives",
        "461" => "Indian/Mauritius",
        "462" => "Indian/Mayotte",
        "463" => "Indian/Reunion",
        "464" => "Iran",
        "465" => "Israel",
        "466" => "Jamaica",
        "467" => "Japan",
        "468" => "Kwajalein",
        "469" => "Libya",
        "470" => "MET",
        "471" => "Mexico/BajaNorte",
        "472" => "Mexico/BajaSur",
        "473" => "Mexico/General",
        "474" => "MST",
        "475" => "MST7MDT",
        "476" => "Navajo",
        "477" => "NZ",
        "478" => "NZ-CHAT",
        "479" => "Pacific/Apia",
        "480" => "Pacific/Auckland",
        "481" => "Pacific/Chatham",
        "482" => "Pacific/Easter",
        "483" => "Pacific/Efate",
        "484" => "Pacific/Enderbury",
        "485" => "Pacific/Fakaofo",
        "486" => "Pacific/Fiji",
        "487" => "Pacific/Funafuti",
        "488" => "Pacific/Galapagos",
        "489" => "Pacific/Gambier",
        "490" => "Pacific/Guadalcanal",
        "491" => "Pacific/Guam",
        "492" => "Pacific/Honolulu",
        "493" => "Pacific/Johnston",
        "494" => "Pacific/Kiritimati",
        "495" => "Pacific/Kosrae",
        "496" => "Pacific/Kwajalein",
        "497" => "Pacific/Majuro",
        "498" => "Pacific/Marquesas",
        "499" => "Pacific/Midway",
        "500" => "Pacific/Nauru",
        "501" => "Pacific/Niue",
        "502" => "Pacific/Norfolk",
        "503" => "Pacific/Noumea",
        "504" => "Pacific/Pago_Pago",
        "505" => "Pacific/Palau",
        "506" => "Pacific/Pitcairn",
        "507" => "Pacific/Ponape",
        "508" => "Pacific/Port_Moresby",
        "509" => "Pacific/Rarotonga",
        "510" => "Pacific/Saipan",
        "511" => "Pacific/Samoa",
        "512" => "Pacific/Tahiti",
        "513" => "Pacific/Tarawa",
        "514" => "Pacific/Tongatapu",
        "515" => "Pacific/Truk",
        "516" => "Pacific/Wake",
        "517" => "Pacific/Wallis",
        "518" => "Pacific/Yap",
        "519" => "Poland",
        "520" => "Portugal",
        "521" => "PRC",
        "522" => "PST8PDT",
        "523" => "ROC",
        "524" => "ROK",
        "525" => "Singapore",
        "526" => "Turkey",
        "527" => "UCT",
        "528" => "Universal",
        "529" => "US/Alaska",
        "530" => "US/Aleutian",
        "531" => "US/Arizona",
        "532" => "US/Central",
        "533" => "US/East-Indiana",
        "534" => "US/Eastern",
        "535" => "US/Hawaii",
        "536" => "US/Indiana-Starke",
        "537" => "US/Michigan",
        "538" => "US/Mountain",
        "539" => "US/Pacific",
        "540" => "US/Pacific-New",
        "541" => "US/Samoa",
        "542" => "UTC",
        "543" => "W-SU",
        "544" => "WET",
        "545" => "Zulu"
    );
    return $timezones;
}

?>
