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
        "Lr",
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
        <?php if(array_search("H",$elemento["Otros no Metales"])==0){echo "<div class=NoMetales> <span> H </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        <?php elseif($columna==18&&$fila==1):?>
        <?php if(array_search("He",$elemento["Gases Nobles"])==0){echo "<div class=GasesNobles> <span> He </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        <?php elseif($columna==1&&$fila==2):?>
        <?php if(array_search("Li",$elemento["Alcalinos"])==0){echo "<div class=Alcalinos> <span> Li </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==3):?>
        <?php if(array_search("Na",$elemento["Alcalinos"])!=null){echo "<div class=Alcalinos> <span> Na </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==4):?>
        <?php if(array_search("K",$elemento["Alcalinos"])!=null){echo "<div class=Alcalinos> <span> K </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==5):?>
        <?php if(array_search("Rb",$elemento["Alcalinos"])!=null){echo "<div class=Alcalinos> <span> Rb </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==6):?>
        <?php if(array_search("Cs",$elemento["Alcalinos"])!=null){echo "<div class=Alcalinos> <span> Cs </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==1&&$fila==7):?>
        <?php if(array_search("Fr",$elemento["Alcalinos"])!=null){echo "<div class=Alcalinos> <span> Fr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>

        
        <?php elseif($columna==2&&$fila==2):?>
        <?php if(array_search("Be",$elemento["Alcalinoterreos"])==0){echo "<div class=Alcalinoterreos> <span> Be </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==3):?>
        <?php if(array_search("Mg",$elemento["Alcalinoterreos"])!=null){echo "<div class=Alcalinoterreos> <span> Mg </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==4):?>
        <?php if(array_search("Ca",$elemento["Alcalinoterreos"])!=null){echo "<div class=Alcalinoterreos> <span> Ca </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==5):?>
        <?php if(array_search("Sr",$elemento["Alcalinoterreos"])!=null){echo "<div class=Alcalinoterreos> <span> Sr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==6):?>
        <?php if(array_search("Ba",$elemento["Alcalinoterreos"])!=null){echo "<div class=Alcalinoterreos> <span> Ba </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==2&&$fila==7):?>
        <?php if(array_search("Ra",$elemento["Alcalinoterreos"])!=null){echo "<div class=Alcalinoterreos> <span> Ra </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
 
        
        <?php elseif($columna==3&&$fila==4):?>
        <?php if(array_search("Sc",$elemento["Metales de Transicion"])==0){echo "<div class=Metales> <span> Sc </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==4):?>
        <?php if(array_search("Ti",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Ti </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==4):?>
        <?php if(array_search("V",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> V </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==4):?>
        <?php if(array_search("Cr",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Cr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==4):?>
        <?php if(array_search("Mn",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Mn </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==4):?>
        <?php if(array_search("Fe",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Fe </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==4):?>
        <?php if(array_search("Co",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Co </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==4):?>
        <?php if(array_search("Ni",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Ni </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==4):?>
        <?php if(array_search("Cu",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Cu </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==4):?>
        <?php if(array_search("Zn",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Zn </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==3&&$fila==5):?>
        <?php if(array_search("Y",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Y </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==5):?>
        <?php if(array_search("Zr",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Zr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==5):?>
        <?php if(array_search("Nb",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Nb </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==5):?>
        <?php if(array_search("Mo",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Mo </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==5):?>
        <?php if(array_search("Tc",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Tc </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==5):?>
        <?php if(array_search("Ru",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Ru </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==5):?>
        <?php if(array_search("Rh",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Rh </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==5):?>
        <?php if(array_search("Pd",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Pd </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==5):?>
        <?php if(array_search("Ag",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Ag </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==5):?>
        <?php if(array_search("Cd",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Cd </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==6):?>
        <?php if(array_search("Hf",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Hf </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==6):?>
        <?php if(array_search("Ta",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Ta </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==6):?>
        <?php if(array_search("W",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> W </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==6):?>
        <?php if(array_search("Re",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Re </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==6):?>
        <?php if(array_search("Os",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Os </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==6):?>
        <?php if(array_search("Ir",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Ir </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==6):?>
        <?php if(array_search("Pt",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Pt </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==6):?>
        <?php if(array_search("Au",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Au </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==6):?>
        <?php if(array_search("Hg",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Hg </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==7):?>
        <?php if(array_search("Rf",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span>Rf </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==7):?>
        <?php if(array_search("Db",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Db </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==7):?>
        <?php if(array_search("Sg",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Sg </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==7):?>
        <?php if(array_search("Bh",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Bh </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==7):?>
        <?php if(array_search("Hs",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Hs </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==7):?>
        <?php if(array_search("Mt",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Mt </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==7):?>
        <?php if(array_search("Ds",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Ds </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==7):?>
        <?php if(array_search("Rg",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Rg </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==7):?>
        <?php if(array_search("Cn",$elemento["Metales de Transicion"])!=null){echo "<div class=Metales> <span> Cn </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
  
        
        <?php elseif($columna==13&&$fila==2):?>
        <?php if(array_search("B",$elemento["Metaloides"])==0){echo "<div class=Metaloides> <span> B </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==3):?>
        <?php if(array_search("Si",$elemento["Metaloides"])!=null){echo "<div class=Metaloides> <span> Si </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==4):?>
        <?php if(array_search("Ge",$elemento["Metaloides"])!=null){echo "<div class=Metaloides> <span> Ge </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==4):?>
        <?php if(array_search("As",$elemento["Metaloides"])!=null){echo "<div class=Metaloides> <span> As </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==5):?>
        <?php if(array_search("Sb",$elemento["Metaloides"])!=null){echo "<div class=Metaloides> <span> Sb </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==5):?>
        <?php if(array_search("Te",$elemento["Metaloides"])!=null){echo "<div class=Metaloides> <span> Te </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==6):?>
        <?php if(array_search("Po",$elemento["Metaloides"])!=null){echo "<div class=Metaloides> <span> Po </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
   
       
        <?php elseif($columna==13&&$fila==3):?>
        <?php if(array_search("Al",$elemento["Otros Metales"])==0){echo "<div class=OtrosMetales> <span> Al </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==4):?>
        <?php if(array_search("Ga",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Ga </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==5):?>
        <?php if(array_search("In",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> In </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==5):?>
        <?php if(array_search("Sn",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Sn </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==6):?>
        <?php if(array_search("Tl",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Tl </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==6):?>
        <?php if(array_search("Pb",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Pb </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==6):?>
        <?php if(array_search("Bi",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Bi </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==7):?>
        <?php if(array_search("Nh",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Nh </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==7):?>
        <?php if(array_search("Fl",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Fl </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==7):?>
        <?php if(array_search("Mc",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Mc </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==7):?>
        <?php if(array_search("Lv",$elemento["Otros Metales"])!=null){echo "<div class=OtrosMetales> <span> Lv </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        
        <?php elseif($columna==14&&$fila==2):?>
        <?php if(array_search("C",$elemento["Otros no Metales"])!=null){echo "<div class=NoMetales> <span> C </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==2):?>
        <?php if(array_search("N",$elemento["Otros no Metales"])!=null){echo "<div class=NoMetales> <span> N </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==2):?>
        <?php if(array_search("O",$elemento["Otros no Metales"])!=null){echo "<div class=NoMetales> <span> O </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==3):?>
        <?php if(array_search("P",$elemento["Otros no Metales"])!=null){echo "<div class=NoMetales> <span> P </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==3):?>
        <?php if(array_search("S",$elemento["Otros no Metales"])!=null){echo "<div class=NoMetales> <span> S </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==4):?>
        <?php if(array_search("Se",$elemento["Otros no Metales"])!=null){echo "<div class=NoMetales> <span> Se </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        <?php elseif($columna==17&&$fila==2):?>
        <?php if(array_search("F",$elemento["Halogenos"])==0){echo "<div class=Halogenos> <span> F </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==3):?>
        <?php if(array_search("Cl",$elemento["Halogenos"])!=null){echo "<div class=Halogenos> <span> Cl </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==4):?>
        <?php if(array_search("Br",$elemento["Halogenos"])!=null){echo "<div class=Halogenos> <span> Br </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==5):?>
        <?php if(array_search("I",$elemento["Halogenos"])!=null){echo "<div class=Halogenos> <span> I </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==6):?>
        <?php if(array_search("At",$elemento["Halogenos"])!=null){echo "<div class=Halogenos> <span> At </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==7):?>
        <?php if(array_search("Ts",$elemento["Halogenos"])!=null){echo "<div class=Halogenos> <span> Ts </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        
        <?php elseif($columna==18&&$fila==2):?>
        <?php if(array_search("Ne",$elemento["Gases Nobles"])!=null){echo "<div class=GasesNobles> <span> Ne </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==3):?>
        <?php if(array_search("Ar",$elemento["Gases Nobles"])!=null){echo "<div class=GasesNobles> <span> Ar </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==4):?>
        <?php if(array_search("Kr",$elemento["Gases Nobles"])!=null){echo "<div class=GasesNobles> <span> Kr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==5):?>
        <?php if(array_search("Xe",$elemento["Gases Nobles"])!=null){echo "<div class=GasesNobles> <span> Xe </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==6):?>
        <?php if(array_search("Rn",$elemento["Gases Nobles"])!=null){echo "<div class=GasesNobles> <span> Rn </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==7):?>
        <?php if(array_search("Og",$elemento["Gases Nobles"])!=null){echo "<div class=GasesNobles> <span> Og </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        

        <?php elseif($columna==3&&$fila==6):?>
        <?php if(array_search("La-Lu",$elemento["Lantanidos"])==0){echo "<div class=Lantanidos> <span> La-Lu </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==4&&$fila==8):?>
        <?php if(array_search("La",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> La </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==8):?>
        <?php if(array_search("Ce",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Ce </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==8):?>
        <?php if(array_search("Pr",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Pr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==8):?>
        <?php if(array_search("Nd",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Nd </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==8):?>
        <?php if(array_search("Pm",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Pm </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==8):?>
        <?php if(array_search("Sm",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Sm </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==8):?>
        <?php if(array_search("Eu",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Eu </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==8):?>
        <?php if(array_search("Gd",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Gd </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==8):?>
        <?php if(array_search("Tb",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Tb </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==8):?>
        <?php if(array_search("Dy",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Dy </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==8):?>
        <?php if(array_search("Ho",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Ho </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==8):?>
        <?php if(array_search("Er",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Er </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==16&&$fila==8):?>
        <?php if(array_search("Tm",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Tm </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==17&&$fila==8):?>
        <?php if(array_search("Yb",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Yb </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==18&&$fila==8):?>
        <?php if(array_search("Lu",$elemento["Lantanidos"])!=null){echo "<div class=Lantanidos> <span> Lu </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        
        <?php elseif($columna==3&&$fila==7):?>
        <?php if(array_search("Ac-Lr",$elemento["Actinidos"])==0){echo "<div class=Actinidos> <span> Ac-Lr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>  
        <?php elseif($columna==4&&$fila==9):?>
        <?php if(array_search("Ac",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Ac </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==5&&$fila==9):?>
        <?php if(array_search("Th",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Th </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==6&&$fila==9):?>
        <?php if(array_search("Pa",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Pa </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==7&&$fila==9):?>
        <?php if(array_search("U",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> U </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==8&&$fila==9):?>
        <?php if(array_search("Np",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Np </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==9&&$fila==9):?>
        <?php if(array_search("Pu",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Pu </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==10&&$fila==9):?>
        <?php if(array_search("Am",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Am </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==11&&$fila==9):?>
        <?php if(array_search("Cm",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Cm </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==12&&$fila==9):?>
        <?php if(array_search("Bk",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Bk </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==13&&$fila==9):?>
        <?php if(array_search("Cf",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Cf </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==14&&$fila==9):?>
        <?php if(array_search("Es",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Es </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>
        <?php elseif($columna==15&&$fila==9):?>
        <?php if(array_search("Fm",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Fm </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?> 
        <?php elseif($columna==16&&$fila==9):?>
        <?php if(array_search("Md",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Md </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?> 
        <?php elseif($columna==17&&$fila==9):?>
        <?php if(array_search("No",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> No </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?> 
        <?php elseif($columna==18&&$fila==9):?>
        <?php if(array_search("Lr",$elemento["Actinidos"])!=null){echo "<div class=Actinidos> <span> Lr </span></div> "; } else{ echo "<div class=columnas-block> <span> &nbsp; </span></div>" ;} ?>

        <?php else:?>
        <div class="columnas-block"> <?php echo "<span> &nbsp; </span>" ?> </div>
        <?php endif ?>
   
    
<?php endforeach ?>
<div></div>
<?php endforeach ?>
</body>
</html>