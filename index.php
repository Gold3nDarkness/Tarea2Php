<?php
$columnas = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
$filas = [1,2,3,4,5,6,7,8,9];
$elemento=array(
    "Alcalinos"=> array(
        "Li",
        "Na",
        "K",
        "Rb",
        "Cs",
        "Fr"
    ),
    "Alcalinoterreos"=> array(
        "Be",
        "Mg",
        "Ca",
        "Sr",
        "Ba",
        "Ra"
    ),
    "Metales de Transicion"=> array(
        "Sc",
        "Ti",
        "V",
        "Cr",
        "Mn",
        "Fe",
        "Co",
        "Ni",
        "Cu",
        "Zn",
        "Y",
        "Zr",
        "Nb",
        "Mo",
        "Tc",
        "Ru",
        "Rh",
        "Pd",
        "Ag",
        "Cd",
        "Hf",
        "Ta",
        "W",
        "Re",
        "Os",
        "Ir",
        "Pt",
        "Au",
        "Hg",
        "Rf",
        "Db",
        "Sg",
        "Bh",
        "Hs",
        "Mt",
        "Ds",
        "Rg",
        "Cn"
    ),
    "Lantanidos"=>array(
        "La-Lu",
        "La",
        "Ce",
        "Pr",
        "Nd",
        "Pm",
        "Sm",
        "Eu",
        "Gd",
        "Tb",
        "Dy",
        "Ho",
        "Er",
        "Tm",
        "Yb",
        "Lu"
    ),
    "Actinidos"=>array(
        "Ac-Lr",
        "Ac",
        "Th",
        "Pa",
        "U",
        "Np",
        "Pu",
        "Am",
        "Cm",
        "Bk",
        "Cf",
        "Es",
        "Fm",
        "Md",
        "No",
        "Lr"
    ),
    "Otros Metales"=> array(
        "Al",
        "Ga",
        "In",
        "Sn",
        "Tl",
        "Pb",
        "Bi",
        "Nh",
        "Fl",
        "Mc",
        "Lv"
    ),
    "Metaloides"=>array(
        "B",
        "Si",
        "Ge",
        "As",
        "Sb",
        "Te",
        "Po"
    ),
    "Otros no Metales"=>array(
        "H",
        "C",
        "N",
        "O",
        "P",
        "S",
        "Se"
    ),
    "Halogenos"=>array(
        "F",
        "Cl",
        "Br",
        "I",
        "At",
        "Ts"
    ),
    "Gases Nobles"=>array(
        "He",
        "Ne",
        "Ar",
        "Kr",
        "Xe",
        "Rn",
        "Og"
    )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" type="text/css" href="Style.css">

    <title>Tabla Periodica</title>

</head>
<body>
    <?php echo "<h1 class=titulo>Tabla Periodica</h1>"?>
<!-- Columnas -->
<?php foreach($columnas as $columna): ?>

<!--<div class="columnas"> <?php echo "<span>{$columna}</span>" ?> </div>-->

<?php endforeach ?>

<!-- Fin Columnas -->
<div></div>

<?php foreach($filas as $fila): ?>

<!--<div class="columnas"> <?php echo "<span>{$fila}</span>" ?> </div>-->

<?php foreach($columnas as $columna): ?>

<?php if($columna == 0){
     continue; }
     $posicion = $columna * $fila;
     ?>

        <?php if($columna==1&&$fila==1):?>
        <?php if(!empty($elemento["Otros no Metales"][0])){echo "<div class=NoMetales> <span> {$elemento["Otros no Metales"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        <?php elseif($columna==18&&$fila==1):?>
        <?php if(!empty($elemento["Gases Nobles"][0])){echo "<div class=GasesNobles> <span> {$elemento["Gases Nobles"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        <?php elseif($columna==1&&$fila==2):?>
        <?php if(!empty($elemento["Alcalinos"][0])){echo "<div class=Alcalinos> <span> {$elemento["Alcalinos"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==3):?>
        <?php if(!empty($elemento["Alcalinos"][1])){echo "<div class=Alcalinos> <span> {$elemento["Alcalinos"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==4):?>
        <?php if(!empty($elemento["Alcalinos"][2])){echo "<div class=Alcalinos> <span> {$elemento["Alcalinos"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==5):?>
        <?php if(!empty($elemento["Alcalinos"][3])){echo "<div class=Alcalinos> <span> {$elemento["Alcalinos"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==6):?>
        <?php if(!empty($elemento["Alcalinos"][4])){echo "<div class=Alcalinos> <span> {$elemento["Alcalinos"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==7):?>
        <?php if(!empty($elemento["Alcalinos"][5])){echo "<div class=Alcalinos> <span> {$elemento["Alcalinos"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>

        
        <?php elseif($columna==2&&$fila==2):?>
        <?php if(!empty($elemento["Alcalinoterreos"][0])){echo "<div class=Alcalinoterreos> <span> {$elemento["Alcalinoterreos"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==3):?>
        <?php if(!empty($elemento["Alcalinoterreos"][1])){echo "<div class=Alcalinoterreos> <span> {$elemento["Alcalinoterreos"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==4):?>
        <?php if(!empty($elemento["Alcalinoterreos"][2])){echo "<div class=Alcalinoterreos> <span> {$elemento["Alcalinoterreos"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==5):?>
        <?php if(!empty($elemento["Alcalinoterreos"][3])){echo "<div class=Alcalinoterreos> <span> {$elemento["Alcalinoterreos"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==6):?>
        <?php if(!empty($elemento["Alcalinoterreos"][4])){echo "<div class=Alcalinoterreos> <span> {$elemento["Alcalinoterreos"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==7):?>
        <?php if(!empty($elemento["Alcalinoterreos"][5])){echo "<div class=Alcalinoterreos> <span> {$elemento["Alcalinoterreos"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
 
        
        <?php elseif($columna==3&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][0])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][1])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][2])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][3])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][4])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][5])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][6])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][6]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][7])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][7]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][8])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][8]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==4):?>
        <?php if(!empty($elemento["Metales de Transicion"][9])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][9]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==3&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][10])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][10]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][11])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][11]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][12])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][12]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][13])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][13]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][14])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][14]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][15])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][15]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][16])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][16]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][17])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][17]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][18])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][18]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==5):?>
        <?php if(!empty($elemento["Metales de Transicion"][19])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][19]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][20])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][20]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][21])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][21]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][22])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][22]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][23])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][23]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][24])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][24]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][25])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][25]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][26])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][26]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][27])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][27]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==6):?>
        <?php if(!empty($elemento["Metales de Transicion"][28])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][28]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][29])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][29]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][30])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][30]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][31])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][31]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][32])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][32]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][33])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][33]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][34])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][34]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][35])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][35]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][36])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][36]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==7):?>
        <?php if(!empty($elemento["Metales de Transicion"][37])){echo "<div class=Metales> <span> {$elemento["Metales de Transicion"][37]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
  
        
        <?php elseif($columna==13&&$fila==2):?>
        <?php if(!empty($elemento["Metaloides"][0])){echo "<div class=Metaloides> <span> {$elemento["Metaloides"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==3):?>
        <?php if(!empty($elemento["Metaloides"][1])){echo "<div class=Metaloides> <span> {$elemento["Metaloides"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==4):?>
        <?php if(!empty($elemento["Metaloides"][2])){echo "<div class=Metaloides> <span> {$elemento["Metaloides"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==4):?>
        <?php if(!empty($elemento["Metaloides"][3])){echo "<div class=Metaloides> <span> {$elemento["Metaloides"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==5):?>
        <?php if(!empty($elemento["Metaloides"][4])){echo "<div class=Metaloides> <span> {$elemento["Metaloides"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==5):?>
        <?php if(!empty($elemento["Metaloides"][5])){echo "<div class=Metaloides> <span> {$elemento["Metaloides"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==6):?>
        <?php if(!empty($elemento["Metaloides"][6])){echo "<div class=Metaloides> <span> {$elemento["Metaloides"][6]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
   
       
        <?php elseif($columna==13&&$fila==3):?>
        <?php if(!empty($elemento["Otros Metales"][0])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==4):?>
        <?php if(!empty($elemento["Otros Metales"][1])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==5):?>
        <?php if(!empty($elemento["Otros Metales"][2])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==5):?>
        <?php if(!empty($elemento["Otros Metales"][3])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==6):?>
        <?php if(!empty($elemento["Otros Metales"][4])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==6):?>
        <?php if(!empty($elemento["Otros Metales"][5])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==6):?>
        <?php if(!empty($elemento["Otros Metales"][6])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][6]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==7):?>
        <?php if(!empty($elemento["Otros Metales"][7])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][7]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==7):?>
        <?php if(!empty($elemento["Otros Metales"][8])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][8]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==7):?>
        <?php if(!empty($elemento["Otros Metales"][9])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][9]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==7):?>
        <?php if(!empty($elemento["Otros Metales"][10])){echo "<div class=OtrosMetales> <span> {$elemento["Otros Metales"][10]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>

        
        <?php elseif($columna==14&&$fila==2):?>
        <?php if(!empty($elemento["Otros no Metales"][1])){echo "<div class=NoMetales> <span> {$elemento["Otros no Metales"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==2):?>
        <?php if(!empty($elemento["Otros no Metales"][2])){echo "<div class=NoMetales> <span> {$elemento["Otros no Metales"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==2):?>
        <?php if(!empty($elemento["Otros no Metales"][3])){echo "<div class=NoMetales> <span> {$elemento["Otros no Metales"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==3):?>
        <?php if(!empty($elemento["Otros no Metales"][4])){echo "<div class=NoMetales> <span> {$elemento["Otros no Metales"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==3):?>
        <?php if(!empty($elemento["Otros no Metales"][5])){echo "<div class=NoMetales> <span> {$elemento["Otros no Metales"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==4):?>
        <?php if(!empty($elemento["Otros no Metales"][6])){echo "<div class=NoMetales> <span> {$elemento["Otros no Metales"][6]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>

        
        <?php elseif($columna==17&&$fila==2):?>
        <?php if(!empty($elemento["Halogenos"][0])){echo "<div class=Halogenos> <span> {$elemento["Halogenos"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==3):?>
        <?php if(!empty($elemento["Halogenos"][1])){echo "<div class=Halogenos> <span> {$elemento["Halogenos"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==4):?>
        <?php if(!empty($elemento["Halogenos"][2])){echo "<div class=Halogenos> <span> {$elemento["Halogenos"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==5):?>
        <?php if(!empty($elemento["Halogenos"][3])){echo "<div class=Halogenos> <span> {$elemento["Halogenos"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==6):?>
        <?php if(!empty($elemento["Halogenos"][4])){echo "<div class=Halogenos> <span> {$elemento["Halogenos"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==7):?>
        <?php if(!empty($elemento["Halogenos"][5])){echo "<div class=Halogenos> <span> {$elemento["Halogenos"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>

        
        <?php elseif($columna==18&&$fila==2):?>
        <?php if(!empty($elemento["Gases Nobles"][1])){echo "<div class=GasesNobles> <span> {$elemento["Gases Nobles"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==3):?>
        <?php if(!empty($elemento["Gases Nobles"][2])){echo "<div class=GasesNobles> <span> {$elemento["Gases Nobles"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==4):?>
        <?php if(!empty($elemento["Gases Nobles"][3])){echo "<div class=GasesNobles> <span> {$elemento["Gases Nobles"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==5):?>
        <?php if(!empty($elemento["Gases Nobles"][4])){echo "<div class=GasesNobles> <span> {$elemento["Gases Nobles"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==6):?>
        <?php if(!empty($elemento["Gases Nobles"][5])){echo "<div class=GasesNobles> <span> {$elemento["Gases Nobles"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==7):?>
        <?php if(!empty($elemento["Gases Nobles"][6])){echo "<div class=GasesNobles> <span> {$elemento["Gases Nobles"][6]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>


        <?php elseif($columna==3&&$fila==6):?>
        <?php if(!empty($elemento["Lantanidos"][0])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][1])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][2])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][3])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][4])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][5])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][6])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][6]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][7])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][7]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][8])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][8]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][9])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][9]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][10])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][10]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][11])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][11]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][12])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][12]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][13])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][13]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][14])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][14]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==8):?>
        <?php if(!empty($elemento["Lantanidos"][15])){echo "<div class=Lantanidos> <span> {$elemento["Lantanidos"][15]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        <?php elseif($columna==3&&$fila==7):?>
        <?php if(!empty($elemento["Actinidos"][0])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][0]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>  
        <?php elseif($columna==4&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][1])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][1]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][2])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][2]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][3])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][3]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][4])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][4]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][5])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][5]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][6])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][6]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][7])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][7]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][8])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][8]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][9])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][9]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][10])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][10]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][11])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][11]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][12])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][12]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?> 
        <?php elseif($columna==16&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][13])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][13]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?> 
        <?php elseif($columna==17&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][14])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][14]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?> 
        <?php elseif($columna==18&&$fila==9):?>
        <?php if(!empty($elemento["Actinidos"][15])){echo "<div class=Actinidos> <span> {$elemento["Actinidos"][15]} </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>

        <?php else:?>
        <div class="columnas-block"> <?php echo "<span> &nbsp; </span>" ?> </div>
        <?php endif ?>
   
    
<?php endforeach ?>
<div></div>
<?php endforeach ?>
</body>
</html>