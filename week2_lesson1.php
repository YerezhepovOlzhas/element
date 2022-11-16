<?php
//<editor-fold desc="Переменные">

//<editor-fold desc="Наименование переменной">

//  - Чувствительны к регистру: $a != $A
//  - могут начинаться "с буквы или символа подчёркивания" и состоять "из букв, цифр и символов подчёркивания" в любом количестве*/
//$a = 1;
//$A = 1;
//$_a = 1;
//$_A24sd76s7d6s7 = 1;
//$_1 = 1;

// не правильные примеры
//$1dfsdf = 1;
//$!234sdsd = 1;
//$_1 = 1;
//echo $_1;

//</editor-fold>

// $this - это специальная переменная, которой нельзя ничего присваивать

//<editor-fold desc="Область видимости">
//<editor-fold desc="Глобальная область видимости">

// не доступны внутри функции
//$name = "Elon Mask";
//function hello()
//{
//    echo "Hello " . $name;
//}
//hello();

// можно обратиться двумя способами
// 1. global
//$name = "Elon Mask";
//function hello()
//{
//    global $name;
//    echo "Hello " . $name;
//}
//hello();

// можно даже поменять содержимое глобальной переменной
//$name = "Elon Mask";
//function hello()
//{
//    global $name;
//    $name = strtoupper($name);
//    echo "Hello " . $name;
//}
//hello();
//echo "Hello " . $name;

// 2. использовать встроенный массив $GLOBALS
//$name = "Elon Mask";
//function changeName()
//{
//    $username = $GLOBALS["name"];
//    echo "Старое имя: {$GLOBALS["name"]} <br>";
//    // изменяем значение переменной $name
//    $GLOBALS["name"] = "Rasmus Lerdorf";
//}
//changeName();
//echo "Новое имя: " . $name;

//</editor-fold>

//<editor-fold desc="Локальная область видимости">
// создаются внутри функции
//function showName()
//{
//    $name = "Elon Mask";
//    echo $name;
//}
//showName();
//echo $name; // ошибка, переменная $name существует
//</editor-fold>

//<editor-fold desc="Статичная область видимости">
// как локальные переменные, но сохраняют значения
//function getCounter()
//{
//    static $counter = 0;
//    $counter++;
//    echo $counter;
//}
//getCounter(); // counter=1
//getCounter(); // counter=2
//getCounter(); // counter=3
//</editor-fold>

//<editor-fold desc="Внутри управляющих блоков">
// тут нет области видимости
//$name = 'empty';
//if (true) {
//    $name = "Tom";
//}
//echo $name; // Tom

//$a = 1;
//switch ($a) {
//    case 1: $name = 'One';
//    case 2: $name = 'Two';
//    default: $name = 'empty';
//}
//echo $name;
//</editor-fold>

// Рекомендуется не помещать много переменных, функций и классов в глобальное пространство имён
// Так как это поможет избежать конфликтов со сторонними библиотеками
//</editor-fold>
//</editor-fold>

//<editor-fold desc="Типы переменных">

// динамическая типизация
// десять простых типов

// Четыре скалярных типа:
// bool
// int
// float(число с плавающей точкой)
// string

// Четыре смешанных типа:
// array
// object
// callable
// iterable

// два специальных типа:
// resource
// null

// обычно прогер не устанавливает тип, это происходит во время выполнения скрипта, в зависимости от контекста
// для проверки типа можно использовать var_dump();

$bool = true;   // логический
$str = "foo";  // строковый
$str2 = 'foo';  // строковый
$int = 12;     // целочисленный
//
//var_dump($bool);
//var_dump($str);
//var_dump($str2);
//var_dump($int);
//
//echo gettype($bool) .'<br>';
//echo gettype($str) . '<br>';
//
// Если это целое, увеличить на четыре
//if (is_int($int)) {
//    $int += 4;
//}

// Если $a_bool - это строка, вывести её
// (ничего не выводит)
//if (is_string($bool)) {
//    echo "Строка: $bool" . '<br>';
//} else {
//    echo "Логический тип: $bool" . '<br>';
//}

//is_null();
//is_bool();
//is_int();
//is_long();
//is_numeric();
//is_string();
//is_array();
//
//is_float();
//is_double();
//
//is_object();
//</editor-fold>

//<editor-fold desc="Целые и вещественные">
// Размер типа int зависит от платформы, хотя, как правило, максимальное значение примерно равно 2 миллиардам (это 32-битное знаковое)
// PHP не поддерживает беззнаковые целые числа (int), не бывает только положительных (unsigned int)
// 64-битные платформы обычно имеют максимальное значение около 9E18
// Если PHP обнаружил, что число превышает размер типа int, он будет интерпретировать его в качестве float

// Переполнение целых на 32-битных системах
//$large_number = 2147483647;
//var_dump($large_number);                     // int(2147483647)
//
//$large_number = 2147483648;
//var_dump($large_number);                     // float(2147483648)
//
//$million = 1000000;
//$large_number = 50000 * $million;
//var_dump($large_number);                     // float(50000000000)
//
//
// Переполнение целых на 64-битных системах
//$large_number = PHP_INT_MAX;//9223372036854775807
//var_dump($large_number);                     // int(9223372036854775807)
//
//$large_number = PHP_INT_MAX + 1;
//var_dump($large_number);                     // float(9.2233720368548E+18)
//
//$million = 1000000;
//$large_number = 50000000000000 * $million;
//var_dump($large_number);                     // float(5.0E+19)
//</editor-fold>

//<editor-fold desc="Логический и строковый тип">
// Это простейший тип . bool выражает истинность значения . Он может быть либо true, либо false .
// Для указания bool, используйте константы true или false . Они обе регистронезависимы .
//$var = true;
//
//$phpVersion = '8.1';
//if ($phpVersion == "8.0") {
//    echo "Версия 8.0";
//} else {
//    echo "Версия 8.1";
//}

//var_dump((bool)"");        // bool(false)
//var_dump((bool)"0");       // bool(false)
//var_dump((bool)'0');       // bool(false)
//var_dump((bool)1);         // bool(true)
//var_dump((bool)-2);        // bool(true)
//var_dump((bool)"foo");     // bool(true)
//var_dump(2.3e5);     // bool(true)
//var_dump((bool)2.3e5);     // bool(true)
//var_dump((bool)[12]); // bool(true)
//var_dump((bool)[]);   // bool(false)
//var_dump((bool)"false");   // bool(true)

// одинарными кавычками
// двойными кавычками
// heredoc - синтаксисом
// nowdoc - синтаксисом
//$int = 19;
//echo 'это простая строка';
//
//echo "Также {$int} вы можете вставлять в строки
//символ новой строки вот так,
//это нормально ";
//
//echo 'Однажды Арнольд сказал: "I\'ll be back"';

// Heredoc
//echo <<<kawabanga
//      a
//     b
//    c
//\n
//kawabanga;
//
//echo <<<kawabanga
//      a
//     b
//    c
//    \n
//kawabanga;
//
//echo <<<kawabanga
//      a
//     b
//    c
//    \n
//    kawabanga;
//
// 4 отступа
//echo <<<openserver
//      a
//     b
//    c
//    openserver;


//class func
//{
//    var $str;
//    var $arr;
//
//    function __construct()
//    {
//        $this->str = 'Foo';
//        $this->arr = ['Bar1', 'Bar2', 'Bar3'];
//    }
//}
//
//$func = new func();
//$name = 'PHP';
//
//echo <<<EOT
//My name is "$name". \$func->str => $func->str.
//\$func->arr[1] {$func->arr[1]}.
//\n
//'A' => \x41
//EOT;

// nowdoc
//echo <<<'EOD'
//Пример текста,
//занимающего несколько строк,
//с помощью синтаксиса nowdoc. Обратные слеши всегда обрабатываются буквально,
//например, \\ и \'.
//EOD;

//class func
//{
//    var $str;
//    var $arr;
//
//    function __construct()
//    {
//        $this->str = 'Foo';
//        $this->arr = ['Bar1', 'Bar2', 'Bar3'];
//    }
//}
//
//$func = new func();
//$name = 'PHP';
//
//echo <<<'EOT'
//My name is "$name". \$func->str => $func->str.
//\$func->arr[1] {$func->arr[1]}.
//'A' => \x41
//EOT;

//$juice = "apple";
//echo "$juice juice." . PHP_EOL;
//
// Некорректно. 's' - верный символ для имени переменной, но переменная имеет имя $juice.
//echo "$juices.";

// Корректно. Строго указан конец имени переменной с помощью скобок:
//echo "${juice}s.";

//$juices = ["apple", "index" => "purple"];
//echo "$juices[0] juice." . PHP_EOL;
//echo "$juices[index] juice." . PHP_EOL;
//
//class people
//{
//    public $john = "John";
//    public $jane = "Jane";
//}
//
//$people = new people();
//
//echo "$people->john love $juices[0] juice" . PHP_EOL;
//echo "{$people->jane} love $juices[index] juice" . PHP_EOL;
//echo "{$people->jane} love {$juices['index']} juice" . PHP_EOL;
//echo "{$people->jane} love {$juices['index']} juice" . PHP_EOL;
//echo "{ $people->jane } love {$juices['index']} juice" . PHP_EOL;
//echo "{ $people->jane } love {$juices['index']} juice" . PHP_EOL;
//echo "{ $people->jane } love { $juices[index] } juice" . PHP_EOL;

//class func
//{
//    var $property = 'I am bar.';
//}
//$func = new func();
//$propName = 'property';
//$array = ['func', 'property', 'func1', 'qwerty'];
//echo
//$array[0] ."\n".
//$array[1] . "\n" .
//$array[2] . "\n".
//$array[3] . "\n";
//echo "{$func->$propName}\n";
//echo "{$func->property}\n";

//echo "{$func->{$array[1]}}\n";

// При использовании многомерных массивов внутри строк всегда используйте фигурные скобки
//$arr ['ind'] = 'whatsapp';
//echo "{$arr['ind'][3]}";

//$string = 'string';
//echo "index -2 = $string[-2].", PHP_EOL;
//$string[-3] = 'o';
//echo "changed symbol on -3 to 'o': $string.", PHP_EOL;

//</editor-fold>

//<editor-fold desc="Явное и неявное приведение типов">
// Допускаются следующие приведения типов:
//
// (int) - приведение типа к целому числу (int)
// (bool) - приведение типа к логическому значению (bool)
// (float) - приведение типа к числу с плавающей точкой (float)
// (string) - приведение типа к строке (string)
// (array) - приведение типа к массиву (array)
// (object) - приведение типа к объекту (object)

//$bar = '11111dfgdfg111u22uyy33oo';
//$foo = (int)$bar;
//
//var_dump($foo);
//
//$foo = ( int )$bar;

//if ('0' === false) {
//    var_dump(1);
//} else {
//    var_dump(0);
//}

//$foo = 10;            // $foo является целым числом
//$str = "$foo";        // $str является строкой
////var_dump($str);
//$fst = (string)$foo; // $fst также является строкой
//
//if ($fst === $str) {
//    echo "они одинаковые";
//}

//$a = 'car'; // $a является строкой
//$a[0] = 'b';   // $a по-прежнему является строкой
//echo $a;       // bar
//</editor-fold>

//<editor-fold desc="Округление чисел">
//var_dump(5/2);
//var_dump(intdiv(5,2));
//var_dump(floor(5/2));
//var_dump(ceil(5/2));
//var_dump(intdiv(PHP_INT_MIN, -1));
//var_dump(intdiv(1, 0));

//var_dump(10 % 5);//5+5 0
//var_dump(5 % 5);//0
//var_dump(5 % 4);//4 1
//var_dump(5 % 3);//3 2
//var_dump(5 % 2);//2+2 1
//var_dump(5 % 1);//1+1+1+1+1 0
//var_dump(5 % 6);//0 5
//var_dump(5 % 7);//0 5
//var_dump(5 % 8);//0 5
//var_dump(5 % -8);//0 5
//var_dump(-5 % 8);//0 -5
//var_dump(-5 % -8);//0 -5
//</editor-fold>

//<editor-fold desc="gettype() empty() is_null() isset()">
//$x = "";
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'empty' : 'NOT empty') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'is_null':'NOT is_null') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'isset' : 'NOT isset').'<br>';

//$x = null;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//phpinfo();

//var $x;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

// $x не определена
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = [];
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = ['a', 'b'];
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = false;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = true;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = 1;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = 42;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = 0;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = -1;
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = "1";
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = '0';
//$x = "0";
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = "-1";
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = "php";
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = "true";
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';

//$x = "false";
//var_dump($x);
//echo 'gettype(): ' . gettype($x) . '<br>';
//echo 'empty(): ' . (empty($x) ? 'YES' : 'NO') . '<br>';
//echo 'is_null(): ' . (is_null($x) ? 'YES' : 'NO') . '<br>';
//echo 'isset(): ' . (isset($x) ? 'YES' : 'NO') . '<br>';
//</editor-fold>

//$mysqlC = new mysql_connect('127.0.0.1', 'root', '1q2w23e34r');
//print_r($mysqlC);
//<editor-fold desc="">
// прямое преобразование в строку массивов, объектов или ресурсов не даёт никакой полезной информации о самих значениях, кроме их типов
// Более подходящий способ вывода значений для отладки - использовать функции print_r() и var_dump() .
//</editor-fold>