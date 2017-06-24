<?php
namespace designpattern\builder;

class Director {

    public function create($builder) {
        $builder->buildStepOne();
        $builder->buildStepTwo();
    }

}
