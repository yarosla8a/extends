<?php
//require_once "Finder.php";  extends Finder
class Worker  {
  public $name;
  protected $email;
  public $age;
  public $profession;
  public $time;
  public $title;
  protected static $workers;//Статическое, приватное свойство workers (массив).


  public function create($name, $email, $age, $profession){
//Статический, публичный метод create, который отображает только заполненые поля.
  	
  	if (!empty($name)&&!empty($email)&&!empty($age)&&!empty($profession)) {
  	
  	  self::$workers[] = [
      "name" => $name,
      "email" => $email,
      "age" => $age,
      "profession" => $profession,
      "register_time" => date('d.m.Y H:i:s'),
    
];
  		}

 return self::$workers;
}

  public function all(){
//Статический, публичный метод all, который отбражает всех работников в виде массива
    print_r(self::$workers);
  }

  public function save(){
//Статический, публичный метод save, который записывает все данные в текстовый документ
  $file_name ="workers.txt";
  
  $fp = fopen($file_name, "w");
    foreach (self::$workers as $worker) {
      $name_w= $worker['name'];
      $email_w=$worker['email'];
      $age_w=$worker['age'];
      $prof_w=$worker['profession'];
      $cont="Name:$name_w\nEmail: $email_w\nAge: $age_w\nProfession: $prof_w\n\n";
      fwrite($fp, $cont);
    }
	fclose($fp);
	if (!$file_name) {
		echo "не удалось создать fайл";
	
	}else{
		echo "файл успешно создан!";
	}
		
    }
}
  