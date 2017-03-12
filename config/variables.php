<?php


class variables
{
    public static $namesWebServer = $_ENV["PHP_SERVER"]; // "http://localhost"
    public static $namesWebServerDirectory = $_ENV["PHP_DIR"];
    public static $namesDatabaseServer = $_ENV["PHP_DB_SERVER"]; // "www.ubio.org";
    public static $namesDatabaseUser = $_ENV["PHP_DB_USER"]; //"root";
    public static $namesDatabasePassword = $_ENV["PHP_DB_USER_PASSWORD"]; //"";
    public static $namesDatabaseRootUser = $_ENV["PHP_DB_ROOT"];
    public static $namesDatabaseRootPassword = $_ENV["PHP_DB_ROOT_PASSWORD"];
    public static $namesDatabaseNameNamebank = "namebank2";
    public static $namesDatabaseNameNamebankOld = "namebank";
    public static $namesDatabaseNameBHL = "bhl";
    public static $namesDatabaseNameRSS = "rss";
    public static $namesDatabaseNameClassificationbank = "classificationbank";
    public static $namesDatabaseNameAuthors = "authors";
    public static $namesDatabaseNameNZ = "NZ";
    public static $namesDatabaseNameHershkovitz = "Hershkovitz";
    public static $namesDatabaseNameInfobutton = "infoButton";
    public static $namesDatabaseNameLigercat = "LigerCat";
    public static $namesDatabaseNameIA = "internetArchive";
    public static $namesDatabaseNameAGI = "agi";

    public static $u = "A-ZÀÂÅÃÄÁÆČÇÉÈÊËÍÌÎÏÑÓÒÔØÕÖÚÙÛÜßĶŘŠŞŽŒ";
    public static $l = "a-zááàâåãäăæčćçéèêëĕíìîïǐĭñńóòôøõöŏúùûüůśšşřğžźýÿœ";

    //public static $taxonFinderServer = "animalia.mbl.edu";
    //public static $taxonFinderServer = "128.128.175.245";
    //public static $taxonFinderServer = "plantae.mbl.edu";
    //public static $taxonFinderServer   = "names.mbl.edu";
    //public static $taxonFinderServer   = "128.128.164.84";
    public static $taxonFinderServer   = $_ENV["PHP_TAXON_FINDER_SERVER"];

    public static $portalWebServer = $_ENV["PHP_SERVER"]."/portal";

    public static $uioWebServer = "http://www.ubio.org";
    public static $uioDatabaseServer = "www.ubio.org";
    public static $uioDatabaseUser = "tns_user";
    public static $uioDatabasePassword = "";
    public static $uioDatabaseNameTNS = "tns_v2";
}

global $variables;





?>
