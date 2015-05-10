<?php
    // PF LIB REQUIRES/INCLUDES
    require 'config.php';
    
    
    // += COMMON FUNCTIONS =+
    // SESSION MANAGEMENT
    function pf_session_start(){
        session_start();
    }
    
    function pf_session_end(){
        session_unset();
        // any other session clearing funcs
    }
    
    function pf_session_set_user($user){
        //what is 'user'? int uid / str username...?;
        $_SESSION['current_user'] = user;
    }
    
    // DATABASE FUNCTIONS
    function db_connect(){
        // use PDO for more flexible database access...
        //manage which db connected to..?;
        //return conn?;
    }
    
    function db_close(){
        // close db connection
        //take which conn as arg?;
        //return status?;
    }
    
    function db_query($query){
        // (auto-sanitize query string? maybe not)
        // query db
        // return result set
    }
    
    function db_exec($stmt){
        // for db functions not expected to return a result set..?;
    }
    
    function db_sanitize_string($expr){
        // sanitize query strings before using with database
    }
    
    
    // ANY OTHER USEFUL COMMON PHP FUNCTIONS
    //
    
    // CUSTOM FUNCTIONS
    // application specific functions go here
?>