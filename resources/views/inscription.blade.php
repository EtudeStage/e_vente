 @extends('layouts.master',['title'=>'Inscription'])

 @section('content')

       <form action="/inscription" method ="post" >
                       {{ csrf_field() }}

                               <div>
                                    <strong>
                                          <h1><u> Formulaire d'inscription</u></h1>

                                            <h3>Veuillez entrer vos informations</h3>
                                     </strong>
                              </div>
                                   <div class="form-group">
                                       <label class="col-md-6 control-label">Nom</label>
                                         <div class="col-md-6">
                                             <input type="texe" name="nom" placeholder="">
                                        </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-md-6 control-label">Prenom</label>
                                         <div class="col-md-6">
                                                <input type="texe" name="prenom" placeholder="">
                                          </div>
                                   </div>

                                   <div class="form-group">
                                         <label class="col-md-6 control-label">Adresse</label>
                                             <div class="col-md-6">
                                                <input type="texe" name="adresse" placeholder="">
                                             </div>
                                   </div>

                                   <div class="form-group">
                                        <label class="col-md-6 control-label">nationnalite</label>
                                          <div class="col-md-6">
                                               <input type="texe" name="nationnalite" placeholder="">
                                          </div>
                                   </div>
                                   <div class="form-group">
                                        <label class="col-md-6 control-label">sexe</label>
                                         <div class="col-md-6">
                                              <input type="text" name="sexe" placeholder="">
                                            </div>
                                   </div>

                                   <div class="form-group pt-2">
                                         <input type="submit" value="M'inscrire">
                                   </div>
              </form>
@endsection
