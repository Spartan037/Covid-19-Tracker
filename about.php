<?php include "config.php"; ?>
<?php include "header.php"; ?>
<div class="container-fluid my-5">
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid" id="" src="./images/svg/developer.svg" alt="Contact me">
      <!-- <video class="img-fluid" src="images/gif/online-girl-big.webm" autoplay="true"></video> -->
    </div>
    <div class="col-lg-6 my-5">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header bg-dark" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                What is the motive behind this Site ?
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              We have thought that why we're not working on real world projects. An idea popped up in this corona situation that led us to make this project that helps peoples who want to know more about 'What is Covid-19?' and 'How many cases?' so they can aware by themselves.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-dark" id="headingTwo">
            <h2 class="mb-0"> 
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                About Website
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Coronavirus disease (COVID-19) is an infectious disease caused by a new virus that had not been previously identified in humans. This website has options that allow users to learn more about the disease and keep themselves updated.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-dark" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Idea Behind This Website..
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              The idea behind this webiste is to help people be aware of the COVID-19 cases and keep a track of their own health using the 'Symptom Checker'.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-dark" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Who is the Developer?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Sam Methuselah-19BCE1698, Arjun Arora-19BCE1808
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>
