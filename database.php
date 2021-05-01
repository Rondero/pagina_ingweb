<? php

$ servidor = 'localhost: 3307' ;
$ nombre de usuario = 'root' ;
$ contraseña = '' ;
$ base de datos = 'test3' ;

prueba {
  $ conn = nuevo  PDO ( "mysql: host = $ servidor; dbname = $ base de datos;" , $ nombre de usuario , $ contraseña );
} captura ( PDOException  $ e ) {
  die ( 'Error de conexión:' . $ e -> getMessage ());
}

?>