<!doctype html>
<?php include 'main.php';
 ?>
 <html>
	 <head>
			<title>Operation Details</title>
			<script src="../Chart.js"></script>
		</head>
		<style>
		p1 {
		    display: block;
 		    margin-left: 10cm;
   		}
		p2 {
			color: rgb(192,192,192);
		}
		span.tab{
		padding: 0 20px; /* Or desired space*/
		}
		.box1{
		width: 25px;
		height: 25px;
		background-color: rgba(192,192,192,0.5);
		border: 1px solid gray;		
		}
		.box2{
		width: 25px;
		height: 25px;
		background-color: rgba(0,0,255,0.5);
		border: 1px solid gray;		
		}
		.box3{
		width: 25px;
		height: 25px;
		background-color: rgba(255,0,0,0.5);
		border: 1px solid gray;		
		}
		.box4{
		width: 25px;
		height: 25px;
		background-color: rgba(128,0,0,0.5);
		border: 1px solid gray;		
		}
		.box5{
		width: 25px;
		height: 25px;
		background-color: rgba(128,128,0,0.5);
		border: 1px solid gray;		
		}
		.box6{
		width: 25px;
		height: 25px;
		background-color: rgba(0,128,128,0.5);
		border: 1px solid gray;		
		}
		.box7{
		width: 25px;
		height: 25px;
		background-color: rgba(128,0,128,0.5);
		border: 1px solid gray;		
		}
		.box8{
		width: 25px;
		height: 25px;
		background-color: rgba(255,255,0,0.5);
		border: 1px solid gray;		
		}
		.box9{
		width: 25px;
		height: 25px;
		background-color: rgba(0,128,0,0.5);
		border: 1px solid gray;		
		}
		.box10{
		width: 25px;
		height: 25px;
		background-color: rgba(0,0,0,0.5);
		border: 1px solid gray;		
		}
		
   		</style>
		<body>
		     <div>
			<p1>
		       	  <canvas id="canvas" height="450" width="1400"></canvas>
			</p1>
		     </div>
	 	<center>
	 	<script>

		var month1="January";
		var month2="February";
		var month3="March";
		var month4="April";
		var month5="May";
		var month6="June";
		var month7="July";
		var month8="August";
		var month9="September";
		var month10="October";
		var month11="November";
		var month12="December";

        var i=0;
        
		var doc_name=new Array();
		var avg_jan=new Array();
		var avg_feb=new Array();
		var avg_mar=new Array();
		var avg_apr=new Array();
		var avg_may=new Array();
		var avg_jun=new Array();
		var avg_jul=new Array();
		var avg_aug=new Array();
		var avg_sep=new Array();
		var avg_oct=new Array();
		var avg_nov=new Array();
		var avg_dec=new Array();

	   var count=<?php echo $_SESSION["php_count"];?>;
		
		
	   <?php 
	   $k=0;
	   $k1=1;
	   $k2=2;
	   $k3=3;
	   $k4=4;
	   $k5=5;
	   $k6=6;
	   $k7=7;
	   $k8=8;
	   $k9=9;
	   ?>;
		
       i=0;
       if (count==1)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)", 
					highlightFill: "rgba(192,192,192,0.75)", highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] } ] }
		
		document.write("<table>");
		document.write("<tr>");
		document.write("<td>");
		document.write("<div class='box1'></div>");
		document.write("</td>");
		document.write("<td>");
		document.write("&nbsp;&nbsp; <?php echo $_SESSION["phy_name_all"][$k];?>");
		document.write("</td>");
        document.write("</tr>");
		document.write("</table>");
        }
       else if (count==2)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)", highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)", highlightFill: "rgba(0,0,255,0.75)",
highlightStroke: "rgba(0,0,255,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] } ] }
	    document.write("<table>");
		document.write("<tr>");
		document.write("<td>");
		document.write("<div class='box1'></div>");
		document.write("</td>");
		document.write("<td>");
		document.write("&nbsp;&nbsp; <?php echo $_SESSION["phy_name_all"][$k];?>&nbsp;");
		document.write("</td>");
		document.write("<td>");
		document.write("<div class='box2'></div>");
		document.write("</td>");
		document.write("<td>");
		document.write("&nbsp;&nbsp; <?php echo $_SESSION["phy_name_all"][$k1];?>");
		document.write("</td>");
        document.write("</tr>");
		document.write("</table>");
      }
      else if (count==3)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] }] }
		document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");        
        }
      else if (count==4)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k3]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k3]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k3]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k3]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k3]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k3]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k3]"]; ?>"] }] }
		document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");                
		document.write("<br>");
	    document.write("<div class='box4'></div>","<?php echo $_SESSION["phy_name_all"][$k3];?>");                
        }
       else if (count==5)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"]},
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k3]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k3]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k3]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k3]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k3]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k3]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k3]"]; ?>"] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k4]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k4]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k4]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k4]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k4]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k4]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k4]"]; ?>"] }]}
		document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");                
		document.write("<br>");
	    document.write("<div class='box4'></div>","<?php echo $_SESSION["phy_name_all"][$k3];?>");                       
		document.write("<br>");
	    document.write("<div class='box5'></div>","<?php echo $_SESSION["phy_name_all"][$k4];?>");                       
        }
       else if (count==6)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k3]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k3]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k3]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k3]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k3]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k3]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k3]"]; ?>"] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k4]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k4]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k4]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k4]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k4]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k4]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k4]"]; ?>"] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k5]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k5]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k5]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k5]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k5]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k5]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k5]"]; ?>"] }]}
		document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");                
		document.write("<br>");
	    document.write("<div class='box4'></div>","<?php echo $_SESSION["phy_name_all"][$k3];?>");                       
		document.write("<br>");
	    document.write("<div class='box5'></div>","<?php echo $_SESSION["phy_name_all"][$k4];?>");                             
		document.write("<br>");
	    document.write("<div class='box6'></div>","<?php echo $_SESSION["phy_name_all"][$k5];?>");                             
        }
       else if (count==7)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k3]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k3]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k3]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k3]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k3]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k3]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k3]"]; ?>"] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k4]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k4]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k4]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k4]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k4]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k4]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k4]"]; ?>"] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k5]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k5]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k5]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k5]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k5]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k5]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k5]"]; ?>"] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k6]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k6]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k6]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k6]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k6]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k6]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k6]"]; ?>"] }]}
        document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");                
		document.write("<br>");
	    document.write("<div class='box4'></div>","<?php echo $_SESSION["phy_name_all"][$k3];?>");                       
		document.write("<br>");
	    document.write("<div class='box5'></div>","<?php echo $_SESSION["phy_name_all"][$k4];?>");                             
		document.write("<br>");
	    document.write("<div class='box6'></div>","<?php echo $_SESSION["phy_name_all"][$k5];?>");                             
		document.write("<br>");
	    document.write("<div class='box7'></div>","<?php echo $_SESSION["phy_name_all"][$k6];?>");                             
        }
     else if (count==8)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k3]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k3]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k3]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k3]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k3]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k3]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k3]"]; ?>"] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k4]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k4]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k4]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k4]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k4]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k4]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k4]"]; ?>"] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k5]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k5]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k5]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k5]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k5]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k5]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k5]"]; ?>"] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k6]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k6]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k6]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k6]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k6]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k6]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k6]"]; ?>"] },
				{ label: "My eighth dataset", fillColor : "rgba(255,255,0,0.5)", strokeColor : "rgba(255,255,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k7]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k7]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k7]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k7]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k7]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k7]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k7]"]; ?>"] }]}
        document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");                
		document.write("<br>");
	    document.write("<div class='box4'></div>","<?php echo $_SESSION["phy_name_all"][$k3];?>");                       
		document.write("<br>");
	    document.write("<div class='box5'></div>","<?php echo $_SESSION["phy_name_all"][$k4];?>");                             
		document.write("<br>");
	    document.write("<div class='box6'></div>","<?php echo $_SESSION["phy_name_all"][$k5];?>");                             
		document.write("<br>");
	    document.write("<div class='box7'></div>","<?php echo $_SESSION["phy_name_all"][$k6];?>");                             
		document.write("<br>");
	    document.write("<div class='box8'></div>","<?php echo $_SESSION["phy_name_all"][$k7];?>");                             
        }
       else if (count==9)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k3]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k3]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k3]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k3]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k3]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k3]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k3]"]; ?>"] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k4]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k4]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k4]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k4]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k4]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k4]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k4]"]; ?>"] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k5]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k5]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k5]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k5]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k5]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k5]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k5]"]; ?>"] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k6]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k6]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k6]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k6]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k6]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k6]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k6]"]; ?>"] },
				{ label: "My eighth dataset", fillColor : "rgba(255,255,0,0.5)", strokeColor : "rgba(255,255,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k7]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k7]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k7]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k7]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k7]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k7]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k7]"]; ?>"] },
				{ label: "My ninth dataset", fillColor : "rgba(0,128,0,0.5)", strokeColor : "rgba(0,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k8]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k8]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k8]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k8]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k8]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k8]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k8]"]; ?>"] }]}
        document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");                
		document.write("<br>");
	    document.write("<div class='box4'></div>","<?php echo $_SESSION["phy_name_all"][$k3];?>");                       
		document.write("<br>");
	    document.write("<div class='box5'></div>","<?php echo $_SESSION["phy_name_all"][$k4];?>");                             
		document.write("<br>");
	    document.write("<div class='box6'></div>","<?php echo $_SESSION["phy_name_all"][$k5];?>");                             
		document.write("<br>");
	    document.write("<div class='box7'></div>","<?php echo $_SESSION["phy_name_all"][$k6];?>");                             
		document.write("<br>");
	    document.write("<div class='box8'></div>","<?php echo $_SESSION["phy_name_all"][$k7];?>");                             
		document.write("<br>");
	    document.write("<div class='box9'></div>","<?php echo $_SESSION["phy_name_all"][$k8];?>");                             
        }
       else if (count==10)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k]"]; ?>"] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k1]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k1]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k1]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k1]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k1]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k1]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k1]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k1]"]; ?>"] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k2]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k2]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k2]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k2]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k2]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k2]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k2]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k2]"]; ?>"] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k3]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k3]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k3]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k3]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k3]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k3]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k3]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k3]"]; ?>"] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k4]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k4]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k4]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k4]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k4]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k4]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k4]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k4]"]; ?>"] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k5]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k5]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k5]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k5]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k5]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k5]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k5]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k5]"]; ?>"] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k6]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k6]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k6]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k6]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k6]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k6]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k6]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k6]"]; ?>"] },
				{ label: "My eighth dataset", fillColor : "rgba(255,255,0,0.5)", strokeColor : "rgba(255,255,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k7]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k7]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k7]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k7]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k7]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k7]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k7]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k7]"]; ?>"] },
				{ label: "My ninth dataset", fillColor : "rgba(0,128,0,0.5)", strokeColor : "rgba(0,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k8]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k8]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k8]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k8]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k8]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k8]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k8]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k8]"]; ?>"] },
				{ label: "My tenth dataset", fillColor : "rgba(0,0,0,0.5)", strokeColor : "rgba(0,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : ["<?php echo $_SESSION["php_jan_doc[$k9]"]; ?>","<?php echo $_SESSION["php_feb_doc[$k9]"]; ?>",
					"<?php echo $_SESSION["php_mar_doc[$k9]"]; ?>","<?php echo $_SESSION["php_apr_doc[$k9]"]; ?>",
					"<?php echo $_SESSION["php_may_doc[$k9]"]; ?>","<?php echo $_SESSION["php_jun_doc[$k9]"]; ?>",
					"<?php echo $_SESSION["php_jul_doc[$k9]"]; ?>","<?php echo $_SESSION["php_aug_doc[$k9]"]; ?>",
					"<?php echo $_SESSION["php_sep_doc[$k9]"]; ?>","<?php echo $_SESSION["php_oct_doc[$k9]"]; ?>",
					"<?php echo $_SESSION["php_nov_doc[$k9]"]; ?>","<?php echo $_SESSION["php_dec_doc[$k9]"]; ?>"] }]}
        document.write("<div class='box1'></div>","<?php echo $_SESSION["phy_name_all"][$k];?>");
	    document.write("<br>");
	    document.write("<div class='box2'></div>","<?php echo $_SESSION["phy_name_all"][$k1];?>");        
		document.write("<br>");
	    document.write("<div class='box3'></div>","<?php echo $_SESSION["phy_name_all"][$k2];?>");                
		document.write("<br>");
	    document.write("<div class='box4'></div>","<?php echo $_SESSION["phy_name_all"][$k3];?>");                       
		document.write("<br>");
	    document.write("<div class='box5'></div>","<?php echo $_SESSION["phy_name_all"][$k4];?>");                             
		document.write("<br>");
	    document.write("<div class='box6'></div>","<?php echo $_SESSION["phy_name_all"][$k5];?>");                             
		document.write("<br>");
	    document.write("<div class='box7'></div>","<?php echo $_SESSION["phy_name_all"][$k6];?>");                             
		document.write("<br>");
	    document.write("<div class='box8'></div>","<?php echo $_SESSION["phy_name_all"][$k7];?>");                             
		document.write("<br>");
	    document.write("<div class='box9'></div>","<?php echo $_SESSION["phy_name_all"][$k8];?>");                             
		document.write("<br>");
	    document.write("<div class='box10'></div>","<?php echo $_SESSION["phy_name_all"][$k9];?>");                             
        }

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive: true
		});
	}

	</script>
	</center>
 	</body>
</html>
