<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>POPGame - Scratch & Win</title>
</head>
<style>
    body {
        margin:0;
        padding:0;
        font-family:'Arial';
        width:100%;
        height:100%;
        overflow-x: hidden;
        background: linear-gradient(90deg, rgba(238,58,70,1) 0%, rgba(162,33,113,1) 100%) fixed;
    }
    /* .vcenter {
        min-height: 100%; 
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow:hidden !important;
    } */
    .containerhome{
        padding-top:62px;
        padding-bottom:50px;
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

    h1{
        font-weight:bold;
        font-size:20px !important;
    }

    .giftbox{
        max-width:400px;
    }
    .divTable{
    text-align:center;
    color:white;
    margin:0 auto;
	  display: table;
      margin-bottom:50px;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: 1px solid #FFFFFF;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
.winner{
  margin-top:50px;
  color:white;
  text-align:center;
}
small{
    font-size:12px;
    font-weight:100;
}
a{
  text-decoration:none;
}
.share-popgame{
    text-align:center;
    color:white;
    margin:0 auto;
	  display: table;
}
</style>
<body>
    <div class="vcenter">
        <div class="containerhome">
            <img src="<?=base_url("assets/images/popgame-scratchwin.svg")?>" width="200px" alt="">
            <div class="rowhome">
                <p>Kamu sudah menggunakan kupon kamu, Tukarkan POIN POPGAME kamu lagi di *500*5456#</p>
                <div><img src="<?=base_url("assets/images/openbox.png")?>" class="giftbox" width="100%" alt=""></div>
                <!-- <h1>GET LINK > SCRATCH > WIN!!!</h1> -->
            </div>
            <div class="button">
                *500*5456# <br><small><i>*Khusus Pengguna XL & Axis</i></small> 
            </div>
            <h3 class="winner">5 Pemenang Terakhir<br> POPGame Scratch & Win</h3>
            <div class="divTable" style="width: 90%; border: 1px solid #FFFFFF;">
            <div class="divTableBody">
                <div class="divTableRow">
                <div class="divTableCell">No Pemenang</div>
                <div class="divTableCell">Hadiah</div>
                </div>
                <?php
                foreach($winner as $w)
                {
                $xxx		= substr($w['msisdn'],strlen($w['msisdn'])-3,3);
                        $msisdn	= str_replace($xxx, "xxx", $w['msisdn']);
                ?>
                    <div class="divTableRow">
                    <div class="divTableCell"><?=$msisdn?></div>
                    <div class="divTableCell"><?=$w['hadiah']?></div>
                    </div>
                <?php
                }
                ?>
            </div>
            </div>
            <h3 class="winner">Share ke teman-temanmu</h3>
            <div class="share-popgame">
                <a href="https://www.facebook.com/dialog/feed?app_id=140586622674265&display=popup&link=http://game.promolbs.com/VG1wSk5FNTZaelZPYW1Nd1RXcE5NVTlSUFQwPQ==/VGxWYVExRnFUVFJSZWtsNlQxVlNSVTEzUFQwPQ==&name=Scracth and Win POPGame&caption=halo-halo bandung&description=test&redirect_uri=http%3A%2F%2Fs7.addthis.com%2Fstatic%2Fpostshare%2Fc00.html" target="_blank"><span>
                    <img width="50" height="50" src="<?=base_url("assets/images/facebook.png")?>" alt="Facebook" />
                    </span>
                </a>
                <a href="https://twitter.com/intent/tweet?text=Yuk Berlangganan POPGame sekarang! Jawab pertanyaannya, Kumpulkan POIN dan tukar dengan Hadiah PULSA atau Kupon Misteri POPGame! Promo ini hanya berlaku untuk kamu pengguna XL-AXIS (INFO: *500*5456#)" target="_blank"><span>
                    <img width="50" height="50" src="<?=base_url("assets/images/twitter.png")?>" alt="Twitter" />
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>