      <div class="row row-skills">
        <div class="col-md-6 skills-col">

          <div class="special-h3">
          <p class="special"><?php echo $xml->skills->localizationSkills->$lang;?></h3>
          </div>

          <div class="row row-loc-tools">
            <div class="col-md-3 col-sm-6">
              <div class="img sdl">
                <img src="images/sdl_logo.png" alt="SDL Studio logo"/>
              </div>
              <p>SDL Trados Studio<br><span class="sub"><?php echo $xml->skills->studio->$lang;?></span></p>
            </div>
			<div class="col-md-3 col-sm-6">
              <div class="img">
                <img src="images/memsource.jpg" alt="Memsource logo"/>
              </div>
              <p>Memsource<br><span class="sub"><?php echo $xml->skills->memsource->$lang;?></span></p>
            </div>
			<div class="col-md-3 col-sm-6">
              <div class="img">
                <img src="images/memoq.svg" alt="MemoQ logo"/>
              </div>
              <p>MemoQ<br><span class="sub"><?php echo $xml->skills->memoq->$lang;?></span></p>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img">
                <img src="images/okapi_logo.png" alt="Okapi logo"/>
              </div>
              <p>Okapi<br><span class="sub"><?php echo $xml->skills->okapi->$lang;?></span></p>
            </div>
          </div><!--end loc tools row-->
		  
		  <div class="special-h3 special-h3-prog">
          <p class="special"><?php echo $xml->skills->programmingSkills->$lang;?></h3>
          </div>

          <div class="loc-progresses">

            <p class="progress-title"><?php echo $xml->skills->dotNet->$lang;?></p>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" style="width: 75%;">
                </div>
            </div>
            <p class="progress-title">Visual Studio</p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 65%;">
                </div>
            </div>
            <p class="progress-title">XML, XPath, Json</p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 90%;">
                </div>
            </div>
            <p class="progress-title"><?php echo $xml->skills->sdk->$lang;?></p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 60%;">
                </div>
            </div>

          </div>

        </div><!--end left col-->

        <div class="col-md-6 skills-col">

          <div class="special-h3">
            <p class="special"><?php echo $xml->skills->webSkills->$lang;?></h3>
          </div>

          <div class="web-progresses">

            <p class="progress-title">HTML5 | CSS3</p>
              <div class="progress">
                  <div class="progress-bar progress-bar-danger" style="width: 90%;">
                  </div>
              </div>
              <p class="progress-title">JS | JQuery</p>
              <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width: 50%;">
                  </div>
              </div>
              <p class="progress-title">PHP</p>
              <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width: 60%;">
                  </div>
              </div>
              <p class="progress-title">MySQL</p>
              <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width: 50%;">
                  </div>
              </div>
              <p class="progress-title">WordPress</p>
              <div class="progress">
                  <div class="progress-bar progress-bar-success" style="width: 90%;">
                  </div>
              </div>         
          </div>
          <table class="adobe">
              <tr>
                <td width="70px"><p><?php echo $xml->skills->adobe->$lang;?></p></td>
              <td>
                  <img src="images/adobe-illustrator.png" alt="Illustrator logo"/>
              </td>
              <td>
                  <img src="images/adobe-indesign.png" alt="Indesign logo"/>
              </td>
              <td>
                  <img src="images/adobe-photoshop.png" alt="Photoshop logo"/>
              </td>
              <td>
                  <img src="images/adobe-flash-player.png" alt="Flash logo"/>
              </td>
              <td width="200px">
                 
              </td>
              </tr>
          </table>

          <div class="special-h3">
            <p class="special languages"><?php echo $xml->skills->languages->title->$lang;?></p>
          </div>
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="circle-progress english">
						<span class="circle-progress-left">
							<span class="circle-progress-bar"></span>
						</span>
						<span class="circle-progress-right">
							<span class="circle-progress-bar"></span>
						</span>
						<div class="circle-progress-value">en-CA</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="circle-progress french">
						<span class="circle-progress-left">
							<span class="circle-progress-bar"></span>
						</span>
						<span class="circle-progress-right">
							<span class="circle-progress-bar"></span>
						</span>
						<div class="circle-progress-value">fr-FR</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="circle-progress spanish">
						<span class="circle-progress-left">
							<span class="circle-progress-bar"></span>
						</span>
						<span class="circle-progress-right">
							<span class="circle-progress-bar"></span>
						</span>
						<div class="circle-progress-value">es-ES</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="circle-progress german">
						<span class="circle-progress-left">
							<span class="circle-progress-bar"></span>
						</span>
						<span class="circle-progress-right">
							<span class="circle-progress-bar"></span>
						</span>
						<div class="circle-progress-value">de-DE</div>
					</div>
				</div>
			</div>
        </div><!--end right col-->
      </div><!--end row-skills-->