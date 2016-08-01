<?php
    /*
	* @name            : vBug.php
	* @description     : Notify a bug view
	* @authors         : Dylan Clement <dylanclement7@protonmail.ch>
	*/

    $_t = new Template($this->txt->Global->bug);
    $_t->addCss("home_global");
    $_t->addCss("Interface/new_design");
    $_t->getHeader();
?>
<body>
        <header>
            <div id="logo"></div>
            <div id="user">
                <p><img src="<?php echo MVC_ROOT; ?>/public/pictures/header/bug.svg" /><br /><?php echo_h($this->txt->UserMenu->bug); ?></p>
                <p><img src="<?php echo MVC_ROOT; ?>/public/pictures/header/help.svg" /><br /><?php echo_h($this->txt->UserMenu->help); ?></p>
                <p><img src="<?php echo MVC_ROOT; ?>/public/pictures/header/settings.svg" /><br /><?php echo_h($this->txt->UserMenu->settings); ?></p>
                <p><a href="<?php echo MVC_ROOT; ?>/Profile"><img src="<?php echo MVC_ROOT; ?>/public/pictures/header/user.svg" /><br /><?php echo_h($this->txt->UserMenu->profile); ?></a></p>
                <p><a href="<?php echo MVC_ROOT; ?>/Logout"><img src="<?php echo MVC_ROOT; ?>/public/pictures/header/user.svg" /><br /><?php echo_h($this->txt->UserMenu->logout); ?></a></p>
            </div>
        </header>
    
        <section id="language">
            <div>
                <?php $this->getLanguageSelector(); ?>
            </div>
        </section>
        
        <section id="desktop">
            <h1><?php echo_h($this->txt->Global->bug); ?></h1>
            
            <p><strong><?php if(!empty($this->_message)) { echo_h($this->_message); } ?></strong></p>
            
            <form method="post" action="<?php echo MVC_ROOT; ?>/Bug/Form">
                <table>
                    <tr>
                        <td><?php echo_h($this->txt->Bug->os); ?>* :</td>
                        <td>
                            <select name="os" required>
                                <option value="">-------</option>
                                <?php $this->printValues('os'); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo_h($this->txt->Bug->browser); ?>* :</td>
                        <td>
                            <select name="browser" required>
                                <option value="">-------</option>
                                <?php $this->printValues('browser'); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo_h($this->txt->Bug->browserVersion); ?> :</td>
                        <td>
                            <input type="text" name="browserVersion" value="<?php if(!empty($_POST['browserVersion'])) { echo_h($_POST['browserVersion']); } ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo_h($this->txt->Bug->message); ?>* :</td><td></td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="message" cols="50" rows="5"><?php if(!empty($_POST['message'])) { echo_h($_POST['message']); } ?></textarea>
                        </td><td><input type="submit"></td>
                    </tr>
                </table>
            </form>
        </section>
</body>
<?php
    $_t->getFooter();
?>