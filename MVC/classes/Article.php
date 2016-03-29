<?php
namespace classes;

class Article extends DB\Entity{
    protected static $table = "articles";
    protected static $keyColumn = "id";
}