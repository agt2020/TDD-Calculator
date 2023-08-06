<html>
        <head>
                <title>TDD Simple Calculator</title>
        </head>
        <body>
                <form action="#" method="POST">
                        <input type="number" name="num1" value="<?php echo $_POST['num1']; ?>">
                        <select name="operator">
                                <option value="sum" <?php if($_POST['operator'] == "sum") echo 'selected'; ?>>+</option>
                                <option value="sub" <?php if($_POST['operator'] == "sub") echo 'selected'; ?>>-</option>
                                <option value="mul" <?php if($_POST['operator'] == "mul") echo 'selected'; ?>>*</option>
                                <option value="div" <?php if($_POST['operator'] == "div") echo 'selected'; ?>>/</option>
                        </select>
                        <input type="number" name="num2" value="<?php echo $_POST['num2']; ?>">
                        <input type="submit" value="Calc">
                </form>
                <?php require "app/controller.php"; ?>
        </body>
</html>