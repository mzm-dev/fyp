<div id="top">
    <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
        <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
            <i class="icon-align-justify"></i>
        </a>
        <!-- LOGO SECTION -->
        <!--<header class="navbar-header">-->
        <header>
            <?php echo $this->Html->image('logo-d.png', array('class' => 'navbar-brand')); ?>
            <?php echo $this->Html->image('jatanegara.png', array('class' => 'pull-right')); ?>            
        </header>
        <!-- END LOGO SECTION -->
        <ul class="nav navbar-top-links navbar-right">        
            <!--ALERTS SECTION -->
            <li class="chat-panel dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    <span class="label label-warning">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="icon-comment"></i> New Comment
                                <span class="label label-success pull-right text-muted small">2</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="icon-twitter info"></i> 3 New Follower
                                <span class="label label-success pull-right text-muted small">3</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="icon-envelope"></i> Message Sent
                                <span class="label label-success pull-right text-muted small">6</span>                                
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="icon-tasks"></i> New Task
                                <span class="label label-success pull-right text-muted small">1</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="icon-upload"></i> Server Rebooted
                                <span class="label label-success pull-right text-muted small">9</span>
                            </div>
                        </a>
                    </li>                    
                </ul>

            </li>
            <!-- END ALERTS SECTION -->

            <!--ADMIN SETTINGS SECTIONS -->

            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    <i class="icon-user "></i> Mohamad Zaki Mustafa &nbsp; <i class="icon-chevron-down "></i>
                </a>

                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="icon-user"></i> User Profile </a>
                    </li>
                    <li><a href="#"><i class="icon-gear"></i> Settings </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="login.html"><i class="icon-signout"></i> Logout </a>
            </li>
            <!--END ADMIN SETTINGS -->
        </ul>

    </nav>
</div>