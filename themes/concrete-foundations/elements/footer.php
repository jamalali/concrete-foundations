<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

					<div class="row footer">
						<div class="small-12 columns">

							<div class="row">

								<div class="small-12 medium-8 large-7 columns col-1">

									<p class="footer-sign-in">
										<?php $u = new User();
										if ($u->isRegistered()) { ?>
											<?php if (Config::get("ENABLE_USER_PROFILES")) {
												$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
											} else {
												$userName = $u->getUserName();
											} ?>
											<span class="sign-in"><?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></span>
										<?php } else { ?>
											<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a></span>
										<?php } ?>
									</p>

									<p class="footer-copyright">
										&copy;<?php echo date('Y')?> <?php echo h(SITE)?>.
									</p>

								</div>

								<div class="small-12 medium-4 large-5 columns large-text-right col-2">

									<p class="footer-tag-line">
										<?php echo t('Built with <a href="http://www.concrete5.org/" alt="Free Content Management System" target="_blank">concrete5 - an open source CMS</a>')?>
									</p>

								</div>

							</div>
							
						</div>
					</div>



				</div> <!-- end small-12 columns -->
			</div> <!-- end row -->

        </div> <!-- end cf-ui -->

        <?php  Loader::element('footer_required'); ?>

        <script src="<?php echo $this->getThemePath(); ?>/bower_components/foundation/js/foundation.min.js"></script>
        <script src="<?php echo $this->getThemePath(); ?>/js/app.js"></script>

    </body>
</html>