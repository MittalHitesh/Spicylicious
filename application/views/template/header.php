
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spicylicious - Premium HTML template by D.Koev</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/stylesheet.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheet/jquery-ui-1.8.9.custom.css" />
<!-- jQuery and Custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/custom_scripts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.roundabout.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tabs.js"></script>
<!-- Tipsy -->
<script src="<?php echo base_url(); ?>assets/js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/jquery.tweet.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/js/jquery.tweet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- MAIN WRAPPER -->
<div id="container"> 
  
  <!-- SIDEFEATURES -->
  <div id="sidefeatures">
    <ul>
      <li class="side_cart"><span class="icon">Shopping Cart</span>
        <div id="cart">
          <div class="heading">
            <h4>Shopping Cart</h4>
            <span id="cart_total">3 item(s) - $1099.99</span> </div>
          <div class="content">
            <table class="cart">
              <tbody>
                <tr>
                  <td class="image"><a href="#"><img alt="Spicylicious" src="image/cart_pic1.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 1</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$117.50</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Palm Treo Pro" alt="Palm Treo Pro" src="image/cart_pic2.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 2</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$328.99</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Canon EOS 5D" alt="Canon EOS 5D" src="image/cart_pic3.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 3</a>
                    <div> - <small>Extra Cheese</small><br/>
                    </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$94.00</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                </tr>
              </tbody>
            </table>
            <table class="total">
              <tbody>
                <tr>
                  <td align="right"><b>Sub-Total</b></td>
                  <td align="right">$459.99</td>
                </tr>
                <tr>
                  <td align="right"><b>VAT 17.5%</b></td>
                  <td align="right">$80.50</td>
                </tr>
                <tr>
                  <td align="right"><b>Total</b></td>
                  <td align="right">$540.49</td>
                </tr>
              </tbody>
            </table>
            <div class="checkout"><a class="button" href="checkout.html"><span>Checkout</span></a></div>
          </div>
        </div>
      </li>
      <li class="side_currency"><span class="icon">Currency</span>
        <div id="currency"> Currency <a href="#" title="Euro">€</a> <a href="#" title="Pound Sterling">£</a> <a title="US Dollar">$</a> </div>
      </li>
      <li class="side_lang"><span class="icon">Language</span>
        <div id="language"> Language <a href="#" title="English"><img src="image/gb.png" alt="Spicylicious store"/></a> <a href="#" title="Deutsch"><img src="image/de.png" alt="Spicylicious store"/></a> <a title="Bylgarski"><img src="image/bg.png" alt="Spicylicious store"/></a> </div>
      </li>
      <li class="side_search"><span class="icon">Search</span>
        <div id="search">
          <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search" name="filter_name"/>
          <a href="#" class="button-search"></a> </div>
      </li>
    </ul>
  </div>
  <!-- END OF SIDEFEATURES --> 
  
  <!-- HEADER -->
  <div id="header">
    <div class="inner">
      <ul class="main_menu menu_left">
        <li><a href="account.html">My Account</a></li>
        <li><a href="wish.html">Wish List <b>(3)</b></a></li>
        <li><a href="about.html">About Us</a></li>
        <li class="warning"><a href="index.html">Home</a>
          <ul class="secondary">
            <li><a href="index2.html">Home with LI SLIDER</a></li>
            <li><a href="#">Test</a></li>
            <li><a href="#">ABC</a></li>
            <li><a href="#">DEF</a></li>
            <li><a href="#">GHI</a></li>
          </ul>
        </li>
      </ul>
      <div id="logo"><a href="index.html"><img src="<?php echo base_url(); ?>assets/image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
      <ul class="main_menu menu_right">
        <li><a href="compare.html">Compare</a></li>
        <li><a href="cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <div id="welcome"> Welcome visitor you can <a href="#">login</a> or <a href="#">create an account</a>. </div>
      <div class="menu">
        <ul id="topnav">
          <li><a href="category.html">Pizza</a>
            <ul class="children">
              <li><a href="category.html">Pizza</a></li>
              <li><a href="category.html">Lasagna</a>
                <ul class="children2">
                  <li><a href="category.html">Pizza</a></li>
                  <li><a href="category.html">Lasagna</a></li>
                  <li><a href="category.html">Spaghetti</a></li>
                  <li><a href="category.html">Penne</a></li>
                  <li><a href="category.html">Canelonni</a></li>
                </ul>
              </li>
              <li><a href="category.html">Spaghetti</a></li>
              <li><a href="category.html">Penne</a></li>
              <li><a href="category.html">Canelonni</a></li>
            </ul>
          </li>
          <li><a href="category.html">Lasagna</a>
            <ul class="children">
              <li><a href="category.html">Pizza</a></li>
              <li><a href="category.html">Lasagna</a>
                <ul class="children2">
                  <li><a href="category.html">Pizza</a></li>
                  <li><a href="category.html">Lasagna</a></li>
                  <li><a href="category.html">Spaghetti</a></li>
                  <li><a href="category.html">Penne</a></li>
                  <li><a href="category.html">Canelonni</a></li>
                </ul>
              </li>
              <li><a href="category.html">Spaghetti</a></li>
              <li><a href="category.html">Penne</a></li>
              <li><a href="category.html">Canelonni</a></li>
            </ul>
          </li>
          <li><a href="category.html">Spaghetti</a></li>
          <li><a href="category.html">Penne</a>
            <ul class="children">
              <li><a href="category.html">Pizza</a></li>
              <li><a href="category.html">Lasagna</a>
                <ul class="children2">
                  <li><a href="category.html">Pizza</a></li>
                  <li><a href="category.html">Lasagna</a></li>
                  <li><a href="category.html">Spaghetti</a></li>
                  <li><a href="category.html">Penne</a></li>
                  <li><a href="category.html">Canelonni</a></li>
                </ul>
              </li>
              <li><a href="category.html">Spaghetti</a></li>
              <li><a href="category.html">Penne</a></li>
              <li><a href="category.html">Canelonni</a></li>
            </ul>
          </li>
          <li><a href="category.html">Canelonni</a></li>
          <li><a href="category.html">Fettuchini</a></li>
          <li><a href="category.html">Risotto</a></li>
          <li><a href="category.html">Antipasti</a></li>
          <li><a href="category.html">Bar-B-Q</a></li>
          <li><a href="category.html">Desserts</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- END OF HEADER --> 
  