<?php
require_once(CONTROLLERS_FOLDER . "login.php");
require_once(CONTROLLERS_FOLDER . "register.php");
require_once(MODELS_FOLDER . "registerModel.php");

if (isset($_SESSION['FLIRT_USER'])) {
    header("Location: " . FULL_URL . "user-profile");
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Find Love 18</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'/>

        <base href="<?php print PUBLIC_URL; ?>"/>

        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body> 
        <div class="top_wrapper">
            <div class="content header clearfix">
                <div class="col-3">
                    <a class="logo" href="<?php print FULL_URL; ?>">
                        <img src="img/logo.png" alt="Logo" />
                    </a>
                </div>
                <div class="col-7 right">
                    <form method="post">
                        <div class="half">
                            <label>Nickname</label>
                            <input type="text" name="username" tabindex="1"/>
                            <a class="underline" href="<?php print FULL_URL; ?>passwort-vergessen">Passwort vergessen?</a>
                        </div>
                        <div class="half right">
                            <label>Passwort</label>
                            <input type="password" name="password" tabindex="2"/>
                            <input class="right" name="login" type="submit" value="Anmelden" />
                        </div>
                    </form>

                    <?php if ($error) print $error; ?>
                </div>
            </div><!-- content -->
            <div class="content clearfix">
                <div class="col-8 center slogan">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie, nibh lobortis malesuada mollis, lacus elit elementum quam</h1>
                </div>
            </div><!-- content -->
            <div class="content clearfix">
                <form method="post">
                    <div class="col-4 green home_box">
                        <h2>Angaben zum Account</h2>
                        <label>Nickname</label>
                        <input type="text" name="rusername" value="<?php print $username ?>"/>
                        <label>Passwort</label>
                        <input type="password" name="rpassword" value="<?php print $password ?>"/>
                        <label>Passwort wdhl.</label>
                        <input type="password" name="repeat_password" value="<?php print $repeat_password ?>"/>
                        <label>E-Mail</label>
                        <input type="text" name="email" value="<?php print $email ?>"/>
                    </div>
                    <div class="col-4 green home_box">
                        <h2>Persönliche Angaben</h2>
                        <label>Geburtsdatum</label>
                        <div class="small_input">
                            <select name="day">
                                <option value="">Tag</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="month">
                                <option value="">Monat</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="year">
                                <option value="">Jahr</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                            </select>
                        </div>
                        <label>Land</label>
                        <select name="country">
                            <?php foreach ($countryList as $country) { ?>
                                <option value="<?php print $country->getId(); ?>"><?php print $country->getName(); ?></option>
                            <?php } ?>
                        </select>
                        <label>PLZ</label>
                        <input type="text" name="zipCode" value="<?php print $zipCode ?>"/>
                        <div class="half">
                            <label>Ich bin</label>
                            <input type="radio" name="sex" value="1"><span>Mann</span>
                            <input type="radio" name="sex" value="2"><span>Frau</span>
                        </div>
                        <div class="half right">
                            <label>Ich suche</label>
                            <input type="radio" name="seeking" value="1"><span>Mann</span>
                            <input type="radio" name="seeking" value="2"><span>Frau</span>
                        </div>
                    </div>
                    <div class="col-4 green home_box">
                        <h2>Sicherheit und AGB</h2>
                        <label>Captcha</label>
                        <label>Trage die 4 stellige Zahl von unten ein.</label>
                        <input type="text" name="captcha" />
                        <label>AGB</label>
                        <input type="checkbox" name="agree" value="AGB"><span>Ich habe die AGB gelesen und akzeptiere diese.</span>
                        <input class="margin_top right" type="submit" name="register" value="Profil erstellen" />
                    </div>
                </form>
            </div><!-- content -->
        </div><!-- top_wrapper -->
        <div class="content clearfix">
            <div class="col-12">
                <div class="table">
                    <h2 class="title">Gerade Online</h2>
                </div>
                <form>
                    <div class="mini_form">
                        <label>Ich bin:</label>
                        <select name="ich_bin">
                            <option value="ein Mann">ein Mann</option>
                            <option value="eine Frau">eine Frau</option>
                        </select>
                    </div>
                    <div class="mini_form">
                        <label>Ich suche:</label>
                        <select name="ich_suche">
                            <option value="eine Frau">eine Frau</option>
                            <option value="einen Mann">einen Mann</option>
                            <option value="ein Paar">ein Paar</option>
                        </select>
                    </div>
                    <div class="mini_form">
                        <label>Alter:</label>
                        <select class="such" name="alter">
                            <option value="18-21" selected="selected">18-21</option>
                            <option value="22-25">22-25</option>
                            <option value="26-29">26-29</option>
                            <option value="30-33">30-33</option>
                            <option value="34-37">34-37</option>
                            <option value="38-41">38-41</option>
                            <option value="42-45">42-45</option>
                            <option value="46-50">46-50</option>
                            <option value="51-60">51-60</option>
                        </select>
                    </div>
                    <div class="mini_form">
                        <label>Region:</label>
                        <select class="such" name="plz">
                            <option value="0xxxx" selected="selected">0xxxx</option>
                            <option value="1xxxx">1xxxx</option>
                            <option value="2xxxx">2xxxx</option>
                            <option value="3xxxx">3xxxx</option>
                            <option value="4xxxx">4xxxx</option>
                            <option value="5xxxx">5xxxx</option>
                            <option value="6xxxx">6xxxx</option>
                            <option value="7xxxx">7xxxx</option>
                            <option value="8xxxx">8xxxx</option>
                            <option value="9xxxx">9xxxx</option>
                        </select>
                    </div>
                    <div class="mini_form">
                        <label>Bild:</label>
                        <input type="checkbox" name="anzeigen" />
                        <span>nur mit Bild anzeigen</span>
                    </div>
                    <div class="mini_form">
                        <input type="submit" value="Suche starten" />
                    </div>
                </form>
                <ul class="one_five bxslider clearfix">
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                </ul>
            </div>				
        </div><!-- content -->
        <div class="content clearfix">
            <div class="col-12">
                <div class="table">
                    <h2 class="title">Gerade Online</h2>
                </div>
            </div>	
            <div class="col-4">
                <button type="button">Alle</button>
                <button type="button">Männer</button>
                <button type="button">Frauen</button>
            </div>	
            <form class="auto_width">
                <div class="col-4">
                    <label>Nickname</label>
                    <input type="text" name="Nickname" />
                </div>	
                <div class="col-4">
                    <input type="submit" value="Suche" />
                </div>	
            </form>
            <div class="col-12">
                <ul class="one_four_margin clearfix">
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li>
                        <img src="img/foto.jpg" alt="Foto" />
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                </ul>
            </div>				
        </div><!-- content -->
        <?php require_once(PARTS_FOLDER . "footer.php"); ?>

