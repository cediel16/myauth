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
                            <span class="icon-list icon-white"></span>
                        </button>
                        <?php echo anchor('', 'Project Name','class="brand"') ?>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                            </ul>
                            <ul class="nav pull-right">
                                <li><?php echo anchor('usuarios/registrate', 'Registrate') ?></li>
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