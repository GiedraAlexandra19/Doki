<html>
  <head>
      <title>Form Example</title>
  </head>
  <body>
    <form method="post" action="/">
        <fieldset>
            <legend>Doki v0.15</legend>
            <ul>
                <li>ROBO: My name is Robo. I will answer your queries about Chatbots. If you want to exit, type Bye!: <input name='bot'>
                </li>
            </ul><input type='submit' value='Enviar'>
        </fieldset>
    </form>

    <p>{{message}}</p>

  </body>
</html>