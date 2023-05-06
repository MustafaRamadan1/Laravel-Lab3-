<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return '<h1>List of Contacts </h1>';
    } 

    public function Show_byID($id)
    {
        return '<h1> Details Page of Contact #'.$id;
    }

    public function Show_byID_Name($id , $name)
    {
        return '<h1> Details Page of Contact #'.$id." named ".$name;

    }

    public function Edit_byIDMsg($id)
    {
        return '<h1> This is Edit form of contact #'.$id."</h1>";

    }

    public function Create()
    {
        return '<h1>Created</h1>';
    }

    public function  store()
    {
        return 'Massege : success';

    }

    public function editContact($id)
    {
        return 'Contact with Id'.$id."Edited";
    }

   public function delete($id)
   {
    return 'Contact with Id'.$id.'Deleted';
   }
}
