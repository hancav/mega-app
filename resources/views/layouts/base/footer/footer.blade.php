<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<div class="navbar-ms11">
  <ul>
    <ul class="dropdown-ms11" id="dropdown-ms11">
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

.navbar-ms11{
  width: 100%;
  background-color: #404040;
  font-family: 'Inter';
  text-align: center;
  position: relative;
}

.navbar-ms11 ul{
  position: relative;
  list-style: none;
  margin:0;
  padding: 0;
}

.navbar-ms11 ul li{
  display: inline-block;
}

.navbar-ms11 .dropdown-ms11 li a{
  font-size: 12px;
  font-weight: 500;
  padding: 10px;
  text-transform: uppercase;
  text-decoration: none;
  display: inline-block;
  color: #fff;
  opacity: 0.5;
}

@media (min-width: 992px){

  .dropdown-ms11{
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

  .dropdown-ms11{
    display: none;
  }

  .navbar-ms11 .dropdown-ms11{
    position: absolute;
    top: 35px;
    border-top: 1px solid #8D8D8D;
    width: 100%;
    z-index: 99999999999;
    background-color: #404040;
    padding: 10px 0;
  }

  .navbar-ms11 ul li{
    display: block;
  }

  .navbar-ms11 .dropdown-ms11 li a{
    font-size: 22px;
    font-weight: 600;
    padding: 10px;
    text-transform: uppercase;
    display: block;
    opacity: 0.8;
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