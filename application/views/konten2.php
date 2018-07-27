<!--content 2-->
<?php $this->load->view('header');?>
<?php $this->load->view('navBar');?>
<?php $this->load->view('sideMenu');?>

 <section id="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2">Report</h1>
    </div>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="mb-3">
              <label for="comments">komentar</label>
              <textarea  class="form-control" id="komentar" placeholder="tuliskan keluhan anda" required></textarea>
              <div class="invalid-feedback">
              </div>
            </div>
             <button class="btn btn-primary ">Send<i class="far fa-paper-plane"></i></button>
           </form>
         </section>
            <?php $this->load->view('footer');?>