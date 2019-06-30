<?php

/**
 * DANS CE FICHIER ON DEFINIT UNE CLASSE QUI AURA POUR BUT DE GERER LES DONNEES DES ARTICLES
 * 
 * On appelle souvent cela un Model (une 3 composantes de l'artchitecture MVC)
 */

require_once('libraries/classes/models/Model.php');


/**
 * Classe qui gère les données des articles
 */
class Article extends Model
{
    protected $table = "articles";
}