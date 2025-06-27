<?php
class ProductApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["products"=>Product::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["products"=>Product::pagination($page,$perpage),"total_records"=>Product::count()]);
	}
	function search($data){
		echo json_encode(["products"=>Product::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["product"=>Product::find($data->id)]);
	}
	function delete($data){
		Product::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$product=new Product();
		$product->name=$data->name;
		$product->offer_price=$data->offer_price;
		$product->manufacturer_id=$data->manufacturer_id;
		$product->regular_price=$data->regular_price;
		$product->description=$data->description;
		$product->photo=upload($file->photo, "../img",$data->name);
		$product->product_category_id=$data->product_category_id;
		$product->product_section_id=$data->product_section_id;
		$product->is_featured=$data->is_featured;
		$product->star=$data->star;
		$product->is_brand=$data->is_brand;
		$product->offer_discount=$data->offer_discount;
		$product->uom_id=$data->uom_id;
		$product->weight=$data->weight;
		$product->barcode=$data->barcode;
		$product->created_at=$data->created_at;
		$product->updated_at=$data->updated_at;
		$product->product_type_id=$data->product_type_id;
		$product->product_unit_id=$data->product_unit_id;

		$product->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$product=new Product();
		$product->id=$data->id;
		$product->name=$data->name;
		$product->offer_price=$data->offer_price;
		$product->manufacturer_id=$data->manufacturer_id;
		$product->regular_price=$data->regular_price;
		$product->description=$data->description;
		if(isset($file->photo->name)){
			$product->photo=upload($file->photo, "../img",$data->name);
		}else{
			$product->photo=Product::find($data->id)->photo;
		}
		$product->product_category_id=$data->product_category_id;
		$product->product_section_id=$data->product_section_id;
		$product->is_featured=$data->is_featured;
		$product->star=$data->star;
		$product->is_brand=$data->is_brand;
		$product->offer_discount=$data->offer_discount;
		$product->uom_id=$data->uom_id;
		$product->weight=$data->weight;
		$product->barcode=$data->barcode;
		$product->created_at=$data->created_at;
		$product->updated_at=$data->updated_at;
		$product->product_type_id=$data->product_type_id;
		$product->product_unit_id=$data->product_unit_id;

		$product->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
