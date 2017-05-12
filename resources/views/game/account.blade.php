@extends('layouts.master')

@section('title', 'Create Account')

@section('style')
	<style type="text/css">
    h1 {
        text-align: center;
        color: #ffffff;
        font-weight: 300;
        margin: 0 0 40px;
    }
    a {
        text-decoration: none;
        color: #1ab188;
        -webkit-transition: .5s ease;
        transition: .5s ease;
    }
    a:hover {
        color: #179b77;
    }
		.form {
	  		background: rgba(19, 35, 47, 0.9);
	  		padding: 40px;
	  		max-width: 600px;
	  		margin: 40px auto;
	  		border-radius: 4px;
	  		box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
	  		width: 960px;
		}
		label {
	  		position: absolute;
	  		-webkit-transform: translateY(6px);
	        transform: translateY(6px);
	  		left: 13px;
	  		color: rgba(255, 255, 255, 0.5);
	  		-webkit-transition: all 0.25s ease;
	  		transition: all 0.25s ease;
	  		-webkit-backface-visibility: hidden;
	  		pointer-events: none;
	  		font-size: 22px;
	  		display: block;
	  		float: left;
	  	
		}
		label .req {
	  		margin: 2px;
	  		color: #1ab188;
		}

		label.active {
	  		-webkit-transform: translateY(50px);
	    	transform: translateY(50px);
	  		left: 2px;
	  		font-size: 14px;
		}
		label.active .req {
	  		opacity: 0;
		}

		label.highlight {
	  		color: #ffffff;
		}

		input {
		  	font-size: 22px;
		  	display: block;
		  	height: 100%;
		  	padding: 5px 10px;
		  	background: none;
		  	background-image: none;
		  	border: 1px solid #a0b3b0;
		  	color: #ffffff;
		  	border-radius: 0;
		  	-webkit-transition: border-color .25s ease, box-shadow .25s ease;
		 	  transition: border-color .25s ease, box-shadow .25s ease;
		 	  display: block;
	  		float: right;
	  		width: 60%;
		}
		input:focus {
		 	outline: 0;
		  	border-color: #1ab188;
		}
		.field-wrap {
	  		position: relative;
	  		margin-bottom: 40px;
	  		float: left;
	  		width: 100%;
		}
		.button {
			font-size: 200%;
			border-radius: 10px;
			width: 150px;
		}
		.button {
        border: 0;
 		 	  outline: none;
  			border-radius: 0;
  			padding: 15px 0;
  			font-size: 2rem;
  			font-weight: 600;
  			text-transform: uppercase;
  			letter-spacing: .1em;
  			background: #1ab188;
  			color: #ffffff;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        -webkit-appearance: none;
        }
    .button:hover, .button:focus {
        background: #179b77;
		}

		.button-block {
  			display: block;
  			width: 100%;
		}
	</style>
@endsection

@section('script')
	<script type="text/javascript">
	$('.form').find('input').on('keyup blur focus', function (e) {
	  
	  var $this = $(this),
	      label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
	          label.removeClass('active highlight');
	        } else {
	          label.addClass('active highlight');
	        }
	    } else if (e.type === 'blur') {
	    	if( $this.val() === '' ) {
	    		label.removeClass('active highlight'); 
				} else {
			    label.removeClass('highlight');   
				}   
	    } else if (e.type === 'focus') {
	      
	      if( $this.val() === '' ) {
	    		label.removeClass('highlight'); 
				} 
	      else if( $this.val() !== '' ) {
			    label.addClass('highlight');
				}
	    }

	});

	$('.tab a').on('click', function (e) {
	  
	  e.preventDefault();
	  
	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
	  
	  target = $(this).attr('href');

	  $('.tab-content > div').not(target).hide();
	  
	  $(target).fadeIn(600);
	  
	});
	</script>
@endsection

@section('content')
<div class="form">
    <div id="signup">            
        <form action="/" method="post">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
			<div class="field-wrap">
                <label>
                	Email Address<span class="req">*</span>
            	</label>
            	<input type="email"required autocomplete="off"/>
            </div>
            <div class="field-wrap">
                <label>
                	Password<span class="req">*</span>
            	</label>
            	<input type="password"required autocomplete="off"/>
          	</div>
          	<div class="field-wrap">
                <label>
                	Confirm Password<span class="req">*</span>
            	</label>
            	<input type="comfirmpassword"required autocomplete="off"/>
          	</div>
          
  			<button type="submit" class="button button-block"/>Create</button>
          
        </form>

    </div>              
</div> <!-- /form -->
@endsection

@section('sidebar')
 <!-- Search -->
      <div id="search" class="block">
        <div class="block-bot">
          <div class="block-cnt">
            <form action="#" method="post">
              <div class="cl">&nbsp;</div>
              <div class="fieldplace">
                <input type="text" class="field" value="Search" title="Search" />
              </div>
              <input type="submit" class="button" value="GO" />
              <div class="cl">&nbsp;</div>
            </form>
          </div>
        </div>
      </div>
      <!-- / Search -->
      <!-- / Sign In -->
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Top Games</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="#"><img src="css/images/img1.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">TMNT</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="#"><img src="css/images/img2.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">F.E.A.R.2</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="#"><img src="css/images/img3.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">Steel Fury</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
            <a href="#" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Top Types </h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="#"><img src="css/images/img1.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">FALLOUT3</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="#"><img src="css/images/img2.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">Crysis</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="#"><img src="css/images/img3.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">F.E.A.R.2</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
            <a href="#" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    <!-- / Sidebar -->
@endsection
