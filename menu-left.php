<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="<?php echo $dashboard;?>">
                    <a href="/">
                        <i class="iconsminds-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo $profile;?>">
                    <a href="/profile/">
                        <i class="simple-icon-people"></i> Perfil
                    </a>
                </li>
                <?php
                if (sed::decryption($user_type) == 3) { ?>
                    <li class="<?php echo $queue;?>">
                        <a href="/queue/">
                            <i class="simple-icon-calendar"></i> Citas
                        </a>
                    </li>
                <?php }else{

                    if (sed::decryption($user_type) == 1) { ?>
                        <li class="<?php echo $queue;?>">
                            <a href="/queue/">
                                <i class="simple-icon-calendar"></i> Citas
                            </a>
                        </li>
                        <li class="<?php echo $users;?>">
                            <a href="/users/">
                                <i class="simple-icon-people"></i> Usuarios
                            </a>
                        </li>
                        <li class="<?php echo $locations;?>">
                            <a href="/locations/">
                                <i class="iconsminds-map-marker"></i> Localidades
                            </a>
                        </li>
                        <li class="<?php echo $config;?>">
                            <a href="/config/">
                                <i class="simple-icon-settings"></i> Configuraci&oacute;n
                            </a>
                        </li>
                    <?php } ?>

                    <?php
                    if (sed::decryption($user_type) == 2) { ?>
                        <!-- <li class="<?php echo $profile;?>">
                            <a href="/profile/">
                                <i class="simple-icon-people"></i> Perfil
                            </a>
                        </li> -->
                    <?php } ?>

                <?php }
                ?>

            </ul>
        </div>
    </div>

</div>