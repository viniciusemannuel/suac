@section('content')
<div class="main">

			<div class="main-inner">
				<div class="container">

					{{ Form::open(array('action' => 'PeoplesreferencesController@store', 'id' => 'edit-profile', 'class' => 'form-horizontal')) }}

					<div class="row">
						<div class="span12">
							<ol class="breadcrumb">
								<li>
									<a href="/"><i class="icon-dashboard"></i> Home</a>
								</li>
								<li>
									/ <a href="/peoplesref"> <i class="icon-group"></i> Pessoas referênciadas</a>
								</li>
								<li>
									/ <i class="icon-user"></i> Cadastrar pessoa referênciada
								</li>
							</ol>
						</div>
					</div>
					
					<br>


					<div class="row">
						<div class="span12">
							<div class="widget ">
								<div class="widget-header">
									<i class="icon-user"></i>
									<h3>Cadastrar pessoa referênciada</h3>
								</div>

								
								<div class="widget-content">
									<div class="tabbable">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#formcontrols" data-toggle="tab">Dados Pessoais</a>
											</li>
											<li class="">
												<a href="#jscontrols" data-toggle="tab">Dados sobre endereço</a>
											</li>
										</ul>

										<br>

										<div class="tab-content">
											<div class="tab-pane active" id="formcontrols">
													<fieldset>
														<div class="control-group">
															{{ Form::label('name','Nome completo:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('name',null,array('class' => 'span6', 'placeholder' => 'Nome completo') ) }}
															</div>
														</div>

														<div class="control-group">
															{{ Form::label('apelido','Apelido:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('apelido',null,array('class' => 'span6') ) }}
															</div>
														</div>

														<div class="control-group">
															{{ Form::label('namemather','Nome da mãe:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('namemather',null,array('class' => 'span6') ) }}
															</div>
														</div>

														<div class="control-group">
															{{ Form::label('namefather','Nome do pai:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('namefather',null,array('class' => 'span6') ) }}
															</div>
														</div>

														<div class="control-group">
															{{ Form::label('nis','Nº do NIS:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('nis',null,array('class' => 'span6','placeholder' => 'Número do NIS da pessoa referenciada') ) }}
															</div>
														</div>

														<div class="control-group">
															{{ Form::label('cpf','Nº do CPF:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('cpf',null,array('class' => 'span6','placeholder' => 'Somente os números') ) }}
															</div>
														</div>

														<div class="control-group">
															{{ Form::label('rg','Nº do Registro de Identendidade:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('rg',null,array('class' => 'span6','placeholder' => 'Somente os números') ) }}
															</div>
														</div>

														<div class="control-group">
															<label class="control-label" for="email">Orgão expedidor:</label>
															<div class="controls">
																
																<SELECT>
																	<OPTION>SSP</OPTION>
																</SELECT>

															</div>
														</div>

														<div class="control-group">
															<label class="control-label" for="email">UF do RG:</label>
															<div class="controls">

																<SELECT>
																	<OPTION>BH</OPTION>
																	<OPTION>CE</OPTION>
																	<OPTION>PE</OPTION>
																</SELECT>


															</div>
														</div>

														<div class="control-group">
															{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('emitedrg',null,array('class' => 'span2','placeholder' => 'DDMMAAAA') ) }}
															</div>
														</div>

														<div class="control-group">
															{{ Form::label('numprotuario','Nº do prontuário:',array('class' => 'control-label') ) }}
															<div class="controls">
																{{ Form::text('numprotuario',null,array('class' => 'span6','placeholder' => 'Somente os números') ) }}
															</div>
														</div>
														
														<div class="control-group">
															<label class="control-label">Tipo de unidade</label>

															<div class="controls">
																<label class="radio inline">
																	<input type="radio" name="radiobtns">
																	CRAS </label>

																	<label class="radio inline">
																		<input type="radio" name="radiobtns">
																		CREAS </label>
																	</div>
																</div>

																<div class="control-group">
																	<label class="control-label" for="email">Nome da Unidade:</label>
																	<div class="controls">

																		<SELECT>
																			<OPTION>Centro</OPTION>
																			<OPTION>Alto Manoel Marioano</OPTION>
																			<OPTION>BNH</OPTION>
																		</SELECT>
																	</div>
																</div>
																<!-- /Até aqui -->

															</fieldset>
													</div>

													<div class="tab-pane" id="jscontrols">
															<fieldset>

																<div class="control-group">
																	{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
																	<div class="controls">
																		{{ Form::text('rua',null,array('class' => 'span6','placeholder' => 'Rua ou avenida') ) }}
																	</div>
																</div>

																<div class="control-group">
																	{{ Form::label('logradouro','Bairro:',array('class' => 'control-label') ) }}
																	<div class="controls">
																		{{ Form::text('logradouro',null,array('class' => 'span6') ) }}
																	</div>
																</div>
																
																<div class="control-group">
																	{{ Form::label('cep','CEP:',array('class' => 'control-label') ) }}
																	<div class="controls">
																		{{ Form::text('cep',null,array('class' => 'span6','placeholder' => 'Somente números') ) }}
																	</div>
																</div>

																<div class="control-group">
																	<label class="control-label" for="email">Municipio:</label>
																	<div class="controls">

																		<SELECT>
																			<OPTION>Icó</OPTION>
																			<OPTION>Russas</OPTION>
																			<OPTION>Jaguaribe</OPTION>
																		</SELECT>
																	</div>
																</div>

																<div class="control-group">
																	{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
																	<div class="controls">
																		{{ Form::text('complemento',null,array('class' => 'span6','placeholder' => 'Casa / Apartamento / Condominio') ) }}
																	</div>
																</div>

																<div class="control-group">
																	{{ Form::label('pointreference','Ponto de referência:',array('class' => 'control-label') ) }}
																	<div class="controls">
																		{{ Form::text('pointreference',null,array('class' => 'span6','placeholder' => 'Escola / Hospital / Empresa') ) }}
																	</div>
																</div>

																<div class="control-group">
																	{{ Form::label('telephone1','Telefone para contato 1:',array('class' => 'control-label') ) }}
																	<div class="controls">
																		{{ Form::text('telephone1',null,array('class' => 'span6') ) }}
																	</div>
																</div>

																<div class="control-group">
																	{{ Form::label('telephone2','Telefone para contato 2:',array('class' => 'control-label') ) }}
																	<div class="controls">
																		{{ Form::text('telephone2',null,array('class' => 'span6') ) }}
																	</div>
																</div>

																<div class="control-group">
																	<label class="control-label">Localização do domicilio</label>

																	<div class="controls">
																		<label class="radio inline">
																			<input type="radio" name="radiobtns">
																			Urbano </label>

																			<label class="radio inline">
																				<input type="radio" name="radiobtns">
																				Rural </label>
																			</div>
																		</div>

																		<!-- /Até aqui -->

																	</fieldset>
															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

									<div class="form-actions">

										{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

										{{ HTML::link('/peoplesref','Cancelar', array('class' => 'btn')) }}
										
									</div>

									{{ Form::close() }}

								</div>

							</div>

						</div>

						@stop