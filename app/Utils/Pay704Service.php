<?php

namespace App\Utils;

class Pay704Service {

    protected $url;
    protected $id;
    protected $secret;
    protected $type;

    public function __constructst(string $url, string $id, string $secret, bool $type) {

        $this->url = $url;
        $this->id = $id;
        $this->secret = $secret;
        $this->type = $type;
        
    }

}

?>