

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Biblioteca Russo Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> Admin</a>
                </div><!-- navbar-header-->
 
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                            </ul>
                </div><!-- bs-example-navbar-collapse-1 -->
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
 
                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Inserisci</a>
                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="../../biblio_Russo/cms/inserisci_libro.php">Inserisci Libro</a></li>
                        <li><a href="../../biblio_Russo/cms/inserisci_autore.php">Inserisci Autore</a></li>
                        <li><a href="../../biblio_Russo/cms/inserisci_editore.php">Inserisci Editore</a></li>
                        </ul>
                </li>
                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Modifica </a>
                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                           <li><a href="../../biblio_Russo/cms/modifica_libro.php.php">Modifica Libro</a></li>
                           <li><a href="../../biblio_Russo/cms/modifica_autore.php">Modifica Autore</a></li>
                           <li><a href="../../biblio_Russo/cms/modifica_editore.php">Modifica Editore</a></li>
                        </ul>
                </li>
                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Elimina </a>
                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                           <li><a href="../../biblio_Russo/cms/elimina_libro.php">Elimina Libro</a></li>
                           
                        </ul>
                </li>
                
                
        </div><!-- /#sidebar-wrapper -->
        
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../js/jquery-1.12.3.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../css/sidebar_menu.js"></script>
</body>
</html>
 

