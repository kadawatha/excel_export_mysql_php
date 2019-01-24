<?php
/**
 * Created by PhpStorm.
 * User: Dhanushka
 * Date: 7/19/2018
 * Time: 9:21 PM
 */



class photo extends db_object
{


    protected static $db_table="photos";
    protected static $db_table_fields=array('id','firstname','lastname','nic','date','month','year','email','phone','number','street','suberb','town','review','remarks','username','currents');

    public $id;
    public $firstname;
    public $lastname;
    public $nic;
    public $date;
    public $month;
    public $year;
    public $email;
    public $phone;
    public $number;
    public $street;
    public $suberb;
    public $town;
    public $review;
    public $remarks;
    public $username;
    public $currents;


}








