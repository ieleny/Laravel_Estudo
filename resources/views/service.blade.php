<?php 

//public function __construct()
//{
    $config = [
        'config1' => 1,
        'config2' => 2
    ];

    $dependencyService = new DependencyService($config);

    $sampleService = new SampleService($dependencyService);

    $minhaClasse = new MinhaClasse($sampleService);


//}
