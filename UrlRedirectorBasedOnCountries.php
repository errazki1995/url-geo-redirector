<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Free redirector Based on ip make sure to download the ip-zip  zipped file  
//this script automatically forward to the specified url based on your country 
// Get the Folder from here and put it in the same path as the script : http://www.phptutorial.info/iptocountry/ip_files.zip

//some examples : please help your self defining the country variable and link more explanations down there 

$moroccolink = "http://www.morocco.com/";
$urlUSA ="https://www.usatoday.com/";
$urlFrance="https://www.france.com";  
$urlGermany ="http://www.germany.com";
$urlSpain = "https://www.canaryfly.es/"; 

function iptocountry($ip) {    
    $numbers = preg_split( "/\./", $ip);    
    include("ip_files/".$numbers[0].".php");
    $code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);    
    foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$country=$ranges[$key][1];break;}
            }
    }
    if ($country==""){$country="unkown";}
    return $country;
}

$ip = getenv("REMOTE_ADDR");
 iptocountry($ip);
$country = iptocountry($ip);
//this is just a demo make sure you put your variable up there with targeting countries you need  :)
/* ie: if afghanistan is one of your targeted countries ::do so 
*/
$urlAfghanistan ="http://linkhere.com";
$countries = array(
        "AF" => array("country" => "Afghanistan", "continent" => "Asia", "link" => $urlAfghanistan), // and put the link's variable after you add "link"=>
        "AX" => array("country" => "Åland Islands", "continent" => "Europe","link" => "https://www.google.com"),
        "AL" => array("country" => "Albania", "continent" => "Europe","link" => "https://www.google.com"),
        "DZ" => array("country" => "Algeria", "continent" => "Africa","link" => "https://www.google.com"),
        "AS" => array("country" => "American Samoa", "continent" => "Oceania","link" => "https://www.google.com"),
        "AD" => array("country" => "Andorra", "continent" => "Europe","link" =>"https://www.google.com"),
        "AO" => array("country" => "Angola", "continent" => "Africa","link" => "https://www.google.com"),
        "AI" => array("country" => "Anguilla", "continent" => "North America","link" => "https://www.google.com"),
        "AQ" => array("country" => "Antarctica", "continent" => "Antarctica","link" => "https://www.google.com"),
        "AG" => array("country" => "Antigua and Barbuda", "continent" => "North America","link" => "https://www.google.com"),
        "AR" => array("country" => "Argentina", "continent" => "South America","link" => "https://www.google.com"),
        "AM" => array("country" => "Armenia", "continent" => "Asia","link" => "https://www.google.com"),
        "AW" => array("country" => "Aruba", "continent" => "North America","link" => "https://www.google.com"),
        "AU" => array("country" => "Australia", "continent" => "Oceania","link" => "https://www.google.com"),
        "AT" => array("country" => "Austria", "continent" => "Europe","link" => "https://www.google.com"),
        "AZ" => array("country" => "Azerbaijan", "continent" => "Asia","link" => "https://www.google.com"),
        "BS" => array("country" => "Bahamas", "continent" => "North America","link" => "https://www.google.com"),
        "BH" => array("country" => "Bahrain", "continent" => "Asia","link" => "https://www.google.com"),
        "BD" => array("country" => "Bangladesh", "continent" => "Asia","link" => "https://www.google.com"),
        "BB" => array("country" => "Barbados", "continent" => "North America","link" => "https://www.google.com"),
        "BY" => array("country" => "Belarus", "continent" => "Europe","link" => "https://www.google.com"),
        "BE" => array("country" => "Belgium", "continent" => "Europe"),
        "BZ" => array("country" => "Belize", "continent" => "North America"),
        "BJ" => array("country" => "Benin", "continent" => "Africa"),
        "BM" => array("country" => "Bermuda", "continent" => "North America"),
        "BT" => array("country" => "Bhutan", "continent" => "Asia"),
        "BO" => array("country" => "Bolivia", "continent" => "South America"),
        "BA" => array("country" => "Bosnia and Herzegovina", "continent" => "Europe"),
        "BW" => array("country" => "Botswana", "continent" => "Africa"),
        "BV" => array("country" => "Bouvet Island", "continent" => "Antarctica"),
        "BR" => array("country" => "Brazil", "continent" => "South America"),
        "IO" => array("country" => "British Indian Ocean Territory", "continent" => "Asia"),
        "BN" => array("country" => "Brunei Darussalam", "continent" => "Asia"),
        "BG" => array("country" => "Bulgaria", "continent" => "Europe"),
        "BF" => array("country" => "Burkina Faso", "continent" => "Africa"),
        "BI" => array("country" => "Burundi", "continent" => "Africa"),
        "KH" => array("country" => "Cambodia", "continent" => "Asia"),
        "CM" => array("country" => "Cameroon", "continent" => "Africa"),
        "CA" => array("country" => "Canada", "continent" => "North America"),
        "CV" => array("country" => "Cape Verde", "continent" => "Africa"),
        "KY" => array("country" => "Cayman Islands", "continent" => "North America"),
        "CF" => array("country" => "Central African Republic", "continent" => "Africa"),
        "TD" => array("country" => "Chad", "continent" => "Africa"),
        "CL" => array("country" => "Chile", "continent" => "South America"),
        "CN" => array("country" => "China", "continent" => "Asia"),
        "CX" => array("country" => "Christmas Island", "continent" => "Asia"),
        "CC" => array("country" => "Cocos (Keeling) Islands", "continent" => "Asia"),
        "CO" => array("country" => "Colombia", "continent" => "South America"),
        "KM" => array("country" => "Comoros", "continent" => "Africa"),
        "CG" => array("country" => "Congo", "continent" => "Africa"),
        "CD" => array("country" => "The Democratic Republic of The Congo", "continent" => "Africa"),
        "CK" => array("country" => "Cook Islands", "continent" => "Oceania"),
        "CR" => array("country" => "Costa Rica", "continent" => "North America"),
        "CI" => array("country" => "Cote D'ivoire", "continent" => "Africa"),
        "HR" => array("country" => "Croatia", "continent" => "Europe"),
        "CU" => array("country" => "Cuba", "continent" => "North America"),
        "CY" => array("country" => "Cyprus", "continent" => "Asia"),
        "CZ" => array("country" => "Czech Republic", "continent" => "Europe"),
        "DK" => array("country" => "Denmark", "continent" => "Europe"),
        "DJ" => array("country" => "Djibouti", "continent" => "Africa"),
        "DM" => array("country" => "Dominica", "continent" => "North America"),
        "DO" => array("country" => "Dominican Republic", "continent" => "North America"),
        "EC" => array("country" => "Ecuador", "continent" => "South America"),
        "EG" => array("country" => "Egypt", "continent" => "Africa"),
        "SV" => array("country" => "El Salvador", "continent" => "North America"),
        "GQ" => array("country" => "Equatorial Guinea", "continent" => "Africa"),
        "ER" => array("country" => "Eritrea", "continent" => "Africa"),
        "EE" => array("country" => "Estonia", "continent" => "Europe"),
        "ET" => array("country" => "Ethiopia", "continent" => "Africa"),
        "FK" => array("country" => "Falkland Islands (Malvinas)", "continent" => "South America"),
        "FO" => array("country" => "Faroe Islands", "continent" => "Europe"),
        "FJ" => array("country" => "Fiji", "continent" => "Oceania"),
        "FI" => array("country" => "Finland", "continent" => "Europe"),
        "FR" => array("country" => "France", "continent" => "Europe","link"=>$urlFrance),
        "GF" => array("country" => "French Guiana", "continent" => "South America"),
        "PF" => array("country" => "French Polynesia", "continent" => "Oceania"),
        "TF" => array("country" => "French Southern Territories", "continent" => "Antarctica"),
        "GA" => array("country" => "Gabon", "continent" => "Africa"),
        "GM" => array("country" => "Gambia", "continent" => "Africa"),
        "GE" => array("country" => "Georgia", "continent" => "Asia"),
        "DE" => array("country" => "Germany", "continent" => "Europe","link"=>$urlGermany),
        "GH" => array("country" => "Ghana", "continent" => "Africa"),
        "GI" => array("country" => "Gibraltar", "continent" => "Europe"),
        "GR" => array("country" => "Greece", "continent" => "Europe"),
        "GL" => array("country" => "Greenland", "continent" => "North America"),
        "GD" => array("country" => "Grenada", "continent" => "North America"),
        "GP" => array("country" => "Guadeloupe", "continent" => "North America"),
        "GU" => array("country" => "Guam", "continent" => "Oceania"),
        "GT" => array("country" => "Guatemala", "continent" => "North America"),
        "GG" => array("country" => "Guernsey", "continent" => "Europe"),
        "GN" => array("country" => "Guinea", "continent" => "Africa"),
        "GW" => array("country" => "Guinea-bissau", "continent" => "Africa"),
        "GY" => array("country" => "Guyana", "continent" => "South America"),
        "HT" => array("country" => "Haiti", "continent" => "North America"),
        "HM" => array("country" => "Heard Island and Mcdonald Islands", "continent" => "Antarctica"),
        "VA" => array("country" => "Holy See (Vatican City State)", "continent" => "Europe"),
        "HN" => array("country" => "Honduras", "continent" => "North America"),
        "HK" => array("country" => "Hong Kong", "continent" => "Asia"),
        "HU" => array("country" => "Hungary", "continent" => "Europe"),
        "IS" => array("country" => "Iceland", "continent" => "Europe"),
        "IN" => array("country" => "India", "continent" => "Asia"),
        "ID" => array("country" => "Indonesia", "continent" => "Asia"),
        "IR" => array("country" => "Iran", "continent" => "Asia"),
        "IQ" => array("country" => "Iraq", "continent" => "Asia"),
        "IE" => array("country" => "Ireland", "continent" => "Europe"),
        "IM" => array("country" => "Isle of Man", "continent" => "Europe"),
        "IL" => array("country" => "Israel", "continent" => "Asia"),
        "IT" => array("country" => "Italy", "continent" => "Europe"),
        "JM" => array("country" => "Jamaica", "continent" => "North America"),
        "JP" => array("country" => "Japan", "continent" => "Asia"),
        "JE" => array("country" => "Jersey", "continent" => "Europe"),
        "JO" => array("country" => "Jordan", "continent" => "Asia"),
        "KZ" => array("country" => "Kazakhstan", "continent" => "Asia"),
        "KE" => array("country" => "Kenya", "continent" => "Africa"),
        "KI" => array("country" => "Kiribati", "continent" => "Oceania"),
        "KP" => array("country" => "Democratic People's Republic of Korea", "continent" => "Asia"),
        "KR" => array("country" => "Republic of Korea", "continent" => "Asia"),
        "KW" => array("country" => "Kuwait", "continent" => "Asia"),
        "KG" => array("country" => "Kyrgyzstan", "continent" => "Asia"),
        "LA" => array("country" => "Lao People's Democratic Republic", "continent" => "Asia"),
        "LV" => array("country" => "Latvia", "continent" => "Europe"),
        "LB" => array("country" => "Lebanon", "continent" => "Asia"),
        "LS" => array("country" => "Lesotho", "continent" => "Africa"),
        "LR" => array("country" => "Liberia", "continent" => "Africa"),
        "LY" => array("country" => "Libya", "continent" => "Africa"),
        "LI" => array("country" => "Liechtenstein", "continent" => "Europe"),
        "LT" => array("country" => "Lithuania", "continent" => "Europe"),
        "LU" => array("country" => "Luxembourg", "continent" => "Europe"),
        "MO" => array("country" => "Macao", "continent" => "Asia"),
        "MK" => array("country" => "Macedonia", "continent" => "Europe"),
        "MG" => array("country" => "Madagascar", "continent" => "Africa"),
        "MW" => array("country" => "Malawi", "continent" => "Africa"),
        "MY" => array("country" => "Malaysia", "continent" => "Asia"),
        "MV" => array("country" => "Maldives", "continent" => "Asia"),
        "ML" => array("country" => "Mali", "continent" => "Africa"),
        "MT" => array("country" => "Malta", "continent" => "Europe"),
        "MH" => array("country" => "Marshall Islands", "continent" => "Oceania"),
        "MQ" => array("country" => "Martinique", "continent" => "North America"),
        "MR" => array("country" => "Mauritania", "continent" => "Africa"),
        "MU" => array("country" => "Mauritius", "continent" => "Africa"),
        "YT" => array("country" => "Mayotte", "continent" => "Africa"),
        "MX" => array("country" => "Mexico", "continent" => "North America"),
        "FM" => array("country" => "Micronesia", "continent" => "Oceania"),
        "MD" => array("country" => "Moldova", "continent" => "Europe"),
        "MC" => array("country" => "Monaco", "continent" => "Europe"),
        "MN" => array("country" => "Mongolia", "continent" => "Asia"),
        "ME" => array("country" => "Montenegro", "continent" => "Europe"),
        "MS" => array("country" => "Montserrat", "continent" => "North America"),
        "MA" => array("country" => "Morocco", "continent" => "Africa","link" => $moroccolink),
        "MZ" => array("country" => "Mozambique", "continent" => "Africa"),
        "MM" => array("country" => "Myanmar", "continent" => "Asia"),
        "NA" => array("country" => "Namibia", "continent" => "Africa"),
        "NR" => array("country" => "Nauru", "continent" => "Oceania"),
        "NP" => array("country" => "Nepal", "continent" => "Asia"),
        "NL" => array("country" => "Netherlands", "continent" => "Europe"),
        "AN" => array("country" => "Netherlands Antilles", "continent" => "North America"),
        "NC" => array("country" => "New Caledonia", "continent" => "Oceania"),
        "NZ" => array("country" => "New Zealand", "continent" => "Oceania"),
        "NI" => array("country" => "Nicaragua", "continent" => "North America"),
        "NE" => array("country" => "Niger", "continent" => "Africa"),
        "NG" => array("country" => "Nigeria", "continent" => "Africa"),
        "NU" => array("country" => "Niue", "continent" => "Oceania"),
        "NF" => array("country" => "Norfolk Island", "continent" => "Oceania"),
        "MP" => array("country" => "Northern Mariana Islands", "continent" => "Oceania"),
        "NO" => array("country" => "Norway", "continent" => "Europe"),
        "OM" => array("country" => "Oman", "continent" => "Asia"),
        "PK" => array("country" => "Pakistan", "continent" => "Asia"),
        "PW" => array("country" => "Palau", "continent" => "Oceania"),
        "PS" => array("country" => "Palestinia", "continent" => "Asia"),
        "PA" => array("country" => "Panama", "continent" => "North America"),
        "PG" => array("country" => "Papua New Guinea", "continent" => "Oceania"),
        "PY" => array("country" => "Paraguay", "continent" => "South America"),
        "PE" => array("country" => "Peru", "continent" => "South America"),
        "PH" => array("country" => "Philippines", "continent" => "Asia"),
        "PN" => array("country" => "Pitcairn", "continent" => "Oceania"),
        "PL" => array("country" => "Poland", "continent" => "Europe"),
        "PT" => array("country" => "Portugal", "continent" => "Europe"),
        "PR" => array("country" => "Puerto Rico", "continent" => "North America"),
        "QA" => array("country" => "Qatar", "continent" => "Asia"),
        "RE" => array("country" => "Reunion", "continent" => "Africa"),
        "RO" => array("country" => "Romania", "continent" => "Europe"),
        "RU" => array("country" => "Russian Federation", "continent" => "Europe"),
        "RW" => array("country" => "Rwanda", "continent" => "Africa"),
        "SH" => array("country" => "Saint Helena", "continent" => "Africa"),
        "KN" => array("country" => "Saint Kitts and Nevis", "continent" => "North America"),
        "LC" => array("country" => "Saint Lucia", "continent" => "North America"),
        "PM" => array("country" => "Saint Pierre and Miquelon", "continent" => "North America"),
        "VC" => array("country" => "Saint Vincent and The Grenadines", "continent" => "North America"),
        "WS" => array("country" => "Samoa", "continent" => "Oceania"),
        "SM" => array("country" => "San Marino", "continent" => "Europe"),
        "ST" => array("country" => "Sao Tome and Principe", "continent" => "Africa"),
        "SA" => array("country" => "Saudi Arabia", "continent" => "Asia"),
        "SN" => array("country" => "Senegal", "continent" => "Africa"),
        "RS" => array("country" => "Serbia", "continent" => "Europe"),
        "SC" => array("country" => "Seychelles", "continent" => "Africa"),
        "SL" => array("country" => "Sierra Leone", "continent" => "Africa"),
        "SG" => array("country" => "Singapore", "continent" => "Asia"),
        "SK" => array("country" => "Slovakia", "continent" => "Europe"),
        "SI" => array("country" => "Slovenia", "continent" => "Europe"),
        "SB" => array("country" => "Solomon Islands", "continent" => "Oceania"),
        "SO" => array("country" => "Somalia", "continent" => "Africa"),
        "ZA" => array("country" => "South Africa", "continent" => "Africa"),
        "GS" => array("country" => "South Georgia and The South Sandwich Islands", "continent" => "Antarctica"),
        "ES" => array("country" => "Spain", "continent" => "Europe","link"=>$urlSpain),
        "LK" => array("country" => "Sri Lanka", "continent" => "Asia"),
        "SD" => array("country" => "Sudan", "continent" => "Africa"),
        "SR" => array("country" => "Suriname", "continent" => "South America"),
        "SJ" => array("country" => "Svalbard and Jan Mayen", "continent" => "Europe"),
        "SZ" => array("country" => "Swaziland", "continent" => "Africa"),
        "SE" => array("country" => "Sweden", "continent" => "Europe"),
        "CH" => array("country" => "Switzerland", "continent" => "Europe"),
        "SY" => array("country" => "Syrian Arab Republic", "continent" => "Asia"),
        "TW" => array("country" => "Taiwan, Province of China", "continent" => "Asia"),
        "TJ" => array("country" => "Tajikistan", "continent" => "Asia"),
        "TZ" => array("country" => "Tanzania, United Republic of", "continent" => "Africa"),
        "TH" => array("country" => "Thailand", "continent" => "Asia"),
        "TL" => array("country" => "Timor-leste", "continent" => "Asia"),
        "TG" => array("country" => "Togo", "continent" => "Africa"),
        "TK" => array("country" => "Tokelau", "continent" => "Oceania"),
        "TO" => array("country" => "Tonga", "continent" => "Oceania"),
        "TT" => array("country" => "Trinidad and Tobago", "continent" => "North America"),
        "TN" => array("country" => "Tunisia", "continent" => "Africa"),
        "TR" => array("country" => "Turkey", "continent" => "Asia"),
        "TM" => array("country" => "Turkmenistan", "continent" => "Asia"),
        "TC" => array("country" => "Turks and Caicos Islands", "continent" => "North America"),
        "TV" => array("country" => "Tuvalu", "continent" => "Oceania"),
        "UG" => array("country" => "Uganda", "continent" => "Africa"),
        "UA" => array("country" => "Ukraine", "continent" => "Europe"),
        "AE" => array("country" => "United Arab Emirates", "continent" => "Asia"),
        "GB" => array("country" => "United Kingdom", "continent" => "Europe"),
        "US" => array("country" => "United States", "continent" => "North America", "link" => $urlUSA),
        "UM" => array("country" => "United States Minor Outlying Islands", "continent" => "Oceania"),
        "UY" => array("country" => "Uruguay", "continent" => "South America"),
        "UZ" => array("country" => "Uzbekistan", "continent" => "Asia"),
        "VU" => array("country" => "Vanuatu", "continent" => "Oceania"),
        "VE" => array("country" => "Venezuela", "continent" => "South America"),
        "VN" => array("country" => "Viet Nam", "continent" => "Asia"),
        "VG" => array("country" => "Virgin Islands, British", "continent" => "North America"),
        "VI" => array("country" => "Virgin Islands, U.S.", "continent" => "North America"),
        "WF" => array("country" => "Wallis and Futuna", "continent" => "Oceania"),
        "EH" => array("country" => "Western Sahara", "continent" => "Africa"),
        "YE" => array("country" => "Yemen", "continent" => "Asia"),
        "ZM" => array("country" => "Zambia", "continent" => "Africa"),
        "ZW" => array("country" => "Zimbabwe", "continent" => "Africa")
    );

	

//Get the link to redirect 	
$linkFinal = $countries[$country]['link'];
	
//Country Name 	
$countryRecord = $countries[$country]['country'];


//Continent Name
$continent = $countries[$country]['continent'];

//echo "<h2>The country is" .$countryRecord. " Located in " . $continent. "contient and the link is : ".$linkFinal."</h2>";


echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $linkFinal. '">';



?>
