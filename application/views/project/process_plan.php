<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?=$this->lang->line('process-plan-title')?></h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<?php if($this->session->flashdata('success')):?>
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<strong><?php echo $this->session->flashdata('success'); ?></strong>
		</div>
		<?php elseif($this->session->flashdata('error')):?>
			<div class="alert alert-warning">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong><?php echo $this->session->flashdata('error'); ?></strong>
			</div>
		<?php endif;?>
		<div class="row">
			<div class="col-lg-12">
				<?php
				$valida=false;
				foreach ($process_plan as $process){
					if($process->project_id==$id){
						$valida=true;
						?>
						

						<form method="POST" action="<?php echo base_url('Process_plan/insert/'); ?><?php echo $id[0]; ?>">

							<div class=" col-lg-12 form-group">
								<label for="process_limits"><?=$this->lang->line('process-plan-limits')?></label> 
								<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-limits-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>

								<div >                 
									<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="process_limits" name="process_limits" ><?= $process_plan[0]->process_limits;?></textarea>  
								</div>
							</div>


							<div class="col-lg-12 form-group">
								<label for="process_improvement_plancol"><?=$this->lang->line('process-plan-config')?>
							</label>
							<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-config-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>
							<div >     
								<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="process_improvement_plancol" name="process_improvement_plancol"><?= $process_plan[0]->process_improvement_plancol;?></textarea>
							</div>
						</div>


						<div class="col-lg-12 form-group">
							<label for="process_metrics"><?=$this->lang->line('process-plan-metrics')?>
						</label>
						<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-metrics-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>
						<div >     
							<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="process_metrics" name="process_metrics"><?= $process_plan[0]->process_metrics;?></textarea>
						</div>
					</div>


					<div class=" col-lg-12 form-group">
						<label for="goals_performance_improvement"><?=$this->lang->line('process-plan-performance')?></label> 
						<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-performance-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>

						<div >                 
							<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="goals_performance_improvement" name="goals_performance_improvement"><?= $process_plan[0]->goals_performance_improvement;?></textarea>  
						</div>
					</div>				
				
				<div class="col-lg-12">
					<button id="process_plan-submit" type="submit" value="Save" class="btn btn-lg btn-success pull-right">
						<i class="glyphicon glyphicon-ok"></i> <?=$this->lang->line('btn-save')?>
					</button> 
				</form>

				<form action="<?php echo base_url('project/'); ?><?php echo $id; ?>" >
					<button class="btn btn-lg btn-info pull-left" >  <i class="glyphicon glyphicon-chevron-left"></i> <?=$this->lang->line('btn-back')?></button>
				</form>
				
			</div>
			<?php
		}
	}
	if($valida==false){
		?>
		<form method="POST" action="<?php echo base_url('Process_plan/insert/'); ?><?php echo $id[0]; ?>">

			<div class=" col-lg-12 form-group">
				<label for="process_limits"><?=$this->lang->line('process-plan-limits')?></label> 
				<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-limits-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>

				<div >                 
					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="process_limits" name="process_limits"></textarea>  
				</div>
			</div>


			<div class="col-lg-12 form-group">
				<label for="process_improvement_plancol"><?=$this->lang->line('process-plan-config')?>
			</label>
			<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-config-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>
			<div >     
				<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="process_improvement_plancol" name="process_improvement_plancol"></textarea>
			</div>
		</div>


		<div class="col-lg-12 form-group">
			<label for="process_metrics"><?=$this->lang->line('process-plan-metrics')?>
		</label>
		<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-metrics-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>
		<div >     
			<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="process_metrics" name="process_metrics"></textarea>
		</div>
	</div>


	<div class=" col-lg-12 form-group">
		<label for="goals_performance_improvement"><?=$this->lang->line('process-plan-performance')?></label> 
		<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('process-plan-performance-tooltip')?>"><i class="glyphicon glyphicon-comment"></i></a>

		<div >                 
			<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" id="goals_performance_improvement" name="goals_performance_improvement"></textarea>  
		</div>
	</div>

<div class="col-lg-12">
	<button id="process_plan-submit" type="submit" value="Save" class="btn btn-lg btn-success pull-right">
		<i class="glyphicon glyphicon-ok"></i> <?=$this->lang->line('btn-save')?>
	</button> 
</form>

<form action="<?php echo base_url('project/'); ?><?php echo $id; ?>" >
	<button class="btn btn-lg btn-info pull-left" >  <i class="glyphicon glyphicon-chevron-left"></i> <?=$this->lang->line('btn-back')?></button>
</form>

</div>
<?php
}
?>
</section>
</div>
</div>
<?php $this->load->view('frame/footer_view')?>