  <!-- Content -->
  <div id="content">
    <div class="section pt-5 bg-white">
      <div class="container"> 
        
        <!-- Author Details -->
        <div class="d-lg-flex text-center text-lg-start align-items-center mb-4">

          <div class="position-relative d-inline-flex me-4"> 
            <img class="profile-thumb rounded-circle border border-4" src="images/authors/author-11.jpg" alt=""> <span data-bs-toggle="tooltip" title="Verified Author" class="position-absolute bottom-0 end-0 translate-middle-y d-flex text-7 text-primary bg-white rounded-circle me-1">
              <i class="fas fa-check-circle"></i>
            </span> 
          </div>

          <div>

            <h1 class="text-9 mb-lg-0">Smith Rhodes</h1>

            <!--
            <div class="d-sm-flex gap-2 justify-content-center justify-content-lg-start align-items-center my-3 mt-lg-2 mb-lg-3">              
              <div class="text-primary fw-500 text-4">@smithrhodes</div>
              <button id="wallet-id" title="Copy Text" class="btn btn-sm rounded-pill py-0 shadow-none bg-light border text-secondary d-inline-flex align-items-center"> 
                <span id="wallet-id-inner" class="d-inline-block text-truncate">0x8ddf5cb4307f1c3b555625674b86e81258990b3c</span> 
                <span class="ms-2 text-4"><i class="far fa-copy"></i></span> 
              </button>
            </div>
            -->

            <div class="text-3 fw-500 mb-3 mb-lg-0"> 
              <a class="link-dark" href="" data-bs-toggle="modal" data-bs-target="#followersModal">2.4K 
                <span class="link-secondary fw-normal">followers</span>
              </a> 
              <span class="text-muted opacity-5 fw-400 mx-2">|</span> 
              <a class="link-dark" href="" data-bs-toggle="modal" data-bs-target="#followingModal">5 
                <span class="link-secondary fw-normal">following</span>
              </a> 
            </div>

          </div>

          <div class="d-sm-inline-flex ms-auto"> 
            <a href="#" class="btn btn-sm btn-primary shadow-none m-1" role="button">Follow</a> 
            <a href="#" class="btn btn-sm link-secondary border shadow-none m-1 text-nowrap" role="button">Send Message</a>
            <ul class="list-group list-group-horizontal justify-content-center m-1">
              <li class="list-group-item dropdown p-0" data-bs-toggle="tooltip" title="Share this page"> 
                <a href="#" class="btn-sm link-secondary d-block" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-share-alt"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownShare">
                  <li>
                    <h6 class="dropdown-header">Share this page</h6>
                    <ul class="social-icons social-icons-lg flex-nowrap px-3">
                      <li class="social-icons-twitter">
                        <a data-bs-toggle="tooltip" href="#" target="_blank" title="Twitter">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="social-icons-facebook">
                        <a data-bs-toggle="tooltip" href="" target="_blank" title="Facebook">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="social-icons-telegram">
                        <a data-bs-toggle="tooltip" href="#" target="_blank" title="Telegram">
                          <i class="fab fa-telegram-plane"></i>
                        </a>
                      </li>
                      <li class="social-icons-email">
                        <a data-bs-toggle="tooltip" href="#" target="_blank" title="E-mail">
                          <i class="fas fa-envelope"></i>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="list-group-item dropdown p-0" data-bs-toggle="tooltip" title="Other"> 
                <a href="#" class="btn-sm link-secondary d-block" role="button" id="dropdownOther" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-h"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownOther">
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="me-2">
                        <i class="fas fa-flag"></i>
                      </span>Report Page
                    </a>
                  </li>
                </ul>
              </li>
              <li class="list-group-item p-0"> 
                <a href="settings-profile.html" class="btn-sm link-secondary d-block" role="button" data-bs-toggle="tooltip" title="Edit Profile">
                  <i class="fas fa-edit"></i>
                </a> 
              </li>
            </ul>
          </div>

        </div>
        <!-- Author Details -->
        
        <ul class="nav nav-tabs nav-lg justify-content-sm-center fw-500 mb-4" id="collTab" role="tablist">
          <li class="nav-item"> 
            <a class="nav-link active" id="onsale-tab" href="#" data-bs-toggle="tab" data-bs-target="#tabOnsale" role="tab" aria-controls="tabOnsale" aria-selected="true">On Sale</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" id="owned-tab" href="#" data-bs-toggle="tab" data-bs-target="#tabOwned" role="tab" aria-controls="tabOwned" aria-selected="false">Owned</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" id="created-tab" href="#" data-bs-toggle="tab" data-bs-target="#tabCreated" role="tab" aria-controls="tabCreated" aria-selected="false">Created</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" id="liked-tab" href="#" data-bs-toggle="tab" data-bs-target="#tabLiked" role="tab" aria-controls="tabLiked" aria-selected="false">Liked</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" id="collections-tab" href="#" data-bs-toggle="tab" data-bs-target="#tabCollections" role="tab" aria-controls="tabCollections" aria-selected="false">Collections</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" id="activity-tab" href="#" data-bs-toggle="tab" data-bs-target="#activity" role="tab" aria-controls="activity" aria-selected="false">Activity</a> 
          </li>
        </ul>

        <div class="tab-content" id="collTabContent"> 
          
          <!-- Onsale Tab Content -->
          <div class="tab-pane fade show active" id="tabOnsale" role="tabpanel" aria-labelledby="onsale-tab"> 

            <!-- Filter -->
            <div class="row align-items-center g-2 my-4">
              <div class="col-auto col-lg-2">

                <select class="selectpicker form-control show-tick" data-style="form-select form-select-sm fw-500" title="Category" data-container="body">
                  <option data-icon="fas fa-border-all text-3 me-2" value="">All</option>
                  <option data-icon="fas fa-image text-3 me-2" value="">Art</option>
                  <option data-icon="fas fa-th text-3 me-2" value="">Collectibles</option>
                  <option data-icon="fas fa-search text-3 me-2" value="">Domain Names</option>
                  <option data-icon="fas fa-music text-3 me-1" value="">Music</option>
                  <option data-icon="fas fa-camera-retro text-3 me-1" value="">Photography</option>
                  <option data-icon="fas fa-running text-3 me-1" value="">Sports</option>
                  <option data-icon="fas fa-address-card text-3 me-1" value="">Trading Cards</option>
                  <option data-icon="fas fa-globe-americas text-3 me-1" value="">Virtual Worlds</option>
                </select>

              </div>
              <div class="col-auto col-lg-2">

                <select class="selectpicker form-control" data-style="form-select form-select-sm fw-500" title="Collections" data-container="body" data-live-search="true" data-live-search-placeholder="Search" data-size="6" data-allow-clear="true" multiple>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-2.jpg'> Liquidities" value="">Liquidities</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-6.jpg'> Paper Bag World" value="">Paper Bag World</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-5.jpg'> Patterfly" value="">Patterfly</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-9.jpg'> The Artificial" value="">The Artificial</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-10.jpg'> Sketchbook" value="">Sketchbook</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-1.jpg'> PhotoLution" value="">PhotoLution</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-8.jpg'> Tattoo Girl Art" value="">Tattoo Girl Art</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-3.jpg'> 3D Model" value="">3D Model</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/authors/author-11.jpg'> MX Clone" value="">MX Clone</option>
                </select>

              </div>
              <div class="col-auto col-lg-2">

                <select class="selectpicker form-control show-tick" data-style="form-select form-select-sm fw-500" title="Blockchain" data-container="body" data-allow-clear="true" multiple>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/chain/ethereum.png'> Ethereum" value="">Ethereum</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/chain/tezos.png'> Tezos" value="">Tezos</option>
                  <option data-content="<img class='rounded-circle me-2' alt='' src='images/chain/flow.png'> Flow" value="">Flow</option>
                </select>

              </div>
              <div class="col-auto col-lg-2 ms-lg-auto">

                <select class="selectpicker form-control show-tick" data-style="form-select form-select-sm fw-500" title="Sort by" data-container="body">
                  <optgroup label="Sort by">
                  <option value="">Recently added</option>
                  <option value="">Price: Low to High</option>
                  <option value="">Price: High to Low</option>
                  <option value="">Auction ending soon</option>
                  </optgroup>
                </select>

              </div>
            </div>
            <!-- End Filter --> 
            
            <!-- Items -->
            <div class="row g-4">

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/1.jpg" title="Philipp Potocnik" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: Olivia Samantha" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-2.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a> </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Philipp Potocnik</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li><a class="dropdown-item" href="#">Buy now</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">2.84 ETH <span class="text-muted ms-1">1/2</span></div>
                    <a class="btn-link fw-500" href="#">Buy now</a>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 251</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/2.jpg" title="Dan Farrell" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: Smith Rhodes" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-11.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a>
                    <div class="countdown position-absolute bottom-0 start-50 translate-middle-x d-inline-block lh-base fw-500 text-dark bg-white border border-primary border-2 rounded-pill shadow-md px-3 py-1 mb-n2" data-countdown-end="2022/09/22 12:00:00"></div>
                  </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Dan Farrell</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">Not for sale <span class="text-muted ms-1">x1</span></div>
                    <a class="btn-link fw-500" href="#">Place a bid</a>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 83</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/9.gif" title="Lowbrow Art Crying Animation" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: Poppy Joanne" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-4.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a>
                    <div class="countdown position-absolute bottom-0 start-50 translate-middle-x d-inline-block lh-base fw-500 text-dark bg-white border border-primary border-2 rounded-pill shadow-md px-3 py-1 mb-n2" data-countdown-end="2022/09/28 12:00:00"></div>
                  </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Lowbrow Art Crying Animation</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li><a class="dropdown-item" href="#">Buy now</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">1.025 ETH <span class="text-muted ms-1">1/1</span></div>
                    <a class="btn-link fw-500" href="#">Buy now</a>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 374</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/4.jpg" title="Boston Public Library" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: Jessica Liao Wei" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-1.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a> </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Boston Public Library</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">Not for sale <span class="text-muted ms-1">x1</span></div>
                    <span class="text-primary fw-500" data-bs-toggle="tooltip" title="Highest bid by Scott Nicole">Bid 3.4 wETH</span>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 14</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/6.jpg" title="Dark Rider" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: George Richard" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-9.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a>
                    <div class="countdown position-absolute bottom-0 start-50 translate-middle-x d-inline-block lh-base fw-500 text-dark bg-white border border-primary border-2 rounded-pill shadow-md px-3 py-1 mb-n2" data-countdown-end="2022/11/08 12:00:00"></div>
                  </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Dark Rider</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li><a class="dropdown-item" href="#">Buy now</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">0.15 ETH <span class="text-muted ms-1">1/2</span></div>
                    <a class="btn-link fw-500" href="#">Buy now</a>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 178</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/3.jpg" title="Happy Cute Avocado Exercising" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: James Charlie" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-5.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a> </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Happy Cute Avocado Exercising</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">Not for sale <span class="text-muted ms-1">x1</span></div>
                    <span class="text-primary fw-500" data-bs-toggle="tooltip" title="Highest bid by James Charlie">Bid 1.7 wETH</span>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 104</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/5.jpg" title="Pascal Bernardon" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: Matthew Betty" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-6.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a> </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Pascal Bernardon</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li><a class="dropdown-item" href="#">Buy now</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">0.035 ETH <span class="text-muted ms-1">1/5</span></div>
                    <a class="btn-link fw-500" href="#">Buy now</a>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 68</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/10.gif" title="Cat with Headphones" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: William Damian Thomas" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-7.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a>
                    <div class="countdown position-absolute bottom-0 start-50 translate-middle-x d-inline-block lh-base fw-500 text-dark bg-white border border-primary border-2 rounded-pill shadow-md px-3 py-1 mb-n2" data-countdown-end="2022/10/10 12:00:00"></div>
                  </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Cat with Headphones</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li><a class="dropdown-item" href="#">Buy now</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">0.009 ETH <span class="text-muted ms-1">1/1</span></div>
                    <a class="btn-link fw-500" href="#">Buy now</a>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 91</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/8.jpg" title="Liao Je Wei" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: Scott Nicole" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-12.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a> </div>
                  <div class="card-body px-0 pb-0">
                    <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                      <h4 class="text-3 link-dark text-truncate mb-0">Liao Je Wei</h4>
                      </a>
                      <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li><a class="dropdown-item" href="#">Buy now</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                          <li class="dropdown-divider"></li>
                          <li>
                            <h6 class="dropdown-header">Share this NFT</h6>
                            <ul class="social-icons flex-nowrap px-3">
                              <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-dark fw-500">0.15 ETH <span class="text-muted ms-1">1/2</span></div>
                    <a class="btn-link fw-500" href="#">Buy now</a>
                    <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 178</button>
                  </div>
                </div>
              </div>

              <div class="load-item col-sm-6 col-md-4 col-lg-3">
                <div class="nft-item card rounded-3 p-3">
                  <div class="nft-item-wrap position-relative d-flex align-items-center justify-content-center"> <a href="item-details.html"><img class="nft-item-img img-fluid d-flex rounded-3" src="images/items/7.jpg" title="Enzo Tommasi" alt=""></a> <a href="author.html" data-bs-toggle="tooltip" title="Creator: Nicholas Shirley" class="position-absolute top-0 start-0 rounded-circle border border-white border-2 mt-n2 ms-n2"> <img class="img-thumb-sm rounded-circle d-flex" src="images/authors/author-10.jpg" alt=""> <span class="position-absolute bottom-0 end-0 me-n1 d-flex text-3 bg-white text-primary rounded-circle"><i class="fas fa-check-circle"></i></span> </a>
                  <div class="countdown position-absolute bottom-0 start-50 translate-middle-x d-inline-block lh-base fw-500 text-dark bg-white border border-primary border-2 rounded-pill shadow-md px-3 py-1 mb-n2" data-countdown-end="2022/09/30 12:00:00"></div>
                  </div>
                  <div class="card-body px-0 pb-0">
                  <div class="d-flex align-items-center mb-3"> <a href="item-details.html" class="overflow-hidden me-2">
                    <h4 class="text-3 link-dark text-truncate mb-0">Enzo Tommasi</h4>
                    </a>
                    <div class="dropdown d-inline-block ms-auto"> <a href="#" class="nft-item-link text-muted me-n2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">New bid</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Refresh Data</a></li>
                      <li><a class="dropdown-item" href="#">Report</a></li>
                      <li class="dropdown-divider"></li>
                      <li>
                      <h6 class="dropdown-header">Share this NFT</h6>
                      <ul class="social-icons flex-nowrap px-3">
                        <li class="social-icons-twitter"><a target="_blank" data-bs-toggle="tooltip" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-facebook"><a target="_blank" data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="social-icons-telegram"><a target="_blank" data-bs-toggle="tooltip" title="Telegram" href="#"><i class="fab fa-telegram-plane"></i></a></li>
                        <li class="social-icons-email"><a target="_blank" data-bs-toggle="tooltip" title="E-mail" href="#"><i class="fas fa-envelope"></i></a></li>
                      </ul>
                      </li>
                    </ul>
                    </div>
                  </div>
                  <div class="text-dark fw-500">Not for sale <span class="text-muted ms-1">x1</span></div>
                  <a class="btn-link fw-500" href="#">Place a bid</a>
                  <button class="nft-item-like text-3 text-muted float-end mt-n2 me-n2" type="button" ><i class="far fa-heart"></i> 55</button>
                  </div>
                </div>
              </div>

            </div>

            <div class="text-center mt-5">
              <a href="#" class="loadmore btn btn-outline-primary shadow-none">Load more</a>
            </div>
            <!-- Items end --> 
            
          </div>
          <!-- End Onsale Tab Content --> 
          
          <!-- Owned Tab Content -->
          <div class="tab-pane fade" id="tabOwned" role="tabpanel" aria-labelledby="owned-tab"> 
            <div class="row">

            </div>            
          </div>
          <!-- End Owned Tab Content --> 
          
          <!-- Created Tab Content -->
          <div class="tab-pane fade" id="tabCreated" role="tabpanel" aria-labelledby="created-tab"> 
            <div class="row">

            </div>
          </div>
          <!-- End Created Tab Content --> 
          
          <!-- Liked Tab Content -->
          <div class="tab-pane fade" id="tabLiked" role="tabpanel" aria-labelledby="liked-tab"> 
            <div class="row">

            </div>
          </div>
          <!-- End Liked Tab Content --> 
          
          <!-- Collections Tab Content -->
          <div class="tab-pane fade" id="tabCollections" role="tabpanel" aria-labelledby="collections-tab">
            <div class="row">

            </div>
          </div>
          <!-- End Collections Tab Content --> 
          
          <!-- Activity Tab Content -->
          <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
            <div class="row">

            </div>
          </div>
          <!-- End Activity Tab Content --> 
          
        </div>

      </div>
    </div>
  </div>
  <!-- Content end -->
  


