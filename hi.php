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
      function getCoffee(price,name) {
          if (money.value>=price) {
              money.value-=price;
              progress.parentNode.style.display = "flex";//в полосе прогресса меняет стиль с блочного на flex
              display.childNodes[1].innerText = `Ожидайте...`;
              let i = 0;
              let timerId = setInterval(() => {
                progress.style.width = ++i+'%';
                if (i==104) {
                  display.childNodes[1].innerText = `${name} готов`;
                }
              }, 200);
            }
          else
            display.innerText = "Недостаточно средств1";
      }
	  class User {
		constructor(name) {
		this.name = name;
		}
		sayHi() {
		alert(this.name);
		}

		}
		let user = new User("Вася Пупкин");
		user.sayHi(); // Вася
    </script>
  </body>
</html>
