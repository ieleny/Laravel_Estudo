<?php

    class MinhaClasse 
    {

        private $sampleService;

        public function __construct(SampleService $sampleService)
        {

            $this->sampleService = $sampleService;
        }


    }