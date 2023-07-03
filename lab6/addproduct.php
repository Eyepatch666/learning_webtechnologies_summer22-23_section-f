<html>
<head>
    <title>Add Product</title>
    <body>
    <a href="home.php">Home</a>&nbsp <a href="display.php">Display Products </a>
    <br>
     <fieldset>
      <legend>ADD PRODUCT</legend>
         <table>             
            <form method="post" action="addproductval.php" enctype="">                 
                <table>
                <tr><td>Name<br><input type="text" name="name"></input></td></tr>
                    <tr><td>Buying Price<br><input type="text" name="buyingprice"></input></td></tr>
                    <tr><td>Selling Price<br><input type="text" name="sellingprice"></input></td></tr>
                    <tr><td><hr></td></tr>
                    <tr><td><input type="radio" name="display" value="yes"></input>Display</td></tr>
                    <tr><td><hr></td></tr>
                    <tr><td><input type="submit" value="Submit" ></input> </td></tr>
            </form>
                </table>
     </fieldset>
    </body>
</html>