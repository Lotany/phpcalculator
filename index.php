<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php calculator</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav>
        <div class="navbar">
           <ul class="navbarul">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
        </div>
        </nav>

        <div class="section1">
            <form action="">
                <input type="text" placeholder="Number">
                <br>
                <input class="two" type="text" placeholder="Number">
            </form>
           <select name="select" id="select">
           <option value="non">None</option>
                <option value="add">Add</option>
                <option value="mult">Multiply</option>
                <option value="sub">Subtract</option>
                <option value="minu">Minus</option>
                <option value="div">divide</option>
                <option value="rem">Remainder</option>
           </select>
           <button class="button" name="submit" type="submit">Calculate</button>
        </div>

        
    </body>
</html>