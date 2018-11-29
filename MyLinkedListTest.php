<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 29/11/2018
 * Time: 18:10
 */
include_once ("MyLinkedList.php");
$myListList = new MyLinkedList();
$myListList->addFirst(11);
$myListList->addLast(2);
$myListList->addIndex(7,3);
echo implode('-', $myListList->printList()).'<br>';
echo $myListList->contains(9).'<br>';
echo $myListList->indexOf(18).'<br>';
$myListList->reverse();
echo implode('-', $myListList->printList()).'<br>';