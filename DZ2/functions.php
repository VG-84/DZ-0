<?php
/**Task1*/
function task1(array $strings, bool $return = true)
{
    $result = implode("\n", array_map(function (string $str)
    {
        return "<p>$str</p>";
    },
    $strings));
    if ($return)
    {
        return $result;
    }
    echo  $result;
}
/**Task2*/
function task2(string $action, ...$args)
{
    switch ($action)
{
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($argc) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $arg)
            {
                $result = $result / $arg;
            }
return $result;
        case  '*':
            $result = 1;
            foreach ($args as $arg)
            {
                $result *= $arg;
            }
            return $result;
        default:
            return 'Error: unknown actions';
}
}
/**Task3*/
function task3($a, $b)
{
    if (!is_int($a))
    {
        trigger_error('a - uncorrect');
        return false;
    }
    if (!is_int($b))
    {
        trigger_error('b - uncorrect');
        return false;
    }
    if ($a < 0 || $b < 0)
    {
        trigger_error('Correct');
    }
    $result = '<table>';
    for ($i = 1; $i <= $a; $i++)
    {
        $result .='<tr>';
        for ($j =1; $j <= $b; $j++)
        {
            $result .='<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .='</tr>';
    }
    $result .= '</table>';
    echo  $result;
}
/**Task6*/
function Task6 (string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp)
    {
        return false;
    }
    $str = '';
    while (!feof($fp))
    {
        $str .= fgets($fp,1024);
    }
    echo $str;
}