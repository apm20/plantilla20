<!DOCTYPE html>
<html lang="es">
<!-- PRUEBAS20 Bootstrap 3.2.0 -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CromosRepes.com 2.0</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo site_url('css/sb-admin-2.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo site_url('font-awesome-4.2.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- MetisMenu CSS
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS
    <link href="css/plugins/timeline.css" rel="stylesheet">
    <!-- Morris Charts CSS
    <link href="css/plugins/morris.css" rel="stylesheet">
-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS para tener logo-->
    <link href="<?php echo site_url('css/logo-nav.css')?>" rel="stylesheet">
    <!-- Custom CSS para tener menu naranja-->
    <link href="<?php echo site_url('css/master-template.css')?>" rel="stylesheet">
    <!-- Custom CSS de Alex para hacer los retoques finales-->
    <link href="<?php echo site_url('css/alex.css')?>" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand fa fa-envelope" href="index.html">CromosRepes.com</a> -->
                <!-- <a class="navbar-brand" href="#"><img src="./img/3cartas.png"  height='50px'width="100px" alt="CromosRepes.com"></a>-->
                <a class="navbar-brand " href="<?php echo site_url('')?>">
                    <img src="<?php echo site_url('img/3cartas.png')?>" height="33px"  alt="CromosRepes.com">CromosRepes.com</a>
            </div>
            <!-- /.navbar-header -->

            <ul id="menu_usuario" class="nav navbar-top-links navbar-right">
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar usuario">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <!-- <a class="active" href="index.html"><i class="fa fa-table fa-fw"></i> Colecciones</a> -->
                            <a href="<?php echo site_url('colecciones/todas') ?>"><i class="fa fa-table fa-fw"></i> Colecciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('noticias/indice') ?>"><i class="fa fa-bullhorn fa-fw"></i> Noticias</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('ayuda/indice') ?>"><i class="fa fa-life-ring fa-fw"></i> Ayuda</a>
                        </li>

                        <li>

                            <a href="#"><i class="fa fa-sitemap"></i> Otros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://vip.cromosrepes.com/chat/login.php"><i class="fa fa-comments "></i> Chat</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('ranking') ?>"><i class="fa fa-bar-chart "></i> Ranking</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('enlaces') ?>"><i class="fa fa-angellist "></i> Recomendamos</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('ayuda/contacto') ?>"><i class="fa fa-envelope-o "></i> Contacto</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('ayuda/Colaboradores') ?>"><i class="fa fa-star "></i>  Colabora</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>

                    <!-- Adsense Lateral Gordo 160x600 recomendacion ini -->
                    <div class="row text-center">
                    
                        <div class="text-right hidden-xs col-lg-12">

                            <!-- Adsense Lateral Gordo 160x600 recomendacion inicio -->
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:160px;height:600px;border-style:none;"
                                 data-ad-client="ca-pub-8628628791781009"
                                 data-ad-slot="4084331826"></ins>
                                 <br/>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
<!--                        <div class="col-lg-12">
                            <img src="img/3cartas.png" width="100px" />
                            </div> -->
                    
                    <!-- Adsense Lateral Gordo 160x600 recomendacion fin -->

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="min-height: 862px; background-color: #eee;">
        <div class="row">
          <div class="container" >
          <div class="panel" style="margin-top:40px; margin-bottom:40px; padding: 20px 20px 20px 20px;" >
                        <?php
                        // Aquí se pinta el contenido que cambia en cada página
                        print $contenido
                        ?>
                    
                    </div><!-- panel -->
                <!-- </div>  container -->
            </div> <!-- row -->
        </div><!-- page-wrapper -->

         <div id="footer-ad">
            <div class="row container">
            <br/>
                <div class="text-right hidden-xs col-sm-12 col-md-12 col-lg-12">
                    <ins class="adsbygoogle"
                            style="display:inline-block;width:728px;height:90px"
                            data-ad-client="ca-pub-8628628791781009"
                            data-ad-slot="3584387778"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div> <!-- row container-->


        </div><!-- page-wrapper2 -->


    </div>
    <!-- /#wrapper -->



    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo site_url('js/jquery-1.11.0.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url('js/plugins/metisMenu/metisMenu.min.js')?>"></script>

    <!-- Morris Charts JavaScript
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url('js/sb-admin-2.js')?>"></script>

    <script type="text/javascript">
        function getCookie(name) {
            var cname = name + "=";
            var dc = document.cookie;
            if (dc.length > 0) {
                begin = dc.indexOf(cname);
                if (begin != -1) {
                    begin += cname.length;
                    end = dc.indexOf(";", begin);
                    if (end == -1) end = dc.length;
                    return unescape(dc.substring(begin, end));
                }
            }
            return null;
        }


        raiz = "<?php echo base_url() ?>";
        nick = getCookie("username");


    if (getCookie("msg") != null && getCookie("msg") >= 0 && getCookie("username") != null) {
        codigo = 
        '<li class="dropdown">'+
            '<a href="'+raiz+'mensajes/entrada">'+
                '<span class="badge">'+getCookie("msg")+'</span> <i class="fa fa-envelope fa-fw"></i> ' +
            '</a>'+
        '</li>'+
        '<li class="dropdown">'+
            '<a href="' + raiz + 'listas/nick/' + nick + '">' +
                '<i class="fa fa-tasks fa-fw"></i> Mis colecciones'+
            '</a>'+
        '</li>'+
        '<!-- /.dropdown -->'+
        '<li class="dropdown">'+
            '<a class="dropdown-toggle" data-toggle="dropdown" href="#">' + nick + ' <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i> </a>' +
            '<ul class="dropdown-menu dropdown-user">'+
                '<li><a href="'+raiz+'evalua/menu"><i class="fa fa-exchange fa-fw"></i> Evaluaciones</a></li>'+
                '<li><a href="'+raiz+'misdatos/menu"><i class="fa fa-gear fa-fw"></i> Preferencias</a></li>'+
                '<li class="divider"></li>'+
                '<li><a href="'+raiz+'usuario/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a></li>'+
            '</ul>'+
            '<!-- /.dropdown-user -->'+
        '</li>'+
        '<!-- /.dropdown -->';
        document.getElementById("menu_usuario").innerHTML = codigo;
    } else {
        codigo =
            '<li><a href="' + raiz + 'usuario/registro"><i class="fa fa-pencil fa-fw"></i> Nuevo usuario</a>' +
            '<li><a href="' + raiz + 'usuario/login"><i class="fa fa-user fa-fw"></i> Entrar</a>';

        document.getElementById("menu_usuario").innerHTML = codigo;
    }
    </script>    



</body>

</html>
