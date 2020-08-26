<?php


namespace App\Data;


use App\Entity\Revendeur;

class SortData
{



    /**
     * @var string
     */
    public $q = '';

    /**
     * @var integer
     */
    public $max;

    /**
     * @var nullinteger
     */
    public $min;

    /**
     * @var Revendeur[]
     */
    public $revendeurs = [];


}