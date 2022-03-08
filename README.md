
# Shopping

A site to buy phones and laptops


## Authors

- [@abdalkreem2000-1](https://github.com/abdalkreem2000-1)


## Deployment

To deploy this project run

```bash
  you'r need myphpAdmin so download Xampp
```
```bash
  include the database into myphpAdmin(my_project.sql)
```
```bash
  add project to path C:\xampp\htdocs
```
```bash
  go to any browser and search http://loaclhost/'file project name'
```

## 🚀 About Me
I'm a full stack developer...


## 🛠 Skills
Javascript, php, bootstrap...


## Usage/Examples
This code receives the product name from the previous page and compares it with the database and returns thedata of the selected item and when you press
 [add to cart ]
 Add the item to the table name cart

```php
<?php $name = $_GET['name'];
				
				$pdo=new PDO('mysql:host=localhost;dbname=my_project','root', '');
				
				$stmt = $pdo->query("SELECT * FROM phone JOIN product  ON  phone.name=product.name ; ");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ( $rows as $row ){
	if ($name===$row['name']) {
	 	
	 
echo "<div class='col-lg-6'>
					<div class='details_image'>
						<div class='details_image_large'><img src=".$row['src']." ><div class='product_extra product_new'><a href='categories.html'>New</a></div></div>
						
					</div>
				</div>";
echo " <div class='col-lg-6'>
					<div class=details_content'>
						<div class='details_name'>".$row['Name']."</div>
						<div class='details_discount'>$890</div>
						<div class='details_price'>$".$row['price']."</div>

						<!-- In Stock -->
						<div class='in_stock_container'>
							<div class='availability'>Availability:</div>
							<span>In Stock</span>
						</div>
						<div class='details_text'>
							<p>".$row['explained']."</p>
						</div>
						<br> <br><br>	";
                     $src1=$row['src'];
                     $price1=$row['price'];
                     $name1=$row['Name'];
					 }}
						
						 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
     	if (isset($_POST['submit1'])){
						 	$sql1 = "INSERT INTO cart (name, price, src) 
              VALUES (:name, :price, :src)"; 
    
     
    $stmt1 = $pdo->prepare($sql1);
    $stmt1->execute(array(
        ':name' => $name1,
        ':price' => $price1,
        ':src' => $src1
        ));}
						 
				?>
```


## Demo

- [shopphone1999](https://shopphone1999.000webhostapp.com/)

