<?php namespace Controllers\ProductController;
require_once  __DIR__.'/../../init.php'; ?>

<?php

use App\Product\Product;

class ProductController
{


  function add_product($a, $b, $c,$d, $e){
	//create an instance of product class
	$newprod_object = new Product();

	//run the add product method
	$insertprod = $newprod_object->add_new_product($a, $b, $c,$d, $e);

	//check if method worked
	if ($insertprod) {

		//return query result (boolean)
		return $insertprod;

	}else{

		return false;
	}
}



function insert_image($a){
	//create an instance of product class
	$newprod_object = new Product();

	//run the add product method
	$insertprod = $newprod_object->insert_image($a);

	//check if method worked
	if ($insertprod) {

		//return query result (boolean)
		return $insertprod;

	}else{

		return false;
	}
}


function view_all_images(){
	//Create an array variable to hold list of products
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the view all product method
	$product_records = $product_object->view_all_images();

	//check if the method worked
	if ($product_records) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $product_object->db_fetch()) {
			//Assign each result to the array
			$product_array[] = $one_record;
		}
	}
	//return the array
	return $product_array;
}




//search product function - takes the search term
function search_product_fxn($stm){
	//Create an array variable to hold list of search records
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the search product method
	$product_records = $product_object->search_a_product($stm);

	//check if the method worked
	if ($product_records) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $product_object->db_fetch()) {

			//Assign each result to the array
			$product_array[] = $one_record;
		}
	}
	//return the array
	return $product_array;
}

//view all product function
function view_products($category){
	//Create an array variable to hold list of products
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the view all product method
	$product_records = $product_object->view_products($category);

	//check if the method worked
	if ($product_records) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $product_object->db_fetch()) {
			//Assign each result to the array
			$product_array[] = $one_record;
		}
	}
	//return the array
	return $product_array;
}



function recommended(){
	//Create an array variable to hold list of products
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the view all product method
	$product_records = $product_object->recommended();

	//check if the method worked
	if ($product_records) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $product_object->db_fetch()) {
			//Assign each result to the array
			$product_array[] = $one_record;
		}
	}
	//return the array
	return $product_array;
}



function new_arrival($category){
	//Create an array variable to hold list of products
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the view all product method
	$product_records = $product_object->new_arrival($category);

	//check if the method worked
	if ($product_records) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $product_object->db_fetch()) {
			//Assign each result to the array
			$product_array[] = $one_record;
		}
	}
	//return the array
	return $product_array;
}


public function viewAllProducts(){
	//Create an array variable to hold list of products
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the view all product method
	$product_records = $product_object->view_all_products();

	//check if the method worked
	if ($product_records) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $product_object->db_fetch()) {
			//Assign each result to the array
			$product_array[] = $one_record;
		}
	}
	//return the array
	return $product_array;
}



function view_order_details($cid,$status){
	//Create an array variable to hold list of products
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the view all product method
	$product_records = $product_object->view_order_details($cid,$status);

	//check if the method worked
	if ($product_records) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $product_object->db_fetch()) {
			//Assign each result to the array
			$product_array[] = $one_record;
		}
	}
	//return the array
	return $product_array;
}

//view one product function - takes the id
function viewOneProduct($pin){
	//Create an array variable to the product key value pair
	$product_array = array();

	//create an instance of the product class
	$product_object = new Product();

	//run the view one product method
	$product_record = $product_object->view_one_product($pin);

	//check if the method worked
	if ($product_record) {

		//fetch the result
		$one_record = $product_object->db_fetch();
		//assign to array
		$product_array[] = $one_record;
	}
	//return array
	return $product_array;
}



//update a product function - takes id, title and price
function update_product_fxn($a, $b, $c){
	//create an instance of the product class
	$product_object = new Product();

	//run the update one product method
	$update_product = $product_object->update_one_product($a, $b, $c);

	//check if method worked
	if ($update_product) {

		//return query result (boolean)
		return $update_product;
	}else{
		//return false
		return false;
	}
}



function update_status($a,$b){
	//create an instance of the product class
	$product_object = new Product();

	//run the update one product method
	$update_product = $product_object->update_status($a,$b);

	//check if method worked
	if ($update_product) {

		//return query result (boolean)
		return $update_product;
	}else{
		//return false
		return false;
	}
}


//delete a product function - takes the id
function delete_product_fxn($a){
	//create an instance of the product class
	$product_object = new Product();

	//run the delete one product method
	$delete_product = $product_object->delete_one_product($a);

	//check if method worked
	if ($delete_product) {

		//return query result (boolean)
		return $delete_product;
	}else{
		//return false
		return false;
	}
}

function add_to_cart($a,$c){
	//create an instance of cart class
	$newcart_object = new Product();

	//run the add to cart method
	$addcart = $newcart_object->add_to_cart($a,$c);
	if ($addcart) {
		//return query result (boolean)
		return $addcart;
	}else{
		return false;
	}
}

function view_all_cart($pin){
	//Create an array variable to hold list of cart items
	$cart_array = array();

	//create an instance of the cart class
	$cart_object = new Product();

	//run the view cart method
	$cart_record = $cart_object->view_cart_item($pin);

	//check if the method worked
	if ($cart_record) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $cart_object->db_fetch()) {
			//Assign each result to the array
			$cart_array[] = $one_record;
		}
	}
	//return array
	return $cart_array;
}

//count cart function - takes customer id
//count the cart item of a customer
function count_cart_fxn($a){

	//create an instance of the cart class
	$cart_object = new Product();

	//run the view cart method
	$card_records = $cart_object->view_cart_item($a);

	//check if the method worked
	if ($card_records) {

		//return count
		return $cart_object->db_count();
	}else{
		return false;
	}

}

//view cart function - takes the customer id

//update a cart item function - takes product id, customer id and quantity
function update_cart($a, $b, $c){
	//create an instance of the cart class
	$cart_object = new Product();
	//run the update one cart method
	$update_cart = $cart_object->update_cart_quantity($a, $b, $c);

	//check if method worked
	if ($update_cart) {

		//return query result (boolean)
		return $update_cart;
	}else{
		//return false
		return false;
	}
}

//delete one cart item function - takes the product id and customer id
function delete_cart($a, $b){
	//create an instance of the cart class
	$cart_object = new Product();

	//run the delete one cart method
	$delete_cart = $cart_object->delete_cart_item($a, $b);

	//check if method worked
	if ($delete_cart) {

		//return query result (boolean)
		return $delete_cart;
	}else{
		//return false
		return false;
	}
}

//delete all cart item for a customer function - takes the customer id
function delete_all_cart_fxn($a){
	//create an instance of the cart class
	$cart_object = new Product();

	//run the delete all cart method
	$delete_cart = $cart_object->delete_all_cart_item($a);

	//check if method worked
	if ($delete_cart) {

		//return query result (boolean)
		return $delete_cart;
	}else{
		//return false
		return false;
	}
}


function check_duplicate($a, $b){



	//Create an array variable to hold list of cart items
	$cart_array = array();

	//create an instance of the cart class
	$cart_object = new Product();

	//run the view cart method
	$cart_record = $cart_object->check_cart_duplicate($a, $b);

	//check if the method worked
	if ($cart_record) {

		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $cart_object->db_fetch()) {
			//Assign each result to the array
			$cart_array[] = $one_record;
		}
	}
	//return array
	return $cart_array;

}


function insert_order_fxn1($a){
	$myarray=array();
	$customer=new Product();
	$checkinsert=$customer->insert_order($a);
	if ($checkinsert){
		$record=$customer->db_fetch();
		$myarray['order_id']=$record;
		$orderid=$myarray['order_id'];
	}
		return $orderid;

	//check if the method worked

	//return the just inserted order id

}

//insert order details function.
//takes orderid, productid, customer id and quantity
function insert_order_detail_fxn($a, $b, $c, $d){
	$customer=new Product();
	$checkinsert=$customer->insert_order_details($a, $b, $c, $d);
	if ($checkinsert){
		return true;
	}else{
		return false;
	}


}

function insert_order_fxn($id, $pid,$email, $number, $address,$town,$qty){
	$customer=new Product();
	$checkinsert=$customer->insert_order($id, $pid,$email, $number, $address,$town,$qty);
	if ($checkinsert){
		return true;
	}else{
		return false;
	}


}

//insert payment function.
//takes amount, customer id and order id
function insert_payment_fxn($a, $b, $c){
	$customer=new Product();
	$checkinsert=$customer->insert_payment($a, $b, $c);
	if ($checkinsert){
		return true;
	}else{
		return false;
	}

}
function view_product_name($a){
	//create an instance of the product class
	$product_object = new Product();
	//run the delete one product method
	$view_product = $product_object->view_product_name($a);

	if ($view_product) {

		$one_record = $product_object->db_fetch();
			//Assign each result to the array
		return $one_record;
		}
	else{
	//return array
	return false;
}
}


public function create_category($category){
  	$checkinsert=(new Product())->create_category($category);

    return $checkinsert = $checkinsert?:false;
}


public function displayHomeProd(){

  $prod = $this->viewAllProducts();
  // $amt =getTotalItemAmountInCart();

  if ($prod) {
      foreach ($prod as $value) {
          $id = $value['product_id'];
          $title = $value['product_title'];
          $price = $value['product_price'];
          $desc = $value['product_desc'];
        $img = $value['img1'];

        echo <<< _HomeProd
        <div class="col-lg-4">
            <div class="trainer-item">
                <div class="image-thumb">
                    <img src="assets/images/product-5-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                    <span>
                      GH¢ $price.00
                    </span>

                    <h4>$title</h4>

                    <p>$desc</p>

                    <ul class="social-icons">
                        <li><a href="product-details.php?prod_id=$id">+ View More</a></li>

                        <li><button type="button" href="./views/product-details/$id" onclick="addItemToCart($id,1);" class="btn btn-primary" style="color:white;">+ Add To Cart</button></li>
                    </ul>
                </div>
            </div>
        </div>
        _HomeProd;

      }
    }

}



public function displayOneProduct($prod_id){

  $prod = $this->viewOneProduct($prod_id);
  // $amt =getTotalItemAmountInCart();

  // print_r($prod);
          $id = $prod[0]['product_id'];
          $title = $prod[0]['product_title'];
          $price = $prod[0]['product_price'];
          $desc = $prod[0]['product_desc'];



        $img = $prod[0]['img1'];

  echo <<< _displayOne

  <div class="row">
    <div class="col-md-8">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/images/product-image-1-1200x600.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/product-image-1-1200x600.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/product-image-1-1200x600.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <br>
    </div>

    <div class="col-md-4">
      <div class="contact-form">
        <form action="#" id="contact">
          <div class="form-group">
            <p>$desc</p>
          </div>

          <label>Extra 1</label>

          <select>
              <option value="0">Extra A</option>
              <option value="1">Extra B</option>
              <option value="2">Extra C</option>
          </select>

          <div class="row">
            <div class="col-md-6">
              <label>Quantity</label>

              <input type="text" placeholder="1">
            </div>
          </div>

          <div class="main-button">
              <a href="checkout.html">Add to cart</a>
          </div>
        </form>
      </div>

      <br>
    </div>
  </div>



  _displayOne;



}




}
