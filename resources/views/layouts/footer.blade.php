	<footer class="bg-black text-white font-weight-medium" style="background: #000;">
	<div class="container-fluid">
    <div class="no-gutters py-5 row">
       <div class="col-lg-11 col-xl-10 mx-auto pl-md-5 pl-0 footer-container">
        <div class="no-gutters row">
          
          <!-- Current Right -->
          <div class="col-12 mb-5">
            <div class="no-gutters row">
              <!-- First Column-->
              <div class="col-6 col-md-3 mb-4">
                <div class="px-3">
                  <span class="mb-4 footer-column-header">ABOUT</span>
                  <ul class="font-size-sm list-unstyled p-0">
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">How it Works</a>
                    </li>
                   <li class="mb-2">
                      <a class="text-white footer-link" href="">Job Roles</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Why Philippines?</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Clients</a>
                    </li>
                    <!--<li class="mb-2">
                      <a class="text-white footer-link" href="">Careers</a>
                    </li>-->
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Blog</a>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Second Column -->
              <div class="col-6 col-md-3 mb-4">
                <div class="px-3">
                  <span class="mb-4 footer-column-header">SUPPORT</span>
                  <ul class="font-size-sm list-unstyled p-0">
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Contact Us</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Contact Sales</a>
                    </li>
                    <li class="mb-2">
                      <a class="book-a-call text-white footer-link" href="" data-page-name="V4 / Homepage" data-page-uri="https://www.staffvirtual.com" data-remote-ip="103.140.219.60">Book a Call</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Get Started</a>
                    </li>
                    <li class="mb-2">
                      <!--a class="btn cta-outline-light job-opening" href="">
                        <span>Job Openings</span>
                      </a-->
                      <!--<a class="text-white footer-link" href="">Job Openings</a>-->
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Third Column -->
              <div class="col-6 col-md-3 mb-4">
                <div class="px-3">
                  <span class="mb-4 footer-column-header">SOLUTIONS</span>
                  <ul class="font-size-sm list-unstyled p-0">
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Customer Support</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Back-Office</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">IT Outsourcing</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Creative</a>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Forth Column -->
              <div class="col-6 col-md-3">
                <div class="px-3">
                  <span class="mb-4 footer-column-header">INDUSTRIES</span>
                  <ul class="font-size-sm list-unstyled p-0">
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">IT</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Legal</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Recruitment</a>
                    </li>
                    <li class="mb-2">
                      <a class="text-white footer-link" href="">Marketing</a>
                    </li>
                  </ul>
                </div>
              </div>
              
              
            </div>
          </div>
          <!-- End Current Right -->
          <!-- Current Left -->
        </div>
      </div>
    </div>
    </div>
    <div class="border-top font-weight-light privacy py-4 text-center text-light">© 2022 <a class="text-white" href="">Chawtechsolutions.com</a>. All Rights Reserved.</div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
	  jQuery(document).ready(function () {
		$('#example').DataTable();
	});
  </script>
<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  //slides[slideIndex-1].style.display = "block";
  //dots[slideIndex-1].className += " active";
  //captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

