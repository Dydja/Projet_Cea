@extends("espaces.template")

@section("menu")
 @include("espaces.menu.menu2")
@endsection

@section("container")

		<!-- Main content -->
		<section class="content" >

			<!--/.col (left) style="display: flex;align-item;position:absolute;justify-content:space-between;top:50px;left:50px;transform:translate(-50%,50%)"-->
			<!-- right column -->

             <!--Message d'alerte de succes-->
                @if(session()->has("success"))
                    <div class="alert alert-success alert-dismissible">
                    <h3>  {{ session()->get('success') }}</h3>
                    </div>
                @endif
            <!--EndMessage -->

			<div class="col-12" >
			  <!-- Horizontal Form -->
			  <div class="box" >
                <!--<p>Vous avez //{ auth()->user()->file->count() }} documents <button>Voir les documents</button></p>-->
				<div class="box-header with-border">
				  <h4 class="box-title">Formulaire de soumission de votre document</h4>
				</div>
                <!--gestion des erreurs-->
                   @if ($errors->any())
                   <div class="alert alert-danger alert-dismissible">
                       <ul>
                        @foreach ($errors->all() as $error )
                          <li>{{ $error }}</li>
                        @endforeach
                       </ul>
                   </div>
                   @endif
                    <!--End gestion -->
                <form class="form" method="post" enctype="multipart/form-data" action="{{ route('traitement.document') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <h5 class="form-label">Titre <span class="text-danger">*</span></h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="titre du document" name="title">
                            </div>
                        </div>

                        <div class="form-group">
                            <h5>Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea  name="description" class="form-control"  placeholder="une courte description du document"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Type du document<span class="text-danger">*</span></h5>
                            <select class="form-select" name="gerant_id">
                                <option>Choose</option>
                                @foreach ($manager as $gerants)
                                <option value="{{ $gerants->id }}">{{ $gerants->fonctions}}</option>
                                @endforeach
                            </select>
                          </div>

                        <div class="form-group">
                            <h5>Selectionne le document<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="file" multiple class="form-control" accept="image/pdf,image/docx" required>
                            </div>
                        </div>
                        </div>
                        <div class="box-footer small-footer">
                            <a href="{{ route('customer.dashboard') }}" class="btn btn-warning me-1" ><i class="ti-trash"></i> Annuler</a>

                            <button type="submit" class="btn btn-primary">
                              <i class="ti-save-alt"></i> Envoyer
                            </button>

                        </div>
                    </div>
                    <!-- /.box-body -->

                </form>


				<!-- /.box-header -->
				<!-- form start -->
				<!--<form class="form-horizontal form-element">
				  <div class="box-body">
					<div class="form-group row">
					  <label for="title" class="col-sm-2 form-label">Titre</label>

					  <div class="col-sm-10">
						<input type="text" class="form-control" name="title" placeholder="Entrer le titre du document">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="inputPassword3" class="col-sm-2 form-label">Password</label>

					  <div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="ms-auto col-sm-10">
						<div class="checkbox">
							<input type="checkbox" id="Remember">
							<label for="Remember">Remember me</label>
						</div>
					  </div>
					</div>
				  </div>
				  /.box-body
				  <div class="box-footer">
					<button type="submit" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Sign in</button>
				  </div>
				   /.box-footer
				</form>-->
			  </div>
			  <!-- /.box -->

			</div>
			<!--/.col (right) -->
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->

@endsection




