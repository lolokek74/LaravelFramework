<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function lessonOne() {
        return 'Моя первая программа';
    }
    public function lessonTow(Request $request) {
        $data = [ ];
        if($request->has('text'))
            $data['text'] = $request->input('text');
        $data['token'] = $request->input('token', 'none-token');
        return $data;
    }


    public function quest1(){
        return 'Я люблю учиться в чрт';
    }

    public function quest2($name = null)
    {
        return $name;
    }

    public function quest3($name, $text)
    {
        return 'Меня зовут: ' .$name .' '. 'Я люблю есть: '. $text;
    }

    public function quest4(){
        $a = 10;
        $b = 4;
        $c = $a + $b;
        return 'Сумма чисел:' .$c;
    }

    public function quest5($a, $b){
        $c = null;
        $c = $a + $b;
        return 'Сумма чисел:' .$c;
    }

    public function quest6($cipher){
        if($cipher == 'keyOneTest'){
            return 'Я взломал шифр: Ура!';
        }
        else
        return 'Нет доступа';
    }

    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }


        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';


        return view('template', compact('detachment', 'user'));
    }

    public function quest21()
    {
        return view('quest1');
    }

    public function quest22($detach) {
        $organization = 'Нет организации';
        switch($detach) {
            case 1: $organization = 'Чрт'; break;
            case 2: $organization = 'Дурка'; break;
            case 3: $organization = 'Реклама не люди'; break;
            case 4: $organization = 'Армия ждет'; break;
            default: $organization = '-';
        }

        return view('quest22', compact('organization'));
    }

    public function quest23($detach)
    {
        $name = 'Нету любимой строчки';
        switch($detach) {
            case 1: $name = 'Лучше быть последним — первым, чем первым — последним.'; break;
            case 2: $name = 'На случай, если буду нужен, то я там же, где и был, когда был не нужен.'; break;
            case 3: $name = 'Если волк молчит то лучше его не перебивай.'; break;
            case 4: $name = 'Каждый в цирке думает, что знает в цирке, но не каждый, что в цирке знает, что в цирке не каждый знает думает.'; break;
            default: $name = '-';
        }

        return view('quest3', compact('name'));
    }

    public function quest24() {
        $array = [
            "Арбуз", "Дыня", "Яблоко", "Груша"
        ];

        return view('quest4', compact('array'));
    }

    public function quest25() {
        $array = [
            "Арбуз", "Дыня", "Яблоко", "Груша"
        ];

        return view('quest5', compact('array'));
    }

    public function quest26() {
        $num = [
            1,2,3,4,5,6,7,8,9,10
        ];

        return view('quest6', compact('num'));
    }
}
