<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender bos</title>
    <link rel="stylesheet" href="stail.css">


</head>

<body>
    <div class="base" style="width: 100%;height:100vh;background-color:brown;overflow:scroll; ">
        <div class="btn" style="position: relative;">
            <form action="" method="POST">
                <button id="control1" type="submit" name="next" style=" margin-top:250px; margin-left:1000px; position:absolute; padding:6px; border-radius:20px ; border:1px solid blue ; font-size:20px">></button>
                <button id="control2" type="submit" name="refuse" style="  margin-top:250px;margin-left:320px; position:absolute ;   padding:6px; border-radius:20px ; border:1px solid blue ; font-size:20px"><</button>

            </form>
        </div>
        <div class="base-kal" style=" display:flex;flex-direction:column;  width: 600px; height: 400px; border:1px solid white; margin-left:auto; margin-right:auto; margin-top:80px">
            <div class="head-content" style="border:1px solid white; width:100%;height:100px;gap:0px; display:flex; flex-direction:column;">
                <div class="bt">
                    <div class="bulan">
                        <?php
                        include "control.php";
                        $mounth = isiBulan();

                        ?>
                        <h2><?php echo $mounth ?></h2>
                    </div>
                    <div class="tahun">
                        <h1>2025</h1>
                    </div>
                </div>
                <div class="hari" style="display: flex;flex-direction:row;justify-content:space-around; align-items:center; margin-bottom:5px;">
                    <span>Minggu</span>
                    <span>Senin</span>
                    <span>Selasa</span>
                    <span>Rabu</span>
                    <span>Kamis</span>
                    <span>Jumat</span>
                    <span>Sabtu</span>
                </div>
            </div>
            <div class="content">
                <div class="tanggal">
                    <div class="row">

                        <?php
                        // include "control.php";


                        $tanggal = read();

                        ?>
                        <div class="column"><span ><?php echo $tanggal[0] ?></span></div>
                        <div class="column"><span><?php echo $tanggal[1] ?></span></div>
                        <div class="column"><span><?php echo $tanggal[2] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[3] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[4] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[5] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[6] ?> </span></div>
                    </div>
                    <div class="row">
                        <div class="column"><span  ><?php echo $tanggal[7] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[8] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[9] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[10] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[11] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[12] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[13] ?> </span></div>
                    </div>
                    <div class="row">
                        <div class="column"><span  ><?php echo $tanggal[14] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[15] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[16] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[17] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[18] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[19] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[20] ?> </span></div>
                    </div>
                    <div class="row">
                        <div class="column"><span  ><?php echo $tanggal[21] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[22] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[23] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[24] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[25] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[26] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[27] ?> </span></div>
                    </div>
                    <div class="row">
                        <div class="column"><span  ><?php echo $tanggal[28] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[29] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[30] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[31] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[32] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[33] ?> </span></div>
                        <div class="column"><span><?php echo $tanggal[34] ?> </span></div>
                    </div>
                    <div class="row1">
                        <div class="column"><span  ><?php echo $tanggal[35] ?> </span></div>
                        <div class="column"><span  ><?php echo $tanggal[36] ?> </span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>