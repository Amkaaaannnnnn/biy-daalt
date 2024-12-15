<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >

                    <img src="assets/img/logo.jpg" />
                </a>

            </div>
<?php if($_SESSION['login'])
{
?> 
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">Гарах</a>
            </div>
            <?php }?>
        </div>
    </div>

<?php if($_SESSION['login'])
{
?>    
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">Хяналтын самбар</a></li>
                            <li><a href="issued-books.php">Гэрээр ном олгох</a></li>
                             <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Хаяг <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">Нүүр хуудас</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Нууц үгээ солих</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
      <li><a href="index.php">Үндсэн цэс</a></li>
      <li><a href="index.php#ulogin">Хэрэглэгч нэвтрэх</a></li>
                            <li><a href="signup.php">Хэрэглэгчийн бүртгэл</a></li>
                         
                            <li><a href="adminlogin.php">Админ эрхээр нэвтрэх</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php } ?>