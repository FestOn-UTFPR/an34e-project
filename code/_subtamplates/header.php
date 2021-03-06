<nav class="navbar navbar-inverse bg-inverse nav-feston">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao" >
                <span class="sr-only">Alternar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../code/index.php"><img src="../assets/_imagens/logo_feston_menu.png" alt="logo" width="140" height="110"></a>  
        </div>
        <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="quem-somos.php">Quem somos</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="cadastrar-eventos.php">Cadastrar Evento</a></li>
                        <li><a href="buscar-evento.php">Buscar Evento</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha conta <span class="glyphicon">&#xe008;</span><span class="caret"></span></a>
                                
                    <ul class="dropdown-menu">
                        <?php
                            if(!isset($_SESSION['username'])){
                                echo '
                                     <li style="display: visible;"><a href="login-usuario.php">Login</a></li>        
                                ';
                            }
                        ?> 
                        <li style="display: none;"><a href="login-usuario.php">Login</a></li>
                        <?php
                            if(!isset($_SESSION['username'])){
                                echo '
                                    <li style="display: visible;"><a href="cadastro-usuario.php">Cadastre-se</a></li>        
                                ';
                            }
                        ?>
                        <li style="display: none;"><a href="cadastro-usuario.php">Cadastre-se</a></li>
                        <li style="display: none;"><a href="perfil.php">Perfil</a></li>
                        <?php
                            if(isset($_SESSION['username'])){
                                echo '
                                    <li style="display: visible;"><a href="perfil.php">Perfil</a></li>        
                                ';
                            }
                        ?> 
                        <li style="display: none;"><a href="sair.php">Log-out</a></li>
                        <?php
                            if(isset($_SESSION['username'])){
                                echo '
                                    <li style="display: visible;"><a href="sair.php">Log-out</a></li>        
                                ';
                            }
                        ?> 
                    </ul>
                </li>
            </ul>
        </div>     
    </div>
</nav>