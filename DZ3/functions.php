<?php
/** TASK 3-1 */

const Names =
['Leo', 'Don', 'Mic', 'Raph', 'April'];
function CRT()
{
    $CRT =
        [
            'name' =>Names[array_rand(Names)],
            'age' =>mt_rand(18, 45)
        ];
return $CRT;
}