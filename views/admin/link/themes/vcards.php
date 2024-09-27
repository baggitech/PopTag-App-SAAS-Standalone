
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAbstract" aria-expanded="true" aria-controls="collapseAbstract"> Abstract </button>
                  </h2>
                  <div id="collapseAbstract" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'abstract'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBusiness&Work" aria-expanded="false" aria-controls="collapseBusiness&Work"> Business & Work </button>
                  </h2>
                  <div id="collapseBusiness&Work" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'business & work'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGradient" aria-expanded="false" aria-controls="collapseGradient"> Gradient </button>
                  </h2>
                  <div id="collapseGradient" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'gradient'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHealth&Wellness" aria-expanded="false" aria-controls="collapseHealth&Wellness"> Health & Wellness </button>
                  </h2>
                  <div id="collapseHealth&Wellness" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'health & wellness'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLandscapes" aria-expanded="false" aria-controls="collapseLandscapes"> Landscapes </button>
                  </h2>
                  <div id="collapseLandscapes" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'landscapes'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLifestyle" aria-expanded="false" aria-controls="collapseLifestyle"> Lifestyle </button>
                  </h2>
                  <div id="collapseLifestyle" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'lifestyle'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeople&Culture" aria-expanded="false" aria-controls="collapsePeople&Culture"> People & Culture </button>
                  </h2>
                  <div id="collapsePeople&Culture" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'people & culture'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSolid" aria-expanded="false" aria-controls="collapseSolid"> Solid </button>
                  </h2>
                  <div id="collapseSolid" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'solid'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTechnology" aria-expanded="false" aria-controls="collapseTechnology"> Technology </button>
                  </h2>
                  <div id="collapseTechnology" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3 mt-2 b2d rounded">  

                    <form action="" method="POST" enctype="multipart/form-data">
                      <div id="container">
                        <div class="row justify-content-start">

                            <?php foreach ($theme as $value): ?>
                            <?php if($value['type'] == 'technology'): ?>
                            <div class="col-sm-4">
                              <div class="card border shadow mb-3">
                                <div class="card-body d-flex justify-content-center">
                                  <img class="img-fluid" src="<?=ASSETS_PATH;?>images/themes/<?=$value['image'];?>" alt="">
                                </div>
                                <div class="card-footer">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="theme" id="<?=$value['name'];?>" value="<?=$value['name'];?>">
                                    <label class="form-check-label" for="theme"><?=$value['name'];?></label>
                                  </div>                       
                                </div>                      
                              </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>


