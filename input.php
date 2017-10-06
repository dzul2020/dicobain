<?php

include "konek.php";
?>
<html>
<head>
 <title> Registrasi Tamu </title>
 <link href ="css_submit.css" rel="stylesheet" type="text/css">
 
 
 <style type="text/css">
<!--
.style5 {font-size: 24px}
.style7 {font-size: 24px; font-weight: bold; }
.style8 {
	font-size: 36px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
body {
	background-image: url(../generico-9909-9014942-1-product.jpg);
}
-->
 </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body style = 'margin : 20px; font : 16px arial;'>
 <center>
 <p align="center" class="style8">DAFTAR BUKU TAMU</p>
 <form method = 'POST' action = 'simpan.php'>
   <div align="center">
     <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
       <tr>
         <td bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"><span class="style7"> Nama </span></td>
    <td width = '5' align = 'center' bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"><span class="style7"> : </span></td>
    <td bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"> <input name = 'nama' type = 'text' placeholder='Nama' /> </td>
    </tr>
       <tr>
         <td bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"><span class="style7"> Email </span></td>
    <td align = 'center' bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"><span class="style7"> : </span></td>
    <td bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"> <input name = 'email' type = 'text' placeholder='Email' /> </td>
    </tr>
       <tr>
         <td bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"><span class="style7"> Komentar </span></td>
    <td width = '5' align = 'center' bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"><span class="style7"> : </span></td>
    <td bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5"><span class="style7">
      <textarea name = 'komentar' placeholder='komentar' ></textarea>
      </span> </td>
   </tr>
      
       <tr>
         <td colspan = '3' align = 'center' bordercolor="#FFFFFF" background="../3-Piece-Canvas-Wall-Art-Wall-Pictures-Modern-Wall-Painting-font-b-Rose-b-font-Flowers.jpg" class="style5">
           <span class="style7">
           <input type = 'submit' name = 'submit' value = 'Masukkan'/>
           <input type = 'reset' name = 'Reset' value = 'Reset' /> 
         </span></td>
   </tr>
     </table>
     <a href = 'index.php'> Kembali </a>
   </div>
 </form>
</body>
</html>  