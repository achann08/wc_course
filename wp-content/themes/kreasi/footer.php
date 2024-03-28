        <footer>
			<section class="border-top bg-light">
				<div class="container py-5">
					<div class="row">
						<?php if (is_active_sidebar('kreasi-sidebar-footer1')) : ?>
							<?php dynamic_sidebar('kreasi-sidebar-footer1'); ?>
						<?php endif; ?>
					</div>
					<div class="row">
						<?php if (is_active_sidebar('kreasi-sidebar-footer2')) : ?>
							<?php dynamic_sidebar('kreasi-sidebar-footer2'); ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<section class="border-top pt-3 bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<p class="text-white">© 2022 Company, Inc</p>
						</div>
						<!-- <div class="col-sm-8">
							<ul class="list-unstyled d-flex justify-content-center justify-content-sm-end flex-wrap">
								<li class="ms-3">
									<a class="link-dark" href="#">
										<span class="fa-stack fa-1x" style="flex-shrink: 0;">
											<i class="fas fa-square fa-stack-2x"></i>
											<i class="fab fa-x-twitter fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</li>
								<li class="ms-3">
									<a class="link-dark" href="#">
										<span class="fa-stack fa-1x" style="flex-shrink: 0;">
											<i class="fas fa-square fa-stack-2x"></i>
											<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</li>
								<li class="ms-3">
									<a class="link-dark" href="#">
										<span class="fa-stack fa-1x" style="flex-shrink: 0;">
											<i class="fas fa-square fa-stack-2x"></i>
											<i class="fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
			</section>
		</footer>
    </div>
<?php wp_footer(); ?>
</body>
</html>