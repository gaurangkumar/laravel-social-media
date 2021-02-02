<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Diwali wish page by Agwis.com">
    <meta name="author" content="agwis.com">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
	<title>Diwali Countdown Started</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <style type="text/css">
    @font-face {
        font-family: myfont;
        src: url(myfont.TTF);
    }
    body {
        background: #000;
        margin: 0;
    }
    #canvas {
        cursor: crosshair;
        display: block;
    }
    </style>
</head>
<canvas id="canvas">Canvas is not supported in your browser.</canvas>
<canvas id="canvas">Canvas is not supported in your browser.</canvas>
<style type="text/css" src="style.css"></style>
<script type="text/javascript" src="main.js"></script>
<style id="jsbin-css">
body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
body {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  font-size: 16px;

  ;
  color: #fff;
}
strong {
  font-weight: 700;
  color: #f961af;
}
.container {
  height: 100%;
  width: 100%;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -moz-box-orient: vertical;
  -webkit-box-direction: normal;
  -moz-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -moz-box-pack: center;
}
.container .wrapper {
  width: 100%;
  height: 80%;
  display: inline-block;
  position: relative;
  -moz-perspective: 900px;
  -webkit-perspective: 900px;
  perspective: 900px;
}
.container .wrapper section {
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -moz-transform-origin: 50% 100% 0;
  -webkit-transform-origin: 50% 100% 0;
  transform-origin: 50% 100% 0;
  -moz-transform: rotateX(83deg);
  -ms-transform: rotateX(83deg);
  -webkit-transform: rotateX(83deg);
  transform: rotateX(83deg);
  font-size: 1em;
  width: 100%;
  position: absolute;
  z-index: 3;
  opacity: 0;
  left: 0;
  top: 0;
  text-align: center;
}
.container .wrapper section .transform {
  margin: 0;
  padding-top: 3em;
  display: inline-block;
  position: relative;
  width: 80%;
  min-height: 26em;
  background: transparent;
}
.container .wrapper section .transform header {
  position: relative;
}
.container .wrapper input[name="pure-nav"]:checked + section {
  -moz-transform: rotateX(0deg);
  -ms-transform: rotateX(0deg);
  -webkit-transform: rotateX(0deg);
  transform: rotateX(0deg);
  z-index: 6;
  opacity: 1;
}
@media (max-width: 570px) {
  .container .wrapper {
    position: absolute;
    height: auto;
    top: 2em;
  }
  .container .wrapper section {
    font-size: 0.8em;
  }

}

input[name="switch"],
input[name="pure-nav"] {
  display: none;
}

.navigation {
  width: 100%;
  position: fixed;
  bottom: 0;
  left: 0;
  background: #000;
  color: #fff;
}
.navigation .start {
  cursor: pointer;
  order: -2;
  -moz-order: -2;
  -webkit-order: -2;
  padding: 1.95em 1.2em;
}
@media (max-width: 570px) {
  .navigation .start {
    position: absolute;
    z-index: 10;
    right: 3.4em;
    top: 0;
  }
}
.navigation .start:focus .icon {
  color: #fff;
}
.navigation nav {
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  justify-content: center;
  -moz-perspective: 900px;
  -webkit-perspective: 900px;
  perspective: 900px;
}
.navigation nav .switch {
  order: -1;
  -moz-order: -1;
  -webkit-order: -1;
}
.navigation nav .switch h1 {
  padding: 1.95em 1.2em 1.95em 0;
  display: inline-block;
  text-align: left;
}
.navigation nav ul {
  flex-grow: 2;
  -webkit-flex-grow: 2;
  text-align: right;
  display: block;
}
.navigation nav ul li {
  display: inline-block;
}
.navigation nav ul li label {
  cursor: pointer;
  color: #fff;
  display: inline-block;
  padding: 1.9em 1em;
  position: relative;
}
.navigation nav ul li label .icon {
  color: #f961af;
  display: inline-block;
  margin: -0.2em 0.6em 0 0;
}
.navigation nav ul li:focus {
  outline: 0;
  background-color: transparent;
}
.navigation nav ul li:focus label {
  color: #f961af;
}
.navigation nav ul li:focus label .icon {
  color: #fff;
}
@media (max-width: 570px) {
  .navigation nav .switch {
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    display: block;
    width: 100%;
    z-index: 1;
  }
  .navigation nav .switch h1 {
    display: block;
    position: relative;
    z-index: 1;
    padding: 1.95em 1.2em;
    background: #f5f5f5;
  }
  .navigation nav .switch h1:after {
    font-family: 'FontAwesome', sans-serif;
    content: "\f0c9";
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -moz-transform-origin: 50% 50% 0;
    -webkit-transform-origin: 50% 50% 0;
    transform-origin: 50% 50% 0;
    -moz-transform: rotateZ(0deg);
    -ms-transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    transform: rotateZ(0deg);
    position: absolute;
    right: 1.2em;
    top: 1.95em;
  }
  .navigation nav ul {
    text-align: center;
    position: absolute;
    z-index: 0;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    left: 0;
    top: -4.75em;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -moz-transform-origin: 100% 50% 0;
    -webkit-transform-origin: 100% 50% 0;
    transform-origin: 100% 50% 0;
    -moz-transform: translateY(200%);
    -ms-transform: translateY(200%);
    -webkit-transform: translateY(200%);
    transform: translateY(200%);
  }
  .navigation nav ul li .icon {
    display: block;
  }
  .navigation nav input[name="switch"]:checked ~ label h1:after {
    color: #f961af;
    -moz-transform: rotateZ(180deg);
    -ms-transform: rotateZ(180deg);
    -webkit-transform: rotateZ(180deg);
    transform: rotateZ(180deg);
  }
 
}
body {
  background: #000;
  height: 100%;
  width: 100%;
  position: relative;
  margin: 0;
  padding: 0;
}

.star1, .star2, .star3 {
  background: #fff;
  position: absolute;
  bottom: 0;
  left: 0;
}
.hello {
	position: sticky;
	margin-top: -800px;
	font-family: myfont;

}
#para{
	font-size: 35px;
	font-family: myfont;
}

.star1 {
  width: 1px;
  height: 1px;
  box-shadow: 798px -782px #fff , -23px 1524px #fff , 1321px -700px #fff , 941px 1705px #fff , -1290px 1445px #fff , -1119px 1395px #fff , -886px -1512px #fff , 846px 1357px #fff , 898px -1757px #fff , -1434px -1016px #fff , -1167px 65px #fff , -411px 854px #fff , -1245px 1639px #fff , 1837px 762px #fff , -1246px -1453px #fff , 123px 1072px #fff , -1068px -1935px #fff , 399px 1293px #fff , 969px -1833px #fff , 1482px 1720px #fff , 347px 363px #fff , -1238px 1512px #fff , 686px -1861px #fff , -940px -1819px #fff , 232px -124px #fff , -202px 580px #fff , -52px -390px #fff , 80px 1989px #fff , -193px 1430px #fff , 403px 1996px #fff , -1844px -686px #fff , -372px 1116px #fff , 24px 1148px #fff , -89px 1891px #fff , 163px -690px #fff , -864px -252px #fff , -1461px 442px #fff , 980px 99px #fff , 1851px -1362px #fff , -1010px -188px #fff , -562px 1864px #fff , 1413px 1233px #fff , 1254px -336px #fff , -109px -391px #fff , 1108px 1909px #fff , 449px -1487px #fff , -738px 427px #fff , -912px -1812px #fff , 722px 556px #fff , 692px -37px #fff , -794px 1717px #fff , -549px 1374px #fff , 1674px 1632px #fff , 774px 1399px #fff , 795px -1623px #fff , -39px 603px #fff , 142px 734px #fff , 1542px -93px #fff , 1724px 44px #fff , 357px 654px #fff , -466px -460px #fff , 1839px 1097px #fff , -1693px 931px #fff , -1044px 1816px #fff , -1254px 237px #fff , 1497px 866px #fff , 1587px -1674px #fff , -1023px -1921px #fff , 1951px -1892px #fff , 820px 179px #fff , -402px -1668px #fff , -320px -1318px #fff , 963px 1118px #fff , 421px -450px #fff , -79px 909px #fff , -530px 1993px #fff , 1396px 1682px #fff , 151px 740px #fff , 782px 1387px #fff , -905px -49px #fff , 274px -1973px #fff , 87px -1081px #fff , -1391px -645px #fff , -1218px -708px #fff , 332px -737px #fff , -1320px -1663px #fff , -1106px -1830px #fff , 1389px -1083px #fff , -645px -1185px #fff , -1251px 1407px #fff , 1322px -800px #fff , -1217px 404px #fff , -1027px 1060px #fff , 1829px 824px #fff , 537px 851px #fff , -63px -1259px #fff , -1555px -996px #fff , 1184px 469px #fff , -479px -1480px #fff , 612px -1918px #fff , 1779px 1953px #fff , 1153px 1740px #fff , 242px 1153px #fff , 507px -808px #fff , -5px -704px #fff , 810px 851px #fff , 1335px 914px #fff , 1297px -1613px #fff , -206px -298px #fff , 1867px -712px #fff , 1505px 1337px #fff , -865px -548px #fff , -1991px -68px #fff , 760px 498px #fff , 5px -140px #fff , 332px -21px #fff , 1921px -78px #fff , 1669px 682px #fff , -348px 1646px #fff , 1765px -1000px #fff , -322px -1478px #fff , 1051px -240px #fff , 1495px 428px #fff , -1464px 76px #fff , 299px -725px #fff , -1022px 1073px #fff , 633px 99px #fff , 543px -1433px #fff , 1439px -477px #fff , -1087px -1566px #fff , 1614px 813px #fff , -1177px -1634px #fff , 1303px -572px #fff , -75px -1466px #fff , 570px -1064px #fff , 654px -443px #fff , -1615px -1257px #fff , 1831px 1916px #fff , 1093px 1866px #fff , -218px -1409px #fff , 1338px -1732px #fff , 875px 998px #fff , 292px 906px #fff , -796px 466px #fff , -725px -1378px #fff , 1499px 1688px #fff , 1270px 410px #fff , 463px -788px #fff , -763px -1320px #fff , 1006px -1962px #fff , 1472px 1996px #fff , -781px 1826px #fff , 1252px -1952px #fff , 1423px 1180px #fff , 992px -1124px #fff , -1276px -1730px #fff , -1773px -1969px #fff , 322px 1211px #fff , 1200px -1670px #fff , 206px 195px #fff , 1492px -1694px #fff , -1793px 255px #fff , -1613px 1641px #fff , 1974px 296px #fff , 109px 1142px #fff , -1601px -1350px #fff , 1449px -1218px #fff , 1398px 478px #fff , 95px -155px #fff , 227px 1791px #fff , -465px -1412px #fff , 1852px 437px #fff , -1899px 616px #fff , -920px 1756px #fff , 182px 333px #fff , -273px -846px #fff , 481px 1312px #fff , 61px 25px #fff , -668px -1605px #fff , -757px -860px #fff , 1159px 938px #fff , -1105px -96px #fff , 1809px 1660px #fff , 1515px -1145px #fff , -750px -539px #fff , 265px 1848px #fff , -450px -1141px #fff , 1538px 1220px #fff , -1719px -662px #fff , -1506px -1300px #fff , 1880px -483px #fff , -218px 1846px #fff , -527px -33px #fff , -2px 627px #fff , 1031px -89px #fff , -1163px -649px #fff , -1820px -98px #fff , 1168px -1394px #fff , 574px 869px #fff , -37px -651px #fff , -1468px 1453px #fff , 15px -586px #fff , 1459px 342px #fff , -1889px 1240px #fff , -1119px 1812px #fff , 1394px -529px #fff , 961px -428px #fff , 1495px -839px #fff , -329px -835px #fff , -20px 319px #fff , -1682px 1757px #fff , 745px 1342px #fff , 1351px 785px #fff , 344px -103px #fff , -1249px 1855px #fff , 1197px -1758px #fff , -1450px 1290px #fff , -1669px -1504px #fff , -1406px -1284px #fff , 1045px -1420px #fff , -860px 667px #fff , 1703px 460px #fff , -870px -957px #fff , -54px -1985px #fff , -1171px 1544px #fff , -1746px 1983px #fff , -1185px -1874px #fff , 1974px -530px #fff , 207px 1829px #fff , 1246px 207px #fff , -912px 528px #fff , 102px -1958px #fff , -495px 1020px #fff , 896px 1970px #fff , -514px -436px #fff , 679px -1263px #fff , 1476px 125px #fff , -1239px 672px #fff , -1157px -1884px #fff , -758px -1608px #fff , 795px -1383px #fff , -1138px 1839px #fff , 145px 764px #fff , -448px 78px #fff , 1180px 1527px #fff , -300px -1066px #fff , -1248px 498px #fff , 492px -1493px #fff , 1625px 47px #fff , 55px 1387px #fff , 737px 100px #fff , 58px 1482px #fff , -117px 586px #fff , 277px 1921px #fff , 1565px 1674px #fff , 1691px -95px #fff , -1722px 640px #fff , 722px -756px #fff , -1547px -964px #fff , 957px -334px #fff , 1260px -463px #fff , 709px 653px #fff , 374px -1065px #fff , 576px -163px #fff , -1050px -895px #fff , 44px 1254px #fff , -98px 108px #fff , -1621px -1062px #fff , -1839px 1004px #fff , -1216px 917px #fff , 906px -1999px #fff , 1168px 965px #fff , 1132px 679px #fff , -1673px -1267px #fff , 1541px 562px #fff , 1837px -671px #fff , 775px 1395px #fff , 1293px -177px #fff , -693px -1455px #fff , -250px 1318px #fff , -1974px -258px #fff , 1327px 1837px #fff , -1413px -1860px #fff , -1602px 941px #fff , 399px 195px #fff , 760px 960px #fff , 1115px 1252px #fff , -1288px -1883px #fff , 617px -735px #fff , 1738px 184px #fff , -884px 554px #fff , 1614px -145px #fff , -1431px -1817px #fff , 45px 1195px #fff , -1518px -1444px #fff , 1334px -170px #fff , 1071px -1762px #fff , 1393px 1251px #fff , -1096px 1901px #fff , -620px -123px #fff , 226px -488px #fff , -1287px 129px #fff , -1020px 1340px #fff , 1152px -110px #fff , 1820px 1552px #fff , 417px -23px #fff , -212px 825px #fff , -1988px 54px #fff , 913px 1924px #fff , -686px 342px #fff , -763px -6px #fff , 1040px 1542px #fff , -935px -271px #fff , -1128px 644px #fff , 1042px -1920px #fff , 1974px -1778px #fff , -821px -195px #fff , -1353px 471px #fff , -1422px -1091px #fff , 1980px -1142px #fff , 172px 844px #fff , -125px 575px #fff , 349px -367px #fff , 262px -51px #fff , 1972px -1096px #fff , -868px 1515px #fff , 1293px -1667px #fff , -497px -786px #fff , 1887px -33px #fff , 1085px 609px #fff , 1729px -1661px #fff , 367px -901px #fff , 984px -686px #fff , 277px -819px #fff , 866px 1234px #fff , -1903px 1353px #fff , -1647px 1791px #fff , 1655px 1502px #fff , 1098px -1014px #fff , -1059px -387px #fff , 1606px -366px #fff , -1916px 1003px #fff , 1853px -263px #fff , 976px -1806px #fff , -1708px 1663px #fff , -464px -649px #fff , 1825px 1814px #fff , 1497px -1160px #fff , -1274px 749px #fff , -1302px -730px #fff , 626px 205px #fff , 936px 79px #fff , 442px -499px #fff , 977px 259px #fff , 982px 1328px #fff , 436px -1244px #fff , -585px -449px #fff , -1235px -1497px #fff , -341px 583px #fff , -948px 1490px #fff , -1051px -1510px #fff , -222px 1068px #fff , 1980px 215px #fff , -30px -1420px #fff , -771px -1962px #fff , 361px 1429px #fff , -1837px 234px #fff , -554px -418px #fff , -323px -1162px #fff , -1962px 1250px #fff , -956px 1021px #fff , 850px 1689px #fff , -58px 1651px #fff , 169px -253px #fff , -805px -1143px #fff , 1236px -1349px #fff , -491px -1726px #fff , 979px -353px #fff , -1073px -1828px #fff , 1259px 1644px #fff , 1022px -1674px #fff , 1872px 1256px #fff , 1925px -1089px #fff , 25px -1525px #fff , -1324px -84px #fff , -472px -1528px #fff , -1584px -145px #fff , 155px -1691px #fff , 1717px 1561px #fff , 1072px 618px #fff , -373px -1832px #fff , -1041px -645px #fff , 1532px -337px #fff , 1460px 21px #fff , -1355px -1393px #fff , 1719px 1856px #fff , 1843px 356px #fff , -493px -1722px #fff , 502px 1921px #fff , 1096px 1816px #fff , 527px 1349px #fff , 1590px -436px #fff , 730px 1868px #fff , -99px -556px #fff , -1125px -1003px #fff , -1127px -342px #fff , 492px 1610px #fff , 1581px 1330px #fff , -1639px 310px #fff , -1674px -337px #fff , -1299px -1475px #fff , -410px 1661px #fff , 1498px -300px #fff , 782px -1809px #fff , 1175px -696px #fff , 580px 1858px #fff , -1662px -116px #fff , 830px -643px #fff , 1302px -720px #fff , 1077px -1576px #fff , 1564px -13px #fff , -1655px 512px #fff , -182px -1307px #fff , 800px 1508px #fff , -10px -415px #fff , 1600px -1539px #fff , 67px 1740px #fff , -549px 1237px #fff , 945px 271px #fff , -1222px -1694px #fff , -339px -254px #fff , 1389px 777px #fff , -1457px -718px #fff , 1781px 1478px #fff , -1972px 410px #fff , -585px 1408px #fff , -1496px 1588px #fff , -451px -676px #fff , -201px -1697px #fff , -1966px -709px #fff , 131px 487px #fff , 1699px 1826px #fff , 1860px 1344px #fff , 813px -765px #fff , -803px -1257px #fff , 392px -1676px #fff , -1528px -922px #fff , -1215px -1304px #fff , 862px 1771px #fff , -112px 1578px #fff , 1393px 1574px #fff , 657px 267px #fff , 1988px -700px #fff , -37px -762px #fff , -1555px 1409px #fff , -1856px -1523px #fff , 1320px 318px #fff , 984px 526px #fff , -1714px 1648px #fff , -1668px 1598px #fff , 1456px -1146px #fff , -294px -368px #fff , -60px 489px #fff , -1952px 1418px #fff , -814px 1481px #fff , 1324px -847px #fff , 465px 873px #fff , -811px -1339px #fff , 803px 770px #fff , 1188px 663px #fff , 648px -1933px #fff , -333px -538px #fff , 1287px 374px #fff , 1418px 1851px #fff , -52px -1208px #fff , -889px 1557px #fff , 538px -755px #fff , 1981px -1512px #fff , 480px -1625px #fff , 1890px 180px #fff , 602px 1206px #fff , -1602px 683px #fff , -693px 1714px #fff , 1667px 393px #fff , -879px 601px #fff , -410px 702px #fff , 555px 185px #fff , -1669px -1650px #fff , 1084px 1896px #fff , 1123px -405px #fff , -1871px -809px #fff , -1725px 1502px #fff , 114px 1432px #fff , 86px 1394px #fff , -255px 461px #fff , -1719px 1064px #fff , 1670px -960px #fff , -714px 1134px #fff , 1307px 195px #fff , -648px 1960px #fff , -1826px -876px #fff , 746px 278px #fff , 1936px -1069px #fff , 1311px 1358px #fff , -1319px -440px #fff , -90px 228px #fff , 920px 945px #fff , 850px 1931px #fff , 1522px -849px #fff , 1544px -366px #fff , -335px 1311px #fff , -1164px 1847px #fff , -651px 1133px #fff , 1187px 438px #fff , 619px 920px #fff , -1470px -1102px #fff , 595px 1752px #fff , -1684px -1746px #fff , -695px -320px #fff , -262px 808px #fff , -1737px 1774px #fff , -1984px -59px #fff , 81px -1229px #fff , 1269px 762px #fff , 1095px -505px #fff , -976px 638px #fff , -1004px -559px #fff , 570px -755px #fff , 1904px -1029px #fff , -232px 162px #fff , -584px 792px #fff , -1341px 1800px #fff , -499px -1830px #fff , 135px -861px #fff , -750px 1118px #fff , 1852px -1364px #fff , -1893px 1917px #fff , -1908px 1197px #fff , 1213px 417px #fff , -867px -231px #fff , 486px -607px #fff , -654px 409px #fff , -56px -1004px #fff , 764px 156px #fff , 744px 1252px #fff , -332px -1948px #fff , -917px -186px #fff , 1526px -733px #fff , -1749px 308px #fff , -480px -31px #fff , -1875px -1846px #fff , 1313px -1264px #fff , -642px 1214px #fff , -398px -404px #fff , -829px 36px #fff , 542px 1585px #fff , -1728px 1848px #fff , -105px -1882px #fff , -1235px -56px #fff , 811px -735px #fff , -990px -1022px #fff , -316px 1092px #fff , 610px -1424px #fff , 453px 963px #fff , 1225px 703px #fff , -1168px -1368px #fff , 149px 349px #fff , -1535px 458px #fff , -89px 572px #fff , 1982px -1875px #fff , 349px 1641px #fff , -1761px 575px #fff , 164px -674px #fff , 1456px 1911px #fff , -1141px -1107px #fff , 1852px 778px #fff , 1462px 1668px #fff , 1664px -1634px #fff , -1528px -884px #fff , -1365px 1281px #fff , 1437px 1973px #fff , 498px -565px #fff , -1180px -677px #fff , -261px -985px #fff , -937px 1696px #fff , -612px -917px #fff , 1972px -445px #fff , -147px 845px #fff , 1771px -1841px #fff , 1044px -30px #fff , 80px 1250px #fff , -162px -1673px #fff , 1179px -957px #fff , -944px 914px #fff , -295px 901px #fff , 1194px 389px #fff , -711px -533px #fff , -352px 1963px #fff , 705px 971px #fff , -1061px -1370px #fff , 1221px 938px #fff , -1307px -541px #fff , -1210px -1408px #fff , -356px -909px #fff , -979px -815px #fff , 1563px 1366px #fff , -1402px -1374px #fff , 1001px 433px #fff , 97px 686px #fff , 1438px 1310px #fff , -1128px -1246px #fff , 1433px -435px #fff , -214px 1426px #fff , 755px 1568px #fff , 250px -857px #fff , 1251px -1215px #fff , -617px 1205px #fff , 718px -1201px #fff , -409px 813px #fff , 1754px -1402px #fff , -1830px -1074px #fff , 884px 385px #fff , 790px -1875px #fff , -787px -952px #fff , -330px 1824px #fff , 200px 1712px #fff , 1782px -1455px #fff , 822px -190px #fff , -171px -703px #fff , 1147px 1773px #fff , -1185px 74px #fff , -526px -1439px #fff , -386px 418px #fff , 1016px -1906px #fff , 1072px 664px #fff , -722px 894px #fff , 773px 547px #fff , -1072px -346px #fff , -111px -1891px #fff , -401px -933px #fff , 1417px 1695px #fff , -889px -50px #fff , -1360px -140px #fff , -1209px -1824px #fff , -417px -1426px #fff , -1306px 1883px #fff , 755px 1007px #fff , 1473px -452px #fff , -941px -487px #fff , -528px -433px #fff , -849px -1539px #fff , -1196px 1390px #fff , -1534px -1029px #fff , -536px 1985px #fff , 1737px 797px #fff , -1418px -1210px #fff , 442px -1562px #fff , -1176px -1482px #fff , 1329px -195px #fff , -937px 982px #fff , 1597px -1471px #fff , -1375px 948px #fff , 1948px -455px #fff , -1336px 722px #fff , -1789px -384px #fff , -1086px -1830px #fff , 1205px 1955px #fff , -1303px 304px #fff , 1736px 1444px #fff , 373px 796px #fff , -1307px 1245px #fff , -1547px -428px #fff , -182px 1153px #fff , -1952px -1302px #fff , -695px -680px #fff , 143px -1553px #fff , 1849px -215px #fff , -950px -14px #fff , -1302px -718px #fff , 239px 1530px #fff , 608px -1974px #fff , -1796px -1196px #fff , -588px -1408px #fff , 423px -776px #fff , -1653px 1602px #fff , 1973px -1650px #fff , 226px 1646px #fff , 17px -21px #fff , -1845px -890px #fff , 1823px 1572px #fff , -887px -945px #fff , -1497px 1995px #fff , 542px -1929px #fff , -529px -1146px #fff , -573px -1369px #fff , -540px 391px #fff , -536px 1519px #fff , 1507px -1208px #fff , -1011px -1813px #fff , 25px 521px #fff , 1580px -781px #fff , -906px 1305px #fff , 920px 1064px #fff , 359px -948px #fff , 1333px -681px #fff , -1320px -273px #fff , -710px 302px #fff , 323px 655px #fff , 1976px 588px #fff , -504px 285px #fff , -388px -504px #fff , 845px -854px #fff , 427px -1492px #fff , 323px 277px #fff , 967px 1724px #fff , -1291px 942px #fff , 823px -1647px #fff , -1612px -271px #fff , -1762px 1637px #fff , 208px 1795px #fff , 1731px -891px #fff , -1779px -969px #fff , 107px -1434px #fff , -1516px 1736px #fff , 1619px 525px #fff , 1605px -1659px #fff , 984px 1162px #fff , 1420px -91px #fff , -1282px 1643px #fff , -849px -1550px #fff , -879px -397px #fff , 405px 655px #fff , -987px -1770px #fff , -1438px -1973px #fff , -842px -361px #fff , -1042px 427px #fff , 1869px 966px #fff , -104px -452px #fff , -1945px -1990px #fff , 191px 6px #fff , -1237px -479px #fff , 1552px -35px #fff , -869px 1507px #fff , -1735px 553px #fff , 1938px 883px #fff , 873px -1878px #fff , 194px -1081px #fff , 1763px 607px #fff , -1504px -1468px #fff , 1019px 1252px #fff , 1183px -1687px #fff , 811px 1224px #fff , -955px -507px #fff , -1311px -1765px #fff , 433px 512px #fff , -1559px -396px #fff , 1237px 865px #fff , -124px -513px #fff , -888px -1815px #fff , -1156px 735px #fff , -1714px -1263px #fff , 121px -223px #fff , -757px -1554px #fff , 610px 1992px #fff , -1385px -141px #fff , 1674px 1950px #fff , 326px 1448px #fff , -1106px -1631px #fff , 1817px 899px #fff , 869px 147px #fff , 1346px 399px #fff , 368px 1605px #fff , -1693px -1914px #fff , 617px 1772px #fff , 1748px -12px #fff , 984px 1681px #fff , 1375px -1225px #fff , 1661px 1392px #fff , 1123px -55px #fff , -535px 1603px #fff , 1519px 376px #fff , 1526px 1906px #fff , 187px 790px #fff , -1391px -1937px #fff , 1606px 193px #fff , -1259px 885px #fff , 1839px 1321px #fff , 1512px -1825px #fff , -1856px -1800px #fff , 893px 469px #fff , -1834px -1442px #fff , -804px 1602px #fff , 102px 1221px #fff , 1064px -478px #fff , 1608px -1624px #fff , -1102px -371px #fff , 27px 913px #fff , 549px -629px #fff , -1788px -1350px #fff , -1699px -295px #fff , -875px -376px #fff , -619px -1254px #fff , 1085px -403px #fff , 1280px 888px #fff , 1542px -870px #fff , -99px -254px #fff , 1228px -1149px #fff , -694px -1655px #fff , 1765px -1534px #fff , 390px -1622px #fff , -1439px 1534px #fff , -107px -1206px #fff , 606px 276px #fff , -940px 1311px #fff , -908px 1914px #fff , -1562px -612px #fff , -532px -1806px #fff , -613px 11px #fff , 403px 331px #fff , -1907px -820px #fff , -630px 126px #fff , 1275px -1606px #fff , -1496px -615px #fff , 1529px -1294px #fff , 260px 1456px #fff , 478px -1136px #fff , -918px 445px #fff , 1680px 1130px #fff , 867px 1571px #fff , 126px 1103px #fff , 1895px 230px #fff , -1532px 517px #fff , -1983px -1782px #fff , 1789px -1782px #fff , -1764px -1269px #fff , -1743px -1194px #fff , 537px -137px #fff , -1384px -1033px #fff , -761px -1895px #fff , 43px -198px #fff , -1704px -1257px #fff , -480px 1948px #fff , -1493px 1556px #fff , 832px 352px #fff , -1926px -923px #fff , -727px -1827px #fff , -1151px -1516px #fff , 1466px -568px #fff , 263px -1064px #fff , 1173px 221px #fff , -707px 447px #fff , -290px 1328px #fff , 827px -1873px #fff , 1413px 1750px #fff , 1315px 1245px #fff , -700px 1656px #fff , 1408px 1120px #fff , -1570px -866px #fff , 1270px 1511px #fff , -85px 130px #fff , -601px 272px #fff , 1009px -78px #fff , -497px 1726px #fff , 891px 1008px #fff , -212px 399px #fff , 1909px -1886px #fff , -839px 433px #fff , 1677px 1603px #fff , -1033px -1419px #fff , -1118px -1487px #fff , -1253px -840px #fff , 1779px 245px #fff , 1681px -1929px #fff , -207px -1151px #fff , -1274px 1423px #fff , 1786px -1503px #fff , -617px -56px #fff , -453px 942px #fff , -227px 1066px #fff , 868px 1544px #fff , 242px -145px #fff , 1444px 773px #fff , 1476px -1495px #fff , -1053px 0px #fff , -428px -1408px #fff , 790px -1980px #fff , 1522px -1833px #fff , 292px 1468px #fff , 477px 461px #fff , -1855px -13px #fff , -479px 1374px #fff , 1421px 1639px #fff , 442px 1039px #fff , -948px 714px #fff , -435px 1621px #fff , 1977px -1349px #fff , 1574px -1813px #fff , 1874px -740px #fff , -396px 1643px #fff , 1482px 1381px #fff , -466px 861px #fff , -725px -820px #fff , -584px -310px #fff , 702px -1857px #fff , -303px -1153px #fff , 1274px -1145px #fff , 1133px -1931px #fff , 408px 670px #fff , 462px 1045px #fff , -1858px -7px #fff , 1674px 1646px #fff , 1440px 1528px #fff , 725px 49px #fff , 1247px -34px #fff , -1622px -1438px #fff , 1693px 632px #fff , -1132px 1447px #fff , -322px -89px #fff , 167px 806px #fff , 707px 98px #fff , 221px -1642px #fff , 1421px 726px #fff , 1380px -727px #fff , -3px -611px #fff , 1005px -846px #fff , 1854px -1641px #fff , 1590px -1482px #fff , 599px 1024px #fff , 266px 662px #fff , 426px -596px #fff , -853px 1499px #fff , 1601px -315px #fff , -1376px -1346px #fff , -867px -320px #fff , 1060px 1337px #fff , -1311px 1787px #fff , -1336px 434px #fff , -976px 270px #fff , 1351px -1759px #fff , -560px 500px #fff , -836px -183px #fff , -896px 43px #fff , 1736px 1027px #fff , -629px -691px #fff , -321px -389px #fff , 460px 1399px #fff , -978px -200px #fff , 1822px -1013px #fff , 749px 1853px #fff , -1330px -585px #fff , 84px 1360px #fff , 1098px 1954px #fff , 1323px -1074px #fff , 184px -1161px #fff , -1054px 849px #fff , 311px -1714px #fff , -417px -1069px #fff , 1234px -758px #fff , 328px -1967px #fff , 617px 774px #fff , -997px -178px #fff , -1012px -1049px #fff , 1501px 1303px #fff , -1081px -1142px #fff , 351px -1479px #fff , -469px -224px #fff , 1296px -1793px #fff , 1735px 181px #fff , -1805px 362px #fff , 1401px 1820px #fff , -134px 2000px #fff , -1373px 941px #fff , -986px -1209px #fff , -1506px 1698px #fff , -1832px -1219px #fff , 699px 508px #fff , 1330px 70px #fff , 819px 96px #fff , 455px -307px #fff , 128px -1955px #fff , -395px 390px #fff , -151px -1322px #fff , -617px 374px #fff , 3px 14px #fff , 1824px 1244px #fff , 793px -765px #fff , 742px 1982px #fff , 1157px -224px #fff , 560px -339px #fff , -1411px 1907px #fff , -868px 1811px #fff , 13px -360px #fff , -273px 1187px #fff , -690px 1135px #fff , -362px 1617px #fff , -1253px -463px #fff , 404px -532px #fff , 230px -1385px #fff , -1538px -1484px #fff , -94px 1865px #fff , 1469px 958px #fff , 1190px 1440px #fff , -1282px 851px #fff , 127px 1625px #fff , -69px 780px #fff , -1598px 1563px #fff , 259px -1841px #fff , -392px -1981px #fff , 630px -1973px #fff , -1126px 1983px #fff , -1191px 804px #fff , -1342px 1149px #fff , -1885px -4px #fff , -949px -1472px #fff , 1278px 1910px #fff , 1886px -188px #fff , 301px -1472px #fff , -1560px 829px #fff , -154px -1858px #fff , -1760px 1807px #fff , -748px -951px #fff , -1203px -157px #fff , 337px 202px #fff , 476px 825px #fff , 1472px -249px #fff , 239px -800px #fff , 559px 28px #fff , 1351px -1243px #fff , -947px -1942px #fff , 1762px -1375px #fff , -1101px 1286px #fff , -53px 1758px #fff , 1046px 1355px #fff , -490px 487px #fff , 1335px -1546px #fff , 117px 1910px #fff , 461px 1642px #fff , 218px 90px #fff , 1440px 1161px #fff , 1247px 1137px #fff , -9px 992px #fff , -1519px 77px #fff , -1667px 913px #fff , 19px -1885px #fff , -1178px 1468px #fff , -423px -381px #fff , 619px -1307px #fff , -755px -380px #fff , 1590px 869px #fff , 951px 1416px #fff , 259px 1598px #fff , -1149px -1887px #fff , -1627px -1262px #fff , -219px 1292px #fff , 1651px -1176px #fff , -1708px 1101px #fff , -458px 1387px #fff , 817px -1036px #fff , -600px 1451px #fff , 7px -883px #fff , 1687px 1515px #fff , -582px -899px #fff , 723px -824px #fff , 1468px 1845px #fff , -1490px -887px #fff , -1333px 1389px #fff , -916px -960px #fff , -9px -1061px #fff , -1188px -741px #fff , 1781px 1951px #fff , -37px -1188px #fff , -1639px -313px #fff , 1242px 1657px #fff , 599px 138px #fff , 1616px 1011px #fff , 1616px 1442px #fff , -845px -1775px #fff , 217px 1782px #fff , -1377px -1040px #fff , 572px 550px #fff , 1228px 742px #fff , -1144px -959px #fff , -140px -1961px #fff , 1945px -1932px #fff , -1421px -1420px #fff , -393px 301px #fff , -1114px -834px #fff , 1014px -1879px #fff , -649px 576px #fff , -1473px -1062px #fff , -1010px 912px #fff , 1885px 1333px #fff , -1321px -632px #fff , -1002px -526px #fff , 1635px -423px #fff , 1739px 1438px #fff , 703px -834px #fff , -880px -1540px #fff , -293px -1104px #fff , -1516px 740px #fff , 1256px -318px #fff , 395px 1033px #fff , 1492px 316px #fff , -63px -1311px #fff , 332px -1856px #fff , -713px 1301px #fff , -962px -794px #fff , 30px -373px #fff , 458px 1454px #fff , -1483px 1022px #fff , -1726px 419px #fff , 883px 1148px #fff , 1163px -619px #fff , -372px -1573px #fff , -761px 1304px #fff , 711px 127px #fff , -1146px 1330px #fff , 1445px 126px #fff , 1332px 965px #fff , 59px -1738px #fff , 929px -1553px #fff , -983px -817px #fff , -70px 475px #fff , 1674px 1005px #fff , 1098px 975px #fff , -1763px 14px #fff , -504px 1270px #fff , -1383px 584px #fff , -1669px 438px #fff , 1607px 439px #fff , 1434px 602px #fff , -1121px 27px #fff , -499px -942px #fff , -1545px 1723px #fff , 1794px 14px #fff , 1341px 944px #fff , -1472px -254px #fff , -1174px -1641px #fff , -1536px -1782px #fff , 990px -1268px #fff , -391px 1948px #fff , 79px 1522px #fff , -510px 702px #fff , 1578px -1140px #fff , -31px 1475px #fff , -831px 695px #fff , 527px -1426px #fff , -1046px 203px #fff , 1831px -1262px #fff , 391px 1412px #fff , -1706px 1912px #fff , 711px -1055px #fff , -1265px 1071px #fff , 1507px -1872px #fff , -1313px 1701px #fff , 1307px 346px #fff , 504px -942px #fff , 139px 1464px #fff , 1972px 1570px #fff , 1400px -1649px #fff , -1111px 1429px #fff , 1983px -312px #fff , 1733px -732px #fff , -228px -280px #fff , 1175px -954px #fff , -1131px -652px #fff , 987px 1322px #fff , 1820px -1031px #fff , 1108px 1251px #fff , 1280px 1814px #fff , 1644px 674px #fff , 1193px 408px #fff , 832px 1992px #fff , -1621px -5px #fff , 701px -1613px #fff , -1527px -932px #fff , -556px -1805px #fff , -922px -378px #fff , 540px 585px #fff , -913px 91px #fff , 1276px 881px #fff , -1371px 1671px #fff , 1526px -966px #fff , 657px 351px #fff , -344px -1838px #fff , 678px 1702px #fff , -1185px 414px #fff , 1755px -1377px #fff , 92px -1726px #fff , -1006px 1429px #fff , -1117px 1904px #fff , 1899px 427px #fff , -801px -669px #fff , 632px -1267px #fff , 29px 1864px #fff , 1666px -1293px #fff , -1539px -227px #fff , 756px -1845px #fff , 848px 1059px #fff , -1236px -234px #fff , 273px 1353px #fff , -1697px -264px #fff , -1887px 886px #fff , -1506px 1835px #fff , 274px 1708px #fff , -1477px 1144px #fff , -1926px 514px #fff , 1977px -427px #fff , 742px 1679px #fff , -855px -13px #fff , 1286px -1413px #fff , -1934px -1886px #fff , 817px 1838px #fff , 1981px 1614px #fff , -80px -1300px #fff , -1968px 676px #fff , 704px -3px #fff , -362px 764px #fff , 281px 669px #fff , -244px -240px #fff , -406px -517px #fff , -1607px 1813px #fff , 1243px -1221px #fff , -291px -1720px #fff , -1960px -432px #fff , -1093px -1672px #fff , -533px 1081px #fff , -1376px -639px #fff , 1511px -1415px #fff , -1969px 1548px #fff , 274px 1952px #fff , -662px -737px #fff , 424px 545px #fff , -83px -1384px #fff , -1498px 1943px #fff , -732px 1851px #fff , 1340px -899px #fff , 1652px -1223px #fff , -158px 121px #fff , -514px 1475px #fff , -1754px 526px #fff , -1764px -1685px #fff , -1932px -814px #fff , -907px 1985px #fff , 1313px 473px #fff , 1015px 1634px #fff , 1729px -254px #fff , -1088px -1672px #fff , -919px -1995px #fff , 1493px 740px #fff , 1297px -694px #fff , 1446px 43px #fff , -759px 94px #fff , 1954px 770px #fff , -1962px -746px #fff , 38px -1511px #fff , 123px -16px #fff , 422px -300px #fff , -744px -1815px #fff , -861px 421px #fff , -1586px 1552px #fff , -127px 575px #fff , -1863px -72px #fff , 667px -160px #fff , -221px 1692px #fff , -722px 169px #fff , 1078px -1107px #fff , -611px -1423px #fff , 1762px -1385px #fff , -1645px -1810px #fff , 1127px 178px #fff , -1316px 1351px #fff , -1497px -1403px #fff , -649px -562px #fff , -220px -1277px #fff , 1864px -1310px #fff , 1135px -176px #fff , -1291px 299px #fff , 165px 1670px #fff , 1929px -1700px #fff , -1831px 1255px #fff , -255px 928px #fff , 1616px -737px #fff , -79px 37px #fff , 1131px -1048px #fff , -167px 58px #fff , 1439px -1760px #fff , -1529px 266px #fff , -962px 347px #fff , -690px -655px #fff , 594px 209px #fff , -1860px -1199px #fff , -91px -483px #fff , 875px -1302px #fff , -853px 836px #fff , 575px -1839px #fff , 1124px -1647px #fff , 1304px -381px #fff , 43px 1201px #fff , 1478px 415px #fff , 265px 635px #fff , -1152px 784px #fff , 1077px 199px #fff , -132px 1047px #fff , -1054px -765px #fff , 599px 682px #fff , 1102px 1760px #fff , 701px 1422px #fff , 349px -356px #fff , 224px 1808px #fff , -1372px 1952px #fff , 725px -1881px #fff , -1672px 385px #fff , -624px -1071px #fff , -374px 790px #fff , 1246px 1157px #fff , 840px 693px #fff , -1318px 315px #fff , -517px -1220px #fff , -509px -724px #fff , -1242px 767px #fff , 1249px -1807px #fff , -842px -705px #fff , 1841px -1485px #fff , -272px -1114px #fff , -1491px -1803px #fff , -1932px 579px #fff , -430px -836px #fff , -464px -733px #fff , 700px -622px #fff , -220px 1712px #fff , -1355px 453px #fff , 535px -314px #fff , 169px -1643px #fff , 1824px -1116px #fff , -334px 1503px #fff , -432px -266px #fff , -1185px -1117px #fff , -1472px 695px #fff , -1244px 628px #fff , 118px 1392px #fff , 1160px -117px #fff , 30px -1908px #fff , -409px -1450px #fff , -252px -296px #fff , -1325px 593px #fff , -229px 1591px #fff , -1407px 1479px #fff , 1535px -94px #fff , 373px -1973px #fff , -1316px -550px #fff , -1010px -1051px #fff , 475px -1823px #fff , -1631px -946px #fff , 1789px -1649px #fff , 1086px 1344px #fff , 733px 167px #fff , 203px 1128px #fff , -298px -387px #fff , 1915px -1566px #fff , -1224px 807px #fff , -1798px 1338px #fff , 221px 752px #fff , 1625px 289px #fff , 899px 29px #fff , -444px 959px #fff , 1425px -1392px #fff , -441px -273px #fff , 938px -1764px #fff , -1107px -933px #fff , 1201px 1302px #fff , 198px 1344px #fff , -264px 1431px #fff , -960px -198px #fff , -224px -904px #fff , 580px 1517px #fff , -312px 978px #fff , 1610px -1774px #fff , 887px 528px #fff , -1727px 924px #fff , 1859px -495px #fff , -1299px 1038px #fff , 1502px 1799px #fff , 589px -1602px #fff , 1142px -257px #fff , -148px -1867px #fff , 1747px -736px #fff , -1896px 1785px #fff , 1668px 1782px #fff , -362px 37px #fff , -161px 227px #fff , 1251px -1748px #fff , -1835px -219px #fff , -187px 991px #fff , 1698px -1722px #fff , 693px -1198px #fff , -238px 645px #fff , 717px 1430px #fff , -1072px -837px #fff , 1158px 852px #fff , 1240px -1179px #fff , -785px 979px #fff , -66px 727px #fff , 1395px 1037px #fff , -743px 341px #fff , 165px 19px #fff , 526px -811px #fff , -1730px -156px #fff , 1766px -782px #fff , -1713px -854px #fff , 1563px 722px #fff , 1193px 1267px #fff , -1513px 246px #fff , -1111px 444px #fff , -1902px -235px #fff , 1614px 207px #fff , 615px -1659px #fff , 998px -1591px #fff , -678px -1896px #fff , 1848px 1716px #fff , 54px 1560px #fff , 376px 1348px #fff , 273px 1523px #fff , -1364px 524px #fff , -342px 312px #fff , -528px 1200px #fff , -1159px 1167px #fff , 1166px -356px #fff , -276px 539px #fff , -1530px 1382px #fff , 147px -1747px #fff , 756px -490px #fff , -1375px -718px #fff , -1929px 1646px #fff , 1268px 1586px #fff , 434px -819px #fff , -495px -597px #fff , 1723px 44px #fff , -1634px -1887px #fff , -1541px 806px #fff , -1180px 1299px #fff , -257px 761px #fff , -1349px -618px #fff , 1859px -1223px #fff , 651px 1902px #fff , -1279px 357px #fff , 697px -1894px #fff , 687px -1793px #fff , -787px 550px #fff , 603px 1760px #fff , 740px -1082px #fff , -1421px -1890px #fff , -1031px -1453px #fff , 1850px -1205px #fff , -1475px -749px #fff , 1091px 818px #fff , -1867px -1379px #fff , 665px -1183px #fff , 745px -286px #fff , 1648px 1041px #fff , -1389px 194px #fff , -189px -361px #fff , -1734px 132px #fff , -1949px 201px #fff , 839px 553px #fff , -1405px 996px #fff , 564px -1369px #fff , -165px 1493px #fff , -836px -1276px #fff , 864px 761px #fff , 1692px 87px #fff , 128px 497px #fff , -826px -19px #fff , 805px -908px #fff , 633px 147px #fff , 95px 1406px #fff , 457px -322px #fff , -1506px -1773px #fff , -1689px -646px #fff , -1223px -1109px #fff , 304px -896px #fff , 842px -1107px #fff , 987px 831px #fff , 892px 483px #fff , -1135px 1474px #fff , 627px -148px #fff , 1800px 1251px #fff , -1615px -382px #fff , 888px 1264px #fff , -634px 1378px #fff , -370px 1821px #fff , 1378px -724px #fff , 1502px -1982px #fff , -1722px 1102px #fff , -1916px 294px #fff , -1201px 1418px #fff , -790px -65px #fff , 464px 1867px #fff , -1530px -970px #fff , -133px -1645px #fff , -279px -768px #fff , -275px -599px #fff , -1004px -1074px #fff , 418px 1077px #fff , 979px 645px #fff , -721px 279px #fff , -1739px 549px #fff , -1777px 824px #fff , 1044px -1228px #fff , -1044px -120px #fff , 798px -434px #fff , -33px -1053px #fff , -768px 1388px #fff , -1957px -1551px #fff , -468px 1664px #fff , -673px -934px #fff , 585px -1177px #fff , 614px 898px #fff , 1886px 665px #fff , -949px 963px #fff , -724px 934px #fff , -1184px 337px #fff , -1378px 1931px #fff , 266px 593px #fff , 996px 791px #fff , -386px -864px #fff , -1851px -1989px #fff , -1718px -51px #fff , -684px -1724px #fff , 1753px 423px #fff , -1482px 994px #fff , -104px -1496px #fff , -1586px -1360px #fff , 691px -1236px #fff , 1515px -20px #fff , 867px 1442px #fff , 1885px -1745px #fff , 946px -1752px #fff , 1424px 68px #fff , 462px -716px #fff , -719px -1997px #fff , -232px 38px #fff , -1036px 1446px #fff , 1707px -1166px #fff , 1800px -1490px #fff , -1895px 1898px #fff , 1329px -1639px #fff , 1230px -310px #fff , -957px 1930px #fff , 1510px 140px #fff , -1612px 1277px #fff , 1852px 1670px #fff , -1670px 1234px #fff , 1585px -1785px #fff , -1448px -193px #fff , 1637px 79px #fff , 1466px -302px #fff , -1949px 1532px #fff , 121px -53px #fff , -1116px 1484px #fff , 1139px -1803px #fff , -666px 721px #fff , -617px 569px #fff , -127px -878px #fff , 466px 1323px #fff , 1274px 658px #fff , 28px 606px #fff , 1771px 198px #fff , 1680px 909px #fff , 1495px 266px #fff , 926px -346px #fff , -1609px -1107px #fff , -1311px -1679px #fff , -804px 977px #fff , 604px 254px #fff , 1285px -120px #fff , -1987px 1466px #fff , -1165px -1147px #fff , 350px 255px #fff , 742px -1226px #fff , 422px 1449px #fff , 1138px 181px #fff , 1035px 1589px #fff , -414px -172px #fff , 710px -1115px #fff , -1350px 628px #fff , 447px -1834px #fff , 926px 312px #fff , -615px 627px #fff , 978px 680px #fff , 182px 1172px #fff , -1608px -286px #fff , 1722px -159px #fff , 304px -1937px #fff , -986px 1422px #fff , 624px 1042px #fff , 492px 740px #fff , 1866px -862px #fff , 673px 1382px #fff , 410px -378px #fff , 15px -495px #fff , 1431px -1181px #fff , -954px 952px #fff , 895px -263px #fff , -1414px 1664px #fff , -259px 364px #fff , -1412px 966px #fff , -1287px -407px #fff , -93px 1359px #fff , -1500px -290px #fff , -1463px -264px #fff , 1064px 410px #fff , -1532px -1840px #fff , 476px 356px #fff , 1482px -836px #fff , 1876px -447px #fff , -281px 738px #fff , -566px -1673px #fff , 1324px 1848px #fff , 1697px -970px #fff , -1218px -244px #fff , -1148px 1030px #fff , 840px 880px #fff , -1243px 1682px #fff , -1759px -613px #fff , -1139px -49px #fff , -1824px 1982px #fff , -1880px -1380px #fff , 606px 1965px #fff , -1240px -115px #fff , -1653px -1726px #fff , 605px -169px #fff , 1515px 207px #fff , -1003px 1207px #fff , -561px 704px #fff , -738px -672px #fff , 954px 1036px #fff , -1178px 1158px #fff , 1501px -1714px #fff , -440px 176px #fff , 630px 156px #fff , 1433px 93px #fff , 850px -296px #fff , -683px -833px #fff , -947px -1737px #fff , 658px -1455px #fff , -1620px 1487px #fff , -1739px 1701px #fff , 986px -699px #fff , -1742px -370px #fff , 1856px -1555px #fff , 944px -272px #fff , -96px -704px #fff , 1629px -594px #fff , -1241px 1490px #fff , -841px -1495px #fff , -884px 1042px #fff , -1348px 1839px #fff , -17px -1542px #fff , 1604px -1732px #fff , -980px 516px #fff , 1402px -1128px #fff , 738px -758px #fff , -1285px -613px #fff , -545px -1924px #fff , -1819px 1365px #fff , 924px -1173px #fff , 948px -880px #fff , 1445px -945px #fff , 1629px -233px #fff , -1381px -1509px #fff , 441px 1605px #fff , -1597px 1258px #fff , -1981px -1770px #fff , -865px 404px #fff , 1531px 1904px #fff , -1160px 924px #fff , 127px -896px #fff , -1072px -1209px #fff , -1775px 13px #fff , -562px -1859px #fff , 1630px 635px #fff , 490px -1916px #fff , -793px 1189px #fff , -1975px -1138px #fff , -1245px -1482px #fff , -1173px -1113px #fff , 655px -279px #fff , -1674px -1647px #fff , -755px 436px #fff , 1187px -268px #fff , -1770px 1033px #fff , -922px 368px #fff , 1895px -1793px #fff , 1265px -565px #fff , -1589px 45px #fff , -89px -1457px #fff , -1026px -1581px #fff , -1550px 1549px #fff , -1813px -1762px #fff , -621px 623px #fff , 838px 270px #fff , -85px 1774px #fff , -992px 1104px #fff , -295px 206px #fff , -1088px 1619px #fff , -963px 1758px #fff , -958px 1204px #fff , -1380px 217px #fff , 257px 694px #fff , 138px -643px #fff , 634px -433px #fff , -1116px 602px #fff , 1130px 55px #fff , -1865px -907px #fff , 209px 824px #fff , 1095px 731px #fff , 759px 1074px #fff , 937px 422px #fff , 116px -1778px #fff , 483px -1449px #fff , -1949px 1498px #fff , -371px 801px #fff , -163px 421px #fff , 183px 1656px #fff , 1948px 1346px #fff , -589px 1329px #fff , -903px 803px #fff , -654px -1233px #fff , -373px -310px #fff , 496px -53px #fff , -49px 1836px #fff , -1486px 826px #fff , 1221px -1351px #fff , 1378px -1316px #fff , -532px 37px #fff , 1935px 1927px #fff , 1866px 338px #fff , -1395px 1848px #fff , -1547px 1781px #fff , -390px 684px #fff , -170px 1320px #fff , 1988px -427px #fff , -418px -858px #fff , 25px -131px #fff , -1500px 734px #fff , -1026px 918px #fff , 1656px 538px #fff , -276px -84px #fff , -705px 805px #fff , 1627px -66px #fff , -337px -663px #fff , -113px -1018px #fff , 1136px -348px #fff , 831px 1288px #fff , 1480px 61px #fff , 1175px 273px #fff , 88px -1336px #fff , 674px -1855px #fff , 711px 764px #fff , -190px 140px #fff , 199px 1110px #fff , 1597px 418px #fff , -552px -307px #fff , -1610px -1644px #fff , 12px -932px #fff , 1253px 1609px #fff , -1515px -1288px #fff , 419px 1880px #fff , -506px -803px #fff , 1491px 101px #fff , -277px 590px #fff , -3px 44px #fff , 1152px -1897px #fff , 679px 702px #fff , 273px 920px #fff , -1118px -1015px #fff , -1034px 199px #fff , 1831px 989px #fff , -1693px 1642px #fff , -290px 1312px #fff , -1667px -1237px #fff , -565px -1599px #fff , 753px -892px #fff , -309px -384px #fff , -69px -859px #fff , -488px 713px #fff , -1908px -1164px #fff , 859px -367px #fff , -1721px -119px #fff , 618px -1726px #fff , -1221px 870px #fff , 1950px 1735px #fff , -230px -1939px #fff , -1496px -1611px #fff , -502px 945px #fff , 1156px 776px #fff , 1166px -443px #fff , -1717px 1351px #fff , 279px 229px #fff , -860px -629px #fff , -431px -194px #fff , -1635px -613px #fff , -1316px 1018px #fff , 1118px -1360px #fff , -1570px 1713px #fff , -83px 89px #fff , -1378px 1735px #fff , 893px -1377px #fff , 428px 810px #fff , -828px 1531px #fff , 163px 1574px #fff , -1640px 534px #fff , -1291px 930px #fff , -706px 240px #fff , 104px -281px #fff , -1413px -1114px #fff , -1162px -1936px #fff , -1841px 906px #fff , -1408px -1236px #fff , -850px 650px #fff , -1937px 971px #fff , 1681px 1811px #fff , 1277px -1422px #fff , -385px -1027px #fff , -169px 1887px #fff , -1323px 70px #fff , -192px 1573px #fff , 1653px -188px #fff , 478px -198px #fff , -1125px -1585px #fff , -371px -1665px #fff , -70px -966px #fff , -1806px -1253px #fff , -1575px -77px #fff , 1585px -1257px #fff , 210px -1821px #fff , 1006px 594px #fff , -1990px 614px #fff , -1982px -889px #fff , -1733px -1931px #fff , 1761px 1433px #fff , -1198px -1677px #fff , 1987px -174px #fff , 789px 1184px #fff , 1661px 1437px #fff , 1276px -1344px #fff , -1362px -723px #fff , -1621px -1490px #fff , 719px -305px #fff , -563px 1377px #fff , 1290px -732px #fff , 1492px -860px #fff , 1344px -222px #fff , 1971px -1022px #fff , -1947px 620px #fff , -135px -666px #fff , 663px -846px #fff , -827px -325px #fff , -933px -822px #fff , 1496px 1579px #fff , 108px 1663px #fff , -259px -1191px #fff , 1252px 397px #fff , 1897px 367px #fff , 1277px 1202px #fff , -1143px -565px #fff , -1578px -1391px #fff , 1368px -729px #fff , -1544px 1110px #fff , 1748px -1136px #fff , -1984px 386px #fff , 693px -1173px #fff , 978px 1507px #fff , -283px 1931px #fff , 973px 124px #fff , 1390px -1207px #fff , -1765px -484px #fff , 1293px 635px #fff , -192px 1769px #fff , 784px 1091px #fff , 1048px -1092px #fff , 1456px 1835px #fff , 731px -1147px #fff , 679px 25px #fff , 890px 1542px #fff , -285px 452px #fff , -1412px 625px #fff , -1390px 999px #fff , 1383px -530px #fff , 98px -1460px #fff , -1724px 1487px #fff , 141px -802px #fff , -1775px -506px #fff , 436px -1129px #fff , 1711px -502px #fff , -1590px -1128px #fff , 169px -1210px #fff , 1631px 1906px #fff , 773px -788px #fff , -336px -970px #fff , -412px 235px #fff , -750px -36px #fff , -1769px 793px #fff , 468px -1602px #fff , 73px 1185px #fff , 1009px 120px #fff , 1463px 149px #fff , -339px -1593px #fff , -1199px -233px #fff , 1852px -1013px #fff , 145px -1239px #fff , 1504px 1077px #fff , -434px -400px #fff , 156px -1629px #fff , -306px -790px #fff , 1557px 204px #fff , -1658px -38px #fff , -1370px 1494px #fff , 1917px -650px #fff , -1003px -328px #fff , 903px 9px #fff , 1406px 1858px #fff , 1420px 772px #fff , -955px -1654px #fff , 159px 867px #fff , -1351px 1591px #fff , 396px 1791px #fff , -725px 1579px #fff , -1538px 906px #fff , -52px -315px #fff , -540px 153px #fff , 1866px 1908px #fff , 821px 725px #fff , 254px 952px #fff , -1744px 1103px #fff , -1177px -1836px #fff , -597px 490px #fff , -1544px -1237px #fff , -563px 414px #fff , -1265px 188px #fff , -694px -360px #fff , 38px -1842px #fff , 592px -942px #fff , 1793px 757px #fff , 1208px -1940px #fff , -1508px -360px #fff , -752px 1738px #fff , -1627px 738px #fff , -5px -1049px #fff , 1291px -499px #fff , 1970px -1906px #fff , -444px 1469px #fff , 357px 1812px #fff , 1688px 238px #fff , 1896px 800px #fff , 1789px 37px #fff , -1934px 1952px #fff , -408px 1257px #fff , -1785px -111px #fff , 202px -347px #fff , -1388px -673px #fff , -341px 407px #fff , -202px -1094px #fff , 1957px -1066px #fff , 18px -195px #fff , 683px -1249px #fff , -1613px -384px #fff , 1501px -1813px #fff , -382px 947px #fff , -793px 622px #fff , 1806px 1331px #fff , 363px 25px #fff , 534px 42px #fff , 814px 1904px #fff , 1958px -732px #fff , -1658px -1509px #fff , 224px 573px #fff , -305px 47px #fff , -1191px -1537px #fff , -1643px -36px #fff , 1396px -1289px #fff , 800px -1201px #fff , -856px -68px #fff , 1191px 855px #fff , 738px -1357px #fff , 54px 699px #fff , 1618px 1839px #fff , -83px -350px #fff , -688px -1187px #fff , 1781px -1321px #fff , 322px 924px #fff , -241px -1154px #fff , 609px -612px #fff , -220px 1075px #fff , 512px -1407px #fff , -1332px 1234px #fff , 1213px -1162px #fff , -680px 1018px #fff , 1233px -1405px #fff;
  animation: star-rotate 200s linear infinite;
}

.star2 {
  width: 2px;
  height: 2px;
  box-shadow: -633px 1765px #fff , -1838px -531px #fff , -1203px -1172px #fff , -752px -1988px #fff , -40px -1845px #fff , 759px 516px #fff , 876px 1478px #fff , 1710px 1148px #fff , 558px 646px #fff , 946px -323px #fff , 1331px 79px #fff , -943px 962px #fff , 1556px 1355px #fff , 1002px 1483px #fff , -1535px -399px #fff , 992px 488px #fff , 234px 1383px #fff , 1077px -1202px #fff , -1900px -1937px #fff , -700px -1561px #fff , -1980px 1815px #fff , 131px 929px #fff , -857px -764px #fff , -746px -55px #fff , 1629px -1575px #fff , -767px 1814px #fff , 381px 1946px #fff , 573px -143px #fff , 1371px -1206px #fff , -277px -252px #fff , 90px -1077px #fff , -1385px -1033px #fff , -1067px 421px #fff , 1720px 877px #fff , -1537px -597px #fff , 162px -515px #fff , -1492px -232px #fff , 108px 226px #fff , -1265px -598px #fff , -311px 786px #fff , 1579px -602px #fff , -259px -178px #fff , -51px -729px #fff , 794px -1784px #fff , 1314px -739px #fff , -287px 1642px #fff , 1672px 829px #fff , -1407px -272px #fff , -789px 1563px #fff , -781px 166px #fff , -1924px -1169px #fff , -1952px -290px #fff , -1237px -141px #fff , 916px -1375px #fff , -1031px 1859px #fff , -444px 1915px #fff , 1101px 1753px #fff , -1955px 70px #fff , -886px -1961px #fff , 58px -361px #fff , 1823px -918px #fff , -1829px 844px #fff , 572px 1423px #fff , 1260px 870px #fff , -436px -847px #fff , 1371px 1163px #fff , -721px -124px #fff , -1437px -683px #fff , 1854px -1804px #fff , -1988px 827px #fff , 1630px -1817px #fff , -1874px 558px #fff , 1050px -1993px #fff , -1210px 795px #fff , -1918px 1576px #fff , -797px -736px #fff , 683px 816px #fff , -1695px 1351px #fff , -515px -1355px #fff , -950px -360px #fff , -545px 1128px #fff , -1570px -1982px #fff , 1448px -1021px #fff , 91px 19px #fff , 1822px -1697px #fff , -212px 3px #fff , 1766px 730px #fff , 614px 174px #fff , -821px -905px #fff , -114px -1268px #fff , 1646px -487px #fff , -1786px -1394px #fff , 1660px -942px #fff , -469px -80px #fff , -1981px 668px #fff , -105px -1430px #fff , -298px 876px #fff , 1474px 1149px #fff , -1398px 654px #fff , -887px -772px #fff , -314px 276px #fff , 623px 241px #fff , -808px -1406px #fff , 1154px 657px #fff , -837px -807px #fff , 169px -1862px #fff , -394px 1746px #fff , 125px 212px #fff , -1603px 714px #fff , 71px -1775px #fff , -1439px 1269px #fff , 321px -876px #fff , 1432px 1952px #fff , 412px -864px #fff , -412px 175px #fff , -611px 1435px #fff , 200px -1601px #fff , 1417px 712px #fff , 1926px 666px #fff , 1170px -1469px #fff , 203px -138px #fff , -1277px -1319px #fff , 1851px 647px #fff , -1180px -1391px #fff , -1546px -1958px #fff , 720px -1218px #fff , 231px 993px #fff , 1768px 1746px #fff , 709px -1891px #fff , 1352px -1119px #fff , -934px -1361px #fff , 1459px -1927px #fff , -1468px -17px #fff , 1733px 1397px #fff , -1716px 489px #fff , 1499px 1605px #fff , -1306px 48px #fff , 282px -302px #fff , -778px -1909px #fff , -878px 264px #fff , -1583px 384px #fff , -255px -998px #fff , -438px -1805px #fff , -1708px 546px #fff , -186px 306px #fff , 1608px -1806px #fff , 862px 719px #fff , 1614px 307px #fff , 146px -90px #fff , -1432px 1522px #fff , -739px 597px #fff , 816px -114px #fff , -1414px 973px #fff , 1740px -541px #fff , 55px 1572px #fff , -526px 1538px #fff , -947px 904px #fff , -1752px -263px #fff , -216px -240px #fff , -437px -886px #fff , 747px 330px #fff , 1522px 710px #fff , -481px 292px #fff , -438px -179px #fff , 1509px 1141px #fff , 1521px -1442px #fff , 1038px 1875px #fff , -1395px 1471px #fff , -1592px 1632px #fff , 1914px -890px #fff , 1484px 801px #fff , -820px 1098px #fff , -1313px -1041px #fff , 1271px 553px #fff , -1519px 19px #fff , -1920px 312px #fff , 509px -188px #fff , -236px -1321px #fff , -360px -1673px #fff , -890px -964px #fff , -1371px -1115px #fff , 831px -540px #fff , -120px 505px #fff , -1625px -1659px #fff , 749px -777px #fff , -1595px -1869px #fff , 817px 759px #fff , 28px -313px #fff , 160px -248px #fff , 497px -1581px #fff , -821px -241px #fff , 349px -1400px #fff , 327px 749px #fff , 1572px -1921px #fff , -643px -1662px #fff , -518px 1111px #fff , 1258px -787px #fff , -86px 580px #fff , -538px -1938px #fff , -1590px -531px #fff , 1477px -1289px #fff , -702px 19px #fff , -257px -192px #fff , -542px -1260px #fff , -1282px -1914px #fff , -1637px 403px #fff , -1500px 1762px #fff , 1894px -1405px #fff , 1611px -683px #fff , -879px -1558px #fff , 914px -34px #fff , -1492px 1123px #fff , -1355px -1581px #fff , -13px -1776px #fff , -594px 184px #fff , 841px 1224px #fff , -292px 1619px #fff , 1752px -1577px #fff , 333px -480px #fff , -123px -1253px #fff , 98px 1907px #fff , 950px -1808px #fff , 87px -1916px #fff , -1902px 1982px #fff , -317px -654px #fff , -1097px -1809px #fff , 57px -140px #fff , -63px 414px #fff , 513px 1202px #fff , -1550px 1341px #fff , -293px -1089px #fff , -258px 332px #fff , 259px 1950px #fff , 1906px -1503px #fff , -725px 1212px #fff , -1256px 1109px #fff , 1457px 1248px #fff , -1828px -1847px #fff , -53px -1890px #fff , 1714px -1731px #fff , -1188px -1918px #fff , -1273px 166px #fff , -232px -1748px #fff , 175px 91px #fff , 480px -916px #fff , 447px 1487px #fff , -786px 1446px #fff , -94px 203px #fff , 431px -1366px #fff , -1232px -1385px #fff , -1445px 271px #fff , 696px -768px #fff , 565px 1849px #fff , 1569px -643px #fff , 979px 1829px #fff , 561px 1156px #fff , 1555px -628px #fff , -938px -891px #fff , 332px 883px #fff , 465px 1379px #fff , 886px 606px #fff , -1215px 766px #fff , 894px -130px #fff , -379px -726px #fff , -1628px -1365px #fff , -1064px 694px #fff , -364px -280px #fff , 142px 451px #fff , -1587px -177px #fff , 186px 1786px #fff , 591px 378px #fff , -1412px 1578px #fff , -789px -910px #fff , -691px -1601px #fff , -1667px -1358px #fff , -408px 1336px #fff , -749px 1480px #fff , 1343px 1392px #fff , -1289px -1878px #fff , 1964px -1136px #fff , 1362px 617px #fff , 1263px -962px #fff , 196px -1009px #fff , 1243px -1625px #fff , -351px 987px #fff , -1765px -1796px #fff , 1436px -1351px #fff , -1685px -941px #fff , 1387px 623px #fff , 1616px -86px #fff , 889px 1750px #fff , 852px 1216px #fff , -20px 1295px #fff , 1694px 356px #fff , 1780px 305px #fff , 1738px 510px #fff , 1775px -1351px #fff , -235px 254px #fff , 803px 1338px #fff , 69px 696px #fff , -1468px 1485px #fff , -696px 1756px #fff , 1121px -721px #fff , 1018px 982px #fff , -1587px -1921px #fff , 1527px -1484px #fff , 494px -20px #fff , 191px 502px #fff , 996px 1700px #fff , 739px 456px #fff , 543px -1748px #fff , -823px -687px #fff , 1783px -518px #fff , -1221px -59px #fff , 1194px 1793px #fff , -1371px -789px #fff , -1473px -847px #fff , -14px 1116px #fff , 1493px -276px #fff , 999px 750px #fff , -1183px -1061px #fff , 1270px 1210px #fff , -836px 1947px #fff , 885px -1149px #fff , -1682px -1322px #fff , 619px -1154px #fff , -722px -67px #fff , 1742px -338px #fff , 1916px -98px #fff , -1528px 1037px #fff , 542px -1887px #fff , -1493px 548px #fff , -1222px 1874px #fff , 1285px 796px #fff , 229px 1739px #fff , 797px -44px #fff , 1179px -1968px #fff , 1928px -312px #fff , -406px 1066px #fff , 590px 438px #fff , 63px -1661px #fff , -707px -1025px #fff , -669px 26px #fff , 1181px 1902px #fff , 609px 1635px #fff , 656px -1915px #fff , -1600px -528px #fff , 1507px 819px #fff , 1913px -869px #fff , 100px 943px #fff , 370px 417px #fff , -1862px -1979px #fff , 210px 1103px #fff , 354px 1243px #fff , 49px -1047px #fff , 1230px 1030px #fff , -1991px 1828px #fff , -1904px -1917px #fff , -816px -1310px #fff , 1407px -1385px #fff , -258px 554px #fff , 1244px 859px #fff , -46px 1837px #fff , -1873px 268px #fff , -421px 406px #fff , -1164px 1461px #fff , 965px -1920px #fff , 1087px -1609px #fff , -1252px 1939px #fff , 895px -851px #fff , -1820px 1281px #fff , -405px -157px #fff , 1491px -1033px #fff , 120px -1571px #fff , -810px 1723px #fff , 1598px 1072px #fff , -740px 98px #fff , 1021px -259px #fff , 60px -879px #fff , 1935px -16px #fff , 580px 1033px #fff , -1391px 1458px #fff , -1109px 1368px #fff , -614px -1331px #fff , -131px -1062px #fff , -266px 161px #fff , 1115px -390px #fff , 1295px 1471px #fff , 675px 114px #fff , -815px -1438px #fff , -1599px -1789px #fff , -548px 1226px #fff , 748px -1851px #fff , -1607px 1957px #fff , 1827px -382px #fff , -1890px 872px #fff , -1849px -1226px #fff , 1447px 831px #fff , -1628px 613px #fff , -410px 537px #fff , 1744px -88px #fff , -914px -1626px #fff , 522px 1347px #fff , 759px -762px #fff , -526px -905px #fff , 24px -320px #fff , -373px 68px #fff , 1739px 60px #fff , -1073px 1170px #fff , -364px 478px #fff , -1317px -1630px #fff , 1259px -573px #fff , -1389px 608px #fff , 990px 1356px #fff , 767px -1883px #fff , -115px -1509px #fff , -176px -337px #fff , -845px 477px #fff , -1120px 417px #fff , -26px 786px #fff , 1051px -1826px #fff , 90px 1193px #fff , 677px 1908px #fff , -106px 130px #fff , 1258px -812px #fff , 584px 1992px #fff , -1410px -662px #fff , 1983px -578px #fff , -1630px -1278px #fff , -1502px -234px #fff , 1200px -726px #fff , 1488px 1905px #fff , -304px 983px #fff , -126px -155px #fff , -586px 1890px #fff , 191px 45px #fff , -1832px 1002px #fff , -961px -274px #fff , -1867px -1379px #fff , -1262px -667px #fff , -86px 925px #fff , 1662px -1332px #fff , 486px 1864px #fff , 475px -913px #fff , -1843px -957px #fff , -1889px -738px #fff , 305px -182px #fff , -1920px -1081px #fff , -746px 1464px #fff , 1790px -576px #fff , -1111px 1109px #fff , 1101px -1064px #fff , 183px 957px #fff , -494px -1839px #fff , -1960px -467px #fff , -1295px 310px #fff , 1895px 1329px #fff , 1625px 1953px #fff , -1533px -1438px #fff , -869px -1061px #fff , 936px -1498px #fff , -1164px -353px #fff , -1020px -1140px #fff , -1465px 1430px #fff , -264px 1028px #fff , -379px 1266px #fff , 1132px 313px #fff , -394px -777px #fff , -695px 213px #fff , -904px 250px #fff , 1241px -1970px #fff , -1356px -918px #fff , -633px 734px #fff , -1400px 1587px #fff , 30px 646px #fff , 841px 506px #fff , 1968px -1482px #fff , 709px 297px #fff , -701px 1429px #fff , -1265px -29px #fff , 111px -1860px #fff , -341px -397px #fff , 387px 161px #fff , -57px 302px #fff , -1240px -1409px #fff , 517px 1099px #fff , 604px 774px #fff , 436px -886px #fff , -1118px 1126px #fff , 1199px 192px #fff , -1195px 1770px #fff , 380px -1981px #fff , 1511px -1671px #fff , 584px 1730px #fff , -742px 1909px #fff , -1508px 981px #fff , -1043px 1343px #fff , -733px -909px #fff , 1893px -1390px #fff , 245px 347px #fff , 348px 394px #fff , -1906px -1053px #fff , -1783px 89px #fff , -1039px 1280px #fff , -1339px -1503px #fff , 858px -118px #fff , -1321px -1890px #fff , 1917px -683px #fff , 766px -1568px #fff , -1333px 403px #fff , 246px -726px #fff , 1403px 1350px #fff , 912px -1999px #fff , 1668px -602px #fff , -410px -909px #fff , 976px -65px #fff , -287px 149px #fff , -426px -109px #fff , 1302px 1334px #fff , -848px 1363px #fff , -785px -1964px #fff , -967px -829px #fff , -1777px 368px #fff , 475px -534px #fff , -1355px 808px #fff , 715px 623px #fff , 1214px -1328px #fff , 1833px -450px #fff , 1692px 163px #fff , 371px -438px #fff , -538px 1169px #fff , -256px 1094px #fff , -1383px 801px #fff , 1784px -1028px #fff , -1358px -591px #fff , 1296px 1804px #fff , 610px 472px #fff , -898px 1347px #fff , -166px -985px #fff , -23px -134px #fff , -1378px 1001px #fff , 1938px 696px #fff , 1023px 364px #fff , -119px -1856px #fff , -1976px 515px #fff , 300px -1158px #fff , 1830px -116px #fff , -1906px -1751px #fff , 1583px 1108px #fff , -673px 643px #fff , -1951px -378px #fff , -624px -1897px #fff , 1499px 1237px #fff , -1800px -651px #fff , -860px 898px #fff , 355px -864px #fff , 590px -1908px #fff , -1601px -797px #fff , 1279px 1993px #fff , 1082px -797px #fff , -1427px -951px #fff , 940px 1201px #fff , -347px 1332px #fff , 1845px -1443px #fff , 933px -586px #fff , -411px -658px #fff , -1899px -1698px #fff , 1836px -1175px #fff , 30px -1226px #fff , 1174px 1534px #fff , 1238px 982px #fff , 599px -1846px #fff , -85px 1395px #fff , -100px -841px #fff , 112px -1921px #fff , -999px -1463px #fff , -1886px 697px #fff , -1158px 1765px #fff , -1988px -1903px #fff , -1276px 657px #fff , 1287px -1116px #fff , 1183px -1851px #fff , -314px 1789px #fff , 923px 135px #fff , -251px 1049px #fff , -690px 1319px #fff , -782px -1220px #fff , 1311px 1877px #fff , 361px -844px #fff , 1989px -1753px #fff , 637px -490px #fff , -82px 1096px #fff , -957px -82px #fff , -707px 1375px #fff , 673px 1607px #fff , -1289px 97px #fff , -464px -398px #fff , 688px -1337px #fff , -738px -607px #fff , -1063px -77px #fff , -1457px -1748px #fff , 1536px 1098px #fff , -1277px 1896px #fff , 752px 972px #fff , 1266px -1847px #fff , -220px -1419px #fff , 992px 451px #fff , -603px 1637px #fff , -1606px -1387px #fff , -1369px -1458px #fff , 598px 1069px #fff , 423px 11px #fff , -1059px 580px #fff , 1152px 1980px #fff , 255px -1265px #fff , 848px 51px #fff , 1047px 245px #fff , 1805px 500px #fff , -1259px 1585px #fff , 479px 591px #fff , -1200px -872px #fff , -1794px 430px #fff , 432px 57px #fff , 473px 30px #fff , -616px 1493px #fff , -812px 809px #fff , 724px -1122px #fff , 358px 1358px #fff , -884px 1896px #fff , -165px 844px #fff , 311px -1435px #fff , -1310px -271px #fff , 433px 1600px #fff , 328px 533px #fff , 1668px 287px #fff , 432px -1097px #fff , 364px 1633px #fff , -211px 1761px #fff , 800px 1074px #fff , 126px 12px #fff , 634px 47px #fff , 267px -1198px #fff , -802px 1240px #fff , -1023px 227px #fff , 1756px 1879px #fff , 1074px 1689px #fff , 1487px 996px #fff , 1927px 1654px #fff , -89px 1427px #fff , -320px 237px #fff , -1138px 796px #fff , 1542px -1783px #fff , 1427px -302px #fff , 1125px -1322px #fff , -1977px 500px #fff , 133px -1281px #fff , -1089px -209px #fff , 520px -490px #fff , -1420px 1426px #fff , -1336px 1352px #fff , -935px -743px #fff , -1787px 1754px #fff , 1899px -115px #fff , -1863px 865px #fff , 1580px -1240px #fff , 231px -1655px #fff , -937px -840px #fff , -669px 275px #fff , 1899px 1726px #fff , 626px -177px #fff , -1597px -674px #fff , -111px -593px #fff , 1908px 1252px #fff , 689px -1681px #fff , 440px 1038px #fff , 202px 433px #fff , 1608px -1664px #fff , -895px -1489px #fff , -872px -1796px #fff , 1088px 1491px #fff , -268px -1427px #fff , -1363px -995px #fff , -1720px 1318px #fff , -347px 870px #fff , -1115px 1038px #fff , 236px 1747px #fff , -516px 535px #fff , 145px -341px #fff , -300px -1088px #fff , -1296px 1867px #fff , -1081px 1983px #fff , 259px 1683px #fff , 1693px -417px #fff , -1226px -1423px #fff , 1022px 983px #fff , -201px 392px #fff , -1980px -1004px #fff , 1793px -1556px #fff , -274px -324px #fff , -911px 830px #fff , 1188px 1415px #fff , -730px -1576px #fff , -947px 425px #fff , 1064px -1035px #fff , 536px 1671px #fff , -1729px 618px #fff , -1740px -42px #fff , 1570px -1857px #fff , -1153px -1273px #fff , 1965px -373px #fff , 544px -720px #fff , -645px -1473px #fff , -1890px -1904px #fff , 1101px -193px #fff , -1576px -1458px #fff , 1989px 259px #fff , -1792px 730px #fff , 1107px -717px #fff , -196px 1533px #fff , -566px 806px #fff , -1829px -859px #fff , -1468px -1462px #fff , 1386px -741px #fff , 934px 681px #fff , -642px -684px #fff , 1102px 1407px #fff , 949px -1635px #fff , -100px 1833px #fff , 1554px -1703px #fff , -1857px 393px #fff , -1406px 840px #fff , -1765px 619px #fff , 577px -49px #fff , 1843px 736px #fff , 1720px 1874px #fff , 573px -1655px #fff , 1849px 186px #fff , 256px 1683px #fff , -640px 212px #fff , 737px 1662px #fff , -566px 803px #fff , -1431px -45px #fff , 521px 1714px #fff , 1179px -1913px #fff , -1707px -410px #fff , -1753px -376px #fff , 778px 1230px #fff , 273px 407px #fff , -377px 793px #fff , 1642px -691px #fff , -1571px 1620px #fff , -538px -1449px #fff , -206px -1962px #fff , 500px -671px #fff , -1952px -1662px #fff , -1838px -41px #fff , 658px -272px #fff , 347px -1543px #fff , 279px 1361px #fff , -892px -431px #fff , -1613px 1666px #fff , -1469px 1794px #fff , 239px 1973px #fff , 449px 891px #fff , 271px 1612px #fff , -1941px 231px #fff , 681px 1056px #fff , 150px 1923px #fff , -750px 830px #fff , -1448px 416px #fff , 997px 372px #fff , -1562px 1909px #fff , -512px 1317px #fff , 972px -1937px #fff , 1305px -1662px #fff , -1709px -283px #fff , 1375px 10px #fff , -687px 1624px #fff , -235px 1792px #fff , 1760px -1331px #fff , -177px 293px #fff , 275px -35px #fff , 94px 1883px #fff , -1488px -9px #fff , 717px 449px #fff , 1434px -154px #fff , -421px 484px #fff , 1693px -1858px #fff , 1691px -854px #fff , 1583px -1612px #fff , 721px -1952px #fff , 1446px -124px #fff , -1843px -914px #fff , -1567px -85px #fff , 1625px -1434px #fff , -1561px 533px #fff , 1801px -676px #fff , 244px -1630px #fff , 1600px 221px #fff , -404px -1305px #fff , 1327px 1445px #fff , -241px -599px #fff , -231px 1758px #fff , 144px -1898px #fff , 358px -290px #fff , -1053px 1481px #fff , -1149px -957px #fff , -1640px 1921px #fff , 92px -1631px #fff , -1161px 1696px #fff , -45px 661px #fff , 7px 1306px #fff , -170px -882px #fff , 936px -1983px #fff , -1324px -1277px #fff , 871px -358px #fff , -830px -21px #fff , -1973px 1396px #fff , -114px -1365px #fff , 1599px 240px #fff , 1331px 519px #fff , 635px -1994px #fff , 1433px -287px #fff , 1567px -931px #fff , 1322px 192px #fff , 315px -593px #fff , 680px 596px #fff , 1000px -576px #fff , 564px 848px #fff , -1446px -573px #fff , -1702px 1361px #fff , 709px 1716px #fff , 1166px 480px #fff , 1454px 1736px #fff , 1226px -775px #fff , -1117px -1398px #fff , 1100px 1702px #fff , -636px -1160px #fff , 1892px 1740px #fff , -1498px 761px #fff , 27px -952px #fff , 1474px -187px #fff , 193px 1616px #fff , 1686px 281px #fff , 982px 105px #fff , 953px 459px #fff , 1380px 296px #fff , -736px 1514px #fff , -1371px -1817px #fff , 393px 271px #fff , -532px -250px #fff , 1517px -1763px #fff , -1629px -801px #fff , 375px 1378px #fff , 483px 710px #fff , -1659px -71px #fff , 215px -216px #fff , -802px 1814px #fff , 67px -1749px #fff , 1050px -1897px #fff , -545px 185px #fff , 832px -991px #fff , -270px -172px #fff , -914px 405px #fff , 1102px -1748px #fff , 1128px -788px #fff , -1835px 101px #fff , 1749px -1707px #fff , 291px -452px #fff , -724px 1355px #fff , 1564px 228px #fff , 1923px -548px #fff , -1932px 1125px #fff , 491px 1288px #fff , -1341px -1365px #fff , -644px -600px #fff , 680px -356px #fff , 428px 326px #fff , -278px -682px #fff , 1841px -307px #fff , -1152px -915px #fff , -559px 560px #fff , -1728px -1590px #fff , -605px 1913px #fff , -846px 240px #fff , 261px 735px #fff , 514px 118px #fff , 1735px 1789px #fff , 994px -1711px #fff , -933px 774px #fff , 655px -1792px #fff , -268px 1545px #fff , -1698px -1085px #fff , -515px -1816px #fff , -1594px 859px #fff , -79px -60px #fff , -1461px 251px #fff , -901px -430px #fff , -186px 1799px #fff , 1466px 380px #fff , -857px -152px #fff , 167px 462px #fff , 150px 372px #fff , 427px -7px #fff , -184px 1242px #fff , 86px 777px #fff , -1701px -1849px #fff , -596px -972px #fff , 1716px 104px #fff , 104px -577px #fff , 1415px 985px #fff , -1967px -201px #fff , 919px 13px #fff , -651px 435px #fff , 141px 40px #fff , 327px -357px #fff , -899px 1481px #fff , -1094px 324px #fff , 1843px 992px #fff , -1387px 1434px #fff , -377px 1061px #fff , 662px -1575px #fff , -379px 412px #fff , -1945px 1091px #fff , 1735px 516px #fff , -971px -1007px #fff , -1027px 1549px #fff , 1659px 1001px #fff , -1926px -929px #fff , -1143px -1169px #fff , -178px 1585px #fff , -1530px -458px #fff , -407px 849px #fff , -391px 1811px #fff , 914px -844px #fff , -1599px 305px #fff , -57px -197px #fff , -583px -281px #fff , -314px 1578px #fff , -1710px -1746px #fff , -1953px -14px #fff , -945px 1917px #fff , -1702px -416px #fff , -836px -970px #fff , -1371px 1630px #fff , 1128px 182px #fff , -304px 1192px #fff , -1575px -551px #fff , 494px 1062px #fff , 1367px 1458px #fff , 14px -430px #fff , 874px -1706px #fff , 606px -1469px #fff , -1724px -1651px #fff , -616px -1728px #fff , 522px 1243px #fff , 1667px 1888px #fff , 1617px -1687px #fff , 350px -340px #fff , -62px 832px #fff , -181px 1537px #fff , -351px 548px #fff , -1181px 437px #fff , 1558px 1762px #fff , -1398px 917px #fff , 1985px 95px #fff , 43px 1052px #fff , 1221px 895px #fff , 1216px -1800px #fff , -1089px -21px #fff , -1765px 1809px #fff , 1489px -629px #fff , 370px -224px #fff , -1549px 440px #fff , -577px -1313px #fff , -197px 849px #fff , 1604px 13px #fff , 405px -1166px #fff , 689px 1912px #fff , -1165px 1501px #fff , 1336px 1090px #fff , -1914px -999px #fff , -1759px 1587px #fff , 349px 517px #fff , -1517px -830px #fff , -1930px -1970px #fff , -1396px -1996px #fff , 1100px 204px #fff , -710px -730px #fff , 1434px 963px #fff , -103px -561px #fff , 1989px -1206px #fff , -8px 827px #fff , 1587px 1465px #fff , -814px 1831px #fff , -723px -1029px #fff , 849px -1965px #fff , -1039px 903px #fff , -660px 966px #fff , 1071px -480px #fff;
  animation: star-rotate 150s linear infinite;
}

.star3 {
  width: 3px;
  height: 3px;
  box-shadow: 562px 1539px #fff , -329px -561px #fff , -1528px 1351px #fff , -463px 1095px #fff , -1266px 483px #fff , -1790px 1365px #fff , 1913px -1283px #fff , -914px -1761px #fff , -793px 256px #fff , 1881px 1754px #fff , -1494px -225px #fff , 929px 276px #fff , -461px 1953px #fff , 844px 438px #fff , 122px 1340px #fff , -258px 513px #fff , -1281px 1957px #fff , 658px -909px #fff , -670px -1768px #fff , -1542px 804px #fff , 1377px 1730px #fff , 1893px 1872px #fff , -134px 1070px #fff , 491px 764px #fff , -1482px 1803px #fff , -409px 619px #fff , -1174px -5px #fff , 295px -1495px #fff , 382px 1017px #fff , 281px -1850px #fff , 485px 88px #fff , 685px 1073px #fff , -294px 1300px #fff , -960px -1294px #fff , -821px -1410px #fff , -1502px 1289px #fff , 1142px 252px #fff , 456px -1638px #fff , -755px 1930px #fff , 1943px -611px #fff , -448px -24px #fff , -208px -1179px #fff , 1222px 900px #fff , -264px 399px #fff , 1384px -1077px #fff , -647px -1273px #fff , 142px -1878px #fff , 144px 837px #fff , 1144px 1790px #fff , 1124px -1727px #fff , -799px -136px #fff , 689px 221px #fff , 473px -434px #fff , 1642px -953px #fff , 160px -1467px #fff , 203px -378px #fff , -257px -1045px #fff , -378px -1390px #fff , -1878px 597px #fff , 1565px -69px #fff , -1273px 1505px #fff , -1486px 301px #fff , -42px 1781px #fff , -1001px -473px #fff , 1142px -223px #fff , 1263px 915px #fff , 1128px -226px #fff , -1274px -1279px #fff , -1107px 1056px #fff , -695px -961px #fff , 1685px 857px #fff , 1790px 1182px #fff , -1223px -1636px #fff , -1024px 757px #fff , -1081px 1447px #fff , 1958px -522px #fff , -1217px 1262px #fff , -922px 1572px #fff , 1441px -1884px #fff , -1884px -1907px #fff , -1337px -498px #fff , -1182px 74px #fff , 1225px 1064px #fff , 506px 419px #fff , -1373px -138px #fff , 1625px 1558px #fff , 996px 61px #fff , 477px 184px #fff , -499px 575px #fff , 143px -1930px #fff , -327px 8px #fff , 1391px 587px #fff , -1392px -664px #fff , 942px 325px #fff , -1822px 1357px #fff , 248px 1625px #fff , -1661px 110px #fff , -1693px -1652px #fff , -984px -1108px #fff , 1692px -1082px #fff , 1970px 721px #fff , 991px -440px #fff , 1251px -977px #fff , 1334px -1803px #fff , 1064px -1953px #fff , -1181px -543px #fff , -382px 956px #fff , -866px -139px #fff , 44px 121px #fff , 1644px 992px #fff , -1052px -485px #fff , 787px -1551px #fff , -785px -169px #fff , -1510px 1342px #fff , -1931px -65px #fff , 1510px 146px #fff , 1068px 843px #fff , -1943px -1200px #fff , 1991px 1302px #fff , -901px 69px #fff , -1591px 1058px #fff , 1298px 892px #fff , -1272px -496px #fff , 247px -929px #fff , 687px -802px #fff , 659px -1444px #fff , 1263px -733px #fff , 1819px 1601px #fff , 323px 1790px #fff , 145px 1375px #fff , -122px -1494px #fff , 1456px 1255px #fff , 1749px -1484px #fff , 673px 1884px #fff , -663px 234px #fff , 854px 1251px #fff , 544px 1204px #fff , 721px -286px #fff , 1826px 238px #fff , -539px -792px #fff , -351px 818px #fff , -955px 880px #fff , 1366px -1815px #fff , -1714px -307px #fff , -1356px 1824px #fff , 397px 1627px #fff , 1212px 321px #fff , 1786px -1351px #fff , -1602px -1135px #fff , -1512px -282px #fff , -1312px -1511px #fff , 1777px 295px #fff , -1561px -1008px #fff , -205px 1272px #fff , 1259px -681px #fff , 1142px -44px #fff , 1761px -931px #fff , 1760px -872px #fff , 496px 1555px #fff , 1268px 1063px #fff , -1913px -375px #fff , 698px -1391px #fff , 1376px 869px #fff , 777px -370px #fff , -1610px 420px #fff , -231px 893px #fff , -1326px 1870px #fff , -879px 1947px #fff , 1251px 41px #fff , 1240px -206px #fff , 399px -1053px #fff , -640px 681px #fff , 231px 139px #fff , 381px 19px #fff , -1239px -1280px #fff , -184px -836px #fff , -1204px 923px #fff , -517px -134px #fff , 769px -25px #fff , -1188px 509px #fff , 1369px -193px #fff , -648px -1747px #fff , 102px 772px #fff , -166px 759px #fff , -1471px 54px #fff , 602px -1509px #fff , -1398px 1633px #fff , -832px -429px #fff , 1560px 38px #fff , -1610px -1391px #fff , -1284px -765px #fff , -169px 950px #fff , 773px -549px #fff , -424px -1597px #fff , -1435px 1857px #fff , 1398px -1078px #fff , 884px -772px #fff , 792px -1711px #fff , 738px -792px #fff , 448px 1706px #fff , -779px 1534px #fff , -1697px 749px #fff , 646px 1551px #fff , -960px -818px #fff , -1159px 667px #fff , 4px 1659px #fff , 1003px 1194px #fff , -1599px -784px #fff , -1512px -1678px #fff , -1921px -111px #fff , 646px -1984px #fff , 1862px -664px #fff , 1632px -390px #fff , -857px 1774px #fff , -1591px -988px #fff , -1858px -630px #fff , -410px -1919px #fff , -790px -873px #fff , -1870px 847px #fff , -1437px -295px #fff , -410px -1874px #fff , 729px 721px #fff , 862px 517px #fff , -1706px 310px #fff , -1074px 1323px #fff , 1646px -1097px #fff , 1470px -1875px #fff , -489px -7px #fff , -351px -955px #fff , -1355px -1695px #fff , 1377px 999px #fff , -346px 440px #fff , -1931px 867px #fff , -868px -1855px #fff , -399px -1834px #fff , 305px 1648px #fff , 472px -1551px #fff , 423px 120px #fff , 1362px -1385px #fff , -662px 1927px #fff , -982px -109px #fff , 431px 1131px #fff , 1065px 976px #fff , 1403px -884px #fff , -333px 122px #fff , -1766px -539px #fff , -1206px -654px #fff , -1232px -1136px #fff , 400px 1245px #fff , 29px -1028px #fff , 636px 1756px #fff , -262px 387px #fff , -1731px -894px #fff , -1871px -484px #fff , -1183px -1489px #fff , -1177px -1786px #fff , -1651px 14px #fff , 1877px -223px #fff , 565px -802px #fff , 1686px 1489px #fff , 346px 144px #fff , 769px 718px #fff , -1057px -1415px #fff , -521px -302px #fff , 1589px -1959px #fff , 1453px 547px #fff , 410px 900px #fff , 1038px -729px #fff , -1682px -1591px #fff , -988px 1695px #fff , -1829px 229px #fff , -664px -417px #fff , -326px 422px #fff , -331px 1575px #fff , 551px -111px #fff , -1481px -432px #fff , -296px 250px #fff , -1259px -309px #fff , -486px -558px #fff , -1163px 1399px #fff , 1856px -139px #fff , -989px 1144px #fff , 1585px 1319px #fff , -1321px -658px #fff , -1538px 919px #fff , -428px -1500px #fff , -588px 258px #fff , 1769px -1050px #fff , 1664px 1501px #fff , 1044px -1080px #fff , 1957px -1106px #fff , -745px 265px #fff , 726px -1334px #fff , 1475px -1997px #fff , -1900px -869px #fff , -852px -1187px #fff , 1823px -701px #fff , 1379px 936px #fff , 787px 1395px #fff , 1560px 1000px #fff;
  animation: star-rotate 100s linear infinite;
}

@keyframes star-rotate {
  0% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(-360deg);
  }
}

.focused {
  color: #f961af;
  border: #f961af solid 3px;
}

.ease {
  width: 0px;
  height: 74px;
  background-color: #f961af;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
  -o-transition: .3s ease;
  -ms-transition: .3s ease;
  transition: .3s ease;
}

}
</style>
<body>
<div class="container">
    <div class="wrapper">
        <input type="radio" name="pure-nav" id="item-n" checked="checked">
        <section>
            <div class="transform">
                <div class="star1"></div>
                <div class="star2"></div>
                <div class="star3"></div>
                <h1 class="h1">Diwali Special</h1>
                <p id="para">
                    Diwali is one of the biggest festivals of Hindu. The festival indicates the victory of good over evil and knowledge over ignorance.
                    <br>
                
                    It is also known as the festival of lights. During this festival, the temples are illuminated as well as the houses are brightly illuminated.
                    <br>
                
                    The festival starts from home, that means the celebrants prepare themselves by cleaning the house,office and other places. Then at the climax of this festival they lighten up candles to the interior and exteriour of their places.
                    <br>
                </p>
            </div>
        </section>
    </div>
    <div class="hello" style="color: lime; font-size: 45px;">
        <div id="hello" ></div>	
        <div id="demo" style="color: lime; font-size: 25px;"></div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <script type="text/javascript">
    var name = prompt("Please enter your name", "CodeSpeedy");
    if (name != null) {
        document.getElementById("hello").innerHTML =
        "<br><br>Hello " + name + "<br>Wish You Happy Diwali";
    }
    if(name=="null"){
        document.getElementById("hello").innerHTML =
        "Wish You Happy Diwali by <a href=\"https://codespeedy.com/\">CodeSpeedy</a>";
    }

    // Set the date we're counting down to
    var countDownDate = new Date("Nov 14, 2020 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML ="In Advance <br>" +days + " Days " + hours + " Hours "
        + minutes + " Minutes " + seconds + " Seconds";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Enjoy Diwali";
        }
    }, 1000);
    </script>
    <script>
    //GoogleAnalyticsObject
    </script>
</body>
</html>
<!-- Mirrored from www.codespeedy.com/demophp/diwali/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Nov 2020 06:32:25 GMT -->

