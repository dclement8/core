<?php
	/*
	* @name            : vRegister.php
	* @description     : Register view
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>, Dylan Clement <dylanclement7@protonmail.ch>
	*/

	$_t = new Template($this->txt->Global->register);
    $_t->addCss("home_global");
    $_t->addCss("Register/home_register");
    $_t->addJs("Register/sha512");
    $_t->addJs("Register/log_register");
   	$_t->getHeader();
?>
<body>
        <section id="language">
            <div>
                <?php $this->getLanguageSelector(); ?>
            </div>
        </section>

        <section id="header">
            <div id="logo"><img src="<?php echo MVC_ROOT; ?>/public/pictures/register/logo_anime.svg" /></div>
        </section>

        <section id="content">
            <div id="back"><p><a href="../photon/"><?php echo $this->txt->Global->back; ?></a></p></div>

            <div id="avatar"><p><img src="<?php echo MVC_ROOT; ?>/public/pictures/register/user.svg" /></p></div>
            <div id="text"><p><?php echo $this->txt->Global->register; ?></p></div>

            <div id="form">
                <input type="text" id="field_mail" placeholder="<?php echo $this->txt->Register->email; ?>..." /><br />
                <input type="text" id="field_pseudo" placeholder="<?php echo $this->txt->Register->login; ?>..." /><br />
                <input type="password" id="field_pass" placeholder="<?php echo $this->txt->Register->password; ?>..." /><br />
                <input type="password" id="field_pass_confirm" placeholder="<?php echo $this->txt->Register->confirm; ?>..." /><br />
                <input type="password" id="field_passphrase" placeholder="<?php echo $this->txt->Register->passphrase; ?>..."/><br />
                <input type="password" id="field_passphrase_confirm" placeholder="<?php echo $this->txt->Register->confirm; ?>..."/><br /><br />
                <a href="Connexion"><?php echo $this->txt->Register->alreadyregistered; ?></a><br />
                <input type="submit" value="<?php echo $this->txt->Global->register; ?>" onclick="sendRegisterRequest()"/>
            </div>

            <div id="return">
                <p class="error"><?php echo $this->txt->Register->impossible; ?> :)</p>
            </div>
        </section>
</body>
<?php
   $_t->getFooter();
?>
