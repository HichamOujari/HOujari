<?php
if(isset($_GET['liking'])){
	$MAC = exec('getmac'); 
	$MAC = strtok($MAC, ' ');
	// $MAC;
	exit();
}
include 'header.php';
?>

<img src="img/banner/banner2.png" class="p-1 d-block w-100 shadoww">
<br>
<div class="ml-4 mr-4">
	<div class="row">
		<div class="col-12 col-lg-8">
				<!--articles-->
				<div id="articls">
					<?php
	                    $projects = array(
				                        array(
				                            "image"=>"img/blog/blog_1.png",
				                            "day"=>"10",
				                            "month"=>"Jan",
				                            "year"=>"2020",
				                            "title"=>"title ","content"=>"description of the projet ",
				                            "nbr_j"=>"03",
				                            "nbr_c"=>"03","liking"=>"0"
				                            ),
				                        array(
				                            "image"=>"img/blog/blog_3.png",
				                            "day"=>"11",
				                            "month"=>"Jan",
				                            "year"=>"2020",
				                            "title"=>"title ","content"=>"description of the projet",
				                            "nbr_j"=>"03",
				                            "nbr_c"=>"03","liking"=>"1"
				                            ),
				                        array(
				                            "image"=>"img/blog/blog_1.png",
				                            "day"=>"12",
				                            "month"=>"Jan",
				                            "year"=>"2020",
				                            "title"=>"title ","content"=>"description of the projet",
				                            "nbr_j"=>"03",
				                            "nbr_c"=>"03","liking"=>"-1"
				                            ),
				                        array(
				                            "image"=>"img/blog/blog_2.png",
				                            "day"=>"13",
				                            "month"=>"Jan",
				                            "year"=>"2020",
				                            "title"=>"title ","content"=>"description of the projet",
				                            "nbr_j"=>"03",
				                            "nbr_c"=>"03","liking"=>"1"
				                            ),
				                        array(
				                            "image"=>"img/blog/blog_3.png",
				                            "day"=>"14",
				                            "month"=>"Jan",
				                            "year"=>"2020",
				                            "title"=>"title ","content"=>"description of the projet",
				                            "nbr_j"=>"03",
				                            "nbr_c"=>"03","liking"=>"-1"
				                            ),
				                        array(
				                            "image"=>"img/blog/blog_1.png",
				                            "day"=>"15",
				                            "month"=>"Jan",
				                            "year"=>"2020",
				                            "title"=>"title ","content"=>"description of the projet",
				                            "nbr_j"=>"03",
				                            "nbr_c"=>"03","liking"=>"0"
				                            ),
				                        array(
				                            "image"=>"img/blog/blog_1.png",
				                            "day"=>"16",
				                            "month"=>"Jan",
				                            "year"=>"2020",
				                            "title"=>"title ","content"=>"description of the projet",
				                            "nbr_j"=>"03",
				                            "nbr_c"=>"03","liking"=>"-1"
				                            ),
				                        		                        
				                    );
	                    $count = (int) (count($projects)/3) ;
	                    if(count($projects)%3!=0){
	                        $count++;
	                    }
						$i=0;
	                    while ($i<3 && $i<count($projects)) {
	                    ?>
	                    	<div class="card mb-3" style="box-shadow: 5px 5px  10px black;">
							  <img src="<?php echo $projects[$i]['image'];?>" height="300px" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php echo $projects[$i]['title'];?></h5>
							    <p class="card-text"><?php echo $projects[$i]['content'];?></p>
							    <p class="card-text">
							    	<small class="text-muted">
							    		<i class="fa fa-thumbs-up"></i> <?php echo $projects[$i]['nbr_j'];?> Likes I
							    		<i class="fa fa-thumbs-down"></i> <?php echo $projects[$i]['nbr_c'];?> DisLike I
							    		<i class="fa fa-clock-o"> </i> Last updated : <?php echo $projects[$i]['day'].'-'.$projects[$i]['month'].'-'.$projects[$i]['year'];?>
							    	</small>
							    	<?php
							    		if($projects[$i]['liking']=="1"){
							    			?>
							    			<button type="button" class="btn btn-sm mr-3 active col-3 float-right btn-outline-success">Like</button>
							    			<?php
							    		}
							    		if($projects[$i]['liking']=="-1"){
							    			?>
							    			<button type="button" class="active col-3 btn btn-sm mr-3 float-right btn-outline-danger">DisLike</button>
							    			<?php
							    		}
							    		if($projects[$i]['liking']=="0"){
								    		?>
								    		<button id="dislike<?php echo $i;?>" onclick="like(-1,<?php echo $i;?>)" type="button" class="btn btn-sm mr-3 float-right btn-outline-danger">DisLike</button>
								    		<button id="like<?php echo $i;?>" onclick="like(1,<?php echo $i;?>)" type="button" class="btn btn-sm mr-3 float-right btn-outline-success">Like</button>
								    		<?php
							    		}
							    		?>
						    		</p>
							  </div>
							</div>
	                    <?php
	                    	$i++;
	                    }
	                ?>
				</div>
				<!--articles-->

				<br><br>

				<!--navigation-->
				<div class="text-center">
					<?php
		                if(0!=$count - 1){
		                    echo '<a class="btn mr-2 btn-secondary" id="pre" hidden="" onclick="prev()" role="button"><i class="fa fa-chevron-left"></i></a>';
		                    $i=1;
		                    echo '<div class="btn-group btn-group-toggle" data-toggle="buttons">';
		                    while($i<=$count){
		                        ?>
		                        <label id="page<?php echo $i; ?>" class="btn btn-secondary">
									<input type="radio" name="options" onclick="set(<?php echo $i-1; ?>)"> <?php echo $i; ?>
								</label>
		                        <?php
		                        $i++;
		                    }
		                    echo '</div>';
		                    echo '<a class="ml-2 btn btn-secondary" id="next" onclick="next()" role="button"><i class="fa fa-chevron-right"></i></a>';
		                }
			        ?>
				</div>
				<!--navigation-->
		</div>
		<div class="col-4 ml-0 d-none d-lg-block">
			<?php include 'side.php'; ?>
		</div>
	</div>
</div>
<br>

<script>
	var xhr = new XMLHttpRequest();
    var list = <?php echo json_encode($projects); ?>;
    var cp=0;
    var count=<?php echo $count; ?>;
    function set(page){
    	document.getElementById('page'+(cp+1)).className="btn btn-secondary";
    	document.getElementById('page'+(page+1)).className="btn btn-secondary active";
        cp=page;
        var start=3*page;
        document.getElementById('articls').innerHTML="";
        var reag="";
        while(start<=3*page+2 && start<list.length){
            reag='<div class="card mb-3" style="box-shadow: 5px 5px  10px black;"> <img src="'+list[start]['image']+'" height="300px" class="card-img-top" alt="...">  <div class="card-body">    <h5 class="card-title">'+list[start]['title']+'</h5>    <p class="card-text">'+list[start]['content']+'</p>    <p class="card-text">    <small class="text-muted">    <i class="fa fa-thumbs-up"></i> '+list[start]['nbr_j']+' Likes I    <i class="fa fa-thumbs-down"></i> '+list[start]['nbr_c']+' DisLikes I    <i class="fa fa-clock-o"> </i> Last updated : '+list[start]['day']+'-'+list[start]['month']+'-'+list[start]['year']+'    </small>';
            if(list[start]['liking']=="1"){
	    		reag+='<button type="button" class="btn btn-sm mr-3 active col-3 float-right btn-outline-success">Like</button></p></div></div>';
	    	}
	    	if(list[start]['liking']=="-1"){
	    		reag+='<button type="button" class="active col-3 btn btn-sm mr-3 float-right btn-outline-danger">DisLike</button></p></div></div>';
	    	}
	    	if(list[start]['liking']=="0"){
	    		reag+='<button id="dislike'+start+'" onclick="like(-1,'+start+')" type="button" class="btn btn-sm mr-3 float-right btn-outline-danger">DisLike</button><button id="like'+start+'" onclick="like(1,'+start+')" type="button" class="btn btn-sm mr-3 float-right btn-outline-success">Like</button> </p>  </div></div>';
	    	}
	    	document.getElementById('articls').innerHTML+=reag;
    		start++;
        }
        if(cp!=0){
            document.getElementById('pre').removeAttribute('hidden');
        }else{
            document.getElementById('pre').setAttribute('hidden','');
        }
        if(cp!=count-1){
            document.getElementById('next').removeAttribute('hidden');
        }else{
            document.getElementById('next').setAttribute('hidden','');
        }
    }
    function next(){
    	totop();
        set(1+cp);
    }
    function prev(){
    	totop();
        set(cp-1);                                
    }
    function totop(){
    	window.scrollTo(0,window.scrollY-3);
    	if(window.scrollY>400){
    		setTimeout(totop,0.1);
    	}
    }
    setTimeout(function(){document.getElementById('page1').className="btn btn-secondary active";},1000);
    
    function like(op,id){
    	if(op==1){
    		document.getElementById('like'+id).className+=" active col-3";
    		document.getElementById('dislike'+id).style.display="none";
    	}else{
    		document.getElementById('dislike'+id).className+=" active col-3";
    		document.getElementById('like'+id).style.display="none";
    	}
    	xhr.open('GET','my-projects.php?id='+id+'&liking='+op);
    	xhr.send(null);
    }
</script>

<?php
include 'footer.php';
?>