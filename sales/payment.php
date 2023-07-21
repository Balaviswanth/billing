<!DOCTYPE html>
<html>
<head>
	<title>Payment </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/assets/css/all.min.css">
	<!--loading scripts-->
	<!--JQUERY scripts-->
	<script src="../js/jquery.min.js"></script>
	<!--POPPER scripts-->
	<script src="../js/popper.min.js"></script>
	<!--BOOTSTRAP scripts-->
	<script src="../js/bootstrap.min.js"></script>

	
<style>
	
		.print table tr th , .print table tr td{
				font-size:0.9rem;
			
		}
		.print table tr{
			line-height:5px;
		}
		
	</style>
	
	<style>
		
		.borderless td, .borderless th {
			border: none;
		}

		.print{
			display:none;
			
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark no-print">
	<a class="navbar-brand" href="#">Billing Software</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item ">
				<a class="nav-link" href="../index.php">Home</a>
			</li>
			
			<li class="nav-item ">
				<a class="nav-link" href="../dashboard.php">Dashboard </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../sales">Billing</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="../sales/payment.php">Payment</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Report
			</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="../report/graph.php">Graphical</a>	
					<a class="dropdown-item" href="../report/table.php">Table</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../purchase">Purchase</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="../users">Create User</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="../logout.php"><i class="fa fa-sign-out-alt"></i></a>
			</li>
		</ul>
		
	<form class="form-inline my-2 my-lg-0">
	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
	</div>
</nav>

<div class=" print container table table-bordered ">
	<div class="row mt-2">	
		
		<div class=" text-center col-6 offset-md-3 w-100">
			
			<div class="text-center " height=100 >
			
				<td class="col-6">
					<img src="../images/nova_logo.jpeg"  width=100>
				</td>
				<td class="col-6">
					<span  class=" h2 font-weight-bold align-middle">NOVA AGENCIES</span>
				</td>
				
			</div>			
		</div>
	</div>
	<div class="row">
		<div class="col-6 offset-md-3 text-center">
			<p>No.&nbsp;3332/2-A1 Anthony Samy Nagar,<br> Muniyandavar Colony, N.K.Road, <strong>THANJAVUR</strong></p>
		</div>
		<div class="font-weight-bold pl-5 col-6">GSTIN: 33BUUPM8978C1ZX</div>
		<div class="col-6 pr-5 text-right">
		<span class="font-weight-bold">Phone:</span> 8940877087, 9791470938</div>
	</div>
	
	<hr>
	<div class="row">
		
		
		<div class="col-md-4">
			<h5 id="print_client_name">To:</h5>
			<span id="print_client_GST"></span><br>	
			<span id="print_client_address"></span><br>			
			<span id="print_client_phone"></span><br>
		</div>
		<div class="col-md-4 text-center">
			<h5>TAXABLE INVOICE</h5>
		</div>
		<div class="col-md-4 ">
			<h5 id="invoice_no">Invoice No.9</h5>
			<h6 id="invoice_date">Date:09/12/2020</h6>
		</div>
		
	</div>
		
		<table class="table mt-2 table-bordered">
			<thead>
					<tr>
						<th class='text-center' style="width:6%;">S.No</th>
						<th class='text-center' style="width:33%;">Particulars</th>
						<th class='text-center' style="width:12%">HSN</th>
						<th class='text-center' style="width:7%;">Kgs</th>
						<th class='text-center' style="width:7%;">Pcs</th>
						<th class='text-center' style="width:8%;">Rate</th>
						<th class='text-center' style="width:9%;">GST %</th>
						<th class='text-center' style="width:20%;">Amount</th>
						
					</tr>
					
				</thead>
				<tbody id="print_table">					
				</tbody>
				<tr>
					<th colspan=7 class='text-right'>TOTAL</th>
					<th  class="text-center" ><span> Rs. </span><span class="print_total "></span></th>
				</tr>
				
		</table>
		<table class="table  table-bordered">
			<tr class="text-center">
					<th >Taxable value</th>
					<th colspan=2>CGST</th>
					<th colspan=2>SGST</th>
					<th colspan=2>
				</tr>
				<tr class="text-center">
					<td></td>
					<td >Rate</td>
					<td >Amount</td>
					<td >Rate</td>
					<td >Amount</td>
					<td>Discount</td>
					<td id="print_discount"></td>
				</tr>
				<tr class="text-center">
					<td class="cat1"></td>
					<td >2.50</td>
					<td class="gst1"></td>
					<td >2.50</td>
					<td class="gst1"></td>
					<th colspan=2>GST</th>
					
				</tr>
				<tr class="text-center">
					<td class="cat2"></td>
					<td >6.00</td>
					<td class="gst2"></td>
					<td >6.00</td>
					<td class="gst2"></td>
					<td>CGST</td>
					<td class="cgst"></td>
				</tr>
				<tr class="text-center">
					<td class="cat3"></td>
					<td >9.00</td>
					<td class="gst3"></td>
					<td >9.00</td>
					<td class="gst3"></td>
					<td>SGST</td>
					<td class="sgst"></td>
				</tr>
				
				<tr class=" text-center">
					
					<th colspan=6>BILL AMOUNT</th>
					<th class="final_amount" colspan=1></th>
				</tr>
				<tr >
					<td colspan=7><span id="amount_in_words"></span>&nbsp;(&nbsp;<span id="print_amount_balance"></span>&nbsp;)</td>
				</tr>
		</table>
		<!--table class="table">
		
				<tr class="  text-center">
					
					<td style="width:25%;">AMOUNT PAID</td>
					<th style="width:25%;" id="print_amount_paid" ></th>
					<td style="width:25%;">BALANCE</td>
					<th style="width:25%;" id="print_amount_balance"></th>
				</tr>
		</table-->
		<div class="row">
			<div class="col-md-6 offset-md-5 text-right">
				For&nbsp;<span class="font-weight-bold">NOVA AGENCIES</span>
			</div>
		</div>
		<div class="row mt-3 ">
		<div class="col-md-1"></div>
		<div class="col-md-5">Receiver's Signature</div>
		<div class="col-md-5 text-right">Authorized Signatory</div>
		<div class="col-md-1"></div>
		</div>
		<hr>
</div>

	<div class="container-fluid mt-5 no-print">
		<div class="row  pt-5">
			<div class="col-md-10 mx-auto">
				<div class="form-row ">
					<input id="bill_from" class="form-control col-2 mx-auto "  type="date"><br>
					<input id="bill_to" class="form-control col-2 mx-auto"  type="date"><br>
					<button class="btn btn-primary col-2 mx-auto" id="get_bills">Generate</button>
					<label > OR </label>
					<input id="bill_id" class="form-control col-2 mx-auto" type="number" placeholder="Bill ID"><br>
					
					<button class="btn btn-primary col-2 mx-auto" id="get_bill">Get Bill</button>
				</div>
			</div>
		</div>
		
		<div class="row mt-5">
			
			<div id="table_container" class="col-md-10 mx-auto">
			</div>
		</div>
	</div>
<script>
var d=new Date();
var year=d.getFullYear().toString()
var month=(1+d.getMonth()).toString().length==1?"0"+(1+d.getMonth()).toString():(1+d.getMonth()).toString()
var date=d.getDate().toString().length==1?"0"+d.getDate().toString():d.getDate().toString()
$("#bill_from").val(year+"-01-01")
$("#bill_to").val(year+"-"+month+"-"+date)

</script>

<script>
function get_bills(){

	var from=$("#bill_from").val()
	var to=$("#bill_to").val()
	$.ajax({
		url:"get_bills.php",
		data:"from="+from+"&to="+to,
		type:"POST",
		success:function(data){
			$("#table_container").html(data)
		}
	})

}

$(document).on("click","#get_bill",function(){
	var id=$("#bill_id").val()
	if(id==""){
		alert("Bill ID is Empty");
		
	}
	else{
		$.ajax({
			url:"get_bills.php",
			data:"id="+id,
			type:"POST",
			success:function(data){
				$("#table_container").html(data)
			}
		})
	}
})
get_bills()
$(document).on("click","#get_bills",function(){
	get_bills()
})
$(document).on("click",".bill_paid",function(){
	var id=$(this).parent().parent().attr("bill_id")
	var paid=prompt("Enter amount Paid")
	if(paid==""){
		alert("Amount cant be empty")
	}
	else{
		$.ajax({
			url:"manage_bill.php",
			data:"id="+id+"&amount="+paid,
			type:"POST",
			success:function(data){
				alert(data);
			}
		})
	}
})

function GenerateBill(data)
{
	bill_json = JSON.parse(data);
	var table = $('#print_table');
	var body="";
	
	var subtotal=0;
	for (product in bill_json){
		
		var row= "<tr>"
		row += "<td>"+bill_json[product]['no']+"</td>";
		row += "<td>"+bill_json[product]['name']+"</td>";
		row += "<td class='text-center'>"+bill_json[product]['hsn']+"</td>";
		row += "<td class='text-right'>"+bill_json[product]['weight']+"</td>";
		row += "<td class='text-right'>"+bill_json[product]['qty']+"</td>";
		row += "<td class='text-right'>"+bill_json[product]['price']+"</td>";
		row += "<td class='text-center'>"+bill_json[product]['gst']+"</td>";
		row += "<td class='text-right'>"+parseFloat(bill_json[product]['total']).toFixed(2)+"</td>";
		row += "</tr>";
		body+= row;
		
		subtotal += parseFloat(bill_json[product]['price'])* parseFloat(bill_json[product]['qty']);
	}
	table.html(body);
	$(".print_total").html(subtotal.toFixed(2))
}

function CalculateGST(data){
	bill_json = JSON.parse(data);
	console.log(bill_json);
	var cat1=0 ,cat2=0,cat3=0,GST=0;
	for (product in bill_json){
		amount=parseFloat(bill_json[product]['total']);
		gst_rate=parseFloat(bill_json[product]['gst']);
		if(gst_rate==5){
			cat1+=amount;
		}
		else if(gst_rate==12){
			cat2+=amount;
		}
		else if(gst_rate==18){
			cat3+=amount;
		}
		
	}
	
		$(".cat1").html(cat1.toFixed(2));
		$(".cat2").html(cat2.toFixed(2));
		$(".cat3").html(cat3.toFixed(2));
		
		$(".gst1").html(((5/95)*cat1/2).toFixed(2));
		$(".gst2").html(((12/88)*cat2/2).toFixed(2));
		$(".gst3").html(((18/82)*cat3/2).toFixed(2));
		
		GST=(((5/95)*cat1) + ((12/88)*cat2) + ((18/82)*cat3)) /2;
		$(".cgst").html(GST.toFixed(2));
		$(".sgst").html(GST.toFixed(2));
		
}

var data=0;
$(document).on("click",".generate_bill",function(){
	var id=$(this).parent().parent().attr("bill_id")
	$.ajax({
		url:"manage_bill.php",
		data:"id="+id,
		type:"POST",
		success:function(data){
			
			GenerateBill(data);
			
			CalculateGST(data);
			//$("#print_table").html(data);
			
			$.ajax({
				url:"manage_bill.php",
				data:"id="+id+"&print=1",
				type:"POST",
				success:function(data){
										
					data=JSON.parse(data);
					
					$("#invoice_no").html("Invoice No. "+data[0])
					$("title").html("Invoice No. "+data[0])
					var invoice_date=Date(data[5]);
					var id= new Date(invoice_date);
					$("#invoice_date").html("Date. "+id.getDate()+"/"+id.getMonth()+"/"+id.getFullYear())
					$("#print_client_name").html("To : "+data[7])
					$("#print_client_id").html("Client ID. "+data[1])
					$("#print_client_address").html("Address : "+data[8])
					$("#print_client_phone").html("Phone : "+data[9])
					var gst=(data[11]=="")? " ------------------ ":data[11]
					$("#print_client_GST").html("GST No: "+gst)
					total		= parseFloat(data[2]);
					paid		= parseFloat(data[4]);
					discount_amount = parseFloat(data[12]);
					console.log(data[12]);
					
					var balance	= total - paid;
					var gst		= parseFloat($(".cgst").html()); 
					var total_nogst = total - 2 * gst;
					
					
					
					
					
					$("#print_amount_paid").html("Rs. "+parseFloat(data[4]).toFixed(2)+"/-")
					$("#print_amount_balance").html("Rs. "+Math.round(balance).toFixed(2)+"/-")
					
					$("#print_discount").html(discount_amount.toFixed(2))
					$(".final_amount").html("Rs. "+Math.round(parseFloat(data[2])).toFixed(2))
					
					var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
					var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

					function inWords (num) {
						if ((num = num.toString()).length > 9) return 'overflow';
						n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
						if (!n) return; var str = '';
						str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
						str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
						str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
						str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
						str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : 'only ';
						return str;
					}

					$("#amount_in_words").html('<p><small>Amount Payable (in words)</small></p><strong>'+inWords(parseFloat(data[2]).toFixed(0))+'</strong>');
					

					window.print()
				}
			})
			
		}
	})
})



$(document).on("click",".cancel_bill",function(){
	var id=$(this).parent().parent().attr("bill_id")
	$.ajax({
		url:"manage_bill.php",
		data:"id="+id+"&cancel=1",
		type:"POST",
		success:function(data){
			alert(data)
		}
	})
})
</script>
</body>
</html>

<style type="text/css">
		@media print{
			.print{
				display:block;
				
			}
			*{
			font-size:20px;
			}
			.no-print{
				display:none;
			}
		}
		
</style>