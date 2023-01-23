<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/cssstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
        /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" /> -->
    <style>
        .bg2 {
            background-color:  #F2F2F2;
        }
        /* .bord {
            border: 1px solid black;
            width: 7%; 
        }*/
        /* .icon {
            margin-left: 38%;
            margin-top: 15%;
        } */
    </style>
</head>

<body>
    <div class="container bg2">
        <form>
            <div class="row">
                <div class="col-sm-2 mt-3 text-center"><strong>Username</strong></div>
                <div class="col-sm-9 mt-3">
                    <input type="" value="awisoft.net@gmail.com" class="form-control" style="background-color:transparent; border:none;" name="">
                </div>
                <div class="col-sm-1 mt-3"></div>

                <div class="col-sm-2 mt-1 text-center"><strong>First name</strong></div>
                <div class="col-sm-9 mt-1">
                    <div class="col">
                        <input type="text" class="form-control" aria-label="First name">
                    </div>
                </div>
                <div class="col-sm-1 mt-1"></div>

                <div class="col-sm-2 mt-3 text-center"><strong>Last name</strong></div>
                <div class="col-sm-9 mt-3">
                    <div class="col">
                        <input type="text" class="form-control" aria-label="First name">
                    </div>
                </div>
                <div class="col-sm-1 mt-3"></div>

                <div class="col-sm-2 mt-3 text-center"><strong>Time zone</strong></div>
                <div class="col-sm-9 mt-3">
                    <div class="col-md-4">
                        <select id="inputState" class="form-select">
                           
                                <option value="Dateline Standard Time">
                                    (GMT-12:00) International Date Line West
                                </option>
                                <option value="UTC-11">
                                    (GMT-11:00) Coordinated Universal Time-11
                                </option>
                                <option value="Aleutian Standard Time">
                                    (GMT-10:00) Aleutian Islands
                                </option>
                                <option value="Hawaiian Standard Time">
                                    (GMT-10:00) Hawaii
                                </option>
                                <option value="Marquesas Standard Time">
                                    (GMT-09:30) Marquesas Islands
                                </option>
                                <option value="Alaskan Standard Time">
                                    (GMT-09:00) Alaska
                                </option>
                                <option value="UTC-09">
                                    (GMT-09:00) Coordinated Universal Time-09
                                </option>
                                <option value="Pacific Standard Time (Mexico)">
                                    (GMT-08:00) Baja California
                                </option>
                                <option value="UTC-08">
                                    (GMT-08:00) Coordinated Universal Time-08
                                </option>
                                <option value="Pacific Standard Time">
                                    (GMT-08:00) Pacific Time (US &amp; Canada)
                                </option>
                                <option value="US Mountain Standard Time">
                                    (GMT-07:00) Arizona
                                </option>
                                <option value="Mountain Standard Time (Mexico)">
                                    (GMT-07:00) Chihuahua, La Paz, Mazatlan
                                </option>
                                <option value="Mountain Standard Time">
                                    (GMT-07:00) Mountain Time (US &amp; Canada)
                                </option>
                                <option value="Yukon Standard Time">
                                    (GMT-07:00) Yukon
                                </option>
                                <option value="Central America Standard Time">
                                    (GMT-06:00) Central America
                                </option>
                                <option value="Central Standard Time">
                                    (GMT-06:00) Central Time (US &amp; Canada)
                                </option>
                                <option value="Easter Island Standard Time">
                                    (GMT-06:00) Easter Island
                                </option>
                                <option value="Central Standard Time (Mexico)">
                                    (GMT-06:00) Guadalajara, Mexico City, Monterrey
                                </option>
                                <option value="Canada Central Standard Time">
                                    (GMT-06:00) Saskatchewan
                                </option>
                                <option value="SA Pacific Standard Time">
                                    (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                </option>
                                <option value="Eastern Standard Time (Mexico)">
                                    (GMT-05:00) Chetumal
                                </option>
                                <option value="Eastern Standard Time">
                                    (GMT-05:00) Eastern Time (US &amp; Canada)
                                </option>
                                <option value="Haiti Standard Time">
                                    (GMT-05:00) Haiti
                                </option>
                                <option value="Cuba Standard Time">
                                    (GMT-05:00) Havana
                                </option>
                                <option value="US Eastern Standard Time">
                                    (GMT-05:00) Indiana (East)
                                </option>
                                <option value="Turks And Caicos Standard Time">
                                    (GMT-05:00) Turks and Caicos
                                </option>
                                <option value="Paraguay Standard Time">
                                    (GMT-04:00) Asuncion
                                </option>
                                <option value="Atlantic Standard Time">
                                    (GMT-04:00) Atlantic Time (Canada)
                                </option>
                                <option value="Venezuela Standard Time">
                                    (GMT-04:00) Caracas
                                </option>
                                <option value="Central Brazilian Standard Time">
                                    (GMT-04:00) Cuiaba
                                </option>
                                <option value="SA Western Standard Time">
                                    (GMT-04:00) Georgetown, La Paz, Manaus, San Juan
                                </option>
                                <option value="Pacific SA Standard Time">
                                    (GMT-04:00) Santiago
                                </option>
                                <option value="Newfoundland Standard Time">
                                    (GMT-03:30) Newfoundland
                                </option>
                                <option value="Tocantins Standard Time">
                                    (GMT-03:00) Araguaina
                                </option>
                                <option value="E. South America Standard Time">
                                    (GMT-03:00) Brasilia
                                </option>
                                <option value="SA Eastern Standard Time">
                                    (GMT-03:00) Cayenne, Fortaleza
                                </option>
                                <option value="Argentina Standard Time">
                                    (GMT-03:00) City of Buenos Aires
                                </option>
                                <option value="Greenland Standard Time">
                                    (GMT-03:00) Greenland
                                </option>
                                <option value="Montevideo Standard Time">
                                    (GMT-03:00) Montevideo
                                </option>
                                <option value="Magallanes Standard Time">
                                    (GMT-03:00) Punta Arenas
                                </option>
                                <option value="Saint Pierre Standard Time">
                                    (GMT-03:00) Saint Pierre and Miquelon
                                </option>
                                <option value="Bahia Standard Time">
                                    (GMT-03:00) Salvador
                                </option>
                                <option value="UTC-02">
                                    (GMT-02:00) Coordinated Universal Time-02
                                </option>
                                <option value="Mid-Atlantic Standard Time">
                                    (GMT-02:00) Mid-Atlantic - Old
                                </option>
                                <option value="Azores Standard Time">
                                    (GMT-01:00) Azores
                                </option>
                                <option value="Cape Verde Standard Time">
                                    (GMT-01:00) Cabo Verde Is.
                                </option>
                                <option value="UTC">
                                    (GMT) Coordinated Universal Time
                                </option>
                                <option value="GMT Standard Time">
                                    (GMT+00:00) Dublin, Edinburgh, Lisbon, London
                                </option>
                                <option value="Greenwich Standard Time">
                                    (GMT+00:00) Monrovia, Reykjavik
                                </option>
                                <option value="Sao Tome Standard Time">
                                    (GMT+00:00) Sao Tome
                                </option>
                                <option value="Morocco Standard Time">
                                    (GMT+01:00) Casablanca
                                </option>
                                <option value="W. Europe Standard Time">
                                    (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
                                </option>
                                <option value="Central Europe Standard Time">
                                    (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague
                                </option>
                                <option value="Romance Standard Time">
                                    (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
                                </option>
                                <option value="Central European Standard Time">
                                    (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
                                </option>
                                <option value="W. Central Africa Standard Time">
                                    (GMT+01:00) West Central Africa
                                </option>
                                <option value="Jordan Standard Time">
                                    (GMT+02:00) Amman
                                </option>
                                <option value="GTB Standard Time">
                                    (GMT+02:00) Athens, Bucharest
                                </option>
                                <option value="Middle East Standard Time">
                                    (GMT+02:00) Beirut
                                </option>
                                <option value="Egypt Standard Time">
                                    (GMT+02:00) Cairo
                                </option>
                                <option value="E. Europe Standard Time">
                                    (GMT+02:00) Chisinau
                                </option>
                                <option value="Syria Standard Time">
                                    (GMT+02:00) Damascus
                                </option>
                                <option value="West Bank Standard Time">
                                    (GMT+02:00) Gaza, Hebron
                                </option>
                                <option value="South Africa Standard Time">
                                    (GMT+02:00) Harare, Pretoria
                                </option>
                                <option value="FLE Standard Time">
                                    (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius
                                </option>
                                <option value="Israel Standard Time">
                                    (GMT+02:00) Jerusalem
                                </option>
                                <option value="South Sudan Standard Time">
                                    (GMT+02:00) Juba
                                </option>
                                <option value="Kaliningrad Standard Time">
                                    (GMT+02:00) Kaliningrad
                                </option>
                                <option value="Sudan Standard Time">
                                    (GMT+02:00) Khartoum
                                </option>
                                <option value="Libya Standard Time">
                                    (GMT+02:00) Tripoli
                                </option>
                                <option value="Namibia Standard Time">
                                    (GMT+02:00) Windhoek
                                </option>
                                <option value="Arabic Standard Time">
                                    (GMT+03:00) Baghdad
                                </option>
                                <option value="Turkey Standard Time">
                                    (GMT+03:00) Istanbul
                                </option>
                                <option value="Arab Standard Time">
                                    (GMT+03:00) Kuwait, Riyadh
                                </option>
                                <option value="Belarus Standard Time">
                                    (GMT+03:00) Minsk
                                </option>
                                <option value="Russian Standard Time">
                                    (GMT+03:00) Moscow, St. Petersburg
                                </option>
                                <option value="E. Africa Standard Time">
                                    (GMT+03:00) Nairobi
                                </option>
                                <option value="Volgograd Standard Time">
                                    (GMT+03:00) Volgograd
                                </option>
                                <option value="Iran Standard Time">
                                    (GMT+03:30) Tehran
                                </option>
                                <option value="Arabian Standard Time">
                                    (GMT+04:00) Abu Dhabi, Muscat
                                </option>
                                <option value="Astrakhan Standard Time">
                                    (GMT+04:00) Astrakhan, Ulyanovsk
                                </option>
                                <option value="Azerbaijan Standard Time">
                                    (GMT+04:00) Baku
                                </option>
                                <option value="Russia Time Zone 3">
                                    (GMT+04:00) Izhevsk, Samara
                                </option>
                                <option value="Mauritius Standard Time">
                                    (GMT+04:00) Port Louis
                                </option>
                                <option value="Saratov Standard Time">
                                    (GMT+04:00) Saratov
                                </option>
                                <option value="Georgian Standard Time">
                                    (GMT+04:00) Tbilisi
                                </option>
                                <option value="Caucasus Standard Time">
                                    (GMT+04:00) Yerevan
                                </option>
                                <option value="Afghanistan Standard Time">
                                    (GMT+04:30) Kabul
                                </option>
                                <option value="West Asia Standard Time">
                                    (GMT+05:00) Ashgabat, Tashkent
                                </option>
                                <option value="Ekaterinburg Standard Time">
                                    (GMT+05:00) Ekaterinburg
                                </option>
                                <option value="Pakistan Standard Time">
                                    (GMT+05:00) Islamabad, Karachi
                                </option>
                                <option value="Qyzylorda Standard Time">
                                    (GMT+05:00) Qyzylorda
                                </option>
                                <option value="India Standard Time" selected="">
                                    (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
                                </option>
                                <option value="Sri Lanka Standard Time">
                                    (GMT+05:30) Sri Jayawardenepura
                                </option>
                                <option value="Nepal Standard Time">
                                    (GMT+05:45) Kathmandu
                                </option>
                                <option value="Central Asia Standard Time">
                                    (GMT+06:00) Astana
                                </option>
                                <option value="Bangladesh Standard Time">
                                    (GMT+06:00) Dhaka
                                </option>
                                <option value="Omsk Standard Time">
                                    (GMT+06:00) Omsk
                                </option>
                                <option value="Myanmar Standard Time">
                                    (GMT+06:30) Yangon (Rangoon)
                                </option>
                                <option value="SE Asia Standard Time">
                                    (GMT+07:00) Bangkok, Hanoi, Jakarta
                                </option>
                                <option value="Altai Standard Time">
                                    (GMT+07:00) Barnaul, Gorno-Altaysk
                                </option>
                                <option value="W. Mongolia Standard Time">
                                    (GMT+07:00) Hovd
                                </option>
                                <option value="North Asia Standard Time">
                                    (GMT+07:00) Krasnoyarsk
                                </option>
                                <option value="N. Central Asia Standard Time">
                                    (GMT+07:00) Novosibirsk
                                </option>
                                <option value="Tomsk Standard Time">
                                    (GMT+07:00) Tomsk
                                </option>
                                <option value="China Standard Time">
                                    (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi
                                </option>
                                <option value="North Asia East Standard Time">
                                    (GMT+08:00) Irkutsk
                                </option>
                                <option value="Singapore Standard Time">
                                    (GMT+08:00) Kuala Lumpur, Singapore
                                </option>
                                <option value="W. Australia Standard Time">
                                    (GMT+08:00) Perth
                                </option>
                                <option value="Taipei Standard Time">
                                    (GMT+08:00) Taipei
                                </option>
                                <option value="Ulaanbaatar Standard Time">
                                    (GMT+08:00) Ulaanbaatar
                                </option>
                                <option value="Aus Central W. Standard Time">
                                    (GMT+08:45) Eucla
                                </option>
                                <option value="Transbaikal Standard Time">
                                    (GMT+09:00) Chita
                                </option>
                                <option value="Tokyo Standard Time">
                                    (GMT+09:00) Osaka, Sapporo, Tokyo
                                </option>
                                <option value="North Korea Standard Time">
                                    (GMT+09:00) Pyongyang
                                </option>
                                <option value="Korea Standard Time">
                                    (GMT+09:00) Seoul
                                </option>
                                <option value="Yakutsk Standard Time">
                                    (GMT+09:00) Yakutsk
                                </option>
                                <option value="Cen. Australia Standard Time">
                                    (GMT+09:30) Adelaide
                                </option>
                                <option value="AUS Central Standard Time">
                                    (GMT+09:30) Darwin
                                </option>
                                <option value="E. Australia Standard Time">
                                    (GMT+10:00) Brisbane
                                </option>
                                <option value="AUS Eastern Standard Time">
                                    (GMT+10:00) Canberra, Melbourne, Sydney
                                </option>
                                <option value="West Pacific Standard Time">
                                    (GMT+10:00) Guam, Port Moresby
                                </option>
                                <option value="Tasmania Standard Time">
                                    (GMT+10:00) Hobart
                                </option>
                                <option value="Vladivostok Standard Time">
                                    (GMT+10:00) Vladivostok
                                </option>
                                <option value="Lord Howe Standard Time">
                                    (GMT+10:30) Lord Howe Island
                                </option>
                                <option value="Bougainville Standard Time">
                                    (GMT+11:00) Bougainville Island
                                </option>
                                <option value="Russia Time Zone 10">
                                    (GMT+11:00) Chokurdakh
                                </option>
                                <option value="Magadan Standard Time">
                                    (GMT+11:00) Magadan
                                </option>
                                <option value="Norfolk Standard Time">
                                    (GMT+11:00) Norfolk Island
                                </option>
                                <option value="Sakhalin Standard Time">
                                    (GMT+11:00) Sakhalin
                                </option>
                                <option value="Central Pacific Standard Time">
                                    (GMT+11:00) Solomon Is., New Caledonia
                                </option>
                                <option value="Russia Time Zone 11">
                                    (GMT+12:00) Anadyr, Petropavlovsk-Kamchatsky
                                </option>
                                <option value="New Zealand Standard Time">
                                    (GMT+12:00) Auckland, Wellington
                                </option>
                                <option value="UTC+12">
                                    (GMT+12:00) Coordinated Universal Time+12
                                </option>
                                <option value="Fiji Standard Time">
                                    (GMT+12:00) Fiji
                                </option>
                                <option value="Kamchatka Standard Time">
                                    (GMT+12:00) Petropavlovsk-Kamchatsky - Old
                                </option>
                                <option value="Chatham Islands Standard Time">
                                    (GMT+12:45) Chatham Islands
                                </option>
                                <option value="UTC+13">
                                    (GMT+13:00) Coordinated Universal Time+13
                                </option>
                                <option value="Tonga Standard Time">
                                    (GMT+13:00) Nuku'alofa
                                </option>
                                <option value="Samoa Standard Time">
                                    (GMT+13:00) Samoa
                                </option>
                                <option value="Line Islands Standard Time">
                                    (GMT+14:00) Kiritimati Island
                                </option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-1 mt-3"></div>

                <div class="col-sm-2 my-3 text-center"><strong>Marketing consent</strong></div>
                <div class="col-sm-9 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          I would like to recieve occasional emails from FlexiQuiz containing hints, tips
                          and information
                        </label>
                    </div>
                </div>
                <div class="col-sm-1 my-3"></div>

                <hr style="color:rgb(137, 141, 145);" />

                <div class="col-sm-2 mt-3 text-center"><strong>Plan</strong></div>
                <div class="col-sm-9 mt-3">
                    <span style="color:rgb(30, 136, 212);">Free</span>- Build up to 10 quizess with 10 questions and 20 responses per month.
                    <br/> Upgrade for unlimited quizess, more responses and a greater choice of features.
                </div>
                <div class="col-sm-1 mt-3"></div>

                <div class="col-sm-2 mt-3 mb-5 "></div>
                <div class="col-sm-9 mt-3 mb-5">
                    <button type="button" class="btn btn-primary">Upgrade now</button>
                    <button type="button" class="btn btn-warning text-light">Delete account</button>
                </div>
                <div class="col-sm-1 mt-3 mb-5"></div>

        </form>
        </div>
    </div>
</body>

</html>