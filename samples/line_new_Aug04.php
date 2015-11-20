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
 		    margin-left: 7cm;
   		}
		p2 {
			color: rgb(192,192,192);
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


 		var count="<?php echo $_SESSION["php_count"]; ?>";


        var i;

        var avg1 = new Array(10);
        var avg2 = new Array(10);
        var avg3 = new Array(10);
        var avg4 = new Array(10);
        var avg5 = new Array(10);
        var avg6 = new Array(10);
        var avg7 = new Array(10);
        var avg8 = new Array(10);
        var avg9 = new Array(10);
        var avg10 = new Array(10);
        var avg11 = new Array(10);
        var avg12 = new Array(10);

         var flag = new Array(10);
         var temp = new Array(10);

		var doc_name = new Array();
		doc_name[0]="doctor A";
		doc_name[1]="doctor B";
		doc_name[2]="doctor C";
		doc_name[3]="doctor D";
		doc_name[4]="doctor E";
		doc_name[5]="doctor F";
		doc_name[6]="doctor G";
		doc_name[7]="doctor H";
		doc_name[8]="doctor I";
		doc_name[9]="doctor J";


		var php_doc_name1="<?php echo $_SESSION["phy_name1"]; ?>";
		var php_doc_name2="<?php echo $_SESSION["phy_name2"]; ?>";
		var php_doc_name3="<?php echo $_SESSION["phy_name3"]; ?>";
		var php_doc_name4="<?php echo $_SESSION["phy_name4"]; ?>";
		var php_doc_name5="<?php echo $_SESSION["phy_name5"]; ?>";
		var php_doc_name6="<?php echo $_SESSION["phy_name6"]; ?>";
		var php_doc_name7="<?php echo $_SESSION["phy_name7"]; ?>";
		var php_doc_name8="<?php echo $_SESSION["phy_name8"]; ?>";
		var php_doc_name9="<?php echo $_SESSION["phy_name9"]; ?>";
		var php_doc_name10="<?php echo $_SESSION["phy_name10"]; ?>";




        for(i=0;i<10;i++)
        {
        if ((doc_name[i].localeCompare(php_doc_name1)) == 0)
        {
        flag[i]=1;
        var dosage1="<?php echo $_SESSION["php_doc1_jan"]; ?>";
        avg1[i]=dosage1;
        var dosage2="<?php echo $_SESSION["php_doc1_feb"]; ?>";
        avg2[i]=dosage2;
        var dosage3="<?php echo $_SESSION["php_doc1_mar"]; ?>";
        avg3[i]=dosage3;
        var dosage4="<?php echo $_SESSION["php_doc1_apr"]; ?>";
        avg4[i]=dosage4;
        var dosage5="<?php echo $_SESSION["php_doc1_may"]; ?>";
        avg5[i]=dosage5;
        var dosage6="<?php echo $_SESSION["php_doc1_jun"]; ?>";
        avg6[i]=dosage6;
        var dosage7="<?php echo $_SESSION["php_doc1_jul"]; ?>";
        avg7[i]=dosage7;
        var dosage8="<?php echo $_SESSION["php_doc1_aug"]; ?>";
        avg8[i]=dosage8;
        var dosage9="<?php echo $_SESSION["php_doc1_sep"]; ?>";
        avg9[i]=dosage9;
        var dosage10="<?php echo $_SESSION["php_doc1_oct"]; ?>";
        avg10[i]=dosage10;
        var dosage11="<?php echo $_SESSION["php_doc1_nov"]; ?>";
        avg11[i]=dosage11;
        var dosage12="<?php echo $_SESSION["php_doc1_dec"]; ?>";
        avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name2)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc2_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc2_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc2_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc2_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc2_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc2_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc2_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc2_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc2_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc2_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc2_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc2_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name3)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc3_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc3_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc3_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc3_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc3_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc3_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc3_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc3_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc3_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc3_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc3_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc3_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name4)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc4_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc4_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc4_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc4_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc4_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc4_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc4_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc4_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc4_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc4_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc4_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc4_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name5)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc5_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc5_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc5_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc5_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc5_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc5_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc5_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc5_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc5_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc5_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc5_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc5_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name6)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc6_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc6_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc6_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc6_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc6_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc6_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc6_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc6_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc6_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc6_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc6_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc6_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name7)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc7_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc7_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc7_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc7_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc7_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc7_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc7_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc7_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc7_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc7_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc7_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc7_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name8)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc8_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc8_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc8_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc8_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc8_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc8_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc8_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc8_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc8_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc8_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc8_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc8_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name9)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc9_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc9_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc9_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc9_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc9_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc9_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc9_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc9_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc9_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc9_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc9_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc9_dec"]; ?>";
         avg12[i]=dosage12;
        }
        else if ((doc_name[i].localeCompare(php_doc_name10)) == 0)
        {
         flag[i]=1;
         var dosage1="<?php echo $_SESSION["php_doc10_jan"]; ?>";
         avg1[i]=dosage1;
         var dosage2="<?php echo $_SESSION["php_doc10_feb"]; ?>";
         avg2[i]=dosage2;
         var dosage3="<?php echo $_SESSION["php_doc10_mar"]; ?>";
         avg3[i]=dosage3;
         var dosage4="<?php echo $_SESSION["php_doc10_apr"]; ?>";
         avg4[i]=dosage4;
         var dosage5="<?php echo $_SESSION["php_doc10_may"]; ?>";
         avg5[i]=dosage5;
         var dosage6="<?php echo $_SESSION["php_doc10_jun"]; ?>";
         avg6[i]=dosage6;
         var dosage7="<?php echo $_SESSION["php_doc10_jul"]; ?>";
         avg7[i]=dosage7;
         var dosage8="<?php echo $_SESSION["php_doc10_aug"]; ?>";
         avg8[i]=dosage8;
         var dosage9="<?php echo $_SESSION["php_doc10_sep"]; ?>";
         avg9[i]=dosage9;
         var dosage10="<?php echo $_SESSION["php_doc10_oct"]; ?>";
         avg10[i]=dosage10;
         var dosage11="<?php echo $_SESSION["php_doc10_nov"]; ?>";
         avg11[i]=dosage11;
         var dosage12="<?php echo $_SESSION["php_doc10_dec"]; ?>";
         avg12[i]=dosage12;
        }
       }

       var k=0;
       var l=0;
       for (k=0;k<10;k++)
       {
         if(flag[k]==1)
         {
           temp[l]=k;
           l++;
         }
       }

       i=0;
       if (count ==1)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)", highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",

				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] } ] }
        document.write("<br>");
		document.write("<div class='box1'></div>",doc_name[temp[i]]);
        }
       else if (count==2)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)", highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",

				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)", highlightFill: "rgba(0,0,255,0.75)",
highlightStroke: "rgba(0,0,255,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] } ] }
  
	   document.write("<div class='box1'></div>",doc_name[temp[i]]);
	   document.write("<br>");
	   document.write("<div class='box2'></div>",doc_name[temp[i+1]]);
        }
        else if (count==3)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] }] }
		document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);        
        }
       else if (count==4)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+3]],avg2[temp[i+3]],avg3[temp[i+3]],avg4[temp[i+3]],avg5[temp[i+3]],avg6[temp[i+3]],avg7[temp[i+3]],avg8[temp[i+3]],avg9[temp[i+3]],avg10[temp[i+3]],avg11[temp[i+3]],avg12[temp[i+3]]] }] }
		document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);                
		document.write("<br>");
	    document.write("<div class='box4'></div>",doc_name[temp[i+3]]);                
        }
       else if (count==5)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+3]],avg2[temp[i+3]],avg3[temp[i+3]],avg4[temp[i+3]],avg5[temp[i+3]],avg6[temp[i+3]],avg7[temp[i+3]],avg8[temp[i+3]],avg9[temp[i+3]],avg10[temp[i+3]],avg11[temp[i+3]],avg12[temp[i+3]]] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+4]],avg2[temp[i+4]],avg3[temp[i+4]],avg4[temp[i+4]],avg5[temp[i+4]],avg6[temp[i+4]],avg7[temp[i+4]],avg8[temp[i+4]],avg9[temp[i+4]],avg10[temp[i+4]],avg11[temp[i+4]],avg12[temp[i+4]]] }]}
		document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);                
		document.write("<br>");
	    document.write("<div class='box4'></div>",doc_name[temp[i+3]]);                       
		document.write("<br>");
	    document.write("<div class='box5'></div>",doc_name[temp[i+4]]);                       
        }
       else if (count==6)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+3]],avg2[temp[i+3]],avg3[temp[i+3]],avg4[temp[i+3]],avg5[temp[i+3]],avg6[temp[i+3]],avg7[temp[i+3]],avg8[temp[i+3]],avg9[temp[i+3]],avg10[temp[i+3]],avg11[temp[i+3]],avg12[temp[i+3]]] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+4]],avg2[temp[i+4]],avg3[temp[i+4]],avg4[temp[i+4]],avg5[temp[i+4]],avg6[temp[i+4]],avg7[temp[i+4]],avg8[temp[i+4]],avg9[temp[i+4]],avg10[temp[i+4]],avg11[temp[i+4]],avg12[temp[i+4]]] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+5]],avg2[temp[i+5]],avg3[temp[i+5]],avg4[temp[i+5]],avg5[temp[i+5]],avg6[temp[i+5]],avg7[temp[i+5]],avg8[temp[i+5]],avg9[temp[i+5]],avg10[temp[i+5]],avg11[temp[i+5]],avg12[temp[i+5]]] }]}
		document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);                
		document.write("<br>");
	    document.write("<div class='box4'></div>",doc_name[temp[i+3]]);                       
		document.write("<br>");
	    document.write("<div class='box5'></div>",doc_name[temp[i+4]]);                             
		document.write("<br>");
	    document.write("<div class='box6'></div>",doc_name[temp[i+5]]);                             
        }
       else if (count==7)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+3]],avg2[temp[i+3]],avg3[temp[i+3]],avg4[temp[i+3]],avg5[temp[i+3]],avg6[temp[i+3]],avg7[temp[i+3]],avg8[temp[i+3]],avg9[temp[i+3]],avg10[temp[i+3]],avg11[temp[i+3]],avg12[temp[i+3]]] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+4]],avg2[temp[i+4]],avg3[temp[i+4]],avg4[temp[i+4]],avg5[temp[i+4]],avg6[temp[i+4]],avg7[temp[i+4]],avg8[temp[i+4]],avg9[temp[i+4]],avg10[temp[i+4]],avg11[temp[i+4]],avg12[temp[i+4]]] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+5]],avg2[temp[i+5]],avg3[temp[i+5]],avg4[temp[i+5]],avg5[temp[i+5]],avg6[temp[i+5]],avg7[temp[i+5]],avg8[temp[i+5]],avg9[temp[i+5]],avg10[temp[i+5]],avg11[temp[i+5]],avg12[temp[i+5]]] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+6]],avg2[temp[i+6]],avg3[temp[i+6]],avg4[temp[i+6]],avg5[temp[i+6]],avg6[temp[i+6]],avg7[temp[i+6]],avg8[temp[i+6]],avg9[temp[i+6]],avg10[temp[i+6]],avg11[temp[i+6]],avg12[temp[i+6]]] }]}
        document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);                
		document.write("<br>");
	    document.write("<div class='box4'></div>",doc_name[temp[i+3]]);                       
		document.write("<br>");
	    document.write("<div class='box5'></div>",doc_name[temp[i+4]]);                             
		document.write("<br>");
	    document.write("<div class='box6'></div>",doc_name[temp[i+5]]);                             
		document.write("<br>");
	    document.write("<div class='box7'></div>",doc_name[temp[i+6]]);                             
        }
       else if (count==8)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+3]],avg2[temp[i+3]],avg3[temp[i+3]],avg4[temp[i+3]],avg5[temp[i+3]],avg6[temp[i+3]],avg7[temp[i+3]],avg8[temp[i+3]],avg9[temp[i+3]],avg10[temp[i+3]],avg11[temp[i+3]],avg12[temp[i+3]]] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+4]],avg2[temp[i+4]],avg3[temp[i+4]],avg4[temp[i+4]],avg5[temp[i+4]],avg6[temp[i+4]],avg7[temp[i+4]],avg8[temp[i+4]],avg9[temp[i+4]],avg10[temp[i+4]],avg11[temp[i+4]],avg12[temp[i+4]]] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+5]],avg2[temp[i+5]],avg3[temp[i+5]],avg4[temp[i+5]],avg5[temp[i+5]],avg6[temp[i+5]],avg7[temp[i+5]],avg8[temp[i+5]],avg9[temp[i+5]],avg10[temp[i+5]],avg11[temp[i+5]],avg12[temp[i+5]]] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+6]],avg2[temp[i+6]],avg3[temp[i+6]],avg4[temp[i+6]],avg5[temp[i+6]],avg6[temp[i+6]],avg7[temp[i+6]],avg8[temp[i+6]],avg9[temp[i+6]],avg10[temp[i+6]],avg11[temp[i+6]],avg12[temp[i+6]]] },
				{ label: "My eighth dataset", fillColor : "rgba(255,255,0,0.5)", strokeColor : "rgba(255,255,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+7]],avg2[temp[i+7]],avg3[temp[i+7]],avg4[temp[i+7]],avg5[temp[i+7]],avg6[temp[i+7]],avg7[temp[i+7]],avg8[temp[i+7]],avg9[temp[i+7]],avg10[temp[i+7]],avg11[temp[i+7]],avg12[temp[i+7]]] }]}
        document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);                
		document.write("<br>");
	    document.write("<div class='box4'></div>",doc_name[temp[i+3]]);                       
		document.write("<br>");
	    document.write("<div class='box5'></div>",doc_name[temp[i+4]]);                             
		document.write("<br>");
	    document.write("<div class='box6'></div>",doc_name[temp[i+5]]);                             
		document.write("<br>");
	    document.write("<div class='box7'></div>",doc_name[temp[i+6]]);                             
		document.write("<br>");
	    document.write("<div class='box8'></div>",doc_name[temp[i+7]]);                             
        }
       else if (count==9)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+3]],avg2[temp[i+3]],avg3[temp[i+3]],avg4[temp[i+3]],avg5[temp[i+3]],avg6[temp[i+3]],avg7[temp[i+3]],avg8[temp[i+3]],avg9[temp[i+3]],avg10[temp[i+3]],avg11[temp[i+3]],avg12[temp[i+3]]] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+4]],avg2[temp[i+4]],avg3[temp[i+4]],avg4[temp[i+4]],avg5[temp[i+4]],avg6[temp[i+4]],avg7[temp[i+4]],avg8[temp[i+4]],avg9[temp[i+4]],avg10[temp[i+4]],avg11[temp[i+4]],avg12[temp[i+4]]] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+5]],avg2[temp[i+5]],avg3[temp[i+5]],avg4[temp[i+5]],avg5[temp[i+5]],avg6[temp[i+5]],avg7[temp[i+5]],avg8[temp[i+5]],avg9[temp[i+5]],avg10[temp[i+5]],avg11[temp[i+5]],avg12[temp[i+5]]] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+6]],avg2[temp[i+6]],avg3[temp[i+6]],avg4[temp[i+6]],avg5[temp[i+6]],avg6[temp[i+6]],avg7[temp[i+6]],avg8[temp[i+6]],avg9[temp[i+6]],avg10[temp[i+6]],avg11[temp[i+6]],avg12[temp[i+6]]] },
				{ label: "My eighth dataset", fillColor : "rgba(255,255,0,0.5)", strokeColor : "rgba(255,255,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+7]],avg2[temp[i+7]],avg3[temp[i+7]],avg4[temp[i+7]],avg5[temp[i+7]],avg6[temp[i+7]],avg7[temp[i+7]],avg8[temp[i+7]],avg9[temp[i+7]],avg10[temp[i+7]],avg11[temp[i+7]],avg12[temp[i+7]]] },
				{ label: "My ninth dataset", fillColor : "rgba(0,128,0,0.5)", strokeColor : "rgba(0,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+8]],avg2[temp[i+8]],avg3[temp[i+8]],avg4[temp[i+8]],avg5[temp[i+8]],avg6[temp[i+8]],avg7[temp[i+8]],avg8[temp[i+8]],avg9[temp[i+8]],avg10[temp[i+8]],avg11[temp[i+8]],avg12[temp[i+8]]] }]}
        document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);                
		document.write("<br>");
	    document.write("<div class='box4'></div>",doc_name[temp[i+3]]);                       
		document.write("<br>");
	    document.write("<div class='box5'></div>",doc_name[temp[i+4]]);                             
		document.write("<br>");
	    document.write("<div class='box6'></div>",doc_name[temp[i+5]]);                             
		document.write("<br>");
	    document.write("<div class='box7'></div>",doc_name[temp[i+6]]);                             
		document.write("<br>");
	    document.write("<div class='box8'></div>",doc_name[temp[i+7]]);                             
		document.write("<br>");
	    document.write("<div class='box9'></div>",doc_name[temp[i+8]]);                             
        }
       else if (count==10)
       {
         var barChartData = { labels : [month1,month2,month3,month4,month5,month6,month7,month8,month9,month10,month11,month12],
		            datasets : [ { label: "My First dataset", fillColor : "rgba(192,192,192,0.5)", strokeColor : "rgba(192,192,192,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i]],avg2[temp[i]],avg3[temp[i]],avg4[temp[i]],avg5[temp[i]],avg6[temp[i]],avg7[temp[i]],avg8[temp[i]],avg9[temp[i]],avg10[temp[i]],avg11[temp[i]],avg12[temp[i]]] },
				{ label: "My Second dataset", fillColor : "rgba(0,0,255,0.5)", strokeColor : "rgba(0,0,255,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+1]],avg2[temp[i+1]],avg3[temp[i+1]],avg4[temp[i+1]],avg5[temp[i+1]],avg6[temp[i+1]],avg7[temp[i+1]],avg8[temp[i+1]],avg9[temp[i+1]],avg10[temp[i+1]],avg11[temp[i+1]],avg12[temp[i+1]]] },
				{ label: "My Third dataset", fillColor : "rgba(255,0,0,0.5)", strokeColor : "rgba(255,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+2]],avg2[temp[i+2]],avg3[temp[i+2]],avg4[temp[i+2]],avg5[temp[i+2]],avg6[temp[i+2]],avg7[temp[i+2]],avg8[temp[i+2]],avg9[temp[i+2]],avg10[temp[i+2]],avg11[temp[i+2]],avg12[temp[i+2]]] },
				{ label: "My Fourth dataset", fillColor : "rgba(128,0,0,0.5)", strokeColor : "rgba(128,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+3]],avg2[temp[i+3]],avg3[temp[i+3]],avg4[temp[i+3]],avg5[temp[i+3]],avg6[temp[i+3]],avg7[temp[i+3]],avg8[temp[i+3]],avg9[temp[i+3]],avg10[temp[i+3]],avg11[temp[i+3]],avg12[temp[i+3]]] },
				{ label: "My Fifth dataset", fillColor : "rgba(128,128,0,0.5)", strokeColor : "rgba(128,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+4]],avg2[temp[i+4]],avg3[temp[i+4]],avg4[temp[i+4]],avg5[temp[i+4]],avg6[temp[i+4]],avg7[temp[i+4]],avg8[temp[i+4]],avg9[temp[i+4]],avg10[temp[i+4]],avg11[temp[i+4]],avg12[temp[i+4]]] },
				{ label: "My sixth dataset", fillColor : "rgba(0,128,128,0.5)", strokeColor : "rgba(0,128,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+5]],avg2[temp[i+5]],avg3[temp[i+5]],avg4[temp[i+5]],avg5[temp[i+5]],avg6[temp[i+5]],avg7[temp[i+5]],avg8[temp[i+5]],avg9[temp[i+5]],avg10[temp[i+5]],avg11[temp[i+5]],avg12[temp[i+5]]] },
				{ label: "My seventh dataset", fillColor : "rgba(128,0,128,0.5)", strokeColor : "rgba(128,0,128,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+6]],avg2[temp[i+6]],avg3[temp[i+6]],avg4[temp[i+6]],avg5[temp[i+6]],avg6[temp[i+6]],avg7[temp[i+6]],avg8[temp[i+6]],avg9[temp[i+6]],avg10[temp[i+6]],avg11[temp[i+6]],avg12[temp[i+6]]] },
				{ label: "My eighth dataset", fillColor : "rgba(255,255,0,0.5)", strokeColor : "rgba(255,255,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+7]],avg2[temp[i+7]],avg3[temp[i+7]],avg4[temp[i+7]],avg5[temp[i+7]],avg6[temp[i+7]],avg7[temp[i+7]],avg8[temp[i+7]],avg9[temp[i+7]],avg10[temp[i+7]],avg11[temp[i+7]],avg12[temp[i+7]]] },
				{ label: "My ninth dataset", fillColor : "rgba(0,128,0,0.5)", strokeColor : "rgba(0,128,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+8]],avg2[temp[i+8]],avg3[temp[i+8]],avg4[temp[i+8]],avg5[temp[i+8]],avg6[temp[i+8]],avg7[temp[i+8]],avg8[temp[i+8]],avg9[temp[i+8]],avg10[temp[i+8]],avg11[temp[i+8]],avg12[temp[i+8]]] },
				{ label: "My tenth dataset", fillColor : "rgba(0,0,0,0.5)", strokeColor : "rgba(0,0,0,0.8)",  highlightFill: "rgba(192,192,192,0.75)",
highlightStroke: "rgba(192,192,192,1)",
				    data : [avg1[temp[i+9]],avg2[temp[i+9]],avg3[temp[i+9]],avg4[temp[i+9]],avg5[temp[i+9]],avg6[temp[i+9]],avg7[temp[i+9]],avg8[temp[i+9]],avg9[temp[i+9]],avg10[temp[i+9]],avg11[temp[i+9]],avg12[temp[i+9]]] }]}
        document.write("<div class='box1'></div>",doc_name[temp[i]]);
	    document.write("<br>");
	    document.write("<div class='box2'></div>",doc_name[temp[i+1]]);        
		document.write("<br>");
	    document.write("<div class='box3'></div>",doc_name[temp[i+2]]);                
		document.write("<br>");
	    document.write("<div class='box4'></div>",doc_name[temp[i+3]]);                       
		document.write("<br>");
	    document.write("<div class='box5'></div>",doc_name[temp[i+4]]);                             
		document.write("<br>");
	    document.write("<div class='box6'></div>",doc_name[temp[i+5]]);                             
		document.write("<br>");
	    document.write("<div class='box7'></div>",doc_name[temp[i+6]]);                             
		document.write("<br>");
	    document.write("<div class='box8'></div>",doc_name[temp[i+7]]);                             
		document.write("<br>");
	    document.write("<div class='box9'></div>",doc_name[temp[i+8]]);                             
		document.write("<br>");
	    document.write("<div class='box10'></div>",doc_name[temp[i+9]]);                             
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
