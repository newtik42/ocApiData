<?php

namespace NewTik\ocApiData\Model\Temp;

class Model {

    public function __construct() {
        
    }

    public function toArray(): array {
        
        foreach ($this as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $key_ => $value_) {
                    if(is_object($value_)){
                        $this->{$key}[$key_] = $value_->toArray();
                    }else{
                        
                    }
                    //
                }
            }
        }
        
        return (array)$this;
    }

}
