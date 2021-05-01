<?php
/****************************
*  Database Wrapper         *
*  - uses singleton pattern *
*****************************/
class DB{
    public static $_instance = null;
    private $_pdo
          , $_query
          , $_error
          , $_results
          , $_count = 0;
}