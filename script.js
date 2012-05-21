var w=1280,
	h=800;
var path = d3.geo.path()
var arc = d3.geo.greatArc()
var projection = d3.geo.azimuthal()
.mode("equidistant")
.origin([-98, 38])
.scale(1400)
.translate([640, 360]); 
var svg = d3.select("#map").insert("svg:svg", "h2")
.attr("width", w)
.attr("height", h); 
var states = svg.append("svg:g")
	.attr("id","states");
var arcs = svg.append("svg:g")
	.attr("id","arcs");
var path = d3.geo.path()
	 .projection(projection);
	
var stateInfo={};
var cycle=2012;
function draw() {
	var plj;
	d3.json("q3_sql.json",function(de) {
		plj=de;
	});
	d3.json("us-states.json",function(collection) {
		states.selectAll("path")
		.data(collection.features)
		.enter().append("svg:path")
		.attr("d",path)
		.attr("class",function(d) { 
			//stateInfo[d.properties.name]=d;
			return(d.properties.name);
		}).on("mouseover",function(d) { 
			$("#mouseovers").css("border","1px black solid");
			//alert("Testing");
			c=plj.rows;
			
			if(c.length > 0) {
				$("#mouseovers").html("<h1> " + d.properties.name + "</h1> <h3>PCT Out of State</h3><h2>" + stateInfo[d.properties.name].percent + "%</h2> <h3>Out of state contributions(individuals)</h3>");
				}
				else {
					$("#mouseovers").html("");
				}
			
			//alert(d.properties.name);
			
				//var n=0;
				for(var i in c) {
				//alert(d.properties.name);
				//alert(JSON.stringify(c[i]));
				//alert(JSON.stringify(c[i]));
					if(c[i].recipient_state==d.properties.name && c[i].cycle==cycle) {
						//alert("IN");
						//alert("doing");
						$("#mouseovers").append("<h4>" + c[i].contributor_state + " $" + c[i].foo +"</h4>");
					}
					//n=n+1;
					//if(n>10) {
					//	break;
					//}
				}
		
		})
		.on("mouseout",function(d) {
			$("#mouseovers").css("border","none");
			
			$("#mouseovers").html("");
		})
		;
			//d3.select(this).attr("fill",function() { return("red"); }) 
			//});
		/*links=[];
	
		for(var i in stateInfo) {
			for(var j in stateInfo) {
				links.push({
				source:stateInfo[i],target:stateInfo[j]});
			}
		}
		var arc = d3.geo.greatArc()
		.source(function(d) { 
			return d.source; 
		})
		.target(function(d) { return d.target; }); 
	
	
		arcs.selectAll("path")
		.data(links)
		.enter().append("path")
		.attr("d",function(d) { 
			return path(arc(d));});*/
		/*
		//.attr("fill",function() { return("red"); });
	//	.classed(collection.state);*/

	
	});
	
}
draw();
function draw2() {
	d3.json("q1_sql_new.json",function(inp){
		c=inp.rows;
		$("path").attr("fill","white");
			for(var i in c) {
				if(c[i] != undefined && c[i].cycle == cycle) {
					
				var c1="#FFFFCC";
				var c2="#C2E699";
				var c3="#78C679";
				var c4="#31A354";
				var c5="#006837";
				var color;
				var scl=1;
				var sf=function(x) {
					return(x);
					//return(Math.log(x));
				}
			if(c[i].percent < sf(20)/scl) {
				color=c1;	
			}
			else if(c[i].percent < sf(40)/scl) {
				color=c2;	
			}
			else if(c[i].percent < sf(60)/scl) {
				color=c3;	
			}
			else if(c[i].percent < sf(80)/scl) {
				color=c4;	
			}
			else {
				color=c5;	
			}
			stateInfo[ c[i].recipient_state]=c[i];
			$("." + c[i].recipient_state).attr("fill",color);	
		}
	}
	});
	
}
$(document).ready(function(){
	$(".Texas").click(function(){
		alert("TEXAS");	
	});
	$("#slider").slider({max:2012,min:1990,step:1,value:2012,slide:function(even,ui) {
			$("#year").html(ui.value);
			cycle=ui.value;
			draw2();
		}});
		setTimeout(function() {
			draw2();
	
			
			//draw();
		});
	},0);
