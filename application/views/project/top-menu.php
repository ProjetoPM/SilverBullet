<div id="page-wrapper">
<br>
<!-- slr tool -->
<div class="row">
   <div class="col-md-12">
      <div class="panel panel-default">   
         <div class="panel-body text-justify">
            <div class="panel-body text-center">
               <h2 class="section-title mb-2 h1"><?= $project[0]->title;?></h2>
               <a class="btn btn-workflow btn-lg" href="<?=base_url("Project/cost".$project[0]->project_id)?>">COST</a>
               <a class="btn btn-workflow btn-lg" href="<?=base_url("Dashboard/index".$project[0]->project_id)?>">DASHBOARD</a>
               <a class="btn btn-workflow btn-lg" href="<?=base_url("GerenciarCustos/addnew/".$project[0]->project_id)?>">COST</a>
               <a class="btn btn-workflow btn-lg" href="<?=base_url()?>/procurement/add/<?php echo $project[0]->project_id;?>">PROCUREMENT</a>
               <a class="btn btn-workflow btn-lg" href="<?=base_url()?>risk/add/<?php echo $project[0]->project_id;?>">RISKS</a>
                
               <a class="btn btn-workflow btn-lg" href="<?php base_url('GerenciarCustos/addnew/') ?>">
               BOTAO ETC
               <a class="btn btn-workflow btn-lg" href="<?=base_url("Human_resource/human_resource_form/".$project[0]->project_id) ?>">
               HUMAN RESOURCE
               </a>
               <a class="btn btn-workflow btn-lg" href="<?=base_url("Schedule/schedule_form/".$project[0]->project_id) ?>">
               SCHEDULE
               <a class="btn btn-workflow btn-lg" href="<?=base_url()?>Charter_Quality/addnew/<?php echo $project[0]->project_id;?>">PMQ</a>
               </a>
               <a class="btn btn-workflow btn-lg" href="<?=base_url("Controller/Metodo/".$project[0]->project_id) ?>">
               BOTÃO 5
               </a>
               <a class="btn btn-workflow btn-lg" href="<?=base_url("Charter_Quality/addnew/".$project[0]->project_id) ?>">
               PMQ
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.slr tool-->