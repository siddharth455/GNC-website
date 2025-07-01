<?php require "common/header.php" ?>
<?php require "common/header.php" ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance || Guru Nanak College Dehradun</title>
 </head>
<style>
    .nav-pills {
        background-color: #cfd3d9;
        border: 1px dotted #58606a;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 10px;
    }

    .tab-content {
        border: 1px dotted #58606a;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 10px;
    }

    .nav-link.main {
        background-color: #f8f9fa;
        color: #495057;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        margin-bottom: 10px;
        transition: background-color 0.3s ease;
    }

    .nav-link:focus,
    .nav-link:hover {
        text-decoration: underline;
        color: #0d6efd;
    }

    .nav-link.active {
        text-decoration: underline;
    }

    .nav-link.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>
<section class="pageBanner-inner">
    <div style="background-image: url('upload/infra/53.webp'); background-repeat: no-repeat; background-size: cover;">
      <div class="pageBanner-inner_in">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-xl-7">
              <div class="pageBanner-inner__content inner-content head-sm text-md-start">
                <div class="upper-banner-content">
                  <h3 class="mb-1 mt-3">Grievance Redressal Cell<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="nav flex-column nav-pills position-sticky" style="top: 150px" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link main active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Overview</button>
                <button class="nav-link main">
                    <a href="mailto:grievances@gncdehradun.com">Submit</a>
                </button>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7 mb-5">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="programmeStructure-section pt-2 pb-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="page-heading mb-4">
                                        <h2 class="mb-3">Mechanisms for submission of online and offline students’ grievances:</h2>
                                        <p>The institute has provision for online submission of grievance through the institute ERP Software or through the email <b>grievances@gnc.edu.in</b></p>
                                    </div>

                                    <div class="page-sub-heading mb-2">
                                        <h4 class="mb-3">Further, students can submit their grievance offline through the complaint box kept near the administrative office.
                                            The mechanism for handling the grievances are as follows. </h4>
                                    </div>

                                    <ul class="list-unstyled p-0 list-icon-3 ps-4">
                                        <li>Step 1: Students submits the grievances either using the online or offline facility. </li>
                                        <li>Step 2: The grievances are discussed in the meeting of the respective committees to resolve issue.</li>
                                        <li>Step 3: All these are recorded in the minutes of the meetings of the respective committees
                                            and action is taken to resolve the raised issue and it will be communicated to the aggrieved.</li>
                                        <li>Step 4: The action taken report is maintained.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-sticky border" style="top: 150px">
                                        <img src="upload/infra/grievance-redressal.webp" alt="grievance" loading="lazy" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <!-- Content for Minutes of Meeting Tab -->
                </div>
            </div>
        </div>
    </div>
</div>
    <?php require "common/footer.php" ?>
 </html>