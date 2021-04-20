<?php


include 'Affiliate.php';
include 'Customer.php';
include 'Order.php';
include 'StoreOwner.php';

//Tạo đối tượng chủ store
$storeOwner = new StoreOwner();
$storeOwner->StoreOwner('Moyes');
//echo $storeOwner->Name;

//Tạo đối tượng Affiliate John giới thiệu các đối tượng Affiliate Sarah, Eva, Jimmy, Henry.
// Obj John
$John = new Affiliate();
$John-> Affiliate('John');

//Sarah
$Sarah = new Affiliate();
$Sarah->Affiliate('Sarah');
$John->Refer($Sarah);
$customer = new Customer();
$customer ->Customer($Sarah);
$customer->PlaceOrder(new Order('800'), $storeOwner);



//Eva
$Eva = new Affiliate();
$Eva->Affiliate('Eva');
$John->Refer($Eva);
$customer = new Customer();
$customer ->Customer($Eva);
$customer->PlaceOrder(new Order('800'), $storeOwner);


//Jimmy
$Jimmy = new Affiliate();
$Jimmy->Affiliate('Jimmy');
$John->Refer($Jimmy);
$customer = new Customer();
$customer ->Customer($Jimmy);
$customer->PlaceOrder(new Order('800'), $storeOwner);

//Henry
$Henry= new Affiliate();
$Henry->Affiliate('Henry');
$John->Refer($Henry);
$customer = new Customer();
$customer ->Customer($Henry);
$customer->PlaceOrder(new Order('800'), $storeOwner);



echo '<h3>In ra danh sách các affiliate mà John giới thiệu được, bao gồn Name và Balance của mỗi
Affiliate.</h3>';
$John->PrintSubAff();

echo '<h3>John thực hiện thao tác rút tiền 300</h3>';
$John->Withdraw(300);

echo '<h3>John thực hiện thao tác rút tiền 150</h3>';
$John->Withdraw(150);


echo '<h3>Sarah thực hiện thao tác rút tiền 50</h3>';
$Sarah->Withdraw(50);


echo '<h3>In ra tổng tiền thu được của chủ store</h3>';
$storeOwner->PrintBalance();

