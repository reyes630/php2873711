<?php 
namespace App\Models;
require_once MAIN_APP_ROUTE."../models/BaseModel.php";
class RolModel extends BaseModel {
    public function __construct(
        ?int $id = null,
        ?string $nombre = null
    ){
        $this->table = "rol";
        //Se llama al contructor del padre
        parent::__construct();
    }
}