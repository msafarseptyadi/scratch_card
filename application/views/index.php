<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta property="og:url"           content="http://game.promolbs.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="POPGame Scracth & Win" />
    <meta property="og:description"   content="Yuk Berlangganan POPGame sekarang! Jawab pertanyaannya, Kumpulkan POIN dan tukar dengan Hadiah PULSA atau Kupon Misteri POPGame! Promo ini hanya berlaku untuk kamu pengguna XL-AXIS (INFO: *500*5456#)" />
    <meta property="og:image"         content="<?=base_url("assets/images/popgame-scratchwin.svg")?>" />
    <title>POPGame - Scratch & Win</title>
</head>
<style>
    body {
        margin:0;
        padding:0;
        font-family:'Arial';
        width:100%;
        height:100%;
        overflow: hidden;
        background: linear-gradient(90deg, rgba(238,58,70,1) 0%, rgba(162,33,113,1) 100%) fixed;
    }
    .vcenter {
        min-height: 100%; 
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow:hidden !important;
    }
    .containerhome{
        width:100%;
        text-align:center;
    }

    .rowhome{
        background-color:white;
        padding:20px;
        margin:20px;
        border-radius:10px;
    }

    .button{
        background-color:yellow;
        border-radius:10px;
        padding:20px;
        margin:20px;
        font-weight:bold;
        font-size:20px;
    }

    small{
        font-size:12px;
        font-weight:100;
    }

    h1{
        font-weight:bold;
        font-size:20px !important;
    }

    .giftbox{
        max-width:400px;
    }
    
</style>
<body>
    <div class="vcenter">
        <div class="containerhome">
            <img src="<?=base_url("assets/images/popgame-scratchwin.svg")?>" width="200px" alt="">
            <div class="rowhome">
                <p>Tukarkan POIN POPGAME kamu di *500*5456# sekarang, ambil KUPON kamu, GOSOK dan dapatkan HADIAH MISTERI dari POPGAME!</p>
                <div><img src="<?=base_url("assets/images/giftbox2.png")?>" class="giftbox" width="100%" alt=""></div>
                <!-- <h1>GET LINK > SCRATCH > WIN!!!</h1> -->
            </div>
            <div class="button">
                *500*5456# <br><small><i>*Khusus Pengguna XL & Axis</i></small> 
            </div>
        </div>
    </div>
</body>
</html>