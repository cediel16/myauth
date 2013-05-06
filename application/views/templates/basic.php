<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php echo link_tag($this->config->item('css_path') . '/style.css') ?>
        <?php echo link_tag($this->config->item('css_path') . '/bootstrap.css') ?>
        <?php echo link_tag($this->config->item('css_path') . '/bootstrap-responsive.css') ?>
        <title>Myauth</title>
    </head>
    <body>
        <header>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php echo anchor('','Project name','class="brand"') ?>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="#">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <ul class="nav pull-right">
                                <li><a href="/signup">Registrate</a></li>
                                <li class="divider-vertical"></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">Entrar <strong class="caret"></strong></a>
                                    <div style="padding: 15px; padding-bottom: 0px;" class="dropdown-menu span3">
                                        <?php echo form_open('usuarios/entrar', 'clas="form-signin"') ?>
                                        <input type="text" placeholder="Usuario" class="input-block-level">
                                        <input type="password" placeholder="Contraseña" class="input-block-level">
                                        <!--
                                        <label class="checkbox">
                                            <input type="checkbox" value="remember-me"> Recordarme
                                        </label>
                                        -->
                                        <button type="submit" class="btn btn-block btn-primary">Iniciar sesión</button>
                                        <?php echo form_close() ?>
                                    </div>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </header>
        <section class="container-fluid contenedor">
            <article>
                <?php echo $content ?>
            </article>
        </section>
        <footer>
            Pie de página
        </footer>
        <script src=""></script>
        <?php echo script_tag($this->config->item('js_path') . '/jquery.js') ?>
        <?php echo script_tag($this->config->item('js_path') . '/bootstrap.js') ?>
        <?php echo script_tag($this->config->item('js_path') . '/common.js') ?>
    </body>    
</html>