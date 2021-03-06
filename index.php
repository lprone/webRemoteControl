﻿<html>
<head>
    <title>Remote Control</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png" />

    <script type="text/javascript" src="llqrcode.js"></script>
    <script type="text/javascript" src="webqr.js"></script>

</head>
<body>
    <div id="main">
        <div id="mainbody">
            <table class="tsel" border="0" width="100%">
                <tr>
                    <td valign="top" align="center" width="50%">
                        <table class="tsel" border="0">
                            <tr>
                                <td><button id="webcamimg" onclick="setwebcam()" align="left">LIMPIAR</button></td>
                                <td><button id="qrimg" onclick="setimg()" align="right">SUBIR QR</button></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div id="outdiv">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <div id="result"></div>
                    </td>
                </tr>
            </table>
        </div>&nbsp;
    </div>
    <canvas id="qr-canvas" width="800" height="600"></canvas>
    <script type="text/javascript">load();</script>
</body>