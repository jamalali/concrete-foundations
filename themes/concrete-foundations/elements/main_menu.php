<div class="row">
    <div class="small-12 columns small-only-no-gutter">

        <div class="contain-to-grid">

            <nav class="top-bar" data-topbar>

                <ul class="title-area">
					
                    <li class="name">
                        <?php $a = new GlobalArea('Site Name');
                        $a->display(); ?>
                    </li>
					
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon">
						<a href="#">
							<span></span>
						</a>
					</li>
					
				</ul>

				<section class="top-bar-section">
                    <?php $nav = BlockType::getByHandle('autonav');
					$nav->controller->displayPages = 'top';
					$nav->controller->orderBy = 'display_asc';
					$nav->controller->displaySubPages = 'all';
					$nav->controller->displaySubPageLevels = 'all';
					$nav->render('templates/foundation_topbar/view'); ?>
				</section>

            </nav>

        </div>
        
    </div>
</div>