<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>php calculator</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="header">
        <nav class="header-1">
            <ul>
                <li>Calculator</li>
            </ul>
        </nav>

        </div>


        <h1 class="head">Perfom your calculations here</h1>
        
        <section class="section1">
            <form action="GET" method="GET">
                <input class="one" type="text" name="num1" placeholder="Enter the first number">
                <br>
                <input class="two" type="text" name="num2" placeholder="Enter the second number"><br>
               
                <div class="select">
                <select name="select" id="select">
                <option value="none">None</option>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="mult">Multiply</option>
                <option value="div">Divide</option>
                <option value="rem">Remainder</option>
                </select>
                </div>

               
                <button class="right" type="submit" name="submit">Calculate</button>
            </form>
        </section>


    <div class="footer">
        <footer>
            <a href="#">Designed by Able Kilinda</a>
        </footer>

    </div>
        </body>
</html>