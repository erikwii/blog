<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
	<main class="mdl-layout__content">
		<div class="container h400 mb-3">
			<div class="row d-none" id="post">
				<?php $margin = ''; ?>
				<?php if ($this->session->has_userdata('username')): ?>
					<?php $margin = 'my-4'; ?>
					<div class="col"></div>
					<div class="col-sm-12 col-lg-8">
						<div>
							<ul class="nav classic-tabs blue-gradient" role="tablist" id="akunTab" >
								<li class="nav-item ml-auto">
						            <a class="nav-link waves-light active" data-toggle="tab" href="#photo" role="tab"><i class="fa fa-file-photo-o fa-2x" aria-hidden="true"></i><br>Photo</a>
						        </li>
								<li class="nav-item">
						            <a class="nav-link waves-light" data-toggle="tab" href="#text" role="tab"><i class="fa fa-file-text fa-2x" aria-hidden="true"></i><br>Text</a>
						        </li>
						        <li class="nav-item">
						            <a class="nav-link waves-light" data-toggle="tab" href="#tp" role="tab"><i class="fa fa-file-picture-o fa-2x" aria-hidden="true"></i><br>Text-Photo</a>
						        </li>
						        <li class="nav-item mr-auto">
						            <a class="nav-link waves-light" data-toggle="tab" href="#quotes" role="tab"><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i><br>Quotes</a>
						        </li>
						    </ul>
						</div>
						<!-- Tab panels -->
						<div class="tab-content card" style="padding-top: 0;min-height: 340px !important">
							<!--Panel 2-->
			                <div class="tab-pane fade in show active text-right" id="photo" role="tabpanel">
			                	<?php echo form_open_multipart(base_url().'story/post/'.$IDcathegory.'/Photo');?>
				                	<div class="text-center mb-5 mt-5 row">
				                		<div class="col-4"></div>
				                		<div class="col-4">
				                			<div class="btn-group file-field">
						                        <label class="btn btn-rounded blue btn-lg">
						                            <span class="fa fa-camera fa-2x"></span>
						                            <input type="file" name="userfile">
						                        </label>
						                    </div>
				                		</div>
				                		<div class="col-4"></div>
				                	</div>
				                	<div class="section-spacer"></div>
				                	<div>
				                		<select name="col" class="d-block mdb-select colorful-select dropdown-primary float-left mb-auto">
				                        	<option disabled="" selected="" value="4">size</option>
				                        	<option value="4">4</option>
				                        	<option value="6">6</option>
				                        	<option value="8">8</option>
				                        	<option value="12">12</option>
				                        </select>
					                	<input type="submit" class="btn bg-primary mb-4" value="post">
				                	</div>
			                	</form>
			                </div>
							
			                <!--Panel 1-->
			                <div class="tab-pane fade text-right" id="text" role="tabpanel">
			                	<form method="POST" action="<?php echo base_url().'story/post/'.$IDcathegory.'/Text' ?>" class='pb-2 h-100'>
			                        <div class="row ml-auto mr-auto mt-5">
			                        	<div class="md-form form-sm col-12">
				                            <input type="text" id="judul" name="judul" length='20' class="form-control validate">
				                            <label id="namaLabel" for="judul">Judul</label>
				                        </div>
				                        <div class="md-form form-sm col-12">
				                            <textarea type="text" id="form7" class="md-textarea validate" length='160' name="content" rows="15"></textarea>
                            				<label for="form7" class="">Content...</label>
				                        </div>
			                        </div>
		                        	<select name="col" class="d-block mdb-select colorful-select dropdown-primary float-left">
			                        	<option disabled="" selected="" value="4">size</option>
			                        	<option value="4">4</option>
			                        	<option value="6">6</option>
			                        	<option value="8">8</option>
			                        	<option value="12">12</option>
			                        </select>
									<input type="submit" class="btn bg-primary mb-4" value="post">
			                	</form>
			                </div>
			                <!--/.Panel 1-->
			                
			                <div class="tab-pane fade text-right" id="tp" role="tabpanel">
								<?php echo form_open_multipart(base_url().'story/post/'.$IDcathegory.'/Text-Photo');?>
		                			<div class="btn-group file-field float-right mt-3">
				                        <label class="btn btn-rounded blue btn-lg">
				                            <span class="fa fa-camera fa-2x"></span>
				                            <input type="file" name="userfile">
				                        </label>
				                    </div>
				                    <br>
				                	<div class="row ml-auto mr-auto mt-5">
			                        	<div class="md-form form-sm col-12">
				                            <input type="text" id="title" name="title" class="form-control validate" length='20'>
				                            <label id="namaLabel" for="title">Judul</label>
				                        </div>
				                        <div class="col"></div>
				                        <div class="md-form form-sm col-12">
				                            <textarea type="text" id="form7" class="md-textarea validate" length='160' name="content" rows="15"></textarea>
                            				<label for="form7" class="">Content...</label>
				                        </div>
			                        </div>
			                        <select name="col" class="d-block mdb-select colorful-select dropdown-primary float-left">
			                        	<option disabled="" selected="" value="4">size</option>
			                        	<option value="4">4</option>
			                        	<option value="6">6</option>
			                        	<option value="8">8</option>
			                        	<option value="12">12</option>
			                        </select>
				                	<input type="submit" class="btn bg-primary mb-4 float-right" value="post">
			                	</form>
			                </div>
			                
			                <div class="tab-pane fade text-right" id="quotes" role="tabpanel">
			                	<form method="POST" action="<?php echo base_url().'story/post/'.$IDcathegory.'/Quotes' ?>" class='pb-2 h-100'>
			                        <div class="row ml-auto mr-auto mt-5">
				                        <div class="md-form form-sm col-12">
				                            <textarea type="text" id="form7" class="md-textarea" name="content" rows="15"></textarea>
                            				<label for="form7" class="">Quotes</label>
				                        </div>
			                        </div>
		                        	<select name="col" class="d-block mdb-select colorful-select dropdown-primary float-left">
			                        	<option disabled="" selected="" value="4">size</option>
			                        	<option value="4">4</option>
			                        	<option value="6">6</option>
			                        	<option value="8">8</option>
			                        	<option value="12">12</option>
			                        </select>
									<input type="submit" class="btn bg-primary mb-4" value="post">
			                	</form>
			                </div>
			            </div>
					</div>
					<div class="col"></div>
				<?php endif; ?>
			</div>			
		</div>
		
		<div class="demo-blog__posts mdl-grid">
			
			<?php foreach ($post as $p): ?>
				<?php if ($p->type == "Photo"): ?>
					
					<div class="mdl-card amazing mdl-cell mdl-cell--<?php echo $p->sizeCol ?>-col mdl-cell--4-col-phone mdl-shadow--2dp h340 something-else <?php echo $margin ?>">
						<?php if ($this->session->has_userdata('username')): ?>
							<a href="<?php echo base_url().'story/delete/'.$p->IDpost.'/'.$IDcathegory ?>">
								<button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--red">
					              	<i class="fa fa-close mdl-color-text--white" role="presentation"></i>
					              	<span class="visuallyhidden">add</span>
					            </button>
				            </a>
			        	<?php endif ?>
						<div class="mdl-card__media" style="background:url(<?php echo base_url().'assets/images/post/'.$p->filePhoto ?>) center / cover;">
							<div class="section-spacer"></div>
							<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white" href="<?php echo base_url().'assets/images/post/'.$p->filePhoto ?>">Lihat</a>
						</div>
					</div>
					
				<?php elseif ($p->type == "Text-Photo"): ?>
					
					<div class="mdl-card amazing mdl-cell mdl-cell--<?php echo $p->sizeCol ?>-col mdl-cell--4-col-phone mdl-cell--4-col-tablet mdl-shadow--2dp something-else <?php echo $margin ?>">
						<?php if ($this->session->has_userdata('username')): ?>
							<a href="<?php echo base_url().'story/delete/'.$p->IDpost.'/'.$IDcathegory ?>">
								<button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--red">
					              	<i class="fa fa-close mdl-color-text--white" role="presentation"></i>
					              	<span class="visuallyhidden">add</span>
					            </button>
					        </a>
			        	<?php endif; ?>
						<div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url('<?php echo base_url() ?>assets/images/post/<?php echo $p->filePhoto ?>')">
							<h3 class="quotes"><a href="<?php echo base_url().'assets/images/post/'.$p->filePhoto ?>"><?php echo $p->title ?></a></h3>
						</div>
						<div class="mdl-card__supporting-text mdl-color-text--grey-600">
							<?php echo $p->content ?>
						</div>
						<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
							<div class="minilogo"></div>
							<div class="section-spacer"></div>
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo base_url().'assets/images/post/'.$p->filePhoto ?>">Lihat</a>
						</div>
					</div>
					
				<?php elseif ($p->type == 'Text'):?>
					
					<div class="mdl-card mdl-cell mdl-cell--<?php echo $p->sizeCol ?>-col mdl-shadow--2dp something-else <?php echo $margin ?>">
						<?php if ($this->session->has_userdata('username')): ?>
							<a href="<?php echo base_url().'story/delete/'.$p->IDpost.'/'.$IDcathegory ?>">
								<button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--red">
					              	<i class="fa fa-close mdl-color-text--white" role="presentation"></i>
					              	<span class="visuallyhidden">add</span>
					            </button>
					        </a>
				        <?php endif; ?>
						<div class="mdl-card__supporting-text mdl-card--border mdl-color-text--grey-600 mdl-typography--text-justify">
							<p><?php echo $p->content ?></p>
						</div>
						<div class="mdl-card__actions mdl-card--border meta">
							<div class="minilogo"></div>
							<div>
								<strong><?php echo $p->title ?></strong>
								<span><?php echo $this->m_all->change_datetoview($this->m_all->get_cathegory($IDcathegory)['tgl']) ?></span>
							</div>
						</div>
					</div>
					
				<?php else: ?>
					
					<div class="mdl-card amazing mdl-cell mdl-cell--<?php echo $p->sizeCol ?>-col something-else mdl-shadow--2dp <?php echo $margin ?>">
						<?php if ($this->session->has_userdata('username')): ?>
							<a href="<?php echo base_url().'story/delete/'.$p->IDpost.'/'.$IDcathegory ?>">
								<button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--red">
					              	<i class="fa fa-close mdl-color-text--white" role="presentation"></i>
					              	<span class="visuallyhidden">add</span>
					            </button>
					        </a>
				        <?php endif; ?>
			            <div class="mdl-card__title mdl-color-text--grey-50">
			            	<h3 class="quote"><i><?php echo $p->content ?>…</i></h3>
			            </div>
			            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
			              	<div class="minilogo"></div>
			              	<div>
			                	<strong>Quotes</strong>
			                	<span><?php echo $this->m_all->change_datetoview($this->m_all->get_cathegory($IDcathegory)['tgl']) ?></span>
			              	</div>
			            </div>
			        </div>
					
				<?php endif; ?>
			<?php endforeach; ?>
			
			<nav class="demo-nav mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
				<a href="<?php echo base_url() ?>story" class="demo-nav__button" title="Back to story">
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">arrow_backward</i>
					</button>
					Back to Story
				</a>
			</nav>
		</div>