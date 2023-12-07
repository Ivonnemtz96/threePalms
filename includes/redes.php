<style>
#whatsapp {
    position: fixed;
    z-index: 999;
    width: 4rem;
    bottom: 110px;
    right: 10px;
}

#face {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 70px;
    right: 10px;
}

#insta {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 30px;
    right: 10px;
}

.whats-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 250px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background-color: #25d366;
    color: #FFF;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle;
    border-radius: 10px;
    padding: 5px 8px;
}

.whats-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.whats-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}


.insta-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 310px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background: linear-gradient(2deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
    color: #FFF;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle;
    border-radius: 10px;
    padding: 5px 8px;
}

.insta-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.insta-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}


.fb-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 370px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background-color: #3b5998;
    color: #FFF;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle;
    border-radius: 10px;
    padding: 5px 8px;
}

.fb-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.fb-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}


.margen-menu {
    margin: 0 150px;
}

.logo-home {
    max-width: 200px
}


@media (max-width: 800px) {
    .margen-menu {
        margin: 0px;
    }

    .logo-home {
        max-width: 200px
    }
}
</style>

<div class="whats-float">
    <a href="https://wa.me/+526241170152?text=Hola,%20me%20gustaría%20más%20información." target="_blank">
        <i style="color: #FFF; height: 2em;" class="fa-brands fa-whatsapp"></i></span>
    </a>
</div>

<div class="insta-float">
    <a href="https://instagram.com/threepalms_pm?igshid=NGVhN2U2NjQ0Yg==" target="_blank">
        <i style="color: #FFF; height: 2em;" class="fa-brands fa-instagram"></i></span>
    </a>
</div>

<div class="fb-float">
    <a href="https://www.facebook.com/profile.php?id=100090332164509" target="_blank">
        <i style="color: #FFF; height: 2em;" class="fa-brands fa-facebook"></i></span>
    </a>
</div>