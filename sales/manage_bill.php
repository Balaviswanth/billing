<?php
include("../connection.php");
if($con){
	if(isset($_POST['id']) and isset($_POST['amount'])){
		$amount=$_POST['amount'];
		$id=$_POST['id'];
		$query="UPDATE bills set paid=paid+$amount  where bill_id=$id; 
		UPDATE bills set status='PAID' where amount=paid;
		UPDATE bills set status='UNPAID' where amount!=paid and status!='CANCELLED';";
		$res=mysqli_multi_query($con,$query);
		if($res){
			echo "success";
		}
		echo mysqli_error($con);
	}
	elseif(isset($_POST['id']) and isset($_POST['print'])){
		$id=$_POST['id'];
		$print=$_POST['print'];
		$query="select bill_id,bills.customer_id,amount,discount,paid,DATE_FORMAT(bills.date,'%d-%c-%Y'),status,name,address,phone,type,GST,discount_amount
		from bills join customer on customer.customer_id=bills.customer_id 
		where bill_id=$id";
		$res=mysqli_query($con,$query);
		if($res){
			$row=mysqli_fetch_array($res);
			
			echo json_encode($row);
		}
		
	}
	elseif(isset($_POST['id']) and isset($_POST['cancel'])){
		$id=$_POST['id'];
		$query="UPDATE bills set status='CANCELLED' where bill_id=$id and status!='CANCELLED'";
		$res=mysqli_query($con,$query);
		if(mysqli_affected_rows($con)>=1){
			$query="update product , 
			(select product_id,qty from sales where bill_id=$id) t1
			set product.qty=product.qty+t1.qty
			where product.product_id=t1.product_id";
			$res=mysqli_query($con,$query);
			if($res){
					echo"Order Cancelled - Stock Updated";
			}
			
			
		}
		else{
			echo"Already Cancelled";
		}
	}
	elseif(isset($_POST['id'])){
		$id=$_POST['id'];
		$query="select product_name,type,hsn,sales.gst,sales.qty,price from sales join product on product.product_id=sales.product_id where bill_id=$id";
		$res=mysqli_query($con,$query);
		$i=1;
		$json=array();
		while($row=mysqli_fetch_array($res)){
			$arr=array();
			
			$total=$row['qty']*$row['price'];
			$arr['total']=$total;
			
			$str=$row['product_name'].$row['type'];
			$pat="/(\d+)/";
			preg_match_all($pat,$str,$matches);
			
			if(isset($matches[0][1])){
				$weight=$matches[0][1];;
			}
			else if(isset($matches[0][0])){
				$weight=$matches[0][0];
				
			}
			else{
				
				$weight=0;
			}
			
			$weight=round((float)$weight*$row['qty']/1000,2);
			$arr['weight']=$weight;
			
			$arr['no']=$i++;
			$arr['name']=$row['product_name']." - ".$row['type'];
			$arr['gst']=$row['gst'];
			$arr['hsn']=$row['hsn'];
			$arr['qty']=$row['qty'];
			$arr['price']=$row['price'];
			array_push($json,$arr);
			
		}
		echo json_encode($json);
	}
	
}
?>