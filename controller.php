<?php   
 
defined('C5_EXECUTE') or die(_("Access Denied."));
 
class ConcreteFoundationsPackage extends Package {
 
    protected $pkgHandle            = 'concrete-foundations';
    protected $pkgName              = 'Concrete Foundations';
    protected $pkgDescription       = 'A Zurb\'s Foundation theme for Concrete5';
    protected $appVersionRequired   = '5.6.3.1';
    protected $pkgVersion           = '1.0.0.0';
    
    public function install() {
        $pkg = parent::install();

        $this->_installThemes($pkg);
        $this->_installBlocks($pkg);
        $this->_installSinglePages($pkg);
        $this->_setConfig($pkg);
    }

    // Update any existing installation
    public function upgrade() {
        $pkg = $this;
        parent::upgrade();

        $this->_installThemes($pkg);
        $this->_installBlocks($pkg);
        $this->_installSinglePages($pkg);
    }

    public function uninstall() {
        parent::uninstall();
    }
    
    private function _installThemes($pkg) {
        $pt = new PageTheme();
        // Delete default themes
        $ct = $pt->getByHandle('dark_chocolate');
        if (is_object($ct)) {
            $ct->uninstall();
        }
        $ct = $pt->getByHandle('default');
        if (is_object($ct)) {
            $ct->uninstall();
        }
        $ct = $pt->getByHandle('greek_yogurt');
        if (is_object($ct)) {
            $ct->uninstall();
        }
        $ct = $pt->getByHandle('greensalad');
        if (is_object($ct)) {
            $ct->uninstall();
        }

        // Install the new theme
        $ct = $pt->getByHandle('concrete-foundations');
        if (!is_object($ct)) {
            $ct = $pt->add('concrete-foundations', $pkg);
            $ct->applyToSite();
        }
    }
    
    private function _installBlocks($pkg) {
        $bt = new BlockType();
        if (!is_object($bt->getByHandle('autonav'))) {
            $bt->installBlockTypeFromPackage('autonav', $pkg);
        }
        return true;
    }
    
    private function _installSinglePages($pkg) {
		/*
        Loader::model('single_page');
        
        $sp = SinglePage::add('/menu', $pkg);
        if ($sp) { $sp->update(array('cName'=> 'Menu'));}
        
        $sp = SinglePage::add('/dashboard/food_menu', $pkg);
        if ($sp) { $sp->update(array('cName'=> 'Food Menu'));}
        
        $sp = SinglePage::add('/dashboard/food_menu/settings', $pkg);
        if ($sp) { $sp->update(array('cName'=> 'Settings'));}
        
        $sp = SinglePage::add('/dashboard/food_menu/dishes', $pkg);
        if ($sp) { $sp->update(array('cName'=> 'Dishes'));}
        
        $sp = SinglePage::add('/dashboard/food_menu/items', $pkg);
        if ($sp) { $sp->update(array('cName'=> 'Items'));}
		 * 
		 */
    }
    
    private function _setConfig() {
		/*
        $co = new Config();
        $pkg = Package::getByHandle('indian_ocean');
        $co->setPackageObject($pkg);
        $co->save('show_prices', 1);
		 * 
		 */
    }
}