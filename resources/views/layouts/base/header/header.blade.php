
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<div class="navbar-rtp">
  <ul>
    <li>
      <a class="logo-rtp show-mobile-inline" href="javascript:;" onclick="slideToggle()">
        {{-- add logo svg --}}
        <i class="chevron-down-rtp"></i>
      </a>
      <a class="logo-rtp show-desktop-inline" href="https://www.rtp.pt/" target="_blank">  
         {{-- add logo svg --}}
        <i class="chevron-down-rtp"></i>
      </a>
    <li>
    <ul class="dropdown-rtp" id="dropdown-rtp">
      <li><a href="https://localhost" target="_blank">Link 1</a></li>
      <li><a href="https://localhost" target="_blank">Link 2</a></li>
      <li><a href="https://localhost" target="_blank">Link 3</a></li>
      <li><a href="https://localhost" target="_blank">Link 4</a></li>
      <li><a href="https://localhost" target="_blank">Link 5</a></li>
      <li><a href="https://localhost" target="_blank">Link 6</a></li>
      <li><a href="https://localhost" target="_blank">Link 7</a></li>
      <li><a href="https://localhost" target="_blank">Link 8</a></li>
      <li><a href="https://localhost" target="_blank">Link 9</a></li>
    </ul>
  </ul>
</div>

<style>
body{
  -webkit-font-smoothing: antialiased;
}

.bg-takeover>.container {
  position: relative;
  max-width: none !important;
}

#leaderboard{
  line-height: 0 !important;
  margin: 0 auto;
  text-align: center;
}

.layer.popover {
  position: fixed;
  z-index: 100;
  top: 0;
  left: 0;
  width: 1px !important;
  height: 1px !important;
  margin: 0 !important;
  max-width: none !important;
  border: 0 !important;
  background-color: transparent !important;
}

.navbar-rtp{
  width: 100%;
  background-color: #404040;
  font-family: 'Inter';
  text-align: center;
  position: relative;
}

.navbar-rtp ul{
  position: relative;
  list-style: none;
  margin:0;
  padding: 0;
}

.navbar-rtp ul li{
  display: inline-block;
}

.navbar-rtp .logo-rtp{
  opacity: 0.5;
  position: relative;
  top:3px;
  margin-right: 10px;
  text-decoration:none;
}

.logo-rtp.show-mobile-inline{
  padding:7.5px;
  top:0;
  margin:0;
}

.navbar-rtp .dropdown-rtp li a{
  font-size: 12px;
  font-weight: 500;
  padding: 10px;
  text-transform: uppercase;
  text-decoration: none;
  display: inline-block;
  color: #fff;
  opacity: 0.5;
}

.navbar-rtp .dropdown-rtp li a:hover,
.navbar-rtp .logo-rtp:hover{
  opacity: 0.8;
}

.chevron-down-rtp {
  box-sizing: border-box;
  position: relative;
  display: none;
  width: 8px;
  height: 8px;
  border: 2px solid transparent;
  border-radius: 100px;
  color: #fff;
  top: -4px
}

.chevron-down-rtp::after {
  content: "";
  display: block;
  box-sizing: border-box;
  position: absolute;
  width: 8px;
  height: 8px;
  border-bottom: 2px solid;
  border-right: 2px solid;
  transform: rotate(45deg);
  top: -4px;
  transform-origin: 5px 6px;
  transition: transform 0.3s ease-in-out;
}

.chevron-down-rtp.rotate-chevron::after{
  transform: rotate(-135deg);
}

.sso-wraper{
  position: absolute;
  top: 0;
  right: 0;
  background-color: #232323;
  color: #A0ACB3;
  height: 100%;
  padding: 0 11px;
  font-size: 12px;
  display: flex;
  flex-direction: row;
  align-items: center;
  text-decoration: none;
}

.sso-wraper span {
  margin-right: 9px;
}

.sso-user{
  font-size: 8px;
  font-weight: 600;
  line-height: 20px;
  width: 20px;
  height: 20px;
  text-align: center;
  color: #fff;
  background-color: #5381F8;
  border-radius: 50%;
}

@media (min-width: 992px){

  .dropdown-rtp{
    display: block !important;
  }

  .show-mobile-inline,
  .show-mobile-block{
    display: none !important;
  }

  .show-desktop-inline{
    display: inline-block !important;
  }

  .show-desktop-block{
    display: block !important;
  }

}

@media (max-width: 991px){

  .dropdown-rtp{
    display: none;
  }

  .navbar-rtp .dropdown-rtp{
    position: absolute;
    top: 35px;
    border-top: 1px solid #8D8D8D;
    width: 100%;
    z-index: 99999999999;
    background-color: #404040;
    padding: 10px 0;
  }

  .navbar-rtp ul li{
    display: block;
  }

  .navbar-rtp .dropdown-rtp li a{
    font-size: 22px;
    font-weight: 600;
    padding: 10px;
    text-transform: uppercase;
    display: block;
    opacity: 0.8;
  }

  .chevron-down-rtp{
    display: inline-block;
  }

  .show-mobile-inline{
    display: inline-block !important;
  }

  .show-desktop-block{
    display: block !important;
  }

  .show-desktop-inline,
  .show-desktop-block{
    display: none !important;
  }

}

</style>

<style>
#sso-menu{    
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important;
  top: 35px !important;
  right: 0 !important;
}

#sso-menu p{
  font-size: 12px !important;
  line-height: 16px !important;
  color: #fff;
  text-align:left;
}

#sso-menu button{
  display:block;
  border:0;
  background-color: transparent;
  color: #fff !important;
  font-size:12px;
  font-weight:400;
  padding: 10px 0 10px 28px;
  font-family: 'Inter', sans-serif;
  position:relative;
  cursor:pointer;
  width: 100%;
  text-align: left;
  border-bottom: 1px dotted rgba(160,178,200,0.3);
}

#sso-menu button:last-child{
  border-bottom:0;
}

#sso-menu button:hover{
  color: #0074FF;
}

#sso-menu button::before{
  content: ' ';
  background-repeat: no-repeat;
  position:absolute;
  left: 0;
  top:7px;
  display:block;
  width: 20px;
  height: 20px;
}

#sso-menu button.sso-menu-logout::before{
  background-image: url('/common/navbar/img/logout_white.svg');
}

#sso-menu button.sso-menu-favorites::before{
  background-image: url('/common/navbar/img/star_white.svg');
}

#sso-menu button.sso-menu-manage::before{
  background-image: url('/common/navbar/img/manage_white.svg');
}

#sso-menu button.sso-menu-manage:hover::before{
  background-image: url('/common/navbar/img/manage_color.svg');
}

#sso-menu button.sso-menu-favorites:hover::before{
  background-image: url('/common/navbar/img/star_color.svg');
}

#sso-menu button.sso-menu-logout:hover::before{
  background-image: url('/common/navbar/img/logout_color.svg');
}

@media (max-width: 1022px) {

  #sso-menu{
    background-color: rgba(36, 35, 37, 0.9) !important;
    width:100% !important;
    position: fixed !important;
    left: 0 !important;
  }

  #sso-menu button,
  #sso-menu p{
    font-size: 22px;
    font-weight:500;
  }

  #sso-menu button::before{
    top: 16px !important;
  }

}

</style>
<script>
  $(document).ready(function(){
  
    $('.logo-rtp').click(function(){
      if ($(window).width() < 992) {
        $('.dropdown-rtp').slideToggle();
        $('.chevron-down-rtp').toggleClass('rotate-chevron');
      }
    });
  
  })
  </script>