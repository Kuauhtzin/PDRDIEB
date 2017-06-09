<?php

namespace App\Libraries;

class MapCountries {

    public function __construct(){

    }
    public static function getId($cla){
        $entities =
        array(
            array(01,"AG","Antigua and Barbuda"),
            array(02,"BS","Bahamas"),
            array(03,"BB","Barbados"),
            array(04,"BZ","Belize"),
            array(05,"CA","Canada"),
            array(06,"CR","Costa Rica"),
            array(07,"CU","Cuba"),
            array(08,"DM","Dominica"),
            array(09,"DO","Dominican Republic"),
            array(10,"SV","El Salvador"),
            array(100,"KH","Cambodia"),
            array(101,"CN","China"),
            array(102,"TP","East Timor"),
            array(103,"GE","Georgia"),
            array(104,"IN","India"),
            array(105,"ID","Indonesia"),
            array(106,"IA","Iran"),
            array(107,"JP","Japan"),
            array(108,"KZ","Kazakhstan"),
            array(109,"KP","Korea (north)"),
            array(11,"GD","Grenada"),
            array(110,"KR","Korea (south)"),
            array(111,"KG","Kyrgyzstan"),
            array(112,"LA","Laos"),
            array(113,"MY","Malaysia"),
            array(114,"MN","Mongolia"),
            array(115,"NP","Nepal"),
            array(116,"PK","Pakistan"),
            array(117,"PH","Philippines"),
            array(118,"RU","Russia"),
            array(119,"SG","Singapore"),
            array(12,"GT","Guatemala"),
            array(120,"LK","Sri Lanka"),
            array(121,"TJ","Tajikistan"),
            array(122,"TH","Thailand"),
            array(123,"TM","Turkmenistan"),
            array(124,"UZ","Uzbekistan"),
            array(125,"VN","Vietnam"),
            array(126,"TW","Taiwan"),
            array(127,"HK","Hong Kong"),
            array(128,"MO","Macau"),
            array(129,"AL","Albania"),
            array(13,"HT","Haiti"),
            array(130,"AD","Andorra"),
            array(131,"AT","Austria"),
            array(132,"BY","Belarus"),
            array(133,"BE","Belgium"),
            array(134,"BH","Bosnia and Herzegovina"),
            array(135,"BG","Bulgaria"),
            array(136,"HY","Croatia"),
            array(137,"CZ","Czech Republic"),
            array(138,"DK","Denmark"),
            array(139,"EE","Estonia"),
            array(14,"HN","Honduras"),
            array(140,"FI","Finland"),
            array(141,"FR","France"),
            array(142,"DE","Germany"),
            array(143,"GR","Greece"),
            array(144,"HU","Hungary"),
            array(145,"IS","Iceland"),
            array(146,"IR","Ireland"),
            array(147,"IT","Italy"),
            array(148,"LV","Latvia"),
            array(149,"LN","Liechtenstein"),
            array(15,"JM","Jamaica"),
            array(150,"LT","Lithuania"),
            array(151,"LU","Luxembourg"),
            array(152,"MK","Macedonia"),
            array(153,"MT","Malta"),
            array(154,"MV","Moldova"),
            array(155,"MC","Monaco"),
            array(156,"MG","Montenegro"),
            array(157,"NL","Netherlands"),
            array(158,"NO","Norway"),
            array(159,"PL","Poland"),
            array(16,"MX","Mexico"),
            array(160,"PT","Portugal"),
            array(161,"RO","Romania"),
            array(162,"SM","San Marino"),
            array(163,"CS","Serbia"),
            array(164,"SK","Slovakia"),
            array(165,"SI","Slovenia"),
            array(166,"ES","Spain"),
            array(167,"SE","Sweden"),
            array(168,"CH","Switzerland"),
            array(169,"UA","Ukraine"),
            array(17,"NI","Nicaragua"),
            array(170,"UK","United Kingdom"),
            array(171,"VA","Vatican City"),
            array(172,"CY","Cyprus"),
            array(173,"TK","Turkey"),
            array(175,"AU","Australia"),
            array(176,"FJ","Fiji"),
            array(177,"KI","Kiribati"),
            array(178,"MH","Marshall Islands"),
            array(179,"FM","Micronesia"),
            array(18,"PA","Panama"),
            array(180,"NR","Nauru"),
            array(181,"NZ","New Zealand"),
            array(182,"PW","Palau"),
            array(183,"PG","Papua New Guinea"),
            array(184,"WS","Samoa"),
            array(185,"SB","Solomon Islands"),
            array(186,"TO","Tonga"),
            array(187,"TV","Tuvalu"),
            array(188,"VU","Vanuatu"),
            array(189,"NC","New Caledonia"),
            array(19,"KN","St.Kitts & Nevis"),
            array(190,"BA","Bahrain"),
            array(191,"IZ","Iraq"),
            array(192,"IE","Israel"),
            array(193,"JO","Jordan"),
            array(194,"KU","Kuwait"),
            array(195,"LB","Lebanon"),
            array(196,"OM","Oman"),
            array(197,"QA","Qatar"),
            array(198,"SA","Saudi Arabia"),
            array(199,"SY","Syria"),
            array(20,"LC","St.Lucia"),
            array(200,"AE","United Arab Emirates"),
            array(201,"YM","Yemen"),
            array(202,"PR","Puerto Rico"),
            array(203,"KY","Cayman Islands"),
            array(204,"SS","South Sudan"),
            array(205,"KO","Kosovo"),
            array(21,"VC","St.Vincent & the Grenadines"),
            array(22,"TT","Trinidad & Tobago"),
            array(23,"US","United States"),
            array(24,"GL","Greenland"),
            array(25,"AR","Argentina"),
            array(26,"BO","Bolivia"),
            array(27,"BR","Brazil"),
            array(28,"CL","Chile"),
            array(29,"CO","Colombia"),
            array(30,"EC","Ecuador"),
            array(31,"FK","Falkland Islands"),
            array(32,"GF","French Guiana"),
            array(33,"GY","Guyana"),
            array(34,"PY","Paraguay"),
            array(35,"PE","Peru"),
            array(36,"SR","Suriname"),
            array(37,"UY","Uruguay"),
            array(38,"VE","Venezuela"),
            array(39,"DZ","Algeria"),
            array(40,"AO","Angola"),
            array(41,"BJ","Benin"),
            array(42,"BW","Botswana"),
            array(43,"BF","Burkina Faso"),
            array(44,"BI","Burundi"),
            array(45,"CM","Cameroon"),
            array(46,"CV","Cape Verde"),
            array(47,"CP","Central African Republic"),
            array(48,"TD","Chad"),
            array(49,"KM","Comoros"),
            array(50,"CI","Cote d’ivoire"),
            array(51,"CD","Democratic Republic of the Congo"),
            array(52,"DJ","Djibouti"),
            array(53,"EG","Egypt"),
            array(54,"GQ","Equatorial Guinea"),
            array(55,"ER","Eritrea"),
            array(56,"ET","Ethiopia"),
            array(57,"GA","Gabon"),
            array(58,"GH","Ghana"),
            array(59,"GN","Guinea"),
            array(60,"GW","Guinea-Bissau"),
            array(61,"KE","Kenya"),
            array(62,"LS","Lesotho"),
            array(63,"LI","Liberia"),
            array(64,"LR","Libya"),
            array(65,"MS","Madagascar"),
            array(66,"MW","Malawi"),
            array(67,"ML","Mali"),
            array(68,"MR","Mauritania"),
            array(69,"MA","Morocco"),
            array(70,"MZ","Mozambique"),
            array(71,"NA","Namibia"),
            array(72,"NE","Niger"),
            array(73,"NG","Nigeria"),
            array(74,"RW","Rwanda"),
            array(75,"ST","Sao Tome and Principe"),
            array(76,"SN","Senegal"),
            array(77,"SC","Seychelles"),
            array(78,"SL","Sierra Leone"),
            array(79,"SO","Somalia"),
            array(80,"ZA","South Africa"),
            array(81,"SD","Sudan"),
            array(82,"SZ","Swaziland"),
            array(83,"TZ","Tanzania"),
            array(84,"TG","Togo"),
            array(85,"TN","Tunisia"),
            array(86,"UG","Uganda"),
            array(87,"WA","Western Sahara"),
            array(88,"ZM","Zambia"),
            array(89,"ZW","Zimbabwe"),
            array(90,"GM","Gambia"),
            array(91,"CG","Congo"),
            array(92,"MI","Mauritius"),
            array(93,"AF","Afghanistan"),
            array(94,"AM","Armenia"),
            array(95,"AZ","Azerbaijan"),
            array(96,"BD","Bangladesh"),
            array(97,"BT","Bhutan"),
            array(98,"BN","Brunei"),
            array(99,"MM","Burma (Myanmar)")
        );

        foreach ($entities as $key => $value) {
            if($value[1]==$cla)
                return $value[0];
        }
        return 0;
    }

    public static function getDefinition($id){
        $countries = array(
            "MX" => array(
                "id" => "MX",
                "x" => "421.5",
                "y" => "598.54",
                "label" => "México",
                "labelpos" => "left"
            ),
            "US" => array(
                "id" => "US",
                "x" => "547.14",
                "y" => "484.9",
                "label" => "Estados Unidos",
                "labelpos" => "bottom"
            ),
            "GT" => array(
                "id" => "GT",
                "x" => "468.23",
                "y" => "623.81",
                "label" => "Guatemala",
                "labelpos" => "top"
            ),
            "SV" => array(
                "id" => "SV",
                "x" => "474.6",
                "y" => "643.45",
                "label" => "El Salvador",
                "labelpos" => "left"
            ),
            "PA" => array(
                "id" => "PA",
                "x" => "531.87",
                "y" => "670.72",
                "label" => "Panamá",
                "labelpos" => "left"
            ),
            "NI" => array(
                "id" => "NI",
                "x" => "505.14",
                "y" => "641.45",
                "label" => "Nicaragua",
                "labelpos" => "right"
            ),
            "CO" => array(
                "id" => "CO",
                "x" => "559.87",
                "y" => "698.72",
                "label" => "Colombia",
                "labelpos" => "bottom"
            ),
            "VE" => array(
                "id" => "VE",
                "x" => "606.96",
                "y" => "664.36",
                "label" => "Venezuela",
                "labelpos" => "right"
            ),
            "CL" => array(
                "id" => "CL",
                "x" => "584.05",
                "y" => "929.09",
                "label" => "Chile",
                "labelpos" => "left"
           )
        );
        return $countries[$id];
    }

    public static function getApplication($id,$text){
        $countries = array(
            "MX" => array(
                "id" => "MX",
                "shapeid" => "MXMap"
            ),
            "US" => array(
                "id" => "US",
                "shapeid" => "USMap"
            ),
            "GT" => array(
                "id" => "GT",
                "shapeid" => "GTMap"
            ),
            "SV" => array(
                "id" => "SV",
                "shapeid" => "SVMap"
            ),
            "PA" => array(
                "id" => "PA",
                "shapeid" => "PAMap"
            ),
            "NI" => array(
                "id" => "NI",
                "shapeid" => "NIMap"
            ),
            "CO" => array(
                "id" => "CO",
                "shapeid" => "COMap"
            ),
            "VE" => array(
                "id" => "VE",
                "shapeid" => "VEMap"
            ),
            "CL" => array(
                "id" => "CL",
                "shapeid" => "CLMap"
           )
        );
        return $countries[$id];
    }

    public static function getShapes(){
        $shapes = array(
            array(
                "id" => "MXMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/mx_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "USMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/us_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "GTMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/gt_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "SVMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/sv_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "PAMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/pa_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "NIMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/ni_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "COMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/co_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "VEMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/ve_flag.jpg",
                "labelpadding" => "12"
            ),
            array(
                "id" => "CLMap",
                "type" => "image",
                "url" => "../../plugins/fusioncharts/img/cl_flag.jpg",
                "labelpadding" => "12"
           )
        );
        return $shapes;
    }

}

        