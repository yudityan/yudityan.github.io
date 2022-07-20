<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kalkulator</title>
<style>
    html {
        background-image: url(background.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    * {
        font-family: 'TimesNewRoman';
    }
    body {
        text-align: center;
    }
    .container {
        width: 320px;
        background-color: white;
        margin: 30px auto;
    }
    button {
        width: 100%;
        height: 50px;
        font-size: 22px;
        background-color: #F0F8FF;
        border: none;
    }

    #input {
        height: 60px;
        font-size: 40px;
        text-align: right;
        padding-right: 16px;
        background-color: #F0FFFF;
    }
    .header {
        text-align: center;
    }
</style>
</head>
<body>
<div class="header"><hr width=650 color=black noshade></div>
<p><h2>RESPONSI PRAKTIKUM PEMROGRAMAN WEB</h2></p>
<div class="header"><hr width=650 color=black noshade></div>
<div class="container">
    <table border="1" cellspacing="0" width="100%" height="50px" border-color="white">
        <tr>
            <td colspan="4" id="input" style="width: ">0</td>
        </tr>
        <tr>
            <td colspan="3"><button id="clear" onclick="pushBtn(this);">C</button></td>
            <td><button onclick="pushBtn(this);">/</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">7</button></td>
            <td><button onclick="pushBtn(this);">8</button></td>
            <td><button onclick="pushBtn(this);">9</button></td>
            <td><button onclick="pushBtn(this);">*</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">4</button></td>
            <td><button onclick="pushBtn(this);">5</button></td>
            <td><button onclick="pushBtn(this);">6</button></td>
            <td><button onclick="pushBtn(this);">-</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">1</button></td>
            <td><button onclick="pushBtn(this);">2</button></td>
            <td><button onclick="pushBtn(this);">3</button></td>
            <td><button onclick="pushBtn(this);">+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
            <td><button onclick="pushBtn(this);">.</button></td>
            <td><button onclick="pushBtn(this);">=</button></td>
        </tr>
    </table>
</div>
 
<script>
    var input = document.getElementById('input');
     
    function pushBtn(obj) {
         
        var pushed = obj.innerHTML;
         
        if (pushed == '=') {
            input.innerHTML = eval(input.innerHTML);
             
        } 
        else if (pushed == 'C') {
            input.innerHTML = '0';
        } 
        else {
            if (input.innerHTML == '0') {
                input.innerHTML = pushed;  
            } 
            else {
                input.innerHTML += pushed;   
            }
        }
    }
</script>
</body>
</html>

<?php 
    $hari = date("d");
    $bulan = date("m");
    $tahun = date("Y");
    $jumlahhari = date("t", mktime(0,0,0,$bulan, $hari, $tahun));
?>
<?php 
    switch ($bulan) {
        case 1:
            $nmbulan = "Januari";
            break;
        case 2:
            $nmbulan = "Februari";
            break;
        case 3:
            $nmbulan = "Maret";
            break;
        case 4:
            $nmbulan = "April";
            break;
        case 5:
            $nmbulan = "Mei";
            break;
        case 6:
            $nmbulan = "Juni";
            break;
        case 7:
            $nmbulan = "Juli";
            break;
        case 8:
            $nmbulan = "Agustus";
            break;
        case 9:
            $nmbulan = "September";
            break;
        case 10:
            $nmbulan = "Oktober";
            break;
        case 11:
            $nmbulan = "November";
            break;
        case 12:
            $nmbulan = "Desember";
            break;  
    }
    
    echo("<center><h1>$nmbulan $tahun</h1></center>");
 ?>
 <table style="border:2px solid #000000" align="center" cellpadding="10">
    <tr bgcolor="#808080">
        <td align="center"><font color="#FF0000">Min</font></td>
        <td align="center">Sen</td>
        <td align="center">Sel</td>
        <td align="center">Rab</td>
        <td align="center">Kam</td>
        <td align="center">Jum</td>
        <td align="center">Sab</td>
    </tr>
<?php 
    $s = date("w", mktime(0,0,0,$bulan,1,$tahun));
    for ($ds=1; $ds<=$s ; $ds++) { 
        echo("<td></td>");
    }

    for ($d=1; $d<=$jumlahhari; $d++) { 
        if (date("w", mktime(0,0,0,$bulan,$d,$tahun)) == 0) {
            echo("<tr>");
        }
        $warna= "#000000";

        if (date("l", mktime(0,0,0,$bulan,$d,$tahun)) == "Sunday") {
            $warna="#FF0000";
        }
        echo ("<td align=center valign=middle><span style=\"color:$warna\">$d</span></td>");

        if (date("w", mktime(0,0,0,$bulan,$d,$tahun)) == 6) {
            echo ("</tr>");
        }
    }
    echo "</table>"
 ?>