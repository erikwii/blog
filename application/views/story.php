<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
	<main class="mdl-layout__content">
		<div class="demo-blog__posts mdl-grid">
			
			<?php foreach ($cathegory as $cat): ?>
				
			<div class="mdl-card amazing home mdl-cell mdl-cell--6-col mdl-cell--4-col-phone mdl-cell--4-col-tablet mdl-shadow--2dp h340">
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
					<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo base_url().'story/us/'.$cat->IDcathegory ?>">Lihat</a>
				</div>
			</div>
			
			<?php endforeach ?>
			
			<nav class="demo-nav mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
					<a href="<?php echo base_url() ?>" class="demo-nav__button" title="show more">
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
							<i class="material-icons" role="presentation">arrow_backward</i>
						</button>
						Back to Home
					</a>
			</nav>
		</div>