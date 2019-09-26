<!DOCTYPE html>
<html lang="ru">
<head>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <script>
      /**let a = +prompt("введите число 'а'");//+ возврат числа
      //let b = +prompt("введите число 'b'");
      //let c = a*b;
      //alert(d++);//5 инкремент - сначала текущее, а в память новое (прибавление 1)
      //alert(++d);//7
      //alert(--d);//6
      //let c = Number(a)+Number(b);
      //alert(a**B); // степень
      //alert(a%B); //остаток от деления
      //let a = 5
      //let b = "строка"
      //let с = true
      //let d //undefind
      //let f = null
      // типы данных
      // * Number
      // * String ""
      // * Boolean (true/false)
      // * undefind
      // * null
      // * Object
      //let a = prompt("введите число 'а'");
      //if (a===20) {
      //  alert("a=20");
      //alert("Программа завершена");
      //let arr=('BMW','ZAZ','vaz','gaz');
      //alert(arr[2]);// vaz
      //if (a>b) alert("число а больше b");
      //else if(a==b) alert("числа равны");
      //else alert("число b больше a");
      //let n=0;
      //let answer = prompt("не лает не кусает");
      //if (answer=="замок" || answer=="Замок"){
      //  alert ('ура! Правильно');
      //  ++n;
      //  }
      //else
      //alert('нет');
      //answer = prompt("много рук, одна нога");
      //if (answer=="Дерево" || answer=="дерево"){
      //alert ('ура! Правильно');
      //  ++n;
      //  }
      //else
      //  alert('нет');
      //alert("правильных ответов"+n);
      //циклы
      //let a=2;
      //while (a<5) {
      //  a = prompt("введите a"); 
      //}
      //let a;
      //do {
      //  a = prompt("введите a");
      //} while (a<5)_____
      //let i = 0;
      //while (i<3){
      //  i++;
      //  alert (i);
      //}------
      //for (let i=0; i<3; i++) {
      //  alert(i); //в этом случае переменная после цикла не хранится в памяти
      //}_*/
      let arr = [4,5,4,3,4,2,5];
      let sum=0;
      for (let i=0; i<arr.length; i++){
        sum += arr[i];//sum = sum + arr[i];
      }
      alert(sum/arr.length);
    </script>
  </body>
</html>
