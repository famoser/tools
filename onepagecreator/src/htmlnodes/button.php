<?php
/**
 * Created by PhpStorm.
 * User: Florian Moser
 * Date: 30.12.2015
 * Time: 13:33
 */

namespace famoser\opc\htmlnodes;


use famoser\opc\htmlnodes\base\basenode;

class button extends basenode
{
    public function __construct($text, $id = null)
    {
        parent::__construct("button", $id);
        $this->setText($text);
    }
}