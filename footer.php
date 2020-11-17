
<div class="ml-2 mr-2 bg-light shadoww border p-3 text-center d-lg-none rounded">
    <h4 class=" ml-auto mr-auto">Subscribe to receive all news :</h4>
    <hr class=" ml-auto mr-auto mt-1 col-4 mb-4">
    <form action="#">
        <div class="form-group">
            <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder="Enter email" required="">
        </div>
        <button class="btn btn-outline-success col-12" type="submit">Subscribe</button>
    </form>
</div>
<br>
<div class="bg-dark m-0 p-4" style="">
    <div class="container">
        <div class="row text-center" >
            <div class="col-12 col-md-4">
                <div class="text-center text-light">
                    <h3>If you Have any Project?</h3>
                    <p>I will be proud to achieve your idea.</p>
                    <a data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-success">Contact Me</a>
        	    </div>
            </div>
            <div class="col-8 d-none d-md-block text-center border-left pt-4">
                <a href="https://www.facebook.com/hicham.oj.3745" class="text-light"><i class="fa fa-facebook mr-4 fa-4x"></i></a>
                <a href="mailto:hichamoujari99@gmail.com" class="text-light"><i class="fa fa-google-plus mr-4 fa-4x"></i></a>
                <a href="https://www.linkedin.com/in/hicham-oujari-8b1322196" class="text-light"><i class="fa fa-linkedin mr-4 fa-4x"></i></a>
                <a href="https://www.youtube.com/mrho77" class="text-light"><i class="fa fa-youtube mr-4 fa-4x"></i></a>
                <a href="https://www.instagram.com/hicham.oj.7/" class="text-light"><i class="fa fa-instagram fa-4x"></i></a>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer bg-secondary p-0 m-0 pr-2 font-small blue">
  	<div class="footer-copyright text-right p-0  text-light">Powered By :
    	<a class="text-success" href="http://houjari.tk/"> 𝐻𝒾𝒸𝒽𝒶𝓂 𝒪𝓊𝒿𝒶𝓇𝒾 </a>© <?php echo date("Y"); ?>
  	</div>
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-bookmark text-dark fa-1x"> </i> Leave me a message:</h5>
      </div>
      <div class="modal-body">
      	<center>
      		<img src="img/blog/blog_3.png" class="rd" height="100px">
      	</center>
      </div>
      <hr class="p-0 m-0">
      <div class="modal-body">
        <form action="mailing/index.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" name="from" class="form-control" id="recipient-name">
          </div>
          <input type="hidden" name="to" value="hichamoujari99@gmail.com">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" name="msg" id="message-text"></textarea>
          </div>
          <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"> </i> Send</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"> </i> Close</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<!-- JS stylesheet -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous">
</script>
</body>
</html>