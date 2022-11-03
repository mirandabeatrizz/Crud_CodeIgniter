<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class CrudModel extends Model
{
    
    /*protected $table = 'contact_details';
    // allowed fields to manage
    protected $allowedFields = ['firstname', 'middlename','lastname', 'gender', 'contact', 'email', 'address'];*/

    
    protected $table = 'imovel';
    // allowed fields to manage
    protected $allowedFields = ['estado', 'cidade','bairro', 'contatoUser'];
    

}