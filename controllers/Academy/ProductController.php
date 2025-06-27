<?php
class ProductController extends Controller{
	public function __construct(){
		$this->module="Academy";
	}
	public function index(){
		$this->view();
	}
	public function create(){
		$this->view();
	}
public function save($data,$file){
	global $now;
	if(isset($data->create)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->offer_price)){
		$errors["offer_price"]="Invalid offer_price";
	}
	if(!preg_match("/^[\s\S]+$/",$data->manufacturer_id)){
		$errors["manufacturer_id"]="Invalid manufacturer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->regular_price)){
		$errors["regular_price"]="Invalid regular_price";
	}
	if(!preg_match("/^[\s\S]+$/",$data->description)){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data->photo)){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_category_id)){
		$errors["product_category_id"]="Invalid product_category_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_section_id)){
		$errors["product_section_id"]="Invalid product_section_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->is_featured)){
		$errors["is_featured"]="Invalid is_featured";
	}
	if(!preg_match("/^[\s\S]+$/",$data->star)){
		$errors["star"]="Invalid star";
	}
	if(!preg_match("/^[\s\S]+$/",$data->is_brand)){
		$errors["is_brand"]="Invalid is_brand";
	}
	if(!preg_match("/^[\s\S]+$/",$data->offer_discount)){
		$errors["offer_discount"]="Invalid offer_discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data->uom_id)){
		$errors["uom_id"]="Invalid uom_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->weight)){
		$errors["weight"]="Invalid weight";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtBarcode"])){
		$errors["barcode"]="Invalid barcode";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_type_id)){
		$errors["product_type_id"]="Invalid product_type_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_unit_id)){
		$errors["product_unit_id"]="Invalid product_unit_id";
	}

*/
		if(count($errors)==0){
			$product=new Product();
		$product->name=$data->name;
		$product->offer_price=$data->offer_price;
		$product->manufacturer_id=$data->manufacturer_id;
		$product->regular_price=$data->regular_price;
		$product->description=$data->description;
		$product->photo=File::upload($file->photo, "img",$data->id);
		$product->product_category_id=$data->product_category_id;
		$product->product_section_id=$data->product_section_id;
		$product->is_featured=isset($data->is_featured)?1:0;
		$product->star=$data->star;
		$product->is_brand=isset($data->is_brand)?1:0;
		$product->offer_discount=$data->offer_discount;
		$product->uom_id=$data->uom_id;
		$product->weight=$data->weight;
		$product->barcode=$data->barcode;
		$product->created_at=$now;
		$product->updated_at=$now;
		$product->product_type_id=$data->product_type_id;
		$product->product_unit_id=$data->product_unit_id;

			$product->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(Product::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->offer_price)){
		$errors["offer_price"]="Invalid offer_price";
	}
	if(!preg_match("/^[\s\S]+$/",$data->manufacturer_id)){
		$errors["manufacturer_id"]="Invalid manufacturer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->regular_price)){
		$errors["regular_price"]="Invalid regular_price";
	}
	if(!preg_match("/^[\s\S]+$/",$data->description)){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data->photo)){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_category_id)){
		$errors["product_category_id"]="Invalid product_category_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_section_id)){
		$errors["product_section_id"]="Invalid product_section_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->is_featured)){
		$errors["is_featured"]="Invalid is_featured";
	}
	if(!preg_match("/^[\s\S]+$/",$data->star)){
		$errors["star"]="Invalid star";
	}
	if(!preg_match("/^[\s\S]+$/",$data->is_brand)){
		$errors["is_brand"]="Invalid is_brand";
	}
	if(!preg_match("/^[\s\S]+$/",$data->offer_discount)){
		$errors["offer_discount"]="Invalid offer_discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data->uom_id)){
		$errors["uom_id"]="Invalid uom_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->weight)){
		$errors["weight"]="Invalid weight";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtBarcode"])){
		$errors["barcode"]="Invalid barcode";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_type_id)){
		$errors["product_type_id"]="Invalid product_type_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->product_unit_id)){
		$errors["product_unit_id"]="Invalid product_unit_id";
	}

*/
		if(count($errors)==0){
			$product=new Product();
			$product->id=$data->id;
		$product->name=$data->name;
		$product->offer_price=$data->offer_price;
		$product->manufacturer_id=$data->manufacturer_id;
		$product->regular_price=$data->regular_price;
		$product->description=$data->description;
		if($file->photo->name!=""){
			$product->photo=File::upload($file->photo, "img",$data->id);
		}else{
			$product->photo=Product::find($data->id)->photo;
		}
		$product->product_category_id=$data->product_category_id;
		$product->product_section_id=$data->product_section_id;
		$product->is_featured=isset($data->is_featured)?1:0;
		$product->star=$data->star;
		$product->is_brand=isset($data->is_brand)?1:0;
		$product->offer_discount=$data->offer_discount;
		$product->uom_id=$data->uom_id;
		$product->weight=$data->weight;
		$product->barcode=$data->barcode;
		$product->created_at=$now;
		$product->updated_at=$now;
		$product->product_type_id=$data->product_type_id;
		$product->product_unit_id=$data->product_unit_id;

		$product->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		$this->view();
	}
	public function delete($id){
		Product::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(Product::find($id));
	}
}
?>
