
    <div class="education-timeline">
      <div class="row">
        <div class="main-timeline">
          <div class="col-md-3 col-sm-6 timeline">
              <div class="timeline-icon"><a href="<?php if ($lang == 'en') {echo "https://mastercaweb.u-strasbg.fr/?lang=en";} else {echo "https://mastercaweb.u-strasbg.fr/?lang=fr";}?>"><img class="timeline-image" src="images/master-caweb.png" alt="CAWEB logo"/></a></div>
              <span class="year">2016-2018</span>
              <div class="timeline-content">
                  <div class="post"><?php echo $xml->education->caweb->title->$lang;?></div>
                  <p class="description">
                      <span class="institution"><?php echo $xml->education->caweb->institution->$lang;?></span><br>
                  </p>
                  
              </div>
            </div>
            <div class="col-md-3 col-sm-6 timeline">
                <div class="timeline-icon"><a href="https://www.unistra.fr/index.php?id=19612"><img class="timeline-image" src="images/strasbourg_logo.png" alt="Unistra logo"/></a></div>
                <span class="year">2015-2016</span>
                <div class="timeline-content">
                    <div class="post"><?php echo $xml->education->pluri->title->$lang;?></div>
                    <p class="description">
                        <span class="institution"><?php echo $xml->education->pluri->institution->$lang;?></span><br>
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 timeline">
                <div class="timeline-icon"><a href="https://www.ubc.ca/"><img class="timeline-image" src="images/ubc_logo.jpg" alt="UBC logo"/></a></div>
                <span class="year">2010-2014</span>
                <div class="timeline-content">
                    <div class="post"><?php echo $xml->education->ubc->title->$lang;?></div>
                    <p class="description">
                        <span class="institution"><?php echo $xml->education->ubc->institution->$lang;?></span><br>
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 timeline">
                <div class="timeline-icon"><a href="https://www.ugr.es/"><img class="timeline-image" src="images/granada_logo.png"alt="UGR logo"/></a></div>
                <span class="year">2012-2013</span>
                <div class="timeline-content">
                    <div class="post"><?php echo $xml->education->goglobal->title->$lang;?></div>
                    <p class="description">
                        <span class="institution"><?php echo $xml->education->goglobal->institution->$lang;?></span><br>
                    </p>
                </div>
            </div> 
        </div><!--end main-timeline-->
      </div><!--end row-->
    </div><!--end education-timeline-->
