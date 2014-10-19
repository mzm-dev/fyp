<div id="left">


    <ul id="menu" class="collapse">
        <li class="panel">
            <?php echo $this->Html->link('<i class="icon-table"></i> Dashboard', '/', array('escape' => false)); ?>
        </li>
        <li><a href="#"><i class="icon-book"></i> Pelan Induk Landskap </a></li>
        <li class="panel">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pengurusan-projek">
                <i class="icon-stackexchange"></i> Pengurusan Projek
                <span class="pull-right"><i class="icon-angle-left"></i></span>              
            </a>
            <ul class="collapse" id="pengurusan-projek">
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Permohonan Projek', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Senarai Permohonan', '/', array('escape' => false)); ?></li>                
                <li>
                    <a data-target="#setting-projek" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pengurusan-projek" href="#">
                        <i class="icon-gear"></i>&nbsp; Tetapan Maklumat
                        <span style="margin-right: 20px;" class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul id="setting-projek" class="collapse">
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Jenis Permohonan', '/', array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Jenis Urusan', '/', array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Ahli Jawatankuasa', '/', array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Item Jadual D', '/', array('escape' => false)); ?></li>                        
                    </ul>
                </li>
            </ul>
        </li>
        <li class="panel">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pengurusan-taman">
                <i class="icon-puzzle-piece"></i> Pengurusan Taman
                <span class="pull-right"><i class="icon-angle-left"></i></span>              
            </a>
            <ul class="collapse" id="pengurusan-taman">
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Permohonan Penyelenggaraan', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Senarai Taman', '/', array('escape' => false)); ?></li>                                
                <li>
                    <a data-target="#setting-taman" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pengurusan-taman" href="#">
                        <i class="icon-gear"></i>&nbsp; Tetapan Maklumat
                        <span style="margin-right: 20px;" class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul id="setting-taman" class="collapse">
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Kategori Aset', '/', array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Landskap Lembut', '/', array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Landskap Kejur', '/', array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('<i class="icon-angle-right"></i> Alat Penyelenggaraan', '/', array('escape' => false)); ?></li>
                    </ul>
                </li>
            </ul>
        </li>        
        <li class="panel">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#inventori">
                <i class="icon-beaker"></i> Inventori
                <span class="pull-right"><i class="icon-angle-left"></i></span>              
            </a>
            <ul class="collapse" id="inventori">
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Pemetaan', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Landskap Lembut', '/', array('escape' => false)); ?></li>                
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Landskap Kejur', '/', array('escape' => false)); ?></li>                
            </ul>
        </li>
        <li class="panel">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#industri-landskap">
                <i class="icon-trello"></i> Industri Landskap
                <span class="pull-right"><i class="icon-angle-left"></i></span>              
            </a>
            <ul class="collapse" id="industri-landskap">
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Kontraktor', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Perunding', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Pembekal', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Agensi Pelaksana', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Agensi Antarabangsa', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> NGO & Badan Ikhtisas', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Institusi Pendidikan', '/', array('escape' => false)); ?></li>                
            </ul>
        </li>
        <li class="panel">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#penyelidikan-landskap">
                <i class="icon-beaker"></i> Penyelidikan Landskap
                <span class="pull-right"><i class="icon-angle-left"></i></span>              
            </a>
            <ul class="collapse" id="penyelidikan-landskap">
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Rekabentuk & Teknologi', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Pemuliharaan & Pemulihan', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Taman Botani', '/', array('escape' => false)); ?></li>
                <li class=""><?php echo $this->Html->link('<i class="icon-angle-right"></i> Rujukan R&D', '/', array('escape' => false)); ?></li>
            </ul>
        </li>        
        <li class="panel">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#tetapan">
                <i class="icon-gears"></i> Tetapan
                <span class="pull-right"><i class="icon-angle-left"></i></span>              
            </a>
            <ul class="collapse" id="tetapan">                
                <li class=""><a href="icon.html"><i class="icon-angle-right"></i> Icons </a></li>
                <li class=""><a href="progress.html"><i class="icon-angle-right"></i> Progress </a></li>               
            </ul>
        </li>        

</div>