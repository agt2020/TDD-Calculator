<?php require_once "./app/Calculator.php";

use App\Calculator;

if(is_numeric($_POST['num1']) && is_numeric($_POST['num2']) && !empty($_POST['operator']))
{
        $calculator = new Calculator;

        switch ($_POST['operator'])
        {
                case 'sum':
                        echo 'Result: '.$calculator->sum($_POST['num1'],$_POST['num2']);
                        break;
                case 'sub':
                        echo 'Result: '.$calculator->sub($_POST['num1'],$_POST['num2']);
                        break;
                case 'mul':
                        echo 'Result: '.$calculator->mul($_POST['num1'],$_POST['num2']);
                        break;
                case 'div':
                        echo 'Result: '.$calculator->div($_POST['num1'],$_POST['num2']);
                        break;
                default:
                        echo 'Command Not Found !.';
                        break;
        }
}
else
{
        if(count($_POST))
        {
                echo 'The inputs should numeric !.';
        }
}