<?php include 'header.php'; ?>   
<style type="text/css">
.test_img {
  background-image: url(resources/testimonials2.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: 50% 40%;
  background-width: 100%;
  height: 330px;
}

.author {
	text-align: center;
}
.testimonials h1{
  /*color: #FFFFFF;*/
  color: #708090;
  padding-top: 40px;
  font-size: 50px;
  font-weight: bold;
}

.bubble-t {
  position: relative;
  background-color:#eee;
  margin: 0;
  padding:10px;
  text-align:center;
  width:350px;
  -moz-border-radius:10px;
  -webkit-border-radius:10px;
  -webkit-box-shadow: 0px 0 3px rgba(0,0,0,0.25);
  -moz-box-shadow: 0px 0 3px rgba(0,0,0,0.25);
  box-shadow: 0px 0 3px rgba(0,0,0,0.25); 
}
.bubble-t:after {
  position: absolute;
  display: block;
  content: "";  
  border-color: #eee transparent transparent transparent;
  border-style: solid;
  border-width: 10px;
  height:0;
  width:0;
  position:absolute;
  bottom:-19px;
  left:1em;
}
</style>
    <div class="testimonials">
       	<div class="test_img">
          	<div class="container">
            	<h1>Testimonials</h1>
    		</div>
		</div>
	</div>
	<div class = 'container'>
		<div class='row' style="color:#708090">
				<h3>Listen to what our clients are saying</h3>
		</div>
		<br>
		<div class='row'>
			<div class='col-md-4'>
				<div class="bubble-t">"Anand's Resume Consulting Services was very helpful in providing insightful 
				feedback on improving my resume. His expertise helped with my keywords and the content of my resume." &nbsp;&nbsp;
				</div>
				<br>
				<p style="margin-left: 1em;">Matthew Wong, UC Berkeley B.S. Electrical Engineering / Computer Science '16</p>
			</div>
			<div class='col-md-4'>
				<div class="bubble-t">"Anand pinpointed mistakes and suggested changes that neither I nor anyone at the resume
		 		seminars I attended thought of. I'd definitely recommend everyone to get his or her resume critiqued by Anand"</div>
		 		<br>
		 		<p style="margin-left: 1em;">Pradyum Shodff, UC Berkeley B.S. Electrical Engineering / Computer Science '16</p>
			</div>
			<div class='col-md-4'>
				<div class="bubble-t">“Anand's resume services have been the best out of all resume review services I’ve tried. He was 
					more thorough and provided more detailed explanations than other people who do this as their profession.”</div>
				<br>
				<p style="margin-left: 1em;">Andrew Adams, UCLA B.S. Electrical Engineering '13</p>
			</div>
		</div>
		<br>
		<div class='row'>
			<div class='col-md-4'>
				<div class="bubble-t">"Anand's services were extremely helpful in getting me interviews. He does a good job of 
					choosing words that best describe your previous roles and experiences, and knows what employers are looking
					 for. Just tell Anand what you did for the summer - and he'll tell you what you really did."</div>
				<br>
				<p style="margin-left: 1em;">Shyam Kumar, UC Berkeley Electrical Engineering / Computer Science '16</p>
			</div>
			<div class='col-md-4'>
				<div class="bubble-t">"Anyone, in any field and in search of any job, will benefit tremendously from this service.
				 Anand's response is both fast and thorough, and by leveraging his experience working with a large number of resumes
				 , he's able to provide exceedingly clever insight into yours. If you're wondering whether to consult Anand's expertise, 
				 the answer is that you should have consulted him weeks ago—but now is the next best time."</div>
				<br>
				<p style="margin-left: 1em;">Jimmy Wu, UC Berkeley Electrical Engineering / Computer Science '15</p>
			</div>
			<div class='col-md-4'>
				<div class="bubble-t">"I was a bit skeptical about Anand’s ability to edit my resume initially, as I didn’t believe 
				he had the necessary background to do so, but after receiving an edited version of my resume from him, any 
				and all doubts vanished. His professionalism, his demeanor and his manner of approaching the various errors
			 	outlined on the resume were fantastic, and I would honestly recommend him to anybody seeking to get more out 
			 	of their resume."</div>
			 	<br>
			 	<p style="margin-left: 1em;">Vinay Ramesh, UC Berkeley B.A. Political Science '16</p>
			</div>
		</div>
	</br>
	</br>
	
<?php include 'footer.php'; ?>   