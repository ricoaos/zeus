@extends('layouts.app')

@section('content')

<div class="content-wrapper" style=' height:1000px'>
	<div class="row">
		<div class="col-lg-12 heading">
            <h1 class="page-header"><i class="ec-pencil2"></i>Adicionar Funcionário</h1>
            
        </div>
	</div>
	
	<?php if(!empty($this->msg)):?>
		<?php if($this->msg == 2) :?>
			<div class="alert alert-success fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
				<i class="fa-ok alert-icon s24"></i>
				<strong>Registro gravado com sucesso!</strong>
			</div>
		<?php else :?>
			<div class="alert alert-danger fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
				<strong>Ocorreu um erro ao gravar!</strong>
			</div>
		<?php endif;?>
	<?php endif;?>
	
	<form id="formCadastro" class="form-horizontal group-border hover-stripped" role="form" method="post" action="">
		
	</form>		
</div>

@endsection


