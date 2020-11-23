<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Kalkulator IP</title>
    <link href="https://fonts.googleapis.com/css?family=Jura&amp;subset=latin-ext" rel="stylesheet">
    <style>
        #s{width:900px;margin:0 auto;}
        body,h1{background: #000;margin:0;padding:0;}
        body{background: #000 url(Ethernet.jpg) no-repeat;background-size:cover;}
        body *{font-family:Jura,sans-serif;font-size:16px/1.5em;color:#4ecc29;}
        td,th{border-bottom:solid 1px #98fd47;}
        td{font-size:1.3em;padding:5px 10px;font-weight:bold;text-shadow:0 0 5px #666;}
        th{color:#555;}
        tr td:nth-child(2){color:#f3e029;}
        select,option,input{color: #98fd47;font-size:1.3em;padding:5px;background: #000;margin-bottom:5px;}
        legend{display:block;float:left;width:140px;text-align:right;margin-right:5px;padding-top:5px;}
        ul,li{margin:0;padding:0;list-style-type:none;}
        form{margin-bottom:50px;}
        table{margin-left: 30px;}
        header{margin-bottom: 30px;border-bottom:solid 1px #98fd47;padding-left:30px;}
        form p{font-size:1.4em;padding-left:30px;color: #fc735f;}
        footer p{padding-left:30px;margin-top:40px;border-top: solid 1px #98fd47;padding-top:5px;}
        footer p a{font-size:1.4em;text-decoration: none;}
    </style>
</head>
<body>
<div id="s">
<header>
    <h1>Kalkulator IP</h1>
</header>
<form action="./IP.php" method="post">
<ul>
    <li><legend>Adres IP: </legend><input type="text" name="ip" placeholder="np. 192.168.1.1" value="192.168.5.8"></li>
    <li>
        <legend>Maska: </legend>
<select name="msk">
  )<option value="0">/0 (0.0.0.0)</option><option value="1">/1 (128.0.0.0)</option><option value="2">/2 (192.0.0.0)</option><option value="3">/3 (224.0.0.0)</option><option value="4">/4 (240.0.0.0)</option><option value="5">/5 (248.0.0.0)</option><option value="6">/6 (252.0.0.0)</option><option value="7">/7 (254.0.0.0)</option><option value="8">/8 (255.0.0.0)</option><option value="9">/9 (255.128.0.0)</option><option value="10">/10 (255.192.0.0)</option><option value="11">/11 (255.224.0.0)</option><option value="12">/12 (255.240.0.0)</option><option value="13">/13 (255.248.0.0)</option><option value="14">/14 (255.252.0.0)</option><option value="15">/15 (255.254.0.0)</option><option value="16">/16 (255.255.0.0)</option><option value="17">/17 (255.255.128.0)</option><option value="18">/18 (255.255.192.0)</option><option value="19">/19 (255.255.224.0)</option><option value="20">/20 (255.255.240.0)</option><option value="21">/21 (255.255.248.0)</option><option value="22">/22 (255.255.252.0)</option><option value="23">/23 (255.255.254.0)</option><option value="24">/24 (255.255.255.0)</option><option value="25">/25 (255.255.255.128)</option><option value="26">/26 (255.255.255.192)</option><option value="27">/27 (255.255.255.224)</option><option value="28">/28 (255.255.255.240)</option><option value="29" selected="">/29 (255.255.255.248)</option><option value="30">/30 (255.255.255.252)</option><option value="31">/31 (255.255.255.254)</option><option value="32">/32 (255.255.255.255  </option></select>
    </li>
    <li><legend>&nbsp;</legend>
    <input type="submit"></li>
</ul>


</form>
<table><tbody><tr>
            <th>&nbsp;</th>
            <th>dziesiętnie</th>
            <th>binarnie</th>
        </tr><tr>
                                            <td>adres IP</td>
                                            <td>192.168.5.8</td>
                                            <td>11000000.10101000.00000101.00001 000</td>
                                            </tr><tr>
                                            <td>maska</td>
                                            <td>255.255.255.248 = 29</td>
                                            <td>11111111.11111111.11111111.11111 000</td>
                                            </tr><tr>
                                            <td>adres sieci</td>
                                            <td>192.168.5.8/29</td>
                                            <td>11000000.10101000.00000101.00001 000</td>
                                            </tr><tr>
                                            <td>broadcast</td>
                                            <td>192.168.5.15</td>
                                            <td>11000000.10101000.00000101.00001 111</td>
                                            </tr><tr>
                                            <td>host min</td>
                                            <td>192.168.5.9</td>
                                            <td>11000000.10101000.00000101.00001 001</td>
                                            </tr><tr>
                                            <td>host max</td>
                                            <td>192.168.5.14</td>
                                            <td>11000000.10101000.00000101.00001 110</td>
                                            </tr><tr>
                                            <td>hostów w sieci</td>
                                            <td>6</td>
                                            <td>stara klasa  C, Private Internet</td>
                                            </tr></tbody></table><footer>
    <p><a href="/">made by Mikolaj Wegrzyn </a></p>
</footer>
</div>
<style>
    @-webkit-keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

td {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 1s;
}
</style>


</body></html>
