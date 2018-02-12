<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
	<main class="mdl-layout__content">
		<div class="demo-blog__posts mdl-grid">
			
			<?php if ($this->session->has_userdata('username')): ?>
				<div class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--4-col-phone mdl-cell--4-col-tablet mdl-shadow--2dp h340">
					<div class="mdl-card__supporting-text mdl-color-text--grey-600">
						<div class="mdl-grid">
							<!-- Textfield with Floating Label -->
						  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    	<input class="mdl-textfield__input" type="text" id="username" name="username">
						    	<label class="mdl-textfield__label" for="username">Username</label>
						  	</div>
						  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    	<input class="mdl-textfield__input" type="password" id="password" name="password">
						    	<label class="mdl-textfield__label" for="password">Password</label>
						  	</div>
						</div>
					</div>
					<div class="mdl-card__supporting-text">
						<div class="section-spacer"></div>
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="">Post</a>
					</div>
				</div>
    		<?php endif; ?>
			
			<?php foreach ($post as $p): ?>
				<?php if ($p->type == "Photo"): ?>
					
					<div class="mdl-card amazing mdl-cell mdl-cell--<?php echo $p->sizeCol ?>-col mdl-cell--4-col-phone mdl-shadow--2dp h340">
						<div class="mdl-card__media" style="background:url(<?php echo base_url().'assets/images/post/'.$p->filePhoto ?>) center / cover;">
							<div class="section-spacer"></div>
							<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white" href="<?php echo base_url().'assets/images/post/'.$p->filePhoto ?>">Lihat</a>
						</div>
					</div>
					
				<?php elseif ($p->type == "Text-Photo"): ?>
					
					<div class="mdl-card amazing mdl-cell mdl-cell--<?php echo $p->sizeCol ?>-col mdl-cell--4-col-phone mdl-cell--4-col-tablet mdl-shadow--2dp h340">
						<div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url('<?php echo base_url() ?>assets/images/post/<?php echo $this->m_all->last_photo($cat->IDcathegory) ?>')">
							<h3 class="quotes"><a href="<?php echo base_url().'story/us/'.$cat->IDcathegory ?>"><?php echo $cat->name ?></a></h3>
						</div>
						<div class="mdl-card__supporting-text mdl-color-text--grey-600">
							<?php echo $cat->description ?>
						</div>
						<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
							<div class="minilogo"></div>
							<div>
								<strong><i><?php echo $cat->footnote ?></i></strong>
								<span><?php echo $cat->tgl ?></span>
							</div>
							<div class="section-spacer"></div>
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo base_url().'story/us'.$cat->IDcathegory ?>">Lihat</a>
						</div>
					</div>
					
				<?php endif; ?>
			<?php endforeach; ?>
			
			<nav class="demo-nav mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
				<a href="<?php echo base_url() ?>story" class="demo-nav__button" title="show more">
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">arrow_backward</i>
					</button>
					Back to Story
				</a>
			</nav>
		</div>